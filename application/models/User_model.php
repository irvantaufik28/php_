<?php

class User_model extends CI_Model {
    public function get_users() 
    {
      {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_detail', 'user.id = user_detail.user_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    }
   
}


