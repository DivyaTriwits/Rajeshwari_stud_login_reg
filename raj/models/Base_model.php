<?php
class Base_model extends CI_Model{

  public function getScholarships(){
    $this->db->select('*');
    $this->db->from('scholarships');
    $this->db->order_by('id','DESC');
    $query = $this->db->get()->result();
    return $query;
  }

  public function getScholarshipsAddedByIndividual(){
    $this->db->select('*');
    $this->db->from('individual_scholarships');
    $this->db->join('payment_response_for_individual','payment_response_for_individual.merchant_order_id = individual_scholarships.scholarship_ID');
    $this->db->order_by('individual_scholarships.id','DESC');
    $this->db->where('payment_response_for_individual.payment_status','Success');
    $query = $this->db->get()->result();
    return $query;
  }

  public function contact_us_form(){
    if($this->input->post('name')){
      $data = array(
        'name'		=>	$this->input->post('name'),
        'institute_name'		=>	$this->input->post('ins_name'),
         'mobile'		=>	$this->input->post('mobile'),
        'email'		=>	$this->input->post('email'),
        'subject'   	=> 	$this->input->post('sub'),
        'message'     =>  $this->input->post('msg'),
        'service'=> $this->input->post('service'),
        'date'=>date('Y-m-d')
      );
      $this->db->insert('contacts', $data);
      $this->session->set_flashdata('success','Message sent successfully.');
      redirect('contact-us');
    }
  }

  public function student_register(){
    if($this->input->post('name')){
      $data = array(
        'name'		        => $this->input->post('name'),
        'lname'		        => $this->input->post('lname'),
        'email'   	      => $this->input->post('email'),
        'num'             => $this->input->post('num'),
        'qualification'   => $this->input->post('qualification')
      );
      $this->db->insert('student_register', $data);
      $this->session->set_userdata('name',  $this->input->post('name'));
      $this->session->set_userdata('lname', $this->input->post('lname'));
      $this->session->set_userdata('email', $this->input->post('email'));
      $this->session->set_userdata('num',   $this->input->post('num'));
      $data = $this->db->get_where('subscription',array('title' => $this->input->post('email')))->row();
      //$this->session->set_flashdata('success','Successfully Registered.');
      //redirect('contact-us');
      redirect('checkout/'.$data->id);
    }
  }

  public function contributor_register(){
    if($this->input->post('name')){
      $data = array(
        'name'		        => $this->input->post('name'),
        'lname'		        => $this->input->post('lname'),
        'email'   	      => $this->input->post('email'),
        'num'             => $this->input->post('num'),
        'qualification'   => $this->input->post('qualification')
      );
      $this->db->insert('student_register', $data);
      $this->session->set_flashdata('success','Successfully Registered.');
      //redirect('contact-us');
    }
  }

  public function get_keywords()
  {
    $this->db->select('*');
    $this->db->from('scholarship_keywords');
    $data=$this->db->where('meta_tags','qualification')->get()->result();
    return $data;
  }

