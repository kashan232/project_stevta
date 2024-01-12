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
                        <h4>Apply For Addmission</h4>
                    </div>
                </div>
                {{-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">All Semester</a></li>
                        <li class="breadcrumb-item active"><a href="#">Add Semester</a></li>
                    </ol>
                </div> --}}
            </div>

            <div class="row">
                <div class="col-xl-8 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('student-added'))
                                <div class="alert alert-success">
                                    {{ session('student-added') }}
                                </div>
                            @endif
                            <div class="col-8 col-sm-10 col-md-12 col-lg-12 col-xl-12">
                                <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2 id="heading" class="text-center">Apply For Addmission</h2>
                                    <form class="new-added-form" action="{{ route('store-student-admissions') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            @error('student_email')
                                                <div class="alert alert-danger text-dark">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Batch*</label>
                                            <select name="batch" class="form-control" id="">
                                                <option value="">Select Batch</option>
                                                @foreach ($get_all_batches as $batches)
                                                    <option value="{{ $batches->batch }}">
                                                        {{ $batches->batch }}</option>
                                                @endforeach 
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>First Name *</label>
                                            <input type="text" name="first_name" id="first_name" placeholder="First Name"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Last Name *</label>
                                            <input type="text" name="last_name" id="last_name" placeholder="Last name"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Surname*</label>
                                            <input type="text" name="surname" id="surname" placeholder="Surname"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Gender*</label>
                                            <select class="form-control" id="inputGroupSelect02" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Custom</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Religion*</label>
                                            <input type="text" name="religion" id="religion" placeholder="Religion"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Date of Birth *</label>
                                            <input type="date" name="birth_date" id="birth_date" class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Date of Birth Certificate *</label>
                                            <input type="file" accept="image/*" name="birth_certificate_img"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <!-- Parents Details -->
                                    <div class="heading-layout1">
                                        <div class="item-title Add-student m-auto justify-content-center">
                                            <h3 class="text-center">Parents Details</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Father Name *</label>
                                            <input type="text" name="father_name" id="father_name"
                                                placeholder="Father Name" class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Contact *</label>
                                            <input type="text" name="contact" id="contact" placeholder="Father contact"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Address*</label>
                                            <input type="text" name="Address" id="Address" placeholder=" Address"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <!-- Account Details -->
                                    <div class="heading-layout1">
                                        <div class="item-title Add-student m-auto justify-content-center">
                                            <h3 class="text-center">Bank Account Details</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Account Name*</label>
                                            <input type="text" name="account_name" id="account_name"
                                                placeholder="Account Name" class="form-control" required />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Account Number*</label>
                                            <input type="number" name="account_number" id="account_number"
                                                placeholder="Account Number" class="form-control" required />
                                        </div>
                                    </div>
                                    <!-- Acdemiv info -->
                                    <div class="heading-layout1">
                                        <div class="item-title Add-student m-auto justify-content-center">
                                            <h3 class="text-center">Academic Details</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Enrollment Date *</label>
                                            <input type="date" name="enrollment_date" id="enrollment_date"
                                                placeholder="enrollment Date" class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Course *</label>
                                            <select name="class_name" class="form-control" id="select_class_admission">
                                                <option value="">Select a Course</option>
                                                @foreach ($classes as $class)
                                                    <option value="{{ $class->class_name }}">{{ $class->class_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Departments*</label>
                                            <select name="section_name" id="section_name_dropdown" class="form-control">
                                                <option value="">Departments</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Scholarship Awarded(percentage)*</label>
                                            <input type="text" name="scholarship_percentage"
                                                id="scholarship_percentage" placeholder="Scholarship Percentage"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Student Picture*</label>
                                            <input type="file" accept="image/*" name="student_img" id="student_img"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Covid Vaccination Certificate*</label>
                                            <input type="file" accept="image/*" name="covid_certificate_img"
                                                id="covid_certificate" placeholder="Enter  Religion"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Last School*</label>
                                            <input type="text" name="last_school" id="last_school"
                                                placeholder="Last School" class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Leaving Certificate*</label>
                                            <input type="file" accept="image/*" name="leaving_certificate_img"
                                                id="leaving_certificate_img" placeholder="..." class="form-control" />
                                        </div>
                                    </div>
                                    <!-- Login Credential -->
                                    <div class="heading-layout1">
                                        <div class="item-title Add-student m-auto justify-content-center">
                                            <h3 class="text-center">Login Credentials</h3>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email*</label>
                                            <input type="email" name="student_email" id="student_email"
                                                placeholder="Email" class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Password*</label>
                                            <input type="password" name="password" id="password" placeholder="Password"
                                                class="form-control" />
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#select_class_admission').on('change', function () {
            // alert('ok');
            var class_name = $(this).val();
            
            $.ajax({
                url: '/class-wise-section', // Replace with your actual route
                method: 'get',
                data: {
                    class_name: class_name,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    var sectionDropdown = $("#section_name_dropdown");
                    sectionDropdown.empty(); // Clear existing options

                    // Add default option
                    // sectionDropdown.append('<option value="">Departments</option>');

                    // Add options based on the received data
                    $.each(response, function (index, sectionName) {
                        sectionDropdown.append('<option value="' + sectionName + '">' + sectionName + '</option>');
                    });
                },
                error: function (xhr, status) {
                    console.log("Error: ", xhr, status);
                }
            });
        });
    });
</script>


</body>

</html>
