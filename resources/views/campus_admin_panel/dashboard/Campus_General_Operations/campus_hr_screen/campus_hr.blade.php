@include('institute_admin_panel.dashboard.include.header')
<style>
</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('institute_admin_panel.dashboard.include.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{ $campusName }}"</h3>
                <ul>
                    <li>
                        <a href="{{ route('institute_Dashboard') }}">Home</a>
                    </li>
                    <li>Human Resource</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-employees') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/Exam_and_HR/employee-01.png" alt="">
                                </div>
                                <h5>Employee</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('choose-month') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/Exam_and_HR/attendance-01.png" alt="">
                                </div>
                                <h5>Attendance Record</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-employee-leave') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/Exam_and_HR/leave-01.png" alt="">
                                </div>
                                <h5>Leaves</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-holiday') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/Exam_and_HR/public holiday.png" alt="">
                                </div>
                                <h5>Public Holiday</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-department') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/Exam_and_HR/departments-01.png" alt="">
                                </div>
                                <h5>Department</h5>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <br>
            <div class="text-center">
                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}

            </div>


        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')