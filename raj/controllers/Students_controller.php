<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
class Students_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->library("pagination");
		date_default_timezone_set("Asia/Calcutta");
	}
/**
* Index Page for this controller.
*
* Maps to the following URL
* http://example.com/index.php/welcome
* - or -
* http://example.com/index.php/welcome/index
* - or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/
// public function index()
// {
// $this->load->view('welcome_message');
// }

public function promotionRegistration()
{
	// print_r('expression');exit;

	$data['states']=$this->Student_model->getStateList();
	$data['course']=$this->Student_model->getCouresList();
	$this->load->view('student/promotion_registrations',$data);	

}
public function insertPromotionData(){
	//print_r('expression');exit;
	$this->Student_model->addPromotionRegistration();
}


public function studentRegistration()
{

	$data['states']=$this->Student_model->getStateList();
	$data['course']=$this->Student_model->getCouresList();
	$this->load->view('student/student_registration',$data);	

}
 
public function studentPromotionRegistration()
{
     
	$data['states']=$this->Student_model->getStateList();
	$data['course']=$this->Student_model->getCouresList();
	$this->load->view('register/register_home',$data);
	

}
public function studentAccountPromotionRegistration($id)
{
     $this->load->view('register/register_header');
	$data['states']=$this->Student_model->getStateList();
	$data['course']=$this->Student_model->getCouresList();
	$this->load->view('register/register_account',$data);
	$this->load->view('register/register_footer');

}

public function successPage()
{
     $this->load->view('register/register_header');
	$this->load->view('register/successpage');
	$this->load->view('register/register_footer');

}
public function getLoginVerification($id){
    //print_r($this->uri->segment(2));exit;
    $confirmQry=$this->db->where('student_username',$this->uri->segment(2))->get('student_registration_log')->row();
     $_SESSION['registered_email'] = $confirmQry->registered_email;
          $_SESSION['student_username'] = $confirmQry->student_username;
          $_SESSION['student_name'] = $confirmQry->student_name;
          $username=$this->session->userdata('student_username');
           $date=date("y-m-d");
           $ipAddress=$this->Student_model->returnClientIPAddress();
            $data1=array(
              'student_username'=>$this->session->userdata('student_username'),
              'date'=>date("y-m-d"),
              'login_time'=>date("y-m-d H:i:s"),
              'ip_address'=>$ipAddress,
            );
            $this->db->insert('login_details',$data1);
              $this->session->set_flashdata("success","You are logged in.");
               redirect(base_url('student-home'));
           //print_r($data1);exit;
    //print_r($_SESSION['student_username']);exit;
       //$this->load->view('student/email');
        
    //print_r($id);exit;
}
public function addStudentRegistrationDetails(){
   // print_r($this->input->post('ad_scholarship_id'));exit;
   $captcha_response = trim($this->input->post('g-recaptcha-response'));
   if($captcha_response != '')
		{
		    //$keySecret = '6LdhUvscAAAAALuXwVEERh5URJufkyubh8HuLzOW';
		    $keySecret='6Le9s5AhAAAAAHo4E5Sjq9R65z0mO_MRrazk6EYU';
		    $check = array(
				'secret'		=>	$keySecret,
				'response'		=>	$this->input->post('g-recaptcha-response')
			);
				$startProcess = curl_init();

			curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

			curl_setopt($startProcess, CURLOPT_POST, true);

			curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

			curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

			curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

			$receiveData = curl_exec($startProcess);

			$finalResponse = json_decode($receiveData, true);
   if($finalResponse['success'])
			{
			    if($this->input->post('fullname') != ''){
                $checkAlreadyVisited = $this->db->where('registered_mobile_no',$this->input->post('mobile_number'))->or_where('registered_email',$this->input->post('email'))->get('student_registration_log');
               
                if($checkAlreadyVisited->num_rows() > 0){
                     //print_r('hi');exit;
                   $this->session->set_flashdata("failuer","Already registered, Use a different mobile no.");
    		redirect('student-register');
    		   // redirect("student-promotion-register");
                }else{
                    $studentId=$this->Student_model->generateRandomString(18);
                     
            		$insertArray=array(
            			'student_username'=>$studentId,	
            			'student_name'=>ucfirst($this->input->post('fullname')),
            			'registered_mobile_no'=>$this->input->post('mobile_number'),
            			'student_state'=>$this->input->post('state'),
            			'course_name'=>$this->input->post('course'),
            			'registration_status'=>0,
            			'registration_initiated_datetime'=>date('Y-m-d H:i:s'),
            			 'page_source'=>$this->input->post('source'),
            			 'student_password_hashed'=>$this->input->post('confirm_password'),
            			  'registered_email'=>$this->input->post('email'),
            			'ad_scholarship_id' => ($this->input->post('ad_scholarship_id')) ? $this->input->post('ad_scholarship_id') : "",
                      'referral_code' => ($this->input->post('rcode')) ? $this->input->post('rcode') : ""
                      
            		);
            		// print_r($insertArray);exit;
            		$this->db->insert('student_registration_log',$insertArray);
            	
            		 $subscriptionValidityDate = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'). ' +1 year'));
                       $_SESSION['registered_email'] = $this->input->post('email');
                    $_SESSION['student_username'] = $studentId;
                    $_SESSION['student_name'] = ucfirst($this->input->post('fullname'));
            			if($this->input->post('ad_scholarship_id') != ''){
			             $data = array(
				        	'scholarship_id'=>$this->input->post('ad_scholarship_id'),
					'student_username' => $studentId,
					'month'=>date('Y-m'),
					'date_time'=>date('Y-m-d H:i:s'),
				// 	'ins_added_by'=> $instituteId
				);
				
				// print_r($data);exit;
				$this->db->insert('sent_notifications',$data);
			}
				$checkUserExistence = $this->db->where('student_username',$studentId)->get('student_registration');
				     $data2=array(
    				'student_username'=>$studentId,
    				'student_name'=>ucfirst($this->input->post('fullname')),
    				'registered_email'=>$this->input->post('email'),
    				'student_password_hashed'=>$this->input->post('confirm_password'),
    				'registered_mobile_no'=>$this->input->post('mobile_number'),
    				'student_state'=>$this->input->post('state'),
    				'course_name'=>$this->input->post('course'),
    				'registration_datetime'=>date('Y-m-d H:i:s'),
    				'subscription_validity_datetime'=> $subscriptionValidityDate,
    				'registration_status'=>$this->input->post('email'),
    				'referral_code'=>($this->input->post('rcode')) ? $this->input->post('rcode') : "",
    				'registration_status' => 1
			);
			$data3=array(
    			'student_username'=>$studentId,
				'student_fullname'=>ucfirst($this->input->post('fullname')),
				'student_email'=>$this->input->post('email'),
				'student_mobile_no'=>$this->input->post('mobile_number')
			    );
		//	print_r($data3);exit;
			if($checkUserExistence->num_rows() == 0){
			    $this->Student_model->insertActualStudentRegistrationDetails($data2);
		}
				$updateLogdata=$this->db->set('registration_status',1)->where('Student_username',$studentId)->update('student_registration_log');
			
			//print_r($personalDetails);exit;
			$checkUserExistence = $this->db->where('student_username',$studentId)->get('student_personal_details');
			if($checkUserExistence->num_rows() == 0){
			    $this->db->insert('student_personal_details',$data3);
			}
				$uniqueRefferal=$this->Student_model->generateRandomString(12);
			$refferalArray=array
			('student_username' =>$studentId , 
				'referral_code'=>$uniqueRefferal,
				'is_student_code'=>1,
				'referral_code_status'=>1,
			);
			
			$checkUserExistence = $this->db->where('student_username',$studentId)->get('referral_codes');
			if($checkUserExistence->num_rows() == 0){
			    $this->db->insert('referral_codes',$refferalArray);
			}
			$studData=$this->db->where('registered_mobile_no',$this->input->post('mobile_number'))->get('student_registration_log')->row();
	$body = $this->load->view('student/email.php',$insertArray, TRUE);
	//print_r($body);exit;
	   $message = $body;
    $config['mailtype'] = 'html';
    $this->email->initialize($config);
    $sub = 'The Global Scholarship';
    $this->email->from('no-reply@theglobalscholarship.org');
  $this->email->to($this->input->post('email'));
  $this->email->subject($sub);
    $this->email->message($message);
   $this->email->send();
    

    if($this->input->post('ad_scholarship_id')!=''){
       redirect('scholarships-details/'.$this->input->post('ad_scholarship_id')) ;
    }else{
        			   redirect("scholarships-lists");
    }
                }
                
    }else{
        $this->session->set_flashdata("add-student-registration-failure","Failed to add your details");
	//	redirect('student-promotion-register');
	redirect('student-register');
    }
    
			}else{
			    $this->session->set_flashdata("captcha-failure","Failed to add your details");
		//redirect('student-promotion-register');
			redirect('student-register');
			}
			}
			else{
			    $this->session->set_flashdata("captcha-failure","Failed to add your details");
		//redirect('student-promotion-register');
			redirect('student-register');
			}
		}
    





public function studentAccountForm($id)
{	
	$data['student']=$this->Student_model->getStudentDetailByStudentId($id)->row();
	$data['getSubscriptionPakages']=$this->Student_model->getSubscriptionPakages();
	if($this->input->get('rcode')!='')
	{
// 		echo "inside rcode";exit();
		$rcode=$this->input->get('rcode');
	//print_r($rcode);exit;
		$subscriptionAmt = DEFAULT_SUBSCRIPTION_AMOUNT;
		$referralDiscountAmt = DEFAULT_REFERRAL_DISCOUNT;
		$subscriptionData = $this->Student_model->getSubscriptionAmtBySubcriptionId(1);
		if($subscriptionData->num_rows() > 0 ){
			$subscriptionAmt = $subscriptionData->row()->amount;
		}
	// $grandTotal = 0;
		$referralData = $this->Student_model->getReferralOffersById(1);
		if($referralData->num_rows() > 0 ){
			$referralDiscountAmt = $referralData->row()->discount_on_referral;
		}
		$totalPayableAmt = 0;
		$isValidReferralCode = $this->Student_model->isValidReferralCode($rcode);
		if($isValidReferralCode){
		    
		    if(strtolower($rcode) == 'offer299'){
		        $totalPayableAmt = $subscriptionAmt-200;
		    }
		    else if(strtolower($rcode) == 'offer049'){
		        $totalPayableAmt = $subscriptionAmt-450;
		    }
		    else{
		        $totalPayableAmt = $subscriptionAmt-$referralDiscountAmt;
		    }
			
		}else{
			$totalPayableAmt = $subscriptionAmt;
		}
		$data['isValidReferralCode'] = $isValidReferralCode;
	// if($data['isValidReferralCode'] != ''){
	// 	$data['isValidReferralCode']=$data['isValidReferralCode'];
	// }else{
	// 	$data['isValidReferralCode'] = 'hiiii';
	// }

	// print_r($data['isValidReferralCode']);exit;
		$data['totalPayableAmt'] = $totalPayableAmt;
		$data['subscriptionAmt'] = $subscriptionAmt;

	}
	else if($this->input->get('scode')!='')
	{
		// echo "inside scode";exit();
		$scode=$this->input->get('scode');
	//print_r($rcode);exit;
		$subscriptionAmt = DEFAULT_SUBSCRIPTION_AMOUNT;
		$referralDiscountAmt = DEFAULT_REFERRAL_DISCOUNT;
		$subscriptionData = $this->Student_model->getSubscriptionAmtBySubcriptionId(1);
		if($subscriptionData->num_rows() > 0 ){
			$subscriptionAmt = $subscriptionData->row()->amount;
		}
	// $grandTotal = 0;
		$referralData = $this->Student_model->getSalesDiscountOffersById($scode);
		if($referralData->num_rows() > 0 ){
			$referralDiscountAmt = $referralData->row()->discount_amt;

		}
		$totalPayableAmt = 0;
		$isValidReferralCode = $this->Student_model->isValidSalesReferralCode($scode);
		if($isValidReferralCode){
			$totalPayableAmt = $subscriptionAmt-$referralDiscountAmt;
		}else{
			$totalPayableAmt = $subscriptionAmt;
		}
		$data['isValidReferralCode'] = $isValidReferralCode;
	// if($data['isValidReferralCode'] != ''){
	// 	$data['isValidReferralCode']=$data['isValidReferralCode'];
	// }else{
	// 	$data['isValidReferralCode'] = 'hiiii';
	// }

	// print_r($data['isValidReferralCode']);exit;
		$data['totalPayableAmt'] = $totalPayableAmt;
		$data['subscriptionAmt'] = $subscriptionAmt;

	}
	else
	{
		$scode=$this->input->get('scode');
	//print_r($rcode);exit;
		$subscriptionAmt = DEFAULT_SUBSCRIPTION_AMOUNT;
		$referralDiscountAmt = DEFAULT_REFERRAL_DISCOUNT;
		$subscriptionData = $this->Student_model->getSubscriptionAmtBySubcriptionId(1);
		if($subscriptionData->num_rows() > 0 ){
			$subscriptionAmt = $subscriptionData->row()->amount;
		}
	// $grandTotal = 0;
		$referralData = $this->Student_model->getSalesDiscountOffersById($scode);
		if($referralData->num_rows() > 0 ){
			$referralDiscountAmt = $referralData->row()->discount_amt;

		}
		$totalPayableAmt = 0;
		$isValidReferralCode = $this->Student_model->isValidSalesReferralCode($scode);
		if($isValidReferralCode){
			$totalPayableAmt = $subscriptionAmt-$referralDiscountAmt;
		}else{
			$totalPayableAmt = $subscriptionAmt;
		}
		$data['isValidReferralCode'] = $isValidReferralCode;
	// if($data['isValidReferralCode'] != ''){
	// 	$data['isValidReferralCode']=$data['isValidReferralCode'];
	// }else{
	// 	$data['isValidReferralCode'] = 'hiiii';
	// }

	// print_r($data['isValidReferralCode']);exit;
		$data['totalPayableAmt'] = $totalPayableAmt;
		$data['subscriptionAmt'] = $subscriptionAmt;
	}

	$this->load->view('student/student_account',$data);
}



public function promotionAccountForm($id)
{	
	$data['student']=$this->Student_model->getStudentDetailByStudentId($id)->row();
	$data['getSubscriptionPakages']=$this->Student_model->getSubscriptionPakages();
	$data['trial'] = $this->Student_model->getTrial();
	$this->load->view('student/promotion_student_account',$data);
}

public function insertPromotionAccount($id){
	//print_r('expression');exit;
	$this->Student_model->addPromotionAccount($id);
}

public function addStudentAccountDetails($id)
{
    
    if($this->input->post('email') != '' && filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL)){
       
      
            $checkIfAlreadyRegistered = $this->db->where('registered_email',$this->input->post('email'))->get('student_registration_log');
            if($checkIfAlreadyRegistered->num_rows() == 0){
                $customerData = $this->db->where('student_username',$this->input->post('uniqueNumber'))->get('student_registration_log')->row();
                $updateArray = array(
    			    'registered_email'=>$this->input->post('email'),
    			    'registered_whatsapp_mobile_no'=>$this->input->post('mobile_number'),
    			    'student_password_hashed'=>$this->input->post('confirm_password'),
    			    'registration_status'=>0,
    			    'page_source'=>$this->input->post('source'),
    			    
		        );
		         //print_r($this->input->post('uniqueNumber'));exit;
		        if($this->db->set($updateArray)->where('student_username',$this->input->post('uniqueNumber'))->update('student_registration_log')){
		            $studentId = $this->input->post('uniqueNumber');
		           // print_r(' $studentId');exit;
		            $this->session->set_flashdata('successfull','Registration success');
		            $_SESSION['registered_email'] = $this->input->post('email');
                    $_SESSION['student_username'] = $this->input->post('uniqueNumber');
                    $_SESSION['student_name'] = $customerData->student_name;
                    $subscriptionValidityDate = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'). ' +1 year'));
                    $data2=array(
    				'student_username'=>$this->input->post('uniqueNumber'),
    				'student_name'=>$customerData->student_name,
    				'registered_email'=>$this->input->post('email'),
    				'student_password_hashed'=>$this->input->post('confirm_password'),
    				'registered_mobile_no'=>$customerData->registered_mobile_no,
    				'registered_whatsapp_mobile_no'=>$this->input->post('mobile_number'),
    				'student_state'=>$customerData->student_state,
    				'course_name'=>$customerData->course_name,
    				'registration_datetime'=>date('Y-m-d H:i:s'),
    				'subscription_validity_datetime'=> $subscriptionValidityDate,
    				'registration_status'=>$customerData->registered_email,
    				'referral_code'=>$customerData->registered_email,
    				'registration_status' => 1
			);
			
			if($customerData->ad_scholarship_id != ''){
			    $data = array(
					'scholarship_id'=>$customerData->ad_scholarship_id,
					'student_username' => $customerData->student_username,
					'month'=>date('Y-m'),
					'date_time'=>date('Y-m-d H:i:s'),
				// 	'ins_added_by'=> $instituteId
				);
				
				// print_r($data);exit;
				$this->db->insert('sent_notifications',$data);
			}
			
			
			
			$checkUserExistence = $this->db->where('student_username',$studentId)->get('student_registration');
			if($checkUserExistence->num_rows() == 0){
			    $this->Student_model->insertActualStudentRegistrationDetails($data2);
			}
			
			$updateLogdata=$this->db->set('registration_status',1)->where('Student_username',$studentId)->update('student_registration_log');
// 			$updateRegistrationdata = $this->db->set('amount',$amount)->where('Student_username',$studentId)->update('student_registration_log');
			
			$personalDetails=array(
				'student_username'=>$studentId,
				'student_fullname'=>$customerData->student_name,
				'student_email'=>$this->input->post('email'),
				'student_mobile_no'=>$customerData->registered_mobile_no,
				'student_whatsapp_no'=>$customerData->registered_whatsapp_mobile_no
			);
	
			$checkUserExistence = $this->db->where('student_username',$studentId)->get('student_personal_details');
			if($checkUserExistence->num_rows() == 0){
			    $this->db->insert('student_personal_details',$personalDetails);
			}
			$uniqueRefferal=$this->Student_model->generateRandomString(12);
			$refferalArray=array
			('student_username' =>$studentId , 
				'referral_code'=>$uniqueRefferal,
				'is_student_code'=>1,
				'referral_code_status'=>1,
			);
			
			$checkUserExistence = $this->db->where('student_username',$studentId)->get('referral_codes');
			if($checkUserExistence->num_rows() == 0){
			    $this->db->insert('referral_codes',$refferalArray);
			}
			
		             redirect("student-home");
		              
		        }else{
		            $this->session->set_flashdata('update-student-registration-failure','Registration failure');
			        redirect("student-promotion-account-details/$studentId");
		        }
		        
            }else{
                $this->session->set_flashdata("email-already-exists","Account already registered with this email, please use different email,");
    		    $studentId = $this->input->post('uniqueNumber');
                
                    redirect('student-promotion-account-details/'.$studentId);
                
            }
        
    }else{
        $this->session->set_flashdata('update-student-registration-failure','Registration failure');
        $studentId = $this->input->post('uniqueNumber');
            
                redirect('student-promotion-account-details/'.$studentId);
        
    }

}


public function studentHome()
{
    //print_r($this->session->userdata('student_username'));exit;
	if (!$this->session->userdata('student_username')) redirect('student-login');
	$data['notifications']=$this->Student_model->getAlertNotification();
	$data['showGuide'] = "show";
	$query = $this->db->where('student_username',$this->session->userdata('student_username'))->get('student_registration');
	
	if($query->num_rows() > 0){
	    $query = $query->row();
	    if($query->has_visited == 1){
	        $data['showGuide'] = "hide";
	    }
	}
	/*	
	$this->load->view('student/header');
	$data['getEachReferralCode']=$this->Student_model->getSpecificEachReferralCode();
	 $data['some']=$this->Student_model->someOtherScholarship();
	$this->load->view('student/home',$data);
	$this->load->view('student/footer');*/
	/*commented on 7 June for the update*/
	 $this->load->view('new/new_header');
        $data['data']         = $this->db->get('scholarships');
        $data['student']      = $this->db->get('student_registration');
        //$data['contributors'] = $this->db->get('contributors'); // uncommented this line 
        $this->load->view('new/new_home', $data);
        $this->load->view('new/footer');
}

