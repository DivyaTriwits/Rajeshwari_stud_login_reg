

<!-- Main Content-->
<div class="main-content pt-4 mt-5">
	<div class="container">

		<!-- Page Header -->
	<!-- 	<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('scholarship')?>">Scholarship</a></li>
							<li class="breadcrumb-item active">Scholarship Details</li>
						</ol>
					</nav>
				</div>
			</div> -->
			<!-- End Page Header -->



			<!-- Row -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card main-content-body-profile">
						<div class="tab-content">
							<div class="main-content-body tab-pane p-4 border-top-0 active" id="about">
								<div class="card-body p-0 border p-0 rounded-11">
<!-- 									<div class="p-4">
										<h4 class="tx-15 text-uppercase mb-4">Scholarship Name :<strong><?php if($getScholarship!=''){echo $getScholarship->scholarship_name;}?></strong></h4>
										<div class="m-t-30">
											<div class="">
												<h4 class="tx-15 text-uppercase mb-3" >Reward :<strong><?php if($getScholarship!=''){echo number_format(
													$getScholarship->scholarship_worth,2);}?></strong></h4> 
												</div>
											</div>
										</div> -->

										<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Scholarship Details</label>
											<div class="d-sm-flex">
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-primary-transparent text-primary"> <i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Scholarship Name</span></strong>
																<div><?php if($getScholarship!=''){echo $getScholarship->scholarship_name;}?></div>
															</div>
														</div>
													</div>
												</div>
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-handshake-o" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Scholarship Provider</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->scholarship_provider;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="mg-sm-r-20 mg-b-10">
												<div class="main-profile-contact-list">
													<div class="media">
														<div class="media-icon bg-success-transparent text-primary"> <i class="ion-cash" ></i> </div>
														<div class="media-body"><strong> <span style="color: grey">Scholarship Benefits</span></strong> 
															<div><?php if($getScholarship!=''){echo $getScholarship->benefits;}?>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="border-top"></div>
									<div class="p-4">
										<label class="main-content-label tx-13 mg-b-20">Important Date</label>
										<div class="d-sm-flex">
											<div class="mg-sm-r-20 mg-b-10">
												<div class="main-profile-contact-list">
													<div class="media">
														<div class="media-icon bg-primary-transparent text-primary"> <i class="ion-calendar" ></i> </div>
														<div class="media-body"> <strong> <span style="color: grey">Start Date</span></strong> 
															<div>

																<!-- <?php if($getScholarship!=''){echo $getScholarship->application_start_date;}?> -->
																														
															<?php if( $getScholarship!='' && ($getScholarship->application_start_date!='' && $getScholarship->application_start_date!="0000-00-00" )){?>
															<?php echo  date("d-m-Y", strtotime($getScholarship->application_start_date)); ?>
															<?php } else { if($getScholarship!='') { echo $getScholarship->application_start_date; } }?>



																</div>
														</div>
													</div>
												</div>
											</div>
											<div class="mg-sm-r-20 mg-b-10">
												<div class="main-profile-contact-list">
													<div class="media">
														<div class="media-icon bg-success-transparent text-danger"> <i class="ion-calendar" ></i> </div>
														<div class="media-body">  <strong> <span style="color: grey">End Date</span></strong> 
															<div> 
																<!-- <?php if($getScholarship!=''){echo $getScholarship->application_end_date;}?> -->
																
															<?php if( $getScholarship!='' && ($getScholarship->application_end_date!='' && $getScholarship->application_end_date!="0000-00-00" )){?>
															<?php echo  date("d-m-Y", strtotime($getScholarship->application_end_date)); ?>
															<?php } else { if($getScholarship!=''){ echo $getScholarship->application_end_date;  }}?>


															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
						<!-- 			<div class="border-top"></div>
										<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Scholarship Provider</label>
											<div class="d-lg-flex">
												<div class="mg-md-r-20 mg-b-10">
													<div class="main-profile-social-list">
														<div class="media">
															<div class="media-icon bg-primary-transparent text-primary"> <i class="fa fa-handshake-o"></i> </div>
															<div class="media-body"> <span> <?php if($getScholarship!=''){echo $getScholarship->scholarship_provider;}?></span>  </div>
														</div>

													</div>
												</div>

											</div>
										</div> -->
										<?php if ($this->session->userdata('student_username')) {?>
										<div class="border-top"></div>
										<div class="p-4">


											<label class="main-content-label tx-13 mg-b-20">Attachments</label>
											<?php foreach ($getAttachments as $attachment) {?>
												<div class="d-lg-flex">
												    
												    <?php if($attachment->attachment_file != ''){?>
													<div class="mg-md-r-20 mg-b-10">
														<div class="main-profile-social-list">
															<div class="media">

																<div class="media-body"> <strong><span style="color: grey">Files</span> </strong>

																	<a href="<?php echo base_url()?>download-file/<?php echo $attachment->attachment_file?>/<?php echo $attachment->scholarship_id?>" ><i class="fe fe-download" style="font-size:20px "></i>
																	</a>
																</div>

																<!-- 	 	<a href="<?php echo $attachment->attachment_file?>"><i class="fe fe-download" style="font-size:20px "></i></a>  -->

															</div>
														</div>
													</div>
													<?php }?>
													<?php if($attachment->attachment_text != ''){?>
													<div class="mg-md-r-20 mg-b-10">
														<div class="main-profile-social-list">
															<div class="media">

																<div class="media-body"><strong> <span style="color: grey">Links</span></strong> <a href="<?php echo $attachment->attachment_text?>"target="_blank">Click here</a></div>
															</div>
														</div>
													</div>
													<?php }?>

												</div>
											<?php }?>
										</div>
										<div class="border-top"></div>
										<!--<div class="p-4">-->
										<!--	<label class="main-content-label tx-13 mg-b-20">Scholarship Benifits</label>-->
										<!--	<div class="d-lg-flex">-->

										<!--		<p class="card-text"><?php if($getScholarship!=''){echo $getScholarship->benefits;}?></p>-->
										<!--	</div>-->
										<!--	</div>-->


											<div class="border-top"></div>
											<div class="p-4">
												<label class="main-content-label tx-13 mg-b-20">Scholarship Description</label>
												<div class="d-lg-flex">

													<p class="card-text"><?php if($getScholarship!=''){echo $getScholarship->scholarship_description;}?></p>


												</div>
												<!-- <div> -->
													
													<!-- </div> -->

												</div>
											<!--	<div class="border-top"></div>
												<div class="p-4">
													<label class="main-content-label tx-13 mg-b-20">Courses</label>
													<div class="d-lg-flex">
														 <?php if($getScholarship!=''){?>
														<p class="card-text"><?php  $courses =  json_decode($getScholarship->courses);
														if(is_array($courses)){
															foreach ($courses as $eachCourse) {
																echo $eachCourse.'<br>';
															}
														}else{
															echo $getScholarship->courses;
														}?>
														<?php } ?>
														</p>
													</div>
												</div> -->
											<!--	<div class="border-top"></div>
												<div class="p-4">
													<label class="main-content-label tx-13 mg-b-20">Current Class or Degree</label>
													<div class="d-lg-flex">

														<p class="card-text">
														    
														   
														
																	    <?php if($getScholarship!=''){?>
            														<?php  $current_class_or_degree =  json_decode($getScholarship->current_class_or_degree);
            														if(is_array($current_class_or_degree)){
            
            															foreach ($current_class_or_degree as $eachCurrentClassOrDegree) {
            																echo $eachCurrentClassOrDegree.'<br>';
            															}
            
            
            														}else{
            															echo $getScholarship->current_class_or_degree;
            														}?>
            														<?php } ?>
														
														
														</p>
													</div>
												</div> -->
                                    <!--  <div class="border-top"></div>
													<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">CGPA Details</label>
											<div class="d-sm-flex">
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-primary-transparent text-primary"> <i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">CGPA Type</span></strong>
																<div><?php if($getScholarship!=''){echo $getScholarship->cgpa_type;}?></div>
															</div>
														</div>
													</div>
												</div>
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">CGPA 10th</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->tenth_cgpa_or_percentage;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">CGPA 12th</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->twelfth_cgpa_or_percentage;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
                                       		<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">CGPA Diploma</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->diploma_cgpa_or_percentage;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">CGPA Prevoius Year</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->previous_year_cgpa_or_percentage;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>-->
									    
									  	<!--  <div class="border-top"></div>
									    
										<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Domicile</label>
											<div class="d-sm-flex">
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-primary-transparent text-primary"> <i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Domiciles</span></strong>
																<div>
            													<?php if($getScholarship!=''){?>
            														<?php  $domicile =  json_decode($getScholarship->domicile);
            														if(is_array($domicile)){
            
            															foreach ($domicile as $eachDomicile) {
            																echo $eachDomicile.'<br>';
            															}
            														}else{
            															echo $getScholarship->domicile;
            														}?>
            														<?php } ?>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-handshake-o" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Cities</span></strong> 
																<div> 
            													<?php if($getScholarship!=''){?>
            														<?php  $cities =  json_decode($getScholarship->cities);
            														if(is_array($cities)){
            
            															foreach ($cities as $eachCities) {
            																echo $eachCities.'<br>';
            															}
            
            
            														}else{
            															echo $getScholarship->cities;
            														}?>
            														<?php } ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>-->
									
									
									
											<!--    <div class="border-top"></div>
											   
													<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Cast & Religion</label>
											<div class="d-sm-flex">
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-primary-transparent text-primary"> <i class="ti-world " ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Religion</span></strong>
																<div>
																    
																   
																    
												    <?php if($getScholarship!=''){?>
														<?php  $religion =  json_decode($getScholarship->religion);
														if(is_array($religion)){

															foreach ($religion as $eachReligion) {
																echo $eachReligion.'<br>';
															}


														}else{
															echo $getScholarship->religion;
														}?>
														<?php } ?>
																
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="ti-world" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Category</span></strong> 
																<div> 
															
																
													<?php if($getScholarship!=''){?>
														<?php  $category =  json_decode($getScholarship->category);
														if(is_array($category)){

															foreach ($category as $eachCategory) {
																echo $eachCategory.'<br>';
															}


														}else{
															echo $getScholarship->category;
														}?>
														<?php } ?>
														
															</div>
														</div>
													</div>
												</div>
											</div>
                                       			
											
										</div>
									</div> -->
									
									
									
									 	<!--   <div class="border-top"></div>
												<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Other</label>
											<div class="d-sm-flex">
											
										
                                       				<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-user" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Is Hosteller</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->is_hosteller;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
													<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-user" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Gender</span></strong> 
																<div>
																    
																    
																     
																     			     
            														<?php if($getScholarship!=''){?>
            														<?php  $gender =  json_decode($getScholarship->gender);
            														if(is_array($gender)){
            
            															foreach ($gender as $eachGender) {
            																echo $eachGender.'<br>';
            															}
            
            
            														}else{
            															echo $getScholarship->gender;
            														}?>
            														<?php } ?>
																     
													
														
															</div>
														</div>
													</div>
												</div>
											</div>
													<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-user" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Minimum Age</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->minimum_age;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
														<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-user" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Maximum Age</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->maximum_age;}?>
															</div>
														</div>
													</div>
												</div>
											</div>

											
										</div>
									</div> -->
										    <div class="border-top"></div>
													<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Family Details</label>
											<div class="d-sm-flex">
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-primary-transparent text-primary"> <i class="ti-briefcase" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Parent Occupation</span></strong>
																<div>
																    <?php if($getScholarship!=''){?>
            														<?php  $parent_occupation =  json_decode($getScholarship->parent_occupation);
            														if(is_array($parent_occupation)){
            
            															foreach ($parent_occupation as $eachParentOccupation) {
            																echo $eachParentOccupation.'<br>';
            															}
            
            
            														}else{
            															echo "Not mentioned";
            														}?>
            														<?php } ?>
																
																
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="ion-cash" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Family Income</span></strong> 
																<div> <?php if($getScholarship->family_annual_income  != 0 ){echo $getScholarship->family_annual_income;}else{ echo 'Not mentioned'; }?>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
									 	<!--   <div class="border-top"></div>
												<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Talent & Other Details</label>
											<div class="d-sm-flex">
											
										
                                       				<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-child" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Talent</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->talent;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
													<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="si si-game-controller" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Special Talent</span></strong> 
																<div>
																  
																     
																     
																    <?php if($getScholarship!=''){?>
            														<?php  $special_talent =  json_decode($getScholarship->special_talent);
            														if(is_array($special_talent)){
            
            															foreach ($special_talent as $eachSpecialTalent) {
            																echo $eachSpecialTalent.'<br>';
            															}
            
            
            														}else{
            															echo $getScholarship->special_talent;
            														}?>
            														<?php } ?>
															</div>
														</div>
													</div>
												</div>
											</div>
													<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-blind" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Disability Type</span></strong> 
																<div> 
															
																    
																    
																    <?php if($getScholarship!=''){?>
            														<?php  $disability_type =  json_decode($getScholarship->disability_type);
            														if(is_array($disability_type)){
            
            															foreach ($disability_type as $eachDisabilityType) {
            																echo $eachDisabilityType.'<br>';
            															}
            
            
            														}else{
            															echo $getScholarship->disability_type;
            														}?>
            														<?php } ?>
																
															</div>
														</div>
													</div>
												</div>
											</div>
														<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-hard-of-hearing" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Disability Percentage</span></strong> 
																<div> <?php if($getScholarship!=''){echo $getScholarship->disability_percentage;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
                                         		<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-handshake-o" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Is For Orphans</span></strong> 
																<div>
																
																     
																     <?php if($getScholarship!='' && $getScholarship->is_for_orphans==1 ){echo "Yes" ;} else { echo "No" ;}?>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div> -->
									  	<!-- <div class="border-top"></div>
												<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Student Details</label>
											<div class="d-sm-flex">
											
										
                                       				<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-child" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Is For Single Child</span></strong> 
																<div>
																    
																     <?php if($getScholarship!='' && $getScholarship->is_for_single_child==1 ){echo "Yes" ;} else { echo "No" ;}?>
																    
																    
																    
															</div>
														</div>
													</div>
												</div>
											</div>
													<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-child" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">is For Single Girl Child</span></strong> 
																<div>
																     
																
																     <?php if($getScholarship!='' && $getScholarship->is_for_single_girl_child==1 ){echo "Yes" ;} else { echo "No" ;}?>
															</div>
														</div>
													</div>
												</div>
											</div> 
											
											
											
										</div>
										
										
									
								
										
									</div> -->
									
										<!-- 	<a href="<?php if($getScholarship!=''){echo $getScholarship->scholarship_link;}?>">
															<button style="background-color: #ff7f45; border-color: #ff7f45" class="btn ripple btn-primary float-right">Go to scholarship page<i class="fe fe-arrow-right ml-1"></i></button></a> -->
								<?php }?>

								   <?php 
                        // Program to display current page URL. 
                        $redirectlink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                          "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                        $_SERVER['REQUEST_URI'];
                        
                        ?>
												 <?php if(!$this->session->userdata('registered_email')){?>

												 	<a href="<?php echo base_url('student-login')?>?redirect-to=<?php echo $redirectlink;?> target="_blank">
													<button style="background-color: #ff7f45; border-color: #ff7f45" class="btn ripple btn-primary float-right">Go to scholarship page<i class="fe fe-arrow-right ml-1"></i></button></a>
											
												<?php }else {?>
										                 
													<a href="<?php if($getScholarship!='') echo base_url('redirect-me-to/'.$getScholarship->scholarship_id);?>" target="_blank">
														<button style="background-color: #ff7f45; border-color: #ff7f45" class="btn ripple btn-primary float-right">Go to scholarship page<i class="fe fe-arrow-right ml-1"></i></button>


													</a>
														<!--<a href="<?php echo base_url('scholarships')?>">-->
														<!--	<button type="button" class="btn ripple btn-dark float-left" style="margin-right: 5px;background-color:#460056;border-color:#460056">Back</button>-->
														<!--</a>-->
												<?php }?>

												<!-- <a href="<?php echo base_url('scholarships')?>">
															<button type="button" class="btn ripple btn-dark float-left" style="margin-right: 5px;background-color:#460056;border-color:#460056">Back</button>
														</a> -->
												</div>

											</div>



										</div>
									</div>
								</div>

							</div>
							<!-- End Row -->
						</div>
					</div>
					<!-- End Main Content-->

<?php if($this->session->flashdata('date-expired')){?>		
			<Script>
				swal({
					title: 'Awesome !',
					text: 'You Cant apply to this scholarship your Subscription date is expired renew now!',
					type: 'success',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>