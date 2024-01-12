@include('institute_admin_panel.dashboard.include.header')

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
                        <a href="index.html">Home</a>
                    </li>
                    <li>Accounts</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->


            <div class="container payroll-heading">

                <h3 class="text-center">Fees Management</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-fee') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/fees.png" alt="">
                                </div>
                                <h5>Fees</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/challans.png" alt="">
                                </div>
                                <h5>Challans</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/fees confirm.png" alt="">
                                </div>
                                <h5>Confirm Fees</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/fees record.png" alt="">
                                </div>
                                <h5>Fees Record</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <h3 class="text-center">Payroll</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/salary.png" alt="">
                                </div>
                                <h5>Salary</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/accounts/deduction.png" alt="">
                                </div>
                        </a>
                        <h5>Deduction</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                    <a href="">

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
                    <a href="{{ route('add-inventory') }}">

                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="/assets/accounts/new item.png" alt="">
                            </div>
                            <h5>Add New Item</h5>
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
        <br>
        <div class="text-center">
            {{-- @include('main_super_admin.dashboard.include.poweredby') --}}

        </div>

    </div>
</div>
<!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')