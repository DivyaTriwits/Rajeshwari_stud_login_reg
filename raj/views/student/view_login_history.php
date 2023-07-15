



<!-- Main Content-->
<div class="main-content pt-5 mt-5">
	<div class="container-fluid">

		<!-- Page Header -->
	<!-- 	<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Support</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('scholarship')?>">Scholarship</a></li>
							<li class="breadcrumb-item active">Scholarships List</li>
						</ol>
					</nav>
				</div>
			</div> -->
			<!-- <div align="right"><a class="btn ripple btn-info" href="<?php echo base_url('scholarship-form')?>"style="background-color: #ff7f45;
				border-color: #ff7f45">Add Scholarship</a></div> -->

				<!-- End Page Header -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div>
									<h6 class="main-content-label mb-1">Login History</h6>
								</div>
								<div class="table-responsive">
									<table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
										<thead>
											<tr>

												<th>Sl.No</th>
												<th>Date</th>
												<th>Login Time</th>
											</tr>
										</thead>
										<tbody>
											<?php $index=1;foreach ($getLoginHistory as $eachLogin) {?>
												<tr>
													<td><?php echo $index?></td>
													<td><?php echo date("d-m-Y", strtotime( $eachLogin->date))?></td>
													<td><?php echo date("d-m-Y h:i:s A ", strtotime($eachLogin->login_time))?></td>

													<!-- <td><?php echo $eachLogin->ip_address?></td> -->
												<!-- <td>
												<?php 
												if($eachLogin->login_time!='' && $eachLogin->logout_time!='' ){
													$date1 = strtotime($eachLogin->login_time);  
													$date2 = strtotime($eachLogin->logout_time );
													$diff = abs($date2 - $date1);

													$years = floor($diff / (365*60*60*24));  
													$months = floor(($diff - $years * 365*60*60*24) 
														/ (30*60*60*24)); 

													$days = floor(($diff - $years * 365*60*60*24 -  
														$months*30*60*60*24)/ (60*60*24));
													$hours = floor(($diff - $years * 365*60*60*24  
														- $months*30*60*60*24 - $days*60*60*24) 
													/ (60*60)); 
													$minutes = floor(($diff - $years * 365*60*60*24  
														- $months*30*60*60*24 - $days*60*60*24  
														- $hours*60*60)/ 60);
													$seconds = floor(($diff - $years * 365*60*60*24  
														- $months*30*60*60*24 - $days*60*60*24 
														- $hours*60*60 - $minutes*60)); 

													printf(" %d hours, "
														. "%d minutes, %d seconds", 
														$hours, $minutes, $seconds);

												}
												?>
											</td> -->

										</tr>
										<?php $index++;}?>
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



	<script>
		function setDeleteFunction(id) {
        // alert(id);
        $('#did').val(id);

    }
</script>
</script>
<?php if($this->session->flashdata('delete-success')){?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Scholarship Deleted Successfully..',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
<?php }?>

<?php if($this->session->flashdata('scholarship-add-success')){?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Scholarship Added Successfully..',
			type: 'success',
			confirmButtonColor: '#57a94f'
		});
	</Script>
<?php }?>



<?php if($this->session->flashdata('scholarship-update-success')){?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Scholarship Update Successfully..',
			type: 'success',
			confirmButtonColor: '#57a94f'
		});
	</Script>
<?php }?>
