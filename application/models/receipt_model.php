<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Receipt_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    public function viewall()
    {
        return $this->db->query('SELECT 
            receipt.receipt_url
            ,receipt.status
            ,receipt.receipt_copy_url 
            ,receipt.total as total
            ,receipt.sum_price as sum_price 
            ,receipt.vat as vat
            ,receipt.id as id
            ,receipt.receipt_no as receipt_no
            ,store1.name as company_name
            ,receipt.create_date as create_date
            ,receipt.less_gp as less_gp 
			   ,store1.code as store_code
            ,receipt.special_discount as special_discount
            ,receipt.custom_store_name as custom_store_name
            FROM receipt 
            LEFT JOIN store  as store1 
                on store1.code = receipt.store_code 
                ORDER BY create_date,receipt_no desc');
    }
    public function find_by_id($receipt_id)
    {
        $sql = "SELECT * from receipt where id = ?";
        $query = $this->db->query($sql,$receipt_id);
        log_message('debug',$this->db->last_query());
        return $query;
    }
    public function find_receipt_detail_by_receipt_id($receipt_id)
    {
        $sql = "select * from receipt_detail inner join product on receipt_detail.product_korea_barcode = product.korea_barcode left join pricing on pricing.product_korea_barcode = receipt_detail.product_korea_barcode where receipt_id = ?";
        $query = $this->db->query($sql,$receipt_id);
        return $query;   
    }
    public function find_store_detail($store_id)
    {
        $sql = "select * from store where code = ?";
        $query = $this->db->query($sql, $store_id);
        return $query;
    }
    public function insert_receipt($data)
    {
        if($this->db->insert('receipt',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_receipt($data,$receipt_id)
    {
        $this->db->where('id',$receipt_id);
        log_message('debug','data'.json_encode($data));
        if($this->db->update('receipt',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_next_issue_no($create_date)
    {
            $month = '';
                log_message('debug','create_date __> '.$create_date);
            if($create_date){
                $month = DateTime::createFromFormat('Y-m-d', $create_date)->format('m');
                $year = DateTime::createFromFormat('Y-m-d', $create_date)->format('Y');
                log_message('debug','MONTH __> '.$month);
            }
            if(!empty($month))
            {
                $sql = 'select receipt_no as receipt_no from receipt where MONTH(create_date) = "'.$month.'" AND YEAR(create_date) = "'.$year.'"';
            }
            else
            {
                $sql =  'select receipt_no as receipt_no from receipt';
            }
            $query = $this->db->query($sql);
            log_message('debug','LAST QUERY '.$this->db->last_query());
            $max_number = 0;
            if($query->num_rows() >0)
            {
                //$next_no = $query->row()->receipt_issue_no;
                    
                foreach ($query->result() as $row) {
                    if (strpos($row->receipt_no, '-') !== FALSE)
                    {
                        $number_with_dot = array();
                        $number_with_dot = explode('-',$row->receipt_no);
                        if (strpos($number_with_dot[1], '.') !== FALSE)
                        {
                            $last_number = explode('.',$number_with_dot[1]);
                            if($last_number[0] > $max_number)
                            {
                                $max_number  =  $last_number[0];
                            }
                        }
                        else
                        {
                            if($number_with_dot[1] > $max_number)
                            {
                                $max_number = $number_with_dot[1];
                            }
                        }                  
                    }
                }

            }
            return $max_number+1;

    }
    public function delete_receipt($receipt_id)
    {
        $this->db->trans_start();
        $this->db->where('receipt_id',$receipt_id);
        $this->db->delete('receipt_detail');
        $this->db->where('id',$receipt_id);
        $this->db->delete('receipt');
        $this->db->trans_complete();
    }
    public function update_receipt_detail($datas,$receipt_id)
    {
        $this->db->where('receipt_id',$receipt_id);
        $this->db->delete('receipt_detail');
        if(!empty($datas))
        {

            foreach ($datas as $row) {
                $result = $this->db->query('select * from receipt_detail where receipt_id = ? and product_korea_barcode = ?',array($row['receipt_id'],$row['product_korea_barcode']));
                if($result->num_rows() > 0)
                {
                    $current_amount = $result->row()->amount + $row['amount'];
                    $this->db->where('receipt_id',$row['receipt_id']);
                    $this->db->where('product_korea_barcode',$row['product_korea_barcode']);
                    $result = $this->db->update('receipt_detail',array('amount'=>$current_amount));
                }
                else
                {
                    $result = $this->db->insert('receipt_detail',$row);
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