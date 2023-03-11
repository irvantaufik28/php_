<?php

class Car extends CI_Controller {
   
    public function index() {
        $this->load->model('car_model');
        $data['cars'] = $this->car_model->get_data();

        $this->load->view('car_view', $data);
    }
}


