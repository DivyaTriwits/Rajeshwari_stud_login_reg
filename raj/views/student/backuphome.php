
<style>
   .css-selector {
    background: linear-gradient(270deg, #e54d26, #e67355, #4e1086);
    background-size: 600% 600%;
    color:#ffffff;
    -webkit-animation: AnimationName 2s ease infinite;
    -moz-animation: AnimationName 2s ease infinite;
    animation: AnimationName 2s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:0% 53%}
    50%{background-position:100% 48%}
    100%{background-position:0% 53%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 53%}
    50%{background-position:100% 48%}
    100%{background-position:0% 53%}
}
@keyframes AnimationName {
    0%{background-position:0% 53%}
    50%{background-position:100% 48%}
    100%{background-position:0% 53%}
}
.main-content .container, .main-content .container-fluid {
    padding-top:5px !important;
    
}
</style>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#modaldemo4').modal('show');
        setTimeout(function () { jQuery('#modaldemo4').modal("hide"); }, 25000);
    });
//     $('#modaldemo4').firstVisitPopup({
// 		cookieName : 'homepage',
	
// 	});
</script>
<link href="<?php echo base_url()?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
				<link href="<?php echo base_url()?>assets/plugins/multislider/multislider.css" rel="stylesheet">
				<style type="text/css">
					@media(max-width: 500px){
						#basicSlider .MS-content .item{
							width: 100% !important;
						}
					}
				</style>
