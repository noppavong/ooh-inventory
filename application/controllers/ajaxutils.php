<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajaxutils extends MY_Controller 
{
    public function get_product_by_kbarcode()
    {
        $this->load->model('product_model');
        $korea_barcode = $this->input->get('data');
        $product_name = '';
        $data = array();
        $korea_barcode_array = explode(',',$korea_barcode);
        $result = $this->product_model->find_by_kbarcode($korea_barcode_array);
        $korea_barcode_map = array();
        
        if($result->num_rows() > 0)
        {
            foreach ($result->result() as $row) 
            {   
               $korea_barcode_map[$row->korea_barcode] = array('product_name'=>$row->product_name);
            }
            
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($korea_barcode_map));
    }
    public function get_store_detail()
    {
        $this->load->model('store_model');
        $store_code = $this->input->get('store_code');
        $query = $this->store_model->get_store($store_code);

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($query->row()));
    }
  public function get_stock_by_kbarcode()
    {
        $this->load->model('store_model');
        $korea_barcode = $this->input->get('data');
        $store_code = $this->input->get('store_code');
        $product_name = '';
        $data = array();
        $korea_barcode_array = explode(',',$korea_barcode);
        $result = $this->store_model->find_amount_by_kbar($korea_barcode_array,$store_code);
        $korea_barcode_map = array();
        
        if($result->num_rows() > 0)
        {
            foreach ($result->result() as $row) 
            {   
               $korea_barcode_map[$row->product_korea_barcode] = array('amount'=>$row->amount);
            }
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($korea_barcode_map));
    }

    public function get_pricing_by_kbarcode()
    {
        $this->load->model('pricing_model');
        $korea_barcode = $this->input->get('data');
        
        $mt_price = '';
        $normal_promotion = '';
        $big_sale = '';

        $data = array();
        $korea_barcode_array = explode(',',$korea_barcode);
        $result = $this->pricing_model->find_by_kbarcode($korea_barcode_array);
        $korea_barcode_map = array();
        
        if($result->num_rows() > 0)
        {
            foreach ($result->result() as $row) {   
                $mt_price = $row->mt_price;
                $normal_promotion = $row->normal_promotion;
                $big_sale = $row->big_sale;
                $korea_barcode_map[$row->korea_barcode] = array('mt_price'=>$mt_price
                    ,'normal_promotion'=>$normal_promotion
                    ,'big_sale'=>$big_sale);
            }
            // foreach ($korea_barcode_array as $korea_barcode) {
            //     $data[$korea_barcode_array] =  array('mt_price'=>$korea_barcode_map[$korea_barcode+'']['mt_price']
            //                  ,'normal_promotion'=>$korea_barcode_map[$korea_barcode+'']['normal_promotion']
            //                  ,'big_sale'=>$korea_barcode_map[$korea_barcode+'']['big_sale']
            //                 );
            // }
        }
        
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($korea_barcode_map));  
    }
        
    public function get_product_by_criteria()
    {
        $query_string = $this->input->get('q');
        $this->load->model('product_model');
        $query = $this->product_model->find_by_name($query_string);
        $result = array();
        foreach ($query->result() as  $row) {
            $result[] = array('label'=>$row->product_name,'value'=>$row->korea_barcode);
        }
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($result));   
    }

    public function get_all_pricing()
    {
        $this->load->model('pricing_model');
        $query = $this->pricing_model->view_pricing();
         $result = array();
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as  $row) {
               $pricing = new stdClass;
               $pricing->id = $row->id;
               $pricing->product_korea_barcode = $row->korea_barcode;
               $pricing->product_name = $row->product_name;
               $pricing->korea_retail = $row->korea_retail;
               $pricing->price_for_stockist = $row->price_for_stockist;
               $pricing->cost_baht = $row->cost_baht;
               $pricing->mt_price = $row->mt_price;
               $result[] = $pricing;
            }
        }
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($result));   

    }
    public function get_customer()
    {
        $this->load->model('customer_model');
        $search_param = $this->input->get('data');
        $name = $search_param['name'];
        $email = $search_param['email'];
        $line = $search_param['line'];
        $telephone_no = $search_param['telephone_no'];
        $query = $this->customer_model->find_by_param($name,$email,$line,$telephone_no);
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($query->result()));
    }
    public function get_address()
    {
        $this->load->model('address_model');
        $customer_id = $this->input->get('customer_id');
        $query = $this->address_model->find_by_customer_id($customer_id);
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($query->result()));

    }

}