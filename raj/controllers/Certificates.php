<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificates extends CI_Controller {

	public function downloadStudentCertificate(){
	    $data['data'] = $this->Certificate_model->getSchoolNames();
	   // print_r($data['data']); exit;
    $this->response->public_view('download_student_certificate',$data);
  }

  public function studentList(){
      if($this->input->post('school_name') || $this->input->get('school')){
         if($this->input->post('school_name')){
            $schoolName = $this->input->post('school_name');
         }

         if($this->input->get('school')){
             $schoolName = urldecode($this->input->get('school'));
         }
        $data['data'] = $this->Certificate_model->getStudentNamesBySchool($schoolName);
        // print_r($data['data']);exit;
        $this->response->public_view('student_list',$data);
      }else{
          $this->session->set_flashdata('failure', 'Please enter a valid School Name');
          redirect('download-student-certificate');
      }

  }

  public function studentCertificate()
  {
      if($this->input->get('student')){
          $student = urldecode($this->input->get('student'));
        //   print_r($student); exit;
          $data['data'] = $this->Certificate_model->getStudentDetails($student);
        //   print_r($data['data']); exit;
          $this->load->view('public/student_certificate',$data);
      }


    // if($this->input->post('school_name')){
    //   $query = $this->Certificate_model->getDataForCertificate();
    //     if($query->num_rows() > 0){
    //       $data['data'] = $query->row();
    //       $this->load->view('public/student_certificate',$data);
    //     }else{
    //       $this->session->set_flashdata('failure', 'Please enter a valid School Name');
    //       redirect('download-student-certificate');
    //     }
    // }
  }

	public function downloadCertificate()
	{
	    
	  $this->load->view('certificate/certificate_header');
      $this->load->view('certificate/certificate');
      $this->load->view('certificate/certificate_footer');
	}

	public function downloadBIBCertificate()
	{
	    //print_r('hi');exit;
		if($this->input->post('bibno')){
		  //  print_r($this->input->post('bibno'));exit;
			$query = $this->Certificate_model->getDataForCertificate();
            //  print_r('hi');exit;
				if($query->num_rows() > 0){
					$data['data'] = $query->row();
					$this->load->view('certificate/Bibcertificate',$data);
				}else{
					$this->session->set_flashdata('failure', 'Mobile number is not register. please contact the number mentioned below!!! '.$this->input->post('bibno'));
					redirect('certificates');
				}
		}
	}

}
?>
