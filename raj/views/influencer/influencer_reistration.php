
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
		@media (max-width: 640px) {
			.reg-logo{
				max-width: 50% !important;
			}
		}
	</style> 



</head>

<body class="horizontalmenu" >






	<!-- Page -->
	<div class="page">

		





		<!-- Page -->
		<div class="page main-signin-wrapper">
			<!-- <div class="example"> -->					
				<!-- </div> -->
			<div class="row signpages  justify-content-center text-center sign-2" style="width:80% !important;">
				<div class="col-md-12 col-xl-6 ">
					<div class="sign1">
						<div class="card" >
							<div class="">

								<div class="card-body mt-2 mb-2">

									<div class="text-center">
												<img align="center" style="max-width: 25%"  src="<?php echo base_url()?>assets/img/brand/sc logo.png" class="reg-logo" alt="logo" >
											</div>
											<div class="clearfix"></div>
											<form id="studentRegistrationForm" method="post" action="<?php echo base_url()?>add-influencer">
												<h5 class="text-center mb-5 mt-2"></h5>
												<div class="form-group text-left">
													<label class="">Full Name</label>
													<input class="form-control rounded-11" name="full_name" id="full_name" placeholder="Full Name" type="text" autocomplete="off" required>
													
												</div>

												<div class="form-group text-left">
													<label class="">Mobile No</label>
													<input
													pattern="[0-9]{1,10}"  maxlength="10" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"
													class="form-control rounded-11" name="mobile_no" id="mobile_no" placeholder="Mobile Number" type="tel" autocomplete="off" required>
												</div>


												<div class="form-group text-left">
													<label class="">Email</label>
													<input class="form-control rounded-11" name="email" id="email" placeholder="Email" type="email" autocomplete="off" required>
												</div>



												<div class="form-group text-left">
													<label class="">Password</label>

													<input class="form-control rounded-11" name="password" id="password" placeholder="password" type="password" autocomplete="off" required>
												</div>


												<div class="row">



													<div class="col-12 mt-3">
														<input type="submit" class="btn btn-primary rounded-11 btn-block" value="Submit" style="background-color: #460056; border-color: #460056">
													</div>



												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
				<!-- End Page -->

				<!-- Modal effects -->
				<div class="modal" id="term-and-condition" >
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">TERMS & CONDITIONS</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<p>I authorize The Global Scholarship to contact me in relation to its product(s) and/or service(s) and permit The Global Scholarship to store my details/information for future communications purposes. I also hereby expressly waive the Do Not Call (DNC)/Do Not Disturb (DND) registrations on my mobile number for contacting me with respect to the same.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Modal effects-->

			</div>
			<!-- End Page -->

			<!-- Back-to-top -->
			<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
			<style>
				.modal-backdrop
				{
					opacity:0.5 !important;
				}
			</style>
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



			<?php if($this->session->flashdata('account-already-exists')){?>		
				<Script>
					swal({
						title: 'Registration!',
						text: 'Already registered!',
						type: 'error',
						timer: 3000,
						showConfirmButton: false
					});
				</Script>
			<?php }?>

			<?php if($this->session->flashdata('add-student-registration-failure')){?>		
				<Script>
					swal({
						title: 'Registration!',
						text: 'Registration Failed!',
						type: 'error',
						timer: 3000,
						showConfirmButton: false
					});
				</Script>
			<?php }?>


			<?php if($this->session->flashdata('logout-success')){?>		
				<Script>
					swal({
						title: 'Logout!',
						text: 'Logout success!',
						type: 'success',
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

					$('#studentRegistrationForm').bootstrapValidator({
						message: 'This value is not valid',
						feedbackIcons: {
							valid: 'glyphicon glyphicon-ok',

							validating: 'glyphicon glyphicon-refresh'
						},
						fields: {
							full_name: {
								validators: {
									notEmpty: {
										message: 'Full name is required '
									},

								}
							},


							mobile_no: {
								validators: {
									notEmpty: {
										message: 'Mobile number is required  '
									},
									stringLength: {
										min: 10,
										max: 10,
										message: 'Mobile number must have 10 digits'
									},
									regexp: {
										regexp: /[0-9]/,
										message: ' <br >Mobile number can only consist of digits'
									}

								}
							},
							email: {
								validators: {
									notEmpty: {
										message: 'Email is required '
									},

								}
							},
							password: {
								validators: {
									notEmpty: {
										message: 'Password is required'
									},

								}
							},
				// 			terms_and_conditions: {
				// 				validators: {
				// 					notEmpty: {
				// 						message: 'You must agree to the terms and conditions'
				// 					},
				// 				}

				// 			},



						}
					}) .on('success.form.bv', function(e) {
						$(this)[0].submit();
					});
				});
			</script>



		</body>

		</html>




		<!-- <script> 
			$(document).ready(function() { 
        	// alert();

        	setTimeout(function(){ 
        		$('#toastModal').toast('show');
        	},6000);

        }); 

    </script> 
    <script type="text/javascript">
    	window.setTimeout(function () {
    		$("#toastModal").fadeTo(500, 0).slideUp(500, function () {
    			$(this).remove();
    		});
    	}, 2000);
    </script> -->
    <script type="text/javascript">
    	$('#element').toast('show');
    </script>


   