<!-- Main Content-->
<!-- Main Content-->
			<div class="main-content pt-4 mt-5">
				<div class="container">


						<!-- Row -->
						<div class="row">
							<div class="col-md">
							 	<div>
											<h6 class="main-content-label mb-1">Scholarships</h6>
											
										</div>
			    	<div id="basicSlider">
											<div class="MS-content">
												<?php $index= 1; foreach($some as $other):?>
												<div class="item"  style="margin-right:10px !important">
												    	<a href="<?php echo base_url('scholarships-details/'.$other->scholarship_id)?>">
													<div class="card"  style="height:120px !important">
														<div class="row" style="padding-top:20px;padding-left:12px">
															<div class="col-3">
														<div style="background-color: #ff7f45; border-radius: 5px ; padding:12px;color:#fff; height:78px !important; width:75px !important" align="center">
																	<h6><?php $str= $other->application_end_date;
																	$newdata = date("d", strtotime($str));
																	echo $newdata; 

																?></h6>
																<h6><?php $str= $other->application_end_date;
																$month =date("F", strtotime($str));
																$result = substr($month, 0, 3);
																echo $result;
															?></h6>
															<p style="font-size:10px;padding-bottom:2px">Last Date</p>
														</div>
													</div>
													<div class="col-9">
													     <div style="padding-top:10px !important">
														<h6 class="addReadMore showlesscontent">
															<?php echo $other->scholarship_name;?>
														</h6>
														</div>
														
													</div>
												</div>
											</div>
											</a>
										</div>
												<?php  $index++;  endforeach; ?>
										
											</div>
										</div>
							</div>
						
						</div>
						<!-- End Row -->

						
						<!-- Row -->
				
							<div class="row text-center" >
				
					<div class="col-lg-6 col-md-8" >
						<a href="<?php echo base_url('scholarships')?>">
							<div class="card plan-card" style="margin-bottom:4px !important">
								<div class="card-block">
									<div class="shadow-base p-2">
										<h1 class="pt-2"><i class="shadow-base fa fa-graduation-cap plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary">Scholarship List</h6>
									</div>

								</div>
							</div>
						</a>

					</div>
						<div class="col-lg-6 col-md-8 " >
						<a href="<?php echo base_url('student_profile')?>">
							<div class="card plan-card" style="margin-bottom:4px !important">
								<div class="card-block">
									<div class="shadow-base p-2">
										<h1 class="pt-2"><i class="shadow-base fe fe-user plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary">Update Profile</h6>
									</div>


								</div>
							</div>
						</a>
	                </div>
					</div>
						<!-- End Row -->

						<!-- Row -->
				         	<div class="row">
							<div class="col-md-12">
							    	<div class="text-wrap " style="margin-bottom:4px !important;margin-top:10px !important ">
		   	<div class="demo-static-toast" >
					<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
				<div class="toast-header">
						            	<h6 class="tx-14 mg-b-0 mg-r-auto"><span class="">Invite Friends</span></h6>
						            <a target = "_blank"
											class="whatsapp"
											href="https://api.whatsapp.com/send?text=Hey! I just found this awesome website which helps students to find upcoming scholarships. https://scholar.theglobalscholarship.org/student-promotion-register?rcode=<?php if($getEachReferralCode!='') echo $getEachReferralCode->referral_code?> Register now and thank me later.." data-action="share/whatsapp/share">
											
											<img  src="<?php echo base_url()?>dashboard_assets/whatsapp-icon.png"style="height: 45px; align:right">
												
									</a>
						</div>
						</div>
							</div>
						</div>
							    </div>
							    </div>
						<!-- End Row -->

	<div class="row text-center">
				    	<div class="col-lg-12 col-md-8 " >
				    	    
					
							<div class="" style="margin-bottom:4px !important;margin-top:20px !important ">
							
										
											<div class="row" style="padding-left:18px !important;margin-top:-6px !important;">
														<div class="col-lg-12 col-md-12" >
                                                           <a href="https://www.youtube.com/c/theglobalscholarshiporg" target="_blank" >
															
																<img  src="<?php echo base_url()?>dashboard_assets/youtubes.png"style="height: 25px;">
															</a>
																<a href="https://instagram.com/the_global_scholarship" target="_blank">
																<!--<button type="button" class="btn ripple btn-pink">-->
																<!--	<i class="fe fe-instagram"></i>-->
																<!--</button>-->
																<img  src="<?php echo base_url()?>dashboard_assets/instagram.png"style="height: 35px;">
															</a>
															<a target="_blank" 
															href="https://www.facebook.com/theglobalscholarship"
															class="fb-xfbml-parse-ignore"
														> 
															<!--<button type="button" class="btn ripple btn-primary">-->
															<!--	<i class="fe fe-facebook"></i>-->
															<!--</button>-->
															<img  src="<?php echo base_url()?>dashboard_assets/facebook.png"style="height: 15px;">
															</a>
											
										</div>
									</div>
									</div>

					

					</div>
		
		</div>
			
				</div>
			</div>
			<!-- End Main Content-->
