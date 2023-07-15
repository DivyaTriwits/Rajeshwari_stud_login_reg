		<!-- Main Content-->
			<div class="main-content pt-0">
				<div class="container">

						<!-- Page Header -->
						<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30">Institute Dashboard</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Student Details</li>
								</ol>
							</div>
						</div>
						<!-- End Page Header -->
						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
								<!-- 		<div class="col-md-2 float-center">
											<select class="form-control select2" name="activity" id="cars">
										
											<option value="volvo">Volvo</option>
											<option value="saab">Saab</option>
										
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										
									</select>

											</div> -->
										<div class="">
											
											<br>
										</div>
										
										<div class="table-responsive">
									<table id="exportexample" class="table table-striped table-bordered text-nowrap" >
												<thead>
													<tr>
															<th>Sl. No</th>
														<th>Student name</th>
														<th>Student Email</th>
														<th>Student Mobile No.</th>
														<th>Student Whatsapp No.</th>
														<th>Course</th>
														<th>Register Date</th>
														<th>View</th>
													</tr>
												</thead>
												<tbody>
													<?php $index=1;
													foreach($student->result() as $stud){?>
													<tr>
														<td><?php echo $index;?></td>
														<td><?php echo $stud->student_name?></td>
														<td><?php echo $stud->registered_email?></td>
														<td><?php echo $stud->registered_mobile_no?></td>
														<td><?php echo $stud->registered_whatsapp_mobile_no?></td>
														<td><?php echo $stud->course_name?></td>
														<td><?php $date = $stud->registration_datetime; echo date('d-m-Y',strtotime($date))?></td>
														<td><a style="color: #ff7f45" href="<?php echo base_url('institute/student_profile_details/'.$stud->student_username)?>">View</a></td>
														
													</tr>
													<?php $index++; }?>
														
													
													
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
