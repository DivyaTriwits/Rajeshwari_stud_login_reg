<!--bootstrap validation-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>

    			<div class="main-content pt-5 mt-5">
				<div class="container fuild">

					<!-- Page Header -->
		<!-- <div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">


						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Home</a></li>
							<li class="breadcrumb-item active">Need Help</li>
						</ol>
					</nav>
				</div>
			</div> -->
			<!-- End Page Header -->
			<!-- Row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body" >
							
								<form class="cmxform" id="passwordForm" method="post" action="<?php echo base_url('change-password')?>">
									
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label">Old Password  <span class="text-danger">*</span></label>
													<div class="controls">
														<input type="password" class="form-control" placeholder="Old Password" name="old_password" id="old_password" required="">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label">New Password  <span class="text-danger">*</span></label>
													<div class="controls">
														<input type="password" class="form-control" placeholder="New Password" name="new_password" id="new_password" required="" >
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label">Confirm Password  <span class="text-danger">*</span></label>
													<div class="controls">
														<input type="password" onkeyup="changePassword();" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required=""> <span id='message'></span>
													</div>
												</div>
											</div>

										</div>
										<input class="btn btn-primary" type="submit" value="Submit" style="background-color:#41044D !important;border-color:#41044D !important">
										<button id="resetbtn" type="reset" class="btn btn-secondary">Reset</button>
									
								</form>
							
							<!-- </div> -->
							<!-- </div> -->
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

<?php if($this->session->flashdata('fail-to-change-password')){?>    
<Script>
  swal({
    title: 'Reset password!',
    text: 'Failed, , old password did not match!',
    type: 'error',
    timer: 3000,
    showConfirmButton: false
  });
</Script>
<?php }?>

<!-- BootstrapValidator JS -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
<script>        
$(document).ready(function() {
    // alert();
    $('#passwordForm').bootstrapValidator({
         fields: {
            old_password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    },
                    stringLength: {
                        min: 8,
                        max: 20,
                        message: 'Please enter 8 characters long combination of upper & lowercase, number & 1 special character'
                    }
                }
                
            },
            new_password: {
                validators: {
                    notEmpty: {
                        message: 'New password is required'
                    },
                    stringLength: {
                        min: 8,
                        max: 20,
                        message: 'Please enter 8 characters long combination of upper & lowercase, number & 1 special character'
                    },
                    // identical: {
                    //     field: 'confirm_password',
                    //     message: '<br> The password and its confirm are not the same'
                    // }
                }
                
            },
           confirm_password: {
                validators: {
                    notEmpty: {
                        message: 'Confirm password is required'
                    },
               
                    identical: {
                        field: 'new_password',
                        message: 'The password and its confirm are not the same'
                    }
                    

                }
                
            }
            

        }
    }) .on('success.form.bv', function(e) {
        $(this)[0].submit();
    });
});
</script>