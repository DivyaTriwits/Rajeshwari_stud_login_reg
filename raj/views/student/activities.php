
<!-- Main Content-->
<div class="main-content pt-4 mt-5 mb-0">
	<div class="container fuild">

		<!-- Page Header -->
	<!-- 	<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('student_profile')?>">Student Profile</a></li>
							<li class="breadcrumb-item active">Extracurricullar Activity </li>
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
								<h6 class="main-content-label mb-1">Extracurricular</h6>

							</div>
							<form id="defaultForm" method="post" action="<?php echo base_url('add-extracurricular-activity')?>">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Student Activity Name <span class="tx-danger">*</span> </p>
											<select class="form-control select2" style="width: 100%; color:black"
											name="student_activity_name[]">

											<option label="Select Activity">
											</option>
											<?php foreach($getActivityTypes as $eachType){?>
												<optgroup label="<?php echo $eachType->student_activity_type_id?>">
													<?php echo $eachType->student_activity_type_id;?>
												</optgroup>
												<?php foreach($getStudentSportsActivityName as $eachEntry){
													if( $eachType->student_activity_type_id ==  $eachEntry->student_activity_type_id){
														?>
														<option value="<?php echo $eachEntry->student_activity_name?>">
															<?php echo $eachEntry->student_activity_name?>
														</option>
													<?php }}?>
												<?php }?>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Student Activity Achievement <span class="tx-danger">*</span> </p>
											<select class="form-control" name="student_activity_achievement[]">
												<option label="Select Achievement">
												</option>

												<option value="District Level">
													District Level
												</option>

												<option value="State Level">
													State Level
												</option>
												<option value="National Level">
													National Level
												</option>

											</select>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<p class="mg-b-10" style="visibility: hidden;">Add More</p>
											<button type="button" class="btn btn-primary addButton" data-template="textbox" style="background-color:#460056;border-color:#460056">Add</button>
										</div>
									</div>
								</div>
								<!-- <div class="row"> -->
									<div class="form-group hide row" id="textboxTemplate">
										<div class="col-md-4">
											<div class="form-group">
											<p class="mg-b-10">Student Activity Name <span class="tx-danger">*</span> </p>
												<select class="form-control " style="width: 100%; color:black"
												name="student_activity_name[]">
												<option  label="Select Activity">
												</option>
												<?php foreach($getActivityTypes as $eachType){?>
													<optgroup label="<?php echo $eachType->student_activity_type_id?>">
														<?php echo $eachType->student_activity_type_id;?>
													</optgroup>
													<?php foreach($getStudentSportsActivityName as $eachEntry){
														if( $eachType->student_activity_type_id ==  $eachEntry->student_activity_type_id){
															?>
															<option value="<?php echo $eachEntry->student_activity_name?>">
																<?php echo $eachEntry->student_activity_name?>
															</option>
														<?php }}?>
													<?php }?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<p class="mg-b-10">Student Activity Achievement<span class="tx-danger">*</span> </p>
												<!-- 	<input class="form-control" type="text" name="student_activity_achievement[]" placeholder="Textbox #1" /> -->
												<select class="form-control" name="student_activity_achievement[]">
													<option label="Select Achievement">
													</option>
													<option value="District Level">
														District Level
													</option>
													<option value="State Level">
														State Level
													</option>
													<option value="National Level">
														National Level
													</option>

												</select>
											</div>
										</div>
										<br>
										<div class="col-lg-4">
											<p class="mg-b-10" style="visibility: hidden;">Add More</p>
											<button type="button" class="btn btn-danger removeButton">Remove</button>
										</div>
									</div>
								
									<a href="<?php echo base_url('bank-address-details')?>">
										<button style="background-color: #ff7f45; border-color: #ff7f45" type="submit" class="btn ripple btn-primary float-left">Submit</button>
									</a>
									<a href="<?php echo base_url('scholarships')?>">
										<button style="background-color: #ff7f45; border-color: #ff7f45" type="button" class="btn ripple btn-primary float-right">Next</button>
									</a>
									
								<!-- <input  style="background-color: #ff7f45; border-color: #ff7f45" type="Submit" class="btn ripple btn-primary float-right" name="submit" value="Submit">
								-->							</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h2 class="main-content-label mb-1">Acitivity List</h2>
								</div><br>
								<div class="table-responsive">
									<table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
										<thead>
											<th>Sl.No</th>
											<th>Activity Name</th>
											<th>Achievement</th>
											<th>Edit</th>	
											<th>Delete</th>											
										</thead>
										<tbody>
											<?php $index=1;foreach ($getExtracurricularActivity as $eachActivity) {?>
												<tr>
													<td><?php echo $index?></td>
													<td><?php echo $eachActivity->student_activity_name?></td>
													<td><?php echo $eachActivity->student_activity_achievement?></td>

													<td><a style="cursor: pointer;" onclick="setDataFunction('<?php echo $eachActivity->id; ?>',
														'<?php echo $eachActivity->student_activity_name; ?>',
														'<?php echo $eachActivity->student_activity_achievement; ?>')"
														data-target="#modaldemo3" data-toggle="modal" href="">
														<i class="fa fa-edit" style="color: green;"></i>
													</a></td>
													<td><a onclick="setDeleteFunction('<?php echo $eachActivity->id; ?>'
													)" data-target="#modaldemo5" data-toggle="modal" href="" ><i class="fe fe-trash" style="cursor: pointer; color: red" ></i></a></td>

												</tr>
												<?php $index++;}?>
											</tbody>	
										</table>
									</div>

								</div>

							</div>
						</div>

					</div>
					<div class="modal fade" id="modaldemo5">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content tx-size-sm">
								<div class="modal-body tx-center pd-y-20 pd-x-20">
									<form method="post"action="<?php echo base_url('delete-activity')?>">
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
					<div class="modal fade" id="modaldemo3">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content modal-content-demo">
								<div class="modal-header">
									<h6 class="modal-title">Update Activity</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<form method="Post" action="<?php echo base_url('update-extracurricular-activity')?>">
									<div class="modal-body">

										<input type="text" name="eid" id="eid"hidden="">
										<input type="hidden" name="webinarid" value="<?php $this->uri->segment(2)?>">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													
													<p class="mg-b-10">Student Activity Name</p>
													<select class="form-control " style="width: 100%; color:black"
													name="estudent_activity_name" id="estudent_activity_name">
													<option  label="Select Activity">
													</option>
													<?php foreach($getActivityTypes as $eachType){?>
														<optgroup label="<?php echo $eachType->student_activity_type_id?>">
															<?php echo $eachType->student_activity_type_id;?>
														</optgroup>
														<?php foreach($getStudentSportsActivityName as $eachEntry){
															if( $eachType->student_activity_type_id ==  $eachEntry->student_activity_type_id){
																?>
																<option value="<?php echo $eachEntry->student_activity_name?>">
																	<?php echo $eachEntry->student_activity_name?>
																</option>
															<?php }}?>
														<?php }?>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<p class="mg-b-10">Student Activity Achievement</p>
													<select class="form-control" name="estudent_activity_achievement"id="estudent_activity_achievement">
														<option label="Select Achievement">
														</option>

														<option value="District Level">
															District Level
														</option>

														<option value="State Level">
															State Level
														</option>
														<option value="National Level">
															National Level
														</option>

													</select>
												</div>
											</div>
										</div>

										
										<div class="modal-footer">
											<button class="btn ripple btn-primary" type="submit"style="background-color:#ff7f45;border-color:#ff7f45">Update</button>
											<button class="btn ripple btn-outline-light" data-dismiss="modal" type="button">Close</button>

										</div>
									</div>
								</form>
							</div>
						</div>
						<!--End Large Modal -->

					</div>
				</div>
			</div>



			<script>
				function setDeleteFunction(id) {
	// alert(links_id);
	$('#did').val(id);
}
</script>

