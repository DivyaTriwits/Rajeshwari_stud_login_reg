<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=ues" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url()?>assets/img/brand/sc logo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
	<!-- Title -->
	<title>The Global Scholarship</title>

	<!-- Bootstrap css-->
	<link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

	<!-- Icons css-->
	<link href="<?php echo base_url()?>assets/css/icons.css" rel="stylesheet"/>

	<!-- Style css-->
	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/dark-boxed.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/boxed.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/skins.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/dark-style.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/colors/hide.css" rel="stylesheet">
	<!-- Color css-->
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/css/colors/color.css">

	<!-- Select2 css -->
	<link href="<?php echo base_url()?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">


	<!-- Internal RatingThemes css-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/ratings.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-1to10.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-movie.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-square.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-pill.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-reversed.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-horizontal.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/fontawesome-stars.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/css-stars.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bootstrap-stars.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/fontawesome-stars-o.css">


	<!-- P-SCROLL css-->
	<link href="<?php echo base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">

	<!-- Internal DataTables css-->
	<link href="<?php echo base_url()?>assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet"/>

	<link href="<?php echo base_url()?>assets/plugins/prism/prism.css" rel="stylesheet">
	<!-- Switcher css-->
	<link href="<?php echo base_url()?>assets/switcher/css/switcher.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/switcher/demo.css" rel="stylesheet">
	<!-- Internal Gallery css-->
	<link href="<?php echo base_url()?>assets/plugins/gallery/gallery.css" rel="stylesheet">
	<!-- Internal Specturm-color picker css-->
	<link href="<?php echo base_url()?>assets/plugins/spectrum-colorpicker/spectrum.css" rel="stylesheet">

	<!-- Internal Ion.rangeslider css-->
	<link href="<?php echo base_url()?>assets/plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
	<!-- Internal Sweet-Alert css-->
	<link href="<?php echo base_url()?>assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">
	<script src="<?php echo base_url()?>assets/plugins/sweet-alert/sweetalert.min.js"></script>
	<script src="<?php echo base_url()?>assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>
	<!-- Bootstrap Validations -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		.has-error .help-block {
			color: red;
		} 
		.has-success .help-block {
			color: green;
		} 

		.reg-logo{
			max-width: 25% !important;
		}
		#bewakoof{
		   max-width: 50% !important; 
		}
		@media (max-width: 640px) {
			.reg-logo{
				max-width: 50% !important;
				max-height:20% !important;;
			}
			#bewakoof{
		   max-width: 75% !important; 
		   
		}
		}
	</style> 



</head>

