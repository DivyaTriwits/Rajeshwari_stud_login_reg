
			<!-- Main Content-->
			<div class="main-content pt-5 mt-5">
				<div class="container-fluid">

						<!-- Page Header -->
				<!-- 		<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30">Sales Dashborad</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Home Page</li>
								</ol>
							</div>
						</div> -->
						<!-- End Page Header -->


								<!-- Row -->
							<div class="row mt-5">
								<div class="col-12">
									<div class="card">
										<div class="card-body">
										
											<h5> Share with your friends to get the link</h5>

														<!-- Row -->
											<div class="row mt-4">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
													<div class="card overflow-hidden">
														<div class="">
															<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo HOME_PATH?>new-scholarship?sid=<?php echo $this->input->get('sid')?>" onclick="showScholarshipLink()" >
																<div class="row">
																	<div class="col-12">
																		<div class="facebook p-4 ">
																			<div class="text-center text-white social">
																				<i class="fe fe-facebook"></i>
																			</div>
																		</div>
															
																	</div>
																</div>
															</a>
														</div>
													</div>
												</div>


												<div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
													<div class="card overflow-hidden">
														<div class="">
														<!-- 	<a href="http://www.twitter.com/share?url=<?php echo HOME_PATH?>free-scholarship"> -->
															<a target="_blank" href="https://twitter.com/intent/tweet?text=Hey! I found this scholarship link for free on THE GLOBAL SCHOLARSHIP portal. Don't miss it. Click and apply now! <?php echo HOME_PATH?>new-scholarship?sid=<?php echo $this->input->get('sid')?>" onclick="showScholarshipLink()">
																<div class="row">
																	<div class="col-12">
																		<div class="twitter p-4 ">
																			<div class="text-center text-white social">
																				<i class="fe fe-twitter"></i>
																			</div>
																		</div>
																	
																	</div>
																</div>
															</a>
														</div>
													</div>
												</div>
											
											
																


										
												<div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
													<div class="card overflow-hidden">
														<div class="">
															<a target="_blank" href="https://api.whatsapp.com/send?text=Hey! I found this scholarship link for free on THE GLOBAL SCHOLARSHIP portal. Don't miss it. Click and apply now! <?php echo HOME_PATH?>new-scholarship?sid=<?php echo $this->input->get('sid')?>"   data-action="share/whatsapp/share" onclick="showScholarshipLink()">
																<div class="row">
																	<div class="col-12">
																		<div class=" p-4 " style="background-color:#25D366">
																			<div class="text-center text-white social">
																				<i class="zmdi zmdi-whatsapp" ></i>
																			</div>
																		</div>
																
																	</div>
																</div>
															</a>
														</div>
													</div>
												</div>


												<div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
													<div class="card overflow-hidden">
														<div class="">
															<a target="_blank" href="https://t.me/share/url?url=<?php echo HOME_PATH?>new-scholarship?sid=<?php echo $this->input->get('sid')?>&text=Hey! I found this scholarship link for free on THE GLOBAL SCHOLARSHIP portal. Don't miss it. Click and apply now!" onclick="showScholarshipLink()">
																<div class="row">
																	<div class="col-12">
																		<div class=" p-4 " style="background-color:#0088cc">
																			<div class="text-center text-white social">
																				<i class="si si-paper-plane"></i>
																			</div>
																		</div>
																
																	</div>
																</div>
															</a>
														</div>
													</div>
												</div>

											</div>
											<!-- Row -->
											
										</div>
									</div>
								</div>
							</div>


							<div class="modal fade" id="editModal">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content tx-size-sm">
										<div class="modal-body tx-center pd-y-20 pd-x-20">
											
											<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
												<h4 class="tx-success mg-b-20"> Wooh! you have earned the scholarship link </h4>
												<a target="_blank" href="<?php if($scholarship!=''){ echo $scholarship->scholarship_link; } ?>" >Click here to apply</a>
										</div>
									</div>
								</div>
							</div>





				</div>
			</div>
			<!-- End Main Content-->




<script>
	function showScholarshipLink() 
	{

		setTimeout(function(){ $('#editModal').modal('show') }, 5000);
			
		
	}
</script>