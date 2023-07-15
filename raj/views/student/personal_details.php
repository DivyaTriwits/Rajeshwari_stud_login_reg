
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
			<div class="row ">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h6 class="main-content-label mb-1">Update Personal Details</h6>

							</div>


							<form id=studentsPersonalForm method="POST" enctype="multipart/form-data" action="<?php echo base_url('update-personal-details')?>">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Full Name  </p>
											<input type="text" class="form-control" name="name" 
											value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->student_fullname;}?>" placeholder="Full Name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Date Of Birth <span class="tx-danger">*</span> </p>
											<input type="date" class="form-control" name="dob" id="dob" value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->date_of_birth;}?>" placeholder="Date Of Birth" value="" >
										</div>
									</div>
									<!--<div class="col-md-4">-->
									<!--	<div class="form-group">-->
									<!--		<p class="mg-b-10">Age<span class="tx-danger">*</span></p>-->
									<!--		<input pattern="[0-9]{1,10}"  -->
									<!--		oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"-->
									<!--		type="text" class="form-control" value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->age;}?>" name="current_age" id="current_age"placeholder="Age">-->
									<!--	</div>-->
									<!--</div>-->
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Mobile Number <span class="tx-danger">*</span> <i class="ion-help-circled" data-toggle="tooltip" title="we will use this to send notification via SMS or Call"></i></p>
											<input pattern="[0-9]{1,10}"  maxlength="10"  
											oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"
											type="text" class="form-control" value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->student_mobile_no;}?>" name="mobile" placeholder="Mobile Number">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10"> Email  </p>
											<input type="email" class="form-control" name="email" value="<?php echo $this->session->userdata('registered_email')?>" placeholder="Email" readonly>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Whatsapp Number <span class="tx-danger">*</span> <i class="ion-help-circled" data-toggle="tooltip" title="we will use this to send notification via Whatsapp "></i></p>

											<input pattern="[0-9]{1,10}"  maxlength="10"  
											oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"
											type="text" class="form-control" name="whatsapp" value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->student_whatsapp_no;}?>" placeholder="Whatsapp Number">

										</div>
									</div>
									<!--<div class="col-md-4">-->
									<!--	<div class="form-group">-->
									<!--		<p class="mg-b-10">Aadhar Number</p>-->
									<!--		<input  pattern="[0-9]{1,12}"  maxlength="12"  -->
									<!--		oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"-->
									<!--		type="text" class="form-control" name="addharcard_no" value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->adharno;}?>" placeholder="Aadhar Number">-->

									<!--	</div>-->
									<!--</div>-->
