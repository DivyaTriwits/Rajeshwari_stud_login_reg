<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institutional_controller extends CI_Controller {

public function loginPage(){
	$this->load->view('institutional_dashboard/institute_login');
}	
public function verifyLogin(){
	$this->Institute_model->verifyLogin();
}
public function instituteHome()
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->load->view('institutional_dashboard/header');
	$this->load->view('institutional_dashboard/home');
	$this->load->view('institutional_dashboard/footer');
}
public function studentDetails()
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->load->view('institutional_dashboard/header');
	$data['student'] = $this->Institute_model->getStudentData();
	$this->load->view('institutional_dashboard/student_details',$data);
	$this->load->view('institutional_dashboard/footer');
}
public function updatedStudentList()
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->load->view('institutional_dashboard/header');
	$data['student'] = $this->Institute_model->getUpdateTotalStudents();
	$this->load->view('institutional_dashboard/updated_student',$data);
	$this->load->view('institutional_dashboard/footer');
}
public function statistics()
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->load->view('institutional_dashboard/header');
	$data['totalstudents'] = $this->Institute_model->getStudentData();
	$data['totalnotifications']=$this->Institute_model->getSentNotificationScholarship();
	$data['totalWorth']=$this->Institute_model->getSentWorth();
	$data['updatestudent']=$this->Institute_model->getUpdateTotalStudents();
	$data['totalapplied']=$this->Institute_model->getAppliedStatus();
	$data['totalvisit']=$this->Institute_model->getVisitStatus();
	
	 $recordss= $this->Institute_model->getScholarship();
	  $records = $recordss->result_array();
	   //$data = [];
	   $data['scholarships'] = $records; 
	  // print_r( $data['scholarships']);exit;
	$this->load->view('institutional_dashboard/statistics',$data);
	$this->load->view('institutional_dashboard/footer');
}
public function uploads()
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->load->view('institutional_dashboard/header');
	$data['student'] = $this->Institute_model->getStudentData();
	$data['files'] = $this->Institute_model->geInstituteFile();
	$this->load->view('institutional_dashboard/uploads',$data);
	$this->load->view('institutional_dashboard/footer');
}
public function uploadStudentFile(){
	$this->Institute_model->bulkStudentUpload();
}
public function agreementPaper()
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->load->view('institutional_dashboard/header');
	$data['document']=$this->Institute_model->getInstituteAggrementPapers();
	$this->load->view('institutional_dashboard/agreement_paper',$data);
	$this->load->view('institutional_dashboard/footer');
}
public function instituteScholarship()
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->load->view('institutional_dashboard/header');
	$data['scholarshipDetails']=$this->Institute_model->getInstitutionScholarshipDetails();
	$this->load->view('institutional_dashboard/institute_scholarship',$data);
	$this->load->view('institutional_dashboard/footer');
}
public function studentProfileDetails($id)
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');

	$this->load->view('institutional_dashboard/header');
	$data['academic'] = $this->Institute_model->academiclDetails($id);
    $data['personal'] =$this->Institute_model->getPersonalDetails($id);
	$data['family'] = $this->Institute_model->familyDetails($id);
	$data['extrac'] = $this->Institute_model->extracarricular($id);
	$data['bank'] = $this->Institute_model->bankAddress($id);
	$data['student_details'] = $this->db->where('student_username',$id)->get('student_registration')->row();
	$this->load->view('institutional_dashboard/student_profile_details',$data);
	$this->load->view('institutional_dashboard/footer');
}


public function storeInstitutionAggrementPaper()
{	

	if (!$this->session->userdata('institute_id')) redirect('institute-login');

			$institutionId=$this->session->userdata('institute_id');

		    $filename = '';
			if (!empty($_FILES['files']['name']))
			{



				$path = $_FILES['files']['name'];
				$newName = "InstitutionAgreementPaper".".".pathinfo($path, PATHINFO_EXTENSION); 
						// exit;main_assets\document_list
				$config['upload_path'] = './institute_uploads/institute_agreement_papers/';
							//$config['allowed_types'] = 'image|gif|jpg|png|jpeg|JPG|PNG|JPEG|GIF';
				$config['allowed_types'] = '*';
							//$config['max_size'] = 10000;
				$config['file_name'] = date('YmdHis')."_".$newName;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('files'))
				{
					$error = array(
						'error' => $this->upload->display_errors()
					);
					$this->session->set_flashdata('error', 'Something went wrong. Please upload gif | jpg | png file');
				}
				else
				{
					$data = $this->upload->data();
					$filename = $data['file_name'];

				}

				$file_upload_name= array(

					'document_name'=>ucfirst($this->input->post('class')),
					'file' => $filename,
					'date'=>date('Y-m-d'),
					'institute_id'=>$institutionId
					
				);


				$this->db->trans_start();
				$this->db->insert('institution_agreement_document',$file_upload_name);
				$this->db->trans_complete();

				if ($this->db->trans_status() === TRUE)
				{
					$this->session->set_flashdata('add-institution-aggrement-paper-details-success','Institution aggrement paper details added successfully');
					redirect("institute/agreement-paper");


				}
				else
				{
					$this->session->set_flashdata('add-institution-aggrement-paper-details-failure','Failed to add institution aggrement paper details');
					redirect("institute/agreement-paper");
				}

			}
			else
			{
				$this->session->set_flashdata('add-institution-aggrement-paper-details-failure','Failed to add institution aggrement paper details');
				redirect("institute/agreement-paper");
			}
}