  public function add_scholarship(){
    if($this->input->post('fname')){
      $scholarship_id = $this->Utilities_model->generateRandomString(14);
      $courses = json_encode($this->input->post('courses'));
      $levelOfStudy = json_encode($this->input->post('levelOfStudy'));
      $fieldOfInterest = json_encode($this->input->post('fieldOfInterest'));
      $religion = ($this->input->post('religion')) ? json_encode($this->input->post('religion')) : 'NIL';
      $caste = ($this->input->post('caste'))? json_encode($this->input->post('caste')) : 'NIL' ;
      $state = json_encode($this->input->post('state'));
      $keywordsNew = json_decode($courses);
      $sports = ($this->input->post('sports'))? json_encode($this->input->post('sports')) : 'NIL' ;
      $talent = ($this->input->post('specialTalent'))? json_encode($this->input->post('specialTalent')) : 'NIL' ;
      $is_hosteller = ($this->input->post('stud_type'))? json_encode($this->input->post('stud_type')) : 'NIL' ;
      $keywordString ='';
      
      //print_r($keywordString);exit;
      date_default_timezone_set("Asia/Calcutta");
      $query = null;
      $data = array(
        'fname'		            => $this->input->post('fname'),
        'scholarship_id'        => $scholarship_id,
        'url'		            => $this->input->post('url'),
        'descc'   	            => $this->input->post('descc'),
        'gender'                => json_encode($this->input->post('gender')),
        'scholarship_category'  => $this->input->post('scholarship_category'),
        'attachment_url' => $this->input->post('attachment_url'),
        //'keywords'            => $keywordString,
        'lastdate'              => $this->input->post('lastDate'),
        'offering'              => $this->input->post('offering'),
        'benefits'              => $this->input->post('benefits'),
        'levelOfStudy'          => $levelOfStudy,
        'fieldOfInterest'       => $fieldOfInterest,
        'religion'              => $religion,
        'caste'                 => $caste,
        'state'                 => $state,
        'course'                => $courses,
        'sports'                => $sports,
        'talent'                => $talent,
        'is_hosteller'          => $is_hosteller,
        'added_by'              => $this->session->userdata('userid'),
        'is_orphan'             => ($this->input->post('orphan') == '1')?$this->input->post('orphan'):0,
        'is_handicap'           => ($this->input->post('handicap') == '1')?$this->input->post('handicap'):0,
        'tenth_percentage'      => ($this->input->post('tenth_percentage')) ? $this->input->post('tenth_percentage') : 0,
        'twelfth_percentage'    => ($this->input->post('twelfth_percentage')) ? $this->input->post('twelfth_percentage') : 0,
        'familyIncome'          => $this->input->post('familyIncome'),
        'added_date'            => date('Y-m-d'),
        'min_age'               => $this->input->post('minage'),
        'max_age'               => $this->input->post('maxage'),
        'worth'                 => $this->input->post('worth')
      );
      
      
      $notifyAll =1;
      if($this->input->post('notify') == 'No'){
          $notifyAll = 0;
      }

      $query = $this->db->get_where('scholarships', array('scholarship_id' => $scholarship_id));
       $count = $query->num_rows();
      if ($count === 0){
          $notificationArray = array();
          $mobileNumbers = '';
        $this->db->insert('scholarships', $data);
        
        if($notifyAll == 1){
         $studentData = $this->db->where('status',1)->where('is_trial',0)->where('subscription_expiration_date >=', date('Y-m-d H:i:s'))->get('student_register')->result();
        $scholarshipData = $this->db->where('scholarship_id',$scholarship_id)->get('scholarships');
        if($scholarshipData->num_rows() > 0){
            $scholarshipData = $scholarshipData->row();
            $message = "Hey! Here's a new scholarship for you, please click on the link ".base_url('redirect-me-to/'.$scholarship_id)." Good luck-TGS";
          foreach ($studentData as $scholar) {
              $notificationCount = $this->db->where('month',date('Y-m'))->where('student_id',$scholar->username)->get('sent_notifications');
              $notifyMe = 0;
              $matchDegree = $this->db->where('scholarship_id',$scholarship_id)->where('levelOfStudy LIKE "%'.$scholar->degree.'%"')->get('scholarships')->num_rows();
              $matchProfileCourse = $this->db->where('scholarship_id',$scholarship_id)->where('(course LIKE "%'.$scholar->course.'%" OR course LIKE "%All%")')->get('scholarships')->num_rows();
              $matchProfileState = $this->db->where('scholarship_id',$scholarship_id)->where('(state LIKE "%'.$scholar->state.'%" OR state LIKE "%All India%")')->get('scholarships')->num_rows();
              $matchProfileReligion = $this->db->where('scholarship_id',$scholarship_id)->where('religion LIKE "%'.$scholar->religion.'%"')->get('scholarships')->num_rows();
              $matchProfileCategory = $this->db->where('scholarship_id',$scholarship_id)->where('caste LIKE "%'.$scholar->category.'%"')->get('scholarships')->num_rows();
              $matchProfileGender = $this->db->where('scholarship_id',$scholarship_id)->where('(gender LIKE "%'.$scholar->gender.'%" OR gender LIKE "%All%")')->get('scholarships')->num_rows();
              $matchProfileAge = 1;
              
              if($scholarshipData->min_age != 0 && $scholarshipData->max_age != 0){
                  if($scholar->age <= $scholarshipData->max_age && $scholar->age >= $scholarshipData->min_age){
                      $matchProfileAge = 1;
                  }else{
                      $matchProfileAge = 0;
                  }
              }else{
                  $matchProfileAge = 1;
              }
              
              if($scholarshipData->tenth_percentage != 0 ){
                  if($scholar->sslc_marks >= $scholarshipData->tenth_percentage){
                      $matchProfileTenthPercentage = 1;
                  }else{
                      $matchProfileTenthPercentage = 0;
                  }
              }else{
                  $matchProfileTenthPercentage = 1;
              }
              
              if($scholarshipData->twelfth_percentage != 0 ){
                  if($scholar->puc_marks >= $scholarshipData->twelfth_percentage){
                      $matchProfileTwelfthPercentage = 1;
                  }else{
                      $matchProfileTwelfthPercentage = 0;
                  }
              }else{
                  $matchProfileTwelfthPercentage = 1;
              }
              
              
              if($scholarshipData->familyIncome != 0 ){
                  if($scholar->familyIncome <= $scholarshipData->familyIncome){
                      $matchProfileIncome = 1;
                  }else{
                      $matchProfileIncome = 0;
                  }
              }else{
                  $matchProfileIncome = 1;
              }

              
            //   if($matchDegree !=0 && $matchProfileCourse !=0 && $matchProfileState !=0 && $matchProfileReligion !=0 && $matchProfileCategory !=0 && $matchProfileGender !=0 &&  $matchProfileAge !=0 && $matchProfileTenthPercentage !=0 && $matchProfileTenthPercentage !=0 && $matchProfileTwelfthPercentage !=0 && $matchProfileIncome != 0){
            //       print_r('Username: '.$scholar->username);
            //   }
            
            
            if($scholar->degree == '' && $scholar->course == '' && $scholar->religion == ''){
                if($notificationCount->num_rows() <= 10){
                  $dataArray = array(
                    'scholarship_id' => $scholarship_id,
                    'student_id' => $scholar->username,
                    'date_time' => date('Y-m-d'),
                    'ins_added_by' => $scholar->added_by,
                    'month' => date('Y-m'),
                    // 'type' => 'Unmat-ched'
                  );
                  $notificationArray[] = $dataArray;
                }
            }else{
                if($matchDegree !=0 && $matchProfileCourse !=0 && $matchProfileState !=0 && $matchProfileGender !=0 && $matchProfileTenthPercentage !=0  && $matchProfileTwelfthPercentage !=0 && $matchProfileIncome != 0){
                 if($notificationCount->num_rows() <= 10){
                  $dataArray = array(
                    'scholarship_id' => $scholarship_id,
                    'student_id' => $scholar->username,
                    'date_time' => date('Y-m-d'),
                    'ins_added_by' => $scholar->added_by,
                    'month' => date('Y-m'),
                    // 'type' => 'Matched'
                  );
                  $notificationArray[] = $dataArray;
                   $mobileNumbers .= $scholar->num.',';
                }
              }
            }
              
              
          }
        //   print_r($notificationArray);exit;
        //   exit;
            $mobileNumbers .= '8660044962,9620030302';
            if(!empty($notificationArray)){
                $this->db->insert_batch('sent_notifications',$notificationArray);
                $this->Response->send_sms($mobileNumbers, $message);
            }
        }
        
      }
        $this->session->set_flashdata('success','Thank you! Scholarship added successfully');
      }else{
        $this->session->set_flashdata('failureInsert','Can\'t add scholarship, because it already added.');
      }
    }
  }


