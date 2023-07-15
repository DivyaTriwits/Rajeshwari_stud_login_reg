<!-- Main Content-->
<div class="main-content pt-4 mt-5 mb-0">
	<div class="container">

		<!-- Page Header -->
		<!-- <div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('student_profile')?>">Student Profile</a></li>
							<li class="breadcrumb-item active">Documents Details</li>
						</ol>
					</nav>
				</div>
			</div> -->
			<!-- End Page Header -->
			<!-- Row -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h6 class="main-content-label mb-1">Documents</h6>

							</div>
							<br>
							<!-- <h6>Address Details</h6> -->
							<form id="documentForm" method="POST" action="<?php echo base_url('add-document-files')?>">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">

											<p class="mg-b-10">Document Type <i class="ion-help-circled" data-toggle="tooltip" title="if your doing phd then add your masters and Graduation marks cards"></i></p>
											<select class="form-control select2" name="document_type" id="document_type">
												<option selected="" disabled="">Select document type
												</option>
												<option value="Income Caste">
													Income Certificate
												</option>
												<option value="Income Caste">
													Caste Certificate
												</option>
												<option value="Aadhar Card">
													Aadhar Card
												</option>
												<option value="Bank Passbook">
													Bank Passbook
												</option>
												<option value="10th(Marks Card)">
													10th (Marks Card)
												</option>
												<option value="ITI(Marks Card)">
													ITI (Marks Card)
												</option>
												<option value="12th(Marks Card)">
													12th(Marks Card)
												</option>
												<option value="Diploma(Marks Card)">
													Diploma (Previous Year Marks Card)
												</option>
												<option value="Graduation(Marks Card)">
													Graduation(Previous Year Marks Card)
												</option>
												<option value="Masters(Marks Card)">
													Masters(Previous Year Marks Card)
												</option>
												<option value="Phd(Marks Card)">
													Phd(Previous Year Marks Card)
												</option>
												
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Select Semester <i class="ion-help-circled" data-toggle="tooltip" title="which semester marks card your uploading"></i></p>
											<select class="form-control select2" name="semester" id="semester">
												<option selected="" disabled="">Select Semester
												</option>
												<option value="1">
													Sem 1
												</option>
												<option value="2">
													Sem 2
												</option>
												<option value="3">
													Sem 3
												</option>
												<option value="4">
													Sem 4
												</option>
												<option value="5">
													Sem 5
												</option>
												<option value="6">
													Sem 6
												</option>
												<option value="7">
													Sem 7
												</option>
												<option value="8">
													Sem 8
												</option>
											</select>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Drive Link for file <i class="ion-help-circled" data-toggle="tooltip" title="add your file in drive and please use that link here "></i></p>
											<input type="text" class="form-control" name="document_files_links" 
											placeholder="file's drive link">
										</div>
									</div>




								</div>
								

								<br>
								<a href="<?php echo base_url('student-home')?>">
									<button style="background-color: #ff7f45; border-color: #ff7f45" type="Submit" class="btn ripple btn-primary float-right">Submit</button>
								</a>
								
							</form>
						</div>

					</div>

				</div>
				<!-- End Row -->
			</div>
			<!-- Row -->

			<div class="row">
				<?php $index=1; foreach($getDocuments as $file){?>
					<div class="col-md-12 col-xl-4">
						<div class="card">
							<div class="card-header custom-card-header border-bottom-0 ">
								<h5 class="main-content-label tx-dark my-auto tx-medium mb-0">Document Type</h5>
								<div class="card-options">
									<!-- <a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="">View Demo</a> -->
									<a href=""onclick="setDataFunction('<?php echo $file->id; ?>',
										'<?php echo $file->document_files_links; ?>',
										)"  data-target="#modaldemo3" data-toggle="modal"><i class="fa fa-edit" style="color: green;"></i></a>
										<a href="" onclick="setDeleteFunction('<?php echo $file->id;?>')" data-target="#modaldemo5" data-toggle="modal" href=""><i class="fe fe-trash" style="cursor: pointer; color: red" ></i></a>
									</div>
								</div>
								<div class="card-body">
									<a target="_blank"href="<?php echo $file->document_files_links;?>"><?php echo $file->document_type;?></a>

								</div>
							</div>
						</div>
					<?php }?>
				</div>
				<!-- Large Modal -->
				<div class="modal fade" id="modaldemo3">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">Update Document</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<form id="documentForm" method="POST" action="<?php echo base_url('update-each-document')?>">
								<input type="hidden" name="eid" id="eid">
								<div class="modal-body">

									<div class="row">

										<div class="col-md-12">
											<div class="form-group">
												<p class="mg-b-10">Drive Link for file</p>
												<input type="text" class="form-control" name="edocument_files_links" id="edocument_files_links" 
												placeholder="file's drive link">
											</div>
										</div>

									</div>

									<br>
						<!-- 	<button style="background-color: #ff7f45; border-color: #ff7f45" type="Submit" class="btn ripple btn-primary float-right">Submit</button>
						</form> -->
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="Submit"style="background-color:#ff7f45;border-color:#ff7f45">Update</button>
						<button class="btn ripple btn-outline-light" data-dismiss="modal" type="button">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal -->
	<div class="modal fade" id="modaldemo5">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content tx-size-sm">
				<div class="modal-body tx-center pd-y-20 pd-x-20">
					<form method="post"action="<?php echo base_url('delete-document')?>">
						<input type="text" name="did" id="did" hidden="">	
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="tx-danger mg-b-20">Warning: Are you sure you want to delete?</h4>
						<p class="mg-b-20 mg-x-20">You won't be able to revert back this!</p>
						<input type="submit" value="Delete" class="btn btn-danger">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--End Large Modal -->
	<!-- End Row -->
	<!-- Row -->
		<!-- <div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div>
							<h6 class="main-content-label mb-1">Document Lists</h6>
						</div>
						<div class="col-md-12 col-xl-4">
							<div class="card">
								<div class="card-header custom-card-header border-bottom-0 ">
									<h5 class="main-content-label tx-dark my-auto tx-medium mb-0">Basic Card</h5>
									<div class="card-options">
										<a href="#" class="btn btn-primary btn-sm">Action 1</a>
										<a href="#" class="btn btn-secondary btn-sm ml-2">Action 2</a>
									</div>
								</div>
								<div class="card-body">
								Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
								<div class="card-footer">
									This is Basic card footer
								</div>
							</div>
						</div> -->
					<!-- 	<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="wd-20p">Sl.No</th>
										<th class="wd-25p">Document Type</th>
										<th class="wd-15p">Semester</th>
										<th class="wd-20p">Doucment Link</th>
										
										
									</tr>
								</thead>
								<tbody>
									<?php $index=1; foreach($getDocuments as $file){?>
										<tr>
											<td>
												<?php echo $index;?>
											</td>
											<td>
												<?php echo $file->document_type;?>
											</td>
											<td>
												<?php echo $file->semester;?>
											</td>
											<td>
												<a target="_blank"href="<?php echo $file->document_files_links;?>"><i class="ion-eye" style="width: 100px"></i></a>
											</td>
										</tr>


										<?php $index++;}?>
									</tbody>
								</table>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->
		</div>
	</div>

	<script>
		function setDeleteFunction(id) {
	// alert(id);
	$('#did').val(id);
}
</script>
<script>
	function setDataFunction(id, document_files_links) 
	{

		$('#eid').val(id);
		$('#edocument_files_links').val(document_files_links);

	}
