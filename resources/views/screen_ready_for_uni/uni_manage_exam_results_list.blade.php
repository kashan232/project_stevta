@include('screen_ready_for_uni.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="row">
                        <div class="col-12-xxxl col-xl-12 col-lg-12 col-12 form-group mt-5 text-right">
                            <a href="{{ route('add-Student') }}">
                                <button type="button" class="btn btn-warning text-white mb-3" style="font-size: 16px">
                                    Add Student
                                </button>
                            </a>
                        </div>
                    </div>
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
                                    <h2>Exam Result Management List</h2>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Student Name</th>
                                            <th>Student ID</th>
                                            <th>Course Code</th>
                                            <th>Exam Type</th>
                                            <th>Exam Score</th>
                                            <th>Marks Obtained</th>
                                            <th>Total Marks</th>
                                            <th>Exam Date</th>
                                            <th>Result Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kashan</td>
                                            <td>2204</td>
                                            <td>CS101</td>
                                            <td>Mid Term</td>
                                            <td>60</td>
                                            <td>45</td>
                                            <td>60</td>
                                            <td>12-10-2021</td>
                                            <td>Pass</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Anas</td>
                                            <td>2204</td>
                                            <td>CS101</td>
                                            <td>Mid Term</td>
                                            <td>60</td>
                                            <td>45</td>
                                            <td>60</td>
                                            <td>12-10-2021</td>
                                            <td>Pass</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Saqib</td>
                                            <td>2204</td>
                                            <td>CS101</td>
                                            <td>Mid Term</td>
                                            <td>60</td>
                                            <td>45</td>
                                            <td>60</td>
                                            <td>12-10-2021</td>
                                            <td>Pass</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Wahab</td>
                                            <td>2204</td>
                                            <td>CS101</td>
                                            <td>Mid Term</td>
                                            <td>60</td>
                                            <td>45</td>
                                            <td>60</td>
                                            <td>12-10-2021</td>
                                            <td>Pass</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Usman</td>
                                            <td>2204</td>
                                            <td>CS101</td>
                                            <td>Mid Term</td>
                                            <td>60</td>
                                            <td>45</td>
                                            <td>60</td>
                                            <td>12-10-2021</td>
                                            <td>Pass</td>
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
