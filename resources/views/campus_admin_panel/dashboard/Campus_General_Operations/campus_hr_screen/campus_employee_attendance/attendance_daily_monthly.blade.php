@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
@include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
            <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('choose-daily-att') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/teacher/student-attendance-01.png" alt="">
                                </div>
                                <h5>Daily Attendance Record</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('choose-month-employee') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/teacher/student-attendance-01.png" alt="">
                                </div>
                                <h5>Monthly Attendance Record</h5>
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
@include('campus_admin_panel.dashboard.include.footer')