<script>
	function setDataFunction(id, student_activity_name,student_activity_achievement) 
	{

		$('#eid').val(id);
		$('#estudent_activity_name').val(student_activity_name);
		$('#estudent_activity_achievement').val(student_activity_achievement);
	}
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.addButton').on('click', function() {
			var index = $(this).data('index');
			if (!index) {
				index = 1;
				$(this).data('index', 1);
			}
			index++;
			$(this).data('index', index);

			var template     = $(this).attr('data-template'),
			$templateEle = $('#' + template + 'Template'),
			$row         = $templateEle.clone().removeAttr('id').insertBefore($templateEle).removeClass('hide');

        // $el          = $row.find('input').eq(0).attr('name', 'student_activity_name[]');
        // console.log($row.find('input').eq(0));
        $('#defaultForm').bootstrapValidator('addField', 'student_activity_name[]');
        $('#defaultForm').bootstrapValidator('addField', 'student_activity_achievement[]');
        // $(".select2").select2();
        // $el.attr('placeholder', 'Textbox #' + index);
        $row.on('click', '.removeButton', function(e) {
          // $('#defaultForm').bootstrapValidator('removeField', $el);
        //   $('#defaultForm').bootstrapValidator('removeField', 'student_activity_name[]');
        // $('#defaultForm').bootstrapValidator('removeField', 'student_activity_achievement[]');
        // $('#defaultForm').bootstrapValidator('removeField', 'rateperunit[]');
        // $('#defaultForm').bootstrapValidator('removeField', 'totalamount[]');
        $row.remove();
    });
    });

		$('#defaultForm').bootstrapValidator({
			message: 'This value is not valid',
			feedbackIcons: {
				// valid: 'glyphicon glyphicon-ok',
				// invalid: 'glyphicon glyphicon-remove',
				// validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				'student_activity_name[]': {
					validators: {
						notEmpty: {
							message: 'The Student Activity Name is required'
						}
					}
				},
				'student_activity_achievement[]': {
					validators: {
						notEmpty: {
							message: 'The Student Achievement is required'
						}
					}
				}
			}

		})

		.on('error.field.bv', function(e, data) {
			console.log('error.field.bv', data.element);
		})
		.on('success.field.bv', function(e, data) {
                //console.log('success.field.bv -->', data.element);
            })
		.on('added.field.bv', function(e, data) {
                //console.log('Added element -->', data.field, data.element);
            })
		.on('removed.field.bv', function(e, data) {
                //console.log('Removed element -->', data.field, data.element);
            });

	});
</script>


<?php if($this->session->flashdata('update-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'Lets improve your Extracurricular Activity!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('add-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'lets click on next improve your Bank & Address Details!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('activity-update')){?>		
	<Script>
		swal({
			title: 'Well Done!',
			text: 'Extracurricular Activity Update Successfully!',
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
			text: 'Your Activity Deleted!',
			type: 'success',
			timer: 3000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
