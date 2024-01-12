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
                <h3 class="text-center"></h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Edit Student form</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations you have updated successfully!</strong> {{ session('success') }}.
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
                    <form class="new-added-form" action="{{ route('update-edit-student',['id'=> $student_details->id ]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Session*</label>
                                <select name="session_year" class="form-control" id="">
                                    <option value="">Select Session</option>
                                    @foreach($get_all_sessions as $session)
                                    <option value="{{ $session->session_years }}" {{ $student_details->session_year == $session->session_years ? 'selected' : '' }}>
                                        {{ $session->session_years }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>First Name *</label>
                                <input type="text" name="first_name" id="first_name" placeholder="Enter  Name" class="form-control" value="{{ $student_details->first_name }}" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Last Name *</label>
                                <input type="text" name="last_name" id="last_name" value="{{ $student_details->last_name }}" placeholder="Enter last name" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Surname*</label>
                                <input type="text" name="surname" id="surname" value="{{ $student_details->surname }}" placeholder="Enter  Email" class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Gender*</label>
                                <select class="form-control" id="inputGroupSelect02" name="gender" value="{{ $student_details->gender }}">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Custom</option>
                                </select>
                            </div>


                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Religion*</label>
                                <input type="text" name="religion" id="religion" value="{{ $student_details->religion }}" placeholder="Enter  Religion" class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date of Birth *</label>
                                <input type="date" name="birth_date" id="birth_date" value="{{ $student_details->birth_date }}" class="form-control" />


                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date of Birth Certificate *</label>
                                <input type="file" accept="image/*" name="birth_certificate_img" value="{{ $student_details->birth_certificate_img }}" class="form-control">
                                <div>
                                    <img src="/campus/general_operations/birth_certificates/{{ $student_details->birth_certificate_img }}" alt="">
                                </div>
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
                                <input type="text" name="father_name" id="father_name" value="{{ $student_details->father_name }}" placeholder="Enter Father Name" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Contact *</label>
                                <input type="text" name="contact" id="contact" value="{{ $student_details->contact }}" placeholder="Enter father contact" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Address*</label>
                                <input type="text" name="Address" id="Address" placeholder="Enter Address" value="{{ $student_details->Address }}" class="form-control" />

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
                                <input type="date" name="enrollment_date" id="enrollment_date" value="{{ $student_details->enrollment_date }}" placeholder="date..." class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Class *    &nbsp; &nbsp; Previous Class : {{ $student_details->class_name }} </label>
                                <!-- <input type="text" name="class_name" id="class_name" value="{{ $student_details->class_name }}" placeholder="Enter class" class="form-control" />
                             -->
                             <select name="class_name" class="form-control" id="select_class">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Section*   &nbsp; &nbsp; Previous Section: {{ $student_details->section_name }}</label>
                                <!-- <input type="text" name="section_name" id="section_name" value="{{ $student_details->section_name }}" placeholder="Enter section" class="form-control" />
                             -->
                             <select name="section_name" id="section_name_dropdown" class="form-control">
                                    <option value="">Section</option>
                                </select>
                            </div>  

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>GR#*</label>
                                <input type="text" name="gr" id="gr" value="{{ $student_details->gr }}" placeholder="Enter GR" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Scholarship Awarded(percentage)*</label>
                                <input type="text" name="scholarship_percentage" id="scholarship_percentage" value="{{ $student_details->scholarship_percentage }}" placeholder="Enter Percentage" class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Student Picture*</label>
                                <input type="file" accept="image/*" name="student_img" id="student_img" value="{{ $student_details->student_img }}" class="form-control" />
                                <div>
                                    <img src="/campus/general_operations/student_image/{{ $student_details->student_img }}" alt="">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Covid Vaccination Certificate*</label>
                                <input type="file" accept="image/*" name="covid_certificate_img" value="{{ $student_details->covid_certificate_img }}" id="covid_certificate" placeholder="Enter  Religion" class="form-control" />
                                <div>
                                    <img src="/campus/general_operations/covid_certificate_image/{{ $student_details->covid_certificate_img }}" alt="">
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Last School*</label>
                                <input type="text" name="last_school" id="last_school" value="{{ $student_details->last_school }}" placeholder="Enter Last School" class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Leaving Certificate*</label>
                                <input type="file" accept="image/*" name="leaving_certificate_img" value="{{ $student_details->leaving_certificate_img }}" id="leaving_certificate_img" placeholder="..." class="form-control" />
                                <div>
                                    <img src="/campus/general_operations/leaving_certificate_image/{{ $student_details->leaving_certificate_img }}" alt="">
                                </div>
                            </div>
                            <div class="col-12 form-group mg-t-8 text-center">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
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

@include('institute_admin_panel.dashboard.include.footer')


<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-wise-section',
            method: 'get',
            data: {
                class_name: class_name,
                _token: '{{csrf_token()}}'
            }, 

            success: function(response) {
                $("#section_name_dropdown").empty();
                $.each(response, function(index, sectionName) {
                    if ($("#section_name_dropdown option[value='" + sectionName + "']").length === 0) {
                        $("#section_name_dropdown").append('<option value="' + sectionName + '">' + sectionName + '</option>');
                    }
                });
            },

            error: function(xhr, status) { 
                console.log("Error: ", xhr, status);
            }
        });
    });
</script>