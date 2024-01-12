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
                <!-- <h3 class="text-center">"{{ @session('campus_name') }}"</h3> -->
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Student form</li>
                </ul>
            </div>
            <!-- <div class="row  d-flex justify-content-end">
                <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <a href="{{ route ('Back') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Back
                        </button>
                    </a>
                </div>
            </div> -->

            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Class Teacher</h3>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{ route('store-subjectTeacher') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>

                                <select name="class_name" class="form-control" id="select_class">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Section *</label>
                                <select name="section_name" id="section_name_dropdown" class="form-control">
                                    <option value="">Section</option>
                                </select>
                            </div>


                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Select Subject *</label>
                                <input type="text" class="form-control" name="subject_name" id="subjects_names" readonly>
                                <select  id="subject_name_dropdown" class="form-control" multiple>
                                    <option value="">Select a Subject</option>
                                </select>
                            </div> -->



                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Select Subject *</label>
                                <select id="subject_name_dropdown" class="form-control" multiple>
                                    <option value="">Select a Subject</option>
                                </select>
                                <input type="hidden" class="form-control" name="subject_name" id="subjects_names" readonly>
                            </div> 
 

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>

                                <select class="form-control" name="teacher_name">
                                    @foreach($teacher as $t)
                                    <option value="{{ $t->first_name }}">{{ $t->first_name}}</option>
                                    @endforeach
                                </select>
                            </div>



                        </div>


                        <!-- Parents Details -->
                        <!-- Acdemiv info -->


                        <!-- Login Credential -->
                        <div class="row d-flex justify-content-center">
                            <div class="mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Assign Subject
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

<script>
    $('#section_name_dropdown').on('change', function() {
        var section_name = $(this).val();
        var class_name = $('#select_class').val();

        $.ajax({
            url: '/section-subjects',
            method: 'GET',
            data: {
                section_name: section_name,
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },
            success: function(response) {
                $('#subject_name_dropdown').empty();
                $.each(response, function(index, subject) {
                    $('#subject_name_dropdown').append($('<option></option>').val(subject.subject).text(subject.subject));
                });

            },
            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });
    });
</script>


<!-- <script>
    $('#subject_name_dropdown').on('change', function() {
        var selectedTeachers = $('#subject_name_dropdown').val();
        $('#subjects_names').val(selectedTeachers.join(', ')); // Display selected teachers in the text input
    });
</script>   -->
<script>
    $(document).ready(function() {
        // Initialize Select2 with tagging and other options
        $('#subject_name_dropdown').select2({
            placeholder: 'Select a Subject',
            width: '100%',
            tags: true,
            tokenSeparators: [',', ' '], // Define how to separate multiple tags
        });

        // Update selected subjects in the hidden input field on change
        $('#subject_name_dropdown').on('change', function() {
            var selectedSubjects = $('#subject_name_dropdown').val(); 
            $('#subjects_names').val(selectedSubjects.join(', '));  
        });
    });
</script>  