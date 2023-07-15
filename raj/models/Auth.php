<?php
class Auth extends CI_Model{
  public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Calcutta");
    }
//   public function student_register(){
//     $this->form_validation->set_rules('name','First name','required');
//     $this->form_validation->set_rules('lname','Last name','required');
//     $this->form_validation->set_rules('email','Email ID','required');
//     $this->form_validation->set_rules('num','Mobile number','required');
//     $this->form_validation->set_rules('pass','Password','required|min_length[8]');
//     $this->form_validation->set_rules('confirm_pass','Confirm Password','required|matches[pass]');

//     // FORM VALIDATION
//     if($this->form_validation->run() == TRUE){
//       $userRow = $this->db->where('email',$_POST['email'])->or_where('num',$this->input->post('num'))->where('status',1)->get('student_register');
//       if($userRow->num_rows() == 0){
//         date_default_timezone_set("Asia/Calcutta");
//         $otp =   mt_rand(100000000, 999999999);
//         $username = $this->generateRandomString(12);
//         $checkUsername = $this->db->where('username',$username)->get('student_register');
//         while($checkUsername->num_rows() > 0){
//             $username = $this->generateRandomString(12);
//             $checkUsername = $this->db->where('username',$username)->get('student_register');
//         }
//         $data = array(
//           'name'            => $this->input->post('name'),
//           'lname'           => $this->input->post('lname'),
//           'email'           => $this->input->post('email'),
//           'countryCode'     => $this->input->post('countryCode'),
//           'num'             => $this->input->post('num'),
//           'username'        => $username,
//           'otp'             => $otp,
//           'timestamp'       => date('y-m-d h:i:s'),
//           'referral_code'   => ($this->input->post('code'))? $this->input->post('code'): '',
//           'password'        => $this->input->post('pass'),
//           'cpassword'       => $this->input->post('confirm_pass'),
//           'status'       => 1,
//           'is_trial'       => 1
//         );
//         // print_r($data);exit;
//         if($this->db->insert('student_register', $data)){
//             // $userData = $this->db->get_where('student_register', array('username' => $username))->row();
//             $data =  array(
//             'razorpay_payment_id'       => 'pay_'.$username,
//             'merchant_order_id'         => 1,
//             'merchant_trans_id'         => rand(0000000000,9999999999),
//             'merchant_product_info_id'  => 'Registration 2020',
//             'merchant_surl_id'          => $this->input->post('name').' '.$this->input->post('lname'),
//             'merchant_furl_id'          => $this->input->post('num'),
//             'card_holder_name_id'       => $this->input->post('name').' '.$this->input->post('lname'),
//             'merchant_total'            => 29900,
//             'merchant_amount'           => 299,
//             'email'                     => $username,
//             'payment_status'            => 'Success',
//             'merchant_number'           => $this->input->post('num'),
//             // 'referral_code'             => 
//           );

//           if($this->db->insert('payment_response', $data)){
//              $this->load->library('email');
//             $this->email->from('no-reply@theglobalscholarship.org');
//             $this->email->to($_POST['email']);
//             $this->email->subject('TGS | Registration Successful');
//             $this->email->message('Congrats! Registration is successful. You can now login to enjoy our service for a limited period...');
//             if($this->email->send()){
//                 $this->email->from('no-reply@theglobalscholarship.org');
//                 $this->email->to('reachus@theglobalscholarship.org');
//                 $this->email->subject('TGS | New Registration');
//                 $this->email->message('New Prelaunch offer registration with email: '.$this->input->post('email').' and Mobile number: '.$this->input->post('num'));
//                 $this->email->send();
//             }
//           }
//           //reachus@theglobalscholarship.org

