
			<!-- Main Content-->
			<div class="main-content pt-5 mt-5">
				<div class="container-fluid">

						<!-- Page Header -->
			<!-- 			<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30">Instititional Dashboard</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Statistics</a></li>
								</ol>
							</div>
						</div> -->
						<!-- End Page Header  -->

                        
						<!-- ROW-3 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
								<div class="row">
									<div class="col-xl-4 col-md-6 col-lg-6">
										<a href="<?php echo base_url('institute/student_details')?>">
										<div class="card">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-15 font-weight-medium">No. Of Students On Boarded</p>
														
														<p class="mb-1 text-muted fs-16 font-weight-semibold"><?php 
														$stud = $totalstudents->num_rows();
														$totalStud = $stud;
                                                        $totalStud = $this->Institute_model->moneyFormatIndia( $totalStud );
                                                         echo $totalStud; ?></p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service-2 text-white ">
															<i class="mdi mdi-account"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
										</a>
									</div>
									<div class="col-xl-4 col-md-6 col-lg-6">
										<div class="card">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-15 font-weight-medium"> No. Of Notification Sent</p>
														<?php $notif = count($totalnotifications)?>
														<p class="mb-1 text-muted fs-16 font-weight-semibold"><?php $notification = $notif;
														$notification = $this->Institute_model->moneyFormatIndia( $notification );
														echo $notification;?></p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service-2 text-white ">
															<i class="fa fa-bell"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-6 col-lg-6">
										<div class="card ">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-15 font-weight-medium">Sent Scholarship Worth</p>
														<?php
										  //print_r($scholarships);exit;
														$sumtotal=0;
                                            //  $total_worth = $this->Institute_admin_model->getScholarshipName(); 
														foreach($totalWorth as $worthing){
															$sumtotal+= $worthing->scholarship_worth;
															?>
														<?php }?>
														<p class="mb-1 text-muted fs-16 font-weight-semibold"><?php echo $this->Institute_model->moneyFormatIndia($sumtotal); ?></p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service-2 text-white">
															<i class="ion-cash"></i>
														</span>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-6 col-lg-6">
										<a href="<?php echo base_url('institute/updated-student-list')?>">
										<div class="card ">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-15 font-weight-medium"> No. Of Updated Profile</p>
														
														<p class="mb-1 text-muted fs-16 font-weight-semibold"><?php $update = $updatestudent->num_rows();
														$amount = $update;
														$amount = $this->Institute_model->moneyFormatIndia( $amount );
														echo $amount;?></p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service-2 text-white ">
															<i class="mdi mdi-trending-up"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
										</a>
									</div>
									<div class="col-xl-4 col-md-6 col-lg-6">
										<div class="card ">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-15 font-weight-medium">Total No. Of Applied </p>
														
														<p class="mb-1 text-muted fs-16 font-weight-semibold"><?php $apply = count($totalapplied);
														$applied = $apply;
														$applied = $this->Institute_model->moneyFormatIndia( $applied );
														echo $applied;?></p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service-2 text-white ">
															<i class="mdi mdi-trending-up"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
										<div class="col-xl-4 col-md-6 col-lg-6">
										<div class="card ">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-15 font-weight-medium">No. Of Visited Link </p>
														
														<p class="mb-1 text-muted fs-16 font-weight-semibold"><?php $visit = count($totalvisit);
														$visited = $apply;
														$visited = $this->Institute_model->moneyFormatIndia( $visited );
														echo $visited;?></p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service-2 text-white ">
															<i class="mdi mdi-trending-up"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-3 END -->
  
					<!-- Row -->
					<!-- 	<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bar Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisBar1"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bar Chart2</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisBar2"></div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
					
							<div class="col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Report Chart</h6>
											<!-- <p class="text-muted  card-sub-title">Below is the basic bar chart example with option <i>stacked</i> set to <i>true</i>.</p> -->
										</div>
										<div class="morris-wrapper-demo" id="myCharts"></div>
									</div>
								</div>
							</div>
							<script>
								$(document).ready(function() {
									$(function () {
										"use strict";
										Morris.Bar({
											element: 'myCharts',
											data: [{
												y: '2006',
												a: 20,
												b: 10,
												c: 60,
												d: 40
											}, {
												y: '2007',
												a: 30,
												b: 15,
												c: 60,
												d: 40
											}, {
												y: '2008',
												a: 60,
												b: 40,
												c: 60,
												d: 40
											}, {
												y: '2009',
												a: 40,
												b: 25,
												c: 60,
												d: 40
											}, {
												y: '2010',
												a: 30,
												b: 15,
												c: 60,
												d: 40
											}, {
												y: '2011',
												a: 45,
												b: 20,
												c: 60,
												d: 40
											}, {
												y: '2012',
												a: 60,
												b: 40,
												c: 60,
												d: 40
											}],
											
											xkey: 'y',
											ykeys: ['a', 'b', 'c', 'd'],
											labels: ['Sent Notification', 'Applied', 'Visited Link', 'Received'],
											barColors: ['rgba(33, 79 ,190,0.6)', 'rgba(229, 77, 38,0.6)', 'rgba(95, 29, 215,0.3)', '#009efb'],
											stacked: true,
											gridTextSize: 11,
											hideHover: 'auto',
											resize: true

										});
									});
								});
							</script>
						</div>
						<!-- End Row -->

						
				</div>
			</div>
			<!-- End Main Content-->
