
			<!-- Main Content-->
			<div class="main-content pt-5 mt-5">
				<div class="container-fluid">

						<!-- Page Header -->
				<!-- 		<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30">Instititional Dashboard</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Agreement Paper</a></li>
								</ol>
							</div>
						</div> -->
						<!-- End Page Header  -->
						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											
										</div>
										<!-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> -->
										<form method="post" action="<?php echo base_url('institute/store-agreement-paper')?>" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Document Name</p>
													<input type="text" class="form-control" name="class" placeholder="" value="" >
												</div>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-6">
												<p class="mg-b-10">Agreement Paper</p>
												<div class="input-group file-browser">
													<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
													<label class="input-group-btn">
														<span class="btn btn-primary">
															Browse <input type="file" name="files" style="display: none;" multiple>
														</span>
													</label>
												</div>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-6">
												
														<input style="background-color: #ff7f45; border-color: #ff7f45" type="submit" name="submit" value="submit" class="btn ripple btn-primary" >
													
											</div>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										
										<div class="">
											
											<br>
										</div>
										
										<div class="table-responsive">
											<table id="example3" class="table table-striped table-bordered text-nowrap" >
												<thead>
													<tr>
														<th>Sl No.</th>
														<th>Document Name</th>
														<th>Agreement Paper</th>
														
														
													</tr>
												</thead>
												<tbody>
													<?php if($document->num_rows()>0){$i=1; foreach( $document->result() as $row){?>
													<tr>
														<td><?php echo $i; ?></td>
														<td><?php echo $row->document_name;?></td>
														<td><a download class="btn" style="background-color:#460056;border-color:#460056" href="<?php echo base_url()?>/institute_uploads/institute_agreement_papers/<?php echo $row->file;?>">Download </a></td>
														
														
													</tr>
													<?php $i=$i+1; } } ?>
													
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




	<?php if($this->session->flashdata('add-institution-aggrement-paper-details-success')){?>		
			<Script>
				swal({
					title: 'Agreement Paper!',
					text: 'Agreement paper details added successfully!',
					type: 'success',
					timer: 3000,
        			showConfirmButton: false
				});
			</Script>
		<?php }?>


		<?php if($this->session->flashdata('add-institution-aggrement-paper-details-failure')){?>		
			<Script>
				swal({
					title: 'Agreement Paper!',
					text: 'Failed to add agreement paper details!',
					type: 'error',
					timer: 3000,
       				showConfirmButton: false
				});
			</Script>
		<?php }?>