// public function redirectToUpdateProfileFirstTime()
// {
//     $this->db->set('has_visited')
// }
public function accountSettings()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');
	$data['data'] = $this->Student_model->getRegDateByUserId();
	$this->load->view('student/header');
	$this->load->view('student/account_setting',$data);
	$this->load->view('student/footer');
}


public function scholarships()
{
$id=$this->input->get('category');
//print_r($id);exit;
	if (!$this->session->userdata('student_username')) redirect('student-login');
	// print_r($data['getnotifications']);exit();
	$this->load->view('student/header');
	$config = array();
	$config["base_url"] = base_url(). "scholarships";
	$config["total_rows"] = $this->Student_model->get_count();
// 	print_r($config["total_rows"]);exit;
	$config["per_page"] = 9; 
	$config["uri_segment"] = 2;
	$config['full_tag_open'] = "<ul class='pagination'>";
	$config['full_tag_close'] ="</ul>";
	$config['first_link'] = FALSE;
	$config['last_link'] = FALSE;
	$config['anchor_class']= 'class="page-link"';
	$config['prev_tag_open'] = "<li class='page-item'>";
	$config['prev_tag_close'] = "</li>";
	$config['cur_tag_open'] = "<li class='page-item active'><a class='page-link'>"; 
	$config['cur_tag_close'] = '</a></li>'; 
	$config['num_tag_open'] = "<li class='page-item'>";
	$config['num_tag_close'] = '</li>';
	$config['next_tag_open'] = "<li class='page-item'>";
	$config['next_tagl_close'] = "</li>";
	$config['attributes'] = array('class' => 'page-link');

	$this->pagination->initialize($config);

	$page = ($this->uri->segment(2))? $this->uri->segment(2) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['getnotifications']=$this->Student_model->getScholarshipNotifcation($config["per_page"],$page);
	$data['getLinkVisitStatusList']=$this->Student_model->getLinkVisitStatusList();
	if($id==''){
	$data['scholarship']=$this->Student_model->getAllScholarship($config["per_page"],$page);
	}else{
	    $data['scholarship']=$this->Student_model->getByTypeScholarship($id);
	}
	$this->load->view('student/scholarship',$data);
	$this->load->view('student/footer');
}

