<!-- Main Content-->
	<div class="main-content pt-5 mt-5">
				<div class="container-fluid">

		<!-- Page Header -->
<!-- 		<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="https://tgs.tdc3030.com/student/">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="https://tgs.tdc3030.com/student/scholarship">Scholarship</a></li>
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
										<h4 class="tx-15 text-uppercase mb-4">Scholarship Name :<strong></strong></h4>
										<div class="m-t-30">
											<div class="">
												<h4 class="tx-15 text-uppercase mb-3" >Reward :<strong></strong></h4> 
												</div>
											</div>
										</div> -->
										

										<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Scholarship Details</label>
											<div class="d-sm-flex">
												<!-- <div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-primary-transparent text-primary"> <i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Institution Name : <?php if($scholarshipDetails!=''){echo $scholarshipDetails->institute_name;}?></span></strong>
																<div></div>
															</div>
														</div>
													</div>
												</div> -->
												<div class="mg-sm-r-20 mg-b-10">
													<div class="main-profile-contact-list">
														<div class="media">
															<div class="media-icon bg-success-transparent text-primary"><i class="ti-write" ></i> </div>
															<div class="media-body"><strong> <span style="color: grey">Scholarship Name : </span></strong> 
																<div> <?php if($scholarshipDetails!=''){echo $scholarshipDetails->scholarship_name;}?>															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="mg-sm-r-20 mg-b-10">
												<div class="main-profile-contact-list">
													<div class="media">
														<div class="media-icon bg-success-transparent text-primary"> <i class="ion-cash" ></i> </div>
														<div class="media-body"><strong> <span style="color: grey">Scholarship Reward : </span></strong> 
															<div></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="border-top"></div>
									<div class="p-4">
										<label class="main-content-label tx-13 mg-b-20">Important Date </label>
										<div class="d-sm-flex">
											<div class="mg-sm-r-20 mg-b-10">
												<div class="main-profile-contact-list">
													<div class="media">
														<div class="media-icon bg-primary-transparent text-primary"> <i class="ion-calendar" ></i> </div>
														<div class="media-body"> <strong> <span style="color: grey">Start Date : </span></strong> 
															<div> 

																<!-- <?php if($scholarshipDetails!=''){echo $scholarshipDetails->start_date;}?> -->
																

															<?php if( $scholarshipDetails!='' && ($scholarshipDetails->start_date!='' && $scholarshipDetails->start_date!="0000-00-00" )){?>
															<?php echo  date("d-m-Y", strtotime($scholarshipDetails->start_date)); ?>
															<?php } else { if($scholarshipDetails!=''){ echo $scholarshipDetails->start_date;  }}?>


															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="mg-sm-r-20 mg-b-10">
												<div class="main-profile-contact-list">
													<div class="media">
														<div class="media-icon bg-success-transparent text-danger"> <i class="ion-calendar" ></i> </div>
														<div class="media-body">  <strong> <span style="color: grey">End Date :</span></strong> 
															<div> 

																<!-- <?php if($scholarshipDetails!=''){echo $scholarshipDetails->last_date;}?>  -->


																<?php if( $scholarshipDetails!='' && ($scholarshipDetails->last_date!='' && $scholarshipDetails->last_date!="0000-00-00" )){?>
															<?php echo  date("d-m-Y", strtotime($scholarshipDetails->last_date)); ?>
															<?php } else { if($scholarshipDetails!=''){ echo $scholarshipDetails->last_date;  }}?>



														</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="border-top"></div>