public function instituteLogout() {

	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->session->set_flashdata('logout-success', 'Logout successful');
	$this->session->unset_userdata('institute_id');
	$this->session->unset_userdata('institute_username');
	redirect('institute-login');
}
public function monthlyReport()
{
	if (!$this->session->userdata('institute_id')) redirect('institute-login');
	$this->load->view('institutional_dashboard/header');
	 $query =  $this->db->get('scholarships')->result();

      $record = $query;
      $sdata = [];
 
      foreach($record as $row) {
            $sdata['label'][] = $row->scholarship_name;
            //$data['data'][] = (int) $row->count;
      }
      $data['chart_data'] = json_encode($sdata);
      // print_r($data['chart_data']);exit;
		$data['totalstudents'] = $this->Institute_model->getStudentData();
	$data['totalnotifications']=$this->Institute_model->getMonthlySentNotificationScholarship();
	$data['totalWorth']=$this->Institute_model->getMonthlyReportSentWorth();
	$data['updatestudent']=$this->Institute_model->getMonthlyReportUpdateTotalStudents();
	$data['totalvisit']=$this->Institute_model->getLastMonthVisitStatus();
	$data['appliedReport'] = $this->Institute_model->getLastMonthAppliedReport();

	$this->load->view('institutional_dashboard/monthly_report',$data);
	$this->load->view('institutional_dashboard/footer');
}
public function reports(){

	if (!$this->session->userdata('institute_id')) redirect('institute-login');

	$data['totalstudents'] = $this->Institute_model->getStudentData();
	$data['totalnotifications']=$this->Institute_model->getMonthlySentNotificationScholarship();
	$data['totalWorth']=$this->Institute_model->getMonthlyReportSentWorth();
	$data['updatestudent']=$this->Institute_model->getMonthlyReportUpdateTotalStudents();
	$data['totalvisit']=$this->Institute_model->getLastMonthVisitStatus();
	$data['appliedReport'] = $this->Institute_model->getLastMonthAppliedReport();
	$this->load->view('institutional_dashboard/reports',$data);
}



  public function viewScholarshipDetails($id)
    {
        if (!$this->session->userdata('institute_id')) redirect('institute-login');
  		$this->load->view('institutional_dashboard/header');
        $data['scholarshipDetails'] = $this->Institute_model->getScholarshipBasedOnScholarshipId($id)->row();
        $data['document'] = $this->Institute_model->getDocumentsBasedOnScholarshipId($id);
        $this->load->view('institutional_dashboard/complete_scholarship_details', $data);
       	$this->load->view('institutional_dashboard/footer');
    }


    public function institutionProfilePage()
	{

		if (!$this->session->userdata('institute_id')) redirect('institute-login');

		$this->load->view('institutional_dashboard/header');
		$data['profile']=$this->Institute_model->getInsttutionProfileDetials()->row();
		$this->load->view('institutional_dashboard/institution_profile',$data);
		$this->load->view('institutional_dashboard/footer');

		
	}

	public function updateInstitutionProfile()
	{
			if (!$this->session->userdata('institute_id')) redirect('institute-login');

		$id=$this->input->post('id');

		$data=array(
			'institute_name'=>$this->input->post('instituteName'),
			'institute_user_fullname'=>$this->input->post('fullname'),
			'institute_password'=>$this->input->post('password'),
			'institute_user_mobile_no'=>$this->input->post('phoneNumber')
		);

		$result=$this->Institute_model->updateInstitutionProfile($data,$id);

		if($result)
		{
			$this->session->set_flashdata('profile-details-update-success', 'Profile details updated successfully!'); 
			redirect('institution-profile');
		}
		else
		{
			$this->session->set_flashdata('profile-details-update-error', 'Failed to update profile details!'); 
			redirect('institution-profile');
		}

	}

}?>