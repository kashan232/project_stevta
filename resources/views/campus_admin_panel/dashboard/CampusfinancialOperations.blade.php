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
            <div class="breadcrumbs-area">
                
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Fiscal') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/fiscal year-01.png" alt="">
                                </div>
                                <h5>Fiscal Year</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-ChartofAccount') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/chart of account-01.png" alt="">
                                </div>
                                <h5>Chart of Account</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Budgeting') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/budgeting-01.png" alt="">
                                </div>
                                <h5>Budgeting</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-AssetsManagement') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/asset management-01.png" alt="">
                                </div>
                                <h5>Assets Management</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Bills') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/bills & vouchers-01.png" alt="">
                                </div>
                                <h5>Bills & Vouchers</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Banking') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/bank-01.png" alt="">
                                </div>
                                <h5>Banking</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Remuneration') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/remuneration-01.png" alt="">
                                </div>
                                <h5>Remuneration & TA/DA </h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Reports') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/report.png" alt="">
                                </div>
                                <h5> Reports</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Statements') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/financial statement-01.png" alt="">
                                </div>
                                <h5>Financial Statements</h5>
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

@include('screen_ready_for_uni.include.footer')


