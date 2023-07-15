




			<!-- Main Content-->
			<div class="main-content pt-4 mt-5 mb-5">
			<div class="container-fluid">

						<!-- Page Header -->
						<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30">Invoices</h1>
								<!-- ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Invoice</li>
								</ol> -->
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
														<th>Invoice Id</th>
														<th>Date</th>
													
														<th>View</th>
													</tr>
												</thead>
												<tbody>
													<?php if($invoices->num_rows() > 0){
													 $index=1;
													
													foreach($invoices->result() as $inv){?>
													<tr>
														<td><?php echo $index;?></td>
														<td><?php echo $inv->invoice_id?></td>
														<td><?php $date = $inv->date; echo date('d-m-Y',strtotime($date))?></td>
														<td><a style="color: #ff7f45" href="<?php echo base_url('invoice/'.$inv->invoice_id)?>"><i class="fe fe-eye"></i></a></td>
														
													</tr>
													<?php $index++; } }?>
														
													
													
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

		