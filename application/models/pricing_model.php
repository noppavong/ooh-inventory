<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pricing_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    public function viewall()
    {
    	$sql = "select * from pricing inner join product on pricing.product_korea_barcode = product.korea_barcode";
    	$query = $this->db->query($sql);
    	return $query;
    }
    public function view_pricing()
    {
        $sql = "select * from product left join pricing on pricing.product_korea_barcode = product.korea_barcode ORDER BY product.korea_barcode ASC";
        $query = $this->db->query($sql);
        return $query;   
    }
    public function find_by_id($pricing_id)
    {
        $sql = "select * from pricing inner join product on pricing.product_korea_barcode = product.korea_barcode where pricing.id = ?";
        $query = $this->db->query($sql,$pricing_id);
        return $query;
    }
    public function find_by_kbarcode($korea_barcode)
    {
        $sql = "select * from ";
        $this->db->select(' * ');
        $this->db->from('pricing');
        $this->db->join('product', 'product.korea_barcode = pricing.product_korea_barcode');
        $this->db->where_in('pricing.product_korea_barcode',$korea_barcode);
        $query = $this->db->get();
        log_message('debug',$this->db->last_query());
        return $query;
    }
    public function insert_pricing($data)
    {
    	if($this->db->insert('pricing',$data))
        {
            return true;
        }
        else
        {
            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
            $msg = $this->db->_error_message();
            $num = $this->db->_error_number();

            $data['msg'] = "Error(".$num.") ".$msg;
            return $data;
        }
    }
    public function update_pricing($data,$pricing_id)
    {
        $this->db->where('id',$pricing_id);
        log_message('debug',"UPDATE PRICING ".$pricing_id);
        log_message('debug',json_encode($data));
        if($this->db->update('pricing',$data))
        {
            return true;
        }
        else
        {
            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
            $msg = $this->db->_error_message();
            $num = $this->db->_error_number();

            $data['msg'] = "Error(".$num.") ".$msg;
            return $data;
        }
    }
    public function delete_pricing($pricing_id)
    {
        $this->db->delete('pricing', array('id' => $id)); 
    }
}