<!-- Main Content-->
			<div class="main-content pt-0">
				<div class="container">

						<!-- Page Header -->
						<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30">Bitcoin</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Bitcoin Dashboard</a></li>
								</ol>
							</div>
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-8">
								<div class="row">
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card overflow-hidden bg-primary-gradient">
											<div class="card-body">
												<div class="d-flex clearfix">
													<div class="text-left">
														<p class="mb-0 text-white fs-24">Bitcoin</p>
														<h1 class="mb-0 text-white fs-30">22.5 K</h1>
														<p class="mb-0 text-white icon-service-1"><span class="text-white"><i class="fa fa-chevron-up text-white"></i> +64.4%</span></p>
													</div>
													<div class="ml-auto">
														<span class="bg-primary icon-service text-white ">
															<i class="cf cf-btc"></i>
														</span>
													</div>
												</div>
											</div>
											<img src="<?php echo base_url()?>assets/img/pngs/img-1.png" alt="img" class="img-card-circle">
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card overflow-hidden bg-secondary-gradient">
											<div class="card-body">
												<div class="d-flex clearfix">
													<div class="text-left">
														<p class="mb-0 text-white fs-24">Ethereum</p>
														<h1 class="mb-0 text-white fs-30">15.7 K</h1>
														<p class="mb-0 text-white icon-service-1"><span class="text-white"><i class="fa fa-chevron-up text-white"></i> +12.6%</span></p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service text-white ">
															<i class="fa cf cf-eth "></i>
														</span>
													</div>
												</div>
											</div>
											<img src="<?php echo base_url()?>assets/img/pngs/img-2.png" alt="img" class="img-card-circle">
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card overflow-hidden bg-purple-gradient">
											<div class="card-body">
												<div class="d-flex clearfix">
													<div class="text-left">
														<p class="mb-0 text-white fs-24">Tether</p>
														<h1 class="mb-0 text-white fs-30">3662.1 K</h1>
														<p class="mb-0 text-white icon-service-1"><span class="text-white"><i class="fa fa-chevron-down text-white"></i> -16.2%</span></p>
													</div>
													<div class="ml-auto">
														<span class="bg-purple icon-service text-white">
															<i class="fa cf cf-usdt"></i>
														</span>
													</div>
												</div>
											</div>
											<img src="<?php echo base_url()?>assets/img/pngs/img-2.png" alt="img" class="img-card-circle">
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card overflow-hidden bg-success-gradient">
											<div class="card-body">
												<div class="d-flex clearfix">
													<div class="text-left">
														<p class="mb-0 text-white fs-24">Ripple</p>
														<h1 class="mb-0 text-white fs-30">1.3644 K</h1>
														<p class="mb-0 text-white icon-service-1"><span class="text-white"><i class="fa fa-chevron-up text-white"></i> +56.6%</span></p>
													</div>
													<div class="ml-auto">
														<span class="bg-success icon-service text-white ">
															<i class="cf cf-xrp"></i>
														</span>
													</div>
												</div>
											</div>
											<img src="<?php echo base_url()?>assets/img/pngs/img-1.png" alt="img" class="img-card-circle">
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4">
								<div class="card">
									<div class="card-header pd-t-20 bd-b-0">
										<div class="d-md-flex justify-content-between">
											<h4 class="card-title font-weight-semibold mb-sm-3">Total Coins</h4>
											<div class="dash2-select wd-150">
												<select name="coins" class="form-control custom-select select2">
													<option value="1" selected>Bitcoin</option>
													<option value="2">Ripple</option>
													<option value="3">Ethereum</option>
													<option value="4">Litecoin</option>
													<option value="5">DASH</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body p-0 mb-0">
										<div id="bar" class="sales-bar"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- ROW-2 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
								<div class="card overflow-hidden bd-b-0">
									<div class="card-header  bd-b-0">
										<div class="d-md-flex justify-content-between">
											<h4 class="card-title font-weight-semibold mb-sm-3">Statistics</h4>
											<div class="dash1-select  wd-200 d-flex">
												<span class="input-icon-addon input-icon-addon border border-right-0 p-1 ht-38">
													<i class="fe fe-calendar fs-20 px-2"></i>
												</span>
												<select name="coins" class="form-control custom-select select2">
													<option value="1">YEAR</option>
													<option value="2">MONTH</option>
													<option value="3">WEEK</option>
													<option value="4">DAY</option>
													<option value="5">HOURS</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body pr-4 pl-5">
										<div class="chart-wrapper">
											<canvas id="statistics" class="static-chart ht-345"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header bd-b-0">
										<h3 class="card-title font-weight-semibold ">summary</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="chart" class="chart-dropshadow2 ht-200  chartjs-render-monitor"></canvas>
										</div>
										<div class="row mt-5">
											<div class="col-xxl-9 col-xl-6 col-lg-6 col-md-6 col-sm-8 mx-auto d-block">
												<div class="row">
													<div class="col">
														<div class="d-flex"><span class="legend chart-legend1 h-2 w-2 brround mr-3"></span><span>EXCHANGE</span></div>
														<div class="d-flex mt-2"><span class="legend chart-legend2 h-2 w-2 brround mr-3"></span><span>TRADING</span></div>
													</div>
													<div class="col">
														<div class="d-flex"><span class="legend chart-legend3 h-2 w-2 brround mr-3"></span><span>REALESTATE</span></div>
														<div class="d-flex mt-2"><span class="legend chart-legend4 h-2 w-2 brround mr-3"></span><span>SHARES</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 END -->

						<!-- ROW-3 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
								<div class="row">
									<div class="col-xl-3 col-md-6 col-lg-6">
										<div class="card">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-20 font-weight-medium">Bitcoin Price</p>
														<h6 class="mb-1 text-primary fs-18 font-weight-semibold">Today</h6>
														<p class="mb-1 text-muted fs-16 font-weight-semibold">$11,354.35 USD</p>
													</div>
													<div class="ml-auto">
														<span class="bg-primary icon-service-2 text-white ">
															<i class="mdi mdi-calculator"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6 col-lg-6">
										<div class="card">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-20 font-weight-medium">Volume</p>
														<h6 class="mb-1 text-secondary fs-18 font-weight-semibold">Today</h6>
														<p class="mb-1 text-muted fs-16 font-weight-semibold">$25,711,897 USD</p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service-2 text-white ">
															<i class="mdi mdi-poll"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6 col-lg-6">
										<div class="card ">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-20 font-weight-medium">Max Supply</p>
														<h6 class="mb-1 text-purple fs-18 font-weight-semibold">Today</h6>
														<p class="mb-1 text-muted fs-16 font-weight-semibold">$21,000,000 BTC</p>
													</div>
													<div class="ml-auto">
														<span class="bg-purple icon-service-2 text-white ">
															<i class="mdi mdi-trending-up"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6 col-lg-6">
										<div class="card">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-20 font-weight-medium">Market Rank</p>
														<h6 class="mb-1 text-success fs-18 font-weight-semibold">Bitcoin</h6>
														<p class="mb-1 text-muted fs-16 font-weight-semibold">$18,517,712 BTC</p>
													</div>
													<div class="ml-auto">
														<span class="bg-success icon-service-2 text-white ">
															<b class="fs-30 my-auto py-auto">1</b>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-3 END -->

						<!-- ROW-4 opened -->
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card transcation-crypto" id="transcation-crypto">
									<div class="card-header bd-b-0">
										<h4 class="card-title font-weight-semibold mb-0">Transaction History</h4>
									</div>
									<div class="card-body p-0">
										<div class="">
											<div class="table-responsive">
												<table class="table text-nowrap" id="example1">
													<thead class="border-top">
														<tr>
															<th class="bg-transparent">coin</th>
															<th class="bg-transparent">Date</th>
															<th class="bg-transparent">Transaction ID</th>
															<th class="bg-transparent">Amount</th>
															<th class="bg-transparent">Status</th>
														</tr>
													</thead>
													<tbody>
														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="cf cf-btc"></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Bitcoin</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 10:15am</td>
															<td class="text-muted fs-15 font-weight-semibold">#36295675</td>
															<td class="text-muted fs-15 font-weight-semibold">+0,046BTC</td>
															<td><a href="#" class="btn btn-primary btn-md wd-100">Success</a></td>
														</tr>
														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="fa cf cf-eth "></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Ethereum</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 10:20am</td>
															<td class="text-muted fs-15 font-weight-semibold">#8965423688</td>
															<td class="text-muted fs-15 font-weight-semibold">0.023ETH</td>
															<td><a href="#" class="btn btn-warning btn-md wd-100">Pending</a></td>
														</tr>
														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="cf cf-ltc"></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Litecoin</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 4:20am</td>
															<td class="text-muted fs-15 font-weight-semibold">#354975368</td>
															<td class="text-muted fs-15 font-weight-semibold">-107.26LTC</td>
															<td><a href="#" class="btn btn-primary btn-md wd-100">success</a></td>
														</tr>

														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="cf cf-xrp"></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Ripple</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 11:00pm</td>
															<td class="text-muted fs-15 font-weight-semibold">#362975</td>
															<td class="text-muted fs-15 font-weight-semibold">+30.47XRP</td>
															<td><a href="#" class="btn btn-danger btn-md wd-100">cancelled</a></td>
														</tr>
														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="fa cf cf-usdt"></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Tether</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 6:28am</td>
															<td class="text-muted fs-15 font-weight-semibold">#75662354</td>
															<td class="text-muted fs-15 font-weight-semibold">0.023ETH</td>
															<td><a href="#" class="btn btn-warning btn-md wd-100">pending</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="card" id="transcation-crypto-1">
									<div class="card-header bd-b-0">
										<div class="d-flex">
											<h4 class="card-title font-weight-semibold mb-0">Wallet History</h4>
											<p class="text-muted fs-15 ml-auto">More</p>
										</div>
									</div>
									<div class="card-body p-0 pt-1">
										<div class="">
											<div class="table-responsive">
												<table class="table text-nowrap" >
													<thead class="border-top">
														<tr>
															<th class="bg-transparent">S.no</th>
															<th class="bg-transparent">Name</th>
															<th class="bg-transparent">Date</th>
															<th class="bg-transparent">Amount</th>
															<th class="bg-transparent">Status</th>
															<th class="bg-transparent">Action</th>
														</tr>
													</thead>
													<tbody>
														<tr class="border-bottom">
															<td class="text-muted fs-15 font-weight-semibold">01.</td>
															<td class="text-dark fs-15 font-weight-semibold">Jake poole</td>
															<td class="text-muted fs-15 font-weight-semibold">20-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$5.321.2</td>
															<td class="text-success fs-15 font-weight-semibold">Success</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
														<tr class="border-bottom">
															<td class="text-muted fs-15 font-weight-semibold">02.</td>
															<td class="text-dark fs-15 font-weight-semibold">Virginia Gray</td>
															<td class="text-muted fs-15 font-weight-semibold">20-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$53,3654</td>
															<td class="text-success fs-15 font-weight-semibold">Success</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
														<tr class="border-bottom">
															<td class="text-muted fs-15 font-weight-semibold">03.</td>
															<td class="text-dark fs-15 font-weight-semibold">Jacob Thomson</td>
															<td class="text-muted fs-15 font-weight-semibold">20-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$1,56,3654</td>
															<td class="text-primary fs-15 font-weight-semibold">Pending</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
														<tr class="border-bottom">
															<td class="text-muted fs-15 font-weight-semibold">04.</td>
															<td class="text-dark fs-15 font-weight-semibold">Trevor Thomson</td>
															<td class="text-muted fs-15 font-weight-semibold">19-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$12.3</td>
															<td class="text-success fs-15 font-weight-semibold">success</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
														<tr class="border-bottom">
															<td class="text-muted fs-15 font-weight-semibold">05.</td>
															<td class="text-dark fs-15 font-weight-semibold">Kylie north</td>
															<td class="text-muted fs-15 font-weight-semibold">19-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$5.312.2</td>
															<td class="text-primary fs-15 font-weight-semibold">Pending</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
														<tr class="border-bottom">
															<td class="text-muted fs-15 font-weight-semibold">06.</td>
															<td class="text-dark fs-15 font-weight-semibold">Jan Hodges</td>
															<td class="text-muted fs-15 font-weight-semibold">19-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$5.312.2</td>
															<td class="text-danger fs-15 font-weight-semibold">Cancel</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
														<tr class="border-bottom">
															<td class="text-muted fs-15 font-weight-semibold">07.</td>
															<td class="text-dark fs-15 font-weight-semibold">Trevor Thomson</td>
															<td class="text-muted fs-15 font-weight-semibold">19-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$2,24,1421</td>
															<td class="text-success fs-15 font-weight-semibold">success</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
														<tr class="">
															<td class="text-muted fs-15 font-weight-semibold">08.</td>
															<td class="text-dark fs-15 font-weight-semibold">Emily Lewis</td>
															<td class="text-muted fs-15 font-weight-semibold">19-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$9.321.2</td>
															<td class="text-danger fs-15 font-weight-semibold">Cancel</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header bd-b-0">
										<h4 class="card-title font-weight-semibold mb-0">Activity</h4>
									</div>
									<div class="card-body">
										<div class="card-block">
											<ul class="task-list" id="task-list">
												<li class="task-icon1">
													<div class="task-icon-1"> <i class="fe fe-trending-up text-primary"></i> </div>
													<h6>Received<span class="float-right fs-15">+0.25USTD</span></h6>
													<p class="text-muted fs-15">Bineance Coin</p>
												</li>
												<li class="task-icon2">
													<div class="task-icon-1"> <i class="fe fe-trending-up text-purple"></i> </div>
													<h6>Sent<span class="float-right fs-15">+0.25USTD</span></h6>
													<p class="text-muted fs-15">Ethereum</p>
												</li>
												<li class="task-icon3">
													<div class="task-icon-1"> <i class="fe fe-trending-down text-pink"></i> </div>
													<h6>Received<span class="float-right fs-15">-0.25USTD</span></h6>
													<p class="text-muted fs-15">Ethereum</p>
												</li>
												<li class="task-icon4">
													<div class="task-icon-1"> <i class="fe fe-trending-up text-danger"></i> </div>
													<h6>Received<span class="float-right fs-15">+0.25USTD</span></h6>
													<p class="text-muted fs-15">Bineance Coin</p>
												</li>
												<li class="task-icon5">
													<div class="task-icon-1"> <i class="fe fe-trending-down text-info"></i> </div>
													<h6>Sent<span class="float-right fs-15">-0.25USTD</span></h6>
													<p class="text-muted fs-15">Bineance Coin</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header pd-t-20 bd-b-0">
										<div class="d-md-flex justify-content-between">
											<h4 class="card-title font-weight-semibold mb-sm-3">Earnings</h4>
											<div class="dash2-select  wd-150">
												<select name="coins" class="form-control custom-select select2">
													<option value="0" selected>Filter</option>
													<option value="1">Bitcoin</option>
													<option value="2">Ripple</option>
													<option value="3">Ethereum</option>
													<option value="4">Litecoin</option>
													<option value="5">DASH</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body p-4 mb-0">
										<div class="mb-5">
											<canvas id="chartArea-1" class="ht-150 w-100"></canvas>
										</div>
										<div class="row pl-2 pr-2">
											<div class="col-xl-6 col-md-3 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><div class="table-earning bg-primary"> <i class="cf cf-btc text-white"></i> </div><div class="earnings1"><h5 class="fs-18">Bitcoin</h5><p class="text-success fs-18 font-weight-semibold">+112.13</p></div></div>
											</div>
											<div class="col-xl-6 col-md-3 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><div class="table-earning bg-secondary"> <i class="fa cf cf-eth  text-white"></i> </div><div class="earnings1"><h5 class="fs-18">Ethereum</h5><p class="text-success fs-18 font-weight-semibold">+16.23</p></div></div>
											</div>
											<div class="col-xl-6 col-md-3 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><div class="table-earning bg-purple"> <i class="fa cf cf-usdt text-white"></i> </div><div class="earnings1"><h5 class="fs-18">Tether</h5><p class="text-danger fs-18 font-weight-semibold">-12.23</p></div></div>
											</div>
											<div class="col-xl-6 col-md-3 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><div class="table-earning bg-success"> <i class="cf cf-xrp text-white"></i> </div><div class="earnings1"><h5 class="fs-18">Ripple</h5><p class="text-success fs-18 font-weight-semibold">+8.91</p></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header pd-t-20 bd-b-0">
										<div class="d-md-flex justify-content-between">
											<h4 class="card-title font-weight-semibold mb-sm-3">Vistors</h4>
											<div class="dash2-select  wd-150">
												<select name="coins" class="form-control custom-select select2">
													<option value="0" selected>Week</option>
													<option value="1">Sunday</option>
													<option value="2">Monday</option>
													<option value="3">Tuesday</option>
													<option value="4">Wednesday</option>
													<option value="5">Friday</option>
													<option value="5">Saturday</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body p-4 mb-0">
										<div class="row">
											<div class="col-xl-5 col-4 col-md-3 col-lg-4 mt-2 mt-xl-0">
												<h6 class="mb-2 fs-18">Weekly</h6>
												<span class="text-muted fs-15 font-weight-semibold">92.8k ,4.63%</span>
												<p class="m-0 fs-18 text-purple"><i class="fa fa-arrow-up mr-2"></i>6.13%</p>
											</div>
											<div class="col-xl-7 col-8 col-md-9 col-lg-8 mt-2 mt-xl-0">
												<canvas id="statistics-1" class="w-100 ht-100"></canvas>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6 col-6 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><span class="legend bg-purple h-2 w-2 brround mr-3"></span><span>This Week</span></div>
											</div>
											<div class="col-xl-6 col-6 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><span class="legend bg-dark h-2 w-2 brround mr-3"></span><span>Last week</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-4 END -->
				</div>
			</div>
			<!-- End Main Content-->
