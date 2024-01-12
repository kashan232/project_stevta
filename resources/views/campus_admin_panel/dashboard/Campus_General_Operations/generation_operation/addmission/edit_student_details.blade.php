@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Congratulations you have updated successfully!</strong>
                                    {{ session('success') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="heading-layout1">
                                <div class="item-title Add-student m-auto justify-content-center">
                                    <h3>Edit Student</h3>
                                </div>

                            </div>
                            <form class="new-added-form"
                                action="{{ route('update-edit-student', ['id' => $student_details->id]) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Batch*</label>
                                        <select name="session_year" class="form-control" id="">
                                            <option value="">Select Session</option>
                                            @foreach ($get_all_batches as $batches)
                                                {{-- @foreach ($get_all_batches as $batches)
                                    <option value="{{ $batches->batch }}" {{ $student_details->batch == $batches->batch ? 'selected' : '' }}>
                                        {{ $batches->batch }}
                                    </option>
                                    @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>First Name *</label>
                                        <input type="text" name="first_name" id="first_name"
                                            placeholder="Enter  Name" class="form-control"
                                            value="{{ $student_details->first_name }}" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Last Name *</label>
                                        <input type="text" name="last_name" id="last_name"
                                            value="{{ $student_details->last_name }}" placeholder="Enter last name"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Surname*</label>
                                        <input type="text" name="surname" id="surname"
                                            value="{{ $student_details->surname }}" placeholder="Enter  Email"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Gender*</label>
                                        <select class="form-control" id="inputGroupSelect02" name="gender"
                                            value="{{ $student_details->gender }}">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Custom</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Religion*</label>
                                        <input type="text" name="religion" id="religion"
                                            value="{{ $student_details->religion }}" placeholder="Enter  Religion"
                                            class="form-control" />
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Date of Birth *</label>
                                        <input type="date" name="birth_date" id="birth_date"
                                            value="{{ $student_details->birth_date }}" class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Birth Certificate Image*</label>
                                        <input type="file" accept="image/*" name="birth_certificate_img"
                                            value="{{ $student_details->birth_certificate_img }}" class="form-control">
                                        <input type="hidden" name="old_image_birth"
                                            value="{{ $student_details->birth_certificate_img }}">
                                    </div>
                                </div>
                                <!-- Parents Details -->
                                <div class="heading-layout1">
                                    <div class="item-title Add-student m-auto justify-content-center">
                                        <h3>Parents Details</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Father Name *</label>
                                        <input type="text" name="father_name" id="father_name"
                                            value="{{ $student_details->father_name }}" placeholder="Enter Father Name"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Contact *</label>
                                        <input type="text" name="contact" id="contact"
                                            value="{{ $student_details->contact }}" placeholder="Enter father contact"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Address*</label>
                                        <input type="text" name="Address" id="Address"
                                            placeholder="Enter Address" value="{{ $student_details->Address }}"
                                            class="form-control" />
                                    </div>
                                </div>
                                <!-- Account Details -->
                                <div class="heading-layout1">
                                    <div class="item-title Add-student m-auto justify-content-center">
                                        <h3>Bank Account Details</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Account Name*</label>
                                        <input type="text" name="account_name" id="account_name"
                                            placeholder="Account Name" value="{{ $student_details->account_name }}"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Account Number*</label>
                                        <input type="number" name="account_number" id="account_number"
                                            placeholder="Account Number"
                                            value="{{ $student_details->account_number }}" class="form-control" />
                                    </div>
                                </div>
                                <!-- Acdemiv info -->
                                <div class="heading-layout1">
                                    <div class="item-title Add-student m-auto justify-content-center">
                                        <h3>Academic Details</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Enrollment Date *</label>
                                        <input type="date" name="enrollment_date" id="enrollment_date"
                                            value="{{ $student_details->enrollment_date }}" placeholder="date..."
                                            class="form-control" />
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Class * &nbsp; &nbsp; Previous Class :
                                            {{ $student_details->class_name }} </label>
                                        <!-- <input type="text" name="class_name" id="class_name" value="{{ $student_details->class_name }}" placeholder="Enter class" class="form-control" />
                             -->
                                        <select name="class_name" class="form-control" id="select_class">
                                            <option value="">Select a Class</option>
                                            @foreach ($classes as $class)
                                                <option value="{{ $class->class_name }}">{{ $class->class_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Section* &nbsp; &nbsp; Previous Section:
                                            {{ $student_details->section_name }}</label>
                                        <!-- <input type="text" name="section_name" id="section_name" value="{{ $student_details->section_name }}" placeholder="Enter section" class="form-control" />
                             -->
                                        <select name="section_name" id="section_name_dropdown" class="form-control">
                                            <option value="">Section</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Scholarship Awarded(percentage)*</label>
                                        <input type="text" name="scholarship_percentage"
                                            id="scholarship_percentage"
                                            value="{{ $student_details->scholarship_percentage }}"
                                            placeholder="Enter Percentage" class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Student Picture*</label>
                                        <input type="file" accept="image/*" name="student_img" id="student_img"
                                            value="{{ $student_details->student_img }}" class="form-control" />
                                        <input type="hidden" name="old_image_student"
                                            value="{{ $student_details->student_img }}">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Covid Vaccination Certificate*</label>
                                        <input type="file" accept="image/*" name="covid_certificate_img"
                                            value="{{ $student_details->covid_certificate_img }}"
                                            id="covid_certificate" placeholder="Enter  Religion"
                                            class="form-control" />
                                        <input type="hidden" name="old_image_covid"
                                            value="{{ $student_details->covid_certificate_img }}">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Last School*</label>
                                        <input type="text" name="last_school" id="last_school"
                                            value="{{ $student_details->last_school }}"
                                            placeholder="Enter Last School" class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Leaving Certificate*</label>
                                        <input type="file" accept="image/*" name="leaving_certificate_img"
                                            value="{{ $student_details->leaving_certificate_img }}"
                                            id="leaving_certificate_img" placeholder="..." class="form-control" />
                                        <input type="hidden" name="old_image_leaving"
                                            value="{{ $student_details->leaving_certificate_img }}">
                                    </div>
                                    <div class="col-12 form-group mg-t-8 text-center">
                                        <button type="submit"
                                            class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <!-- Page Area End Here -->
        </div>
        @include('campus_admin_panel.dashboard.include.footer')
        <script>
            $('#select_class').on('change', function() {
                var class_name = $(this).val();

                $.ajax({
                    url: '/class-wise-section',
                    method: 'get',
                    data: {
                        class_name: class_name,
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(response) {
                        $("#section_name_dropdown").empty();
                        $.each(response, function(index, sectionName) {
                            if ($("#section_name_dropdown option[value='" + sectionName + "']")
                                .length === 0) {
                                $("#section_name_dropdown").append('<option value="' + sectionName +
                                    '">' + sectionName + '</option>');
                            }
                        });
                    },

                    error: function(xhr, status) {
                        console.log("Error: ", xhr, status);
                    }
                });
            });
        </script>
