<style>
	.icon-bar {
		position: fixed;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	.icon-bar a {
		display: block;
		text-align: center;
		padding: 16px;
		transition: all 0.3s ease;
		color: white;
		font-size: 20px;
	}
	.facebook {
		background: #3B5998;
		color: white;
	}	
</style>

<?php 
$result=$this->Influencer_model->getInfluncerRedeemLogs();
// print_r($result);exit();
$total_amount=0;
if($result->num_rows()>0){
	foreach ($result->result() as $eachResult) {
		$total_amount=$total_amount+$eachResult->total_amount;
		// print_r($total_amount);exit;
	}
}
else
{
	$total_amount=0;
	// print_r($total_amount);exit;
}
?>
<!-- Main Content-->
<div class="main-content pt-4 mt-5 mb-4">
	<div class="container fuild">

		<!-- Page Header -->

		<!-- Row -->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
							<div class="card-body text-center">
								<h6 class="mb-0 ">Registration by Referral</h6>
								<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="fa fa-handshake-o"style="color: #ff7f45"></i>&nbsp; &nbsp;<?php echo $countEachRefferal?></span></h2>
								<!-- <p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ml-1"><i class="fe fe-arrow-down"></i> 1.68%</span> for Last month</p> -->
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
							<div class="card-body text-center">
								<h6 class="mb-0 ">Total Earn by Referral</h6>
								<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="ion-cash"style="color: #ff7f45"></i>&nbsp;&nbsp;
									<?php  echo $getRefferalOffers->earned_on_referral_amount-$total_amount?></span></h2>
									<!-- 	<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 0.27%</span> for Last month</p> -->
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
								<div class="card-body text-center">
									<h6 class="mb-0 ">Redeem Amount if You Reach</h6>
									<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="ti-medall"style="color: #ff7f45"></i>&nbsp;&nbsp;500.00</span></h2>
									<!-- 	<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 0.27%</span> for Last month</p> -->
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
								<div class="card-body text-center">
									<h6 class="mb-0 ">Redeem Amount</h6>
									<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="ion-ribbon-b"style="color: #ff7f45"></i>&nbsp;&nbsp;<?php  echo $total_amount?></span></h2>
									<!-- 	<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 0.27%</span> for Last month</p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- End Row $redeemLogs->total_amount>=500-->
			<?php if($getRefferalOffers->earned_on_referral_amount-$total_amount>=500){?>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="row">
								<!-- <div class="col-xl-4 col-lg-6 col-sm-6 border-right">
									<div class="card-body text-center">
										<h6 class="mb-0 ">Renew My Account For Next Year</h6>
										<h2 class="mb-1 mt-2 number-font"><span class="counter">
											<button class="btn ripple btn-success btn-sm" data-target="#modaldemo4" data-toggle="modal" style="background-color:#460056 ;border-color: #460056">Request</button>
										</span></h2>
										
									</div>
								</div> -->

								<div class="col-xl-4 col-lg-6 col-sm-6 border-right">
									<div class="card-body text-center">
										<h6 class="mb-0 ">Redeem Amount To Bank<i class="ion-help-circled" data-toggle="tooltip" title="Per request only 500.00  will be redeemed"></i></h6>
										<h2 class="mb-1 mt-2 number-font"><span class="counter">
											<button class="btn ripple btn-success btn-sm"  data-target="#redeemBank" data-toggle="modal" style="background-color:#460056 ;border-color: #460056">Request</button></span></h2>
											<!--<p>per request 500.00  will be redeemed</p>-->
										</div>
									</div>
								<!-- 	<div class="col-xl-4 col-lg-6 col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-0 ">Registered an Account</h6>
											<h2 class="mb-1 mt-2 number-font"><span class="counter">
												<button class="btn ripple btn-success btn-sm" data-target="#manualAccount" data-toggle="modal"style="background-color:#460056 ;border-color: #460056">Request</button></span></h2>
								
											</div>
										</div> -->

									</div>
								</div>
							</div>
						</div>
					<?php }?>
					<div class="row">
						<!-- <a data-target="#trackorder" class="nav-link" data-toggle="tab" role="tablist"><i class="fe fe-truck icon1"></i> Track Order</a> -->
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card" id="buttons">
									<div class="card-body">
										<div class="text-center">
											<h6 class="main-content-label mb-1">Share Your Unique Url with friends and every time they sign up you get Rs.<?php echo $getRefferalOffersforShare->earn_on_referral?> and they will get Rs.<?php echo $getRefferalOffersforShare->discount_on_referral?> discount</h6>

										</div>
										<div class="text-wrap">
											<div class="example">
											<!-- <div class="btn-list">
											</div> -->
											<div id="social">
												
												<div class="btn-list">
													<div class="row">
														<div class="col-md-12">

															<a target="_blank" 
															href="https://www.facebook.com/sharer/sharer.php?u=https://www.theglobalscholarship.org/student-register?<?php if($getInfluencerReferralCode!='') echo $getInfluencerReferralCode->referral_code?>&amp;src=sdkpreparse" 
															class="fb-xfbml-parse-ignore"
															style="margin-right: 15px"> <button type="button" class="btn ripple btn-primary">
																<i class="fe fe-facebook"></i>
															</button> </a>



												<!-- <a href="https://www.instagram.com/" target="_blank" style="margin-right: 15px">
													<button type="button" class="btn ripple btn-pink">
														<i class="fe fe-instagram"></i>
													</button>
												</a>
												<a href="https://twitter.com/" target="_blank" style="margin-right: 15px">
													<button type="button" class="btn ripple " style="background-color: #2BA5DA">
														<i class="fe fe-twitter"></i>
													</button>

												</a> -->
												<a target = "_blank"
												class="whatsapp"
												href="https://api.whatsapp.com/send?text=Hey! Use my referral link <?php echo base_url('student-register')?>?rcode=<?php if($getInfluencerReferralCode!='') echo $getInfluencerReferralCode->referral_code?> and register on THE GLOBAL SCHOLARSHIP portal to start getting scholarship alerts. You can get your unique link, refer and earn your subscription amount back." data-action="share/whatsapp/share"style="margin-right: 15px">>
												<button type="button" class="btn ripple btn-success">
													<i class="zmdi zmdi-whatsapp"></i>
												</button>
											</a>
											<!-- <a  href="">
												<button type="button" class="btn ripple btn-info" id="btn-share">Share</button>
											</a> -->
										</div>
									</div>
								</div>
							</div>
							<br>
							<div  id="content-mobile">
								<div class="row">
									<!-- <h6 class="text-center">If share button not working then copied this link and share</h6> -->
									<div class="col-md-8">
										<div class="input-group telephone-input">
											<!--<input type="text"class="form-control" readonly=""value="Hey!, Use my referral code <?php if($getInfluencerReferralCode!='') echo $getInfluencerReferralCode->referral_code?> instant discount to register on <?php echo base_url('student-register')?>?rcode=<?php if($getInfluencerReferralCode!='') echo $getInfluencerReferralCode->referral_code?>" id="myInput">-->
												<input type="text"class="form-control" readonly=""value="Hey! Use my referral link <?php echo base_url('student-register')?>?rcode=<?php if($getInfluencerReferralCode!='') echo $getInfluencerReferralCode->referral_code?> and register on THE GLOBAL SCHOLARSHIP portal to start getting scholarship alerts. You can get your unique link, refer and earn your subscription amount back." id="myInput">

											<span class="input-group-btn">
												<button class="btn ripple " onclick="myFunction()" style="background-color:#ff7f45">Copy</button>
											</span>
										</div>
									</div>
								</div>
								<div id="message" ></div>
							</div>

						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Row -->
	<!--	<a href="<?php echo base_url('student-home')?>">-->
		<!--	<button type="button" class="btn ripple btn-dark float-left" style="margin-right: 5px;background-color:#460056;border-color:#460056">Back</button>-->
		<!--</a>-->
	</div>
	<!-- Modal alert message -->
	<div class="modal fade" id="modaldemo4">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content tx-size-sm">
				<form action="<?php echo base_url('redeem-request')?>" method="Post">
					<div class="modal-body tx-center pd-y-20 pd-x-20">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="tx-success tx-semibold mg-b-20">Confirm!</h4>
						<p class="mg-b-20 mg-x-20"><b>Click on yes if you want to renew for next year</b></p>
						<input type="hidden" name="redeem_option" value="Renew My Account For Next Year">
						<input class="btn ripple btn-success pd-x-25"type="submit" value="Yes">
						<button aria-label="Close" class="btn ripple btn-secondary" data-dismiss="modal" type="button">No</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal alert message End -->
	<!-- Large Modal -->
	<div class="modal fade" id="manualAccount">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content modal-content-demo">
				<!-- <div class="modal-header"> -->
					<!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> -->
					<!-- </div> -->
					<div class="modal-body">
						<h6 class="modal-title">Registered An Account</h6>
						<!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> -->
						<form action="<?php echo base_url('redeem-request')?>" method="Post">
							<h5 class="text-center mb-5 mt-2"></h5>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group text-left">
										<label class="">Full Name</label>
										<input class="form-control rounded-11" name="fullname" id="fullname" placeholder="Student Full Name" type="text" autocomplete="off" required>
									</div>
								</div>
								<input type="hidden" name="redeem_option" value="Registered a new Account">
								<div class="col-md-6">
									<div class="form-group text-left">
										<label class="">Mobile No</label>
										<input
										pattern="[0-9]{1,10}"  maxlength="10" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"
										class="form-control rounded-11" name="mobile_number" id="mobile_number" placeholder="Student Mobile Number" type="tel" autocomplete="off" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group text-left">
										<label class="">Email</label>
										<input class="form-control rounded-11" name="registered_email" id="registered_email" placeholder="Student Email" type="email" autocomplete="off" required>
									</div>
								</div>

							</div>

							<!-- <div class="modal-footer"> -->
								<button class="btn ripple btn-primary" type="submit"style="background-color: #460056; border-color: #460056">Submit</button>&nbsp;&nbsp;
								<button class="btn ripple btn-outline-light" data-dismiss="modal" type="button">Close</button>
								<!-- </div> -->
								<!-- </div> -->
								<!-- </div> -->
							</form>
						</div>

					</div>
				</div>
			</div>
			<!--End Large Modal -->
			<div class="modal fade" id="redeemBank">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content modal-content-demo">
						<!-- <div class="modal-header"> -->
							<!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> -->
							<!-- </div> -->
							<div class="modal-body">
								<h6 class="modal-title">Redeem Amount</h6>
								<!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> -->
								
									<form id="bankForm"action="<?php echo base_url('influncer-redeem-request')?>" method="Post">
										<h5 class="text-center mb-5 mt-2"></h5>
										<h6>Bank Details</h6>
										<div class="row">
											
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Bank Name <span class="text-danger">*</span></p>
													<input type="text" class="form-control" name="bank_name" id="bank_name"
													value="<?php if($getBankandAddressDetails!=''){echo $getBankandAddressDetails->bank_name;}?>" placeholder="">
												</div>
											</div>
											<input type="hidden" name="redeem_option" value="Redeem Amount To Bank">
											
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Bank Account Number <span class="text-danger">*</span></p>
													<input 

													pattern="[0-9]{1,18}"  maxlength="20" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"


													type="text" class="form-control" name="bank_account_no" id="bank_account_no"placeholder="" value="<?php if($getBankandAddressDetails!=''){echo $getBankandAddressDetails->bank_account_no;}?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Bank IFSC Code <span class="text-danger">*</span></p>
													<input 

													pattern="[a-zA-Z0-9]{1,11}"  maxlength="11" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"

													type="text" class="form-control ifsc" name="bank_ifsc_code" id="bank_ifsc_code" value="<?php if($getBankandAddressDetails!=''){echo $getBankandAddressDetails->bank_ifsc_code;}?>" placeholder="" >
													<span id="ifscError" style="color:red;"></span>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Bhim UPI ID <span class="text-danger">*</span></p>
													<input type="text" autocomplete="off" class="form-control" name="bhim_upi_id"id="bhim_upi_id"placeholder="">

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Confirm Bhim UPI ID <span class="text-danger">*</span></p>
													<input type="text" autocomplete="off" class="form-control" name="confirm_bhim_upi_id"id="confirm_bhim_upi_id"placeholder="">

												</div>
											</div>
											<!-- <div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Enter Amount </p>
													<input type="text" autocomplete="off" class="form-control" name="redeem_amount"id="redeem_amount"placeholder="">

												</div>
											</div> -->
										</div>
										<!-- <div class="modal-footer"> -->
											<button class="btn ripple btn-primary" type="submit"style="background-color: #460056; border-color: #460056">Submit</button>&nbsp;&nbsp;
											<button class="btn ripple btn-outline-light" data-dismiss="modal" type="button">Close</button>
											<!-- </div> -->
											<!-- </div> -->
										
									<!-- </div> -->
								</form>
							</div>

						</div>
					</div>
				</div>
								<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Share These Images On Your Social Media</h6><br>
											<!-- <p class="text-muted card-sub-title">A customizable, modular, responsive, lightbox gallery plugin for jQuery.</p> -->
										</div>
										<ul id="lightgallery" class="list-unstyled row mb-0">
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url()?>assets/img/media/influencer/1.jpg" data-src="<?php echo base_url()?>assets/img/media/influencer/1.jpg" data-sub-html="<h4> </h4><p> </p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url()?>assets/img/media/influencer/1.jpg" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url()?>assets/img/media/influencer/2.jpg" data-src="<?php echo base_url()?>assets/img/media/influencer/2.jpg" data-sub-html="<h4> </h4><p> </p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url()?>assets/img/media/influencer/2.jpg" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url()?>assets/img/media/influencer/3.jpg" data-src="<?php echo base_url()?>assets/img/media/influencer/3.jpg" data-sub-html="<h4> </h4><p> </p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url()?>assets/img/media/influencer/3.jpg" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url()?>assets/img/media/influencer/4.png" data-src="<?php echo base_url()?>assets/img/media/influencer/4.png" data-sub-html="<h4> </h4><p> </p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url()?>assets/img/media/influencer/4.png" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url()?>assets/img/media/influencer/5.jpg" data-src="<?php echo base_url()?>assets/img/media/influencer/5.jpg" data-sub-html="<h4> </h4><p> </p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url()?>assets/img/media/influencer/5.jpg" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url()?>assets/img/media/influencer/6.jpg" data-src="<?php echo base_url()?>assets/img/media/influencer/6.jpg" data-sub-html="<h4> </h4><p> </p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url()?>assets/img/media/influencer/6.jpg" alt="Thumb-2">
												</a>
											</li>

										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
			</div>
		</div>
<!-- <a href="<?php echo base_url('student-home')?>">
	<button type="button" class="btn ripple btn-dark float-left" style="margin-right: 5px;background-color:#460056;border-color:#460056">Back</button>
</a> -->
<div class="icon-bar">
	<button type="button" class="btn ripple float-left" id="btn-share" style="background-color:#ff7f45;color: black"><i class="pe-7s-share"></i></button>
</div>
<!-- <div class="col-md-2" id="back-to-top" style="text-align: left;">
<button type="button" class="btn ripple btn-info float-left" id="btn-share"><i class="pe-7s-share"></i></button>
</div> -->

<script>	
	window.addEventListener('load', function() {
		if(!navigator.share) {
        // document.querySelector('#btn-share').innerHTML = 'Not available';
        return;
    }


    document.getElementById('btn-share').addEventListener('click', function() {
    	navigator.share({
    		title: 'theglobalscholarship',
    		text: '"Hey!, Use my referral code <?php if($countInfluencerRegistration!='') echo $countInfluencerRegistration->referral_code?> and get Rs.<?php echo $getRefferalOffersforShare->discount_on_referral?> instant discount to register on',
    		url: 'https://www.theglobalscholarship.org/student-register?rcode=<?php if($countInfluencerRegistration!='') echo $countInfluencerRegistration->referral_code?>',
    	});
    });
});

</script>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ed8817de8cea7d4"></script>-->
<script>
	$('#btn-share').hide();
	$('#all-share').hide();
    var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
	|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
	$('#btn-share').show();
	isMobile = true;
}else{
	$('#all-share').show();
}
</script>
<script>
	function myFunction() {
		/* Get the text field */
		var copyText = document.getElementById("myInput");

		/* Select the text field */
		copyText.select();
		copyText.setSelectionRange(0, 99999); /* For mobile devices */

		/* Copy the text inside the text field */
		document.execCommand("copy");

		/* Alert the copied text */
//   alert("Copied the text: " + copyText.value);
document.getElementById("message").innerHTML = "Link Copied";
document.getElementById("message").style.color = "#ff7f45";
}
</script>
<script>
	document.getElementById("demo").innerHTML = 5 + 6;
