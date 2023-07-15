<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Influencer_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		
		date_default_timezone_set("Asia/Calcutta");
	}

	public function influncerHome()
	{
	    	if (!$this->session->userdata('influencer_username')) redirect('influencer-login');
		$this->load->view('influencer/header');
		$this->load->view('influencer/home');
		$this->load->view('influencer/footer');
	}
	public function influencerRegistration()
	{
    
		$this->load->view('influencer/influencer_reistration');
	}
	public function addInfluencerRegistration()
	{
		$this->Influencer_model->addinfluencerRegistration();
	}

	public function influencerLogin()
	{

		$this->session->unset_userdata('influencer_email');
		$this->session->unset_userdata('influencer_username');
		$this->session->unset_userdata('name');

		$this->load->view('website/header');
		$this->load->view('influencer/influencer_login');
		$this->load->view('website/footer');
	}

	public function referandEarn()
	{
	    if (!$this->session->userdata('influencer_username')) redirect('influencer-login');
		$data['getInfluencerReferralCode']=$this->Influencer_model->getInfluencerRefferalCode();
		$data['countEachRefferal']=$this->Influencer_model->countInfluencerRegistration();
		$data['getRefferalOffers']=$this->Influencer_model->getRefferalOffers();
		$data['getRefferalOffersforShare']=$this->Student_model->getRefferalOffersforShare();
		$data['getBankandAddressDetails']=$this->Influencer_model->getBankandAddressDetails();
// 		print_r($data['getBankandAddressDetails']);exit;
		// $data['getInfluencerReferralCode']=$this->Influencer_model->getInfluencerRefferalCode();

		$data['redeemLogs']=$this->Student_model->getRedeemLogs();

		$this->load->view('influencer/header');
		$this->load->view('influencer/refer_and_earn',$data);
		$this->load->view('influencer/footer');
	}
	public function influncerRedeemRequest()
	{
		$this->Influencer_model->influncerRedeemRequest();
	}
	public function verifyInfluencerLogin()
	{
		$this->Influencer_model->verifyInfluencerLogin();
	}
    public function influncerProfile()
	{
		if (!$this->session->userdata('influencer_username')) redirect('influencer-login');
		$data['getInfluencer']=$this->Influencer_model->getInfluencerProfile();
		$this->load->view('influencer/header');
		$this->load->view('influencer/influencer_profile',$data);
		$this->load->view('influencer/footer');
	}
	public function influncerRequest()
	{
	    if (!$this->session->userdata('influencer_username')) redirect('influencer-login');
		$this->load->view('influencer/header');
		$data['getRedeemRequests']=$this->Influencer_model->getRedeemRequests();
		$this->load->view('influencer/influencer_requests',$data);
		$this->load->view('influencer/footer');
	}
	public function updateInfluencerDetails()
	{
		$this->Influencer_model->updateInfluencerDetails();
	}
	public function influencerSetting()
	{
	    if (!$this->session->userdata('influencer_username')) redirect('influencer-login');
		$this->load->view('influencer/header');
		$this->load->view('influencer/influencer_setting');
		$this->load->view('influencer/footer');
	}
}
?>