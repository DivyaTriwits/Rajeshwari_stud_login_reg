<?php

class Influencer_model extends CI_Model{


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


	public function verifyinfluencerUsername($email)
	{
		return $this->db->where('influencer_email',$email)->get('influencers');
	}

	public function verifyInfluencerLogin()
	
	{
		$influencer_email = $this->input->post('email');
		$password = $this->input->post('password');
		// print_r($password);print_r($influencer_email);
		// exit;
        // $remember=$this->input->post('rememberme');
		$login_influencer_details = $this->verifyinfluencerUsername($influencer_email);
		if ($login_influencer_details->num_rows() > 0) {


			$login_influencer_details = $login_influencer_details->row();
			if ($login_influencer_details->influencer_password == $password) {


				$_SESSION['influencer_email'] = $login_influencer_details->influencer_email;
				$_SESSION['influencer_username'] = $login_influencer_details->influencer_username;
				$_SESSION['name'] = $login_influencer_details->full_name;
				
				$this->session->set_flashdata('login-success', 'login success...');
				redirect('influencer-home');
			} else {
				$this->session->set_flashdata('incorrect-password-error', 'incorrect password!!!');
				redirect('influencer-login');
			}
		} else {
			$this->session->set_flashdata('no-account-found-error', 'no account found with this username..');
			redirect('influencer-login');
		}
	}
	public function addinfluencerRegistration()

	{
		$infId=$this->generateRandomString(12);
		if($this->input->post())
		{
			$data=array(
				'influencer_username'	=>$infId,
				'full_name'				=>$this->input->post('full_name'),
				'influencer_email'		=>$this->input->post('email'),
				'influencer_mobile_no'	=>$this->input->post('mobile_no'),
				'influencer_password'	=>$this->input->post('password'),
				'registration_date_time'=>date('Y-m-d H:i:s')

			);
			$result=$this->db->insert('influencers',$data);

			if($result)
			{
				// echo "Asif";exit();
				$referalCode=$this->generateRandomString(12);
				$refferalData=array(
					'referral_code'			=>$referalCode,
					'is_student_code'		=>0,
					'is_influencer_code'	=>1,
					'referral_code_status'	=>1,
					'influencer_username'	=>$infId,

				);
				$refferalresult=$this->db->insert('referral_codes',$refferalData);
				$this->session->set_flashdata('add-success', 'added success');
				redirect('influencer-login');
			}

		}
	}

	public function getInfluencerRefferalCode()
	{
		$username=$this->session->userdata('influencer_username');
		return $this->db->where('influencer_username',$username)->get('referral_codes')->row();
	}

	public function countInfluencerRegistration()
	{
		
		$username=$this->session->userdata('influencer_username');
		$refferalCode=$this->getInfluencerRefferalCode();
		if($refferalCode!='')
		{
			$code=$refferalCode->referral_code;
		}
		else
		{
			$code='-';
		}
		return $this->db->where('referral_code',$code)->get('referral_logs')->num_rows();
	}

	public function getRefferalOffers()
	{
		$username = $this->session->userdata('influencer_username');


		$refferals=$this->getInfluencerRefferalCode();
		if($refferals != ''){
			$refer=$refferals->referral_code;
		}else{
			$refer='-';
		}


		$result = $this->db->select_sum('earned_on_referral_amount')->where('referral_code',$refer)->get('referral_logs')->row();
		return $result;
	}
	
	public function checkInfluencerBankDetails($username)
	{
		return $this->db->where('influencer_username',$username)->get('influencer_bank_details');
	}
	public function influncerRedeemRequest()
	{
		$username=$this->session->userdata('influencer_username');

		$checkUsersDetailsExist=$this->checkInfluencerBankDetails($username);
		if($checkUsersDetailsExist->num_rows()>0)
		{
		    
			$data=array(
				'influencer_username'	=>$username,
				'bank_name'				=>$this->input->post('bank_name'),
				'bank_account_no'		=>$this->input->post('bank_account_no'),
				'bank_ifsc_code'		=>$this->input->post('bank_ifsc_code'),
				'bhim_upi_id'			=>$this->input->post('bhim_upi_id'),

			);
// 			print_r($data);
			$this->db->set($data)->where('influencer_username',$username)->update('influencer_bank_details');
		}
		else
		{
		    
			$data=array(
				'influencer_username'	=>$username,
				'bank_name'				=>$this->input->post('bank_name'),
				'bank_account_no'		=>$this->input->post('bank_account_no'),
				'bank_ifsc_code'		=>$this->input->post('bank_ifsc_code'),
				'bhim_upi_id'			=>$this->input->post('bhim_upi_id'),
				
			);
			$this->db->insert('influencer_bank_details',$data);
		}

		$requestId=$this->generateRandomString(12);
		$amount=500;
		$redeemRequest=array
		(

			'influencer_username'	=>$username,
			'influencer_request_id' =>$requestId,
			'redeem_option'			=>$this->input->post('redeem_option'),
			'request_solved_status'	=>0,
			'request_date'			=>date('y-m-d H:i:s'),
			'bank_account_no'		=>$this->input->post('bank_account_no'),
			'bank_ifsc_code'		=>$this->input->post('bank_ifsc_code'),
			'bhim_upi_id'			=>$this->input->post('bhim_upi_id'),
			'redeem_amount'			=>$amount,

		);
// 		 print_r($redeemRequest);
		$resultRedeem=$this->db->insert('influencer_redeem_request',$redeemRequest);
		if($resultRedeem)
		{
			$redeemLogs=array(
				'redeem_request_id'=>$requestId,
				'influencer_username'=>$username,
				'status'=>1,
				'total_amount'=>$amount,
			);
			
// 			print_r($redeemLogs);
			$redeemResult=$this->db->insert('redeem_logs',$redeemLogs);
		}
// 		exit;
		redirect('refer-and-earn');

	}
     public function getBankandAddressDetails()
    {
     $username = $this->session->userdata('influencer_username');
     $result=$this->db->where('influencer_username',$username)->get('influencer_bank_details')->row();
     return $result;
   }
	public function getInfluncerRedeemLogs()
	{
		$username=$this->session->userdata('influencer_username');

		return $this->db->where('influencer_username',$username)->get('redeem_logs');
	}
	public function getRedeemRequests()
	{
		$username=$this->session->userdata('influencer_username');
		return $this->db->where('influencer_username',$username)->order_by('request_date','desc')->get('influencer_redeem_request');
	}
	public function getInfluencerProfile()
	{
		$username=$this->session->userdata('influencer_username');
		return $this->db->where('influencer_username',$username)->get('influencers')->row();
	}
	public function updateInfluencerDetails()
	{
		$username=$this->session->userdata('influencer_username');

		$data=array
		(
			'full_name'=>$this->input->post('name'),
			'influencer_mobile_no'=>$this->input->post('mobile'),
			'influencer_email'=>$this->input->post('email'),
		);
			
		$result=$this->db->set($data)->where('influencer_username',$username)->update('influencers');
		// print_r($this->db->last_query());exit();
		$this->session->set_flashdata('profile-update', 'added success');
		redirect('influencer-profile');
	}

}
?>