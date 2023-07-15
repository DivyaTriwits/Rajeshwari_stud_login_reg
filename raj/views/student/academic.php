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
							<li class="breadcrumb-item active">Academic Details</li>
						</ol>
					</nav>
				</div>
			</div> -->

			<!-- End Page Header -->
			<!-- Row -->

			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h6 class="main-content-label mb-1">Update Academic Details</h6>
							</div>
							<form id="academicForm" method="POST" action="<?php echo base_url('update-academic-details')?>">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<p class="mg-b-10">School or College Name <span class="tx-danger">*</span> </p>
											<input type="text" class="form-control" name="student_current_school_name" value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->student_current_school_name;}?>" placeholder="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<p class="mg-b-10">Qualification <span class="tx-danger">*</span> </p>
											<select class="form-control select2" name="qualification" id="qualification" required>
												<option selected="" disabled="">Select Qualification</option>
												<?php if($getCourse->num_rows()>0){ foreach($getCourse->result() as $row){?>
													<option value="<?php echo $row->course_name;?>"
														<?php if($getAcademicDetails!=''){ echo ($getAcademicDetails->qualification==$row->course_name) ? "selected":" "; } ?> >
														<?php echo $row->course_name;?>
													</option>

												<?php } } ?>

											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">class/Course/Degree/ <span class="tx-danger">*</span> </p>
											<select class="form-control select2" name="current_class_or_degree" id="current_class_or_degree" required>
												<option selected="" disabled="">Select</option>
												<option <?php if($getAcademicDetails!='' ){ echo ($getAcademicDetails->current_class_or_degree!='') ? "selected" : " " ; } ?> value="<?php if($getAcademicDetails!='' && $getAcademicDetails->current_class_or_degree!='' ){echo ($getAcademicDetails->current_class_or_degree) ;} ?>" > <?php if($getAcademicDetails!='' && $getAcademicDetails->current_class_or_degree!='' ){echo ($getAcademicDetails->current_class_or_degree) ;} ?>
											</option>

										</select>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Student Studying State <span class="tx-danger">*</span>  </p>
										<select class="form-control select2" name="student_studying_state" id="student_studying_state"required>
											<option selected="" disabled="">Select</option>
											<?php if($states->num_rows()>0){ foreach($states->result() as $row){?>
												<option value="<?php echo $row->name;?>"
													<?php if($getAcademicDetails!=''){ echo ($getAcademicDetails->student_studying_state==$row->name) ? "selected":" "; } ?> >
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
											<?php if($city->num_rows()>0){ foreach($city->result() as $row){ ?>

												<option <?php if($getAcademicDetails!='' ){ echo ($getAcademicDetails->student_studying_district==$row->city) ? "selected" : " " ; } ?> value="<?php echo $row->city ?>" > <?php echo $row->city;?>
												</option>


											<?php } }  ?>
									<!--	<option <?php if($getAcademicDetails!='' ){ echo ($getAcademicDetails->student_studying_district!='') ? "selected" : " " ; } ?> value="<?php if($getAcademicDetails!='' && $getAcademicDetails->student_studying_district!='' ){echo ($getAcademicDetails->student_studying_district) ;} ?>" > <?php if($getAcademicDetails!='' && $getAcademicDetails->student_studying_district!='' ){echo ($getAcademicDetails->student_studying_district) ;} ?> </option> -->

									</select>
								</div>
							</div>



							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">Current Semester </p>
									<select class="form-control select2" name="current_semester">
										<option label="Choose one">
										</option>
										<option value="1"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->current_semester =='1')? 'selected' :''; ?>>Semester-1
										</option>
										<option value="2"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->current_semester =='2')? 'selected' :''; ?>>Semester-2
										</option>
										<option value="3"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->current_semester =='3')? 'selected' :''; ?>>Semester-3
										</option>
										<option value="4"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->current_semester =='4')? 'selected' :''; ?>>Semester-4
										</option>
										<option value="5"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->current_semester =='5')? 'selected' :''; ?>>Semester-5
										</option>
										<option value="6"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->current_semester =='6')? 'selected' :''; ?>>Semester-6
										</option>
										<option value="7"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->current_semester =='7')? 'selected' :''; ?>>Semester-7
										</option>
										<option value="8"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->current_semester =='8')? 'selected' :''; ?>>Semester-8
										</option>
									</select>
								</div>
							</div>

						<div class="col-lg-3 form-group">
								<p class="mg-b-10">Hosteller/Day Scholar<span class="tx-danger">*</span></p>
								<select class="form-control select2" name="is_hosteller" required>
									<option label="Choose one">
									</option>
									<option value="Hosteller"<?php if($getAcademicDetails!='')echo ($getAcademicDetails->is_hosteller =='Hosteller')? 'selected' :''; ?>>Hosteller
									</option>
									<option value="Day Scholar"<?php if($getAcademicDetails!='')echo ($getAcademicDetails->is_hosteller =='Day Scholar')? 'selected' :''; ?>>Day Scholar
									</option>
								</select>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">Reservation<i class="ion-help-circled" data-toggle="tooltip" title="Select Quota"></i></p>
									<select class="form-control select2"  name="quota">
										<option label="Choose one">
										</option>
										<!--<option value="Reservation" <?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='Reservation')? 'selected' :''; ?>>Reservation-->

										<!--</option>-->
										<option value="Rural"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='Rural')? 'selected' :''; ?>>Rural
										</option>
										<option value="Urban"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='Urban')? 'selected' :''; ?>>Urban
										</option>
										<!--<option value="Ncc"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='Ncc')? 'selected' :''; ?>>Ncc-->
										<!--</option>-->
										<!--<option value="Nss"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='Nss')? 'selected' :''; ?>>Nss-->
										<!--</option>-->
										<!--<option value="Scouts"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='Scouts')? 'selected' :''; ?>>Scouts-->

										<!--</option>-->
										<!--<option value="Guide"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='Guide')? 'selected' :''; ?>>Guide-->
										<!--</option>-->
										<!--<option value="Ex Service Men"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='Ex Service Men')? 'selected' :''; ?>>Ex Service Men-->
										<!--</option>-->
										<!--<option value="NDA(Present)"<?php if($getAcademicDetails!='') echo ($getAcademicDetails->quota =='NDA(Present)')? 'selected' :''; ?>>NDA(Present)-->
										<!--</option>-->

									</select>

								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<p class="mg-b-10">Previous Year Result<span class="tx-danger">*</span> </p>
									<input class="form-control" name="previous_year_result" placeholder=" "  
									type="text"value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->previous_year_result;}?>"  placeholder="">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">10th Board </p>
									<select class="form-control select2" name="tenth_board">
										<option selected="" disabled="">Select 10th Board
										</option>
										<option value="ICSE" <?php if($getAcademicDetails!='') echo ($getAcademicDetails->tenth_board=='ICSE')?'selected':''?>>ICSE

										</option>
										<option value="CBSE" <?php if($getAcademicDetails!='')echo($getAcademicDetails->tenth_board=='CBSE')?'selected':'';?>>CBSE

										</option>
										<option value="STATE" <?php if($getAcademicDetails!='')echo($getAcademicDetails->tenth_board=='STATE')?'selected':'';?>>STATE
										</option>
										<option value="NIOS"<?php if($getAcademicDetails!='')echo($getAcademicDetails->tenth_board=='NIOS')?'selected':'';?>>NIOS
										</option>
									</select>

								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">10th Result Type </p>
									<select class="form-control select2" name="tenth_cgpa_type" id="tenth_cgpa_type" onchange = "ShowHideDiv()">
										<option selected="" disabled="">Select 10th Result Type
										</option>

										<option value="CGPA-4" <?php if($getAcademicDetails!='')echo($getAcademicDetails->tenth_cgpa_type=='CGPA-4')?'selected':'';?>>CGPA-4

										</option>
										<option value="CGPA 10"<?php if ($getAcademicDetails!='')echo($getAcademicDetails->tenth_cgpa_type=='CGPA-10')?'selected':'';?>>CGPA-10
										</option>
										<option value="Percentage"<?php  if($getAcademicDetails!='')echo($getAcademicDetails->tenth_cgpa_type=='Percentage')?'selected':'';?>>Percentage
										</option>
									</select>

								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">10th class Result <i class="ion-help-circled" data-toggle="tooltip" title="If Your 10th Result in a CGPA please convert it into Percentage"></i></p>
									<input type="text" class="form-control" id="numberbox" name="tenth_cgpa_or_percentage"value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->tenth_cgpa_or_percentage;}?>"  placeholder="">
                                   <span id="msg" style="color:red"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">10th Year Of Passing </p>
									<input type="text" class="form-control" name="tenth_year_of_passing" value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->tenth_year_of_passing;}?>" placeholder="">
                                    
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">12th Board </p>									
									<select class="form-control select2" name="twelfth_board">
										<option selected="" disabled="">Select 10th Board
										</option>
										<option value="ICSE" <?php if($getAcademicDetails!='') echo ($getAcademicDetails->twelfth_board=='ICSE')?'selected':''?>>ICSE

										</option>
										<option value="CBSE" <?php if($getAcademicDetails!='')echo($getAcademicDetails->twelfth_board=='CBSE')?'selected':'';?>>CBSE
											CBSE
										</option>
										<option value="STATE" <?php if($getAcademicDetails!='')echo($getAcademicDetails->twelfth_board=='STATE')?'selected':'';?>>STATE
										</option>
										<option value="NIOS"<?php if($getAcademicDetails!='')echo($getAcademicDetails->twelfth_board=='NIOS')?'selected':'';?>>NIOS
										</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">12th Result Type </p>
									<select class="form-control select2" name="twelfth_cgpa_type">
										<option selected="" disabled="">Select 12th Result Type
										</option>

										<option value="CGPA-4" <?php if($getAcademicDetails!='')echo($getAcademicDetails->twelfth_cgpa_type=='CGPA-4')?'selected':'';?>>CGPA-4

										</option>
										<option value="CGPA 10"<?php if ($getAcademicDetails!='')echo($getAcademicDetails->twelfth_cgpa_type=='CGPA-10')?'selected':'';?>>CGPA-10
										</option>
										<option value="Percentage"<?php  if($getAcademicDetails!='')echo($getAcademicDetails->twelfth_cgpa_type=='Percentage')?'selected':'';?>>Percentage
										</option>
									</select>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">12th Result  <i class="ion-help-circled" data-toggle="tooltip" title="If Your 12th Result in a CGPA please convert it into Percentage"></i></p>
									<input type="text" class="form-control" name="twelfth_cgpa_or_percentage" value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->twelfth_cgpa_or_percentage;}?>" placeholder="" >

								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">12th Year Of Passing </p>
									<input type="text" class="form-control" name="twelfth_year_of_passing" value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->twelfth_year_of_passing;}?>" placeholder="">

								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">Diploma Result Type&nbsp;<i class="ion-help-circled" data-toggle="tooltip" title="Diploma Result Type if Applicable"></i></p>
									<select class="form-control select2" name="diploma_cgpa_type==''">
										<option selected="" disabled="">Select Diploma Result Type
										</option>

										<option value="CGPA-4" <?php if($getAcademicDetails!='')echo($getAcademicDetails->diploma_cgpa_type=='CGPA-4')?'selected':'';?>>CGPA-4

										</option>
										<option value="CGPA 10"<?php if ($getAcademicDetails!='')echo($getAcademicDetails->diploma_cgpa_type=='CGPA-10')?'selected':'';?>>CGPA-10
										</option>
										<option value="Percentage"<?php  if($getAcademicDetails!='')echo($getAcademicDetails->diploma_cgpa_type=='Percentage')?'selected':'';?>>Percentage
										</option>
									</select>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">Diploma Result &nbsp;<i class="ion-help-circled" data-toggle="tooltip" title="Diploma Result if Applicable"></i></p>
									<input type="text" class="form-control" name="diploma_cgpa_or_percentage"value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->diploma_cgpa_or_percentage;}?>" placeholder="">

								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<p class="mg-b-10">Diploma Year Of Passing&nbsp;<i class="ion-help-circled" data-toggle="tooltip" title="Diploma Passing year if Applicable"></i></p>
									<input type="text" class="form-control" name="diploma_year_of_passing"value="<?php if($getAcademicDetails!=''){echo $getAcademicDetails->diploma_year_of_passing;}?>" placeholder="">

								</div>
							</div>
						</div>

						<a href="<?php echo base_url('family-details')?>">
							<button style="background-color: #ff7f45; border-color: #ff7f45" type="Submit" class="btn ripple btn-primary float-right">Next</button>
						</a>

					
					</form>
					</div>
				</div>
				<!-- End Row -->
			</div>
		</div>
	</div>
