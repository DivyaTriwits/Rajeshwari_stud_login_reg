<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api extends REST_Controller {
    
    public function __construct() {
       parent::__construct();
       $this->load->database();
        $this->load->model('Data_model');
    }
       
//Display Register Details...
    public function viewRegister_get()
    {
        $data = $this->db->get("student_registration")->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }
      
//Insert Register Details...
    public function InsertRegister_post()
    {
     $data = array('FullName' => $this->input->post('name'),
                   'MobileNumber' => $this->input->post('mobile'),
                   'Email' => $this->input->post('email'),
                   'Password' => $this->input->post('password'),
                   
                  );
           $r = $this->Data_model->InsertRegister($data);
           $this->response($r); 
    }
    //Update Register Details...

 public function UpdateRegister_put(){
           $id = $this->uri->segment(4);
           $data = array(
            //'FullName' => $this->input->get('FullName'),
           //'MobileNumber' => $this->input->get('MobileNumber'),
           //'Email' => $this->input->get('Email'),
           'Password' => $this->input->get('Password'),
           );
            $r = $this->Data_model->UpdateRegister($id,$data);
               $this->response($r); 
       }

        
//Delete Register Details...
    public function DeleteRegister_delete($id)
    {
        $this->db->delete('register', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
        
}?>