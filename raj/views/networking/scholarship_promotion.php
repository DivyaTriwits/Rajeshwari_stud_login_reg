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


										<div class="p-4">
											<label class="main-content-label tx-13 mg-b-20">Scholarship Details</label>
											<div class="d-sm-flex">
							

											<div class="mg-sm-r-20 mg-b-10">
												<div class="main-profile-contact-list">
													<div class="media">
														<div class="media-icon bg-success-transparent text-primary"> <i class="ion-cash" ></i> </div>
														<div class="media-body"><strong> <span style="color: grey">Scholarship Benefits</span></strong> 
															<div> <?php if($getScholarship!=''){echo $getScholarship->benefits;}?>
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
								
						


											
								
											   

								
					

												    <!--<?php $scholarsipId=" "; if($getScholarship!=''){ $scholarsipId=$getScholarship->scholarship_id;}?>-->
										                 
													<a href="<?php echo base_url()?>fill-details?sid=<?php echo $this->input->get('sid') ?>" target="_blank">
														<button style="background-color: #ff7f45; border-color: #ff7f45" class="btn ripple btn-primary float-right">Go to scholarship page<i class="fe fe-arrow-right ml-1"></i></button>
													</a>
											
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