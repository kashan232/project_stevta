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
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul>
                    <li>
                        <a href="{{ route('institute_Dashboard') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('all-employees') }}">All Employee</a>
                    </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('employee-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('employee-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Employee</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="{{ route('store-add-employees') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Title/Designation*</label>
                                <input type="text" name="title_designation" id="title_designation" placeholder="Enter your Designation"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>First Name *</label>
                                <input type="text" name="first_name" id="first_name" required
                                    placeholder="Enter First name" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Last Name*</label>
                                <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>NIC*</label>
                                <input type="number" name="nic" id="last_name" placeholder="Enter Your NIC"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Hire Date *</label>
                                <input type="date" name="hire_date" id="hire_date" placeholder="date..."
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Phone*</label>
                                <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Email*</label>
                                <input type="email" name="email" id="email" placeholder="Enter Your Email"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Password*</label>
                                <input type="password" name="password" id="password" placeholder="Type password Here..."
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Address*</label>
                                <input type="text" name="address" id="address" placeholder="Enter Your Address"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Department*</label>
                                <select name="department" id="department" placeholder="Enter Your Department"
                                class="form-control">
                                    @foreach ($CampusDepartments as $CampusDepartment )
                                        <option value="{{ $CampusDepartment->dept_name }}">{{ $CampusDepartment->dept_name }}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Salary*</label>
                                <input type="number" name="salary" id="salary" placeholder="Enter Your Salary"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>BPS*</label>
                                <input type="number" name="bps" id="bps" placeholder="Enter Your BPS"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Medical Allowance*</label>
                                <input type="number" name="medical_allowance" id="medical_allowance" placeholder="Your Medical Allowance"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Fuel Allowance*</label>
                                <input type="number" name="fuel_allowance" id="fuel_allowance" placeholder="Your Fuel Allowance"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>House Allowance*</label>
                                <input type="number" name="house_allowance" id="house_allowance" placeholder="Your House Allowance"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>N0. Of Leaves*</label>
                                <input type="number" name="no_of_leaves" id="no_of_leaves" placeholder="Your Leaves"
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Employee picture*</label>
                                <input type="file" accept="image/*" name="employee_pic" id="employee_pic"
                                    placeholder="..." class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Front CNIC picture*</label>
                                <input type="file" accept="image/*" name="front_nic_pic" id="front_nic_pic"
                                    placeholder="..." class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Back CNIC picture*</label>
                                <input type="file" accept="image/*" name="back_nic_pic" id="back_nic_pic"
                                    placeholder="..." class="form-control" />
                            </div>
                        </div>
                        <!-- Login Credential -->
                        <div class="heading-layout1">
                            <div class="item-title Add-student m-auto justify-content-center">
                                <h3>Emergency Contact</h3>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Name*</label>
                                <input type="text" name="emergency_contact_name" id="emergency_contact_name"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Relation*</label>
                                <input type="text" name="emergency_contact_relation" id="emergency_contact_relation"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Phone*</label>
                                <input type="text" name="emergency_contact_phone" id="emergency_contact_phone"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 form-group mg-t-8 text-center">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark btn-lg">
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
@include('institute_admin_panel.dashboard.include.footer')
