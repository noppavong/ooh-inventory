<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Purchasing_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    public function viewall()
    {
        $sql = "SELECT * FROM purchasing LEFT JOIN payment_type ON purchasing.payment_type_id = payment_type.payment_type_id
                ORDER BY payment_date DESC";
        return $this->db->query($sql);
    }
    public function find_all_payment_type()
    {
        $sql = "SELECT * FROM payment_type";
        $query = $this->db->query($sql);
        return $query;
    }
    public function find_by_id($order_id)
    {
        $sql = "SELECT * FROM purchasing WHERE order_id = ?";
        $query = $this->db->query($sql,$order_id);
        return $query;
    }
    public function find_item_by_order_id($order_id)
    {
        $sql = "SELECT *,pricing.mt_price as market_price FROM purchasing_item INNER JOIN product ON product_korea_barcode = korea_barcode LEFT JOIN pricing on pricing.product_korea_barcode = product.korea_barcode WHERE order_id = ?";
        $query = $this->db->query($sql,$order_id);
        return $query;   
    }
    public function insert_purchasing($data)
    {
        log_message('debug','insert_purchasing');
        if($this->db->insert('purchasing',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_purchasing($data,$order_id)
    {
        $this->db->where('order_id',$order_id);
        log_message('debug','data'.json_encode($data));
        if($this->db->update('purchasing',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function confirm_transfer($order_id)
    {
        $this->db->where('order_id',$order_id);
        $data = array('payment_status' => 'transfered');

        if($this->db->update('purchasing',$data))
        {
            $data_delivery = new StdClass;
            $data_delivery->order_id = $order_id;
            $this->db->insert('delivery',$data_delivery);
            return true;
        }
        else
        {
            return false;
        }   
    }
    // public function delete_invoice($invoice_id)
    // {
    //     $this->db->trans_start();
    //     $this->db->where('invoice_id',$invoice_id);
    //     $this->db->delete('invoice_detail');
    //     $this->db->where('id',$invoice_id);
    //     $this->db->delete('invoice');
    //     $this->db->trans_complete();
    // }
    public function update_purchasing_item($datas,$order_id)
    {
        $this->db->where('order_id',$order_id);
        $this->db->delete('purchasing_item');
        if(!empty($datas))
        {
            foreach ($datas as $row) {
                $result = $this->db->query('select * from purchasing_item where order_id = ? and product_korea_barcode = ?',array($row['order_id'],$row['product_korea_barcode']));
                if($result->num_rows() > 0)
                {
                    $current_amount = $result->row()->amount + $row['amount'];
                    $this->db->where('order_id',$row['order_id']);
                    $this->db->where('product_korea_barcode',$row['product_korea_barcode']);
                    $result = $this->db->update('purchasing_item',array('amount'=>$current_amount));
                }
                else
                {
                    $result = $this->db->insert('purchasing_item',$row);
                   
                }
                 if(!$result)
                {
                    log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                    $msg = $this->db->_error_message();
                    $num = $this->db->_error_number();

                    $data['msg'] = "Error(".$num.") ".$msg;
                    $this->db->trans_complete();
                    return $data;
                }
            }
        }
    }
}