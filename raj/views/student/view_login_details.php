
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
				<div class="col-lg-12">
					<div class="card overflow-hidden">
						<div class="card-body">
							<div>
								<h6 class="main-content-label mb-1">Last Login Details</h6>
							</div>
							<div class="table-responsive">
								<table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
									<thead>
										<tr>
											<th>Sl.No</th>
											<th>Date</th>
											<th>Login Time</th>
											<!-- <th>Ip Address</th>	 -->
										</tr>
										</thead>
										<tbody>
											<?php $index=1;foreach ($getLoginDetails as $eachLogin) {?>
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
							<br>
								<div align="left"><a  href="<?php echo base_url('login-history')?>"><button class="btn ripple btn-info btn-sm "style="background-color: #ff7f45;">view Login history</button></a></div>
						</div>

					</div>
				</div>

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
			$eachLogin         = $templateEle.clone().removeAttr('id').insertBefore($templateEle).removeClass('hide');

        // $el          = $eachLogin.find('input').eq(0).attr('name', 'student_activity_name[]');
        // console.log($eachLogin.find('input').eq(0));
        $('#defaultForm').bootstrapValidator('addField', 'student_activity_name[]');
        $('#defaultForm').bootstrapValidator('addField', 'student_activity_achievement[]');
        // $(".select2").select2();
        // $el.attr('placeholder', 'Textbox #' + index);
        $eachLogin.on('click', '.removeButton', function(e) {
          // $('#defaultForm').bootstrapValidator('removeField', $el);
        //   $('#defaultForm').bootstrapValidator('removeField', 'student_activity_name[]');
        // $('#defaultForm').bootstrapValidator('removeField', 'student_activity_achievement[]');
        // $('#defaultForm').bootstrapValidator('removeField', 'rateperunit[]');
        // $('#defaultForm').bootstrapValidator('removeField', 'totalamount[]');
        $eachLogin.remove();
    });
    });

		$('#defaultForm').bootstrapValidator({
			message: 'This value is not valid',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				'student_activity_name[]': {
					validators: {
						notEmpty: {
							message: 'The Student Activity Name field is required'
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