public function studentsLogin()
{
	
	$this->Student_model->studentLogin();
	$this->load->view('student/login');
	
}
public function StudentsLogout() {

	if (!$this->session->userdata('student_username')) redirect('student-login');

	
	$this->session->set_flashdata('logout-success', 'Logout successful');
	$this->session->unset_userdata('id');
	$this->session->unset_userdata('student_username');

	redirect("https://www.theglobalscholarship.org/student-login");
}
public function helpdesk() {
	if (!$this->session->userdata('student_username')) redirect('student-login');
	$this->load->view('student/header');
	$this->load->view('student/help');
	$this->load->view('student/footer');
}

public function resolveLinkAndUpdateLinkVisitStatus($id){
	if(!$this->session->userdata('student_username'))
	redirect('student-login?redirect-to='.base_url('redirect-me-to/'.$id));

		$verify=$this->Student_model->subscriptionDateExpired();
	if($verify->num_rows()>0)
	{
		$this->session->set_flashdata('date-expired', 'date expired');
		redirect('scholarship-details-page/'.$id);
	}
	else if($this->db->set('link_visit_status',1)->where('scholarship_id',$id)->where('student_username',$this->session->userdata('student_username'))->update('sent_notifications')){
		$data = $this->db->select('scholarship_link')->where('scholarship_id',$id)->get('scholarships')->row();
		redirect($data->scholarship_link);
	}
	else
	{
		redirect('scholarship-details-page/'.$id);
	}
}
public function scholarshipPage()
{	
	
	if (!$this->session->userdata('student_username')) 
	{

		$this->load->view('student/header');
		$data['getScholarship']=$this->Student_model->getScholarshipDetails($this->uri->segment(2));
		$data['getAttachments']=$this->Student_model->getAttachment($this->uri->segment(2));
		$this->load->view('student/scholarship_page',$data);
		$this->load->view('student/footer');
	}else {

		$this->load->view('student/header');
		$data['getScholarship']=$this->Student_model->getScholarshipDetails($this->uri->segment(2));
		$data['getAttachments']=$this->Student_model->getAttachment($this->uri->segment(2));
		$this->load->view('student/scholarship_page',$data);
		$this->load->view('student/footer');
	}
}
public function profilePage()
{	if (!$this->session->userdata('student_username')) redirect('student-login');

$this->load->view('student/header');
$data['getRegistrationsData']	= $this->Student_model->getRegistrationData();
$data['getCourse']=$this->Student_model->getCourse();
$data['getAcademicDetails']=$this->Student_model->getAcademicDetails();
//print_r($data['getAcademicDetails']);exit;
$data['states']=$this->Student_model->getStateList();
$state='hi';
	$stateId='hi';
if( $data['getAcademicDetails']!='' && $data['getAcademicDetails']->student_studying_state!='')
	{
	    $state=$data['getAcademicDetails']->student_studying_state;
	}
		$stateDetails=$this->Student_model->getStateIdByStateName($state);	
	
	if( $stateDetails!='' &&  $stateDetails->id!='')
	{
	    $stateId=$stateDetails->id;
	}
$data['city']=$this->Student_model->getCitiesList($stateId);
$data['allcity']=$this->Student_model->getAllList();
$data['getFamilyDetails']=$this->Student_model->getFamilyDetails();
$this->load->view('student/student_profile',$data);
$this->load->view('student/footer');
}
public function loginDetails()
{	if (!$this->session->userdata('student_username')) redirect('student-login');
$data['getLoginDetails']=$this->Student_model->getLoginDetails();
$this->load->view('student/header');
$this->load->view('student/view_login_details',$data);
$this->load->view('student/footer');
}

