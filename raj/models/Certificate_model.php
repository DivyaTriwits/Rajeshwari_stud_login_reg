<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate_model extends CI_Model{
	Public function __contruct(){
		parent::__contruct();
	}

	public function getStudentNamesBySchool($schoolName){
      return $this->db->where('school_name',$schoolName)->get('studentcsv')->result();
	}

	public function getStudentDetails($studentName){
	    return $this->db->where('student_name',$studentName)->get('studentcsv')->row();
	}

	public function getSchoolNames(){
	    return $this->db->distinct('school_name')->select('school_name')->get('studentcsv')->result();
	}

	public function getDataForCertificate(){
	$bibno = $this->input->post('bibno');
	$this->db->select('*');
	$this->db->from('certificate_data');
// 	$this->db->join('payment_response','payment_response.bib_no = registration.runners_bib_no');
	$this->db->where('mobile', $bibno);
	$query = $this->db->get();
//	print_r($query);exit;
	return $query;
}

}
?>
