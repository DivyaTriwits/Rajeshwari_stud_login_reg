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



<script>        
$(document).ready(function() {
    // alert();
    $('#passwordForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
         fields: {
            old_password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    },
                    stringLength: {
                        min: 5,
                        max: 16,
                        message: 'Password must be more than 4 and less than 17 characters long'
                    }
                }
                
            },
            new_password: {
                validators: {
                    notEmpty: {
                        message: 'New password is required'
                    },
                    stringLength: {
                        min: 5,
                        max: 16,
                        message: 'Password must be more than 4 and less than 17 characters long'
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