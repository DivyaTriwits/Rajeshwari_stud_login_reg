
<!-- Main Content-->
<div class="main-content pt-4 mt-5 mb-5">
	<div class="container fuild">

		<!-- Page Header -->
		<!-- <div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('student_profile')?>">Student Profile</a></li>
							<li class="breadcrumb-item active">Personal Details</li>
						</ol>
					</nav>
				</div>
			</div> -->
			<!-- End Page Header -->
			<!-- Row -->
			<?php if ($this->session->flashdata('profile-update')) { ?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Profile Update Success....!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
	<?php
} ?>
			<div class="row ">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h6 class="main-content-label mb-1">Personal Details</h6>

							</div>


							<form id=studentsPersonalForm method="POST" enctype="multipart/form-data" action="<?php echo base_url('influencer-profile-update')?>">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Full Name  </p>
											<input type="text" class="form-control" name="name" id="name"
											value="<?php if($getInfluencer!=''){echo $getInfluencer->full_name;}?>" placeholder="Full Name">
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Mobile Number <span class="tx-danger">*</span> <i class="ion-help-circled" data-toggle="tooltip" title="we will use this to send notification via SMS or Call"></i></p>
											<input pattern="[0-9]{1,10}"  maxlength="10"  
											oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"
											type="text" class="form-control" value="<?php if($getInfluencer!=''){echo $getInfluencer->influencer_mobile_no;}?>" name="mobile" placeholder="Mobile Number">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10"> Email  </p>
											<input type="email" class="form-control" name="email" value="<?php if($getInfluencer!=''){echo $getInfluencer->influencer_email;}?>" placeholder="Email" >
										</div>
									</div>


								</div>
								
								<button style="background-color: #ff7f45; border-color: #ff7f45" type="Submit" class="btn ripple btn-primary float-right">Submit</button>
								

							</form>
						</div>

					</div>
				</div>
				<!-- End Row -->
			</div>


		</div>
		
	</div>
	<?php if($this->session->flashdata('update-profile')){?>		
		<Script>
			swal({
				title: 'Well done!',
				text: 'Your Profile Details Updated!',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>

	<script>
		$(document).ready(function() {
			$('#studentsPersonalForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
        // 	valid: 'glyphicon glyphicon-ok',
        // 	invalid: 'glyphicon glyphicon-remove',
        // 	validating: 'glyphicon glyphicon-refresh'
    },

    fields: {

    	name: {

    		validators: {
    			notEmpty: {
    				message: 'The name is required'
    			},
    		}
    	},
    	email: {

    		validators: {
    			notEmpty: {
    				message: 'The email is required'
    			},
    		}
    	},
    	mobile: {
    		validators: {
    			notEmpty: {
    				message: 'The mobile number is required'
    			},
    			stringLength: {
    				min: 10,
    				max: 10,
    				message: 'The student whatsapp number. must be 10 digits'
    			},
    			regexp: {
    				regexp: /[0-9]/,
    				message: ' <br >The student whatsapp number. can only consist of digits'
    			}
    		}
    	},
    	addharcard_no: {
    		validators: {
        			// notEmpty: {
        			// 	message: 'aadhar number is required'
        			// },
        			stringLength: {
        				min: 12,
        				max: 12,
        				message: 'The aadhar number. must be 12 digits'
        			},
        			regexp: {
        				regexp: /[0-9]/,
        				message: ' <br >The aadhar number number. can only consist of digits'
        			}
        		}
        	},


        	mobile: {

        		validators: {
        			notEmpty: {
        				message: 'The student mobile number  is required'
        			},
        			stringLength: {
        				min: 10,
        				max: 10,
        				message: 'The student mobile number must be 10 digits'
        			},
        			regexp: {
        				regexp: /[0-9]/,
        				message: ' <br >The student mobile number can only consist of digits'
        			}
        		}
        	},  
        	current_age: {
        		validators: {
        			notEmpty: {
        				message: 'The student age is required'
        			},
        			regexp: {
        				regexp: /[0-9]/,
        				message: ' <br >The age can only consist of digits'
        			}
        		}
        	}        
        }
    }).on('success.form.bv', function(e) {
    	$(this)[0].submit();
    });
});
</script>

