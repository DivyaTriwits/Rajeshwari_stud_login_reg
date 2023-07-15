<?php
class Promotion_model extends CI_Model{

 public function studentSubscribe(){
  if($this->input->post('email')){
    $subsId = $this->Student_model->generateRandomString(18);
    $subscribeArray = array(
      'student_username' => $subsId,
      'student_name' => $this->input->post('name'),
      'registered_email' => $this->input->post('email'),
      'registered_mobile_no ' => $this->input->post('mobile_no'),
      'source' => $this->input->post('source')
    );
         // print_r($subscribeArray);exit;
    if($this->db->insert('promotion_register',$subscribeArray)){
      redirect('tgs-get-alerts?subscriber='.$subsId);
    // redirect('https://youtu.be/dciDCY6xyDs');
    }
  }
}

public function registerSubscriber(){
    //   print_r($this->input->post());exit;
  if($this->input->post('sub_id_auth') != ''){
    $this->db->set('course_name',$this->input->post('course'))->where('student_username',$this->input->post('sub_id_auth'))->update('promotion_register');
    $subscriberData = $this->db->where('student_username',$this->input->post('sub_id_auth'))->get('promotion_register');
    if($subscriberData->num_rows() == 0){
      $this->session->set_flashdata('failure','something went wrong!!');
      redirect('tgs-get-alerts');
    }else{
      $subscriberData = $subscriberData->row();
    }
   // $this->Auth->deleteUnsubscribedUser($subscriberData->registered_email,$subscriberData->registered_mobile_no);
    $userRowLog = $this->db->where('registered_email',$subscriberData->registered_email)->or_where('registered_mobile_no',$subscriberData->registered_mobile_no)->get('student_registration_log');
    $userRow = $this->db->where('registered_email',$subscriberData->registered_email)->or_where('registered_mobile_no',$subscriberData->registered_mobile_no)->get('student_registration');
    
    if($userRow->num_rows() == 0 && $userRowLog->num_rows() == 0){
        
        
      date_default_timezone_set("Asia/Calcutta");
      $otp = mt_rand(100000000, 999999999);
      $username = $this->Student_model->generateRandomString(18);
      $checkUsername = $this->db->where('student_username',$username)->get('student_registration');
      while($checkUsername->num_rows() > 0){
        $username = $this->Student_model->generateRandomString(18);
        $checkUsername = $this->db->where('student_username',$username)->get('student_registration');
      }
      $YearIncreament = date('Y-m-d H:i:s', strtotime('+1 years'));
      $refCode =$this->generateRandomString(11);
      $data = array(
     'student_name'            => $subscriberData->student_name,
        'registered_email'           => $subscriberData->registered_email,
        'registered_mobile_no '             => $subscriberData->registered_mobile_no,
        
        'student_username'        => $username,
          //'otp'             => $otp,
        'student_state'=>$this->input->post('state'),
        'referral_code'=> $refCode,
        'course_name'=>$this->input->post('course'),
        'registration_initiated_datetime'       => date('Y-m-d H:i:s'),
        'subscription_validity_datetime' => $YearIncreament,
        'student_password_hashed' => ($this->input->post('password')) ? $this->input->post('password') : $subscriberData->mobile_no,
        'is_promotion_register'=>1,
        'page_source' => ($subscriberData->source) ? $subscriberData->source : ''
          //'cpassword'       => ($this->input->post('cpassword')) ? $this->input->post('cpassword') : $subscriberData->mobile_no
      );
      
      
    //   print_r($data);exit;

      if($this->db->insert('student_registration_log', $data)){

       $userData = $this->db->get_where('student_registration_log', array('student_username' => $username))->row();
       $_SESSION['student_id_temp'] = $username;
       $_SESSION['student_number_temp'] = $userData->student_name;
       $_SESSION['student_email_temp'] = $userData->registered_email;
       $_SESSION['username_temp'] = $userData->registered_mobile_no;
       $_SESSION['referral_code'] = $userData->referral_code;
      redirect('Razorpay/pay/'.$username);
     }
   } else {
    $this->session->set_flashdata("failure","Registration failed, email-id or mobile number already exists...!");
    if($subscriberData->source != '' ){
         redirect('tgs-get-alerts?source='.$subscriberData->source);
    }else{
        redirect('tgs-get-alerts');    
    }
    
  }
}
$this->session->set_flashdata("failure","Please re-enter details");
redirect('tgs-get-alerts');
}

  public function generateRandomString($n) 
  { 
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = '';
    for ($i = 0; $i < $n; $i++) { 
      $index = rand(0, strlen($characters) - 1); 
      $randomString .= $characters[$index]; 
    }
    return $randomString; 
  }

  public function getState(){
    return $this->db->get('states')->result();
  }
}?>