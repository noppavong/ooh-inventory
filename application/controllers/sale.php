<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sale extends MY_Controller {
    
    public function all()
    {
        $this->load->model('sale_model');
        $data['js'] = array('common');
        $data['query_payment_type'] = $this->sale_model->find_all_payment_type();
        $query_sale = $this->sale_model->viewall();
        $displayTable = array();
        $data['payment_date'] = date('d/m/Y');
        foreach($query_sale->result() as $row) 
        { 
            $obj = new StdClass;
            $obj->sale = $row;
            $obj->item = $this->sale_model->find_item_by_order_id($row->sale_order_id);
            $displayTable[] = $obj;
        }
        $data['display_sale'] = $displayTable;
        $this->loadView('sale/sale_list',$data);
    }
    public function edit($order_id = '')
    {
        
        $data = $this->set_form_data($order_id);
        $data['js'] = array('common');
        $this->loadView('sale/sale_edit',$data);          
    }
    public function view($order_id = '')
    {
        $data = $this->set_form_data($order_id);
        $data['js'] = array('common');
        $this->loadView('sale/sale_view',$data);          
    }
    public function confirm_transfer()
    {
        $this->load->model('sale_model');
        $payment_type_id = $this->input->post('payment_type_id');
        $payment_date = $this->input->post('payment_date'); 
        $order_id = $this->input->post('order_id');
        if($payment_date)
        {
            $payment_date = DateTime::createFromFormat('d/m/Y', $payment_date)->format('Y-m-d');
        }else{
            $payment_date = date('Y-m-d');
        }
        $data = array('payment_type_id'=>$payment_type_id,'payment_date'=>$payment_date);
        $this->sale_model->update_sale($data,$order_id);
        $this->sale_model->confirm_transfer($order_id);
        redirect('sale/all','refresh');
    }
     public function save()
    {

        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $data = $this->input->post('data');
            $order_id = $this->input->post('order_id');
            $channel_id = $this->input->post('channel_id');
            $customer_id = $this->input->post('customer_id');
            $name = $this->input->post("name");
            $surname = $this->input->post("surname");
            $address = $this->input->post('address');
            $address_id = $this->input->post('address_id');
            $zipcode = $this->input->post('zipcode');
            $province_id = $this->input->post('province_id');
            $line_id = $this->input->post('line_id');
            $email = $this->input->post('email');
            $telephone_no = $this->input->post('telephone_no');
            $new_address_id = $this->input->post('new_address_id');
            log_message('debug','order_id '.$order_id);
            $this->load->model('sale_model');
            // if($payment_date)
            // {
            //     $payment_date = DateTime::createFromFormat('d/m/Y', $payment_date)->format('Y-m-d');
            // }else{
            //     $payment_date = date('Y-m-d');
            // }
            $customer = array('name'=>$name,
                            'surname'=>$surname,
                            'line_id'=>$line_id,
                            'email'=>$email,
                            'telephone_no'=>$telephone_no,
                            );
          
            $this->load->model('address_model');
            


            $this->load->model('customer_model');
            if($customer_id)
            {
                $this->customer_model->update_customer($customer,$customer_id);
            }
            else
            {
               $customer_id =  $this->customer_model->insert_customer($customer);
            }
            log_message('DEBUG','address -----  ID -----'.$address_id);
            if(empty($address_id) && !empty($new_address_id))
            {
                  $new_address = array('province_id'=>$province_id ,
                                'address'=>$address ,
                                'zipcode'=>$zipcode,
                                'customer_id'=>$customer_id
                                );
                $address_id = $this->address_model->insert_address($new_address);
            }
            $sale = array(
                'channel_id'=>$channel_id
                ,'customer_id'=>$customer_id
            );
            if($address_id)
            {
                $sale['address_id'] = $address_id;
            }
            if($order_id)
            {
                log_message('debug','order'.$order_id);
                $this->sale_model->update_sale($sale,$order_id);
            }
            else
            {   
                $order_id = $this->sale_model->insert_sale($sale);
            }
            if($data)
            {
                $sum_price = 0;
                $result = '';      
                $order_items = array();
                foreach ($data as $details) {
                    if(!empty($details['korea_barcode']))
                    {
                        log_message('debug',json_encode($details));
                        $order_items[] = array('product_korea_barcode'=>$details['korea_barcode']
                            ,'amount'=>$details['amount']
                            ,'price'=>$details['price']
                            ,'order_id'=>$order_id
                            ,'percent_discount'=>$details['percent_discount']);
                        $sum_price += (float)$details['price'] * $details['amount'];
                    }               
                }

                if(!empty($order_items))
                {
                    $result = $this->sale_model->update_sale_item($order_items,$order_id);
                }
                if(!empty($sum_price))
                {
                    $sale['sum_price'] = $sum_price;                 
                    $result = $this->sale_model->update_sale($sale,$order_id);
                }
            }
            if(empty($result) || $result === TRUE)
            {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result'=> 'ok','order_id'=>$order_id)));
            }
            else
            {

                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result'=> 'error','order_id'=>$order_id,'msg'=>$result['msg'])));
            }
        }
    }   
    public function set_form_data($order_id = '')
    {
        $this->load->model('product_model');
        $this->load->model('sale_model');
        $this->load->model('address_model');
        $this->load->model('channel_model');
        $this->load->model('customer_model');
        $data['query_channel_list'] = $this->channel_model->find_all();
        $data['query_product_list'] = $this->product_model->viewall();
        $data['query_payment_type'] = $this->sale_model->find_all_payment_type();
        $data['query_province_list'] = $this->customer_model->find_all_province();
        $data['channel_id'] = '';
        $data['customer_address']= '';
        $data['customer'] = '';
        $data['address'] = '';
        $data['payment_type_id'] = '';
        $data['payment_date'] = '';
        $data['province_id']='';
        $data['telephone_no'] = '';
        $data['channel_id'] = '';
        $data['zipcode'] = '';
        $data['address_id'] = '';
        $data['order_id']='';
        if(!empty($order_id))
        {
            $query_sale = $this->sale_model->find_by_id($order_id);
            $data['customer_address'] =  $this->address_model->find_by_customer_id($query_sale->row()->customer_id);
            $data['order_id'] = $query_sale->row()->order_id;
            $data['payment_type_id'] = $query_sale->row()->payment_type_id;
            $data['name'] = $query_sale->row()->name;
            $data['customer_id'] = $query_sale->row()->customer_id;
            $data['surname'] = $query_sale->row()->surname;
            $data['line_id'] = $query_sale->row()->line_id;
            $data['email'] = $query_sale->row()->email;
            $data['address'] = $query_sale->row()->address;
            $data['address_id'] = $query_sale->row()->address_id;
            $data['zipcode'] = $query_sale->row()->zipcode;
            $data['channel_id'] = $query_sale->row()->channel_id;
            $data['province_id'] = $query_sale->row()->province_id;
            $data['telephone_no'] = $query_sale->row()->telephone_no;
            $data['payment_date']  = date('d/m/Y',strtotime($query_sale->row()->payment_date));
            $sale_item = $this->sale_model->find_item_by_order_id($order_id);
            $data['sale_item'] = $sale_item;
        }
        return $data;       
    }
}
