<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Institute_model extends CI_Model
{
   	public function generateRandomString($n) { 
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$randomString = '';
		for ($i = 0; $i < $n; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		}
		return $randomString; 
	}


	function moneyFormatIndia($num) {
		$explrestunits = "" ;
		if(strlen($num)>3) {
			$lastthree = substr($num, strlen($num)-3, strlen($num));
        $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
        $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
        $expunit = str_split($restunits, 2);
        for($i=0; $i<sizeof($expunit); $i++) {
            // creates each of the 2's group and adds a comma to the end
        	if($i==0) {
                $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
            } else {
            	$explrestunits .= $expunit[$i].",";
            }
        }
        $thecash = $explrestunits.$lastthree;
    } else {
    	$thecash = $num;
    }
    return $thecash; // writes the final format where $currency is the currency symbol.
}

   	public function verifyLogin()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
			// $remember=$this->input->post('rememberme');
		$login_user_details=$this->db->where('institute_email',$username)->get('institute_registration');

		if($login_user_details->num_rows()>0)
		{
			$login_user_details=$login_user_details->row();

			if($login_user_details->institute_password==$password)
			{	
				$_SESSION['institute_username']=$login_user_details->institute_email;
				$_SESSION['institute_id']=$login_user_details->institute_userid;
				//print_r($_SESSION['sale_id']);exit;

				$this->session->set_flashdata('login-success','login success...');
				redirect('institute/institute-dashboard');
			}
			else
			{	
				$this->session->set_flashdata('incorrect-password-error', 'incorrect password!!!'); 
				redirect('institute-login');
			}

		}
		else
		{	

			$this->session->set_flashdata('no-account-found-error', 'no account found with this username..'); 

			redirect('institute-login');
			
		}

	}
   
   public function getInstituteData(){
   return $this->db->where('institute_userid',$this->session->userdata('institute_id'))->get('institute_registration')->row();

   }




	public function bulkStudentUpload()
	{

		$data=array();
		
		$duplicateEmailList=array();
		$duplicateMobileNumber=array();

		if ($_FILES['file']['name'][0] != '')
		{
			
			$path = $_FILES['file']['name'];
			
			$newName = "institute_student_bulk_file".".".pathinfo($path, PATHINFO_EXTENSION); 
				//print_r($newName);exit;
			$config['upload_path'] = './institute_uploads/institute_student_bulk_upload/';
					//$config['allowed_types'] = 'image|gif|jpg|png|jpeg|JPG|PNG|JPEG|GIF';
			$config['allowed_types'] = '*';
					//$config['max_size'] = 10000;
			$config['file_name'] = date('YmdHis')."_".$path;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('file'))
			{
				$error = array(
					'error' => $this->upload->display_errors()
				);
				$this->session->set_flashdata('error', 'Something went wrong.');
			}
			else
			{
				$data1 = $this->upload->data();
				$documentName = $data1['file_name'];

			}


			$filename = $_FILES["file"]["tmp_name"];
			

			if ($_FILES["file"]["size"] > 0) {
				
				$index = 1;
				$file  = fopen($filename, "r");
				while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE) {
					if ($index == 1) {
						$index++;
						continue;
					}

					$sname      = $importdata[0];
					$email   = $importdata[1];
					$mobile     = $importdata[2];
					$whatsapp        = $importdata[3];
					$course        	= $importdata[4];
					

					$leadDetails = array(
						'student_username'=>$this->generateRandomString(18),
						'student_name'=>$sname,
						'registered_email'=>$email,
						'student_password_hashed'=>$mobile,
						'registered_mobile_no'=>$mobile,
						'registered_whatsapp_mobile_no'=>$whatsapp,
						'course_name'=>$course,
						'registration_datetime'=> date("Y-m-d H:i:s"),
						'student_institute_userid'=>$this->session->userdata('institute_id')

					);

					$verificationDuplicateEmail=$this->Student_model->verifyStudentEmailInRegistrationTable($email);
					if($verificationDuplicateEmail)
					{
						array_push($duplicateEmailList,$leadDetails);
					}

					$verifyDuplicateMobileNumber=$this->Student_model->verifyMobileNumberInRegistrationTable($mobile);

					if($verifyDuplicateMobileNumber)
					{
						array_push($duplicateMobileNumber,$leadDetails);
					}

					$fileData = array(
						'institute_id'=>$this->session->userdata('institute_id'),
						'file'=>$documentName,
						'date'=>date("Y-m-d H:i:s")
					);
					//print_r($leadDetails);exit;
					array_push($data,$leadDetails);


					$index++;
				}
				fclose($file);

				if(empty($verificationDuplicateEmail) && empty($verifyDuplicateMobileNumber) )
				{

					$this->db->trans_start();
					$this->db->insert_batch('student_registration', $data);
					$this->db->insert('institution_uploaded_file',$fileData);
					$this->db->trans_complete();

					if ($this->db->trans_status() === TRUE)
					{
						$this->session->set_flashdata('add-success','Added successfully');
						redirect("institute/uploads-bulk-data");

					}
					else
					{
						$this->session->set_flashdata('add-failure','failed to add');
						redirect("institute/uploads-bulk-data");
					}

				}

				else
				{
					$this->session->set_flashdata('duplicate-entries', 'Duplicate email or mobile number');
					redirect('institute/uploads-bulk-data');
				}

			} else {
				$this->session->set_flashdata('failure', 'Something went wrong..');
				redirect('institute/uploads-bulk-data');


			}

		}
		else
		{
			$this->session->set_flashdata('add-failure','failed to add feed back');
			redirect("institute/uploads-bulk-data");
		}
	}

	public function getStudentData(){
		$this->db->select('*')->from('student_registration')
		->where('student_institute_userid',$this->session->userdata('institute_id'));
		$data = $this->db->get();
		return $data;
	}
	public function geInstituteFile(){
		$this->db->select('*')
		->from('institution_uploaded_file')
		->where('institute_id',$this->session->userdata('institute_id'));
	    $data = $this->db->get()->result();
	    return $data;		
	}
	public function getSentNotificationScholarship(){
		$this->db->select('sent_notifications.*');
		$this->db->from('sent_notifications');
		$this->db->join('student_registration','student_registration.student_username = sent_notifications.student_username');
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		$q=$this->db->get();
		return $q->result();
	}

	public function getSentWorth(){
		$this->db->select('scholarships.*');
		$this->db->from('scholarships');
		$this->db->join(' sent_notifications',' sent_notifications.scholarship_id = scholarships.scholarship_id');
		$this->db->join('student_registration','student_registration.student_username = sent_notifications.student_username');
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		$q=$this->db->get();
		return $q->result();
	}

	public function getUpdateTotalStudents(){
		$this->db->select('*');
		$this->db->from('student_personal_details');
		$this->db->join('student_registration','student_registration.student_username=student_personal_details.student_username');
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		//$this->db->where('update_status',1);
		$q=$this->db->get();
		return $q;
	}
	public function getAppliedStatus(){
		$this->db->select('*');
		$this->db->from('sent_notifications');
		$this->db->join('student_registration','student_registration.student_username = sent_notifications.student_username');
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		$this->db->where('sent_notifications.applied_status','1');
		$q=$this->db->get();
		return $q->result();
	}
	public function getVisitStatus(){
		$this->db->select('*');
		$this->db->from('sent_notifications');
		$this->db->join('student_registration','student_registration.student_username = sent_notifications.student_username');
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		$this->db->where('sent_notifications.link_visit_status','1');
		$q=$this->db->get();
		return $q->result();
	}

	public function getPersonalDetails($id){
		return $this->db->where('student_username',$id)->get('student_personal_details');
	}

	public function academiclDetails($id){
		return $this->db->where('student_username',$id)->get('student_academic_details')->row();
	}

	public function familyDetails($id){
		return $this->db->where('student_username',$id)->get('student_family_details')->row();
	}
	public function extracarricular($id){
		return $this->db->where('student_username',$id)->get('student_extracarricular_details')->result();
	}
	public function bankAddress($id){
		return $this->db->where('student_username',$id)->get('bank_and_address_details')->row();
	} 

	public function getInstituteAggrementPapers()
	{

		$result=$this->db->get('institution_agreement_document');
		return $result;

	}

	public function getLastMonthAppliedReport()
	{
		$startDate = new DateTime();
		$startDate->modify( 'first day of last month' );
		$endDate   = new DateTime();
		$endDate->modify( 'last day of last month' );
       	$this->db->select('*');
		$this->db->from('sent_notifications');
		$this->db->join('student_registration','student_registration.student_username = sent_notifications.student_username');
		$this->db->where("sent_notifications.date_time BETWEEN '" . $startDate->format( 'Y-m-d' ) . "' AND '" . $endDate->format( 'Y-m-d') . "' ");
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		$this->db->where('sent_notifications.applied_status','1');
		$q=$this->db->get();
		return $q->result();
	}
    	public function getLastMonthVisitStatus(){
    		$startDate = new DateTime();
		$startDate->modify( 'first day of last month' );

		$endDate   = new DateTime();
		$endDate->modify( 'last day of last month' );
		$this->db->select('*');
		$this->db->from('sent_notifications');
		$this->db->join('student_registration','student_registration.student_username = sent_notifications.student_username');
		$this->db->where("sent_notifications.date_time BETWEEN '" . $startDate->format( 'Y-m-d' ) . "' AND '" . $endDate->format( 'Y-m-d') . "' ");
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		$this->db->where('sent_notifications.link_visit_status','1');
		$q=$this->db->get();
		return $q->result();
	}
	public function getMonthlyReportUpdateTotalStudents(){
			$startDate = new DateTime();
		$startDate->modify( 'first day of last month' );

		$endDate   = new DateTime();
		$endDate->modify( 'last day of last month' );
		$this->db->select('*');
		$this->db->from('student_personal_details');
		$this->db->join('student_registration','student_registration.student_username=student_personal_details.student_username');
		$this->db->where("student_personal_details.date BETWEEN '" . $startDate->format( 'Y-m-d' ) . "' AND '" . $endDate->format( 'Y-m-d') . "' ");
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		//$this->db->where('update_status',1);
		$q=$this->db->get();
		return $q;
	}


	public function getInstitutionScholarshipDetails()
	{
		$instituionId=$this->session->userdata('institute_id');

		$status=0;
		$result=$this->db->query("select * from institution_scholarship join send_institution_scholarship on institution_scholarship.scholarship_id=send_institution_scholarship.scholarship_reference_id
			join institute_registration on send_institution_scholarship.institution_id= institute_registration.institute_userid 
			where institution_scholarship.scholarship_status='$status' and  institute_registration.institute_userid='$instituionId' order by institution_scholarship.last_date desc

			");
		return $result;

	}

	public function getMonthlyReportSentWorth(){
			$startDate = new DateTime();
		$startDate->modify( 'first day of last month' );

		$endDate   = new DateTime();
		$endDate->modify( 'last day of last month' );
		$this->db->select('scholarships.*');
		$this->db->from('scholarships');
		$this->db->join(' sent_notifications',' sent_notifications.scholarship_id = scholarships.scholarship_id');
		$this->db->join('student_registration','student_registration.student_username = sent_notifications.student_username');
		$this->db->where("sent_notifications.date_time BETWEEN '" . $startDate->format( 'Y-m-d' ) . "' AND '" . $endDate->format( 'Y-m-d') . "' ");
		$this->db->where('student_registration.student_institute_userid',$this->session->userdata('institute_id'));
		$q=$this->db->get();
		return $q->result();
	}


	public function getScholarship(){
		$this->db->select('* ')
		->from('scholarships');
		$data = $this->db->get();
		//print_r($data);exit;
		return $data;
	}


	public function getScholarshipBasedOnScholarshipId($id)
	{
		$institutionId=$this->session->userdata('institute_id');

		$status=0;
		$result=$this->db->query("select * from institution_scholarship join send_institution_scholarship on institution_scholarship.scholarship_id=send_institution_scholarship.scholarship_reference_id
			 join institute_registration on send_institution_scholarship.institution_id= institute_registration.institute_userid 
			where institution_scholarship.scholarship_status='$status' and institution_scholarship.scholarship_id='$id' and  institute_registration.institute_userid='$institutionId'

		 ");
		return $result;

	}

	public function getDocumentsBasedOnScholarshipId($id)
	{	
		$institutionId=$this->session->userdata('institute_id');

		$status=0;
		$result=$this->db->query("select * from institution_scholarship join send_institution_scholarship on institution_scholarship.scholarship_id=send_institution_scholarship.scholarship_reference_id
			 join multiple_file_institute_scholarship on institution_scholarship.scholarship_id=multiple_file_institute_scholarship.	scholarship_refer_id
			  join institute_registration on send_institution_scholarship.institution_id= institute_registration.institute_userid 
			where institution_scholarship.scholarship_status='$status' and institution_scholarship.scholarship_id='$id' and  institute_registration.institute_userid='$institutionId'

		 ");
		return $result;
	}

	public function getInsttutionProfileDetials()
	{
		// $email=$this->session->userdata('username');
		$userId=$this->session->userdata('institute_id');

		// $this->db->where('institute_email',$email);
		$this->db->where('institute_userid',$userId);
		$result=$this->db->get('institute_registration');
		return $result;
	}

	public function updateInstitutionProfile($data,$id)
	{

		$this->db->set($data);
		$this->db->where('institute_userid',$id);
		$result=$this->db->update('institute_registration',$data);
		return $result;

	}


	public function getMonthlySentNotificationScholarship(){
			$startDate = new DateTime();
		$startDate->modify( 'first day of last month' );

		$endDate   = new DateTime();
		$endDate->modify( 'last day of last month' );
		$this->db->distinct('sent_notifications.scholarship_id');
		// $this->db->select('DISTINCT ');
		$this->db->from('sent_notifications');
		$this->db->join('scholarships','scholarships.scholarship_id = sent_notifications.scholarship_id');
		$this->db->group_start();
		$this->db->where("sent_notifications.date_time BETWEEN '" . $startDate->format( 'Y-m-d' ) . "' AND '" . $endDate->format( 'Y-m-d') . "' ");
		$this->db->group_end();
		$this->db->where('sent_notifications.ins_added_by',$this->session->userdata('institute_id'));
		$q=$this->db->get();
		print_r($q->result());
		print_r($this->db->last_query());exit();
		return $q->result();
	}
  
	public function totalApplied(){
	  	$this->db->select('sent_notifications.*');
		$this->db->from('sent_notifications');
		$this->db->join('scholarships','scholarships.scholarship_id = sent_notifications.scholarship_id');
	   $this->db->where('sent_notifications.applied_status',1);
		$this->db->where('sent_notifications.ins_added_by',$this->session->userdata('institute_id'));
		$q=$this->db->get();
		return $q->result();
	}

	public function totalVisited(){
	  	$this->db->select('sent_notifications.*');
		$this->db->from('sent_notifications');
		$this->db->join('scholarships','scholarships.scholarship_id = sent_notifications.scholarship_id');
	   $this->db->where('sent_notifications.link_visit_status',1);
		$this->db->where('sent_notifications.ins_added_by',$this->session->userdata('institute_id'));
		$q=$this->db->get();
		return $q->result();
	}

	public function totalReceived(){
		$this->db->select('sent_notifications.*');
		$this->db->from('sent_notifications');
		$this->db->join('scholarships','scholarships.scholarship_id = sent_notifications.scholarship_id');
		$this->db->where('sent_notifications.reward_received_status',1);
		$this->db->where('sent_notifications.ins_added_by',$this->session->userdata('institute_id'));
		$q=$this->db->get();
		return $q->result();
	}
}?>