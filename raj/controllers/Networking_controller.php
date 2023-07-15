<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Networking_controller extends CI_Controller
{
	public function viewScholarshipPromotion()
	{
	

	//$id=SCHOLARSHIP_ID;
	$id=$this->input->get('sid');
	
	
	if($id!='')
	{
  	$this->load->view('networking/network_header');
  	$data['getScholarship']=$this->Networking_model->getScholarshipDetails($id);
	$data['getAttachments']=$this->Networking_model->getAttachment($id);
  	$this->load->view('networking/scholarship_promotion',$data);
  	$this->load->view('networking/network_footer');
	}
	else
	{
	    redirect('student-login');
	}
  	}



  	public function  getScholarship($id)
  	{	
  	$this->load->view('networking/network_header');
  	$data['getScholarship']=$this->Networking_model->getScholarshipDetails($id);
	$data['getAttachments']=$this->Networking_model->getAttachment($id);
  	$this->load->view('networking/scholarship_promotion',$data);
 	$this->load->view('networking/network_footer');
  	}



  	public function resolveLinkAndUpdateLinkVisitStatus()
	{
		$data['states']=$this->Networking_model->getStateList();
		$data['course']=$this->Networking_model->getCouresList();
		$this->load->view('networking/student_registration',$data);

	}




public function addStudentRegistrationDetails()
{	


// 	$scholarshipId = SCHOLARSHIP_ID;

    $scholarshipId = $this->input->post('sid');
    $scholarshipDetails	 =$this->Networking_model->getScholarshipDetails($scholarshipId);

	$verifyRegistration=$this->Networking_model->verifyMobileNumberInRegistrationTable($this->input->post('mobile_number'));
	$verifyEmail=$this->Networking_model->verifyEmailInRegistrationTable($this->input->post('email'));


	if($verifyRegistration)
	{
		
		
		
		$registration_initiated_datetime=array(

		'registration_initiated_datetime'=>date('Y-m-d H:i:m')

		);

		$this->db->set($registration_initiated_datetime);
	    $this->db->where('registered_mobile_no',$this->input->post('mobile_number'));
	    $this->db->update('promotion_register');
		
		redirect("social-scholarship-promotion?sid=$scholarshipId");
	}
	else if($verifyEmail)
	{
	   
	   
		
		$registration_initiated_datetime=array(

		'registration_initiated_datetime'=>date('Y-m-d H:i:m')

		);

		$this->db->set($registration_initiated_datetime);
	    $this->db->where('registered_email',$this->input->post('email'));
	    $this->db->update('promotion_register');
	    
		
		redirect("social-scholarship-promotion?sid=$scholarshipId");
	}

	else
	{	
	    
	    
	    $studentStatus=$this->Networking_model->verifyStudentStatus($this->input->post('email'),$this->input->post('mobile_number'));
	
		$studentId=$this->Networking_model->generateRandomString(18);
		$data=array(

			'student_username'=>$studentId,	
			'student_name'=>ucfirst($this->input->post('fullname')),
			'registered_mobile_no'=>$this->input->post('mobile_number'),
			'registered_email'=>$this->input->post('email'),
			'student_state'=>$this->input->post('state'),
			'course_name'=>$this->input->post('course'),
			'registration_status'=>0,
			'registration_initiated_datetime'=>date('Y-m-d H:i:s'),
			'registration_initiated_datetime'=>date('Y-m-d H:i:s'),
			'source'=> $scholarshipDetails->scholarship_name,
			'student_status'=>$studentStatus
			
		);
	    
	   
      
		$result = $this->Networking_model->addStudentRegistrationDetails($data);
		if($result)
		{
		
				redirect("social-scholarship-promotion?sid=$scholarshipId");
		
		}
		else
		{
			  $this->session->set_flashdata('account-error', 'Something went wrong, please try again');
			redirect("fill-details?sid=$scholarshipId");
		}

	}

}





	public function socialScholarshipPromotion()
	{
// 		$scholarshipId=SCHOLARSHIP_ID;

        $scholarshipId=$this->input->get('sid');
		
		$this->load->view('networking/network_header');
		$data['scholarship']=$this->Networking_model-> getScholarshipDetailsById($scholarshipId);
	  	$this->load->view('networking/social_scholarship_promotion',$data);
	  	$this->load->view('networking/network_footer');

	}




}
?>