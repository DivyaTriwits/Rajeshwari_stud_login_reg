
<!-- Main Content-->
	<div class="main-content pt-5 mt-5">
				<div class="container-fluid">

	<!-- 	<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Institution</a>
						</li>
						
							<li class="breadcrumb-item active">Institution Scholarship </li>
						</ol>
					</nav>
				</div>
			</div> -->



<!-- 			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<form id="searchMembers" >
								<div class="row pt-3">


									
								
								


						
									
										<div class="form-actions">
											<div class="card-body">

												<input class="btn ripple btn-primary" type="submit" style="background-color: #ff7f45; border-color: #ff7f45" value="Search">
											

												

													<a href="<?php echo base_url()?>view-institution-scholarship-list" class="btn waves-effect waves-light btn-secondary m-t-30">Reset</a>

											</div>
										</div>







									</div>
								</form>
							</div>
						</div>
					</div>
				</div> -->



				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">

								<div class="table-responsive">
									<table id="exportexample" class="table table-striped table-bordered text-nowrap" >
										<thead>
											<tr>
												<th>Sl No.</th>
												<th>Scholarship Name</th>
												<th>Institute Name</th>
												<th>Start Date</th>
												<th>End Date</th>
											
												<th>View More</th> 

											</tr>
										</thead>
										<tbody>
											<?php if($scholarshipDetails->num_rows()>0){$i=1; foreach($scholarshipDetails->result() as $row ){ ?>

												<tr>
													<td><?php echo $i;?></td>
													<td><?php echo $row->scholarship_name;?></td>
													<td><?php echo $row->institute_name;?></td>
													<td>
														 <?php echo  date("d-M-Y", strtotime($row->start_date)); ?>
													<!-- 	<?php echo  $row->start_date;?>  -->

													</td>
													<td>

														 <?php echo  date("d-M-Y", strtotime($row->last_date)); ?>
														 
														<!-- <?php echo  $row->last_date;?> -->
														

													</td>
													
													<td> <a style="margin-right: 20px; color: #ff7f45" href="<?php echo base_url()?>institute/view-scholarship-details/<?php echo $row->scholarship_id;?>"><i class="fe fe-eye"></i></a> </td>
												 </tr>
												

										
										

											

											<?php $i=$i+1;} } ?>	

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->






			</div>
		</div>
		<!-- End Main Content-->


		<?php if($this->session->flashdata('follow-up-status-changed-to-pending-success')){?>		
			<Script>
				swal({
					title: 'Follow Up Status!',
					text: 'Follow up status changed to pending successfully!',
					type: 'success',
					timer: 3000,
        			showConfirmButton: false
				});
			</Script>
		<?php }?>


		<?php if($this->session->flashdata('follow-up-status-changed-to-pending-failure')){?>		
			<Script>
				swal({
					title: 'Follow Up Status!',
					text: 'Failed to change the status to pending!',
					type: 'error',
					timer: 3000,
       				showConfirmButton: false
				});
			</Script>
		<?php }?>



		<?php if($this->session->flashdata('follow-up-status-changed-to-done-success')){?>		
			<Script>
				swal({
					title: 'Follow Up Status!',
					text: 'Follow up status changed to done successfully.',
					type: 'success',
					timer: 3000,
        			showConfirmButton: false
				});
			</Script>
		<?php }?>


		<?php if($this->session->flashdata('follow-up-status-changed-to-done-failure')){?>		
			<Script>
				swal({
					title: 'Follow Up Status!',
					text: 'Failed to change the status to done!',
					type: 'error',
					timer: 3000,
        			showConfirmButton: false
				});
			</Script>
		<?php }?>

			<?php if($this->session->flashdata('lead-details-updated-in-follow-up-page-success')){?>		
			<Script>
				swal({
					title: 'Lead Details!',
					text: 'Lead details updated successfully.',
					type: 'success',
					timer: 3000,
        			showConfirmButton: false
				});
			</Script>
		<?php }?>


		<?php if($this->session->flashdata('lead-details-updated-in-follow-up-page-failure')){?>		
			<Script>
				swal({
					title: 'Lead Details!',
					text: 'Failed to update lead details!',
					type: 'error',
					timer: 3000,
        			showConfirmButton: false
				});
			</Script>
		<?php }?>






	