</div>
		<!-- End Main Content-->
		<?php if($this->session->flashdata('update-success')){?>		
			<Script>
				swal({
					title: 'Awesome !',
					text: 'Lets improve your Academic Details!',
					type: 'success',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>
<script>
$('#numberbox').keyup(function(){
    var types = $("#tenth_cgpa_type").val();
    //alert(types);
    
  if ($(this).val() > 100){
      $message="No number above 100";
       $('#msg').html($message);
    //alert("No numbers above 100");
    $(this).val('100');
  }
        
    
});
</script>
// <script type="text/javascript">
//     function ShowHideDiv() {
//         var ddlPassport = document.getElementById("tenth_cgpa_type");
        
//         if(ddlPassport.value == "CGPA-4"){
//           $('#numberbox').keyup(function(){
//   if ($(this).val() > 100){
//       $message="No number above 100";
//       $('#msg').html($message);
//     //alert("No numbers above 100");
//     $(this).val('0');
//   }
// });
//         }
//     }
// </script>


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
		<script>
			$(document).ready(function() {
				$('#academicForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
        // 	valid: 'glyphicon glyphicon-ok',
        // 	invalid: 'glyphicon glyphicon-remove',
        // 	validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	student_current_school_name: {
        		
        		validators: {
        			notEmpty: {
        				message: 'The school or sollege Name is required'
        			},
        		}
        	},
        	qualification: {
        		
        		validators: {
        			notEmpty: {
        				message: 'The qualification is required'
        			},
        		}
        	},
        	current_class_or_degree: {
        		validators: {
        			notEmpty: {
        				message: 'The class/degree/course is required'
        			},
        		}
        	},
        	student_studying_state: {
        		validators: {
        			notEmpty: {
        				message: 'The studying state is required'
        			},
        		}
        	},
        	student_studying_district: {
        		validators: {
        			notEmpty: {
        				message: 'The studying district is required'
        			}
        		}
        	},
        	previous_year_result: {
        		validators: {
        			notEmpty: {
        				message: 'The previous year result is required'
        			},
        		}
        	},
        	is_hosteller: {
        		validators: {
        			notEmpty: {
        				message: 'The hosteller or day scholar is required'
        			},
        		}
        	},
        // 	tenth_cgpa_or_percentage: {
        // 		validators: {
        // 			notEmpty: {
        // 				message: 'The 10th result is required'
        // 			},
        // 		}
        // 	},
        // 	twelfth_cgpa_or_percentage: {
        // 		validators: {
        // 			notEmpty: {
        // 				message: 'The 12th  result is required'
        // 			},
        // 		}
        // 	},
        }
    }).on('success.form.bv', function(e) {
    	$(this)[0].submit();
    });
});

			$(document).ready(function(){
			// $('#qualification').val('<?php echo (isset($getAcademicDetails->qualification)) ? $getAcademicDetails->qualification : '' ;?>').trigger('change');
		});
	</script>