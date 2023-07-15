
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
#basicSlider .MS-content {
    white-space: nowrap;
    overflow: hidden;
    margin: 0 !important;
    height: auto;
}
.bg-secondary {
    background-color: #41044D !important;
}
h6{
    color:#F2B625 ;
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
			    	<!-- Row -->
			    	<div class="container" style="padding-right:16px !important;padding-left:16px !important;">
						<div class="row">
							<div class="col-md">
							 	<div class="">
											<!--<h6 class="main-content-label mb-1 "align="center">Scholarships</h6>-->
											
										</div>
			    	<div id="basicSlider" style="margin-bottom:-30px !important">
											<div class="MS-content" >
												<?php $index= 1; foreach($some as $other):?>
												<div class="item"  style="margin-right:10px !important;">
												    	<a href="https://www.theglobalscholarship.org/scholarships-details/<?php echo $other->scholarship_id?>">
													<div class="card"  style="height:120px !important;">
														<div class="row" style="padding-top:20px;padding-left:12px">
															<div class="col-3">
														<div style="background-color: #41044D; border-radius: 5px ; padding:12px;color:#F2B625 !important; height:78px !important; width:75px !important" align="center">
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
													<div class="col-8">
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
						</div>
						<!-- End Row -->
				<div class="container">
						
						<!-- Row -->
				
							<div class="row text-center" >
				
					<div class="col-lg-6 col-md-8" style="padding-top:12px">
						<a href="<?php echo base_url('scholarships-lists')?>">
							<div class="card plan-card" style="margin-bottom:4px !important">
								<div class="card-block">
									<div class="shadow-base p-2">
										<h1 class="pt-2"><i class="shadow-base fa fa-graduation-cap plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary"style="color:#F2B625 !important">Scholarship List</h6>
									</div>

								</div>
							</div>
						</a>

					</div>
						<div class="col-lg-6 col-md-8 "style="padding-top:12px" >
						<a href="<?php echo base_url('student_profile')?>">
							<div class="card plan-card" style="margin-bottom:4px !important">
								<div class="card-block">
									<div class="shadow-base p-2">
										<h1 class="pt-2"><i class="shadow-base fe fe-user plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary" style="color:#F2B625 !important">Update Profile</h6>
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
							    	<div class="text-wrap " style="margin-bottom:4px !important;margin-top:12px !important ">
		   	<div class="demo-static-toast" >
					<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" style="border-radius:10px !important">
				<div class="toast-header">
						            	<h6 class="tx-14 mg-b-0 mg-r-auto"><span class="">Invite Friends</span></h6>
						            <a target = "_blank"
											class="whatsapp"
											href="https://api.whatsapp.com/send?text=Hey! I just found this awesome website which helps students to find upcoming scholarships. https://theglobalscholarship.org/student-promotion-register?rcode=<?php if($getEachReferralCode!='') echo $getEachReferralCode->referral_code?> Register now and thank me later.." data-action="share/whatsapp/share">
											
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
														    <a href="https://t.me/theglobalscholarship" target = "_blank">	<img  src="<?php echo base_url()?>dashboard_assets/telegram.png"style="height: 18px;"></a>
														    	&nbsp;
                                                           <a href="https://www.youtube.com/c/theglobalscholarshiporg" target="_blank" >
															
																<img  src="<?php echo base_url()?>dashboard_assets/youtubes.png"style="height: 25px;">
															</a>
															
																<a href="https://instagram.com/the_global_scholarship" target="_blank">
																<!--<button type="button" class="btn ripple btn-pink">-->
																<!--	<i class="fe fe-instagram"></i>-->
																<!--</button>-->
																<img  src="<?php echo base_url()?>dashboard_assets/instagram.png"style="height: 35px;">
															</a>
															&nbsp;
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