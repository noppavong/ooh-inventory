<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Address_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
   
    public function find_by_id($id)
    {
        $sql = "SELECT * FROM address WHERE id = ?";
        $query = $this->db->query($sql,$id);
        return $query;
    }
    public function find_by_customer_id($customer_id)
    {
        $sql = "SELECT *,address.id as address_id FROM address LEFT JOIN province ON address.province_id = province.id WHERE customer_id = ? ";
        $query = $this->db->query($sql,$customer_id);
        return $query;
    }
    public function insert_address($data)
    {
        log_message('debug','insert_address');
        if($this->db->insert('address',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_address($data,$id)
    {
        $this->db->where('id',$id);
        log_message('debug','data'.json_encode($data));
        if($this->db->update('address',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
  
}