</script>


<script>
	$(document).ready(function() {

		$('#bankForm').bootstrapValidator({
			// message: 'This value is not valid',
			feedbackIcons: {
				// valid: 'glyphicon glyphicon-ok',

				// validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				bhim_upi_id: {
					validators: {
						notEmpty: {
							message: 'Bhim upi id is  required '
						},

					}
				},
				confirm_bhim_upi_id: {
					validators: {
						notEmpty: {
							message: 'Confirm bhim upi is required '
						},
						identical: {
							field: 'bhim_upi_id',
							message: 'Bhim upi id is not matching'
						}

					}
				},
				


				bank_name: {
					validators: {
						notEmpty: {
							message: 'The Bank name is required'
						},

					}
				},
				bank_account_no: {
					validators: {
						notEmpty: {
							message: 'The Bank account number is required'
						},

					}
				},
					bank_ifsc_code: {
					validators: {
						notEmpty: {
							message: 'The Bank Ifsc code is required'
						},

					}
				},
				

			}
		}) .on('success.form.bv', function(e) {
			$(this)[0].submit();
		});
	});
</script>

<?php if($this->session->flashdata('renew-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'Your request sent! soon you will get response',
			type: 'success',
			timer: 5000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('registered-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'Your request sent! soon you will get response',
			type: 'success',
			timer: 5000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('bank-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'Your request sent! it will take 4 to 7 working days to add amount to your account',
			type: 'success',
			timer: 6000,
			showConfirmButton: false
		});
	</Script>
	<?php }?>


<?php if($this->session->flashdata('number-exist')){?>		
	<Script>
		swal({
			title: 'Oops!',
			text: 'Account already registered with this number',
			type: 'error',
			timer: 4000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('email-exist')){?>		
	<Script>
		swal({
			title: 'Oops!',
			text: 'Account already registered with this email',
			type: 'error',
			timer: 4000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