</script>


<!-- End Main Content-->
<?php if($this->session->flashdata('add-success')){?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Your Document Added!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('profile-success')){?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Your Profile Updated!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('update-success')){?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Your Document Updated!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('delete-success')){?>		
	<Script>
		swal({
			title: 'Well done!',
			text: 'Your Document Deleted!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
<?php }?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#document_type').change(function() {
			if( $(this).val() == 'Income Caste') {

				$('#semester').prop( "disabled", true );
			} 
			else if($(this).val() == 'Aadhar Card') {       
				$('#semester').prop( "disabled", true );
			}

			else if($(this).val() == 'Bank Passbook') {       
				$('#semester').prop( "disabled", true );

			}
			else if($(this).val() == '10th') {       
				$('#semester').prop( "disabled", true );

			}
			else if($(this).val() == 'Bank Passbook') {       
				$('#semester').prop( "disabled", true );

			}
			else if($(this).val() == 'Bank Passbook') {       
				$('#semester').prop( "disabled", true );

			}
			else if($(this).val() == '10th(Marks Card)') {       
				$('#semester').prop( "disabled", true );

			}
			else if($(this).val() == 'ITI(Marks Card)') {       
				$('#semester').prop( "disabled", true );

			}
			else if($(this).val() == '12th(Marks Card)') {       
				$('#semester').prop( "disabled", true );

			}
			else
			{
				$('#semester').prop( "disabled", false );
			}

		});

	});  
</script>
<?php if($this->session->flashdata('bank-details-update-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'Lets improve your documents!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
	<?php }?>