public function getLoginHistory()
{	if (!$this->session->userdata('student_username')) redirect('student-login');
$data['getLoginHistory']=$this->Student_model->getHistoryDetails();
$this->load->view('student/header');
$this->load->view('student/view_login_history',$data);
$this->load->view('student/footer');
}

public function personalDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');
	if($this->input->get('evervisited') == "false"){
	    $this->db->set('has_visited',1)->where('student_username',$this->session->userdata('student_username'))->update('student_registration');
	}
	$this->load->view('student/header');
	$data['getRegistrationsData']	= $this->Student_model->getRegistrationData();
	$data['getDisabilityType']		= $this->Student_model->getDisabilityType();
	$this->load->view('student/personal_details',$data);
	$this->load->view('student/footer');
}
public function updatePersonalDetails()
{

	if (!$this->session->userdata('student_username')) redirect('student-login');
  
 //  echo '<script> alert("Test by VaRUN")</script>';

	$this->Student_model->update_personal_details();

}

public function academic()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$data['getAcademicDetails']=$this->Student_model->getAcademicDetails();
	$data['states']=$this->Student_model->getStateList();
	$data['getCourse']=$this->Student_model->getCourse();
	
	$state='hi';
	$stateId='hi';
	if( $data['getAcademicDetails']!='' && $data['getAcademicDetails']->student_studying_state!='')
	{
	    $state=$data['getAcademicDetails']->student_studying_state;
	}
	
	$stateDetails=$this->Student_model->getStateIdByStateName($state);	
	
	if( $stateDetails!='' &&  $stateDetails->id!='')
	{
	    $stateId=$stateDetails->id;
	}
	
	$data['city']=$this->Student_model->getCitiesList($stateId);
	
	$this->load->view('student/academic',$data);
	$this->load->view('student/footer');
}
public function updateAcademicsDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');
	$this->Student_model->update_academic_details();
	redirect('family-details');
}

