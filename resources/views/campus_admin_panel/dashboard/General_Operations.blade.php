@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="container payroll-heading mt-5">
                    <h3 class="text-center">General Operations</h3>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('campus-batches') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/syllabus-01.png" alt="">
                                    </div>
                                    <h5>Batch</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('admissions') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/new addmission-01.png" alt="">
                                    </div>
                                    <h5>New Admissions</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('view-attendance-institute') }}">

                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/attendance-01.png" alt="">
                                    </div>
                                    <h5>Attendance</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/result-01.png" alt="">
                                </div>
                                <h5>Results</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('viewall-formers') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/former 01.png" alt="">
                                    </div>
                                    <h5>Former Students</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('view-timetable') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/time table-01.png" alt="">
                                    </div>
                                    <h5>Timetable</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('all-syllabus') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/syllabus-01.png" alt="">
                                    </div>
                                    <h5>Syllabus</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('all-courses') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/class-01.png" alt="">
                                    </div>
                                    <!-- <h5>Classes</h5> -->
                                    <!-- here i will convert clases into courses  -->
                                    <h5>Courses</h5>

                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('all-subjects') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/subject-01.png" alt="">
                                    </div>
                                    <h5>Subjects</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('manage-teachers') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/subject-01.png" alt="">
                                    </div>
                                    <h5>Manage Teachers</h5>
                                </div>
                            </a>
                        </div>

                    </div>
                    <h3 class="text-center">Systems</h3>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/LMS.png" alt="">
                                </div>
                                <h5>Learning Management(LMS)</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('book-list') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/LMS.png" alt="">
                                    </div>
                                    <h5>Book List</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('campus_admin_panel.dashboard.include.footer')
