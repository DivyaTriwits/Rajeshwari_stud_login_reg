<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageNotFound extends CI_Controller {

  public function __construct() {

    parent::__construct();

    // load base_url
   
  }

  public function index(){
 
   
    //  $this->load->view('website/header');
    $this->load->view('student/errorpage');
    // $this->load->view('website/footer');
 
  }

}