public function familyDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$data['getFamilyDetails']=$this->Student_model->getFamilyDetails();
	$data['parent']=$this->Student_model->getParentOccupation();
	$this->load->view('student/family',$data);
	$this->load->view('student/footer');
}
public function updateFamilyDetails()
{

	if (!$this->session->userdata('student_username')) redirect('student-login');
	$this->Student_model->update_family_details();
	redirect('scholarships');
}
public function bankDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$data['getBankandAddressDetails']=$this->Student_model->getBankandAddressDetails();
	$data['states']=$this->Student_model->getStateList();
	$this->load->view('student/bank',$data);
	$this->load->view('student/footer');
}
public function updateBankDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');
	$this->Student_model->update_bank_address_details();
	$this->session->set_flashdata('profile-success', 'Your Profile Updated successfully');
	redirect('scholarships');
}

public function activityDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$data['getStudentSportsActivityName']=$this->Student_model->getStudentSportsActivityName();
	$data['getActivityTypes']=$this->Student_model->getActivityTypes();
	$data['getExtracurricularActivity']=$this->Student_model->getExtracurricularActivity();
	
	// $data['getStudentHobbiesActivityName']=$this->Student_model->getStudentHobbiesActivityName();
	$this->load->view('student/activities',$data);
	$this->load->view('student/footer');
}
public function addExtracurricularActivity() 
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->Student_model->add_extracurricular_activity();
	redirect('extracurricular_details');
}
public function UpdateExtracurricularActivity() 
{	
	if (!$this->session->userdata('student_username')) redirect('student-login');
	// print_r($this->input->post('eid'));exit();
	$this->Student_model->update_extracurricular_activity($this->input->post('eid'));
	
}
public function deleteActivity() {
        // echo "Asif";exit();
        // print_r($this->input->post('did'));exit();
	if (!$this->session->userdata('student_username')) redirect('student-login');

	if ($this->db->where('id', $this->input->post('did'))->delete('student_extracarricular_details')) {
		$this->session->set_flashdata('delete-success', 'Deleted successfully..');
		redirect('extracurricular_details');
	}
}
public function documentUplaod()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$data['getDocuments']=$this->Student_model->getDocumentFilesDetails($this->session->userdata('student_username'));
	$this->load->view('student/document',$data);
	$this->load->view('student/footer');
}
public function deleteDocument() {
        // echo "Asif";exit();
        // print_r($this->input->post('did'));exit();

	if (!$this->session->userdata('student_username')) redirect('student-login');

	if ($this->db->where('id',$this->input->post('did'))->delete('documents_files')) {
		$this->session->set_flashdata('delete-success', 'Deleted successfully..');
		redirect('document_uploads');
	}
}
public function needHelp()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	// $data['getAcademicDetails']=$this->Student_model->getAcademicDetails();
	$this->load->view('student/need_help');
	$this->load->view('student/footer');
}
public function resetPassword()
{
	$this->load->view('student/header');
	//$data['getAcademicDetails']=$this->Student_model->getAcademicDetails(); //14 APR 2023
	$this->load->view('student/reset_password');
	$this->load->view('student/footer');
}

