

			<!-- Main Content-->
			<div class="main-content pt-0">
				<div class="container">

						<!-- Page Header -->
						<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30">Pages</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Invoice</li>
								</ol>
							</div>
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card" id="">
									<div class="card-body" id="printDiv">
										<div class="d-lg-flex">
											<h2 class="main-content-label mb-1">#<?php echo $invoice->invoice_id?></h2>
											<div class="ml-auto">
												<p class="mb-1"><span class="font-weight-bold">Invoice Date :</span> <?php $date = $invoice->date; echo date('d-m-Y',strtotime($date))?></p>
												<!-- <p class="mb-0"><span class="font-weight-bold">Due Date :</span> 01 May  2020</p> -->
											</div>
										</div>
										<hr class="mg-b-40">
										<div class="row">
											<div class="col-lg-6">
												<p class="h3">Invoice Form:</p>
												<img  src="<?php echo base_url()?>assets/img/brand/tgs-logo.png"  style="max-width: 70px">
												<address>
													The Global Scholarship
												</address>
											</div>
											<div class="col-lg-6 text-right">
												<p class="h3">Invoice To:</p>
												<address>
													<?php echo $invoice->student_name?><br>
													<?php echo $invoice->student_state?><br>
													<?php echo $invoice->registered_email?><br>
													<?php echo $invoice->registered_mobile_no?>
												</address>
											</div>
										</div>
										<div class="table-responsive mg-t-40">
											<table class="table table-invoice table-bordered">
												<thead>
													<tr>
														
														<th class="wd-70p">Description</th>
														
														<th class="tx-right">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<?php $date= $invoice->date;
														
														$dates =$invoice->date;
														$dates = strtotime($dates);
														$new_date = strtotime('+ 1 year', $dates);
														?>
														<td>The Global Scholarship Subscription 
															<?php echo date('d-M-Y',strtotime($date))?> to
															 <?php echo date('d-M-Y', $new_date);?></td>
														
														<td class="tx-right"><?php echo $invoice->amount?></td>
													</tr>
													
													
													<tr>
														<td class="tx-right tx-uppercase tx-bold tx-inverse">Total</td>
														<td class="tx-right" colspan="2">
															<h4 class="tx-bold"><?php echo $invoice->amount?></h4>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer text-right">
									<!-- 	<button type="button" class="btn ripple btn-primary mb-1"><i class="fe fe-credit-card mr-1"></i> Pay Invoice</button>
										<button type="button" class="btn ripple btn-secondary mb-1"><i class="fe fe-send mr-1"></i> Send Invoice</button> -->
										<button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print Invoice</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
				</div>
			</div>
			<!-- End Main Content-->
 <script type="text/javascript">
        
    function codespeedy(){
      var print_div = document.getElementById("printDiv");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
// This is the code print a particular div element
    }
  </script>