<div class="main-content pt-4 mt-5 mb-5">
	<div class="">

		<div class="row text-center">
			<div class="col-md-12 pb-2 pt-2">
			    
			<div class="text-wrap " >
		   	<div class="demo-static-toast" >
					<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
				<div class="toast-header">
						            	<h6 class="tx-14 mg-b-0 mg-r-auto"><span class="">Invite Friends</span></h6>
						            <a target = "_blank"
											class="whatsapp"
											href="https://api.whatsapp.com/send?text=Hey! I just found this awesome website which helps students to find upcoming scholarships. https://scholar.theglobalscholarship.org/student-promotion-register?rcode=<?php if($getEachReferralCode!='') echo $getEachReferralCode->referral_code?> Register now and thank me later.." data-action="share/whatsapp/share">
											
											<img  src="<?php echo base_url()?>dashboard_assets/whatsapp-icon.png"style="height: 45px; align:right">
												
									</a>
						</div>
						</div>
				</div>
					<?php if(!empty($notifications)){foreach ($notifications as $eachNotifications){?>
					<!--<div class="demo-static-toast" >-->
					<!--	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">-->
					<!--		<div class="toast-header">-->
					<!--			<h6 class="tx-14 mg-b-0 mg-r-auto"><a href="<?php echo $eachNotifications->navigate_to?>" target="_blank"><span class="">Announcement:&nbsp;</span><?php echo $eachNotifications->message?></a></h6>-->
					<!--			<small class="text-muted"></small>-->
					<!--				<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">-->
					<!--					<span aria-hidden="true">&times;</span>-->
					<!--				</button>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<?php }}else{?>
					<!--	<div class="demo-static-toast" >-->
					<!--	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">-->
					<!--		<div class="toast-header">-->
					<!--			<h6 class="tx-14 mg-b-0 mg-r-auto">Welcome To The Global Scholarship</h6><small class="text-muted"></small>-->
					<!--				<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">-->
					<!--					<span aria-hidden="true">&times;</span>-->
					<!--				</button>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<?php }?>
				</div>
				
				<?php $subscriptionData = $this->db->where('student_username', $this->session->userdata('student_username'))->get('student_registration'); 
				
				if($subscriptionData->num_rows() > 0){
				    $subscriptionData = $subscriptionData->row();
				    if($subscriptionData->subscription_validity_datetime <= date('Y-m-d')){
				?>
				
				<div class="card" style="color:#460056">
					<div class="card-body" >
						<h4 style="text-align: center;">
							<?php  
							    echo 'Your Subscription has expired on '.date('Y-m-d',strtotime($subscriptionData->subscription_validity_datetime));
							?>
						</h4>
						<a href="<?php echo base_url('Razorpay/renewalPayements/'.$subscriptionData->student_username.'?subscription=3');?>" class="btn ripple btn-primary" style='background-color:#460056;border-color:#460056'>Renew Now</a>
					</div>
				</div>
				<?php } }?>
			</div>

			<!-- <div class="row"> -->
				<!-- <div class="row"> -->