<!-- 										<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Scholarship Provider</label>
											<div class="d-lg-flex">
												<div class="mg-md-r-20 mg-b-10">
													<div class="main-profile-social-list">
														<div class="media">
															<div class="media-icon bg-primary-transparent text-primary"> <i class="fa fa-handshake-o"></i> </div>
															<div class="media-body"> <span> </span>  </div>
														</div>

													</div>
												</div>

											</div>
										</div> -->
										<div class="border-top"></div>
										<div class="p-4">


											<label class="main-content-label tx-13 mg-b-20">Attachments</label>
																							<div class="d-lg-flex">
													<div class="mg-md-r-20 mg-b-10">
														<div class="main-profile-social-list">
															<div class="media">

																<div class="media-body"> <strong><span style="color: grey;margin-bottom: 10px;">Files</span> </strong>
																<?php if($document->num_rows()>0){ foreach($document->result() as $row ){ ?>
																	<a download href="<?php echo base_url()?><?php echo DOCUMENT_PATH_INSTITUTION; ?><?php echo $row->file?>"><i class="fe fe-download" style="font-size:20px; margin-right: 10px; "></i> </a>
																<?php } } ?>



												
												

									
										

																</div>



																<!-- 	 	<a href="20210202131009_student_attachment.pdf"><i class="fe fe-download" style="font-size:20px "></i></a>  -->

															</div>
														</div>
													</div>
													<div class="mg-md-r-20 mg-b-10">
														<div class="main-profile-social-list">
															<div class="media">

																<div class="media-body"><strong> <span style="color: grey">Links</span></strong>
																
																 <a href="<?php if($scholarshipDetails!=''){echo $scholarshipDetails->website_link;}?>"target="_blank">Click here</a>
																 
																</div>
															</div>
														</div>
													</div>

												</div>
																					</div>
										<div class="border-top"></div>
										<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Scholarship Benifits</label>
											<div class="d-lg-flex">

												<p class="card-text"></p>
											</div>
											<!-- <div> -->
											</div>

											<div class="border-top"></div>
											<div class="p-4">
												<label class="main-content-label tx-13 mg-b-20">Scholarship Description</label>
												<div class="d-lg-flex">

													<p class="card-text"><?php if($scholarshipDetails!=''){echo  $scholarshipDetails->criteria;}?> </p>


												</div>
												<!-- <div> -->
													
													<!-- </div> -->

												</div>
												
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



















<!-- <div class="main-content pt-0">
	<div class="container-fluid">

		
			<div class="text-wrap">
				<div class="example">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-style1 mg-b-0">

							<li class="breadcrumb-item">
								<a href="<?php echo base_url()?>">Support</a>
							</li>
							<li class="breadcrumb-item">Scholarship</li>
							<li class="breadcrumb-item">View Scholarship Details</li>
						
							</ol>
						</nav>
					</div>
				</div>
					
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div  class="text-right">

								

								</div><br>
										
									
										<div class="col-md-12">
											<p>Institution Name:<strong> <?php if($scholarshipDetails!=''){echo $scholarshipDetails->institute_name;}?></strong> </p>
											<p>Scholarship Name: <strong><?php if($scholarshipDetails!=''){echo $scholarshipDetails->scholarship_name;}?></strong> </p>
											<p>Start Date:<strong> <?php if($scholarshipDetails!=''){echo $scholarshipDetails->start_date;}?> </strong></p>
											<p>End Date:<strong> <?php if($scholarshipDetails!=''){echo $scholarshipDetails->last_date;}?>
											</strong> </p>
											
										</div>

										<div class="col-md-12 mt-5">
										
											<p>Criteria: <strong><?php if($scholarshipDetails!=''){echo $scholarshipDetails->criteria;}?> </strong> </p>
											
										</div>


									<h1> Downloadable Files</h1>
									<div class="table-responsive">
									<table  id="exportexample" class="table table-striped table-bordered text-nowrap" >
										<thead>
											<tr>
												<th>Sl No.</th>
												
												<th>Actions</th> 

											</tr>
										</thead>
										<tbody>
											<?php if($document->num_rows()>0){$i=1; foreach($document->result() as $row ){ ?>

												<tr>

													<td><?php echo $i;?></td>
													
													<td><a  download href="<?php echo base_url()?>attachment_files/institution_scholarship_files/<?php echo $row->file?>"><button class="btn btn-success">Download</button> </a></td>
																						
												 </tr>
												

									
											<?php $i=$i+1;} } ?>	

										</tbody>
									</table>
								</div>





										
								

						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->















