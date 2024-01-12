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
            <!-- Button trigger modal -->

            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul>
                    <li>
                        <a href="{{ route('institute_Dashboard') }}">Home</a>
                    </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('inventory-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('inventory-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Addmission Slip</h3>
                        </div>

                    </div>
                    <!-- Add new Book Form -->
                    <form class="new-added-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Student Name*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Student Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Father Name*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Father Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Course Name*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Course Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Section Name*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Section Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>GR:no*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter GR"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Enrollment Date*</label>
                                <input type="date" name="item_name" id="item_name" placeholder="Enter Course Name"
                                    required class="form-control" />
                            </div>
                             <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="justify-content-center m-auto">
    
                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('institute_admin_panel.dashboard.include.footer')
