@include('institute_admin_panel.dashboard.inst_include.header')
<!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        @include('institute_admin_panel.dashboard.inst_include.navbar')
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        @include('institute_admin_panel.dashboard.inst_include.topbar')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('institute_admin_panel.dashboard.inst_include.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
					<div class="col-xl-6 col-xxl-6 col-sm-12">
						<div class="row">
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Total Students</h4>
										<h3>3280</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
										</div>
										<small>80% Increase in 20 Days</small>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">New Students</h4>
										<h3>245</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
										</div>
										<small>50% Increase in 25 Days</small>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Total Course</h4>
										<h3>28</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
										</div>
										<small>76% Increase in 20 Days</small>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Fees Collection</h4>
										<h3>25160$</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
										</div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>					
					<div class="col-xl-6 col-xxl-6 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Income/Expense Report</h3>
							</div>
							<div class="card-body">
								 <div id="morris_bar_2" class="morris_chart_height"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Professors List</h4>
                            </div>
                            <div class="card-body">
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="new_template/images/profile/education/pic1.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Theodore Handle <small class="text-muted">( B.Com )</small></h5>
                                        <small class="text-primary mb-0">Available</small>
									</div>
								</div>
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="new_template/images/profile/education/pic2.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Bess Willis <small class="text-muted">( M.Com )</small></h5>
                                        <small class="text-danger mb-0">Not Available</small>
									</div>
								</div>
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="new_template/images/profile/education/pic3.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">James Jones <small class="text-muted">( M.Tach  )</small></h5>
                                        <small class="text-primary mb-0">Available</small>
									</div>
								</div>
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="new_template/images/profile/education/pic4.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Smith Watson <small class="text-muted">( B.Tach  )</small></h5>
                                        <small class="text-danger mb-0">Not Available</small>
									</div>
								</div>
								<div class="media mb-2 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="new_template/images/profile/education/pic5.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Morese Sharpe <small class="text-muted">( B.A, M.A )</small></h5>
                                        <small class="text-primary mb-0">Available</small>
									</div>
								</div>
								<div class="text-center pt-3">
									<a href="javascript:void(0);" class="btn btn-primary btn-rounded btn px-5 btn-lg">View All</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Student List</h4>
                            </div>
                            <div class="card-body">
							    <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkAll">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
                                                </th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Assigned Coach</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkbox2">
														<label class="custom-control-label" for="checkbox2"></label>
													</div>
                                                </td>
                                                <td>Angelica Ramos</td>
                                                <td>Ashton Cox</td>
                                                <td>12 August 2020</td>
                                                <td>10:15</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkbox3">
														<label class="custom-control-label" for="checkbox3"></label>
													</div>
                                                </td>
                                                <td>Bradley Greer</td>
                                                <td>Brenden Wagner</td>
                                                <td>11 July 2020</td>
                                                <td>10:00</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkbox4">
														<label class="custom-control-label" for="checkbox4"></label>
													</div>
                                                </td>
                                                <td>Cedric Kelly</td>
                                                <td>Brielle Williamson</td>
                                                <td>10 May 2020</td>
                                                <td>09:45</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkbox5">
														<label class="custom-control-label" for="checkbox5"></label>
													</div>
                                                </td>
                                                <td>Caesar Vance</td>
                                                <td>Herrod Chandler</td>
                                                <td>09 April 2020</td>
                                                <td>09:30</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkbox6">
														<label class="custom-control-label" for="checkbox6"></label>
													</div>
                                                </td>
                                                <td>Rhona Davidson</td>
                                                <td>Sonya Frost</td>
                                                <td>08 March 2020</td>
                                                <td>09:15</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkbox7">
														<label class="custom-control-label" for="checkbox7"></label>
													</div>
                                                </td>
                                                <td>Bradley Greer</td>
                                                <td>Brenden Wagner</td>
                                                <td>11 July 2020</td>
                                                <td>10:00</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
							</div>
						</div>
					</div>
					{{-- <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
						<div class="card profile-tab">
                            <div class="card-header">
                                <h4 class="card-title">Salary Status</h4>
                            </div>
							<div class="card-body custom-tab-1">
								<ul class="nav nav-tabs mb-3">
									<li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link pb-2 active show">Professors</a></li>
									<li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link pb-2">Librarian</a></li>
									<li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link pb-2">Other</a></li>
								</ul>
								<div class="tab-content">
									<div id="my-posts" class="tab-pane fade active show">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Name</th>
														<th scope="col">Status</th>
														<th scope="col">Date</th>
														<th scope="col">Ammount</th>
														<th scope="col">Transaction ID</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img src="new_template/images/profile/education/pic1.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Angelica Ramos</td>
														<td><span class="badge badge-rounded badge-success">Paid</span></td>
														<td>12 August 2020</td>
														<td>$100</td>
														<td>#42317</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic2.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Bradley Greer</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>11 July 2020</td>
														<td>$200</td>
														<td>#54682</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic3.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Cedric Kelly</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>10 May 2020</td>
														<td>$400</td>
														<td>#57894</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic4.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Caesar Vance</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>09 April 2020</td>
														<td>$300</td>
														<td>#57864</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic5.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Rhona Davidson</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>08 March 2020</td>
														<td>$500</td>
														<td>#56387</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div id="about-me" class="tab-pane fade">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Name</th>
														<th scope="col">Status</th>
														<th scope="col">Date</th>
														<th scope="col">Ammount</th>
														<th scope="col">Transaction ID</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img src="new_template/images/profile/education/pic6.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Angelica Ramos</td>
														<td><span class="badge badge-rounded badge-success">Paid</span></td>
														<td>12 August 2020</td>
														<td>$100</td>
														<td>#42317</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic7.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Bradley Greer</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>11 July 2020</td>
														<td>$200</td>
														<td>#54682</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic8.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Cedric Kelly</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>10 May 2020</td>
														<td>$400</td>
														<td>#57894</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic10.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Caesar Vance</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>09 April 2020</td>
														<td>$300</td>
														<td>#57864</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic9.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Rhona Davidson</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>08 March 2020</td>
														<td>$500</td>
														<td>#56387</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div id="profile-settings" class="tab-pane fade">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Name</th>
														<th scope="col">Status</th>
														<th scope="col">Date</th>
														<th scope="col">Ammount</th>
														<th scope="col">Transaction ID</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img src="new_template/images/profile/education/pic5.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Angelica Ramos</td>
														<td><span class="badge badge-rounded badge-success">Paid</span></td>
														<td>12 August 2020</td>
														<td>$100</td>
														<td>#42317</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic8.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Bradley Greer</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>11 July 2020</td>
														<td>$200</td>
														<td>#54682</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic6.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Cedric Kelly</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>10 May 2020</td>
														<td>$400</td>
														<td>#57894</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic2.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Caesar Vance</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>09 April 2020</td>
														<td>$300</td>
														<td>#57864</td>
													</tr>
													<tr>
														<td><img src="new_template/images/profile/education/pic7.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Rhona Davidson</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>08 March 2020</td>
														<td>$500</td>
														<td>#56387</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <!--**********************************
            Footer start
        ***********************************-->
        @include('institute_admin_panel.dashboard.inst_include.poweredby')
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('institute_admin_panel.dashboard.inst_include.footer')
   
	
</body>
</html>