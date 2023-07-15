<?php if ($this->session->flashdata('login-success')) { ?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Login Success Welcome to Dashboard....!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
	<?php
} ?>
<div class="main-content pt-5 mt-5 mb-5">
<div class="container">
				<div class="row text-center">

					<div class="col-lg-6 col-md-8 ">
						<a href="<?php echo base_url('influencer-profile')?>">
							<div class="card plan-card">
								<div class="card-block">
									<div class="p-2">
										<h1 class="pt-2"><i class="fe fe-user plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary">Update Profile</h6>
									</div>


								</div>
							</div>
						</a>

					</div>
					<div class="col-lg-6 col-md-8 ">
						<a href="<?php echo base_url('refer-and-earn')?>">
							<div class="card plan-card">

								<div class="card-block">
									<div class="p-2">
										<h1 class="pt-2"><i class="ion ion-person-add plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary">Refer and Earn</h6>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-8 ">
						<a href="<?php echo base_url()?>influencer-requests">
							<div class="card plan-card">
								<div class="card-block">
									<div class="p-2">
										<h1 class="pt-2"><i class="fe fe-phone-call plan-icon bg-secondary"></i></h1>
										<h6 class="text-uppercase font-weight-semibold text-secondary">Redeem Requests</h6>
									</div>
									
								</div>
							</div>
						</a>
					</div>

					<!-- End Row -->

				</div>
			</div>
		</div>