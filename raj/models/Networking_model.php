<?php
class Networking_model extends CI_Model{


  public function generateRandomString($n) 
  { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = '';
    for ($i = 0; $i < $n; $i++) { 
      $index = rand(0, strlen($characters) - 1); 
      $randomString .= $characters[$index]; 
    }
    return $randomString; 
  }




public function getScholarshipDetails($id)
{

   $result=$this->db->where('scholarships.scholarship_id',$id)->get('scholarships')->row();
   return $result;
  
}


public function getScholarshipDetailsById($id)
{
     $this->db->where('scholarship_id',$id);
     $result=$this->db->get('scholarships')->row();
     return $result; 
}

public function getAttachment($id)
{

  $result=$this->db->where('scholarship_id',$id)->get('scholarship_attachment')->result();
  return $result;

}


public function getStateList()
{

  $result=$this->db->query("select * from  states order by name asc");
  // $result=$this->db->get('states');
  return $result;
}

public function getCouresList()
{

  $result=$this->db->query("select * from courses order by id asc");
  return $result;
}

public function verifyMobileNumberInRegistrationTable($mobileNumber)
{

  $this->db->where('registered_mobile_no',$mobileNumber);
  $result=$this->db->get('promotion_register');

  if($result->num_rows()>0)
  {
    return true;
  }
  else
  {
    return false;
  }

}



public function verifyEmailInRegistrationTable($email)
{

  $this->db->where('registered_email',$email);
  $result=$this->db->get('promotion_register');

  if($result->num_rows()>0)
  {
    return true;
  }
  else
  {
    return false;
  }

}




public function addStudentRegistrationDetails($data)
{

  $result=$this->db->insert('promotion_register',$data);
  return $result;
}


public function verifyStudentStatus($email,$number)
{
  $status=1;
  $failedStatus=0;



  $result=$this->db->query("select * from student_registration where registration_status='$status' and  (registered_email='$email' or registered_mobile_no='$number') ");

  if($result->num_rows()>0)
  {
    return "Already Registered";
  }

  $result1=$this->db->query("select * from student_registration_log where registration_status='$failedStatus' and  (registered_email='$email' or registered_mobile_no='$number') ");

  if($result1->num_rows()>0)
  {
     return "Failed Registration";
  }
  else
  {
    return "New";
  }

}

}?>