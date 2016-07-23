<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends MY_Controller {
 public function all()
{
    $this->load->model('store_model');
    $data['query_rectify_list'] = $this->store_model->viewAllRectify();
    $this->loadView('store/rectify_list',$data);
}
 public function edit_mobile($rectify_id = '')
 {
    $this->load->model('store_model');
    $data['query_store_list'] = $this->store_model->viewall();
    $data['store_code'] = '';
    $data['rectify_id'] = '';
    $data['rectify_item'] = '';
     if(!empty($rectify_id))
    {
        $data['rectify'] = $this->store_model->get_rec_detail($rectify_id);
        $data['rectify_item'] = $this->store_model->get_rec_item($rectify_id);
        $data['store_code'] = $data['rectify']->row()->store_code;
        $data['rectify_id'] = $rectify_id;
    }
    $this->loadView('store/store_mobile',$data);
 }
 public function get_rec_item_detail()
 {
    $rectify_item_id = $this->input->get('rectify_item_id');
    $this->load->model('store_model');
    $query = $this->store_model->get_rec_item_detail($rectify_item_id);
    
         $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('korea_barcode'=>$query->row()->product_korea_barcode,'amount'=>$query->row()->current_amount,'product_name'=>$query->row()->product_name)));
 }
 
 public function get_rec_item()
 {
    $rectify_id = $this->input->get('rectify_id');
    $this->load->model('store_model');
    $query = $this->store_model->get_rec_item($rectify_id);
    $result = array();
    foreach ($query->result() as $row) {
            $result[] = array('rectify_item_id' =>$row->rectify_item_id
                ,'amount'=>$row->current_amount
                ,'product_name'=> $row->product_name);
    }
         $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($result));
 }
 public function add_rect()
 {
    $store_code = $this->input->post('store_code');
    $register_date = date('Y-m-d');
    $this->load->model('store_model');
    $query_store = $this->store_model->get_store($store_code);
    $rectify_id = $this->store_model->insert_rectify(array('store_code'=>$store_code,'register_date'=>$register_date));
      $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('id'=>$rectify_id,'name'=>$query_store->row()->short_name,'date'=>DateTime::createFromFormat('Y-m-d',$register_date)->format('d/m/Y'))));
 }
 public function save_rect_item()
 {
    $rectify_item_id = $this->input->post('rectify_item_id');
    $korea_barcode = $this->input->post('korea_barcode');
    $current_amount  = $this->input->post('amount');
    $rectify_id = $this->input->post('rectify_id');
    $store_code = $this->input->post('store_code');
    $this->load->model('store_model');
    $data = array('current_amount'=>$current_amount,'rectify_id'=>$rectify_id,'product_korea_barcode'=>$korea_barcode);
    $rectify_item_id = $this->store_model->save_rectify_item($rectify_item_id,$data,$store_code);  
    $this->load->model('product_model');
    $query_product = $this->product_model->findbybarcode($korea_barcode);  
     $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('rectify_item_id'=>$rectify_item_id,'product_name'=>$query_product->row()->product_name))); 
 }
 public function edit($rectify_id ='')
 {
        $this->load->model('store_model');
        $this->load->model('product_model');
        $data['rectify'] = '';
        $data['rectify_item'] = '';
        $data['rectify_id'] = $rectify_id;
        $data['register_date'] = date('d/m/Y');

        if(!empty($rectify_id))
        {
            $data['rectify'] = $this->store_model->get_rec_detail($rectify_id);
            $data['rectify_item'] = $this->store_model->get_rec_item($rectify_id);
            $data['register_date'] = DateTime::createFromFormat('Y-m-d H:i:s', $data['rectify']->row()->register_date)->format('d/m/Y');
            
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
        //$data['query_product_list'] = $this->product_model->viewall();
        $data['query_store_list'] = $this->store_model->viewall();
        $data['result_product_array'] = json_encode($result_product_array);
        log_message('DEBUG',$data['result_product_array']);
        $this->loadView('store/store_update',$data);    

 }
 public function finish($stock_transaction_id = '')
{
        $this->load->model('product_model');
        $this->load->model('store_model');
        $this->load->model('stock_model');
        $data['query_product_list'] = $this->product_model->viewall();
        $data['query_store_list'] = $this->store_model->viewall();
        $data['store_source_code'] = '';
        $data['store_destination_code'] = '';
        $data['register_date'] = '';
        $data['stock_transaction_id'] = '';
        $data['stock_transaction_detail'] = '';
        if(!empty($stock_transaction_id))
        {
            $query_transaction = $this->stock_model->get_transaction_by_id($stock_transaction_id);
            $data['stock_transaction_id'] = $query_transaction->row()->id;
            $register_date = $query_transaction->row()->register_date;
            $data['register_date'] = DateTime::createFromFormat('Y-m-d H:i:s', $register_date)->format('d/m/Y');
            $data['store_source_code'] = $query_transaction->row()->store_source_code;
            $data['store_destination_code'] = $query_transaction->row()->store_destination_code;
            $query_transaction_detail = $this->stock_model->get_transaction_detail_by_transaction_id($stock_transaction_id);
            $data['stock_transaction_detail'] = $query_transaction_detail;
        }
        $this->loadView('stock/stock_view',$data);          
 }
 public function rectify($rectify_id)
 {
    $this->load->model('store_model');
    $stock_transaction_id = $this->store_model->generate_transaction($rectify_id);
    $this->load->model('stock_model');
    $result = $this->stock_model->cut_stock($stock_transaction_id);
    redirect('stock/view_cut_log/'.$stock_transaction_id,'refresh');
 }
 public function save_mobile()
 {
        $rectify_id = $this->input->post('rectify_id');
        $store_code = $this->input->post('store_code');
        $register_date = date('Y-m-d');
        $this->load->model('store_model');
        if(empty($rectify_id))
        {
            $rectify_id = $this->store_model->insert_rectify(array('store_code'=>$store_code,'register_date'=>$register_date));
        }else{
            $this->store_model->update_rectify(array('store_code'=>$store_code),$rectify_id);
        }

        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $result = '';
            $data = $this->input->post('data');
            $rectify_items = array();
            foreach ($data as $details) {
                if(!empty($details['product_korea_barcode']))
                {
                    log_message('debug',json_encode($details));
                    $rectify_items[] = array('product_korea_barcode'=>'880925548'.$details['product_korea_barcode'],'current_amount'=>$details['amount'],'rectify_id'=>$rectify_id);
                }               
            }
            if(!empty($rectify_items))
            {
                $result = $this->store_model->update_rectify_item_mobile($rectify_items,$rectify_id,$store_code);
            }
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('id'=>$rectify_id)));

        }

      
 }
 public function save()
 {
        $data = $this->input->post('data');
        $store_code = $this->input->post('store_code');
        $rectify_id = $this->input->post('rectify_id');
        $register_date = $this->input->post('register_date');
        if($register_date)
        {
            $register_date = DateTime::createFromFormat('d/m/Y', $register_date)->format('Y-m-d');
        }else{
            $register_date = date('Y-m-d');
        }
        $this->load->model('store_model');
        if(empty($rectify_id))
        {
            $rectify_id = $this->store_model->insert_rectify(array('store_code'=>$store_code,'register_date'=>$register_date));
        }else{
            $this->store_model->update_rectify(array('store_code'=>$store_code,'register_date'=>$register_date),$rectify_id);
        }
        $this->store_model->update_rectify_item($data,$rectify_id,$store_code);
               $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('id'=>$rectify_id)));
 }
 public function get_previous_amt()
 {
        $this->load->model('store_model');
        $store_code = $this->input->get('store_code');
        $korea_barcode = $this->input->get('korea_barcode');
        $query_result = $this->store_model->get_previous_amt($korea_barcode,$store_code);

        $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('previous_amount'=>$query_result->row()->amount)));

 }
 public function delete_rect()
 {
        $rectify_id = $this->input->get('rectify_id');
        $this->load->model('store_model');
        $this->store_model->delete_rec($rectify_id);
     $this->output->set_content_type('application/json')
    ->set_output(json_encode(array('msg'=>"ok")));
 }

 public function delete_rect_item()
 {

        $rectify_item_id = $this->input->get('rectify_item_id');
        $this->load->model('store_model');
        $this->store_model->delete_recitem($rectify_item_id);
     $this->output->set_content_type('application/json')
    ->set_output(json_encode(array('msg'=>'ok')));
 }
 public function get_ajax_product()
 {
        $this->load->model('product_model');
        $product_name = $this->input->get('term');
        if(!empty($product_name)  && !is_numeric($product_name))
        {
            $product_name = strtoupper($product_name);
        }
        $product_name_like =  preg_replace('/\s+/', '%',$product_name);
        if(substr( $product_name_like, 0, 1 ) != '%')
        {
            $product_name_like = '%'.$product_name_like;
        }
        if(substr($product_name_like, -1, 1) != '%')
        {
            $product_name_like = $product_name_like.'%';
        }

        $query = $this->product_model->find_by_product_name_spec1($product_name_like);
        $result = array();
        foreach ($query->result() as $row) {
            $entry = new StdClass;
            $entry->label = $row->product_name;
            $entry->value = $row->korea_barcode;
            $result[] = $entry;     
        } 
        $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($result));
 }  
}