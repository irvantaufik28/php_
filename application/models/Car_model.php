<?php

class Car_model extends CI_Model {
  public function get_data() 
  {
      $this->db->select('*');
      $this->db->from('car');
      $query = $this->db->get();
      return $query->result_array();
  }
}


