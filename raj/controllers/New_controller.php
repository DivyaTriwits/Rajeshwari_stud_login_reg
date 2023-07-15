<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_controller extends CI_Controller
{
   public function __construct() {
        parent::__construct();
        
        $this->load->library("pagination");
        date_default_timezone_set("Asia/Calcutta");
    }
    public function index()
    {
        $this->load->view('new/new_header');
        $data['data']         = $this->db->get('scholarships');
        $data['student']      = $this->db->get('student_registration');
        //$data['contributors'] = $this->db->get('contributors'); // uncommented this line 
        $this->load->view('new/new_home', $data);
        $this->load->view('new/footer');
    }
  public function scholarships($id)
    {   
       $this->load->view('new/new_header');
        $data['scholarships']=$this->New_model->searchEducationBased($id);
        if($id=='Scholarship'){
            $newid='Abroad';
        }else{
            $newid='Scholarship';
        }
         $data['other_scholarships']=$this->New_model->serachOtherScholarship($newid);
        $this->load->view('new/new_scholarship',$data);
       $this->load->view('new/footer');
    }
    
   /* public function pageInformation($id,$name)
    {
         $this->load->view('new/new_header');
       $this->load->view('new/whatspopup');     //for whatsapp pop up icon
        $data['details']=$this->New_model->getScholarshipDetails($id);
        $data['attachment']=$this->New_model->getScholarshipAttachment($id);
        //print_r($data);exit();
        $data['some']=$this->New_model->someOtherScholarship($data['details']->scholarship_type);
        $this->load->view('new/whatspopup',$data);
        $this->load->view('new/new_scholarship_details',$data);
         $this->load->view('new/footer');
    }*/
    /*public function pageInformation($id,$name)
    {
         $this->load->view('new/new_header');
           
        $data['details']=$this->New_model->getScholarshipDetails($id);
        $data['attachment']=$this->New_model->getScholarshipAttachment($id);
        //print_r($data);exit();
        $data['some']=$this->New_model->someOtherScholarship($data['details']->scholarship_type);
         // Example column name
         
        $data['scholarshipDescription'] = $this->formatScholarshipDescription($data['details']->scholarship_description);
         $this->load->view('new/whatspopup',$data);
        $this->load->view('new/new_scholarship_details',$data);
         $this->load->view('new/footer');
    } made change on 11-07-2023 by varun */
    /*public function formatScholarshipDescription($description) {
    $pattern = '/<b>(.*?)<\/b>/';
    preg_match_all($pattern, $description, $matches);

    $formattedDescription = '';
    $visibleContent = '';

    // Find the position of the first <b></b> tag
    $firstTagPosition = strpos($description, '<b>');

    if ($firstTagPosition !== false) {
        // Extract the content before the first <b></b> tag as visible content
        $visibleContent = substr($description, 0, $firstTagPosition);
    }

    // Add the manually entered heading with toggle functionality
    $formattedDescription .= '<div class="toggle-btn">' . '<b>Scholarship Description +</b></div>';
    $formattedDescription .= '<div class="toggle-content" style="display: none;">' . $this->formatOtherContent($visibleContent) . '</div>';

    // Add the toggle functionality for the rest of the content
    foreach ($matches[0] as $key => $match) {
        $content = $matches[1][$key];
        $startIndex = strpos($description, $match) + strlen($match);
        $endIndex = isset($matches[0][$key+1]) ? strpos($description, $matches[0][$key+1]) : strlen($description);
        $otherContent = substr($description, $startIndex, $endIndex - $startIndex);

        $formattedDescription .= '<div class="toggle-btn">'. $match .'<b>+</b></div>';
        $formattedDescription .= '<div class="toggle-content">' . $this->formatOtherContent($otherContent) . '</div>';
    }

    return $formattedDescription;
}By divya (varuns work)*/  
/*public function formatScholarshipDescription($description) {
    $pattern = '/<b>(.*?)<\/b>/';
    preg_match_all($pattern, $description, $matches);

    $formattedDescription = '';
    $visibleContent = '';

    // Find the position of the first <b></b> tag
    $firstTagPosition = strpos($description, '<b>');

    if ($firstTagPosition !== false) {
        // Extract the content before the first <b></b> tag as visible content
        $visibleContent = substr($description, 0, $firstTagPosition);
    }

    // Add the manually entered heading with toggle functionality
    $formattedDescription .= '<div class="toggle-btn" style="cursor: pointer;border-radius: 25px;background-color:white; border: 5px solid #ff8c00; padding: 10px;margin: 10px 0;">
  <b>Scholarship Description <b>+</b></b>
</div>';
    $formattedDescription .= '<div class="toggle-content" style="display: none; margin: 10px 0; padding: 10px;">' . $this->formatOtherContent($visibleContent) . '</div>';

    // Add the toggle functionality for the rest of the content
    foreach ($matches[0] as $key => $match) {
        $content = $matches[1][$key];
        $startIndex = strpos($description, $match) + strlen($match);
        $endIndex = isset($matches[0][$key+1]) ? strpos($description, $matches[0][$key+1]) : strlen($description);
        $otherContent = substr($description, $startIndex, $endIndex - $startIndex);

        $formattedDescription .= '<div class="toggle-btn" style="cursor: pointer;background-color:white;border-radius: 25px;margin: 10px 0; border: 5px solid #ff8c00; padding: 10px;">'. $match .'<b>+</b></div>';
        $formattedDescription .= '<div class="toggle-content" style="display: none; margin: 10px 0; padding: 10px;">' . $this->formatOtherContent($otherContent) . '</div>';
    }

    return $formattedDescription;
}
private function formatOtherContent($otherContent) {
    // Replace the <li> tags with their corresponding HTML entities
    $otherContent = str_replace('<li>', '<br>&#8226; ', $otherContent);
    $otherContent = str_replace('</li>', '<br>', $otherContent);

    return $otherContent;
} change on 11-07-2023 by varun*/

public function pageInformation($id,$name)
    {
         $this->load->view('new/new_header');
           
        $data['details']=$this->New_model->getScholarshipDetails($id);
        $data['attachment']=$this->New_model->getScholarshipAttachment($id);
        //print_r($data);exit();
        $data['some']=$this->New_model->someOtherScholarship($data['details']->scholarship_type);
         // Example column name
          

        $data['scholarshipDescription'] = $this->formatScholarshipDescription($data['details']->scholarship_description);
         $this->load->view('new/whatspopup',$data);
        $this->load->view('new/new_scholarship_details',$data);
         $this->load->view('new/footer');
    }
    public function formatScholarshipDescription($description) {
    $pattern = '/<b>(.*?)<\/b>/';
    preg_match_all($pattern, $description, $matches);

    $formattedDescription = '';
    $visibleContent = '';

    // Find the position of the first <b></b> tag
    $firstTagPosition = strpos($description, '<b>');

    if ($firstTagPosition !== false) {
        // Extract the content before the first <b></b> tag as visible content
        $visibleContent = substr($description, 0, $firstTagPosition);
    }

    // Add the manually entered heading with toggle functionality
    $formattedDescription .= '<div class="toggle-btn" style="cursor: pointer;border-radius: 10px;background-color:white; border: 2px solid #4b0082; padding: 10px;margin: 10px 0;">
  <b>Scholarship Description <b>+</b></b>
</div>';
    $formattedDescription .= '<div class="toggle-content" style="display: none;border-radius: 10px;background-color:white; border: 2px solid #4b0082; padding: 10px;margin: 10px 0;">' . $this->formatOtherContent($visibleContent) . '</div>';

    // Add the toggle functionality for the rest of the content
    foreach ($matches[0] as $key => $match) {
        $content = $matches[1][$key];
        $startIndex = strpos($description, $match) + strlen($match);
        $endIndex = isset($matches[0][$key+1]) ? strpos($description, $matches[0][$key+1]) : strlen($description);
        $otherContent = substr($description, $startIndex, $endIndex - $startIndex);

        $formattedDescription .= '<div class="toggle-btn" style="cursor: pointer;border-radius: 10px;background-color:white; border: 2px solid #4b0082; padding: 10px;margin: 10px 0;">'. $match .'<b>+</b></div>';
        $formattedDescription .= '<div class="toggle-content" style="display: none;border-radius: 10px;background-color:white; border: 2px solid #4b0082; padding: 10px;margin: 10px 0;">' . $this->formatOtherContent($otherContent) . '</div>';
    }

    return $formattedDescription;
}   
private function formatOtherContent($otherContent) {
    // Replace the <li> tags with their corresponding HTML entities
    $otherContent = str_replace('<li>', '<br>&#8226; ', $otherContent);
    $otherContent = str_replace('</li>', '<br>', $otherContent);

    return $otherContent;
}
    /* ------------------for winners---------on 11 Jully------by varun----------*/
    public function winners(){
        $this->load->view('new/new_header');
        $this->load->view('new/winners');
        $this->load->view('new/footer');
    }
    /* ------------------for collobration ---------on 12 Jully------by varun----------*/
    public function collaboration(){
        $this->load->view('new/new_header');
        $this->load->view('new/collaboration');
        $this->load->view('new/footer');
    }

     public function about()
    {
        $this->load->view('new/new_header');
        $this->load->view('new/about');
         $this->load->view('new/footer');
    }
     public function youtube()
    {
       
        $this->load->view('new/youtube');
    }
  public function telegram()
    {
       
        $this->load->view('new/telegram');
    }
  
    public function privacy()
    {
        $this->load->view('new/new_header');
        $this->load->view('new/privacy');
         $this->load->view('new/footer');
    }
    public function discaimer()
    {
        $this->load->view('new/new_header');
        $this->load->view('new/discaimer');
        $this->load->view('new/footer');
    }
     public function contactUs()
    {
        $this->load->view('new/new_header');
        $this->Base_model->contact_us_form();
        $this->load->view('website/contact');
        $this->load->view('new/footer');
    }
    public function faq(){
        $this->load->view('new/new_header');
        $this->load->view('new/faq');
        $this->load->view('new/footer');
    }
     /* ------------------for sitemap---------on 08 June------by varun----------*/
    public function sitemapview(){
        $data['others']=$this->New_model->serachOtherScholarshipforsitemap();
       $data['Abroad']=$this->New_model->searchAbroadscholarshipforsitemap();
        $data['scholarships']=$this->New_model->searchscholarshipforsitemap();
        //$data['scholarships']=$this->New_model->getallforsitemap();
        $data['expired']=$this->New_model->expired();
        $this->load->view('sitemap',$data);   
    }
     /* ------------------for sitemap---------on 08 June------by varun----------*/

    public function forgotPassword()
    {
       $this->load->view('new/new_header');
        //$this->Auth->forget_password();
        $this->load->view('new/forgot_password');
        $this->load->view('new/footer');
    }
    /*---------------------To add expired Scholarship list----------------------*/
    public function expired()
    {   
       $this->load->view('new/new_header');
       $data['scholarships']=$this->New_model->expired();
        $this->load->view('new/Expired_scholarship',$data);
       $this->load->view('new/footer');

    }
    /*---------------------To add expired Scholarship list----------------------*/
  
  
  /*-----------------------23th may--------------------------------
  
  public function forgotPasswordRecovery() 
{
  $email = $this->input->post('email');
  $login['details'] = $this->Auth->forget_password($email);
        //print_r($login['details']->num_rows());exit;
  if ($login['details']->num_rows() > 0) {
   $logins['details'] = $login['details']->row();
            //print_r($login['details']->row());exit;
   $username = $logins['details']->email;
   $token = date('Ymdhis');
   $data = array('token' => $token, 'username' => $username, 'status' => 0);
   $this->Student_model->resetPasswordToken($data);
   $this->load->library('email');
   $this->email->from(EMAIL_FROM, 'password recovery');
   $this->email->to($logins['details']->email);
            // $message='your password is <strong>'.$logins['details']->password.' </strong>';
            // $message='please click on this link to reset password <strong><a href="'.base_url('reset-password-link/').$token.'">Resetpasword</a> </strong>';
   $message = ' <strong><a href="' . base_url('reset-password-link/') . $token . '">Reset Password Link</a> </strong>';
   $emailContent = '<!DOCTYPE><html><head></head><body><a>please click on this link to reset password';
            $emailContent.= $message; //   Post message available here
            $emailContent.= "</a></body></html>";
            $this->email->subject('Reset Password');
            // $this->email->message($message);
            $this->email->message($emailContent);
            if ($this->email->send()) {
            	$this->session->set_flashdata('reset-link-send-success', 'reset password link has been sent to your mail');
            	redirect('support-forgot-password');
            } else {
            	$this->session->set_flashdata('reset-link-send-error', 'server problem');
            	redirect('support-forgot-password');
            }
            // $logins['message'] = $message;
            // $this->load->view('support/header');
            // $this->load->view('support/temp',$logins);
            // $this->load->view('support/footer');
            
          } else 
  			{
           $this->session->set_flashdata('email-does-not-exists-error', 'email address does not exists ');
           redirect('support-forgot-password');
         	}
}
  
  
  ----------------------23th may--------------------------------*/
  
  /*----------------------3rd  June--------------------------------*/
  public function forgotPasswordRecovery()
{
    //$this->load->model('Auth'); 
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $email = $this->input->post('email');
    $chk = $this->Auth->forget_password();
    //echo "<script>alert('Confirmation IS: ".$chk."');</script>"; // 2 june //ON 16-6-23 BY VARUN 
 //echo 'Hello';
    if ($chk != false) {
      /*---------------- temporary commented ----------*/
        $this->load->library('phpmailer_lib');
        $this->phpmailer_lib->mail->addAddress($email);
        $this->phpmailer_lib->mail->Subject = 'Reset Password Link';
        $this->phpmailer_lib->mail->Body = 'Your Confirmation for Reset Password: ' . $chk . '    click the link';
 
        if ($this->phpmailer_lib->mail->send()) {
           $data['chk'] = $chk;
           //echo '<script> alert("Mail has been sent kindly check")</script>';
            $this->load->view('new/new_header');
           // $this->load->view('new/forgot_password');
          $this->load->view('new/forgot_password_confirm',$data);
            $this->load->view('new/footer');
        } else {
         //   echo '<script> alert("Unable to send the email try after sometime")</script>';
     /* ---------------- temporary commented ----------*/
      
      $data['chk'] = $chk;
            $this->load->view('new/new_header');
          //  $this->load->view('new/forgot_password');
          $this->load->view('new/forgot_password_confirm',$data);
            $this->load->view('new/footer');
        }
    } else { 
        echo '<script> alert("This email Id doesnt seem registered. Please try with a registered email ID again")</script>';
        $this->load->view('new/new_header');
        $this->load->view('new/forgot_password');
        $this->load->view('new/footer');
    }
}
  
  
  /*----------------------3rd  June--------------------------------*/
  
  /*-----------------------12th may---------------------------------------------------------------------
  
  public function forgotPasswordRecovery()
  {
	//$this->load->library('email');
	$email = $this->input->post('email');
	$chk =$this->Auth->forget_password();
    echo "<script>alert('Confirmation IS: ".$chk."');</script>"; // 2 june
	if($chk!=false)
    {
		$this->load->library('email');
		$this->email->from(EMAIL_FROM, 'The GlobalScholarship Security Team');
       // $this->email->from('veena@theglobalscholarship.org', 'The GlobalScholarship Security Team'); // 2nd june 
      
		$this->email->to($email);
        //$this->email->to('reachveena.deshpande@gmail.com'); 2nd June
		$this->email->subject('Reset Password Link');
		$this->email->message('Your Confirmation for Reset Password : '.$chk.'click the link');
     // $this->email->set_password('d35ky1FFu') 2nd June
		$flag=$this->email->send(); //commented on 2nd June
     // $this->email->send(); // 2nd june 
			if($flag)
            {
				echo '<script> alert("Mail has been sent kindly'.$chk.' check")</script>';
				$this->load->view('new/new_header'); 
				$this->load->view('new/forgot_password');
				$this->load->view('new/footer');

			}
      		else
            {
				echo '<script> alert("Unable to send the email try after sometime")</script>';
				$this->load->view('new/new_header');
				$this->load->view('new/forgot_password');
				$this->load->view('new/footer');
			}
	}
	else
	{ 
		echo '<script> alert("This email Id doesnt seems registered please try with registered email ID again")</script>';
		$this->load->view('new/new_header');
		$this->load->view('new/forgot_password');
		$this->load->view('new/footer');
	}
}
  -----------------------12th may---------------------------------------------------------------------*/
 /*-----------------------8th may---------------------------------------------------------------------
   public function forgotpassmail()
    {
       
        $chk = $this->Auth->forgotpassmail();
        if($chk!=false){
            /*if ($this->Reachedus_model->sendEmailpass($this->input->post('email')))
                {
                    // successfully sent mail
                    echo '<script>alert("Mail Is sent kindly check the Mail")</script>';
                    $this->load->view('adminlogin'); 
                    
                }
                else
                {
                    // error
                  echo '<script>alert("Mail found in database but Unable reach at the Moment")</script>';
                  $this->load->view('adminlogin');
                } 
                $email = $this->input->post('email');
               $subject = 'OTP For Password Reset';
                $message = '
                        <html>
                        <head>
                            <title>Conformation Mail</title>
                        </head>
                        <body>
                            <h1>Hello </h1>
                            <h3>Change of Password</h3>
                            <p>You can change the password by clicking the link </p>
                            <p>Your Confirmation for Reset Password : '.$chk.'</p>
                           
                            <p>Thank Your.</p>
                            
                        </body>
                        </html>';
        //Replacing Data with Keys
      

        

         //Sending email from localhost or live server
                $localhosts = array(
                     '::1',
                    '127.0.0.1',
                    'localhost'
                 );
        
            $protocol = 'mail';
            if (in_array($_SERVER['REMOTE_ADDR'], $localhosts)) {
                $protocol = 'smtp';
            }

            $config = array(
                    'protocol' => $protocol,
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'varuntriwits123@gmail.com',
                    'smtp_pass' => 'rmzgnbojemaywgvl',
                    'mailtype' => 'html',
                    'starttls'  => true,
                    'newline'   => "\r\n",
            );

        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->from("varuntriwits123@gmail.com");
        $this->email->to("$email");
        $this->email->subject("Change Of Password");
        $this->email->message($message);
        $flag = $this->email->send();

        if($flag){
            echo '<script>alert("Mail Is sent kindly check the Mail")</script>';
             $this->load->view('new/new_header');
        //$this->Auth->forget_password();
        $this->load->view('new/forgot_password');
        $this->load->view('new/footer');
                   
        }else{
            echo '<script>alert("Mail found in database but Unable reach at the Moment")</script>';
                   $this->load->view('new/new_header');
        //$this->Auth->forget_password();
        $this->load->view('new/forgot_password');
        $this->load->view('new/footer');
           
        }
        else{ 
            echo '<script>alert("email not Registered Please try with Registered email ")</script>';
             $this->load->view('new/new_header');
        //$this->Auth->forget_password();
        $this->load->view('new/forgot_password');
        $this->load->view('new/footer');
        }
    }
    }
  ----------------8th may----------------------------------------------------------------------*/
    public function confirmforgotPassword($otp, $id)
    {
     // print_r('hi');exit;
      //echo "<script>alert('Confirmation Failed1. Try varun.');</script>";    CHANGES MADE BY DIVYA ON 16-JUN-23 WITH THE HELP OF VARUN
        $this->Auth->confirm_password($otp, $id);
      
    }
    public function reset()
    {
      echo "<script>alert('Confirmation Failed1. Try Again.');</script>";
        $this->Auth->reset_password();
      echo "<script>alert('Confirmation Failed. Try Again.');</script>";
    }
}
?>