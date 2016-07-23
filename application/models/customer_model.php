<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
   
    public function find_by_id($id)
    {
        $sql = "SELECT * FROM customer WHERE id = ?";
        $query = $this->db->query($sql,$id);
        return $query;
    }
    public function find_by_param($name,$email,$line_id,$telephone_no)
    {    
        $sql = "SELECT  * FROM customer WHERE 0=0 ";
        $array_param = array();
        if($name||$email||$line_id||$telephone_no)
        {
            $this->db->select('*');
            $this->db->from('customer');
            if($name)
            {
                $sql = $sql.' AND name like ?';
                $array_param[] = '%'.$name.'%'; 
            }

            if($telephone_no)
            {
                $sql = $sql.' AND telephone_no = ?';
                $array_param[] = $telephone_no;
            }
            if($line_id)
            {
                $sql = $sql.' AND line_id LIKE ?';
                $array_param[] ='%'. $line_id.'%'; 
            }
            if($email)
            {
                $sql = $sql.' AND email = ?';
                $array_param[] = $email;
            }
            $query = $this->db->query($sql,$array_param);
            log_message('debug','query :'.$this->db->last_query());
            return $query;
        }
        else
        {
            return FALSE;
        }
    }
    public function find_all_province()
    {
        $sql = "SELECT * FROM province";
        $query = $this->db->query($sql);
        return $query;
    }
    public function insert_customer($data)
    {
        log_message('debug','insert_customer');
        if($this->db->insert('customer',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_customer($data,$id)
    {
        $this->db->where('id',$id);
        log_message('debug','data'.json_encode($data));
        if($this->db->update('customer',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
  
}