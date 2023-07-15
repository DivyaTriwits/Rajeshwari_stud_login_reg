
<!-- Main Content-->
<div class="main-content pt-4 mt-5 mb-4">
	<div class="container-fluid">
		<!-- Row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">

						<div class="">

							<br>
						</div>

						<div class="table-responsive">
							<table id="exportexample" class="table table-striped table-bordered text-nowrap" >
								<thead>
									<tr>
										<th>Sl No.</th>
										<th>Redeem Ticket</th>
										
										<th>Redeem Request</th>
										<th>Request Date</th>
										<th>Status</th>
										<!-- <th>Action</th> -->
									</tr>
								</thead>
								<tbody>
									<?php if($getRedeemRequests->num_rows()>0){ $i=1; foreach($getRedeemRequests->result() as $row){?>
										<tr>
											<td><?php echo $i;?> </td>
											<td><?php echo $row->redeem_request_id;?> </td>
											<td style="color: green"><?php echo $row->redeem_option;?></td>
											<td><?php echo date("Y-m-d",strtotime($row->request_date))?> </td>
											<td><?php if($row->request_solved_status==0){?>
												<span style="color: red">Request Not Solved <i style="color: red" class="fe fe-x" ></i></span>
											<?php } else {?>
												<span style="color: green">Request Solved <i class="fe fe-check" style="color: green;"></i></span>
											<?php } ?>
										</td>

														<!-- <td><a style="margin-right: 10px;" onclick="setDataFunction(
														'<?php echo $row->id; ?>',
														'<?php echo $row->student_activity_type_id?>',
														'<?php echo $row->student_activity_name?>'
													
														)"  href="javascrupt:void(0)"><i class="fe fe-edit-3" style="color: green" ></i></a>
													</td> -->
												</tr>

												<?php $i=$i+1; } }?>
											</tbody>

										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			