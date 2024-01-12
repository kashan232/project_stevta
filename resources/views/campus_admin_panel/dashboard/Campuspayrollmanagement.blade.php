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
            <h2 class="text-center">Payroll Management</h2>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Fiscal') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/salary.png" alt="">
                                </div>
                                <h5>Salary</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-ChartofAccount') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/deduction.png" alt="">
                                </div>
                                <h5>Deduction</h5>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Budgeting') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/bonuns.png" alt="">
                                </div>
                                <h5>Bonus</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-AssetsManagement') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/asset management-01.png" alt="">
                                </div>
                                <h5>Advance Loan MAnagement</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Bills') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/bills & vouchers-01.png" alt="">
                                </div>
                                <h5>Annual Increments</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('financial-Banking') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/finanacial/bank-01.png" alt="">
                                </div>
                                <h5>Block Un Block Salary</h5>
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


