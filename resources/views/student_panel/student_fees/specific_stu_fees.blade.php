@include('student_panel.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">
                    "Campus Name"
                </h3>
            </div>
            <div class="container card height-auto">
                <div class="card-body">
                    <div class="row d-flex justify-content-end gutters-8 my-5">
                        <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by..." class="form-control" />
                        </div>
                        <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                Search
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Student Challan
                                </h3>
                            </div>

                        </div>
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Student Name</th>
                                    <th>Fees Type</th>
                                    <th>Month</th>
                                    <th>Paid/Unpaid</th>
                                    <th>Challan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#12</label>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>A</td>
                                    <td>Wahab</td>
                                    <td>Monthly</td>
                                    <td>Jan</td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-dark text-white text-12 px-5 py-3">Paid</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="">

                                            <button class="btn btn-success text-white text-12 py-3">Print
                                                challan</button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('student_panel.include.footer')