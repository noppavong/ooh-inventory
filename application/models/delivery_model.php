<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Delivery_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    public function viewall($delivery_id = '')
    {
        $sql = "SELECT *,delivery.id as delivery_id FROM delivery 
            LEFT JOIN sale on sale.order_id = delivery.order_id 
            LEFT JOIN address on sale.address_id = address.id
            LEFT JOIN customer on sale.customer_id = customer.id";
        if(!empty($delivery_id))
        {
            $sql = $sql." WHERE delivery.id = ".$delivery_id;
        }
        $query = $this->db->query($sql);
        return $query;
    }
    public function cut_stock_from_order($order_id)
    { 
        $sql_stock = "select * from sale_item where order_id = ?";
        $query_stock_detail = $this->db->query($sql_stock,$order_id);
        log_message('debug',$this->db->last_query());
        if($query_stock_detail->num_rows() > 0)
        {
                foreach ($query_stock_detail->result() as $row) 
                {
                    $store_product_log = new stdClass;                    
                    $query_store_product =  $this->db->query('SELECT * FROM store_product 
                        WHERE store_product.product_korea_barcode = ? 
                        AND store_product.store_code = ?'
                        ,array($row->product_korea_barcode,'00000'));
                    if($query_store_product->num_rows() > 0)
                    {
                        $store_product = $query_store_product->row();
                        $amount = $store_product->amount - $row->amount;
                        $store_product_log->amount = $store_product->amount;
                        $store_product_log->next_amount = $amount;
                        $store_product_log->store_code  = $store_product->store_code;
                        $store_product_log->product_korea_barcode = $store_product->product_korea_barcode;
                        $this->db->where('store_code',$store_product->store_code);
                        $this->db->where('product_korea_barcode',$store_product->product_korea_barcode);
                        $result = $this->db->update('store_product',array('amount'=>$amount));
                        if(!$result)
                        {
                            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                            $msg = $this->db->_error_message();
                            $num = $this->db->_error_number();

                            $data['msg'] = "Error(".$num.") ".$msg;
                            return $data;
                        }
                        log_message('DEBUG',$this->db->last_query());
                    }
                    else
                    {
                        $store_product = new stdClass ;
                        $store_product->product_korea_barcode = $row->product_korea_barcode;
                        $store_product->amount = $row->amount * -1;
                        $store_product->store_code = '00000';
                        $store_product_log->amount = 0;
                        $store_product_log->next_amount = $row->amount;
                        $store_product_log->store_code  = $store_product->store_code;
                        $store_product_log->product_korea_barcode = $store_product->product_korea_barcode;
                        log_message('DEBUG','STORE PRODUCT'.json_encode($store_product));
                        $result = $this->db->insert('store_product',$store_product);
                        if(!$result)
                        {
                            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                            $msg = $this->db->_error_message();
                            $num = $this->db->_error_number();

                            $data['msg'] = "Error(".$num.") ".$msg;
                            return $data;
                        }
                    }

                    $store_product_log->order_id  = $order_id;
                    $store_product_log->create_date = date('Y-m-d h:m:s');
                    $this->db->insert('store_product_log',$store_product_log);
                }
        }
           
    }
    public function find_by_id($id)
    {
        $sql = "SELECT * FROM delivery WHERE id = ?";
        $query = $this->db->query($sql,$id);
        return $query;
    }
    public function insert_delivery($data)
    {
        log_message('debug','insert_delivery');
        if($this->db->insert('delivery',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_delivery($data,$id)
    {
        $this->db->where('id',$id);
        log_message('debug','data'.json_encode($data));
        if($this->db->update('delivery',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
  
}