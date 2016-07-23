<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 include_once APPPATH.'/third_party/mpdf/mpdf.php';
class Credit_note extends MY_Controller {
    
    public function all()
    {
        $this->load->model('credit_note_model');
        $data['js'] = array('common');
        $data['query_credit_note_list'] = $this->credit_note_model->viewall();
        $this->loadView('credit_note/credit_note_list',$data);
    }
    public function edit($credit_note_id = '')
    {

        $data = $this->set_form_data($credit_note_id);
        $data['js'] = array('common');
        $this->loadView('credit_note/credit_note_edit',$data);          
    }
    public function view($credit_note_id = '')
    {
        $data = $this->set_form_data($credit_note_id);
        $data['js'] = array('common');
        $this->loadView('credit_note/credit_note_view',$data);          
    }   
   
    public function create_credit_note()
    {
        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $this->load->model('credit_note_model');
            $this->load->model('store_model');
            $credit_note_id = $this->input->post('credit_note_id');
            $thai_barcode = $this->input->post('thai_barcode');
            $data = $this->input->post('data');
            $credit_note_object = $this->credit_note_model->find_by_id($credit_note_id);
             log_message('debug','----------PROCESSING==========');
          
             $credit_note = new stdClass;
             $credit_note->status =  'created';
             $filepath =  $this->create_credit_note_pdf($credit_note_id,'',$thai_barcode,FALSE);
             $filepath_copy =  $this->create_credit_note_pdf($credit_note_id,'',$thai_barcode,TRUE);    
             $credit_note->credit_note_url = $filepath;
             $credit_note->credit_note_copy_url = $filepath_copy;
             $query_store = $this->store_model->find_store_detail($credit_note_object->row()->store_code);
             $grand_total = $credit_note_object->row()->sum_price * (100-$credit_note_object->row()->gp)/100;
             $total_before_tax = round($grand_total/1.07,2);
             $less_gp = $credit_note_object->row()->sum_price *$credit_note_object->row()->gp * 0.01;  
             $vat = $total_before_tax*0.07;                              
             $credit_note->vat = $vat;
             $credit_note->less_gp = $less_gp;
             $credit_note->total = $grand_total; 
             $this->credit_note_model->update_credit_note($credit_note,$credit_note_id);     
       
        } 
         redirect('credit_note/all','refresh');  
    }
       public function view_file($invoice_id)
    {

            $filepath =  $this->create_credit_note_pdf($invoice_id,'',$thai_barcode,FALSE);
    }
    public function view_file_copy($invoice_id)
    {
        
            $filepath =  $this->create_credit_note_pdf($invoice_id,'',$thai_barcode,TRUE);
    }
    public function create_credit_note_pdf($credit_note_id,$row_per_page = '',$thai_barcode='',$is_copy='')
    {
            if(empty($row_per_page))
            {
               $row_per_page = 30;
            }
            $minimum_row_full_page = 15;
            $html = '';
           $html_header = '';
           $output =  array();
           $this->load->model('credit_note_model');
           $this->load->model('store_model');
           $query_credit_note = $this->credit_note_model->find_by_id($credit_note_id);
           $query_credit_note_detail = $this->credit_note_model->find_credit_note_detail_by_credit_note_id($query_credit_note->row()->id);
           $query_store = $this->store_model->find_store_detail($query_credit_note->row()->store_code);
           $output['store_detail'] = $query_store->row();
           $output['credit_note_no'] =$query_credit_note->row()->credit_note_no;
           $output['create_date']  = date('d/m/Y',strtotime($query_credit_note->row()->create_date));
           $output['thai_barcode'] = $thai_barcode;
           $output['credit_note'] = TRUE;
           $output['rtv']  = $query_credit_note->row()->rtv;
           $output['ref_invoice_no'] = $query_credit_note->row()->ref_invoice_no; $is_series = $query_credit_note->row()->is_series;
           $output['is_copy'] = $is_copy;
           $output['remark'] = $query_credit_note->row()->remark;
           $output['percent_discount'] = $query_credit_note->row()->percent_discount;
           $output['summary_text'] = $query_credit_note->row()->sum_description;
           $output['summary_value'] = $query_credit_note->row()->sum_price;
           $output['customer_code'] = $query_credit_note->row()->customer_code;
            $output['special_discount']  = $query_credit_note->row()->special_discount;
            $output['custom_tax_id'] = $query_credit_note->row()->custom_tax_id;
            $output['custom_store_address'] = $query_credit_note->row()->custom_store_address;
            $output['custom_store_name'] = $query_credit_note->row()->custom_store_name;
            $output['custom_store_code'] = $query_credit_note->row()->custom_store_code;
           $output['gp'] = $query_credit_note->row()->gp;
      
           $year = date('Y');  
           if (!file_exists(FCPATH.'assets'.DS.'report'.DS.$year)) {
                mkdir(FCPATH.'assets'.DS.'report'.DS.$year, 0777, true);
           }
           $pdfFilePath='';
            if($is_copy)
            {
                log_message('DEBUG','-****------- COPY ------- ****---');
                $pdfFilePath=FCPATH.'assets'.DS.'report'.DS.$year.DS.$query_credit_note->row()->credit_note_no.'-copy.pdf';    
            }
            else
            {

                log_message('DEBUG','-****------- REAL ISSUE ------- ****---');
                $pdfFilePath=FCPATH.'assets'.DS.'report'.DS.$year.DS.$query_credit_note->row()->credit_note_no.'.pdf';
           
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
              if(!empty($query_credit_note->row()->sum_description))
            {   
                $pdf->AddPage();
                $sum_price = $query_credit_note->row()->sum_price;
                $output['sum_price'] = $sum_price;
               
                $output['gp_value'] = $sum_price * $query_credit_note->row()->gp * 0.01;  
                $output['grand_total'] = $sum_price * (100-$query_credit_note->row()->gp)/100;
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
            if($query_credit_note_detail->num_rows() > 0 )
            {
                $output['result_row'] = $query_credit_note_detail->num_rows();
                log_message('debug',$query_credit_note_detail->num_rows().'NUMBER OF ROWS =='.$is_copy);
                $query_detail = $query_credit_note_detail->result();

                for($index = 0 ; $index < $query_credit_note_detail->num_rows(); $index+=$row_per_page )
                {
                    for($i = $index ; $i < $row_per_page *  $page_count; $i++)
                    {
                        $row_count ++;
                        if($row_count <= $query_credit_note_detail->num_rows() )
                        {
                            $query_detail[$i]->index = $row_count;
                             $array_result[] = $query_detail[$i];
                             $sum_price +=  (double)($query_detail[$i]->price * $query_detail[$i]->amount);
                            
                        }
                    }
                    if($index+$row_per_page >= $query_credit_note_detail->num_rows())
                    {
                        if($query_credit_note_detail->num_rows()-$index<= $minimum_row_full_page )
                        {
                            log_message('debug','------LAST MODE --------');
                            $pdf->AddPage();
                             $output['sum_price'] = $sum_price;
                            
                            $output['gp_value'] = $sum_price * $query_credit_note->row()->gp * 0.01;  
                            $output['grand_total'] = $sum_price * (100-$query_credit_note->row()->gp)/100;
                            if(!empty($query_credit_note->row()->$special_discount))
                             {
                                 $output['grand_total'] = $output['grand_total'] - $query_credit_note->row()->$special_discount;
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
                            $output['gp_value'] = $sum_price * $query_credit_note->row()->gp * 0.01;  
                            $output['grand_total'] = $sum_price * (100-$query_credit_note->row()->gp)/100;                         
                            if(!empty($query_credit_note->row()->$special_discount))
                             {
                                 $output['grand_total'] = $output['grand_total'] - $query_credit_note->row()->$special_discount;
                             }
                            $output['total_before_tax'] = round($output['grand_total']/1.07,2);
                            $output['sum_next_page'] =FALSE;
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

            $pdf->Output();
            $html = '';
            $html_header = '';
            
           // unset($this->pdf);
            if($is_copy)
            {
                return site_url(array('assets','report',$year,$query_credit_note->row()->credit_note_no.'-copy.pdf'));
            }
            else
            {
                return site_url(array('assets','report',$year,$query_credit_note->row()->credit_note_no.'.pdf'));
            }
    }
    public function create_issue_no($create_date = ''){
        $this->load->model('credit_note_model');
        $next_issue_number = $this->credit_note_model->get_next_issue_no($create_date);
        log_message('debug','create_issue_no'.$next_issue_number);
        return $next_issue_number;
    }
    public function delete ($credit_note_id = '')
    {
        $this->load->model('credit_note_model');
        $this->credit_note_model->delete_credit_note($credit_note_id);
        redirect('credit_note/all');

    }
    public function save()
    {
        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $data = $this->input->post('data');
            $store_code = $this->input->post('store_code');
            $create_date = $this->input->post('create_date');
            $credit_note_id = $this->input->post('credit_note_id');
            $is_series = $this->input->post('is_series');
            $percent_discount = $this->input->post('percent_discount');
            $special_discount = $this->input->post('special_discount');
            $sum_description = $this->input->post('sum_description');
            $sum_value = $this->input->post('sum_value');
            $custom_tax_id = $this->input->post('custom_tax_id');
            $custom_store_name = $this->input->post('custom_store_name');
            $custom_store_address = $this->input->post('custom_store_address');
            $custom_store_code = $this->input->post('custom_store_code');
            if(empty($percent_discount))
            {
                $percent_discount = null;
            }
        //    $credit_note_issue_no = $this->input->post('credit_note_issue_no');
            $credit_note_no = $this->input->post('credit_note_no');
            $ref_invoice_no = $this->input->post('ref_invoice_no');
            $rtv = $this->input->post('rtv');
            $remark = $this->input->post('remark');
            $status = $this->input->post('status');
            $customer_code = $this->input->post('customer_code');
            $gp = $this->input->post('gp');
            log_message('debug','credit_note_id '.$credit_note_id);
            if($create_date)
            {
                $create_date = DateTime::createFromFormat('d/m/Y', $create_date)->format('Y-m-d');
            }else{
                $create_date = date('Y-m-d');
            }
            $this->load->model('credit_note_model');
            $this->load->model('store_model');
            
            $credit_note = array('store_code'=>$store_code
                ,'create_date'=>$create_date
                ,'ref_invoice_no'=>$ref_invoice_no
                ,'remark'=>$remark
                ,'rtv'=>$rtv
                ,'credit_note_no'=>$credit_note_no
                ,'percent_discount'=>$percent_discount
                ,'sum_description'=>$sum_description
                ,'sum_price'=>$sum_value
                ,'special_discount'=>$special_discount
                ,'gp'=>$gp
                ,'customer_code'=>$customer_code
                );

            if(!empty($custom_tax_id)){
                $credit_note['custom_tax_id'] = $custom_tax_id;
            }
            if(!empty($custom_store_name)){
                $credit_note['custom_store_name'] = $custom_store_name;
            }
            if(!empty($custom_store_address)){
                $credit_note['custom_store_address'] = $custom_store_address;
            }
            if(!empty($custom_store_code)){
                $credit_note['custom_store_code'] = $custom_store_code;
            }

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

                    $credit_note['less_gp'] = $gp_value;
                    $credit_note['vat'] =$vat;
                    $credit_note['total'] = $grand_total;
            }
            if(!empty($status))
            {
                $credit_note['status'] = $status;
            }
            if(!empty($credit_note_id))
            {
                log_message('debug','credit_note_id'.$credit_note_id);
                $this->credit_note_model->update_credit_note($credit_note,$credit_note_id);
            }
            else
            {   
                $credit_note_id = $this->credit_note_model->insert_credit_note($credit_note);
            }
            if($data)
            {
                $sum_price = 0;
                $result = '';      
                $credit_note_details = array();
                foreach ($data as $details) {
                    if(!empty($details['korea_barcode']))
                    {
                        log_message('debug',json_encode($details));
                        $credit_note_details[] = array('product_korea_barcode'=>$details['korea_barcode'],'amount'=>$details['amount'],'price'=>$details['price'],'credit_note_id'=>$credit_note_id);
                        $sum_price += (float)$details['price'] * $details['amount'];
                    }               
                }

                if(!empty($credit_note_details))
                {
                    $result = $this->credit_note_model->update_credit_note_detail($credit_note_details,$credit_note_id);
                }
                if(!empty($sum_price))
                {
                    $credit_note['sum_price'] = $sum_price;
                    $gp_value = 0;
                    if($gp){
                        $gp_value = $sum_price * $gp * 0.01;
                    }
                    $grand_total  = $sum_price * ((100-$gp)/100);
                    if(!empty($special_discount))
                    {
                        $grand_total = $grand_total - $special_discount;
                    }
                    log_message('debug','grand_total'.$grand_total);
                    $sum_price = $grand_total/1.07;
                    $vat = $sum_price*0.07;

                    $credit_note['less_gp'] = $gp_value;
                    $credit_note['vat'] =$vat;
                    $credit_note['total'] = $grand_total;
                    $result = $this->credit_note_model->update_credit_note($credit_note,$credit_note_id);
                }
            }
            if(empty($result) || $result === TRUE)
            {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result'=> 'ok','credit_note_id'=>$credit_note_id)));
            }
            else
            {

                    $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('result'=> 'error','credit_note_id'=>$credit_note_id,'msg'=>$result['msg'])));
            }
        }
    }
    public function set_form_data($credit_note_id)
    {
        $this->load->model('product_model');
        $this->load->model('store_model');
        $this->load->model('credit_note_model');
        $data['query_product_list'] = $this->product_model->viewall();
        $data['query_store_list'] = $this->store_model->viewall();
        $data['store_code'] = '';
        $data['credit_note_id'] = '';
        $data['create_date'] = date('d/m/Y');
        $data['credit_note_detail'] = '';
        $data['credit_note_no'] = '';
        $data['ref_invoice_no'] = '';
        $data['remarl'] = '';
        $data['status'] = '';
        $data['gp'] = '';
        $data['customer_code'] = '';
        $data['sum_description'] = '';
        $data['percent_discount'] = '';
        $data['special_discount'] = '';
        $data['custom_tax_id'] = '';
        $data['custom_store_name'] = '';
        $data['custom_store_address'] = '';
        $data['custom_store_code'] = '';
		$data['rtv'] = '';
        if(!empty($credit_note_id))
        {
            $query_credit_note = $this->credit_note_model->find_by_id($credit_note_id);
            $data['credit_note_id'] = $query_credit_note->row()->id;
            $create_date = $query_credit_note->row()->create_date;
            $data['create_date'] = DateTime::createFromFormat('Y-m-d H:i:s', $create_date)->format('d/m/Y');
            $data['store_code'] = $query_credit_note->row()->store_code;
            $data['credit_note_no'] = $query_credit_note->row()->credit_note_no;
            $data['ref_invoice_no'] = $query_credit_note->row()->ref_invoice_no;
            $data['percent_discount'] = $query_credit_note->row()->percent_discount;
            $data['special_discount'] = $query_credit_note->row()->special_discount;
            $data['remark'] = $query_credit_note->row()->remark;
            $data['status'] = $query_credit_note->row()->status;
            $data['custom_tax_id'] = $query_credit_note->row()->custom_tax_id;
            $data['custom_store_name'] = $query_credit_note->row()->custom_store_name;
            $data['custom_store_address'] =  $query_credit_note->row()->custom_store_address;
            $data['custom_store_code'] =  $query_credit_note->row()->custom_store_code;
			$data['rtv'] = $query_credit_note->row()->rtv;
             if($query_credit_note->row()->sum_description)
            {
                $data['sum_value'] = $query_credit_note->row()->sum_price;
                $data['sum_description'] = $query_credit_note->row()->sum_description;
            }
            $data['gp'] = $query_credit_note->row()->gp;
            $data['customer_code'] = $query_credit_note->row()->customer_code;
            $query_credit_note_detail = $this->credit_note_model->find_credit_note_detail_by_credit_note_id($credit_note_id);
            $data['credit_note_detail'] = $query_credit_note_detail;
        }else{

            $next_no  =  $this->create_issue_no(date('Y-m-d') );
            $data['credit_note_no'] = 'CN'.date('ym').'-'.$next_no;
        }
        return $data;
    }
}
