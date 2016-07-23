<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Channel_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    public function find_all()
    {
        $sql = "SELECT * FROM channel";
        $query = $this->db->query($sql);
        return $query;
    }   
    public function find_by_id($id)
    {
        $sql = "SELECT * FROM channel WHERE id = ?";
        $query = $this->db->query($sql,$id);
        return $query;
    }
    public function insert_channel($data)
    {
        log_message('debug','insert_channel');
        if($this->db->insert('channel',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_channel($data,$id)
    {
        $this->db->where('id',$id);
        log_message('debug','data'.json_encode($data));
        if($this->db->update('channel',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
  
}