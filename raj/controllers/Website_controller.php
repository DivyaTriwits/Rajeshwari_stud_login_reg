<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_controller extends CI_Controller
{
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    /*=======================================================================START OF WEBSITE CONTENT==============================================================*/
    public function index()
    {
        $this->load->view('website/header');
        $data['data']         = $this->db->get('scholarships');
        $data['student']      = $this->db->get('student_registration');
       // $data['contributors'] = $this->db->get('contributors');
        $this->load->view('website/homepage', $data);
        $this->load->view('website/footer');
    }
    
    public function search()
    {
        if (!$this->session->userdata('student_username')) {
            redirect('student-login');
        } else {
              $this->load->view('website/header');
                 $data['data'] = $this->Base_model->searchScholarship();
                 $this->load->view('website/search', $data);
                 $this->load->view('website/footer');
            // $this->db->select('payment_status');
            // $this->db->from('payment_response');
            // $this->db->where('email', $this->session->userdata('registered_email'));
            // $this->db->where('payment_status', 'Success');
            // $datanew = $this->db->get();
            // if ($datanew->num_rows() > 0) {
            //     $this->load->view('website/header');
            //     $data['data'] = $this->Base_model->searchScholarship();
            //     $this->load->view('website/search', $data);
            //     $this->load->view('website/footer');
            // } else {
            //     $this->session->set_flashdata('proceed', 'Success');
            //     redirect(base_url());
            // }
        }
    }
    
    public function scholarshipsList()
    {
        if (!$this->session->userdata('student_username')) {
            redirect('student-login');
        } else {
            $this->load->view('website/header');
                $data['data']    = $this->Base_model->getScholarships();
                $data['newData'] = $this->Base_model->getScholarshipsAddedByIndividual();
                // print_r($data['newData']);exit;
                $this->load->view('website/scholarships', $data);
                $this->load->view('website/footer');
            // $this->db->select('payment_status');
            // $this->db->from('payment_response');
            // $this->db->where('email', $this->session->userdata('registered_email'));
            // $this->db->where('payment_status', 'Success');
            // $datanew = $this->db->get();
            // if ($datanew->num_rows() > 0) {
            //     $this->load->view('public/header');
            //     $data['data']    = $this->Base_model->getScholarships();
            //     $data['newData'] = $this->Base_model->getScholarshipsAddedByIndividual();
            //     // print_r($data['newData']);exit;
            //     $this->load->view('public/scholarships', $data);
            //     $this->load->view('public/footer');
            // } else {
            //     $this->session->set_flashdata('proceed', 'Success');
            //     redirect(base_url());
            // }
        }
    }
    
  
    public function faq(){
		$this->load->view('website/header');
		$this->load->view('website/faq');
		$this->load->view('website/footer');
	}
	
	public function refundPolicy(){
		$this->load->view('public/header');
		$this->load->view('public/refund_policy');
		$this->load->view('public/footer');
	}
    
    public function contactUs()
    {
        $this->load->view('website/header');
        $this->Base_model->contact_us_form();
        $this->load->view('website/contact');
        $this->load->view('website/footer');
    }
    
    public function newsLetter()
    {
        if ($this->input->post('news')) {
            $data = array(
                'emails' => $this->input->post('news')
            );
            $this->db->insert('newsletter_subscribe', $data);
        }
        redirect(base_url());
    }
    
    public function redirectingURL($scholarshipID)
    {
        if (!$this->session->userdata('student_id')) {
            redirect('student-login');
        } else {
            $this->db->select('*');
            $this->db->from('scholarships');
            $this->db->where('scholarship_id', $scholarshipID);
            $url = $this->db->get()->row();
            redirect($url->url);
        
        }
    }
    
    public function updateSubscription()
    {
        $data = array(
            'payment_status' => "Expired"
        );
        $this->db->where('username', $this->session->userdata('student_id'));
        $this->db->update('payment_response', $data);
    }
    
    public function scholarshipDetails($id)
    {
        if (!$this->session->userdata('student_id')) {
            redirect('student-login');
        } else {
            $this->db->select('payment_status');
            $this->db->from('payment_response');
            $this->db->where('email', $this->session->userdata('student_id'));
            $this->db->where('payment_status', 'Success');
            $datanew = $this->db->get();
            if ($datanew->num_rows() > 0) {
                $data['data'] = $this->Base_model->getCompleteScholarshipsDetails($id);
                $this->load->view('public/header');
                $this->load->view('public/scholarshipDetails', $data);
                $this->load->view('public/footer');
            } else {
                $this->session->set_flashdata('proceed', 'Success');
                redirect(base_url());
            }
        }
    }
    
    /*=========================================================================END OF WEBSITE CONTENT================================================================*/
    
   
    
    public function registrationLandingPage()
    {
        $this->load->view('public/landing_page_header');
        $this->Base_model->studentSubscribe();
        $this->load->view('public/register_landing');
        $this->load->view('public/landing_page_footer');
    }
    
    public function registerSubscriber(){
     
        $this->Base_model->registerSubscriber();
    }
    
    public function cancellRegistration()
    {
        if ($this->session->userdata('student_id_temp')) {
            $this->session->unset_userdata('student_id_temp');
                $this->session->unset_userdata('student_email_temp');
                $this->session->unset_userdata('student_number_temp');
                $this->session->unset_userdata('username_temp');
                 redirect(base_url() . '?payment=cancelled');
           
        }
    }
    
    public function confirm_signup($otp)
    {
        $this->Auth->confirm_signup_user($otp);
    }
    
    public function studentLogin()
    {
        $this->session->unset_userdata('instituteId');
        $this->session->unset_userdata('individualId');
        $this->session->unset_userdata('userid');
      
        //$this->Auth->login_user();
        $this->load->view('website/student_login');
       
    }
    public function verifyLogin(){
       
        $this->Auth->login_user();
    }
    public function studentLoginVerify($id){
        $this->Auth->student_user($id);
    }
    public function forgotPassword()
    {
       $this->load->view('new/new_header');
        $this->Auth->forget_password();
        $this->load->view('website/forgot_password');
        $this->load->view('new/footer');
    }
    
    public function confirmforgotPassword($otp, $id)
    {
     // print_r('hi');exit;
        $this->Auth->confirm_password($otp, $id);
    }
    
    public function reset()
    {
        $this->Auth->reset_password();
    }
    
    public function logout()
    {
        if (!$this->session->userdata('student_username')) redirect('student-login');
        // echo "is";exit();
        $this->Student_model->updateLogout();
        $this->session->set_flashdata('logout-success', 'Logout successful');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('student_username');
        redirect('student-login');
    }
       
        
  
    
    public function redirectToPayment()
    {
        $this->load->view('public/header');
        $this->load->view('public/proceedToPaymentForStudent');
        $this->load->view('public/footer');
    }
    
    public function resetPasswordCompleted()
    {
        $this->load->view('website/header');
        $this->load->view('website/resetPasswordCompleted');
        $this->load->view('website/footer');
    }
    
    /*=========================================================================END OF STUDENT LOGIN================================================================*/
    
    /*======================================================================START OF CONTRIBUTOR LOGIN=============================================================*/
    public function register()
    {
        $this->load->view('public/header');
        $this->Auth->contributor_register();
        $this->load->view('public/register');
        $this->load->view('public/footer');
    }
    
    public function confirm_signup_contributor($otp)
    {
        $this->Auth->confirm_signup_contributor($otp);
    }
    
    public function resetforContributor()
    {
        $this->Auth->reset_password_for_contributor();
    }
    
    public function login()
    {
        $this->session->unset_userdata('instituteId');
        $this->session->unset_userdata('individualId');
        $this->session->unset_userdata('student_id');
        $this->load->view('public/header');
        $this->Auth->login_contributor();
        $this->load->view('public/login');
        $this->load->view('public/footer');
    }
    
    public function forgotPasswordForContributor()
    {
        $this->load->view('public/header');
        $this->Auth->forget_password_contributor();
        $this->load->view('public/forgot_password_for_contributor');
        $this->load->view('public/footer');
    }
    
    public function confirmforgotPasswordforContributor($otp, $id)
    {
        $this->Auth->confirm_password_for_contributor($otp, $id);
    }
    
    public function addNewScholarship()
    {
        if (!$this->session->userdata('userid'))
            redirect('login');
        $this->load->view('public/header');
        $data['keywords'] = $this->Base_model->get_keywords();
        $data['states']   = $this->Base_model->getStates();
        //print_r($data['keywords']);exit;
        $this->Base_model->add_scholarship();
        $this->load->view('public/add_new_scholarship', $data);
        $this->load->view('public/footer');
    }
    
    public function redirectToContributor()
    {
        $this->load->view('public/header');
        $this->load->view('public/redirectToContributor');
        $this->load->view('public/footer');
    }
    /*======================================================================END OF CONTRIBUTOR LOGIN=============================================================*/
    
    /*=====================================================================START OF INSTITUTE LOGIN==============================================================*/
    public function instituteRegister()
    {
        $this->load->view('public/header');
        $this->Institute_auth->institute_Register();
        $this->load->view('public/instituteRegister');
        $this->load->view('public/footer');
    }
    
    public function confirm_signup_institute($otp)
    {
        $this->Institute_auth->confirm_signup_institute($otp);
    }
    
    public function instituteLogin()
    {
        $this->session->unset_userdata('student_id');
        $this->session->unset_userdata('individualId');
        $this->session->unset_userdata('userid');
        $this->load->view('public/header');
        $this->Institute_auth->institute_login();
        $this->load->view('public/institute_login');
        $this->load->view('public/footer');
    }
    
    public function forget_password_institute()
    {
        $this->load->view('public/header');
        $this->Institute_auth->forget_password_institute();
        $this->load->view('public/forgot_password_for_institute');
        $this->load->view('public/footer');
    }
    
    public function confirmforgotPasswordforInstitute($otp, $id)
    {
        $this->Institute_auth->confirm_password_for_institute($otp, $id);
    }
    
    public function resetforInstitute()
    {
        $this->Institute_auth->reset_password_for_institute();
    }
    
    public function redirectToInstitute()
    {
        $this->load->view('public/header');
        $this->load->view('public/redirectToInstitute');
        $this->load->view('public/footer');
    }
    
    public function institute()
    {
        $this->load->view('public/header');
        $this->load->view('public/institute');
        $this->load->view('public/footer');
    }
    
    public function instituteManager()
    {
        $this->load->view('public/header');
        $this->Institute_auth->institute_managerlogin();
        $this->load->view('public/institutemanager');
        $this->load->view('public/footer');
    }
    /*=======================================================================END OF INSTITUTE LOGIN================================================================*/
    
    /*=====================================================================START OF INDIVIDUAL LOGIN==============================================================*/
    public function individualRegister()
    {
        $this->load->view('public/header');
        $this->Individual_auth->individual_Register();
        $this->load->view('public/individual_register');
        $this->load->view('public/footer');
    }
    
    public function confirm_signup_individual($otp)
    {
        $this->Individual_auth->confirm_signup_individual($otp);
    }
    
    public function individualLogin()
    {
        $this->session->unset_userdata('instituteId');
        $this->session->unset_userdata('student_id');
        $this->session->unset_userdata('userid');
        $this->load->view('public/header');
        $this->Individual_auth->individual_login();
        $this->load->view('public/individual_login');
        $this->load->view('public/footer');
    }
    
    public function forget_password_individual()
    {
        $this->load->view('public/header');
        $this->Individual_auth->forget_password_individual();
        $this->load->view('public/forgot_password_for_individual');
        $this->load->view('public/footer');
    }
    
    public function confirmforgotPasswordforindividual($otp, $id)
    {
        $this->Individual_auth->confirm_password_for_individual($otp, $id);
    }
    
    public function resetforIndividual()
    {
        $this->Individual_auth->reset_password_for_individual();
    }
    
    public function redirectToIndividual()
    {
        $this->load->view('public/header');
        $this->load->view('public/redirectToIndividual');
        $this->load->view('public/footer');
    }
    /*=======================================================================END OF INDIVIDUAL LOGIN================================================================*/
    
    public function adminLogin()
    {
        $this->load->view('public/header');
        $this->Admin_auth->login();
        $this->load->view('admin/login');
        $this->load->view('public/footer');
    }
    
    //This function is used for updating id's
    public function updateSch()
    {
        $this->Utilities_model->updateScholarshipIdOnce();
    }
    
    /*=======================================================START OF CAMPUS AMBASSADOR============================================================*/
    public function campusAmbassador()
    {
        redirect('student-register');
        $this->load->view('public/header');
        $this->load->view('public/campus_ambassador');
        $this->load->view('public/footer');
    }
    /*=======================================================END OF CAMPUS AMBASSADOR==============================================================*/
    
    public function landing_page()
    {
        $this->load->view('website/landingPage');
    }

    public function new_register_form()
    {
        // echo "string";exit;
        $this->load->model('Individual_auth');
        $this->Individual_auth->addnewregistrationdatathroughlandingpage();
    }
    
    public function packages(){
        $this->load->view('website/header');
        $this->load->view('website/packages');
        $this->load->view('website/footer');
    }
}
?>