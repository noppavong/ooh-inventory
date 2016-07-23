<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Credit_note_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    public function viewall()
    {
        $result = $this->db->query('SELECT 
            credit_note.credit_note_url
            ,credit_note.status
            ,credit_note.credit_note_copy_url 
            ,credit_note.total as total
            ,credit_note.sum_price as sum_price 
            ,credit_note.vat as vat
            ,credit_note.id as id
            ,credit_note.sum_description as sum_description
            ,credit_note.credit_note_no as credit_note_no
            ,store1.name as company_name
            ,credit_note.create_date as create_date
            ,credit_note.less_gp as less_gp
            ,credit_note.custom_store_name as custom_store_name
            ,store1.code as store_code
            ,credit_note.special_discount as special_discount 
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc');
        log_message('debug',$this->db->last_query());
        return $result;
    }
    public function find_by_id($credit_note_id)
    {
        $sql = "select * from credit_note where id = ?";
        $query = $this->db->query($sql,$credit_note_id);
        return $query;
    }
    public function find_credit_note_detail_by_credit_note_id($credit_note_id)
    {
        $sql = "select * from credit_note_detail inner join product on product.korea_barcode = credit_note_detail.product_korea_barcode left join pricing on pricing.product_korea_barcode = credit_note_detail.product_korea_barcode  where credit_note_id = ?";
        $query = $this->db->query($sql,$credit_note_id);
        return $query;   
    }
    
    public function insert_credit_note($data)
    {
        if($this->db->insert('credit_note',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_credit_note($data,$credit_note_id)
    {
        $this->db->where('id',$credit_note_id);
        log_message('debug','data'.json_encode($data));
        if($this->db->update('credit_note',$data))
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
                $sql = 'select credit_note_no as credit_note_no from credit_note where MONTH(create_date) = "'.$month.'" AND YEAR(create_date) = "'.$year.'"';
            }
            else
            {
                $sql =  'select credit_note_no as credit_note_no from credit_note';
            }
            $query = $this->db->query($sql);
            log_message('debug','LAST QUERY '.$this->db->last_query());
            $max_number = 0;
            if($query->num_rows() >0)
            {
                //$next_no = $query->row()->credit_note_issue_no;
                    
                foreach ($query->result() as $row) {
                    if (strpos($row->credit_note_no, '-') !== FALSE)
                    {
                        $number_with_dot = array();
                        $number_with_dot = explode('-',$row->credit_note_no);
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
    public function delete_credit_note($credit_note_id)
    {
        $this->db->trans_start();
        $this->db->where('credit_note_id',$credit_note_id);
        $this->db->delete('credit_note_detail');
        $this->db->where('id',$credit_note_id);
        $this->db->delete('credit_note');
        $this->db->trans_complete();
    }
    public function update_credit_note_detail($datas,$credit_note_id)
    {
        $this->db->where('credit_note_id',$credit_note_id);
        $this->db->delete('credit_note_detail');
        if(!empty($datas))
        {

            foreach ($datas as $row) {
                $result = $this->db->query('select * from credit_note_detail where credit_note_id = ? and product_korea_barcode = ?',array($row['credit_note_id'],$row['product_korea_barcode']));
                if($result->num_rows() > 0)
                {
                    $current_amount = $result->row()->amount + $row['amount'];
                    $this->db->where('credit_note_id',$row['credit_note_id']);
                    $this->db->where('product_korea_barcode',$row['product_korea_barcode']);
                    $result = $this->db->update('credit_note_detail',array('amount'=>$current_amount));
                }
                else
                {
                    $result = $this->db->insert('credit_note_detail',$row);
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