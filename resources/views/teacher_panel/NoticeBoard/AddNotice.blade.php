@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title  mt-5 mb-5 text-center w-100">
                            <h3>Add Notice</h3>
                        </div>
                    </div>
                    @if (session('Success'))
                        <div class="alert alert-success">
                            {{ session('Success') }}
                        </div>
                    @endif
                    <form class="new-added-form" action="{{ route('save-notice') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label for="">Add Title*</label>
                                <input type="text" name="Notice_title" id="course_tilte" placeholder="add title"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label for="">Add Link*</label>
                                <input type="text" name="Notice_Link" id="course_tilte" placeholder="add link"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label for="">Notice Publish Date*</label>
                                <input type="date" name="Notice_Publish_date" id="course_title" placeholder=""
                                    required class="form-control" readonly />
                            </div>
                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group mt-2 mb-2">
                                <select name="Notice_class" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    {{-- @foreach ($classes as $class) --}}
                                    <option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                                    {{-- @endforeach --}}
                                </select>
                            </div> -->
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    @foreach ($get_classes_subjects as $class_name)
                                        <option value="{{ $class_name }}">{{ $class_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="subject_name" class="form-control" id="individual_subjects">
                                    <option>Select Subject</option>
                                </select>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-12 form-group mt-2 mb-2">
                                <label for="">Write Message *</label>
                                <textarea name="Notice_Description" id="course_tilte" placeholder="Write message" required class="form-control"
                                    rows="10"></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="submit"
                                    class="btn-fill-lg mt-3 mb-3 btn-gradient-yellow btn-hover-bluedark">
                                    Save
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
    // Get the current date
    var currentDate = new Date();
    var year = currentDate.getFullYear();
    var month = String(currentDate.getMonth() + 1).padStart(2, '0');
    var day = String(currentDate.getDate()).padStart(2, '0');
    var formattedDate = year + '-' + month + '-' + day;
    document.getElementById('course_title').value = formattedDate;
</script>
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
                        $('#select_subject').append('<option value="' + key + '">' +
                            value + '</option>');

                        // Split subjects by comma and add them to the individual subjects dropdown
                        var subjectsArray = value.split(',');
                        $.each(subjectsArray, function(index, subject) {
                            $('#individual_subjects').append(
                                '<option value="' + subject + '">' +
                                subject + '</option>');
                        });
                    });
                }
            });
        });
    });
</script>
