<?php

class User extends CI_Controller {
    public function index()
    {   
        $this->load->model('user_model');
        $data['users'] =$this->user_model->get_users();
        
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user_view', $data);    
		$this->load->view('templates/footer');
    }
}