  public function searchScholarship(){
    if($this->input->get('search')){
      $this->db->select('*');
      $this->db->from('scholarships');
      $this->db->like('scholarship_name', urldecode($this->input->get('search')));
      //$this->db->or_like('keywords',urldecode($this->input->get('search'))); 
      $query = $this->db->get();
      return $query;
    }
  }

    //THIS FUNCTION IS USED TO GET COMPLETE SCHOLARSHIP DATA & DISPLAY IN A SEPARATE PAGE INSTEAD OF DISPLAYING IN A MODAL
  public function getCompleteScholarshipsDetails($id){
    $this->db->select('*');
    $this->db->from('scholarships');
    $this->db->order_by('id','DESC');
    $this->db->where('id',$id);
    $query = $this->db->get()->row();
    return $query;
  }

  public function getStates(){
    $data = $this->db->get('states')->result();
    return $data;
  }
  
  public function studentSubscribe(){
      if($this->input->post('email')){
          $subsId = $this->Utilities_model->generateRandomString(18);
          $subscribeArray = array(
              'subcriber_id' => $subsId,
              'full_name' => $this->input->post('name'),
              'email' => $this->input->post('email'),
              'mobile_no' => $this->input->post('mobile_no'),
              'source' => $this->input->post('source')
              );
              if($this->db->insert('promotion_subscribers',$subscribeArray)){
                  redirect('tgs-get-alerts?subscriber='.$subsId);
              }
      }
  }
  
  
  public function registerSubscriber(){
    //   print_r($this->input->post());exit;
      if($this->input->post('sub_id_auth') != ''){
          $this->db->set('course',$this->input->post('course'))->where('subcriber_id',$this->input->post('sub_id_auth'))->update('promotion_subscribers');
          $subscriberData = $this->db->where('subcriber_id',$this->input->post('sub_id_auth'))->get('promotion_subscribers');
          if($subscriberData->num_rows() == 0){
              $this->session->set_flashdata('failure','something went wrong!!');
              redirect('tgs-get-alerts');
          }else{
              $subscriberData = $subscriberData->row();
          }
        $this->Auth->deleteUnsubscribedUser($subscriberData->email,$subscriberData->mobile_no);
        $userRow = $this->db->where('email',$subscriberData->email)->or_where('num',$subscriberData->mobile_no)->get('student_register');
        if($userRow->num_rows() == 0){
        date_default_timezone_set("Asia/Calcutta");
        $otp = mt_rand(100000000, 999999999);
        $username = $this->Utilities_model->generateRandomString(12);
        $checkUsername = $this->db->where('username',$username)->get('student_register');
        while($checkUsername->num_rows() > 0){
            $username = $this->Utilities_model->generateRandomString(12);
            $checkUsername = $this->db->where('username',$username)->get('student_register');
        }
        $YearIncreament = date('Y-m-d H:i:s', strtotime('+1 years'));
        $data = array(
          'name'            => $subscriberData->full_name,
          'email'           => $subscriberData->email,
          'num'             => $subscriberData->mobile_no,
          'username'        => $username,
          'otp'             => $otp,
          'timestamp'       => date('y-m-d h:i:s'),
          'subscription_expiration_date' => $YearIncreament,
          'password'        => ($this->input->post('password')) ? $this->input->post('password') : $subscriberData->mobile_no,
          'cpassword'       => ($this->input->post('cpassword')) ? $this->input->post('cpassword') : $subscriberData->mobile_no
        );

        if($this->db->insert('student_register', $data)){
            $refCode = $this->Utilities_model->generateRandomStringAllCaps(8);
             $data = array(
                    'fname' => $subscriberData->full_name,
                    'email' => $subscriberData->email,
                    'student_username' => $username,
                    'is_student' => 1,
                    'countryCode' => '91',
                    'mobile' => $subscriberData->mobile_no,
                    'password' => $subscriberData->mobile_no,
                    'cpassword' => $subscriberData->mobile_no,
                    'referral_code' => $refCode,
                    'discount_on_referral' => 50,
                    'register_through' => 'registration',
                    'otp' => $otp
                );
                
                $this->db->insert('ambassador', $data);
                $userData = $this->db->get_where('student_register', array('username' => $username))->row();
                $_SESSION['student_id_temp'] = $username;
                $_SESSION['student_number_temp'] = $userData->num;
                $_SESSION['student_email_temp'] = $userData->email;
                $_SESSION['username_temp'] = $userData->name;
                $_SESSION['referral_code'] = $userData->referral_code;
                redirect('checkout/1');
        }
      } else {
        $this->session->set_flashdata("failure","Registration failed, email-id or mobile number already exists...!");
        redirect('tgs-get-alerts');
      }
      }
      $this->session->set_flashdata("failure","Please re-enter details");
        redirect('tgs-get-alerts');
  }

}
?>