//             // $_SESSION['student_id_temp'] = $username;
//             // $_SESSION['student_number_temp'] = $userData->num;
//             // $_SESSION['student_email_temp'] = $userData->email;
//             // $_SESSION['username_temp'] = $userData->name;
//             // $_SESSION['referral_code'] = $userData->referral_code;
//             //  redirect('checkout/1');
//             // $this->session->set_userdata($data);
//             // $confirmationURL = base_url().'confirm-signup/'.$otp;
//             // $this->Response->send_sms('91'.$this->input->post('num'),$confirmationURL.' Your confirmation link.');
//             // $this->load->library('email');
//             // $this->email->from('no-reply@theglobalscholarship.org');
//             // $this->email->to($_POST['email']);
//             // $this->email->subject('OTP For Signup');
//             // $this->email->message('Your Confirmation for Signup is : '.$confirmationURL);
//             // $this->email->send();
//             // echo "<script>alert('Confirmation IS: ".$confirmationURL."');</script>";
//             // $this->session->set_flashdata("newuser","We have successfully sent confirmation link to your email address & mobile number."); //.$confirmationURL

//             $this->session->set_flashdata("success","Registered successfully.... Login now.");
//             redirect('student-login');
//         }

//       } else {
//         $this->session->set_flashdata("newuserFailed","Registration failed, email-id or mobile number already exists...!");
//         redirect('student-register');
//       }
//       // $this->login_user();
//       // redirect(base_url()."author/login","refresh");

//     } // End of IF

