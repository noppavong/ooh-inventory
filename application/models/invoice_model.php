<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Invoice_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    public function viewall()
    {
        $sql = "SELECT 
             invoice.invoice_url
            ,invoice.status
            ,invoice.invoice_copy_url
            ,invoice.total as total
            ,invoice.sum_price as sum_price 
            ,invoice.vat as vat
            ,invoice.id as id
            ,invoice.invoice_no as invoice_no
            ,store1.name as company_name
            ,invoice.create_date as create_date
            ,store1.code as store_code
            ,invoice.less_gp as less_gp 
            ,invoice.special_discount as special_discount
            ,invoice.custom_store_name as custom_store_name
            FROM invoice LEFT JOIN store  as store1 
                ON store1.code = invoice.store_code 
                ORDER BY create_date,invoice_no DESC";
        return $this->db->query($sql);
    }
    public function find_by_id($invoice_id)
    {
        $sql = "SELECT * ,invoice.gp as invoice_gp,store.code as store_store_code,invoice.customer_code as customer_code FROM invoice LEFT JOIN store ON invoice.store_code = store.code WHERE id = ?";
        $query = $this->db->query($sql,$invoice_id);
        return $query;
    }
    public function find_detail_by_invoice_id($invoice_id)
    {
        $sql = "SELECT *,pricing.mt_price as market_price FROM invoice_detail INNER JOIN product ON product_korea_barcode = korea_barcode LEFT JOIN pricing on pricing.product_korea_barcode = product.korea_barcode WHERE invoice_id = ?";
        $query = $this->db->query($sql,$invoice_id);
        return $query;   
    }
    public function find_store_detail($store_id)
    {
        $sql = "select * from store where code = ?";
        $query = $this->db->query($sql, $store_id);
        return $query;
    }
    public function insert_invoice($data)
    {
        if($this->db->insert('invoice',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_invoice($data,$invoice_id)
    {
        $this->db->where('id',$invoice_id);
        log_message('debug','data'.json_encode($data));
        if($this->db->update('invoice',$data))
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
            $year = '';
                log_message('debug','create_date __> '.$create_date);
            if($create_date){
                $month = DateTime::createFromFormat('Y-m-d', $create_date)->format('m');
                $year = DateTime::createFromFormat('Y-m-d', $create_date)->format('Y');
                log_message('debug','MONTH __> '.$month);
            }
            if(!empty($month))
            {
                $sql = 'select invoice_no as invoice_no from invoice where MONTH(create_date) = "'.$month.'" AND YEAR(create_date) = "'.$year.'"';
            }
            else
            {
                $sql =  'select invoice_no as invoice_no from invoice';
            }
            $query = $this->db->query($sql);
            log_message('debug','LAST QUERY '.$this->db->last_query());
            $max_number = 0;
            if($query->num_rows() >0)
            {
                //$next_no = $query->row()->invoice_issue_no;
                    
                foreach ($query->result() as $row) {
                    if (strpos($row->invoice_no, '-') !== FALSE)
                    {
                        $number_with_dot = array();
                        $number_with_dot = explode('-',$row->invoice_no);
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
    public function delete_invoice($invoice_id)
    {
        $this->db->trans_start();
        $this->db->where('invoice_id',$invoice_id);
        $this->db->delete('invoice_detail');
        $this->db->where('id',$invoice_id);
        $this->db->delete('invoice');
        $this->db->trans_complete();
    }
    public function update_invoice_detail($datas,$invoice_id)
    {
        $this->db->where('invoice_id',$invoice_id);
        $this->db->delete('invoice_detail');
        if(!empty($datas))
        {
            foreach ($datas as $row) {
                $result = $this->db->query('select * from invoice_detail where invoice_id = ? and product_korea_barcode = ?',array($row['invoice_id'],$row['product_korea_barcode']));
                if($result->num_rows() > 0)
                {
                    $current_amount = $result->row()->amount + $row['amount'];
                    $this->db->where('invoice_id',$row['invoice_id']);
                    $this->db->where('product_korea_barcode',$row['product_korea_barcode']);
                    $result = $this->db->update('invoice_detail',array('amount'=>$current_amount));
                }
                else
                {
                    $result = $this->db->insert('invoice_detail',$row);
                   
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