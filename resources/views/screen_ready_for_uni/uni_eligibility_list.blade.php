@include('screen_ready_for_uni.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one mt-5">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="heading-layout1 ">
                                <div>
                                    <h2>Student Exam Eligibility List</h2>
                                </div>
                            </div>
                            <form class="mg-b-20">
                                <div class="row d-flex justify-content-end gutters-8">
                                    <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="Search by..." class="form-control" />
                                    </div>

                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="button" class="btn btn-warning text-white mt-2 mb-3"
                                            style="font-size: 18px">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Exam Year</th>
                                            <th>Exam Group</th>
                                            <th>Attendance Percentage</th>
                                            <th>Fee Status</th>
                                            <th>Library Dues</th>
                                            <th>Mini Quiz Attempt</th>
                                            <th>Mini Assignments Attempt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2021</td>
                                            <td>Mid Term</td>
                                            <td>75%</td>
                                            <td>paid</td>
                                            <td>Paid</td>
                                            <td>78%</td>
                                            <td>80%</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2022</td>
                                            <td>Mid Term</td>
                                            <td>65%</td>
                                            <td>paid</td>
                                            <td>Paid</td>
                                            <td>88%</td>
                                            <td>82%</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2023</td>
                                            <td>final Term</td>
                                            <td>85%</td>
                                            <td>paid</td>
                                            <td>Paid</td>
                                            <td>79%</td>
                                            <td>90%</td>
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

        @include('screen_ready_for_uni.include.footer')
