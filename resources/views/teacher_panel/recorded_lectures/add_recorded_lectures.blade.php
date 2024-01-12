@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('recorded-lectures') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        List Recorded Lectures
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body pt-3 pb-4">
                    <div class="heading-layout1">
                        <div class="item-title  mt-5 mb-5 text-center w-100">
                            <h3> Upload Recorded Lectures </h3>
                        </div>
                    </div>
                    <form action="{{ route('store-recorded-lectures') }}" method="POST" class="new-added-form">
                        @csrf
                        @if (session()->has('success-message-lecture'))
                        <div class="alert alert-success">
                            {{ session('success-message-lecture') }}
                        </div>
                        @endif
                        <div class="row">
                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div> -->

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    @foreach($get_classes_subjects as $class_name)
                                    <option value="{{ $class_name }}">{{ $class_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                    <option value="">Section</option>
                                </select>
                            </div> -->

                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="subject_name" id="subject_name_dropdown" class="form-control classid">
                                    <option value="">Select a Subject</option>
                                </select>
                            </div> -->
                            <!-- 
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <select name="subject_name" class="form-control classid" id="select_subject">
    @foreach($get_subjects_classes as $subjects => $class_name)
        <option value="{{ $subjects }}">{{ $subjects }} (Class: {{ $class_name }})</option>
    @endforeach
</select> -->

                            <!-- genuine  -->

                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
    <select name="subject_name" class="form-control" id="select_subject">
        <option>Select Subject</option>
    </select>
</div> -->

                            <!-- genuine end  -->


                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
    <select name="subject_name" class="form-control" id="select_subject">
        <option>Select Subject</option>
    </select>
</div> -->

                            <!-- New dropdown for individual subjects -->
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="subject_name" class="form-control" id="individual_subjects">
                                    <option>Select Subject</option>
                                </select>
                            </div>
                            

                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="text" name="lecture_title" id="lecture_title" placeholder="Lecture Title.." required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="date" name="lecture_upld_dte" id="lecture_upld_dte" placeholder="Add Date.." required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="text" name="lecture_link" id="lecture_link" placeholder="Link.." required class="form-control" />
                            </div>




                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Submit
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

@include('teacher_panel.include.footer')

<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-subjects',
            method: 'get',
            data: {
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },

            success: function(response) {
                console.log(response); // Log the response data to the console

                $("#subject_name_dropdown").empty();
                $.each(response, function(index, subject) {
                    if ($("#subject_name_dropdown option[value='" + subject + "']").length === 0) {
                        $("#subject_name_dropdown").append('<option value="' + subject + '">' + subject + '</option>');
                    }
                });
            },

            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });
    });
</script>


<!-- 

<script>
    $(document).ready(function() {
        $('#select_class').change(function() {
            var selectedClass = $(this).val();

            $.ajax({
                url: '/fetch-subjects', // Replace with your Laravel route URL
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // Include CSRF token for security
                    class_name: selectedClass
                },
                success: function(data) {
                    // Clear the existing options
                    $('#select_subject').empty();

                    // Populate the subjects dropdown with the fetched data
                    $.each(data.subjects, function(key, value) {
                        $('#select_subject').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        });
    });
</script> -->



<script>
    $(document).ready(function() {
        $('#select_class').change(function() {
            var selectedClass = $(this).val();

            $.ajax({
                url: '/fetch-subjects', // Replace with your Laravel route URL
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    class_name: selectedClass
                },
                success: function(data) {
                    // Clear the existing options in both dropdowns
                    $('#select_subject').empty();
                    $('#individual_subjects').empty();

                    // Populate the subjects dropdown with the fetched data
                    $.each(data.subjects, function(key, value) {
                        $('#select_subject').append('<option value="' + key + '">' + value + '</option>');

                        // Split subjects by comma and add them to the individual subjects dropdown
                        var subjectsArray = value.split(',');
                        $.each(subjectsArray, function(index, subject) {
                            $('#individual_subjects').append('<option value="' + subject + '">' + subject + '</option>');
                        });
                    });
                }
            });
        });
    });
</script>   