public function addContactUs()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->Student_model->addContactUs();
	redirect('need-help');
}
public function addDocumentFiles()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');
	$this->Student_model->add_document_files();
	$this->session->set_flashdata('profile-success', 'Your Profile Updated successfully');
	redirect('student-home');
}
public function updateDocumentFiles()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->Student_model->update_document_files($this->input->post('eid'));
	redirect('document_uploads');
}
public function updateEachDocumentsDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->Student_model->updateEachDocumentsDetails($this->input->post('eid'));
	redirect('document_uploads');
}

// public function earnMoneyByReferring()
// { if (!$this->session->userdata('student_username')) redirect('student-login');
// $this->load->view('student/header');
// 	// $data['getAcademicDetails']=$this->Student_model->getAcademicDetails();
// $data['getEachReferralCode']=$this->Student_model->getEachReferralCode();
// $data['countEachRefferal']=$this->Student_model->countEachRefferal();
// $data['getRefferalOffers']=$this->Student_model->getRefferalOffers();
// $data['getRefferalOffersforShare']=$this->Student_model->getRefferalOffersforShare();
// $this->load->view('student/earn_money_refer_friend',$data);
// $this->load->view('student/footer');
// }
public function earnMoneyByReferring()
{ 
	if (!$this->session->userdata('student_username')) redirect('student-login');
$this->load->view('student/header');
	// $data['getAcademicDetails']=$this->Student_model->getAcademicDetails();
$data['getEachReferralCode']=$this->Student_model->getEachReferralCode();
$data['getReferdata']=$data['getEachReferralCode']->num_rows();
$data['countEachRefferal']=$this->Student_model->countEachRefferal();
$data['getRefferalOffers']=$this->Student_model->getRefferalOffers();
$data['getRefferalOffersforShare']=$this->Student_model->getRefferalOffersforShare();
$data['getBankandAddressDetails']=$this->Student_model->getBankandAddressDetails();
$data['redeemLogs']=$this->Student_model->getRedeemLogs();
$data['getSpecificEachReferralCode']=$this->Student_model->getSpecificEachReferralCode();
$this->load->view('student/earn_money_refer_friend',$data);
$this->load->view('student/footer');
}
public function feedBack()
{
  if (!$this->session->userdata('student_username'))
  {
  	  	$this->load->view('new/new_header');
		$this->load->view('student/feedbackbefore');
		$this->load->view('new/footer');
  }
  
  else 
  {
	//print_r('heelo');exit;
	$this->load->view('student/header');
	$student['feedback']=$this->Student_model->get_latest_feed_back();
	$student['getProfilePhoto']=$this->Student_model->get_profile_photo();
	$this->load->view('student/feed_back',$student);
	$this->load->view('student/footer');
  }

}


