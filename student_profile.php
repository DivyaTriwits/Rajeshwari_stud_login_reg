
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
								<!--<h6 class="main-content-label mb-1">Update Personal Details</h6>-->

							</div>


							<form id=studentsPersonalForm method="POST" enctype="multipart/form-data" action="<?php echo base_url('update-personal-details')?>">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Full Name  </p>
											<input type="text" class="form-control" name="name" 
											value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->student_fullname;}?>" placeholder="Full Name" readonly>
										</div>
									</div>
									<div class="col-md-4 ">
										<div class="form-group">
											<p class="mg-b-10"> Email  </p>
											<input type="email" class="form-control" name="email" value="<?php echo $this->session->userdata('registered_email')?>" placeholder="Email" readonly>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Mobile Number <span class="tx-danger">*</span></p>

											<input pattern="[0-9]{1,10}"  maxlength="10"  
											oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"
											type="text" class="form-control" name="mobile" value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->student_mobile_no;}?>" placeholder="Whatsapp Number" readonly>

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Whatsapp Number <span class="tx-danger">*</span></p>

											<input pattern="[0-9]{1,10}"  maxlength="10"  
											oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"
											type="text" class="form-control" name="whatsapp" value="<?php if($getRegistrationsData!=''){echo $getRegistrationsData->student_whatsapp_no;}?>" placeholder="Whatsapp Number">

										</div>
									</div>
								  	<div class="col-md-6">
										<div class="form-group">
											<p class="mg-b-10">Qualification <span class="tx-danger">*</span> </p>
											<select class="form-control select2" name="qualification" id="qualification" required>
												<option selected="" disabled="">Select Qualification</option>
												<?php if($getCourse->num_rows()>0){ foreach($getCourse->result() as $row){?>
													<option value="<?php echo $row->id;?>"
														<?php if($getAcademicDetails!=''){ echo ($getAcademicDetails->qualification==$row->id) ? "selected":" "; } ?> >
														<?php echo $row->course_name;?>
													</option>

												<?php } } ?>

											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Course <span class="tx-danger">*</span> </p>
											<select class="form-control select2" name="current_class_or_degree" id="current_class_or_degree" required>
												<option selected="" disabled="">Select</option>
												<option <?php if($getAcademicDetails!='' ){ echo ($getAcademicDetails->current_class_or_degree!='') ? "selected" : " " ; } ?> value="<?php if($getAcademicDetails!='' && $getAcademicDetails->current_class_or_degree!='' ){echo ($getAcademicDetails->current_class_or_degree) ;} ?>" > <?php if($getAcademicDetails!='' && $getAcademicDetails->current_class_or_degree!='' ){echo ($getAcademicDetails->current_class_or_degree) ;} ?>
											</option>

										</select>
									</div>
								</div>
									<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">College Name<span class="tx-danger">*</span></p>
											<input type="text" class="form-control" required name="college" 
											value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->student_current_school_name;}?>" placeholder="College Name">
										</div>

											</div>
										<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Student Studying State <span class="tx-danger">*</span>  </p>
										<select class="form-control select2" name="student_studying_state" id="student_studying_state"required>
											<option selected="" disabled="">Select</option>
											<?php if($states->num_rows()>0){ foreach($states->result() as $row){?>
												<option value="<?php echo $row->id;?>"
													<?php if($getAcademicDetails!=''){ echo ($getAcademicDetails->student_studying_state==$row->id) ? "selected":" "; } ?> >
													<?php echo $row->name;?>
												</option>

											<?php } } ?>

										</select>
									</div>
								</div>


								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Student Studying District <span class="tx-danger">*</span> </p>
										<select class="form-control select2" name="student_studying_district" id="student_studying_district" required>
											<option selected="" disabled="">Student Studying District</option>
											<?php if($allcity->num_rows()>0){ foreach($allcity->result() as $row){ ?>

												<option <?php if($getAcademicDetails!='' ){ echo ($getAcademicDetails->student_studying_district==$row->city) ? "selected" : " " ; } ?> value="<?php echo $row->city ?>" > <?php echo $row->city;?>
												</option>


											<?php } }  ?>
								
									</select>
								</div>
							</div>
												<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Family Income<span class="tx-danger">*</span></p>
                                     <!--         <select class="form-control select2" name="family_annual_income" id="family_annual_income" required>
											<option selected="" disabled="">Select</option>
										

												<option  value="0-1 Lakh" >0-1 Lakh</option>
												<option  value="1-2 Lakh" >1-2 Lakh</option>
												<option  value="2-3 Lakh" >2-3 Lakh</option>
												<option  value="3-5 Lakh" >3-5 Lakh</option>
												<option  value="3-5 Lakh" >5-8 Lakh</option>
												<option  value="3-5 Lakh" >8-11 Lakh</option>
												<option  value="3-5 Lakh" >11+ Lakh</option>


								
									</select>

                                    <!-- we are commenting this beacuse we wanted to replace this with the dropdown option   varun 28 June 23-->
		

											<input type="text" class="form-control" name="family_annual_income" value="<?php if($getFamilyDetails!=''){echo $getFamilyDetails->family_annual_income;}?>"placeholder="Family Income"> 								
                                                  </div>

                                    <!-- we are commenting this beacuse we wanted to replace this with the dropdown option   varun 28 June 23-->	
                                  
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


									</div>
								
										<button style="background-color: #41044D; border-color: #41044D" type="Submit" class="btn ripple btn-primary float-right">Submit</button>
								
								
								</form>
							</div>

						</div>
					</div>
					<!-- End Row -->
				</div>

				
			</div>
			<!--<div class="icon-bar">
				<a href="<?php echo base_url('student_profile')?>">
					<button type="button" class="btn ripple float-left" style="background-color:#ff7f45;color: black"><i class="ion-arrow-left-a"></i></button>
				</div>
				<a>   -->
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
	<script type="text/javascript">
			$(document).ready(function(){

				$('#qualification').change(function(){ 
					var id=$(this).val();

			 // alert(id);
                //var id=document.getElementById('academic_year').value;

                $.ajax({

                	url : "<?php echo site_url('get-particular-course-list');?>",
                	method : "POST",
                	data : {id: id},
                	async : true,
                	dataType : 'json',
                	success: function(data){
                		// alert(id);
                		// alert(data);
                		console.log(data);
                		var html = '<option value="" selected disabled>Select</option>';
                		var i;
                		for(i=0; i<data.length; i++){

                			html += '<option value="'+data[i].particular_name+'">'+data[i].particular_name+'</option>';

                		}
                		$('#current_class_or_degree').html(html);

                	}
                });
                return false;
            }); 

			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){

				$('#student_studying_state').change(function(){ 
					var id=$(this).val();

                //var id=document.getElementById('academic_year').value;

                $.ajax({

                	url : "<?php echo site_url('get-cities-list');?>",
                	method : "POST",
                	data : {id: id},
                	async : true,
                	dataType : 'json',
                	success: function(data){

                		var html = '<option value="" selected disabled>Select</option>';
                		var i;
                		for(i=0; i<data.length; i++){

                			html += '<option value="'+data[i].city+'">'+data[i].city+'</option>';

                		}
                		$('#student_studying_district').html(html);

                	}
                });
                return false;
            }); 

			});
		</script>