<!-- 									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Gender <span class="tx-danger">*</span>  </p>
											<div class="row mg-t-4">

												<div class="col-lg-3">
													<label class="rdiobox"><input name="gender" type="radio" required 
														<?php if( $getRegistrationsData!=''&& $getRegistrationsData->student_gender=="Male") {echo "checked";}?> value="Male"> <span>Male</span></label>
													</div>
													<div class="col-lg-4 mg-t-15 mg-lg-t-0">
														<label class="rdiobox"><input  name="gender" type="radio" <?php if($getRegistrationsData!=''&& $getRegistrationsData->student_gender=="Female") {echo "checked";}?> value="Female"required><span>Female</span></label>
													</div>
													<div class="col-lg-5 mg-t-15 mg-lg-t-0" >
														<label class="rdiobox"><input  name="gender" type="radio" <?php if($getRegistrationsData!=''&& $getRegistrationsData->student_gender=="Transgender") {echo "checked";}?> value="Transgender"required><span>Transgender</span></label>
													</div>
												</div>
											</div>


										</div> -->
											<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Are you single child  <i class="ion-help-circled" data-toggle="tooltip" title="Are you only child of your parent's"></i></p>
												<!--<div class="row">-->
												<!--	<div class="col-lg-3">-->
												<!--		<label class="rdiobox"><input name="single_child" type="radio"<?php if($getRegistrationsData!=''&& $getRegistrationsData->is_single_child=="1") {echo "checked";}?> value="1"><span>Yes</span></label>-->
												<!--	</div>-->
												<!--	<div class="col-lg-3 mg-t-20 mg-lg-t-0">-->
												<!--		<label class="rdiobox"><input  name="single_child" type="radio"<?php if($getRegistrationsData!=''&& $getRegistrationsData->is_single_child=="0") {echo "checked";}?> value="0"><span>No</span></label>-->
												<!--	</div>-->
													
                                                    <select class="form-control select2-no-search" name="single_child" id="single_child" >
													<option selected="" disabled="">Select
													</option>

													<option value="1" <?php if($getRegistrationsData!='')echo($getRegistrationsData->is_single_child=='1')?'selected':'';?>>Yes

													</option>
													<option value="0" <?php if($getRegistrationsData!='')echo($getRegistrationsData->is_single_child=='0')?'selected':'';?>>No
													</option>
												</select>
												</div>
											</div>
										<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Gender <span class="tx-danger">*</span></p>
												<select class="form-control select2-no-search" name="gender" id="gender">
													<option selected="" disabled="">Select Gender</option>
													<option value="Male" <?php if($getRegistrationsData!='')echo($getRegistrationsData->student_gender=='Male')?'selected':'';?>>Male
													</option>
													<option value="Female" <?php if($getRegistrationsData!='')echo($getRegistrationsData->student_gender=='Female')?'selected':'';?>>Female
													</option>
													<option value="Transgender" <?php if($getRegistrationsData!='')echo($getRegistrationsData->student_gender=='Transgender')?'selected':'';?>>Transgender
													</option>
												</select>

											</div>
										</div>


										<!-- <div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Are you single girl child  <i class="ion-help-circled" data-toggle="tooltip" title="Are you only child girl of your parents"></i></p>
												<div class="row">
													<div class="col-lg-3">
														<label class="rdiobox"><input name="single_girl_child" type="radio" <?php if($getRegistrationsData!=''&& $getRegistrationsData->is_single_girl_child=="1") {echo "checked";}?> value="1"><span>Yes</span></label>
													</div>
													<div class="col-lg-3 mg-t-20 mg-lg-t-0">
														<label class="rdiobox"><input  name="single_girl_child"type="radio" <?php if($getRegistrationsData!=''&& $getRegistrationsData->is_single_girl_child=="0") {echo "checked";}?> value="0"><span>No</span></label>
													</div>

												</div>
											</div>

										</div> -->
										<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Are you single girl child  <i class="ion-help-circled" data-toggle="tooltip" title="Select Yes if you are the only girl child of your parents"></i></p>
												<select class="form-control select2-no-search" name="single_girl_child" id="single_girl_child" disabled="">
													<option selected="" disabled="">Select
													</option>

													<option value="1" <?php if($getRegistrationsData!='')echo($getRegistrationsData->is_single_girl_child=='1')?'selected':'';?>>Yes

													</option>
													<option value="0" <?php if($getRegistrationsData!='')echo($getRegistrationsData->is_single_girl_child=='0')?'selected':'';?>>No
													</option>
												</select>

											</div>
										</div>

									
										<!--</div>-->
									<!-- 	<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Handicap <i class="ion-help-circled" data-toggle="tooltip" title="are you physical handicap"></i></p>
												<div class="row">
													<div class="col-lg-3">

														<label class="rdiobox"><input name="handicap" id="handicap" type="radio" type="radio" <?php if($getRegistrationsData!=''&& $getRegistrationsData->is_specially_abled=="1") {echo "checked";}?> value="1"><span>Yes</span></label>
													</div>
													<div class="col-lg-3 mg-t-20 mg-lg-t-0">
														<label class="rdiobox"><input  name="handicap" id="handicap" type="radio" <?php if($getRegistrationsData!=''&& $getRegistrationsData->is_specially_abled=="0") {echo "checked";}?> value="0"><span>No</span></label>
													</div>

												</div>
											</div>

										</div> -->
										<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Are you Specially Abled <i class="ion-help-circled" data-toggle="tooltip" title="are you physical handicap ?"></i></p>
												<select class="form-control select2-no-search" name="handicap" id="handicap">
													<option selected="" disabled="">Select
													</option>

													<option value="1" <?php if($getRegistrationsData!='')echo($getRegistrationsData->is_specially_abled=='1')?'selected':'';?>>Yes

													</option>
													<option value="0" <?php if($getRegistrationsData!='')echo($getRegistrationsData->is_specially_abled=='0')?'selected':'';?>>No
													</option>
												</select>

											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Specially Abled Type <i class="ion-help-circled" data-toggle="tooltip" title="Please select the disability type"></i></p>
												<select class="form-control select2" name="specially_abled_type" id="specially_abled_type" disabled="">
													<option label="Choose one">
													</option>
													<?php if($getDisabilityType->num_rows()>0){foreach($getDisabilityType->result() as $row){?>
														<option <?php if($getRegistrationsData!='') { echo ($getRegistrationsData->specially_abled_type==$row->disability_name)  ? "selected" : " ";} ?> value="<?php echo $row->disability_name;?>">
															<?php  echo $row->disability_name;?>
														</option>
													<?php } } ?>

												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Specially Abled Percentage <i class="ion-help-circled" data-toggle="tooltip" title="Enter the % of your disability."></i></p>
												<input type="text" class="form-control" name="specially_abled_percentage" id="specially_abled_percentage"value="<?php if($getRegistrationsData!='' && $getRegistrationsData->specially_abled_percentage!='0.00' ){echo $getRegistrationsData->specially_abled_percentage;}?>"placeholder="Specially Abled Percentage" disabled="">
											</div>
										</div>

										<!--<div class="col-md-4">-->
										<!--	<div class="form-group">-->
										<!--		<p class="mg-b-10">Upload Your Passport Size Photo  <i class="ion-help-circled" data-toggle="tooltip" title="Upload Your Passport Size Photo"></i></p>-->
										<!--		<input type="file" class="form-control" name="photo" id="photo" onchange="return photoValidation()">-->
										<!--		<br ><p id="photo_error_info" style="color:red"></p>-->
										<!--	</div>-->
										<!--</div>-->

									</div>
									<a href="<?php echo base_url('academic-details')?>">
										<button style="background-color: #ff7f45; border-color: #ff7f45" type="Submit" class="btn ripple btn-primary float-right">Next</button>
									</a>
								
								</form>
							</div>

						</div>
					</div>
					<!-- End Row -->
				</div>

				
			</div>
			<!-- <div class="icon-bar">
				<a href="<?php echo base_url('student_profile')?>">
					<button type="button" class="btn ripple float-left" style="background-color:#ff7f45;color: black"><i class="ion-arrow-left-a"></i></button>
				</div>
				<a> -->
				</div>
				<?php if($this->session->flashdata('update-success')){?>		
					<Script>
						swal({
							title: 'Well done!',
							text: 'Your Personal Details Updated!',
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

        	dob: {
        		
        		validators: {
        			notEmpty: {
        				message: 'The date of birth is required'
        			},
        		}
        	},
        	current_age: {
        		
        		validators: {
        			notEmpty: {
        				message: 'The age is required'
        			},
        		}
        	},
        	gender: {
        		
        		validators: {
        			notEmpty: {
        				message: 'The gender is required'
        			},
        		}
        	},
        	whatsapp: {
        		validators: {
        			notEmpty: {
        				message: 'The student whatsapp number is required'
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
        	}          
        }
    }).on('success.form.bv', function(e) {
    	$(this)[0].submit();
    });
});
</script>