//   }


  public function student_register(){
    $this->form_validation->set_rules('name','First name','required');
    // $this->form_validation->set_rules('aadhaar_no','Adhaar No','required');
    $this->form_validation->set_rules('email','Email ID','required');
    $this->form_validation->set_rules('num','Mobile number','required');
    $this->form_validation->set_rules('pass','Password','required|min_length[8]');
    $this->form_validation->set_rules('confirm_pass','Confirm Password','required|matches[pass]');


// print_r($this->input->post());exit;
    // FORM VALIDATION
    if($this->form_validation->run() == TRUE){
      $this->deleteUnsubscribedUser($_POST['email'],$this->input->post('num'));
      $userRow = $this->db->get_where('student_register', array('email' => $_POST['email']));// 23 May update 
      //$userRow = $this->db->where('email',$_POST['email'])->or_where('num',$this->input->post('num'))->get('student_register');
      if($userRow->num_rows() == 0){
     //   date_default_timezone_set("Asia/Calcutta");
        $otp = mt_rand(100000000, 999999999);
        $username = $this->generateRandomString(12);
        $checkUsername = $this->db->where('username',$username)->get('student_register');
        while($checkUsername->num_rows() > 0){
          $username = $this->generateRandomString(12);
          $checkUsername = $this->db->where('username',$username)->get('student_register');
        }
        
        $YearIncreament = date('Y-m-d H:i:s', strtotime('+1 years'));
        $data = array(
          'name'            => $this->input->post('name'),
          'aadhaar_no'      => $this->input->post('aadhaar_no'),
          'email'           => $this->input->post('email'),
          'countryCode'     => $this->input->post('countryCode'),
          'num'             => $this->input->post('num'),
          'username'        => $username,
          'otp'             => $otp,
          'timestamp'       => date('y-m-d h:i:s'),
          'subscription_expiration_date' => $YearIncreament,
          'referral_code'        => ($this->input->post('code')) ? $this->input->post('code') : '-',
          'password'        => $this->input->post('pass'),
          'cpassword'       => $this->input->post('confirm_pass')
        );
        // print_r($data);exit;
        if($this->db->insert('student_register', $data)){
          $refCode = $this->Utilities_model->generateRandomStringAllCaps(8);
          $data = array(
            'fname' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'student_username' => $username,
            'is_student' => 1,
            'countryCode' => '91',
            'mobile' => $this->input->post('num'),
            'password' => $this->input->post('num'),
            'cpassword' => $this->input->post('num'),
            'referral_code' => $refCode,
            'discount_on_referral' => 50,
            'register_through' => 'registration',
            'otp' => $otp
          );
          $this->db->insert('ambassador', $data);
          $userData = $this->db->get_where('student_register', array('username' => $username))->row();
          $_SESSION['student_id_temp'] = $username;
          $_SESSION['student_number_temp'] = $userData->num;
          $_SESSION['student_email_temp'] = $userData->email;
          $_SESSION['username_temp'] = $userData->name;
          $_SESSION['referral_code'] = $userData->referral_code;
          redirect('checkout/1');
             $this->session->set_userdata($data);
             $confirmationURL = base_url().'confirm-signup/'.$otp;
             $this->Response->send_sms('91'.$this->input->post('num'),$confirmationURL.' Your confirmation link.');
             $this->load->library('email');
             $this->email->from('no-reply@theglobalscholarship.org');
             $this->email->to($_POST['email']);
             $this->email->subject('OTP For Signup');
             $this->email->message('Your Confirmation for Signup is : '.$confirmationURL);
             $this->email->send();
             //echo "<script>alert('Confirmation IS: ".$confirmationURL."');</script>";
             $this->session->set_flashdata("newuser","We have successfully sent confirmation link to your email address & mobile number."); //.$confirmationURL
        }
      } else {
        $this->session->set_flashdata("newuserFailed","Registration failed, email-id or mobile number already exists...!");
      }
      // $this->login_user();
      // redirect(base_url()."author/login","refresh");

    } // End of IF
  }
  
  
  

  public function confirm_signup_user($otp = ''){
    $rows = $this->db->select('email,name,num')->from('student_register')->where('otp',$otp)->get();
    // print_r($rows); exit;
    if($rows->num_rows() > 0){
      $fina = $rows->row();
      $whr = array(
        'email' => $fina->email,
        'otp' => $otp
      );
      $this->db->where($whr);
      if($this->db->update('student_register',array('status'=>'1'))){
        $_SESSION['student_id'] = $fina->email;
        $_SESSION['username'] = $fina->name;
        $_SESSION['student_number'] = $fina->num;
        redirect('redirect-to-payment');
            //echo "Your email address is verified";
            //echo "<a href='".site_url('checkout/1')."'> Click here for payment</a>";
      }
    } else {
      echo "Sorry..! Something Went Wrong";

    }
    if((!isset($_SESSION['confirmation']) && $otp != '' && isset($_SESSION['signupotp']) && $otp == $_SESSION['signupotp'] && isset($_SESSION['confirmemail']))){
      $_SESSION['confirmation'] = 'success';
    } else {
      // print_r($_SESSION);
    }
  }

  public function login_user(){
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required|required|min_length[4]');
    // LOGIN FORM VALIDATION
    if($this->form_validation->run() == TRUE){

      if($this->input->post('email')){
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $confirmQry =  $this->db->where('(registered_email = "'.$_POST["email"].'" OR registered_mobile_no = "'.$_POST["email"].'")')->get('student_registration');
     
        }else{
                $confirmQry = $this->db->get_where('student_registration',array("registered_email" => $_POST['email']));
        }

      }
      
      $customerData = $confirmQry->row();
       // print_r($customerData);exit;
      //print_r();exit;
      if($confirmQry->num_rows() > 0 ){
        $userData = $confirmQry->row();
        // print_r($userData->student_password_hashed.'-'.$_POST['password']);exit;
        if($userData->student_password_hashed == $_POST['password']){
             if($this->input->post('sid')!=''){
           
            redirect($this->input->post('sid'),'_blank');
            
        }else{
            //print_r($userData);exit;
          $_SESSION['registered_email'] = $userData->registered_email;
          $_SESSION['student_username'] = $customerData->student_username;
          $_SESSION['student_name'] = $customerData->student_name;

          $username=$this->session->userdata('student_username');
          $date=date("y-m-d");
          // $verify = $this->Student_model->logindetails($username,$date);
          $ipAddress=$this->Student_model->returnClientIPAddress();
           //print_r($ipAddress);exit;
          // if ($verify->num_rows() > 0) {
            // echo('inside multiple');exit();
            $data1=array(
              'student_username'=>$this->session->userdata('student_username'),
              'date'=>date("y-m-d"),
              'login_time'=>date("y-m-d H:i:s"),
              'ip_address'=>$ipAddress,
            );
            $result=$this->db->insert('login_details',$data1);
         $this->session->set_flashdata("success","You are logged in.");
        //  print_r($this->input->get('redirect-to'));exit;
         if($this->input->get('redirect-to'))
         {
           redirect($this->input->get('redirect-to'));
        }
        else
        	{
           if($this->session->userdata('login_referrer')!=""){
             
             echo '<script>alert("Sesso data saved")</script>';
             $tmp_referrer = $this->session->userdata('login_referrer');
			$this->session->unset_userdata('login_referrer');
			redirect($tmp_referrer);
           
           }
           else
           {
           echo '<script>alert("Sesso data Not Saved")</script>';
             $this->session->set_flashdata('success','Successfully');
          redirect(base_url('student-home'));
           redirect(base_url('$sid'));
           }
        }
        }
      } else {
        $this->session->set_flashdata('failure','Username And Password Do Not Match!!');
        redirect(base_url('student-login'));
      }
    } else {

      $this->session->set_flashdata('failure','No Account Found');
      redirect(base_url('student-login'));
      } // End of Else
    } // End of IF
    

  } // End of login_user Function
  public function student_user($id){
      if($id){
        $confirmQry =  $this->db->where('student_username',$id)->get('student_registration_log');
      
      $customerData = $confirmQry->row();
        //print_r($customerData);exit;
      //print_r();exit;
      if($confirmQry->num_rows() > 0 ){
        $userData = $confirmQry->row();
        // print_r($userData->student_password_hashed.'-'.$_POST['password']);exit;
      
          $_SESSION['registered_email'] = $userData->registered_email;
          $_SESSION['student_username'] = $customerData->student_username;
          $_SESSION['student_name'] = $customerData->student_name;

          $username=$this->session->userdata('student_username');
          $date=date("y-m-d");
          // $verify = $this->Student_model->logindetails($username,$date);
          $ipAddress=$this->Student_model->returnClientIPAddress();
          // print_r($ipAddress);exit;
          // if ($verify->num_rows() > 0) {
            // echo('inside multiple');exit();
            $data1=array(
              'student_username'=>$this->session->userdata('student_username'),
              'date'=>date("y-m-d"),
              'login_time'=>date("y-m-d H:i:s"),
              'ip_address'=>$ipAddress,
            );
            $result=$this->db->insert('login_details',$data1);
         $this->session->set_flashdata("success","You are logged in.");
        //  print_r($this->input->get('redirect-to'));exit;
         if($this->input->get('redirect-to')){
           
          redirect($this->input->get('redirect-to'));
        }else{
             $this->session->set_flashdata('success','Successfully');
          redirect(base_url('student-home'));
        }
      
    } else {

      $this->session->set_flashdata('failure','Username And Password Do Not Match!!');
      redirect(base_url('student-login'));
      } // End of Else
    } // End of IF
    

  } // End of login_user Function
  
  /*---------------------8th may------------------------------
  public function forgotpassmail(){
    $this->form_validation->set_rules('email','Recovery Email','required');
    // LOGIN FORM VALIDATION
    if($this->form_validation->run() == TRUE){
      $confirmQry = $this->db->get_where('student_registration',array("registered_email" => $_POST['email']));
      if($confirmQry->num_rows() > 0 ){
        $emailID = $confirmQry->row();
        
        $otp = mt_rand(10000, 99999);
        $insert = array(
          'session_id' => $emailID->registered_email,
          'otp' => $otp
        );
        $this->db->insert('forgot_pass',$insert);
        $confirmationURL = base_url().$this->uri->segment(1, 0).'/confirm_password/'.$otp.'/'. urlencode($emailID->registered_email);
        //print_r($confirmationURL);exit;
        /*$this->email->from('no-reply@theglobalscholarship.org', 'The GlobalScholarship Security Team');
        $this->email->to($_POST['email']);
        $this->email->subject('OTP For Password Reset');
        $this->email->message('Your Confirmation for Reset Password : '.$confirmationURL);
        $this->email->send();
        $this->session->set_flashdata("success","We have successfully sent reset link to your email address. Please open this link in same browser window.");
        echo "<script>alert('Confirmation sent to registered email');</script>";
        return $confirmationURL;
      } else{
        echo "<script>alert('No such as account found');</script>";
        return false;
      }
    } // End of IF
  } // End of forget_password Function
  
------------------8th may-------------------------------*/
  
  
  public function forget_password()
  {
    $email = $this->input->post('email');
    $_SESSION['email']=$this->input->post('email');  // 15th may 
    $this->form_validation->set_rules('email','Recovery Email','required');
    // LOGIN FORM VALIDATION
    if($this->form_validation->run() == TRUE)
    {
      $confirmQry = $this->db->get_where('student_registration',array("registered_email" => $_POST['email']));
     // $confirmQry = $this->db->get_where('student_registration',array("registered_email" => $this->input->post('email')));
      
      if($confirmQry->num_rows() > 0 )
      {
        $emailID = $confirmQry->row();
        
        $otp = mt_rand(10000, 99999);
        $insert = array(
          'session_id' => $emailID->registered_email,
          'otp' => $otp
        );
        $this->db->insert('forgot_pass',$insert);
        $confirmationURL = base_url().$this->uri->segment(1, 0).'/confirm_password/'.$otp.'/'. urlencode($emailID->registered_email);
        
       // echo "<script>alert('Confirmation IS: ".$confirmationURL."');</script>";  //update on 12 May
        return $confirmationURL; //update on 2 June
       // return $confirmQry->result(); //update on 12 May
	} else
      {
        	echo "<script>alert('No such as account found');</script>";
      }
    } // End of IF
  }

