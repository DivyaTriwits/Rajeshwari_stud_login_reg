<?php 
class Migration_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->olddb = $this->load->database('olddb', TRUE);
	}
	public function migrateInstitutes(){
		$registeredInstitutes = $this->olddb->get('institute_register')->result();
		$insterBulkArray = array();
		foreach ($registeredInstitutes as $eachInstitute) {
			$dataArray = array(
				'institute_userid' => $this->Institute_model->generateRandomString(18),
				'institute_name'  => $eachInstitute->name,
				'institute_email'   => $eachInstitute->email,
				'institute_password'  => $eachInstitute->password,
				'institute_user_fullname'  => $eachInstitute->name,
				'institute_user_mobile_no'  => $eachInstitute->num
			);
			$insterBulkArray[] = $dataArray;
		}

		$this->db->insert_batch('institute_registration',$insterBulkArray);
		print_r("Done");exit;
	}


	public function migrateStudents(){
		// echo"Asif";exit();
		$oldStudents = $this->olddb->get('student_register')->result();
		$managerAccounts = $this->olddb->get('manager_account')->result();
		
		$failedRegisterBulk = array();
		$registerBulk = array();
		$personalDetailsBulk = array();
		$academicDetailsBulk = array();
		$familyDetailsBulk = array();
		$BankDetailsBulk = array();
		$documentDetailsBulk = array();
		// $academicDetailsBulk = array();
		foreach ($oldStudents as $eachStudent) {
			$instituteId = '' ;
			if($eachStudent->username == ''){
				continue;
			}
			if($eachStudent->added_by != ''){
				
				foreach ($managerAccounts as $eachManager) {
					if($eachStudent->added_by == $eachManager->email){
						$instituteCheck = $this->db->where('institute_email',$eachManager->added_by)->get('institute_registration');
						if($instituteCheck->num_rows() > 0){
							$instituteId = $instituteCheck->row()->institute_userid;

						}
					}
				}
				// print_r($instituteId);exit();

			}

			$registerArray = array(
				'student_username'			=>$eachStudent->username,
				'student_name'				=>$eachStudent->name." ".$eachStudent->lname,
				'registered_email'			=>$eachStudent->email,
				'student_password_hashed'	=>$eachStudent->password,
				'registered_mobile_no'		=>$eachStudent->num,
				// 'registered_whatsapp_mobile_no'=$eachStudent->
				'student_state'					=>$eachStudent->state,
				'course_name'					=>$eachStudent->degree,
				'registration_datetime'			=>$eachStudent->registration_datetime,
				// 'registration_verified_datetime'	=$eachStudent->
				// 'is_forgot_password_initiated'	=$eachStudent->
				// 'forgot_password_initiated_datetime'=$eachStudent->
				'subscription_validity_datetime'=>$eachStudent->subscription_expiration_date,
				// 'amount'						=$eachStudent->,
				'registration_status'			=>$eachStudent->status,
				'referral_code'					=>$eachStudent->referral_code,
				// 'is_individual_registration'		=>$eachStudent->,
				'student_institute_userid'		=>$instituteId,
			);
			$registerBulk[] = $registerArray;

				// print_r("registerDone");exit;
			// print_r($registerArray);
			if($eachStudent->is_trial == 1){
				$registrationDate = $eachStudent->registration_datetime;
				$expirationDate = date($registrationDate,strtotime('+3 months'));
			}else{
				$registrationDate = $eachStudent->registration_datetime;
				$expirationDate = date($registrationDate,strtotime('+1 years'));
			}
			if($eachStudent->status == 0){
				$failedRegisterArray = array(
					
					'student_username'			=>$eachStudent->username,
					'student_name'				=>$eachStudent->name."".$eachStudent->lname,
					'registered_email'			=>$eachStudent->email,
					'student_password_hashed'	=>$eachStudent->password,
					'registered_mobile_no'		=>$eachStudent->num,
				// 'registered_whatsapp_mobile_no'=$eachStudent->
					'student_state'					=>$eachStudent->state,
					'course_name'					=>$eachStudent->degree,
					'registration_datetime'			=>$eachStudent->registration_datetime,
				// 'registration_verified_datetime'	=$eachStudent->
				// 'is_forgot_password_initiated'	=$eachStudent->
				// 'forgot_password_initiated_datetime'=$eachStudent->
				// 'amount'						=$eachStudent->,
					'registration_status'			=>0,
					'referral_code'					=>'',	

				);
				$failedRegisterBulk[] = $failedRegisterArray;
				// $this->db->insert_batch('student_registration',$registerBulk);
				
			}else{
				$registerArray = array(
					'student_username'			=>$eachStudent->username,
					'student_name'				=>$eachStudent->name." ".$eachStudent->lname,
					'registered_email'			=>$eachStudent->email,
					'student_password_hashed'	=>$eachStudent->password,
					'registered_mobile_no'		=>$eachStudent->num,
				// 'registered_whatsapp_mobile_no'=$eachStudent->
					'student_state'					=>$eachStudent->state,
					'course_name'					=>$eachStudent->degree,
					'registration_datetime'			=>$eachStudent->registration_datetime,
				// 'registration_verified_datetime'	=$eachStudent->
				// 'is_forgot_password_initiated'	=$eachStudent->
				// 'forgot_password_initiated_datetime'=$eachStudent->
					'subscription_validity_datetime'=>$eachStudent->subscription_expiration_date,
				// 'amount'						=$eachStudent->,
					'registration_status'			=>$eachStudent->status,
					'referral_code'					=>$eachStudent->referral_code,	
				);
				// print_r($registerArray);exit();
				$personalDetails = array(
					'student_username'  			=>$eachStudent->username,
					'student_fullname'				=>$eachStudent->name." ".$eachStudent->lname,
					'date_of_birth'					=>$eachStudent->dob,											
					'student_gender'				=>$eachStudent->gender,
					'student_email'					=>$eachStudent->email,
					'student_mobile_no'				=>$eachStudent->num,
					// 'student_whatsapp_no'			=>$eachStudent->	,

					// 'is_specially_abled'			=>$eachStudent->is_handicap,
					// 'specially_abled_type'			=>$eachStudent->,
					// 'specially_abled_percentage'	=>$eachStudent->,
					// 'is_single_child'				=>$eachStudent->,
					// 'is_single_girl_child'			=>$eachStudent->,
					'adharno'						=>$eachStudent->aadhaar_no,
					// 'date'							=>$eachStudent->,
					'student_photo'					=>$eachStudent->profile_img,
				);
				// $personalDetailsBulk[] = $personalDetails;
				// $this->db->insert_batch('student_personal_details',$personalDetailsBulk);
				// print_r("Done");exit;

				$academicDetails = array(
					'student_username'				=>$eachStudent->username,
					// 'student_current_school_name'	=>$eachStudent->,
					'student_studying_state'		=>$eachStudent->state,
					'student_studying_district'		=>$eachStudent->district,
					'qualification'					=>$eachStudent->degree,
					'current_class_or_degree'		=>$eachStudent->course,
					// 'current_semester'				=>$eachStudent->,
					'is_hosteller'					=>$eachStudent->is_hosteller,
					// 'tenth_board'					=>$eachStudent->,
					'previous_year_result'			=>$eachStudent->previousYearPercentage,
					// 'tenth_cgpa_type'				=>$eachStudent->,
					'tenth_cgpa_or_percentage'		=>$eachStudent->sslc_marks,
					// 'tenth_year_of_passing'			=>$eachStudent->,
					// 'twelfth_board'					=>$eachStudent->,
					// 'twelfth_cgpa_type'				=>$eachStudent->,
					'twelfth_cgpa_or_percentage'	=>$eachStudent->puc_marks,
					// 'twelfth_year_of_passing'		=>$eachStudent->,
					// 'quota' 						=>$eachStudent->,
					// 'diploma_board'					=>$eachStudent->,
					// 'diploma_cgpa_type'				=>$eachStudent->,
					// 'diploma_cgpa_or_percentage'	=>$eachStudent->,
					// 'diploma_year_of_passing'		=>$eachStudent->,

				);
				// print_r($registerArray);
				$familyDetails = array(
					'student_username'      =>$eachStudent->username,
					// 'father_fullname'       =>$eachStudent->,
					// 'mother_fullname'       =>$eachStudent->,
					'religion'              =>$eachStudent->religion,
					'category'              =>$eachStudent->category,
					// 'number_of_siblings'    =>$eachStudent->,
					// 'parent_occupation'     =>$eachStudent->,
					'family_annual_income'  =>$eachStudent->familyIncome,
					'is_orphans'            =>$eachStudent->is_orphan,
					// 'is_single_parent'      =>$eachStudent->,
				);
				$bankDetails = array(
					'student_username'      =>$eachStudent->username,
				);


				


				// $documentDetails = array(
				// 	'student_username'      =>$eachStudent->username,
				// );
				// print_r($registerArray);
				
				// $registerBulk[] = $registerArray;
				$BankDetailsBulk[] = $bankDetails;
				// $documentDetailsBulk[]=$documentDetails;
				$personalDetailsBulk[] = $personalDetails;
				$academicDetailsBulk[] = $academicDetails ;
				$familyDetailsBulk[] =  $familyDetails ;
				// $academicDetailsBulk[] = $academicDetails;


			}
			// print_r($registerArray);


			
			
		}



		// print_r($registerBulk);exit;
		// print_r($failedRegisterBulk);

						// print_r($registerBulk);exit();

		// $this->db->insert_batch('student_registration',$registerBulk);
		
		// $this->db->insert_batch('student_personal_details',$personalDetailsBulk);
		// print_r("student_personal_details  done");exit();
		// $this->db->insert_batch('student_academic_details',$academicDetailsBulk);
		// print_r("student_academic_details  done");exit();
		// $this->db->insert_batch('student_family_details',$familyDetailsBulk);
		// print_r("family Details done");exit();
		$this->db->insert_batch('bank_and_address_details',$BankDetailsBulk);
		print_r("bank_and_address_details done");exit();
		// $this->db->insert_batch('institute_registration',$academicDetailsBulk);
		// $this->db->insert_batch('institute_registration',$failedRegisterBulk);


	}
	public function migrateStates()
	{
		$oldStates=$this->olddb->get('states')->result();
		$insterBulkStatespArray = array();


		foreach ($oldStates as $eachStates) {
			$dataArray = array(
				
				'name' 				=>$eachStates->name,
				'country_id'		=>$eachStates->country_id
			);
			$insterBulkStatespArray[]=$dataArray;
		}

		// $this->db->insert_batch('states',$insterBulkStatespArray);
		// print_r("states Details done");exit();
	}
	public function migrateCities()
	{
		$oldCities=$this->olddb->get('cities')->result();
		$insterBulkCitiesArray = array();


		foreach ($oldCities as $eachCities) {
			$dataArray = array(
				
				'city' 				=>$eachCities->city,
				'state_id'		=>$eachCities->state_id
			);
			$insterBulkCitiesArray[]=$dataArray;
		}

		$this->db->insert_batch('cities',$insterBulkCitiesArray);
		print_r("cities Details done");exit();
	}




	public function migrateScholarships()
	{
		$Scholarship=$this->olddb->get('scholarships')->result();
		$insterBulkScholarshipArray = array();
		foreach ($Scholarship as $eachScholarship) {
			$dataArray = array(

				'scholarship_id' 					=>$eachScholarship->scholarship_id,
				'scholarship_type'					=>$eachScholarship->scholarship_category,
				'scholarship_name'					=>$eachScholarship->fname,
				'scholarship_link'					=>$eachScholarship->url,
				'scholarship_description'			=>$eachScholarship->descc,
				'benefits'							=>$eachScholarship->benefits,
				'courses' 							=>$eachScholarship->course,
				// 'current_class_or_degree'
				// 'is_cgpa_based'
				// 'cgpa_type'
				'tenth_cgpa_or_percentage'			=>$eachScholarship->tenth_percentage,
				'twelfth_cgpa_or_percentage'		=>$eachScholarship->twelfth_percentage,
				// 'diploma_cgpa_or_percentage'			
				// 'previous_year_cgpa_or_percentage'
				'domicile'							=>$eachScholarship->state,
				// 'cities'
				'religion'							=>$eachScholarship->religion,
				'category' 							=>$eachScholarship->caste,

				'is_hosteller'						=>$eachScholarship->is_hosteller,
				'gender'                            =>$eachScholarship->gender,
				'minimum_age'						=>$eachScholarship->min_age,
				'maximum_age'						=>$eachScholarship->max_age,
				// 'parent_occupation'
				'family_annual_income'				=>$eachScholarship->familyIncome,
				// 'talent'
				// 'special_talent'						
				// 'disability_type'
				// 'disability_percentage'
				'is_for_orphans'					=>$eachScholarship->is_orphan,
				// 'is_for_single_child'
				// 'is_for_single_girl_child'
				// 'application_start_date'
				'application_end_date'				=>$eachScholarship->lastdate,
				// 'scholarship_provider'
				'scholarship_worth'					=>$eachScholarship->worth,
				'scholarship_added_by'				=>$eachScholarship->added_by,
				'scholarship_added_date'			=>$eachScholarship->added_date,
				'status' 							=>$eachScholarship->reject_status,
					// 'scholarship_updated_by'
				// 'scholarship_updated_date'
			);
			$insterBulkScholarshipArray[] = $dataArray;
			// print_r($insterBulkSentScholarshipArray);
		}
		$this->db->insert_batch('scholarships',$insterBulkScholarshipArray);
		print_r("scholarships done");exit();
	}






	public function migrateSentScholarship()
	{
		// echo "Asif";exit();
		$sentScholarship=$this->olddb->get('sent_notifications')->result();
		$managerAccounts = $this->olddb->get('manager_account')->result();
		$insterBulkSentScholarshipArray = array();

		foreach ($sentScholarship as $eachScholarship) {
			$instituteId = '';
			if($eachScholarship->ins_added_by != ''){

				foreach ($managerAccounts as $eachManager) {
					if($eachScholarship->ins_added_by == $eachManager->email){
						$instituteCheck = $this->db->where('institute_email',$eachManager->added_by)->get('institute_registration');
						if($instituteCheck->num_rows() > 0){
							$instituteId = $instituteCheck->row()->institute_userid;
							
						}
					}
				}
			}
			$dataArray = array(
				'scholarship_id' 			=>$eachScholarship->scholarship_id,
				'student_username'			=>$eachScholarship->student_id,
				'ins_added_by'				=>$instituteId,
				'month'						=>$eachScholarship->month,
				'date_time'					=>$eachScholarship->date_time,
				'link_visit_status'			=>$eachScholarship->link_visit_status,
				'applied_status' 			=>$eachScholarship->applied_status,
				'reward_received_status	'	=>$eachScholarship->reward_received_status,

			);
			$insterBulkSentScholarshipArray  [] = $dataArray;

		}
		$this->db->insert_batch('sent_notifications',$insterBulkSentScholarshipArray);
		print_r("sent_notifications done");exit();


	}

	public function generateReferralCodes()
	{
		$oldStudents = $this->olddb->where('status',1)->get('student_register')->result();
		$insterBulkRefferalArray = array();
		foreach ($oldStudents as $eachStudent) {
			if($eachStudent->username == ''){
				continue;
			}

			$refferalArray=array(
				'student_username' =>$eachStudent->username,
				'referral_code'=> $this->Institute_model->generateRandomString(12),
				'is_student_code'=>1,
				'referral_code_status'=>1,
			);
			$insterBulkRefferalArray []=$refferalArray;
		}
		$this->db->insert_batch('referral_codes',$insterBulkRefferalArray);
		print_r("referral_codes done");exit();
	}
}
?>