public function storeStudentFeedback()
{

	if (!$this->session->userdata('student_username')) redirect('student-login');
else {
  
  
	$studentEmail=$this->session->userdata('registered_email');
	$studentId=$this->session->userdata('student_username');
	$mobileNumber="";
	$studentName="";


	$studentDetails=$this->Student_model->getStudentDetailsByRegisteredEmail($studentEmail)->row();

	if($studentDetails!='')
	{
		$mobileNumber=$studentDetails->registered_mobile_no;
		$studentName=$studentDetails->student_name; 
	}

	if ($this->hasSubmittedToday()) {
       //     echo '<script> alert("Only one feedback is allowed for a day")</script>';
            echo "<script>alert('Only one feedback is allowed for a day');</script>";
            redirect("student-home");
        } else {
        
	
	$file_upload_name= array(

		'student_rating'=>$this->input->post('rating'),
		'student_name'=>ucfirst($studentName),
		'student_message'=>ucfirst($this->input->post('message')),
		'student_email'=>$studentEmail,
		'student_mobile_number'=>$mobileNumber,
		'student_id'=>$studentId
	);


       // Set a session variable to track the submission
            $this->session->set_userdata('lastSubmission', date('Y-m-d'));
//echo '<script> alert("Thank you for your feedback")</script>';
	$this->db->trans_start();
	$this->db->insert('feed_back',$file_upload_name);
	$this->db->trans_complete();

      echo "<script>alert('Thank you for your Feed back');</script>";
    if ($this->db->trans_status() === TRUE)
	{
		$this->session->set_flashdata('add-success','Feed back added successfully');
		redirect("student-home");
	}
	else
	{
		$this->session->set_flashdata('add-failure','failed to add feed back');
		redirect("student-home");
	}
 }

   /* ------------------10 June------by varun----------
  $data=$this->New_model->foronefeedbackaday($studentEmail);
  echo '<script> alert("Only one feedback is allowed for a day")</script>';
	if ($data != 'FALSE') 
    	{
			echo '<script> alert("Only one feedback is allowed for a day")</script>';
			redirect("feed-back");
		}
  else
  		{
			$this->db->trans_start();
			$this->db->insert('feed_back',$file_upload_name);
			$this->db->trans_complete();
    
    if ($this->db->trans_status() === TRUE)
	{
		$this->session->set_flashdata('add-success','Feed back added successfully');
		redirect("feed-back");


	}
	else
	{
		$this->session->set_flashdata('add-failure','failed to add feed back');
		redirect("feed-back");
	}
		}

   /* ------------------10 June------by varun----------
	if ($this->db->trans_status() === TRUE)
	{
		$this->session->set_flashdata('add-success','Feed back added successfully');
		redirect("feed-back");


	}
	else
	{
		$this->session->set_flashdata('add-failure','failed to add feed back');
		redirect("feed-back");
	}
    */
}
}
  
  
  private function hasSubmittedToday()
    {
        $lastSubmission = $this->session->userdata('lastSubmission');
        $today = date('Y-m-d');

        return ($lastSubmission === $today);
    }


public function getCitiesList()
{


	$id=$this->input->post('id');

	$data=$this->Student_model->getCitiesList($id)->result();

	echo json_encode($data);
}

public function getParticularCourse()
{
	$id=$this->input->post('id');
	$data=$this->Student_model->getParticularCourse($id)->result();
	// print_r($data);exit();
	echo json_encode($data);
}


