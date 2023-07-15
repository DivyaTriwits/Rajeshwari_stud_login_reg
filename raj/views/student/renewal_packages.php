
<div class="main-content pt-5 mt-5 mb-5">
	<div class="container fuild">
<div class="row">	
			<?php foreach ($subscriptionPackages as $eachsubscriptionPackages) {?>

							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card">
									<form method="Post"action="<?php echo base_url('subscription-package')?>">
									<div class="card-body user-card text-center">
										<!-- <div class="main-img-user avatar-lg online text-center">
											<h5 class="mb-0" style="font-size:20px">499.00</h5>
										</div> -->
										<div class="mt-2">
											<h5 class="mb-0" style="font-size:20px">499.00</h5>
											<!-- <p class="mb-1 tx-inverse">Team Leader </p> -->
											<input type="hidden" name="subscription" value="<?php echo $eachsubscriptionPackages->id?>">
											<!-- <span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i><?php echo $eachsubscriptionPackages->id?></span> -->
										</div>

										<input type="submit" value="Renew Now" class="btn ripple btn-primary mt-3">
									</div>
								</form>
								</div>
							</div>
						</div>
						<!--End Row -->
					</div>
				</div>
				<?php }?>