<!-- specially_abled_type
	specially_abled_percentage -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#handicap').change(function() {
				if( $(this).val() == '0') {
					$('#specially_abled_type').prop( "disabled", true );
					$('#specially_abled_percentage').prop( "disabled", true );
				} 
				else if($(this).val() == '1') {       
					$('#specially_abled_type').prop( "disabled", false );
					$('#specially_abled_percentage').prop( "disabled", false );
				}
				else
				{
					$('#specially_abled_type').prop( "disabled", true );
					$('#specially_abled_percentage').prop( "disabled", true );
				}


			});

		});  
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#gender').change(function() {
				if( $(this).val() == 'Male') {
				    $('#single_girl_child').val(null).trigger('change');
					$('#single_girl_child').prop( "disabled", true );

				}
				else if($(this).val() == 'Transgender') {
				    $('#single_girl_child').val(null).trigger('change');
					$('#single_girl_child').prop( "disabled", true );
				}
				else if($(this).val() == 'Female') {
					$('#single_girl_child').prop( "disabled", false );
				}
				else
				{
				    $('#single_girl_child').val(null).trigger('change');
					$('#single_girl_child').prop( "disabled", true );
				}


			});

		});

		$(document).ready(function(){
			var gender=document.getElementById("gender").value;

			if(gender==="Female")
			{
				document.getElementById("single_girl_child").disabled = false;
			}


		});

		$(document).ready(function(){
			var handicap=document.getElementById("handicap").value;

			if(handicap=="1")
			{
				document.getElementById("specially_abled_type").disabled = false;
				document.getElementById("specially_abled_percentage").disabled = false;
			}
			


		});



	</script>




	<script> 
		function photoValidation() { 

			
			var fileInput =  
			document.getElementById('photo'); 
			
			var filePath = fileInput.value; 

			var fileSize=parseFloat(fileInput.files[0].size / (1024 * 1024)).toFixed(2);
          //alert("sdf "+fileSize);
          
            // Allowing file type 
            var allowedExtensions =  
            /(\.jpg|\.jpeg|\.png)$/i; 
            document.getElementById('photo_error_info').innerHTML='';
            $('#previewPhoto').attr('src',''); 
            

            if(fileSize<6)
            {


            	if (!allowedExtensions.exec(filePath)  ) { 
                    // alert('Invalid file type'); 
                    document.getElementById('photo_error_info').innerHTML="Image type should be .jpg |.jpeg | .png";
                    fileInput.value = ''; 
                    return false; 
                }  
                else  
                { 
                	
                	
                	var reader = new FileReader();
                	reader.onload = function (e) {
                		$('#previewPhoto').attr('src', e.target.result);
                	}
                	reader.readAsDataURL(fileInput.files[0]);
                	
                	
                	
                }
            }
            else
            {
            	document.getElementById('photo_error_info').innerHTML="Image size should be less then 6 MB";
            	fileInput.value = ''; 
            	return false; 
            }
        } 
    </script> 

