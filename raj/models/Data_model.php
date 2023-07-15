<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

//Login
public function getUserData($login,$pass){
      $data= $this->db->where('email',$login)->where('password',$pass)->get('user');
       return $data;
   }

//Register Data_Model... 
public function InsertRegister($data)
       {
  $stud='ksdksaj';
        $this->FullName = $data['FullName'];
        $this->MobileNumber = $data['MobileNumber'];      
        $this->Email = $data['Email']; 
        $this->Password = $data['Password'];
         
    
     if($this->db->insert('student_registration',$this))
       {    
       $getData=array(
         'message'=>'Success',
         'stud_id'=>$stud
         );
         return 'Data inserted successfully';
        }
      else
          {
            $getData=array(
         'message'=>'Errr',
         'stud_id'=>'',
         );
        
           }
   return $getData;
        }

         public function UpdateRegister($id,$data){
   
      //$this->FullName    = $data['FullName']; // please read the below note
       //$this->MobileNumber  = $data['MobileNumber'];
       //$this->Email = $data['Email'];
        $this->Password = $data['Password'];
       $result = $this->db->update('register',$this,array('id' => $id));
       if($result)
       {
           return "Data is updated successfully";
       }
       else
       {
           return "Error has occurred";
       }
   }

//Profile1 Data_Model... 
public function InsertProfile1($data)
       {
        $this->Gender = $data['Gender'];
        $this->DOB = $data['DOB'];      
        $this->Qualification = $data['Qualification']; 
        $this->State = $data['State'];
         
    
     if($this->db->insert('profileupdate1',$this))
       {    
         return 'Data inserted successfully';
        }
      else
          {
            return "Error has occured";
           }
        }

         public function UpdateProfile1($id,$data){
   
          //$this->Gender  = $data['Gender']; // please read the below note
        //$this->DOB  = $data['DOB'];
        $this->Qualification = $data['Qualification'];
        //$this->State = $data['State'];
       $result = $this->db->update('profileupdate1',$this,array('id' => $id));
       if($result)
       {
           return "Data is updated successfully";
       }
       else
       {
           return "Error has occurred";
       }
   }


//Profile2 Data_Model... 
public function InsertProfile2($data)
       {
        $this->course = $data['course'];
        $this->collageName = $data['collageName'];      
        $this->District = $data['District']; 
        $this->Income = $data['Income'];
         
    
     if($this->db->insert('profileupdate2',$this))
       {    
         return 'Data inserted successfully';
        }
      else
          {
            return "Error has occured";
           }
        }

 public function UpdateProfile2($id,$data){
   
      //$this->course    = $data['course']; // please read the below note
       //$this->collageName  = $data['collageName'];
       //$this->District = $data['District'];
        $this->Income = $data['Income'];
       $result = $this->db->update('profileupdate2',$this,array('id' => $id));
       if($result)
       {
           return "Data is updated successfully";
       }
       else
       {
           return "Error has occurred";
       }
   }


//Register Data_Model... 
public function InsertStdProfile($data)
       {
        $this->FullName = $data['FullName'];
        $this->Email = $data['Email'];      
        $this->MobileNo = $data['MobileNo']; 
        $this->WhatsappNo = $data['WhatsappNo'];
        $this->Qualification = $data['Qualification'];
        $this->Course = $data['Course'];
        $this->CollageName = $data['CollageName'];
        $this->State = $data['State'];
        $this->District = $data['District'];
        $this->FamIncome = $data['FamIncome'];
        $this->Gender = $data['Gender'];
         
    
     if($this->db->insert('studentprofile',$this))
       {    
         return 'Data inserted successfully';
        }
      else
          {
            return "Error has occured";
           }
        }

         public function UpdateStdProfile($id,$data){
   
      $this->FullName    = $data['FullName']; // please read the below note
       //$this->Email  = $data['Email'];
       //$this->MobileNo = $data['MobileNo'];
        //$this->WhatsappNo = $data['WhatsappNo'];
      //$this->Qualification = $data['Qualification'];
      //$this->Course = $data['Course'];
      //$this->CollageName = $data['CollageName'];
      //$this->State = $data['State'];
      //$this->District = $data['District'];
      //$this->FamIncome = $data['FamIncome'];
      //$this->Gender = $data['Gender'];
       $result = $this->db->update('studentprofile',$this,array('id' => $id));
       if($result)
       {
           return "Data is updated successfully";
       }
       else
       {
           return "Error has occurred";
       }
   }

//Profile update
   public function Profileupdate($id,$data){
       //$this->Qualification = $data['Qualification'];
       $this->Course = $data['Course'];
       //$this->collageName = $data['collageName'];
       
       
       $result = $this->db->update('profile',$this,array('id' => $id));
       if($result)
       {
           return "Data is updated successfully";
       }
       else
       {
           return "Error has occurred";
       }
   }


}


?>