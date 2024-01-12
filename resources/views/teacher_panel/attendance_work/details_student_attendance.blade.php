@include('teacher_panel.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-attendance') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/student-attendance-01.png" alt="">
                                </div>
                                <h5>Student Attendance</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-leave') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/approve-leave-01.png" alt="">
                                </div>
                                <h5>Leave Approval</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-attendance-record') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/attendance-record-01.png" alt="">
                                </div>
                                <h5>Attendance Records</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('teacher_panel.include.footer')
