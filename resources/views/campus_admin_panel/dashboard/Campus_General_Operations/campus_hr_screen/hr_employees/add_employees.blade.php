@include('campus_admin_panel.dashboard.include.header')
<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.navbar')
    <!--**********************************
            Nav header end
        ***********************************-->
    <!--**********************************
            Header start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.topbar')
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.sidebar')
    <!--**********************************
            Sidebar end
        ***********************************-->
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Add Course </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('campus-single-operation') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('all-courses') }}">All Course</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success-message-class'))
                            <div class="alert alert-success alert-dismissible alert-alt fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                </button>
                                <strong>Congratulations!</strong> {{ session('success-message-class') }}.
                            </div>
                            @endif
                            <form class="new-added-form" action="{{ route('store-add-employees') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Title/Designation*</label>
                                        <input type="text" name="title_designation" id="title_designation" placeholder="Enter your Designation" required class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>First Name *</label>
                                        <input type="text" name="first_name" id="first_name" required placeholder="Enter First name" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Last Name*</label>
                                        <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>NIC*</label>
                                        <input type="number" name="nic" id="last_name" placeholder="Enter Your NIC" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Hire Date *</label>
                                        <input type="date" name="hire_date" id="hire_date" placeholder="date..." required class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Phone*</label>
                                        <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Email*</label>
                                        <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Password*</label>
                                        <input type="password" name="password" id="password" placeholder="Type password Here..." required class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Address*</label>
                                        <input type="text" name="address" id="address" placeholder="Enter Your Address" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Department*</label>
                                        <select name="department" id="department" placeholder="Enter Your Department" class="form-control">
                                            @foreach ($CampusDepartments as $CampusDepartment )
                                            <option value="{{ $CampusDepartment->dept_name }}">{{ $CampusDepartment->dept_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Salary*</label>
                                        <input type="number" name="salary" id="salary" placeholder="Enter Your Salary" required class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>BPS*</label>
                                        <input type="number" name="bps" id="bps" placeholder="Enter Your BPS" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Medical Allowance*</label>
                                        <input type="number" name="medical_allowance" id="medical_allowance" placeholder="Your Medical Allowance" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Fuel Allowance*</label>
                                        <input type="number" name="fuel_allowance" id="fuel_allowance" placeholder="Your Fuel Allowance" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>House Allowance*</label>
                                        <input type="number" name="house_allowance" id="house_allowance" placeholder="Your House Allowance" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Bank Account Name*</label>
                                        <input type="text" name="account_name" id="no_of_leaves" placeholder="account name" class="form-control" />
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Account Number*</label>
                                        <input type="number" name="account_number" id="no_of_leaves" placeholder="account Number" class="form-control" />
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>N0. Of Leaves*</label>
                                        <input type="number" name="no_of_leaves" id="no_of_leaves" placeholder="Your Leaves" class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Employee picture*</label>
                                        <input type="file" accept="image/*" name="employee_pic" id="employee_pic" placeholder="..." class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Front CNIC picture*</label>
                                        <input type="file" accept="image/*" name="front_nic_pic" id="front_nic_pic" placeholder="..." class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Back CNIC picture*</label>
                                        <input type="file" accept="image/*" name="back_nic_pic" id="back_nic_pic" placeholder="..." class="form-control" />
                                    </div>
                                </div>
                                <!-- Login Credential -->
                                <div class="heading-layout1">
                                    <div class="item-title Add-student m-auto justify-content-center text-center mt-4 mb-4">
                                        <h3>Emergency Contact</h3>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Name*</label>
                                        <input type="text" name="emergency_contact_name" id="emergency_contact_name" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Relation*</label>
                                        <input type="text" name="emergency_contact_relation" id="emergency_contact_relation" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Phone*</label>
                                        <input type="text" name="emergency_contact_phone" id="emergency_contact_phone" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 form-group mg-t-8 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->
    <!--**********************************
            Footer start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.poweredby')
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
@include('campus_admin_panel.dashboard.include.footer')

<script>
    function validateInput() {
        const inputElement = document.getElementById('class_name');
        const errorElement = document.getElementById('error-class_name');

        // Regular expression to match input starting with alphabetic characters followed by optional integers
        const regex = /^[A-Za-z]+[0-9]*$/;

        if (regex.test(inputElement.value)) {
            // Input matches the pattern, clear the error message
            errorElement.textContent = "";
        } else {
            // Input does not match the pattern, show an error message
            errorElement.textContent = "Please start with alphabetic characters followed by optional integers.";
            // You may also choose to revert the input to a valid state if needed.
        }
    }
</script>

</body>

</html>