// End of forget_password Function

  public function confirm_password($otp, $id){
    $check = $this->db->get_where('forgot_pass', array('session_id'=>urldecode($id), 'otp' => $otp));
      // echo $this->db->last_query();
      // print_r($check->row());
    if($check->num_rows() > 0){
      $this->load->view('new/new_header');
      $this->load->view('new/reset_password', array('session' =>urldecode($id)));
      $this->load->view('new/footer');
      //$this->load->view('public/forgot_password_for_contributor');// Anamika updated code 18 APR 23
      $this->db->delete('forgot_pass', array('session_id' => urldecode($id)));
 //echo "<script>alert('hello Testing Varun1.');</script>";  ON 16-JUN-23 BY DIVYA WHO VARUN

    } else {
      echo "Something went wrong, Please try again.";
    }

    } // End of confirm_password Function

    public function reset_password(){

      $this->form_validation->set_rules('newpass','Password','required');
      $this->form_validation->set_rules('conpass','Confirm Password','required|matches[newpass]');
 //echo "<script>alert('hello Testing Varun2.');</script>";  ON 16-JUN-23 BY DIVYA WHO VARUN

        // LOGIN FORM VALIDATION
      if($this->form_validation->run() == TRUE){
        
        //echo "<script>alert('hello Testing Varun3.');</script>";   ON 16-JUN-23 BY DIVYA WHO VARUN

        $this->db->set('student_password_hashed', $this->input->post('conpass'));
     $this->db->where('registered_email', $this->session->userdata('email'));//15th may 
       // $this->db->where('registered_email', reachveena.deshpande@gmail.com);
        $this->db->update('student_registration');
        redirect('student-login');
      } else {
        echo "<script>alert('Confirmation Failed. Try Again.');</script>";
         // $this->session->set_flashdata("Error","Confirmation Failed. Try Again.");
         // redirect("/forgot_password","refresh");
        } // End of Else
      }

      public function contributor_register(){
        $this->form_validation->set_rules('name','First name','required');
        $this->form_validation->set_rules('lname','Last name','required');
        $this->form_validation->set_rules('email','Email ID','required');
        $this->form_validation->set_rules('num','Mobile number','required');
        $this->form_validation->set_rules('pass','Password','required|min_length[8]');
        $this->form_validation->set_rules('confirm_pass','Confirm Password','required|matches[pass]');

      // FORM VALIDATION
        if($this->form_validation->run() == TRUE){

          $userRow = $this->db->get_where('contributors', array('email' => $_POST['email']));
          if($userRow->num_rows() == 0){
            $otp =   mt_rand(100000000, 999999999);
            $data = array(
              'name'       => $this->input->post('name'),
              'lname'      => $this->input->post('lname'),
              'email'      => $this->input->post('email'),
              'num'        => $this->input->post('num'),
              'pass'       => $this->input->post('pass'),
              'countryCode'=> $this->input->post('countryCode'),
              'otp'        => $otp
            );

            $this->db->insert('contributors', $data);
            $this->session->set_userdata($data);
            $confirmationURL = base_url().'confirm-signup-contributor/'.$otp;
            $this->Response->send_sms($this->input->post('countryCode').$this->input->post('num'),$confirmationURL.' Your confirmation link.',NEW_REGISTRATION_SMS_TEMPLATE_ID);
            $this->load->library('email');
            $this->email->from('no-reply@theglobalscholarship.org');
            $this->email->to($_POST['email']);
            $this->email->subject('OTP For Signup');
            $this->email->message('Your Confirmation for Signup is : '.$confirmationURL);
            $this->email->send();
        //   echo "<script>alert('Confirmation IS: ".$confirmationURL."');</script>";

          $this->session->set_flashdata("success","We have successfully sent confirmation link to your email address & mobile number."); //$confirmationURL
        } else {
          $this->session->set_flashdata("failed","You have already registered with us.");
        }
       // $this->login_user(); 
        //redirect(base_url()."author/login","refresh");

      } // End of IF
    }

    public function confirm_signup_contributor($otp = ''){
      $rows = $this->db->select('email')->from('contributors')->where('otp',$otp)->get();
      // print_r($rows); exit;
      if($rows->num_rows() > 0){
        $fina = $rows->row();
        $whr = array(
          'email' => $fina->email,
          'otp' => $otp
        );
        $this->db->where($whr);
        $this->db->update('contributors',array('status'=>'1'));
        redirect('redirect-contributor');
        // echo "Your email address is verified";
        // echo "<a href='".base_url()."'> Click here to go back</a>";
      } else {
        echo "Sorry..! Something Went Wrong";

      }
      if((!isset($_SESSION['confirmation']) && $otp != '' && isset($_SESSION['signupotp']) && $otp == $_SESSION['signupotp'] && isset($_SESSION['confirmemail']))){
        $_SESSION['confirmation'] = 'success';
      } else {
        // print_r($_SESSION);
      }
    }

    public function login_contributor(){
      if($this->session->userdata('userid')){
        redirect('add-new-scholarship');
      }else{
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Password','required');
          // LOGIN FORM VALIDATION
        if($this->form_validation->run() == TRUE){
          $confirmQry = $this->db->get_where('contributors',array("email" => $_POST['email'],"status" => '1'));

          $customerData = $confirmQry->row();
            //print_r();exit;
          if($confirmQry->num_rows() > 0 ){
            $userData = $confirmQry->row();
            if($userData->pass == $_POST['pass']){
              $_SESSION['userid'] = $_POST['email'];
              $_SESSION['username'] = $customerData->name;
              $this->session->set_flashdata("success","You are logged in.");
                // redirect("/main_hub/login","refresh");

                // SETTING SESSION VARIABLES
                // $_SESSION['user_logged'] = TRUE;
                // $_SESSION['user_logged'] = $userData->user_fname;

                //	$this->response->alert('Logged IN');
              redirect('add-new-scholarship');
                // header('location:'.base_url().'author/dashboard');
            } else {
              $this->session->set_flashdata('failure','Username And Password Do Not Match!!');
                // redirect("/main_hub/login","refresh");
              redirect(base_url('login'));
            }
          } else {
            $this->session->set_flashdata('failure','No Account Found');
            redirect(base_url('login'));
              // redirect("/main_hub/login","refresh");
            } // End of Else
          } // End of IF
        }
    } // End of login_user Function

    public function forget_password_contributor(){
      $this->form_validation->set_rules('email','Recovery Email','required');
      // LOGIN FORM VALIDATION
      if($this->form_validation->run() == TRUE){


        $confirmQry = $this->db->get_where('contributors',array("email" => $_POST['email']));
        if($confirmQry->num_rows() > 0 ){

          $emailID = $confirmQry->row();
          $otp = mt_rand(10000, 99999);

          $insert = array(
            'session_id' => $emailID->email,
            'otp' => $otp
          );
          $this->db->insert('forgot_pass',$insert);

          $confirmationURL = base_url().$this->uri->segment(1, 0).'/confirm_password_for_contributor/'.$otp.'/'. urlencode($emailID->email);

          $this->email->from('no-reply@theglobalscholarship.org', 'The GlobalScholarship Security Team');
          $this->email->to($_POST['email']);
          $this->email->subject('OTP For Password Reset');
          $this->email->message('Your Confirmation for Reset Password : '.$confirmationURL);
          $this->email->send();
          $this->session->set_flashdata("success","We have successfully sent reset link to your email address. Please open this link in same browser window.");
        //   echo "<script>alert('Confirmation IS: ".$confirmationURL."');</script>";


        } else{
          echo "<script>alert('No such as account found');</script>";
        }
      } // End of IF
    } // End of forget_password Function


    public function confirm_password_for_contributor($otp, $id){
      $check = $this->db->get_where('forgot_pass', array('session_id'=>urldecode($id), 'otp' => $otp));
      // echo $this->db->last_query();
      // print_r($check->row());
      if($check->num_rows() > 0){
        $this->load->view('public/header');
        $this->load->view('public/reset_password_for_contributor', array('session' =>urldecode($id)));
        $this->load->view('public/footer');
        $this->db->delete('forgot_pass', array('session_id' => urldecode($id)));

      } else {
        echo "Something went wrong, Please try again.";
      }

    } // End of confirm_password Function


    public function reset_password_for_contributor(){

      $this->form_validation->set_rules('newpass','Password','required');
      $this->form_validation->set_rules('conpass','Confirm Password','required|matches[newpass]');

      // LOGIN FORM VALIDATION
      if($this->form_validation->run() == TRUE){

        $this->db->set('pass', $this->input->post('conpass'));
        $this->db->where('email', $this->input->post('email'));
        $this->db->update('contributors');
        //redirect('recover-password-complete'); // Anamika update 14 APR 23
        redirect('base_url()');					// Anamika update 14 APR 23
      } else {
        echo "<script>alert('Confirmation Failed. Try Again.');</script>";
        //$this->session->set_flashdata("Error","Confirmation Failed. Try Again.");
        // redirect("/forgot_password","refresh");
      } // End of Else
    }
    
    public function generateRandomString($n) { 
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
      $randomString = '';
      for ($i = 0; $i < $n; $i++) { 
       $index = rand(0, strlen($characters) - 1); 
       $randomString .= $characters[$index]; 
     }
     return $randomString; 
   }

   public function deleteUnsubscribedUser($email,$mobile){
    $this->db->group_start()->where('email',$email)->or_where('num',$mobile)->group_end()->where('status',0)->delete('student_register');
  }
}
?>