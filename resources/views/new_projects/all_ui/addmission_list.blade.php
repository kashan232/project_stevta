@include('new_projects.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <ul>
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">General Operations</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row  ">
                        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <a href="">
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
                            {{-- @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif --}}
                            <div class="heading-layout1">
                                <div>
                                    <h3>All Students</h3>
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
                                <table class="table  data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Student Image</th>
                                            <th>Student Name</th>
                                            <th>GR No:</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Batch</th>
                                            <th>House</th>
                                            <th>Enrollment</th>
                                            <th>Addmission Slip</th>
                                            <th>change Class</th>
                                            <th>View All Details</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="/campus/general_operations/student_image/b.jpg"
                                                        alt="student_img" class="rounded-circle" width="80px"
                                                        height="80px">
                                                </td>
                                                <td>Edward</td>
                                                <td>94</td>
                                                <td>2</td>
                                                <td>B</td>
                                                <td>2k23</td>
                                                <td>House number 70</td>
                                                <td>999</td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-success" style="font-size: 15px">Slip Generate</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-warning" style="font-size: 15px">Change Class</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-primary" style="font-size: 15px">View Student</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-success" style="font-size: 15px">Edit</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-danger" style="font-size: 15px">Delete</button>
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
        @include('new_projects.include.poweredby')

            <!-- Page Area End Here -->
        </div>

        @include('new_projects.include.footer')

