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
                        <a href="{{ route('all-employees') }}">Edit Employee</a>
                    </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('update-success-message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('update-success-message') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Edit Employee</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="{{ route('update-employees',['id'=> $employee_details->id ]) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Title/Designation*</label>
                                <input type="text" name="title_designation" id="title_designation" placeholder="Enter your Designation"
                                    required class="form-control" value="{{ $employee_details->title_designation }}"/>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>First Name *</label>
                                <input type="text" name="first_name" id="first_name" required
                                    placeholder="Enter First name" class="form-control"
                                     value="{{ $employee_details->first_name }}" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Last Name*</label>
                                <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name"
                                    class="form-control" value="{{ $employee_details->last_name }}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>NIC*</label>
                                <input type="text" name="nic" id="last_name" placeholder="Enter Your NIC"
                                    class="form-control" value="{{ $employee_details->nic }}" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Hire Date *</label>
                                <input type="date" name="hire_date" id="hire_date" placeholder="date..."
                                    required class="form-control" value="{{ $employee_details->hire_date }}"/>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Phone*</label>
                                <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number"
                                    class="form-control" value="{{ $employee_details->phone }}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Email*</label>
                                <input type="email" name="email" id="email" placeholder="Enter Your Email"
                                    class="form-control" value="{{ $employee_details->email }}"/>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Address*</label>
                                <input type="text" name="address" id="address" placeholder="Enter Your Address"
                                    class="form-control" value="{{ $employee_details->address }}" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Department*</label>
                                <select name="department" id="department" placeholder="Enter Your Department"
                                class="form-control">
                                    @foreach ($CampusDepartments as $CampusDepartment )
                                        <option value="{{ $CampusDepartment->dept_name }}">{{ $CampusDepartment->dept_name }}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Salary*</label>
                                <input type="Text" name="salary" id="salary" placeholder="Enter Your Salary"
                                    required class="form-control" value="{{ $employee_details->salary }}"/>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>BPS*</label>
                                <input type="text" name="bps" id="bps" placeholder="Enter Your BPS"
                                    class="form-control" value="{{ $employee_details->bps }}" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Appointment Letter No*</label>
                                <input type="text" name="appointment_letter_no" id="appointment_letter_no"
                                    class="form-control" value="{{ $employee_details->appointment_letter_no }}" />
                            </div>
                        </div>
                        
                        <div class="heading-layout1">
                            <div class="item-title Add-student m-auto justify-content-center">
                                <h3>Emergency Contact</h3>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Name*</label>
                                <input type="text" name="emergency_contact_name" id="emergency_contact_name"
                                    class="form-control" value="{{ $employee_details->emergency_contact_name }}"/>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Relation*</label>
                                <input type="text" name="emergency_contact_relation" id="emergency_contact_relation"
                                    class="form-control" value="{{ $employee_details->emergency_contact_relation }}"/>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Phone*</label>
                                <input type="text" name="emergency_contact_phone" id="emergency_contact_phone"
                                    class="form-control" value="{{ $employee_details->emergency_contact_phone }}"/>
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
