<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    public function viewall()
    {
    	$sql = "select * from product";
    	$query = $this->db->query($sql);
    	return $query;
    }
    public function find_by_kbarcode($korea_barcode)
    {   
        $this->db->select(" * ");
        $this->db->from("product");
        $this->db->where_in($korea_barcode);
        $query = $this->db->get();
        return $query;
    }
    public function find_by_koreabar($korea_barcode)
    {
        $sql = "select * from product where korea_barcode = ?";
        $query = $this->db->query($sql,array($korea_barcode));
        return $query;
    }
    public function find_by_name($product_name)
    {
        $sql = "select * from product where UPPER(product_name) LIKE (?)  OR korea_barcode LIKE (?) limit 10";
        $query = $this->db->query($sql,array('%'.strtoupper($product_name).'%','%'.$product_name));                
        
        log_message('debug',$this->db->last_query());
        return $query;
    }
    public function find_by_four_digit($korea_barcode)
    {
           $sql = "select * from product where korea_barcode LIKE($korea_barcode)";
        $query = $this->db->query($sql,'%'.$korea_barcode);
        return $query;

    }
    public function insert_product($data)
    {
    	if($this->db->insert('product',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
    public function update_product($data,$korea_barcode)
    {
        $this->db->where('korea_barcode',$korea_barcode);
     
        log_message('debug',json_encode($data));
        if($this->db->update('product',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function delete_product($korea_barcode)
    {
        $this->db->delete('product', array('korea_barcode' => $korea_barcode)); 
    }
}