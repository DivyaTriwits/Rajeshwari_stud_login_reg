<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion_controller extends CI_Controller {

  public function promotionRegisterPage()
    {
        $this->load->view('promotion/promotion_header');
        $this->Promotion_model->studentSubscribe();
        $data['states'] = $this->Promotion_model->getState();
        $this->load->view('promotion/promotion_register',$data);
        $this->load->view('promotion/promotion_footer');
    }

     public function promotionRegisterSubscriber(){
       // print_r($this->input->post());exit;
        $this->Promotion_model->registerSubscriber();
    }
}?>