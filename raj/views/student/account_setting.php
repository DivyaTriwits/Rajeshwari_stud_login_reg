<!-- Main Content-->
<div class="main-content pt-5 mt-5 mb-5">
	<div class="container fuild">

		<!-- Page Header -->
		<!-- <div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">


						<li class="breadcrumb-item">
							<a href="<?php echo base_url() ?>">Home</a></li>
							<li class="breadcrumb-item active">Need Help</li>
						</ol>
					</nav>
				</div>
			</div> -->
			<!-- End Page Header  -->

			<?php if($data->student_name){	
				date_default_timezone_set('Asia/Kolkata');
				?>
				
				<div class="card" style="color:#460056">
					<div class="card-body" >
						<h4 style="text-align: center;">
							<?php if($data->subscription_validity_datetime <= date('Y-m-d')){ 
							    echo 'Your Subscription has expired on '. $newEndingDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($data->subscription_validity_datetime))));
							} else{
								echo 'Your Subscription will end on '. $newEndingDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($data->subscription_validity_datetime))));

							 }?>
						</h4>
						<?php if($data->subscription_validity_datetime <= date('Y-m-d')){?>
						    <h4 id="renew" style="text-align: center;"><a href="<?php echo base_url('Razorpay/renewalPayements/'.$data->student_username.'?subscription=3');?>" class="btn ripple btn-primary" style='background-color:#460056;border-color:#460056'>Renew Now</a></h4>
						<?php }else{?>
						<h4 id="demo" style="text-align: center;"></h4>
						<?php }?>
					</div>
				</div>
			<?php }?>
			<!-- Row -->
			<!--<div class="row">-->
			<!--	<div class="col-lg-12">-->
			<!--		<div class="card">-->
			<!--			<div class="card-body" >-->
			<!--				<div>-->
			<!--					<h6 class="main-content-label mb-1">Account Setting</h6><br>-->
			<!--				</div>-->
			<!--				<div class="row">-->

			<!--					<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 pb-2">-->
			<!--						<a href="<?php echo base_url('reset-password') ?>" class="btn  btn-secondary  btn-rounded btn-block"style="background-color:#ff7f45;border-color:#ff7f45 ">Reset Password</a>-->
			<!--					</div>-->
			<!--					<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 pb-2">-->
			<!--						<a href="<?php echo base_url('earn-money-refer-friend') ?>" class="btn  btn-secondary  btn-rounded btn-block"style="background-color:#ff7f45;border-color:#ff7f45">Refer and Earn</a>-->
			<!--					</div>-->
			<!--					<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 pb-2">-->
			<!--						<a href="<?php echo base_url('redeem-details') ?>" class="btn  btn-secondary  btn-rounded btn-block"style="background-color:#ff7f45;border-color:#ff7f45">Redeem Requests</a>-->
			<!--					</div>-->
			<!--					<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 pb-2">-->
			<!--						<a href="<?php echo base_url('my-invoice') ?>" class="btn  btn-secondary  btn-rounded btn-block"style="background-color:#ff7f45;border-color:#ff7f45">My Invoice</a>-->
			<!--					</div>-->
			<!--					<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 pb-2">-->
			<!--						<a href="<?php echo base_url('login-details') ?>"class="btn  btn-secondary  btn-rounded btn-block"style="background-color:#ff7f45;border-color:#ff7f45 ">View Login Details</a>-->
			<!--					</div>-->
			<!--					<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 pb-2">-->
			<!--						<a href="<?php echo base_url('student-logout') ?>"class="btn  btn-secondary  btn-rounded btn-block"style="background-color:#ff7f45;border-color:#ff7f45 ">Signout</a>-->
			<!--					</div>-->
								
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
			<!-- Row -->
			<div class="row">
				<!-- <a data-target="#trackorder" class="nav-link" data-toggle="tab" role="tablist"><i class="fe fe-truck icon1"></i> Track Order</a> -->
				<div class="col-lg-12 col-md-12">
					<!-- <div class="card"> -->
						<div class="card" id="buttons">
							<div class="card-body">
								<div>
									<h6 class="main-content-label mb-1">Our Social Media</h6>

								</div>
								<!-- <div class="text-wrap"> -->
									<div class="example">
											<!-- <div class="btn-list">
											</div> -->
											<div id="social">
												
												<div class="btn-list">
													<div class="row">
														<div class="col-md-12">

															<a target="_blank" 
															href="https://www.facebook.com/theglobalscholarship"
															class="fb-xfbml-parse-ignore"
															style="margin-right: 15px"> <button type="button" class="btn ripple btn-primary">
																<i class="fe fe-facebook"></i>
															</button></a>
															<a href="https://instagram.com/the_global_scholarship" target="_blank" style="margin-right: 15px">
																<button type="button" class="btn ripple btn-pink">
																	<i class="fe fe-instagram"></i>
																</button>
															</a>
															<a href="https://www.youtube.com/c/theglobalscholarshiporg" target="_blank" style="margin-right: 15px">
																<button type="button" class="btn ripple " style="background-color: #FF0000">
																	<i class="typcn typcn-social-youtube"></i>
																</button>
															</a>
															<
											<!-- <a  href="">
												<button type="button" class="btn ripple btn-info" id="btn-share">Share</button>
											</a> -->
										</div>
									</div>
								</div>
							</div>
							<br>
							
						</div>
						
						<!-- </div> -->

					</div>
				</div>
				<!-- </div> -->
			</div>
		</div>
	
	</div>
</div>

<!-- Row -->




<?php if ($this->session->flashdata('update-success')) { ?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Your  Message successfully Sent....!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
	<?php
} ?>

<script>
	$(document).ready(function() {
		$('#contactForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
        	valid: 'glyphicon glyphicon-ok',
        	invalid: 'glyphicon glyphicon-remove',
        	validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	
        	name: {
        		validators: {
        			notEmpty: {
        				message: 'Name is required'
        			},

        			// regexp: {
        			// 	regexp: /[0-9]/,
        			// 	message: ' <br >The conatct number can only consist of digits'
        			// }
        		}
        	},
        	number: {
        		validators: {
        			notEmpty: {
        				message: 'The contact number is required'
        			},
        			stringLength: {
        				min: 10,acc
        				max: 10,
        				message: 'The contact number. must be 10 digits'
        			},
        			regexp: {
        				regexp: /[0-9]/,
        				message: ' <br >The conatct number can only consist of digits'
        			}
        		}
        	}          
        }
    }).on('success.form.bv', function(e) {
    	$(this)[0].submit();

    });                             
});
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo date($newEndingDate);?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    $.ajax({url: '<?php echo base_url();?>update-subscription'});
    clearInterval(x);
    // document.getElementById("demo").innerHTML = "EXPIRED";
    // document.getElementById("demo").innerHTML = "Renew now to get new scholaships<br><br><a href=\"<?php echo base_url('');?>\" class=\"btn ripple btn-primary\" style='background-color:#460056;border-color:#460056'\">Renew Now</a>";
  }
}, 1000);
</script>