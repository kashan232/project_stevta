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
                        {{-- <ul>
                    <li>
                        <a href="{{ route('campus-single-operation') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('CampusHrOperations') }}">HR Screen</a>
                    </li>
                    <li>
                        <a href="{{ route('all-employees') }}">All Employee</a>
                    </li>
                </ul> --}}
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('employee-added'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Congratulations!</strong> {{ session('employee-added') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="heading-layout1">
                                <div class="item-title Add-student m-auto justify-content-center">
                                    <p>Welcome to the University Portal</p>
                                    <h3>Apply For Registration</h3>
                                </div>
                            </div>
                            <form class="new-added-form" action="{{ route('store-online-addmission-form') }}" method="POST" 
                            enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-10 mt-3" style="color: red">
                                        <ul>
                                            <li>• Use your own CNIC or B-Form number to register.</li>
                                            <li>• CNIC/B-Form number can not be changed after
                                                registration. Please enter your own CNIC or B-Form
                                                number carefully..</li>
                                            <li>• If your CNIC/B-Form No. is already registered, there is
                                                no need to register again. Simply log in to your account
                                                to access the Online Admission Form.</li>
                                        </ul>
                                    </div>
                                </div><br>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>CNIC NO. /B-form No*</label>
                                    <input type="number" name="cnic" placeholder="Enter Your Cnic" required class="form-control" />
                                </div>

                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Retype CNIC NO. /B-form No*</label>
                                    <input type="number" name="retype_cnic" required
                                        placeholder="Retype Cnic" class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Email:*</label>
                                    <input type="email" name="email" placeholder="Enter Your Email"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Email Verification Code:*</label>
                                    <input type="number" name="email_verification_code" placeholder="Enter Code"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Mobile Number*</label>
                                    <input type="number" name="mobile_number" placeholder="Enter Mobile Number"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Father Name:*</label>
                                    <input type="text" name="father_name" placeholder="Enter Father Name"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Surname:*</label>
                                    <input type="text" name="surname" placeholder="Enter Surname"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Gender*</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Custom">Custom</option>
                                    </select>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Country:*</label>
                                    <input type="text" name="country" placeholder="Enter Country Name"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Domicile Province / State:*</label>
                                    <input type="text" name="domicile_province" id="last_name" placeholder="Enter Domicile Province / State"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Domicile District:*</label>
                                    <input type="text" name="domicile_district" placeholder="Enter Domicile District"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Password:*</label>
                                    <input type="text" name="password" placeholder=" Enter Password"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Retype Password:*</label>
                                    <input type="text" name="retype_password" placeholder="Enter Retype Password"
                                        class="form-control" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Student Image:*</label>
                                    <input type="text" name="retype_password" placeholder="Enter Retype Password"
                                        class="form-control" />
                                </div>
                                <div class="col-12 form-group mg-t-8 text-center">
                                    <button type="submit"
                                        class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark btn-lg">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- Page Area End Here -->
    </div>

    @include('campus_admin_panel.dashboard.include.footer')