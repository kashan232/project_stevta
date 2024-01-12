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
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->
                    <div class="container payroll-heading">
                        <!-- <h3 class="text-center">Fees Management</h3> -->
                        <div class="row d-flex justify-content-center">
                            <!-- <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-fee') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/fees.png" alt="">
                                </div>
                                <h5>Fees</h5>
                            </div>
                        </a>
                    </div> -->
                        </div>
                        <h3 class="text-center">Payroll</h3>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                                <a href="{{ route('list-salary') }}">
                                    <div class="box-main-card">
                                        <div class="card-content">
                                            <img src="/assets/accounts/salary.png" alt="">
                                        </div>
                                        <h5>Salary</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                                <a href="{{ route('all-deduction') }}">

                                    <div class="box-main-card">
                                        <div class="card-content">
                                            <img src="/assets/accounts/deduction.png" alt="">
                                        </div>
                                </a>
                                <h5>Deduction</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('all-bonus') }}">

                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/accounts/bonuns.png" alt="">
                                    </div>
                                    <h5>Bonus</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h3 class="text-center">Inventory & Billing Management</h3>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('all-inventory') }}">

                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/accounts/inventory.png" alt="">
                                    </div>
                                    <h5>All Inventory</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('billing.get') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/accounts/billing.png" alt="">
                                    </div>
                                    <h5>Billings</h5>
                                </div>
                            </a>
                        </div>

                    </div>


                </div>

            </div>
            <!-- Page Area End Here -->
        </div>

        @include('campus_admin_panel.dashboard.include.footer')