<body class="horizontalmenu" >
	<!-- Page -->
	<div class="page ">
		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages  justify-content-center text-center sign-2" style="width:80% !important;">
				<div class="col-md-12 col-xl-6 ">
					<div class="sign1">
						<div class="card" >
							<div class="">

								<div class="card-body mt-2 mb-2">

									<div class="text-center">
										<img align="center"   src="<?php echo base_url()?>assets/img/brand/sc logo.png" class="reg-logo" alt="logo" >
									</div>
							
									
									  

									<div class="clearfix"></div>

									<form id="supportLoginForm" method="post" action="<?php echo base_url();?>student-account-details/<?php echo $this->uri->segment(2);?>">
										<h5 class="text-center mb-5 mt-2">Get Registered</h5>
										<!-- <p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to Continue in our website</p> -->
										<div class="form-group text-left">
											<label class="">Email</label>
											<input class="form-control rounded-11" name="email" id="email" placeholder="Student Email" type="email"  autocomplete="off" required>
										</div>

										<div class="form-group text-left">
											<label class="">WhatsApp No</label>
											<input

											pattern="[0-9]{1,10}"  maxlength="10" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"

											class="form-control rounded-11" name="mobile_number" id="mobile_number" placeholder="Student Mobile Number" type="tel"  autocomplete="off" required>

											<input type="hidden" name="uniqueNumber" id="uniqueNumber" value="<?php if($student!=''){echo $student->student_username;}?>">
										</div>


										<div class="form-group text-left">
											<label class="">Password</label>
											<input class="form-control rounded-11" name="password" id="password" placeholder="Password" type="password" autocomplete="off" required>
										</div>

										<div class="form-group text-left">
											<label class="">Confirm Password</label>
											<input class="form-control rounded-11" name="confirm_password" id="confirm_password" placeholder="Confirm Password" type="password" autocomplete="off" required>

											<input class="form-control rounded-11" name="payable_amount" id="payable_amount" type="hidden" autocomplete="off" value="<?php echo $getSubscriptionPakages->id?>" required>

											<!-- 	<input class="form-control rounded-11" name="referal_code" id="referal_code"  type="hidden" value="<?php echo $this->input->get('rcode');?>" autocomplete="off" required> -->

										</div>
										<!--<div class="form-group mb-4 mt-4 text-left">-->
										<!--	<label class="custom-control custom-checkbox mb-0">-->
										<!--		<input checked type="checkbox" name="terms_and_conditions" class="form-control custom-control-input" required>-->
										<!--		<span class="custom-control-label">I agree to the <a data-effect="effect-fall" data-toggle="modal" href="#term-and-condition">Terms and Conditions</a></span>-->
										<!--	</label>-->
										<!--</div>-->
										<div class="row">
											<?php if($this->input->get('rcode') !=''){?>
												<div class="row d-none">
													<div class="col-md-6 mb-3">
														<label><b>Referral Code</b></label>
														<input class="form-control" value="<?php echo $this->input->get('rcode');?>" type="text" id="referal_code" name="referal_code" minlength = "12" maxlength="12" placeholder="Enter your referral code if you have any">
														<div class="invalid-feedback">
															<small></small>
														</div>
														<span id="validCode"></span>
														<span id="invalidCode"></span>
													</div>
												</div>
											<?php }?>
											<?php if($this->input->get('scode') !=''){?>
												<div class="row d-none">
													<div class="col-md-6 mb-3">
														<label><b>Referral Code</b></label>
														<input class="form-control" value="<?php echo $this->input->get('scode');?>" type="text" id="referal_code" name="sales_code" minlength = "12" maxlength="12" placeholder="Enter your referral code if you have any">
														<div class="invalid-feedback">
															<small></small>
														</div>
														<span id="validCode"></span>
														<span id="invalidCode"></span>
													</div>
												</div>
											<?php }?>

											<!-- <?php if(!$isValidReferralCode) {?>
												<input type="hidden" name="totalPayableAmt">
											<?php }else{?>
												<input type="hidden" name="totalPayableAmt">
												<?php }?> -->
												<?php if(($this->input->get('scode')!='')||($this->input->get('rcode')!='')){?>
												    <?php if($this->input->get('rcode') != '' && $isValidReferralCode != '')
												    {?>
												    <i class="text-success">Referral code Applied!!</i>
												    <?php }else if($this->input->get('scode') && $isValidReferralCode != '') {?>
												    	<?php $referralData = $this->Student_model->getReferralOffersById(1);
															if($referralData->num_rows() > 0 ){
															$referralDiscountAmt = $referralData->row()->discount_on_referral;
														}?>
													<?php if($this->input->get('scode')!=''&&$referralDiscountAmt=='0'){?>
													
													<i class="text-success"></i>
													<?php } else{?>
													  	<i class="text-success">Discount Code Applied</i>  
												<?php }?>
											
												    <?php }else{?>
													<i class="text-danger">Code is not valid!!</i>
												<?php }?>
											<?php }?>

												<div class="col-12 mt-3">
													<!-- <a href="Razorpay/pay"></a> -->

													<button type="submit" class="btn btn-primary rounded-11 btn-block" target="_blank" id="amount_pay" style="background-color: #460056; border-color: #460056">
                                                     Register
													</button>
												</div>
													<div class="float-left"style="margin-top:10px" >
								<!--    <div>-->
								<!--		<img  id="bewakoof"align="center" src="<?php echo base_url()?>assets/img/bewakof.jpg" >-->
								<!--</div>-->
								 <!--<div>-->
									<!--	<span style="margin-bottom:0px;margin-right:95px;font-size:12px">bewakoof.com</span><br></br>-->
									<!--	<span style="margin-bottom:0px;margin-right:20px;font-size:12px">Extra&nbsp;20%&nbsp;Off&nbsp;on&nbsp;Rs.599&nbsp;or&nbsp;more</span><br></br>-->
									<!--	<span style="margin-bottom:0px;margin-right:25px;font-size:12px">Expires: 31st Dec 2021 T&C</span><br></br>-->
									
									<!--		</div></div>--></div>
											</div>

										</form>
										<br>
										<!-- <div class="col-md-12 mb-2" >
											<p style="text-align: center; margin-top:-12px;">Already a member?  <a href="https://www.theglobalscholarship.org/student-login"> <b>LOGIN</b></a></p>

											<p style="text-align: center;">Any Queries? Call us on <a href="tel:+919620030302">+919620030302</a>, <a href="tel:+919620030308">+919620030308</a> OR <a href="tel:+918892278892">+918892278892</a></p>
										</div> -->
									</div>
									<!-- <hr> -->
									<!-- <i style="font-size:10px;line-height: normal;">Disclaimer:<br>1. The Global Scholarship (TGS) does not give any scholarship or guarantee of scholarship to any of our clients / subscribers. We help students in choosing the right scholarship also try that candidates should participate in all the possible scholarships as per the eligibility criteria.</i>
										<br><i style="font-size: 10px;line-height: normal;">2. Subscription fees paid once will not be refunded</i> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
					
					<!-- Modal effects -->
			<!--<div class="modal" id="term-and-condition" >-->
			<!--	<div class="modal-dialog modal-dialog-centered" role="document">-->
			<!--		<div class="modal-content modal-content-demo">-->
			<!--			<div class="modal-header">-->
			<!--				<h6 class="modal-title">TERMS & CONDITIONS</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>-->
			<!--			</div>-->
			<!--			<div class="modal-body">-->
			<!--				<p>I authorize The Global Scholarship to contact me in relation to its product(s) and/or service(s) and permit The Global Scholarship to store my details/information for future communications purposes. I also hereby expressly waive the Do Not Call (DNC)/Do Not Disturb (DND) registrations on my mobile number for contacting me with respect to the same.</p>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
			<!-- End Modal effects-->
			
			<style>
			    .modal-backdrop
{
    opacity:0.5 !important;
}
			</style>
			
				</div>
				<!-- End Row -->

			</div>
			<!-- End Page -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
		<!--Internal Apexchart js-->
		<script src="<?php echo base_url()?>assets/js/apexcharts.js"></script>

		<!-- Internal Chart.Bundle js-->
		<script src="<?php echo base_url()?>assets/plugins/chart.js/Chart.bundle.min.js"></script>


		<!-- Peity js-->
		<script src="<?php echo base_url()?>assets/plugins/peity/jquery.peity.min.js"></script>

		<!-- Internal Data Table js -->
		<script src="<?php echo base_url()?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/jszip.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/pdfmake.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/vfs_fonts.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/table-data.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Select2 js-->
		<script src="<?php echo base_url()?>assets/plugins/select2/js/select2.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/select2.js"></script>

		<!-- Sidebar js -->
		<script src="<?php echo base_url()?>assets/plugins/sidebar/sidebar.js"></script>

		<!-- INTERNAL INDEX js -->
		<script src="<?php echo base_url()?>assets/js/index.js"></script>

		<!-- Sticky js -->
		<script src="<?php echo base_url()?>assets/js/sticky.js"></script>

		<!-- Custom js -->
		<script src="<?php echo base_url()?>assets/js/custom.js"></script>

		<!-- Switcher js -->
		<script src="<?php echo base_url()?>assets/switcher/js/switcher.js"></script>

		<!-- Internal Clipboard js-->
		<script src="<?php echo base_url()?>assets/plugins/clipboard/clipboard.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/clipboard/clipboard.js"></script>

		<!-- Internal Prism js-->
		<script src="<?php echo base_url()?>assets/plugins/prism/prism.js"></script>
		<!-- Internal Gallery js-->
		<script src="<?php echo base_url()?>assets/plugins/gallery/picturefill.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lightgallery.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lightgallery-1.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lg-pager.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lg-autoplay.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lg-fullscreen.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lg-zoom.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lg-hash.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lg-share.js"></script>
		<!-- Internal Sweet-Alert js-->


		<!-- Internal Form-elements js-->
		<script src="<?php echo base_url()?>assets/js/form-elements.js"></script>
		<!-- Internal Jquery-Ui js-->
		<script src="<?php echo base_url()?>assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!-- Internal Jquery.maskedinput js-->
		<script src="<?php echo base_url()?>assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>

		<!-- Internal Specturm-colorpicker js-->
		<script src="<?php echo base_url()?>assets/plugins/spectrum-colorpicker/spectrum.js"></script>

		<!-- Internal Ion-rangeslider js-->
		<script src="<?php echo base_url()?>assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

		<script src="<?php echo base_url()?>assets/plugins/rating/jquery.barrating.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/rating/ratings.js"></script>


		<script type="text/javascript">


			$('#example-pill').barrating('show', {
				theme: 'bars-pill',
				initialRating: 'A',
				showValues: true,
				showSelectedRating: false,
				allowEmpty: true,
				emptyValue: '-- no rating selected --',
				onSelect: function(value, text) {
					alert('Selected rating: ' + value);

					document.getElementById('actualRating').value=value;
				}
			});

		</script>



		<?php if($this->session->flashdata('continue-registration')){?>		
			<Script>
				swal({
					title: 'Registration!',
					text: 'welcome back, please complete your registration!',
					type: 'info',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>

		<?php if($this->session->flashdata('email-already-exists')){?>		
			<Script>
				swal({
					title: 'Registration!',
					text: 'Account already registered with this email, please use different email!',
					type: 'error',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>





		<?php if($this->session->flashdata('update-student-registration-failure')){?>		
			<Script>
				swal({
					title: 'Registration!',
					text: 'Failed to add details,Please Try Agian',
					type: 'error',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>


		<?php if($this->session->flashdata('session-creation-error')){?>		
			<Script>
				swal({
					title: 'Reset Password !',
					text: 'Failed to create session!',
					type: 'error',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>


		<?php if($this->session->flashdata('reset-link-expired-error')){?>		
			<Script>
				swal({
					title: 'Reset Password!',
					text: 'Reset password link has expired!',
					type: 'error',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>


		<?php if($this->session->flashdata('password-reset-success')){?>		
			<Script>
				swal({
					title: 'Password Reset!',
					text: 'Password Reset success!',
					type: 'success',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>


		<?php if($this->session->flashdata('password-reset-error')){?>		
			<Script>
				swal({
					title: 'Reset Password!',
					text: 'Failed to reset the password!',
					type: 'error',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>





		<script>
			$(document).ready(function() {

				$('#supportLoginForm').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',

						validating: 'glyphicon glyphicon-refresh'
					},
					fields: {
						email: {
							message: 'Email is not valid',
							validators: {
								notEmpty: {
									message: ' Email is required'
								},
								emailAddress: {
									message: 'Please provide valid email address'
								}
                    // regexp: {
                    // regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                    //  message: '<br >'
                    // }

                }
            },


            mobile_number: {
            	validators: {
            		notEmpty: {
            			message: ' Whatsapp mobile number is required'
            		},
            		stringLength: {
            			min: 10,
            			max: 10,
            			message: ' Whatsapp number must have 10 digits'
            		},
            		regexp: {
            			regexp: /[0-9]/,
            			message: ' <br > Whatsapp number can only consist of digits'
            		}

            	}
            },
            password: {
            	validators: {
            		notEmpty: {
            			message: 'Password is required and cannot be empty'
            		},
            		stringLength: {
            			min: 5,
            			max: 16,
            			message: 'Password must be more than 4 and less than 17 characters long'
            		}
            	}

            },
            
            confirm_password: {
            	validators: {
            		notEmpty: {
            			message: 'Password is required and cannot be empty'
            		},
            		identical: {
            			field: 'password',
            			message: 'password and its confirm are not the same'
            		}
            	}

            },
            // terms_and_conditions: {
            // 	validators: {
            // 		notEmpty: {
            // 			message: 'You must agree to the terms and conditions'
            // 		},
            // 	}

            // },
            


        }
    }) .on('success.form.bv', function(e) {
    	$(this)[0].submit();
    });
});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#referal_code').keyup(function(){
			var id=$(this).val();
			alert(id);

			$.ajax({

				url : "<?php echo site_url('verify-refferal');?>",
				method : "POST",
				data : {id: id},
				async : true,
				dataType : 'json',
				success: function(data){

                		// var html = '<option value="" selected disabled>Select Category</option>';
                		var i;
                		// for(i=0; i<data.length; i++){

                		// 	html += '<option value="'+data[i].categ_id+'">'+data[i].category_name+'</option>';

                		// }
                		// alert(data);
                		if(data)
                		{
                			
                			$('#webinarname').html('this webinar name already exist');
                			$('.check-webinar').prop('disabled',true);
                			
                		}
                		else
                		{
                			$('#webinarname').html('');
                			$('.check-webinar').prop('disabled',false);

                		}

                		

                	}
                });
			return false;

		}); 

	});
</script>


</body>

</html>




