
<!-- Main Content-->
<div class="main-content pt-5 mt-5">
	<div class="container-fluid">

		<!-- Page Header -->
		<!-- <div class="page-header"> -->
		<!-- 	<div class="text-wrap">
				<div class="example">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-style1 mg-b-0">

							<li class="breadcrumb-item">
								<a href="<?php echo base_url()?>">Sales</a>
							</li>
							<li class="breadcrumb-item">Profile</li>
						
							</ol>
						</nav> 
					</div>
				</div>  -->

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>


								</div><br>
								<form  id="scholarshipForm" method="post"  action="<?php echo base_url()?>update-institution-profile">
									

									<div class="row">
									
										<div class="col-lg-4 form-group">

											<label class="form-label">Institution Name</label>
											<input class="form-control" name="instituteName" autocomplete="off" placeholder="Institution Name" 
											value="<?php if($profile!=''){echo $profile->institute_name;}?>" type="text">


											<input class="form-control" name="id" autocomplete="off" 
											value="<?php if($profile!=''){echo $profile->institute_userid;}?>" type="hidden">


										</div>
										
										<div class="col-lg-4 form-group">
											<label class="form-label">Full Name  </label>
											<input class="form-control" type="text"  name="fullname" value="<?php if($profile!=''){echo $profile->institute_user_fullname;}?>" placeholder="Your Full Name"  >
										</div>
										
										

										<div class="col-lg-4 form-group">
											<label class="form-label">Password</label>
											<input class="form-control" name="password" autocomplete="off"  type="text"

											value="<?php if($profile!=''){echo $profile->institute_password;}?>" 

											>
										</div>

											<div class="col-lg-4 form-group">
											<label class="form-label">Phone number</label>
											<input class="form-control" name="phoneNumber"  autocomplete="off"  type="text"

											value="<?php if($profile!=''){echo $profile->institute_user_mobile_no;}?>" 

											>
										</div>

										<div class="col-lg-4 form-group">
											<label class="form-label">Email</label>
											<input class="form-control"   type="text" value="<?php if($profile!=''){echo $profile->institute_email;}?>"  readonly>
										</div>
										
									
									
									
								</div>
								<button style="background-color: #ff7f45; border-color: #ff7f45" type="submit" class="btn ripple btn-primary float-right">Update</button>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php if($this->session->flashdata('profile-details-update-success')){?>		
		<Script>
			swal({
				title: 'Profile!',
				text: 'Profile details updated successfully!',
				type: 'success',
				timer: 3000,
        		showConfirmButton: false
			});
		</Script>
	<?php }?>


<?php if($this->session->flashdata('profile-details-update-error')){?>		
	<Script>
		swal({
			title: 'Profile!',
			text: 'Failed to update profile details!',
			type: 'error',
			timer: 3000,
        	showConfirmButton: false
		});
	</Script>
<?php }?>





