@include('teacher_panel.include.header')
<div id="preloader"></div>
<style>
    #diary_uploaded {
        display: none;
    }

    #diary_uploaded_error {
        display: none;
    }
</style>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('all-diary') }}"
                        class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        All Diary/Assignment
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="col-md-12">
                        @error('title')
                            <div class="alert alert-danger text-dark">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="alert alert-success" id="diary_uploaded"></div>
                    <div class="alert alert-danger" id="diary_uploaded_error"></div>
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100">
                            <h3 class="mt-5 mb-5">Diary/Assignments</h3>
                        </div>
                    </div>
                    <form id="diary_uploaded_document" class="new-added-form" action="{{ route('store-add-diary') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Class</option>
                                    @foreach ($classes as $class)
<option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
@endforeach
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


                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                    <option value="">Section</option>
                                </select>
                            </div> -->



                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="subject_name" id="subject_name_dropdown" class="form-control classid">
                                    <option value="">Select a Subject</option>
                                </select>
                            </div> -->

                            <!--
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Subject *</label>
                                <select name="subject_name" id="subject_name_dropdown" class="form-control">
                                    <option value="">Select a Subject</option>
                                </select>
                            </div> -->

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="subject_name" class="form-control" id="individual_subjects">
                                    <option>Select Subject</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label for="">Due Date</label>
                                <input type="date" name="due_date" class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label for="">Choose File</label>
                                <input type="file" id="uploaded_document" name="uploaded_document"
                                    class="form-control" id="uploaded_document">
                                @error('uploaded_document')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3 mb-3 mg-t-6">
                            <div class="col-xl-6 col-lg-6 col-6 form-group">
                                <label for="">Write Assignment/Diary Title</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Write Assignment/Diary Title" />
                            </div>

                            <div class="col-xl-6 col-lg-6 col-6 form-group ">
                                <label for="">Write Total Marks</label>
                                <input type="number" name="assignmnet_total_marks" class="form-control"
                                    placeholder="Write Total Marks" />
                            </div>
                        </div>
                        <div class="row mt-3 mb-3 mg-t-6">

                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                <textarea type="textarea" name="diary_note" class="form-control" id="diary" placeholder="Enter New Diary Note"></textarea>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-center mt-5 mb-5 mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Submit
                            </button>
                        </div>
                        <div id="error_messages"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Page Area End Here -->
</div>
@include('teacher_panel.include.footer')

<script>
    $('#diary_uploaded_document').on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');

        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
                if (response.error) {
                    var errorMessage = response.error;
                    $("#diary_uploaded_error").html(errorMessage).show();
                } else if (response.message) {
                    var successMessage = response.message;
                    $("#diary_uploaded").html(successMessage).show();
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
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
