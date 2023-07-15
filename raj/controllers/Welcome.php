<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

public function index()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/home');
	$this->load->view('student/footer');
}

public function scholarships()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/scholarship');
	$this->load->view('student/footer');
}

public function scholarshipPage()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/scholarship_page');
	$this->load->view('student/footer');
}
public function profilePage()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/student_profile');
	$this->load->view('student/footer');
}
public function personalDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/personal_details');
	$this->load->view('student/footer');
}
public function academic()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/academic');
	$this->load->view('student/footer');
}
public function familyDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/family');
	$this->load->view('student/footer');
}
public function bankDetails()
{
	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/bank');
	$this->load->view('student/footer');
}
public function activityDetails()
{

	if (!$this->session->userdata('student_username')) redirect('student-login');

	$this->load->view('student/header');
	$this->load->view('student/activities');
	$this->load->view('student/footer');
}
public function documentUplaod()
{

if (!$this->session->userdata('student_username')) redirect('student-login');
	
	$this->load->view('student/header');
	$this->load->view('student/document');
	$this->load->view('student/footer');
}



public function getMostVisitorsLink(){
    $studentData = $this->db->query('SELECT COUNT(sent_notifications.link_visit_status) "Mostlinkvisits", student_registration.student_name,student_registration.registered_mobile_no,student_registration.registered_email  FROM sent_notifications JOIN student_registration ON student_registration.student_username = sent_notifications.student_username WHERE student_registration.subscription_validity_datetime >= "2021-03-18" AND sent_notifications.link_visit_status = 1 GROUP BY student_registration.student_username ORDER BY Mostlinkvisits DESC');
    
    echo "most link visits,Student Name,Mobile no,Email<br>";
    foreach($studentData->result() as $eachEntry){
        echo $eachEntry->Mostlinkvisits.",".$eachEntry->student_name.",".$eachEntry->registered_mobile_no.",".$eachEntry->registered_email."<br>";
    }
}

}?>