public function downloadFile($fileName,$student_id)
{

	if (!$this->session->userdata('student_username')) redirect('student-login');

	if ($fileName)
	{


		$file = realpath (DOCUMENT_PATH).'\\'.$fileName;
			// check file exists    

			//print_r($file);exit;
		if (file_exists ( $file ))
		{
			// get file content
			$data = file_get_contents ( $file );
			//force download
			force_download ( $fileName, $data );

		}
		else
		{ 
			// Redirect to base url 
				 // print_r("expression");exit;
			$this->session->set_flashdata('error','download file does not exists');
			redirect("scholarship-details-page/$student_id");
		}
	}
}

public function scholarshipAppliedStatus()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->Student_model->scholarshipAppliedStatus();
	$this->session->set_flashdata('success','you are successfully applied');
	redirect('scholarships');
}
public function scholarshipReceivedStatus()
{	
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->Student_model->scholarshipReceivedStatus();
	$this->session->set_flashdata('receieved','you are successfully receieved');
	redirect('scholarships');
}

public function resetPasswordFromProfile()
{
	
	if (!$this->session->userdata('student_username')) redirect('student-login');

	
	if($this->input->post('old_password'))
	{
		$oldPassword = $this->input->post('old_password');
		$newPassword = $this->input->post('new_password');
		$confirmPassword = $this->input->post('confirm_password');
		$username=$this->session->userdata('registered_email');
		$userId=$this->session->userdata('student_username');
			// $userData = $this->db->get_where('users',array("username" => $this->session->userdata('username')));

		$userData=$this->Student_model->get_user_data($username,$userId);
			//print_r($admintdata->row());exit;
		$data = $userData->row();
		if($data->student_password_hashed == $oldPassword)
		{
			 // print_r($data->password.'=='.$oldPassword);exit;
			$this->db->set('student_password_hashed', $confirmPassword);
			  //print_r($confirmPassword);exit;
			$this->db->where('student_username', $this->session->userdata('student_username'));
			 // print_r($this->session->userdata('username'));exit;
			$this->db->update('student_registration');
			$this->session->unset_userdata('registered_email');
			$this->session->unset_userdata('student_username');
			
			$this->session->set_flashdata('password-changed-success','password changed successfully. please login with new password');
			redirect('student-login');

		}
		else
		{
			$this->session->set_flashdata('fail-to-change-password','old password didn\'t Match');
			redirect('reset-password');
		}
	}
}

public function invoices()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$data['invoices'] = $this->Student_model->getInvoice();
	$this->load->view('student/invoice',$data);
	$this->load->view('student/footer');
}
public function invoiceDetail($id)
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$data['invoice'] = $this->Student_model->invoiceDetail($id);
	$this->load->view('student/invoicedetail',$data);
	$this->load->view('student/footer');
}



public function supportWebinarRegistration($webinarName)
{
	$this->load->view('landing_page/landing_page_header');
    	// $this->load->view('student/header');
	$data['webinarLinks'] = $this->Student_model->getWebinarLinksByWebinarName($webinarName);
        // $this->load->view('landing_page/support_webinar_registration',$data);
	$this->load->view('student/support_webinar_registration',$data);
        // $this->load->view('student/footer');

	$this->load->view('landing_page/landing_page_footer');


        //    $this->load->view('support/landing_page/landing_page_header');
        // $data['webinarLinks'] = $this->Webinar_model->getWebinarLinksByWebinarName($webinarName);

        // $this->load->view('support/support_webinar_registration',$data);
        // $this->load->view('support/landing_page/landing_page_footer');
}

public function supportWebinarRegInsert(){
	
        // print_r($this->session->userdata('user_added_allow_qr_and_link'));exit;
	$this->Student_model->supportWebinarRegistration();
}

public function renewalPackages()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');
	$this->load->view('student/header');
	$data['subscriptionPackages'] = $this->Student_model->subscriptionPackages();
	$this->load->view('student/renewal_packages',$data);
	$this->load->view('student/footer');
}

public function subscriptionPackage()
{
	$username=$this->session->userdata('student_username');
	$subscription=$this->input->post('subscription');
	redirect('Razorpay/renewalPayements/'.$username.'?subscription='.$subscription);
}

public function emailInvoice($id)
{
	// if (!$this->session->userdata('student_username')) redirect('student-login');
	
	$this->load->view('student/header');
	$data['invoice'] = $this->Student_model->invoiceDetail($id);
	$this->load->view('student/email_invoice',$data);
	$this->load->view('student/footer');
}

// Redirection from old website urls

public function redirectToUpdateProfile(){
    if (!$this->session->userdata('student_username')){
        redirect('student-login?redirect-to='.base_url().'personal-details');
    } else{
        redirect('personal-details');
    }
}

public function redirectToNotifiedScholarships(){
    if (!$this->session->userdata('student_username')){
        redirect('student-login?redirect-to='.base_url().'scholarships');
    } else{
        redirect('scholarships');
    }
}

public function viewResponseList()
{
	$this->load->view('student/header');
	$data['response']=$this->Student_model->getResponse();
	$this->load->view('student/view_response',$data);
	$this->load->view('student/footer');
}
public function redeemRequest ()
{
	
	$this->Student_model->redeemRequest();
}
public function redeemDetails()
{
	$this->load->view('student/header');
	$data['getRedeemRequests']=$this->Student_model->getRedeemRequests();
	$this->load->view('student/redeem_requests',$data);
	$this->load->view('student/footer');
}
}
?>