<!-- 				<div class="col-lg-12 col-md-12">
						<div class="card" id="basic">
							<div class="card-body">
								<div class="text-wrap">
									<div class="example">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
													<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													<div id="basicSlider">
														<div class="MS-content">
															<div class="item">
																<a href="#" target="_blank"><p>Update Your Profile </p> </a>
															</div>
															<div class="item">
																<a href="#" target="_blank"><p>New Scholarship Sent</p> </a>
															</div>
															<div class="item">
																<a href="#" target="_blank"><p>Apply Scholarship</p> </a>
															</div>
															<div class="item">
																<a href="#" target="_blank"><p>New Offer for Refferal </p> </a>
															</div>
															<div class="item">
																<a href="#" target="_blank"><p>today  20% discount </p> </a>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- <div class="col-md-12 ">
						<a href="<?php echo base_url('scholarships')?>" style="color: black">
						<div class="card">
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
									<div class="card-body text-center shadow-base ">
										<h6 class="mb-0 ">Amount of Scholarship Sent</h6>
										<?php $total_worth=0; 
										$sumtotal=0;
										$total_worth = $this->Student_model->totalWorth(); 
										foreach($total_worth as $worthing){
											$tot = $worthing->scholarship_worth;
											$total_worth= floatval(implode(explode(',',$tot)));
											$sumtotal+= $total_worth;
											?>
										<?php }?>
										<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="fa fa-handshake-o"style="color: #ff7f45"></i>&nbsp;<?php $amount = $sumtotal;
										$amount = $this->Student_model->moneyFormatIndia( $amount );
										echo $amount; ?></span></h2>
									
									</div>
								</div>

								<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
									<div class="card-body text-center shadow-base ">
										<h6 class="mb-0 ">Amount of Scholarship Applied</h6>
										<?php $applytotal=0;
										$apply = $this->Student_model->totalAppliedWorth();
										foreach($apply as $app){
											$applied = $app->scholarship_worth;
											$app_worth= floatval(implode(explode(',',$applied)));
											$applytotal+= $app_worth;?>
										<?php }?>
										<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="ion-cash"style="color: #ff7f45"></i>&nbsp;<?php $amount = $applytotal;
										$amount = $this->Student_model->moneyFormatIndia( $amount );
										echo $amount;?></span></h2>
								
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
									<div class="card-body text-center shadow-base ">
										<h6 class="mb-0 ">Amount of Scholarship Missed</h6>
										<?php $misstotal=0;
										$miss = $this->Student_model->totalMissedWorth();
										foreach($miss as $miss){
											$missed = $miss->scholarship_worth;
											$miss_worth= floatval(implode(explode(',',$missed)));
											$misstotal+= $miss_worth;?>
										<?php }?>
										<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="ti-medall"style="color: #ff7f45"></i>&nbsp;<?php $amount = $misstotal;
										$amount = $this->Student_model->moneyFormatIndia( $amount );
										echo $amount;?></span></h2>
									
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
									<div class="card-body text-center shadow-base ">
										<h6 class="mb-0 ">Amount of Scholarship Bagged</h6>
										<?php $wortotal=0;
										$bagg = $this->Student_model->totalReceivedWorth();
										foreach ($bagg as $bag) 
										{
											$wor = $bag->scholarship_worth;
											$wor_worth= floatval(implode(explode(',',$wor)));
											$wortotal+= $wor_worth;?>
											<?php }?>
											<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="ion-ribbon-b"style="color: #ff7f45"></i>&nbsp;<?php $amount = $wortotal;
											$amount = $this->Student_model->moneyFormatIndia( $amount );
											echo $amount;;?></span></h2>
										
									
									</div>
								</div>
							</div>
						</div>
					</a>
					</div> -->
				</div>
				<div class="row text-center" >
				
					<div class="col-lg-6 col-md-8" >
						<a href="<?php echo base_url('scholarships')?>">
							<div class="card plan-card" style="margin-bottom:4px !important">
								<div class="card-block">
									<div class="shadow-base p-2">
										<h1 class="pt-2"><i class="shadow-base fa fa-graduation-cap plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary">Scholarship List</h6>
									</div>

								</div>
							</div>
						</a>

					</div>
						<div class="col-lg-6 col-md-8 " >
						<a href="<?php echo base_url('student_profile')?>">
							<div class="card plan-card" style="margin-bottom:4px !important">
								<div class="card-block">
									<div class="shadow-base p-2">
										<h1 class="pt-2"><i class="shadow-base fe fe-user plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary">Update Profile</h6>
									</div>


								</div>
							</div>
						</a>

					</div>
					<!--	<div class="col-lg-4 col-md-8 ">-->
					<!--	<a href="<?php echo base_url('earn-money-refer-friend')?>">-->
					<!--		<div class="card plan-card" style="margin-bottom:4px !important">-->

					<!--			<div class="card-block">-->
					<!--				<div class="shadow-base p-2">-->
					<!--					<h1 class="pt-2"><i class="ion ion-person-add plan-icon bg-secondary"></i></h1>-->
					<!--					<h6 class="text-uppercase font-weight-semibold text-secondary">Refer and Earn</h6>-->
					<!--				</div>-->
									
					<!--			</div>-->
					<!--		</div>-->

					<!--	</a>-->
						
					<!--</div>-->


				</div>
			
			</div>
		</div>
		<?php if($showGuide == "show"){?>
			<div class="modal" id="modaldemo4">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content tx-size-sm">
						<div class="modal-body tx-center pd-y-20 pd-x-20">
							<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
							<h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
							<p class="mg-b-20 mg-x-20">You are loggedin successfully.</p>
							<p class="mg-b-20 mg-x-20">Please update your profile to get relevant scholarship alerts</p><a  href="<?php echo base_url('personal-details?evervisited=false')?>"><button  class="btn ripple btn-success pd-x-25" type="button">Continue</button></a>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		<!-- End Main Content-->
		<?php if($this->session->flashdata('profile-success')){?>		
			<Script>
				swal({
					title: 'Well done!',
					text: 'Your Profile Updated!',
					type: 'success',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
			<?php }?>