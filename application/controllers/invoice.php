<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 include_once APPPATH.'/third_party/mpdf/mpdf.php';
class Invoice extends MY_Controller {
    
    public function all()
    {
        $this->load->model('invoice_model');
        $data['js'] = array('common');
        $data['query_invoice_list'] = $this->invoice_model->viewall();
        $this->loadView('invoice/invoice_list',$data);
    }
    public function edit($invoice_id = '')
    {
        
        $data = $this->set_form_data($invoice_id);
        $data['js'] = array('common');
        $this->loadView('invoice/invoice_edit',$data);          
    }
    public function view($invoice_id = '')
    {
        $data = $this->set_form_data($invoice_id);
        $data['js'] = array('common');
        $this->loadView('invoice/invoice_view',$data);          
    }
    public function cancel($invoice_id = '')
    {
        $invoice = array('status'=>'canceled');
        $this->load->model('invoice_model');
        $this->invoice_model->update_invoice($invoice,$invoice_id);
        redirect('invoice/all','refresh');          
    }
     public function save()
    {

        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $data = $this->input->post('data');
            $store_code = $this->input->post('store_code');
            $create_date = $this->input->post('create_date');
            $invoice_id = $this->input->post('invoice_id');
            $invoice_no = $this->input->post('invoice_no');
            $ref_order_no = $this->input->post('ref_order_no');
            $status = $this->input->post('status');
            $percent_discount = $this->input->post('percent_discount');
            $special_discount = $this->input->post('special_discount');
            $custom_tax_id = $this->input->post('custom_tax_id');
            $custom_store_name = $this->input->post('custom_store_name');
            $custom_store_address = $this->input->post('custom_store_address');
            $custom_store_code = $this->input->post('custom_store_code');
            if(empty($percent_discount))
            {
                $percent_discount = null;
            }
            $customer_code = $this->input->post('customer_code');
            $gp = $this->input->post('gp');
            log_message('debug','invoice_id '.$invoice_id);
            if($create_date)
            {
                $create_date = DateTime::createFromFormat('d/m/Y', $create_date)->format('Y-m-d');
            }else{
                $create_date = date('Y-m-d');
            }
            $this->load->model('invoice_model');
            $this->load->model('store_model');
            $invoice = array('store_code'=>$store_code
                ,'create_date'=>$create_date
                ,'ref_order_no'=>$ref_order_no
                ,'invoice_no'=>$invoice_no
                ,'percent_discount'=>$percent_discount
                ,'special_discount'=>$special_discount
                ,'gp'=>$gp
                ,'customer_code'=>$customer_code
            );

            if(!empty($custom_tax_id)){
                $invoice['custom_tax_id'] = $custom_tax_id;
            }
            if(!empty($custom_store_name)){
                $invoice['custom_store_name'] = $custom_store_name;
            }
            if(!empty($custom_store_address)){
                $invoice['custom_store_address'] = $custom_store_address;
            }
            if(!empty($custom_store_code)){
                $invoice['custom_store_code'] = $custom_store_code;
            }

            if(!empty($status))
            {
                $invoice['status'] = $status;
            }
            if(!empty($invoice_id))
            {
                log_message('debug','invoice_id'.$invoice_id);
                $this->invoice_model->update_invoice($invoice,$invoice_id);
            }
            else
            {   
                $invoice_id = $this->invoice_model->insert_invoice($invoice);
            }
            if($data)
            {
                $sum_price = 0;
                $result = '';      
                $invoice_details = array();
                foreach ($data as $details) {
                    if(!empty($details['korea_barcode']))
                    {
                        log_message('debug',json_encode($details));
                        $invoice_details[] = array('product_korea_barcode'=>$details['korea_barcode'],'amount'=>$details['amount'],'price'=>$details['price'],'invoice_id'=>$invoice_id);
                        $sum_price += (float)$details['price'] * $details['amount'];
                    }               
                }

                if(!empty($invoice_details))
                {
                    $result = $this->invoice_model->update_invoice_detail($invoice_details,$invoice_id);
                }
                if(!empty($sum_price))
                {
                    $invoice['sum_price'] = $sum_price;          
                    $gp_value = $sum_price * $gp * 0.01;
                    $grand_total  = $sum_price * ((100-$gp)/100) ;
                    if(!empty($special_discount))
                    {
                        $grand_total = $grand_total - $special_discount;
                    }
                    log_message('debug','grand_total'.$grand_total);
                    $sum_price = $grand_total/1.07;
                    $vat = $sum_price*0.07;

                    $invoice['less_gp'] = $gp_value;
                    $invoice['vat'] =$vat;
                    $invoice['total'] = $grand_total;
                    $result = $this->invoice_model->update_invoice($invoice,$invoice_id);
                }
            }
            if(empty($result) || $result === TRUE)
            {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result'=> 'ok','invoice_id'=>$invoice_id)));
            }
            else
            {

                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result'=> 'error','invoice_id'=>$invoice_id,'msg'=>$result['msg'])));
            }
        }
    }
    public function cut_invoice($invoice_transaction_id)
    {
        $this->load->model('invoice_model');
        $result = $this->invoice_model->cut_invoice($invoice_transaction_id);
        redirect('invoice/all','refresh');  
    }
    public function gen_stock($invoice_id)
    {
        $this->load->model('stock_model');
        $this->load->model('invoice_model');
        $result = $this->stock_model->generate_transaction_from_invoice($invoice_id);
        $invoice = array('status'=>'created');
        $this->invoice_model->update_invoice($invoice,$invoice_id);
        redirect('stock/all','refresh');
    }
    public function create_invoice()
    {
        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $this->load->model('invoice_model');
            $this->load->model('store_model');
            $invoice_id = $this->input->post('invoice_id');
         //   $special_code = $this->input->post('special_code');
	     //   $special_gp = $this->input->post('special_gp');
            $data = $this->input->post('data');
            $invoice = new stdClass;
            $invoice->status =  'created';           
            $invoice_object = $this->invoice_model->find_by_id($invoice_id);
            $filepath =  $this->create_invoice_pdf($invoice_id,'',$thai_barcode,FALSE);
            $filepath_copy =  $this->create_invoice_pdf($invoice_id,'',$thai_barcode,TRUE);    
            $invoice->invoice_url = $filepath;
            $invoice->invoice_copy_url = $filepath_copy;
            $query_store = $this->store_model->find_store_detail($invoice_object->row()->store_code);
            log_message('DEBUG','invoice object '.$invoice_object->row()->sum_price);

            $grand_total = $invoice_object->row()->sum_price * (100-$invoice_object->row()->gp)/100;
            $total_before_tax = round($grand_total/1.07,2);
            $less_gp = $invoice_object->row()->sum_price * $invoice_object->row()->gp * 0.01;  
            $vat = $total_before_tax*0.07;                              
            $invoice->vat = $vat;
            $invoice->less_gp = $less_gp;
            $invoice->total = $grand_total; 
            $this->invoice_model->update_invoice($invoice,$invoice_id);     
        }   
        redirect('invoice/all','refresh');  
    }
    public function view_file($invoice_id)
    {

            $filepath =  $this->create_invoice_pdf($invoice_id,'',$thai_barcode,FALSE);
    }
    public function view_file_copy($invoice_id)
    {
        
            $filepath =  $this->create_invoice_pdf($invoice_id,'',$thai_barcode,TRUE);
    }
    public function create_invoice_pdf($invoice_id,$row_per_page = '',$thai_barcode='',$is_copy='')
    {
            if(empty($row_per_page))
            {
               $row_per_page = 30;
            }
            $minimum_row_full_page = 15;
            $html = '';
            $html_header = '';
            $output =  array();
            $this->load->model('invoice_model');
            $this->load->model('store_model');
            $query_invoice = $this->invoice_model->find_by_id($invoice_id);
            $query_invoice_detail = $this->invoice_model->find_detail_by_invoice_id($query_invoice->row()->id);
            $query_store = $this->store_model->find_store_detail($query_invoice->row()->store_code);
            $output['store_detail'] = $query_store->row();
            $output['custom_tax_id'] = $query_invoice->row()->custom_tax_id;
            $output['custom_store_address'] = $query_invoice->row()->custom_store_address;
            $output['custom_store_name'] = $query_invoice->row()->custom_store_name;
            $output['custom_store_code'] = $query_invoice->row()->custom_store_code;
            $output['invoice_no'] =$query_invoice->row()->invoice_no;
            $output['create_date']  = date('d/m/Y',strtotime($query_invoice->row()->create_date));
            $output['thai_barcode'] = $thai_barcode;
            $output['ref_order_no'] = $query_invoice->row()->ref_order_no; $is_series = $query_invoice->row()->is_series;
            $output['percent_discount'] = $query_invoice->row()->percent_discount;
            $output['gp'] = $query_invoice->row()->invoice_gp;
            $output['special_discount']  = $query_invoice->row()->special_discount;
            $output['customer_code'] = $query_invoice->row()->customer_code;
            $output['is_copy'] = $is_copy;
           
            $year = date('Y');  
            if (!file_exists(FCPATH.'assets'.DS.'report'.DS.$year)) {
                mkdir(FCPATH.'assets'.DS.'report'.DS.$year, 0777, true);
            }
            $pdfFilePath='';
            if($is_copy)
            {
                log_message('DEBUG','-****------- COPY ------- ****---');
                $pdfFilePath=FCPATH.'assets'.DS.'report'.DS.$year.DS.$query_invoice->row()->invoice_no.'-copy.pdf';    
            }
            else
            {

                log_message('DEBUG','-****------- REAL ISSUE ------- ****---');
                $pdfFilePath=FCPATH.'assets'.DS.'report'.DS.$year.DS.$query_invoice->row()->invoice_no.'.pdf';
           
            }
            ini_set('memory_limit','512M'); // boost the memory limit if it's low
            $html_header = $this->load->view('invoice/receipt_header', $output, true);
            // render the view into HTML
            $css = file_get_contents("assets".DS."css".DS."receipt.css");
            $css2 = file_get_contents("assets".DS."css".DS."bootstrap.css");
                
            $pdf =  new mPDF('utf-8','A4','','',10,10,70,0,10,10);

            $pdf->useOddEven = 1;  
            $pdf->setHeader('{PAGENO}');
            $pdf->SetHTMLHeader($html_header,'E',TRUE);
            $pdf->SetHTMLHeader($html_header,'O',TRUE);
            $pdf->SetAutoFont(AUTOFONT_THAIVIET);
            
            $sum_price = 0;
            $last_page_item = 0;
            $page_count = 1;
            $row_count = 0;

            if($query_invoice_detail->num_rows() > 0)
            {
                $output['result_row'] = $query_invoice_detail->num_rows();
                $query_detail = $query_invoice_detail->result();                
                for($index = 0 ; $index < $query_invoice_detail->num_rows(); $index+=$row_per_page )
                {
                    for($i = $index ; $i < $row_per_page *  $page_count; $i++)
                    {
                        $row_count ++;
                        if($row_count <= $query_invoice_detail->num_rows() )
                        {
                            $query_detail[$i]->index = $row_count;
                            $array_result[] = $query_detail[$i];
                            $sum_price +=  (double)($query_detail[$i]->price * $query_detail[$i]->amount);
                            
                        }
                    }
                    if($index+$row_per_page >= $query_invoice_detail->num_rows())
                    {
                        if($query_invoice_detail->num_rows()-$index<=$minimum_row_full_page )
                        {
                                log_message('debug','------LAST MODE --------');
                                $pdf->AddPage();
                                 $output['sum_price'] = $sum_price;
                                
                                 $output['gp_value'] = $sum_price * $query_invoice->row()->invoice_gp * 0.01;	
                                 $output['grand_total'] = $sum_price * (100-$query_invoice->row()->invoice_gp)/100;
                                 if(!empty($query_invoice->row()->$special_discount))
                                 {
                                     $output['grand_total'] = $output['grand_total'] - $query_invoice->row()->$special_discount;
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
                            $output['sum_next_page'] =FALSE;
            			    $output['gp_value'] = $sum_price * $query_invoice->row()->invoice_gp * 0.01;	
            			    $output['grand_total'] = $sum_price * (100-$query_invoice->row()->invoice_gp)/100; 
                            if(!empty($query_invoice->row()->$special_discount))
                             {
                                 $output['grand_total'] = $output['grand_total'] - $query_invoice->row()->$special_discount;
                             }                        
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
            $pdf->Output();
            $html = '';
            $html_header = '';
            if($is_copy)
            {
                return site_url(array('assets','report',$year,$query_invoice->row()->invoice_no.'-copy.pdf'));
            }
            else
            {
                return site_url(array('assets','report',$year,$query_invoice->row()->invoice_no.'.pdf'));
            }
    }
    public function create_issue_no($create_date = ''){
        $this->load->model('invoice_model');
        $next_issue_number = $this->invoice_model->get_next_issue_no($create_date);
        log_message('debug','create_issue_no'.$next_issue_number);
        return $next_issue_number;
    }
    public function delete($invoice_id = '')
    {
        $this->load->model('invoice_model');
        $this->invoice_model->delete_invoice($invoice_id);
        redirect('invoice/all','refresh');
    }
   
    public function set_form_data($invoice_id = '')
    {
        $this->load->model('product_model');
        $this->load->model('store_model');
        $this->load->model('invoice_model');
        $data['query_product_list'] = $this->product_model->viewall();
        $data['query_store_list'] = $this->store_model->viewall();
        $data['store_code'] = '';
        $data['store_name'] = '';
        $data['tax_no'] = '';
        $data['address'] = '';
        $data['branch_code'] = '';
        $data['invoice_id'] = '';
        $data['create_date'] = date('d/m/Y');
        $data['invoice_detail'] = '';
        $data['invoice_no'] = '';
        $data['ref_order_no'] = '';
        $data['status'] = '';
        $data['percent_discount'] = '';
        $data['special_discount'] = '';
        $data['customer_code'] = '';
        $data['custom_tax_id'] = '';
        $data['custom_store_name'] = '';
        $data['custom_store_address'] = '';
        $data['custom_store_code'] = '';
        $data['gp'] = '';
        if(!empty($invoice_id))
        {
            $query_invoice = $this->invoice_model->find_by_id($invoice_id);
            $data['invoice_id'] = $query_invoice->row()->id;
            $create_date = $query_invoice->row()->create_date;
            $data['create_date'] = DateTime::createFromFormat('Y-m-d H:i:s', $create_date)->format('d/m/Y');
            $data['store_code'] = $query_invoice->row()->store_code;
            $data['invoice_no'] = $query_invoice->row()->invoice_no;
            $data['ref_order_no'] = $query_invoice->row()->ref_order_no;
            $data['percent_discount'] = $query_invoice->row()->percent_discount;
            $data['special_discount'] = $query_invoice->row()->special_discount;
            $data['store_name'] =  $query_invoice->row()->name;
            $data['tax_no'] =  $query_invoice->row()->tax_id;
            $data['address'] =  $query_invoice->row()->address;
            $data['branch_code'] =  $query_invoice->row()->branch_code;
            $data['status'] = $query_invoice->row()->status;
            $data['customer_code'] = $query_invoice->row()->customer_code;
            $data['gp'] = $query_invoice->row()->invoice_gp;
            $data['custom_tax_id'] = $query_invoice->row()->custom_tax_id;
            $data['custom_store_name'] = $query_invoice->row()->custom_store_name;
            $data['custom_store_address'] =  $query_invoice->row()->custom_store_address;
            $data['custom_store_code'] =  $query_invoice->row()->custom_store_code;
            $invoice_detail = $this->invoice_model->find_detail_by_invoice_id($invoice_id);
            $data['invoice_detail'] = $invoice_detail;
        }
        else
        {
            $next_no  =  $this->create_issue_no(date('Y-m-d') );
            $data['invoice_no'] = 'INV'.date('ym').'-'.$next_no;
        }
        return $data;       
    }
}
