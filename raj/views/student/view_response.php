<!-- Main Content-->
<div class="main-content pt-5 mt-5">
	<div class="container-fluid">

	<!-- 	<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Support</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('requested-callback-list')?>">Request Call Back</a></li>
							<li class="breadcrumb-item active">Request call Back List</li>
						</ol>
					</nav>
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
												<th>Request</th>
												<th>Response Staus</th>
												<th>Dates</th>

											</tr>
										</thead>
										<tbody>
											<?php if($response->num_rows()>0){ $i=1; foreach($response->result() as $row){?>

											<tr>
												<td><?php echo $i;?> </td>
												<td><?php echo $row->message;?> </td>
												<td>
													<?php if($row->status==1){?>
														Contacted <i style="color:green" class="fe fe-check"></i><br>
												 <?php	} else { ?>
												 		Contacted <i style="color:red" class="fe fe-x"></i><br>
												 <?php }?>

												 <?php if($row->requested_issue=='solved'){?>
												 	Requested Issue: <strong style="color:green">Solved</strong>
												 <?php } else if($row->requested_issue=='not solved'){?>
												 	Requested Issue: <strong style="color:red">Not Solved</strong>
												<?php } else if($row->requested_issue=='processing') {?>
													Requested Issue:<strong style="color:green">Processing</strong> 
												<?php } else if($row->requested_issue=='invalid request') {?>
													Requested Issue: <strong style="color:red">Invalid Request</strong>
												<?php } else { ?>
													Requested Issues: <strong style="color:red">Pending</strong>
												<?php } ?>
												 </td>
												<td>Requested By You: <?php echo $row->requested_date ;?> <br>
													Contacted By TGS Team:  <?php echo $row->contacted_date ;?><br>
													Last Update:<?php echo $row->updated_date ;?>
												 </td>
											
											</tr>

											<?php $i=$i+1; } }?>
										</tbody>



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