<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sale extends MY_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('base_site');
    }
    public function summary_b2s()
    {
        $this->load->model('sale_model');
        $month_year = $this->input->get('month_year');
        $month = '';
        $year = '';
        $store_array = array('10402','10403','10404','10405','10406','10407','10408','10409');
        $dropdown = $this->sale_model->getSelectDropdown($store_array);
        $query_sort = $this->sale_model->get_store_lookup($store_array);
      
        if(!empty($month_year))
        {
            $result_month = explode('/', $month_year);
            $month = $result_month[0];
            $year = $result_month[1];
        }
        else
        {
            $month_year = $dropdown->row()->month_year;
            $result_month = explode('/', $month_year);
            $month = $result_month[0];
            $year = $result_month[1];
        }

        $data['dropdown'] = $dropdown;
        $store_array = array();
        foreach ($query_sort->result() as $row) {
            $store_array[] = $row->store_code;
        }
        $query = $this->sale_model->view_summary($store_array,$month,$year);
        $store_result = array();
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) {
               $store_result[$row->product_korea_barcode][$row->store_code] = $row->qty;
               $store_result[$row->product_korea_barcode]['name'] = $row->product_name;   
            }
        }
        $data['select_month'] = $month; 
        $data['select_year'] = $year;
        $store_array_header = array();
        foreach ($store_array as $row) {
            $query = $this->sale_model->get_store_info($row);
            $modern_trade_code = $query->row()->modern_trade_code;
            $short_name = $query->row()->short_name;
            $store_array_header[] = array('modern_trade_code'=>$modern_trade_code,'short_name'=>$short_name,'store_code'=>$row);
        }
        $data['store_array'] = $store_array;
        $data['store_header']= $store_array_header;
        $handsondata =  array();
        foreach ($store_result as $barcode => $store_entry) {
            $obj = array();
            $obj['product_korea_barcode'] = $barcode;
            $obj['product_name'] = $store_entry['name'];         
            foreach ($store_entry as $store_code => $store_amount) {
                $obj['store'][$store_code] = $store_amount; 
            }
            $handsondata[] = $obj;
        }

        $data['handsondata'] = $handsondata;
        $this->loadView('sale/sale_product_summary',$data);  
    }   
    public function summary()
    {
        $this->load->model('store_model');
        $this->load->model('product_model');
        $this->load->model('sale_model');
        $product_search = $this->input->post('korean_barcode');
        $store_code_search = $this->input->post('store_code_search');
        $sale_month = $this->input->post('sale_month');
        $sale_year = $this->input->post('sale_year');
        $last_date_month = '';
        if(!empty($sale_month) && !empty($sale_year))
        {
            $last_date_month = date('Y-m-t', strtotime($sale_month.' '.$sale_year));        
        }
        $product_search_list = $this->input->post('product_search_list');
         if(empty($product_search))
        {
            $product_search = $product_search_list;
        }
        $result_product = $this->product_model->viewall();
        $result_product_array = array();
        if($result_product->num_rows() > 0)
        {
            foreach ($result_product->result() as $row) {
                $entry = new StdClass;
                $entry->label  = $row->product_name;
                $entry->value =  $row->korea_barcode;
                $result_product_array[] = $entry;
            }
        }
       

        log_message('DEBUG','product search'.$product_search);
        $query_summary = $this->sale_model->view_summary($product_search,$store_code_search,$last_date_month);
        $summary_detail = array();
        if($query_summary->num_rows() > 0)
        {

            foreach ($query_summary->result() as $row) {
                $summary_detail[$row->store_code][$row->product_korea_barcode.''][0] = $row->product_name;
                $summary_detail[$row->store_code][$row->product_korea_barcode.''][$row->sale_date+'']= $row->amount;
            }
        }
        $data['store_list'] = $this->store_model->viewall();
        $data['store_code_display'] = $store_code_search;
        $data['select_month'] = $sale_month;
        $data['select_year'] = $sale_year;
        $data['summary_list'] = $summary_detail;
        $data['result_product_array'] = json_encode($result_product_array);
        $data['js'] = array('footable','footable.sort');
        $this->loadView('sale/sale_product_summary',$data);           
    }
    public function all()
    {
        $this->load->model('sale_model');
        $query = $this->sale_model->viewall();
        $page_data['query_sale_list'] = $query;
        $this->loadView('sale/sale_list',$page_data);
    }
    public function sale_b2s_import()
    {
        if($this->input->server('REQUEST_METHOD') == 'POST')
        {

            log_message('debug','---import---');
            $config['upload_path'] = 'uploads/data/';
            $config['allowed_types'] = 'xls|xlsx';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
                log_message('debug','---2---');
                if (!$this->upload->do_upload('sale_excel'))
                {
                    $error = array('errors' => $this->upload->display_errors());
                    $this->loadView('sale/sale_b2s_import',$error);
                }
                else
                { 
                    log_message('debug','---SAVE OK ---');
                    $upload_data = $this->upload->data();
                    $full_path = $upload_data['full_path'];
                    $this->load->library('excel');
                    /**  Identify the type of $inputFileName  **/
                    $inputFileType = PHPExcel_IOFactory::identify($full_path);
                    /**  Create a new Reader of the type that has been identified  **/
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    /**  Load $inputFileName to a PHPExcel Object  **/
                    $objPHPExcel = $objReader->load($full_path);

                    
                    $objWorksheet = $objPHPExcel->getActiveSheet();
                    // Get the highest row and column numbers referenced in the worksheet
                    $highestRow = $objWorksheet->getHighestRow(); // e.g. 10
                    $highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
                    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5
                    $this->load->model('pricing_model');
                    
                    $new_store = false;
                    $new_store_code = false;
                    $system_store_code = false;
                    $new_header = false;
                    $store_index = 15;
                    $barcode_index = -1;
                    $qty_index = -1;
                    $net_sale_index = -1;
                    $new_detail = false;
                    $this->load->model('sale_model');
                    $month = $this->input->post('sale_month');
                    $year = $this->input->post('sale_year');
                    $last_date_month = date('Y-m-t', strtotime($month.' '.$year));
                    log_message('DEBUG','LAST DATE'.$last_date_month);
                    $data = array();
                    for ($rownumber = 2; $rownumber <= $highestRow; ++$rownumber) {

                        $row = $objWorksheet->getRowIterator($rownumber)->current();
                        $cellIterator = $row->getCellIterator();
                        $cellIterator->setIterateOnlyExistingCells(false);
                        $sale_entry = null;
                        if($new_detail)
                        {
                            $sale_entry = array();
                        }
                        foreach ($cellIterator as $cell) {
                            $cellValue =  $cell->getValue();
                            if(!empty($cellValue))
                            {
                                if(strpos(strtolower($cellValue), 'store') !== FALSE && strpos(strtolower($cellValue), 'total') ===  false)
                                {
                                    $new_store = true;
                                    continue;
                                }
                                if($new_store)
                                {
                                    $array_store = explode(" ",$cellValue);
                                    $new_store_code = $array_store[0];
                                    $new_store_code = trim(iconv("UTF-8","ISO-8859-1",$new_store_code)," \t\n\r\0\x0B\xA0");

                                    log_message('DEBUG','STORE CODE :'.$new_store_code.';'.strlen($new_store_code));
                                    $query = $this->sale_model->lookup_moderntrade($new_store_code);
                                    $system_store_code = $query->row()->store_code;
                                    // log_message('DEBUG','STORE CODE :'.$cellValue);
                                    $new_store = false;

                                     continue;
                                }
                                if($new_store_code)
                                {
                                    if(strpos(strtolower($cellValue), 'sub-dept') !== FALSE)
                                    {
                                        $new_header = true;                    
                                    }
                                }
                                if($new_header)
                                {
                                    if($barcode_index != -1 && $qty_index != -1 && $net_sale_index != -1)
                                    {
                                           $new_header = false;
                                           $new_detail = true;
                                           continue;
                                    }
                                    if(strpos(strtolower($cellValue), 'upc') !== FALSE)
                                    {
                                        $barcode_index = PHPExcel_Cell::columnIndexFromString($cell->getColumn());                    
                                    }
                                    if(strpos(strtolower($cellValue), 'qty') !== FALSE)
                                    {
                                        $qty_index = PHPExcel_Cell::columnIndexFromString($cell->getColumn());    
                                    }
                                    if(strpos(strtolower($cellValue), 'net sales') !== FALSE)
                                    {
                                        $net_sale_index = PHPExcel_Cell::columnIndexFromString($cell->getColumn());    
                                    }

                                }
                                if($new_detail)
                                {

                                    if( PHPExcel_Cell::columnIndexFromString($cell->getColumn()) == $barcode_index)
                                    {
                                       // log_message('DEBUG','BAR CODE '.$cellValue);
                                        $sale_entry['product_korea_barcode'] = $cellValue;
                                    }
                                    if( PHPExcel_Cell::columnIndexFromString($cell->getColumn()) == $qty_index)
                                    {                                    
                                      //  log_message('DEBUG','QUANTITY :'.$cellValue);
                                        $sale_entry['amount'] = $cellValue;
                                    }
                                    if( PHPExcel_Cell::columnIndexFromString($cell->getColumn()) == $net_sale_index)
                                    {                                    
                                      //  log_message('DEBUG','NET SALES :'.$cellValue);   
                                        $sale_entry['sale_price'] = floatval($cellValue/$sale_entry['amount']);
                                    }
                                    if(!empty($sale_entry['product_korea_barcode']) 
                                        && !empty($sale_entry['amount'])
                                        && !empty($sale_entry['sale_price']))
                                    {
                                        $sale_entry['store_code'] = $system_store_code;
                                        $sale_entry['sale_date'] = $last_date_month;
                                        $data[] = $sale_entry;
                                        $sale_entry = null;
                                        break;
                                    }

                                }
                                if(strpos(strtolower($cellValue), 'total') !== FALSE)
                                {
                                    if(!empty($data))
                                    {
                                        log_message('DEBUG',json_encode($data));
                                        $this->sale_model->sale_b2s_import($data,$system_store_code,$last_date_month);
                                        $data = null;
                                        $data = array();
                                    }
                                    $new_detail = false;
                                    $new_store_code = false; 
                                    $barcode_index = -1;
                                    $qty_index = -1;
                                    $net_sale_index = -1;
                                    log_message('DEBUG','END OF DETAIL');

                                }   
                            }

                        }
                       
                       // if(!empty($korea_barcode))
                       // {
                       //      $data = array('product_korea_barcode'=>$korea_barcode,'korea_retail'=>$korea_retail,'price_for_stockist'=>$price_for_stockist,'cost_baht'=>$cost_baht,'mt_price'=>$mt_price,'normal_promotion'=>$normal_promotion,'big_sale'=>$big_sale,'other_field_name_1'=>$other_field_name_1);
                       //      $query = $this->pricing_model->findbybarcode($korea_barcode);
                       //      if($query->num_rows() > 0)
                       //      {
                       //          unset($data['product_korea_barcode']);
                       //          $this->pricing_model->update_pricing($data, $query->row()->id);
                       //      }else{
                       //          $this->pricing_model->insert_pricing($data);                    
                       //      }
                       //  }       
                    }
                   // redirect('');
                }
            
        }
        $this->loadView('sale/sale_b2s_import');  
    }
    public function get_product_by_barcode()
    {
        $this->load->model('product_model');
        $korea_barcode = $this->input->get('data');
        log_message('DEBUG','korea_barcode'.$korea_barcode);
        $result = $this->product_model->findbybarcode($korea_barcode);
        $product_name = '';
        $data = array();
        $korea_barcode_array = explode(',',$korea_barcode);
        $korea_barcode_map = array();
        
        if($result->num_rows() > 0)
        {
            foreach ($result->result() as $row) {   
                        # code...
               $korea_barcode_map[$row->korea_barcode+''] = array('product_name'=>$row->product_name);
            }
            foreach ($korea_barcode_array as $korea_barcode) {
                $data[] = array('product_name'=>$korea_barcode_map[$korea_barcode+'']['product_name']);
            }
        }

        

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }
    public function save()
    {
        log_message('DEBUG','=====SAVE=====');
        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $data = $this->input->post('data');
            $store_code = $this->input->post('store_code');
            $sale_start_date = $this->input->post('sale_start_date');
            $sale_end_date = $this->input->post('sale_end_date');
            $sale_id = $this->input->post('sale_id');
            log_message('debug','store_code'.$sale_id);
            if($sale_start_date)
            {
                $sale_start_date = DateTime::createFromFormat('d/m/Y', $sale_start_date)->format('Y-m-d');
            }
            if($sale_end_date)
            {
                $sale_end_date = DateTime::createFromFormat('d/m/Y', $sale_end_date)->format('Y-m-d');
            }
            $sale = new StdClass;
            if(!empty($store_code))
            {
                $sale->store_code = $store_code;
            }
            
            $sale->start_date = $sale_start_date;
            $sale->end_date = $sale_end_date;
            $this->load->model('sale_model');
            if(!empty($sale_id))
            {
                            log_message('debug','sale id '.$sale_id);
                $this->sale_model->update_sale($sale,$sale_id);
            }
            else
            {           log_message('debug','sale id '.$sale_id);
                $sale_id = $this->sale_model->insert_sale($sale);
            }
            $result = '';
            if($data)
            {
                $sale_details = array();
                foreach ($data as $details) {
                    if(!empty($details['korea_barcode']))
                    {
                    log_message('debug',json_encode($details));
                        $sale_details[] = array('product_korea_barcode'=>$details['korea_barcode'],
                            'net_sale'=>$details['net_sale'],
                            'net_payment'=>$details['net_payment'],
                            'sale_gp_normal'=>$details['sale_gp_normal'],
                            'sale_gp_special'=>$details['sale_gp_special'],
                            'qty'=>$details['qty'],'sale_id'=>$sale_id);
                    }               
                }

                if(!empty($sale_details))
                {
                    $result = $this->sale_model->update_sale_detail($sale_details,$sale_id);
                }
            }
            if(empty($result))
            {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result'=> 'ok','sale_id'=>$sale_id)));
            }
            else
            {
                    $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('result'=> 'error','sale_id'=>$sale_id,'msg'=>$result['msg'])));

            }
        }
    }
   public function edit($sale_id = '')
    {
        $this->load->model('product_model');
        $this->load->model('store_model');
        $this->load->model('sale_model');
        $data['query_product_list'] = $this->product_model->viewall();
        $data['query_store_list'] = $this->store_model->viewall();
        $data['sale_start_date'] = date('d/m/Y');
        $data['sale_end_date'] = date('d/m/Y');
        $data['sale_id'] = '';
        $data['sale_detail'] = '';
        $data['store_code'] = '';
        
        if(!empty($sale_id))
        {
            $query_sale = $this->sale_model->get_sale_by_id($sale_id);
            $data['sale_id'] = $query_sale->row()->id;
            $sale_start_date = $query_sale->row()->start_date;
            $sale_end_date = $query_sale->row()->end_date;
            $data['sale_start_date'] = DateTime::createFromFormat('Y-m-d', $sale_start_date)->format('d/m/Y');
            $data['sale_end_date'] = DateTime::createFromFormat('Y-m-d', $sale_end_date)->format('d/m/Y');
            $data['store_code'] = $query_sale->row()->store_code;
            $query_sale_detail = $this->sale_model->get_sale_detail_by_sale_id($sale_id);
            $data['sale_detail'] = $query_sale_detail;
        }
        $this->loadView('sale/sale_edit',$data);          
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */