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
                    <h3 class="text-center">Degree & Program Managements</h3>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('add-degree-creation') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/degree.png" alt="">
                                    </div>
                                    <h4 class="mt-3">Degree Creation</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('add-program-manage') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/program_m.png" alt="">
                                    </div>
                                    <h5>Program Management</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('add-batch-creation') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/batch-p.png" alt="">
                                    </div>
                                    <h5>Batch Creation</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('add-sem-config') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/calendar.png" alt="">
                                    </div>
                                    <h5>Semester Configuration</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('add-sub-manage') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/books.png" alt="">
                                    </div>
                                    <h5>Subject Management</h5>
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
