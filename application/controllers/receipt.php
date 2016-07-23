<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 include_once APPPATH.'/third_party/mpdf/mpdf.php';
class Receipt extends MY_Controller {
    
    public function all()
    {
        $this->load->model('receipt_model');
        $data['js'] = array('common');
        $data['query_receipt_list'] = $this->receipt_model->viewall();
        $this->loadView('receipt/receipt_list',$data);
    }
    public function edit($receipt_id = '')
    {
        $data = $this->set_form_data($receipt_id);
        $data['js'] = array('common');
        $this->loadView('receipt/receipt_edit',$data);          
    }
    public function view($receipt_transaction_id = '')
    {
     
        $data = $this->set_form_data($receipt_transaction_id);
        $data['js'] = array('common');
        $this->loadView('receipt/receipt_view',$data);          
    }
    public function create_receipt()
    {
        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $this->load->model('receipt_model');
            $this->load->model('store_model');
            $receipt_id = $this->input->post('receipt_id');
            $summary_text = $this->input->post('summary_text');
            $summary_value = $this->input->post('summary_value');
            log_message('debug','----------PROCESSING=========='.$summary_text);
            $query_receipt = $this->receipt_model->find_by_id($receipt_id);
            $query_store = $this->store_model->find_store_detail($query_receipt->row()->store_code);           
             $receipt = new stdClass;
             $receipt->status =  'created';
             $filepath =  $this->create_receipt_pdf($receipt_id,'',$thai_barcode,FALSE,$summary_text,$summary_value);
             $filepath_copy =  $this->create_receipt_pdf($receipt_id,'',$thai_barcode,TRUE,$summary_text,$summary_value);    
             $receipt->receipt_url = $filepath;
             $receipt->receipt_copy_url = $filepath_copy;
             if(!empty($summary_value))
             {
                $sum_price = $summary_value;
                $receipt->sum_price= $summary_value;
                
               $receipt->less_gp = $sum_price * $query_receipt->row()->gp * 0.01;
               $receipt->total = $sum_price * (100-$query_receipt->row()->gp)/100;
               $total_before_tax = round($receipt->total/1.07,2);  
            
                $receipt->output['vat'] = $total_before_tax * 0.07;
             }
             else
             { 
               
                    $receipt_object = $this->receipt_model->find_by_id($receipt_id);
                    $grand_total = $receipt_object->row()->sum_price * (100-$query_receipt->row()->gp)/100;
                    $total_before_tax = round($grand_total/1.07,2);
                    $less_gp = $receipt_object->row()->sum_price *$query_receipt->row()->gp * 0.01;  
                    $vat = $total_before_tax*0.07;                              
                    $receipt->vat = $vat;
                    $receipt->less_gp = $less_gp;
                    $receipt->total = $grand_total; 
                
            }
             $this->receipt_model->update_receipt($receipt,$receipt_id);     
       
        } 
         redirect('receipt/all','refresh');  
    }
    public function create_receipt_pdf($receipt_id,$row_per_page = '',$thai_barcode='',$is_copy='',$summary_text,$summary_value)
    {
            if(empty($row_per_page))
            {
               $row_per_page = 30;
            }
            $minimum_row_full_page = 15;
            $html = '';
           $html_header = '';
           $output =  array();
           $this->load->model('receipt_model');
           $this->load->model('store_model');
           $query_receipt = $this->receipt_model->find_by_id($receipt_id);
           $query_receipt_detail = $this->receipt_model->find_receipt_detail_by_receipt_id($query_receipt->row()->id);
           $query_store = $this->store_model->find_store_detail($query_receipt->row()->store_code);
           $output['store_detail'] = $query_store->row();
           $output['receipt_no'] =$query_receipt->row()->receipt_no;
           $output['create_date']  = date('d/m/Y',strtotime($query_receipt->row()->create_date));
           $output['thai_barcode'] = $thai_barcode;
           $output['ref_order_no'] = $query_receipt->row()->ref_order_no; $is_series = $query_receipt->row()->is_series;
           $output['is_copy'] = $is_copy;
           log_message('DEBUG','SUMMARY----DESCRIPTION'.$query_receipt->row()->sum_description);
           $output['summary_text'] = $query_receipt->row()->sum_description;
           $output['receipt'] = TRUE;
           $output['summary_value'] = $query_receipt->row()->sum_price;
           $output['percent_discount'] = $query_receipt->row()->percent_discount;
           $output['gp'] = $query_receipt->row()->gp;
           $output['special_discount'] = $query_receipt->row()->special_discount;
           $output['customer_code'] = $query_receipt->row()->customer_code;
			$output['custom_tax_id'] = $query_receipt->row()->custom_tax_id;
			$output['custom_store_address'] = $query_receipt->row()->custom_store_address;
			$output['custom_store_name'] = $query_receipt->row()->custom_store_name;
			$output['custom_store_code'] = $query_receipt->row()->custom_store_code;
           $year = date('Y');  
           if (!file_exists(FCPATH.'assets'.DS.'report'.DS.$year)) {
                mkdir(FCPATH.'assets'.DS.'report'.DS.$year, 0777, true);
           }
           $pdfFilePath='';
            if($is_copy)
            {
                log_message('DEBUG','-****------- COPY ------- ****---');
                $pdfFilePath=FCPATH.'assets'.DS.'report'.DS.$year.DS.$query_receipt->row()->receipt_no.'-copy.pdf';    
            }
            else
            {

                log_message('DEBUG','-****------- REAL ISSUE ------- ****---');
                $pdfFilePath=FCPATH.'assets'.DS.'report'.DS.$year.DS.$query_receipt->row()->receipt_no.'.pdf';
           
            }
            ini_set('memory_limit','512M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley"> 
            $html_header = $this->load->view('invoice/receipt_header', $output, true);
            // render the view into HTML
            $css = file_get_contents("assets".DS."css".DS."receipt.css");
            $css2 = file_get_contents("assets".DS."css".DS."bootstrap.css");
            
            $pdf =  new mPDF('utf-8','A4','','',10,10,70,0,10,10);

            $pdf->useOddEven = 1;  
            $pdf->setHeader('{PAGENO}');
            $pdf->SetHTMLHeader($html_header,'E',TRUE);
            $pdf->SetHTMLHeader($html_header,'O',TRUE);
            //$pdf->AddPage();    
            $pdf->SetAutoFont(AUTOFONT_THAIVIET);
            //$data['sum_price'] = 0;

            $sum_price = 0;
            $last_page_item = 0;
            $page_count = 1;
            $row_count = 0;
            if(!empty($query_receipt->row()->sum_description))
            {   
                $pdf->AddPage();
                $sum_price = $query_receipt->row()->sum_price;
                $output['sum_price'] = $sum_price;
               
                $output['gp_value'] = $sum_price * $query_receipt->row()->gp * 0.01;  
                $output['grand_total'] = $sum_price * (100-$query_receipt->row()->gp)/100;
                if(!empty($output['special_discount']))
                {
                    $output['grand_total'] = $output['grand_total'] - $output['special_discount'];
                }
                $output['last_page'] = 'Y';
                $output['total_before_tax'] = round($output['grand_total']/1.07,2);
                $output['vat'] = $output['total_before_tax']*0.07;
                $output['grand_total_thai'] =  $this->convert(number_format((float)$output['grand_total'], 2, '.', ',')); 
                $last_html = $this->load->view('invoice/receipt', $output, true);
                $pdf->WriteHTML($css,1);
                $pdf->WriteHTML($css2,1); 
                $pdf->WriteHTML($last_html); // write the HTML into the PDF
            
            }
            if($query_receipt_detail->num_rows() > 0 )
            {
                $output['result_row'] = $query_receipt_detail->num_rows();
                $query_detail = $query_receipt_detail->result();

                for($index = 0 ; $index < $query_receipt_detail->num_rows(); $index+=$row_per_page )
                {
                    for($i = $index ; $i < $row_per_page *  $page_count; $i++)
                    {
                        $row_count ++;
                        if($row_count <= $query_receipt_detail->num_rows() )
                        {
                            $query_detail[$i]->index = $row_count;
                             $array_result[] = $query_detail[$i];
                             $sum_price +=  (double)($query_detail[$i]->price * $query_detail[$i]->amount);
                                
                        }
                    }
                    if($index+$row_per_page >= $query_receipt_detail->num_rows())
                    {
                        if($query_receipt_detail->num_rows()-$index<= $minimum_row_full_page )
                        {
                            log_message('debug','------LAST MODE --------');
                            $pdf->AddPage();
                             $output['sum_price'] = $sum_price;
                            
                            $output['gp_value'] = $sum_price * $query_receipt->row()->gp * 0.01;  
                            $output['grand_total'] = $sum_price * (100-$query_receipt->row()->gp)/100;
                            if(!empty($output['special_discount']))
                            {
                                $output['grand_total'] = $output['grand_total'] - $output['special_discount'];
                            }
                             $output['total_before_tax'] = round($output['grand_total']/1.07,2);
                             $output['vat'] = $output['total_before_tax']*0.07;
                             $output['grand_total_thai'] =  $this->convert(number_format((float)$output['grand_total'], 2, '.', ',')); 
                             $output['query_transaction_detail'] = $array_result;
                             $last_html = $this->load->view('invoice/receipt', $output, true);
                             $pdf->WriteHTML($css,1);
                             $pdf->WriteHTML($css2,1); 
                             $pdf->WriteHTML($last_html); // write the HTML into the PDF
                            
                        }
                        else
                        {

                            log_message('debug','------LAST MODE 2--------');
                            $pdf->AddPage();
                            $array_chunk = array_chunk($array_result, $row_per_page);
                            $output['sum_next_page'] =TRUE;
                            $output['query_transaction_detail'] = $array_chunk[0];
                            $last_html = $this->load->view('invoice/receipt', $output, true);
                            $pdf->WriteHTML($css,1);
                            $pdf->WriteHTML($css2,1);   
                            $pdf->WriteHTML($last_html); // write the HTML into the PDF
                          
                            //page 2 
                            $pdf->AddPage();
                            $output['sum_price'] = $sum_price;
                        
                            $output['gp_value'] = $sum_price * $query_receipt->row()->gp * 0.01;  
                            $output['grand_total'] = $sum_price * (100-$query_receipt->row()->gp)/100;                         
                             if(!empty($output['special_discount']))
                            {
                                $output['grand_total'] = $output['grand_total'] - $output['special_discount'];
                            }
                            $output['receipt_no'] = $query_receipt->row()->receipt_no;
                            $output['total_before_tax'] = round($output['grand_total']/1.07,2);
                            $output['vat'] = $output['total_before_tax']*0.07;
                            $output['grand_total_thai'] =  $this->convert(number_format((float)$output['grand_total'], 2, '.', ',')); 
                            $output['query_transaction_detail'] = $array_chunk[1];
                            $last_html2 = $this->load->view('invoice/receipt_summary', $output, true);
                            $pdf->WriteHTML($css,1);
                            $pdf->WriteHTML($css2,1);   
                            $pdf->WriteHTML($last_html2); // write the HTML into the PDF
                        }
                    }
                    else
                    {
                            log_message('debug','------NORMAL MODE --------');
                            
                            log_message('debug',' page');
                            $output['query_transaction_detail'] = $array_result;
                            log_message('DEBUG','QUERY TRANSACTION DETATIL'.json_encode($output['query_transaction_detail']));
                            log_message('debug','-------start row'.$output['start_row']);
                            $pdf->AddPage();
                            $html = $this->load->view('invoice/receipt', $output, true);
                            log_message('debug','-------OUTPUT ---------'.json_encode($output));
                            log_message('debug','-------HTML ---------'.json_encode($html));
                            $pdf->WriteHTML($css,1);
                            $pdf->WriteHTML($css2,1);   
                            $pdf->WriteHTML($html); // write the HTML into the PDF
                            $array_result = array();
                            $output['query_transaction_detail'] = array();
                            $page_count++;
                            $html = '';
                            $html_header = '';
                            //break;
                      
                    }
                }
            }

            $pdf->Output($pdfFilePath);
            $html = '';
            $html_header = '';
            
           // unset($this->pdf);
            if($is_copy)
            {
                return site_url(array('assets','report',$year,$query_receipt->row()->receipt_no.'-copy.pdf'));
            }
            else
            {
                return site_url(array('assets','report',$year,$query_receipt->row()->receipt_no.'.pdf'));
            }
    }
    public function create_issue_no($create_date = ''){
        $this->load->model('receipt_model');
        $next_issue_number = $this->receipt_model->get_next_issue_no($create_date);
        log_message('debug','create_issue_no'.$next_issue_number);
        return $next_issue_number;
    }
    public function delete ($receipt_id = '')
    {
        $this->load->model('receipt_model');
        $this->receipt_model->delete_receipt($receipt_id);
        redirect('receipt/all');

    }
    public function save()
    {

        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $data = $this->input->post('data');
            $store_code = $this->input->post('store_code');
            $create_date = $this->input->post('create_date');
            $receipt_id = $this->input->post('receipt_id');

        //    $receipt_issue_no = $this->input->post('receipt_issue_no');
            $receipt_no = $this->input->post('receipt_no');
            $ref_order_no = $this->input->post('ref_order_no');
            $status = $this->input->post('status');
            $sum_description = $this->input->post('sum_description');
            $sum_value = $this->input->post('sum_value');
            $percent_discount = $this->input->post('percent_discount');
            $special_discount = $this->input->post('special_discount');
            $gp = $this->input->post('gp');
            $customer_code = $this->input->post('customer_code');
			$custom_store_address  = $this->input->post('custom_store_address');
			$custom_tax_id = $this->input->post('custom_tax_id');
			$custom_store_code  = $this->input->post('custom_store_code');
			$custom_store_name = $this->input->post('custom_store_name');
            if(empty($percent_discount))
            {
                $percent_discount = null;
            }
           
            log_message('debug','receipt_id '.$receipt_id);
            if($create_date)
            {
                $create_date = DateTime::createFromFormat('d/m/Y', $create_date)->format('Y-m-d');
            }else{
                $create_date = date('Y-m-d');
            }
            $this->load->model('receipt_model');
            $this->load->model('store_model');
            
            $receipt = array('store_code'=>$store_code
                ,'create_date'=>$create_date
                ,'ref_order_no'=>$ref_order_no
                ,'receipt_no'=>$receipt_no
                ,'sum_description'=>$sum_description
                ,'percent_discount'=>$percent_discount
                ,'special_discount'=>$special_discount
                ,'sum_price'=>$sum_value
                ,'gp'=>$gp
                ,'customer_code'=>$customer_code
				,'custom_store_name'=>$custom_store_name
				,'custom_store_address'=>$custom_store_address
				,'custom_store_code'=>$custom_store_code
				,'custom_tax_id'=>$custom_tax_id
                );
            if($sum_description && $sum_value)
            {
                    $gp_value = $sum_value * $gp * 0.01;
                    $grand_total  = $sum_value * ((100-$gp)/100);
                    if(!empty($special_discount))
                    {
                        $grand_total = $grand_total-$special_discount;
                    }
                    $sum_value = $grand_total/1.07;
                    $vat = $sum_value*0.07;

                    $receipt['less_gp'] = $gp_value;
                    $receipt['vat'] =$vat;
                    $receipt['total'] = $grand_total;
            }
            if(!empty($status))
            {
                $receipt['status'] = $status;
            }
            if(!empty($receipt_id))
            {
                log_message('debug','receipt_id'.$receipt_id);
                $this->receipt_model->update_receipt($receipt,$receipt_id);
            }
            else
            {   
                $receipt_id = $this->receipt_model->insert_receipt($receipt);
            }
            if($data)
            {
                $sum_price = 0;
                $result = '';      
                $receipt_details = array();
                foreach ($data as $details) {
                    if(!empty($details['korea_barcode']))
                    {
                        log_message('debug',json_encode($details));
                        $receipt_details[] = array('product_korea_barcode'=>$details['korea_barcode'],'amount'=>$details['amount'],'price'=>$details['price'],'receipt_id'=>$receipt_id);
                        $sum_price += (float)$details['price'] * $details['amount'];
                    }               
                }

                if(!empty($receipt_details))
                {
                    $result = $this->receipt_model->update_receipt_detail($receipt_details,$receipt_id);
                }
                if(!empty($sum_price))
                {
                    $receipt['sum_price'] = $sum_price;                 
                    $gp_value = $sum_price * $gp * 0.01;
                    $grand_total  = $sum_price * ((100-$gp)/100);
                    if(!empty($special_discount))
                    {
                        $grand_total = $grand_total-$special_discount;
                    }
                    log_message('debug','grand_total'.$grand_total);
                    $sum_price = $grand_total/1.07;
                    $vat = $sum_price*0.07;

                    $receipt['less_gp'] = $gp_value;
                    $receipt['vat'] =$vat;
                    $receipt['total'] = $grand_total;
                    $result = $this->receipt_model->update_receipt($receipt,$receipt_id);
                }
            }
            if(empty($result) || $result === TRUE)
            {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result'=> 'ok','receipt_id'=>$receipt_id)));
            }
            else
            {

                    $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('result'=> 'error','receipt_id'=>$receipt_id,'msg'=>$result['msg'])));
            }
        }
    }
    public function set_form_data($receipt_id = '')
    {
        $this->load->model('product_model');
        $this->load->model('store_model');
        $this->load->model('receipt_model');
        $data['query_product_list'] = $this->product_model->viewall();
        $data['query_store_list'] = $this->store_model->viewall();
        $data['store_code'] = '';
        $data['receipt_id'] = '';
        //$data['receipt_issue_no'] = '';
        $data['create_date'] = date('d/m/Y');
        $data['sum_description'] = '';
        $data['receipt_detail'] = '';
        $data['receipt_no'] = '';
        $data['ref_order_no'] = '';
        $data['percent_discount'] = '';
        $data['special_discount'] = '';
        $data['status'] = '';
        $data['gp'] = '';
        $data['customer_code'] = '';
		$data['custom_store_name'] = '';
		$data['custom_store_address'] = '';
		$data['custom_store_code'] = '';
		$data['custom_tax_id'] = '';
        if(!empty($receipt_id))
        {
            $query_receipt = $this->receipt_model->find_by_id($receipt_id);
            $data['receipt_id'] = $query_receipt->row()->id;
            $create_date = $query_receipt->row()->create_date;
            $data['create_date'] = DateTime::createFromFormat('Y-m-d H:i:s', $create_date)->format('d/m/Y');
            $data['store_code'] = $query_receipt->row()->store_code;
            $data['receipt_no'] = $query_receipt->row()->receipt_no;
            $data['percent_discount'] = $query_receipt->row()->percent_discount;
            $data['status'] = $query_receipt->row()->status;
            $data['customer_code'] = $query_receipt->row()->customer_code;
            $data['special_discount'] = $query_receipt->row()->special_discount;
            $data['gp'] = $query_receipt->row()->gp;
            $data['custom_store_code'] = $query_receipt->row()->custom_store_code;
			$data['custom_store_name'] = $query_receipt->row()->custom_store_name;
			$data['custom_store_address'] = $query_receipt->row()->custom_store_address;
			$data['custom_tax_id'] = $query_receipt->row()->custom_tax_id;
			if($query_receipt->row()->sum_description)
            {
                $data['sum_value'] = $query_receipt->row()->sum_price;
                $data['sum_description'] = $query_receipt->row()->sum_description;
            }
            $query_receipt_detail = $this->receipt_model->find_receipt_detail_by_receipt_id($receipt_id);
            $data['receipt_detail'] = $query_receipt_detail;
        }else{

            $next_no  =  $this->create_issue_no(date('Y-m-d') );
            $data['receipt_no'] = 'REC'.date('ym').'-'.$next_no;
        }
        return $data;
    }
}
