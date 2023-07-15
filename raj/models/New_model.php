<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_model extends CI_Model
{
	public function searchEducationBased($id){
    $string = str_replace('%20', ' ', $id);
  // $query=$this->db->where('scholarship_type',$string)->where('application_end_date >=', date('Y-m-d'))->Where('web_status',1)->order_by('application_end_date','ASC')->get('scholarships')->result();
 $query=$this->db->where('scholarship_type',$string)->where('application_end_date >=', date('Y-m-d'))->Where('web_status',1)->order_by('scholarship_added_date','DESC')->get('scholarships')->result();
 //$query=$this->db->where('scholarship_type',$string)->Where('web_status',1)->order_by('scholarship_added_date','DESC')->get('scholarships')->result();
      return $query;     
  }
  /*=====================To add Expired Schloar shop List ================================*/
  public function expired(){

   /*$query=$this->db->where('application_end_date <', date('Y-m-d'))->Where('web_status',1)->order_by('application_end_date','ASC')->get('scholarships')->result();*/

   $query=$this->db->where('application_end_date <', date('Y-m-d'))
                    ->where('application_end_date >',date("Y-m-d H:i:s",strtotime("-1 month")))
                    ->Where('web_status',1)
                    ->order_by('application_end_date','DESC')
                  ->get('scholarships')->result();
      return $query;     
  }
 /* ------------------for sitemap---------on 08 June------by varun----------*/
  public function getallforsitemap(){
   $query=$this->db->where('application_end_date >=', date('Y-m-d'))
                   ->order_by('scholarship_added_date','DESC')
                   ->get('scholarships')->result();
      return $query;     
  }


  public function searchAbroadscholarshipforsitemap(){
  
 $query=$this->db->where('scholarship_type','Abroad')->where('application_end_date >=', date('Y-m-d'))->Where('web_status',1)->order_by('scholarship_added_date','DESC')->get('scholarships')->result();
      return $query;     
  }
  public function searchscholarshipforsitemap(){
  
 $query=$this->db->where('scholarship_type','Scholarship')->where('application_end_date >=', date('Y-m-d'))->Where('web_status',1)->order_by('scholarship_added_date','DESC')->get('scholarships')->result();
      return $query;     
  }
  public function serachOtherScholarshipforsitemap(){
  
   // print_r($string);exit;
    $query=$this->db->where('scholarship_type !=','Scholarship')->where('scholarship_type !=','Abroad')->where('application_end_date >=', date('Y-m-d'))->Where('web_status',1)->limit(12)->get('scholarships')->result();
    return $query;     
  }
  /* ------------------10 June------by varun----------*/
  public function foronefeedbackaday($studentEmail)
  {
    $string = $studentEmail;
  
   // print_r($string);exit;

    $query=$this->db->where('student_email',$string)->where('feedback_date >= ', date('Y-m-d H:i:s'))->Where('web_status',0)->get('feed_back');
       
     if($query->num_rows() > 0){
        echo '<script> alert("Only one feedback is allowed for a day")</script>';
    return TRUE;     
  }
    else 
    {
    return FALSE;
    }
  }
    /* ------------------10 June------by varun----------*/
  
   /* ------------------for sitemap---------on 08 June------by varun----------*/

  public function filtersearchEducationBased($id,$limit,$start){
    $string = str_replace('%20', ' ', $id);
    $nostring = str_replace('%20', ' ', $nid);
    $this->db->limit($limit, $start);
    $query=$this->db->where('application_end_date >=', date('Y-m-d'))->where('scholarship_type!=', 'Abroad')->Where('web_status',1)->order_by('scholarship_type','DESC')->order_by('application_end_date','ASC')->get('scholarships')->result();
//$query=$this->db->where('application_end_date >=', date('Y-m-d'))->where('scholarship_type!=', 'Abroad')->Where('web_status',1)->order_by('scholarship_type','DESC')->order_by('application_start_date','DESC')->get('scholarships')->result(); // 13th may update

    return $query;     
  }
   public function filterAbroadsearchEducationBased($id,$limit,$start){
    $string = str_replace('%20', ' ', $id);
    $nostring = str_replace('%20', ' ', $nid);
    $this->db->limit($limit, $start);
    $query=$this->db->where('application_end_date >=', date('Y-m-d'))->where('scholarship_type!=', 'Competitions and Awards')->Where('web_status',1)->order_by('scholarship_type','ASC')->order_by('application_end_date','ASC')->get('scholarships')->result();
   //$query=$this->db->where('application_end_date >=', date('Y-m-d'))->where('scholarship_type!=', 'Competitions and Awards')->Where('web_status',1)->order_by('application_start_date','DESC')->get('scholarships')->result();

     return $query;     
  }
    public function filterCompetitionssearchEducationBased($id,$limit,$start){
    $string = str_replace('%20', ' ', $id);
    $nostring = str_replace('%20', ' ', $nid);
    $this->db->limit($limit, $start);
    $query=$this->db->where('application_end_date >=', date('Y-m-d'))->where('scholarship_type!=','Abroad')->Where('web_status',1)->order_by('scholarship_type','ASC')->order_by('application_end_date','ASC')->get('scholarships')->result();
    return $query;     
  }
  public function get_scholarship_count($id) 
{
  $string = str_replace('%20', ' ', $id);
  return $this->db->where('application_end_date >=', date('Y-m-d'))->where('scholarship_type!=', $string)->get("scholarships")->num_rows();

}
  public function serachOtherScholarship($id){
    $string = str_replace('%20', ' ', $id);
   // print_r($string);exit;
    $query=$this->db->where('scholarship_type',$string)->where('scholarship_type !=','')->where('application_end_date >=', date('Y-m-d'))->Where('web_status',1)->limit(12)->get('scholarships')->result();
    return $query;     
  }
  public function getScholarshipDetails($id){
   $this->db->select('*');
   $this->db->from('scholarships');
   // $this->db->join('scholarship_attachment','scholarship_attachment.scholarship_id = scholarships.scholarship_id');
   $this->db->where('scholarships.scholarship_id',$id);
   $query = $this->db->get();
   return $query->row();
 }
  public function someOtherScholarship($id){
    $string = str_replace('%20', ' ', $id);
    $query=$this->db->where('scholarship_type !=',$string)->where('scholarship_type !=','')->where('application_end_date >=', date('Y-m-d'))->limit(3)->get('scholarships')->result();
    return $query;     
  }
    public function internshipScholarship(){
    $query=$this->db->where('scholarship_type','Internship')->where('scholarship_type !=','')->where('application_end_date >=', date('Y-m-d'))->limit(3)->get('scholarships')->result();
    return $query;     
  }
  public function getScholarshipAttachment($id){
    //print_r('iii');exit;
    $this->db->where('scholarship_id',$id);
    $query = $this->db->get('scholarship_attachment');
      return $query;
    }
  public function getPushNotification(){
      $this->db->select('push.*')
      ->from('sent_notifications push');
      $data=$this->db->get();
      return $data;
  }
  public function getPushAmount(){
      $notification=$this->getPushNotification();
      $amount=0;
      if($notification->num_rows() > 0){
         foreach($notification->result() as $notif){
             $scholarship=$this->db->where('scholarship_id',$notif->scholarship_id)->get('scholarships')->row();
            
                $amount+=$scholarship->scholarship_worth;
            
         }
        
      }
       //print_r($amount);exit;
       return $amount;
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
    return $thecash;
     print_r($thecash);exit;
}
}?>