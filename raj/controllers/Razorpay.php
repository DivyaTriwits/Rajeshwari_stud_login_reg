<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."libraries/razorpay/razorpay-php/Razorpay.php");

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class Razorpay extends CI_Controller {
	/**
	 * This function loads the registration form
	 */
	public function index()
	{
		$this->load->view('registration-form');
	}

	/**
	 * This function creates order and loads the payment methods
	 */
	public function pay(){
		$api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
		/**
		 * You can calculate payment amount as per your logic
		 * Always set the amount from backend for security reasons
		 */

		$id=$this->uri->segment(3);
		$studentData = $this->Student_model->getStudentDetailsForUpdate($id)->row();
		$sid=$studentData->student_username;
		$rcode=$this->input->get('rcode');
		$scode=$this->input->get('scode');
		$couponCode = '';
		$discountedAmt = 0;
		$subscriptionAmt = DEFAULT_SUBSCRIPTION_AMOUNT;
		$referralDiscountAmt = DEFAULT_REFERRAL_DISCOUNT;
		$subscriptionData = $this->Student_model->getSubscriptionAmtBySubcriptionId(1);
		if($subscriptionData->num_rows() > 0 ){
			$subscriptionAmt = $subscriptionData->row()->amount;
		}
	    $totalPayableAmt = $subscriptionAmt;
		$referralData = $this->Student_model->getReferralOffersById(1);
		if($referralData->num_rows() > 0 ){
			$referralDiscountAmt = $referralData->row()->discount_on_referral;
			$referralEarnAmt=$referralData->row()->earn_on_referral;
		}
		$isValidReferralCode = $this->Student_model->isValidReferralCode($rcode);
		if($isValidReferralCode){
		    $couponCode = $rcode;
		    if(strtolower($rcode) == 'offer299'){
		        $discountedAmt = $subscriptionAmt-200;
		    }else if(strtolower($rcode) == 'offer049'){
		        $discountedAmt = $subscriptionAmt-450;
		    }
		    
		    else{
		        $discountedAmt = $subscriptionAmt-$referralDiscountAmt;    
		    }
		}else{
			$discountedAmt = $subscriptionAmt;
		}
		
// 		print_r($discountedAmt);exit;
		
		$isValidDiscountCode = $this->Student_model->isValidDiscountCode($scode);
		
		if($isValidDiscountCode->num_rows() > 0){
		    $couponCode=$scode;
			$isValidDiscountCode = $isValidDiscountCode->row();
			$discountedAmt = $subscriptionAmt - $isValidDiscountCode->discount_amt;
		}
		
		
// 		print_r($discountedAmt);exit;
		
		
		
		$totalPayableAmt = ($rcode != '' || $scode != '') ? $discountedAmt : $totalPayableAmt;
    // 	print_r($totalPayableAmt);exit;
		$razorpayOrder = $api->order->create(array(
			'receipt'         => $sid,
			'amount'          => $totalPayableAmt * 100, // 2000 rupees in paise
			'currency'        => 'INR',
			'payment_capture' => 1 // auto capture
		));
		
		// print_r($razorpayOrder);exit();
		$receipt=$sid;
		$amount=$totalPayableAmt;
		$razorpayOrderId = $razorpayOrder['id'];

		// print_r($razorpayOrderId);exit;

		$_SESSION['razorpay_order_id'] = $razorpayOrderId;
		$referralEarnAmt=$referralEarnAmt;
		$referralDiscountAmt=$referralDiscountAmt;
		$data = $this->prepareData($totalPayableAmt,$razorpayOrderId,$couponCode);
		// print_r($data);exit();
		$updateAmtArray = array(
		    'referral_code' => $couponCode,
		    'amount' => $amount
		
		);
		$this->db->set($updateAmtArray)->where('student_username',$studentData->student_username)->update('student_registration_log');
		$this->load->view('student/razorpay',array('data' => $data,'sid' => $sid,'amount'=>$amount,'referralEarnAmt'=>$referralEarnAmt,'referralDiscountAmt'=>$referralDiscountAmt));
	}

	/**
	 * This function verifies the payment,after successful payment
	 */
	public function verify()
	{
		$success = true;
		$amount="";
		$referralEarnAmt="";
		$referralDiscountAmt="";
		$error = "payment_failed";
		if (empty($_POST['razorpay_payment_id']) === false) {
		  //  print_r($_POST['razorpay_payment_id']);exit;
			$api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
			try {
				$attributes = array(
					'razorpay_order_id'  => $_SESSION['razorpay_order_id'],
					'razorpay_payment_id' => $_POST['razorpay_payment_id'],
					'razorpay_signature' => $_POST['razorpay_signature'],
					'amount'			=>$_POST['amount'],
					'referralEarnAmt'	=>$_POST['referralEarnAmt'],
					'referralDiscountAmt'	=>$_POST['referralDiscountAmt']
				);
				$amount=$attributes['amount'];
				$referralEarnAmt = $attributes['referralEarnAmt'];
				$referralDiscountAmt = $attributes['referralDiscountAmt'];
				$api->utility->verifyPaymentSignature($attributes);
			} catch(SignatureVerificationError $e) {
				$success = false;
				$error = 'Razorpay_Error : ' . $e->getMessage();
				redirect(base_url());
			}
		
		if ($success === true) {
			$registrationDetails = $this->Student_model->getStudentDetailsForUpdate($this->uri->segment(3))->row();
			$studentId="";  
			$StudentName="";
			$registeredEmail="";
			$studentPasswordHashed="";
			$registeredMobileNo="";
			$registeredWhatsappMobileNo="";
			$studentState="";
			$studentCourseName="";
			$registrationStatus="";
			$subscriptionAmount="";
			
			if($registrationDetails!='')
			{
				$studentId=$registrationDetails->student_username;
				$StudentName=$registrationDetails->student_name;
				$registeredEmail=$registrationDetails->registered_email;
				$studentPasswordHashed=$registrationDetails->student_password_hashed;
				$registeredMobileNo=$registrationDetails->registered_mobile_no;
				$registeredWhatsappMobileNo=$registrationDetails->registered_whatsapp_mobile_no;
				$studentState=$registrationDetails->student_state;
				$studentCourseName=$registrationDetails->course_name;
				$registrationStatus=$registrationDetails->registration_status;
				$refferalCode=$registrationDetails->referral_code;
			}
			$regDate = date('Y-m-d H:i:s');
			if(strtolower($registrationDetails->referral_code) == 'offer299'){
			    $subscriptionValidityDate = date('Y-m-d H:i:s', strtotime($regDate. ' +6 Months'));
			}else if(strtolower($registrationDetails->referral_code) == 'offer049'){
			    $subscriptionValidityDate = date('Y-m-d H:i:s', strtotime($regDate. ' +1 Months'));
			}else{
			    $subscriptionValidityDate = date('Y-m-d H:i:s', strtotime($regDate. ' +1 year'));
			}
			
			$data2=array(
				'student_username'=>$studentId,
				'student_name'=>$StudentName,
				'registered_email'=>$registeredEmail,
				'student_password_hashed'=>$studentPasswordHashed,
				'registered_mobile_no'=>$registeredMobileNo,
				'registered_whatsapp_mobile_no'=>$registeredWhatsappMobileNo,
				'student_state'=>$studentState,
				'course_name'=>$studentCourseName,
				'registration_datetime'=>$regDate,
				'subscription_validity_datetime'=>$subscriptionValidityDate,
				'registration_status'=>$registrationStatus,
				'referral_code'=>$refferalCode,
				'amount'=>$amount,
				'registration_status' => 1
			);
			
			$checkUserExistence = $this->db->where('student_username',$studentId)->get('student_registration');
			if($checkUserExistence->num_rows() == 0){
			    $this->Student_model->insertActualStudentRegistrationDetails($data2);
			}
			
			$updateLogdata=$this->db->set('registration_status',1)->where('Student_username',$studentId)->update('student_registration_log');
			$updateRegistrationdata = $this->db->set('amount',$amount)->where('Student_username',$studentId)->update('student_registration_log');
			
			$personalDetails=array(
				'student_username'=>$studentId,
				'student_fullname'=>$StudentName,
				'student_email'=>$registeredEmail,
				'student_mobile_no'=>$registeredMobileNo,
				'student_whatsapp_no'=>$registeredWhatsappMobileNo
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
			
			if($refferalCode != ''){
                if($this->db->where('referral_code', $refferalCode)->get('referral_codes')->num_rows() > 0){
                    $referralCodeData = $this->db->where('id',1)->get('referral_offers');
        			  if($referralCodeData->num_rows() > 0){
        			      $referralCodeData = $referralCodeData->row();
        			      $referralDiscountAmt = $referralCodeData->discount_on_referral;
        			      $referralEarnAmt = $referralCodeData->earn_on_referral;
        			  }
        			}else{
        			    $salesCodeData = $this->db->where('discount_code', $refferalCode)->get('sales_discount_code');
        			    if($salesCodeData->num_rows() > 0){
            			    $salesCodeData = $salesCodeData->row();
            			    $referralDiscountAmt = $salesCodeData->discount_amt;
            			    $referralEarnAmt = 0;
        			    }
        			}
        			$refferalLogs = array(
        				'referral_code' =>$refferalCode, 
        				'registered_student_username'=>$studentId,
        				'discounted_amount' => $referralDiscountAmt,
        				'earned_on_referral_amount'=>$referralEarnAmt
        			);
        			
        			$checkUserExistence = $this->db->where('registered_student_username',$studentId)->get('referral_logs');
        			if($checkUserExistence->num_rows() == 0){
        			    $this->db->insert('referral_logs',$refferalLogs);
        			}
                }
			
			$invoiceid=$this->Student_model->generateRandomString(8);
			
			$checkInvoice = $this->db->where('payment_id',$_POST['razorpay_payment_id'])->where('student_id',$_POST['sid'])->get('invoice');
			if($checkInvoice->num_rows() == 0){
			    $invoice=array(
    				'invoice_id' =>'TGS'.date('Y').$invoiceid,
    				'payment_id' => $_POST['razorpay_payment_id'],
    				'student_id' => $_POST['sid'],
    				'order_id' => $_SESSION['razorpay_order_id'],
    				'amount' => $_POST['amount'],
    				'date' => $regDate
			    );
			    $this->db->insert('invoice',$invoice);
			}
			
			
			$referralData = $this->Student_model->getReferralOffersById(1);
			
    		if($referralData->num_rows() > 0 ){
    			$referralDiscountAmt = $referralData->row()->discount_on_referral;
    			$referralEarnAmt=$referralData->row()->earn_on_referral;
    		}
    		
			$invoiceEmail =array(
				'invoice_id'=>'TGS'.date('Y').$invoiceid,
				'student_id'=>$_POST['sid'],
				'student_name'=>$StudentName,
				'payment_id'=> $_POST['razorpay_payment_id'],
				'student_state'=>$studentState,
				'registered_email'=>$registeredMobileNo,
				'registered_mobile_no'=>$registeredEmail,
				'order_id'=> $_SESSION['razorpay_order_id'],
				'amount'=> $_POST['amount'],
				'date'=> date('Y-m-d H:i:s'),
				'referral_code'=>$uniqueRefferal,
				'earn_amount' => $referralEarnAmt
			);

			$invoiceEmailData['invoiceEmail'] = $invoiceEmail;
            // $invoiceEmail['invoice_id'],$invoiceEmailData['date'],$invoiceEmailData['student_id'],$invoiceEmailData['student_name'],$invoiceEmailData['invoice_id'],$invoiceEmailData['student_state'],$invoiceEmailData['registered_email'],$invoiceEmailData['registered_mobile_no']
			$body=$this->load->view('student/invoice_email',$invoiceEmailData, TRUE);
			$message = $body;
// 			print_r($message);exit;
    		  $config1=array(
                'charset'=>'utf-8',
                'wordwrap'=> TRUE,
                'mailtype' => 'html'
              );
          
            $this->email->initialize($config1);
			$sub = 'TGS | Registration Successful';
			$this->email->from('no-reply@theglobalscholarship.org');
			$this->email->to($registeredEmail);
			$this->email->subject($sub);
			$this->email->message($message);
			$this->email->send();
			$smsMessage = "Hey! Your registration is successful. Please contact our support team if you're unable to login. Don't forget to update your profile - The Global Scholarship";
			$this->Response_model->send_sms('91'.$registeredMobileNo,$smsMessage,NEW_REGISTRATION_SMS_TEMPLATE_ID);
			$_SESSION['registered_email'] = $registeredEmail;
			$_SESSION['student_username'] = $studentId;
			$_SESSION['student_name'] = $StudentName;
			redirect(base_url('personal-details'));
		}
	}
		else {

			redirect(base_url('account-settings'));
		}

	}

	/**
	 * This function preprares payment parameters
	 * @param $amount
	 * @param $razorpayOrderId
	 * @return array
	 */
	public function prepareData($amount,$razorpayOrderId,$couponCode)
	{	
		$id=$this->uri->segment(3);
		$studentData=$this->db->where('Student_username',$id)->get('student_registration_log')->row();
		$sid=$studentData->student_username;
		$name=$studentData->student_name;
		$eachAmount=$studentData->amount;
		$email=$studentData->registered_email;
		$mobile_number=$studentData->registered_mobile_no;

		$data = array(
			"key" => RAZOR_KEY,
			"amount" => $amount,
			"name" => "The Global Scholarship",
			"description" => "A scholarship search engine",
			"image" => base_url()."website_assets/sc%20logo.png",
			"prefill" => array(
				"name"  => $name,
				"email"  => $email,
				"contact" => $mobile_number,
				
			),
			"notes"  => array(
				"address"  => $studentData->student_state,
				"merchant_order_id" =>$sid,
				"payment_type" => 'fresh',
				"referral_code" => $couponCode
			),
			"theme"  => array(
				"color"  => "#F37254"
			),
			"order_id" => $razorpayOrderId,
		);
		// print_r($data);exit();

		return $data;
	}
	// print_r($data);exit();

	/**
	 * This function saves your form data to session,
	 * After successfull payment you can save it to database
	 */
	public function setRegistrationData()
	{
		// at('registration_status',1)->where('Student_username',$id)->update('student_registration');
	}


	public function renewalPayements()
	{
		$api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
		/**
		 * You can calculate payment amount as per your logic
		 * Always set the amount from backend for security reasons
		 */

		$id=$this->uri->segment(3);
		$subscription=$this->input->get('subscription');
		if($subscription != 3){
		    $subscription = 3;
		}
		
		$studentData=$this->Student_model->getStudentDetailsForRenewal($id)->row();
		$sid=$studentData->student_username;
		$subscriptionAmt = DEFAULT_SUBSCRIPTION_AMOUNT;
		$subscriptionData = $this->Student_model->getSubscriptionAmtBySubcriptionId($subscription)->row();
		$packageAmount=$subscriptionData->amount;
		$totalPayableAmt = $packageAmount;

		$razorpayOrder = $api->order->create(array(
			'receipt'         => $sid,
			'amount'          => $totalPayableAmt * 100, // 2000 rupees in paise
			'currency'        => 'INR',
			'payment_capture' => 1 // auto capture
		));

		$receipt=$sid;
		$amount=$totalPayableAmt;
		$razorpayOrderId = $razorpayOrder['id'];
		$_SESSION['razorpay_order_id'] = $razorpayOrderId;
		$data = $this->prepareDataForRenewal($totalPayableAmt,$razorpayOrderId);

		$this->load->view('student/renewal_razorpay',array('data' => $data,'sid' => $sid,'amount'=>$amount));
	}

	public function verifyRenewal()
	{
		
		$success = true;
		$amount="";
		$error = "payment_failed";
		if (empty($_POST['razorpay_payment_id']) === false) {
			$api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
			try {
				$attributes = array(
					'razorpay_order_id'  => $_SESSION['razorpay_order_id'],
					'razorpay_payment_id' => $_POST['razorpay_payment_id'],
					'razorpay_signature' => $_POST['razorpay_signature'],
					'amount'			=>$_POST['amount'],
				);
				$amount=$attributes['amount'];
				$api->utility->verifyPaymentSignature($attributes);
			} catch(SignatureVerificationError $e) {
				$success = false;
				$error = 'Razorpay_Error : ' . $e->getMessage();
			}
		}
		if ($success === true) {
			$registrationDetails=$this->Student_model->getStudentDetailsForRenewal($this->uri->segment(3))->row();
			$studentId="";  
			$subscriptionAmount="";
			
			if($registrationDetails!='')
			{
				$studentId=$registrationDetails->student_username;
				$StudentName=$registrationDetails->student_name;
				$registeredEmail=$registrationDetails->registered_email;
				$studentPasswordHashed=$registrationDetails->student_password_hashed;
				$registeredMobileNo=$registrationDetails->registered_mobile_no;
				$registeredWhatsappMobileNo=$registrationDetails->registered_whatsapp_mobile_no;
				$studentState=$registrationDetails->student_state;
				$studentCourseName=$registrationDetails->course_name;
				$registrationStatus=$registrationDetails->registration_status;
				$refferalCode=$registrationDetails->referral_code;
			}
			
			$regDate = date('Y-m-d H:i:s');
			$data2=array(
				'subscription_validity_datetime' => date('Y-m-d H:i:s', strtotime($regDate. ' +1 Year')),
				'amount'=>$amount,
				'is_trial_register'=>0,
				'registration_status'=>1
			);
			$this->db->set($data2)->where('student_username',$studentId)->update('student_registration');
			$this->db->set('registration_status',1)->where('student_username',$studentId)->update('student_registration_log');
			
			$invoiceid=$this->Student_model->generateRandomString(8);
			$invoice=array(
				'invoice_id' =>'TGSREN'.date('Y').$invoiceid,
				'payment_id' => $_POST['razorpay_payment_id'],
				'student_id' => $_POST['sid'],
				'order_id' => $_SESSION['razorpay_order_id'],
				'amount' => $amount,
				'date' => $regDate
			);
			$this->db->insert('invoice',$invoice);
			$renwalData=array(
			    'student_username'=>$studentId,
			    'renewal_date'=>$regDate,
			    'renewal_amount'=>$amount,
			    );
			 //   print_r($renwalData);exit();
			    $this->db->insert('renewal_log',$renwalData);
			
			redirect(base_url('personal-details'));
		}
		else {

			redirect(base_url().'student-home');
		}
	}
	public function prepareDataForRenewal($amount,$razorpayOrderId){
	    
		$id=$this->uri->segment(3);
		// $result=$this->db->get('');
		$studentData=$this->db->where('Student_username',$id)->get('student_registration')->row();
		$sid=$studentData->student_username;
		$name=$studentData->student_name;
		$eachAmount=$studentData->amount;
		$email=$studentData->registered_email;
		$mobile_number=$studentData->registered_mobile_no;
		$data = array(
			"key" => RAZOR_KEY,
			"amount" => $amount,
			"name" => "The Global Scholarship",
			"description" => "A scholarship search engine",
			"image" => "https://www.theglobalscholarship.org/assets/sc%20logo.png",
			"prefill" => array(
				"name"  => $name,
				"email"  => $email,
				"contact" => $mobile_number,
				
			),
			"notes"  => array(
				"address"  => $studentData->student_state,
				"merchant_order_id" => $sid,
				"payment_type" => "renewal"
			),
			"theme"  => array(
				"color"  => "#F37254"
			),
			"order_id" => $razorpayOrderId,
		);
		return $data;
	}
	
	public function success()
	{
		$this->load->view('success');
	}
	
	public function paymentFailed()
	{
		$this->load->view('error');
	}
}?>