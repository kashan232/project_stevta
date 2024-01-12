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
                    <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                        <a href="{{ route('all-diary') }}" class="text-white">All Diary/Assignment</a>
                    </button>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="alert alert-success" id="diary_uploaded"></div>
                    <div class="alert alert-danger" id="diary_uploaded_error"></div>
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100">
                            <h3 class="mt-5 mb-5">Edit Diary/Assignments</h3>
                        </div>
                    </div>
                    <form id="update_diary_uploaded_document" class="new-added-form" action="{{ route('update-diary') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="hidden" name="updated_id" value="{{ $diary_details->id }}">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                             -->

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="hidden" name="updated_id" value="{{ $diary_details->id }}">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}" {{ $class->class_name == $diary_details->class_name ? 'selected' : '' }}>
                                        {{ $class->class_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                    <option value="{{ $diary_details->section_name }}">Section</option>
                                </select>
                            </div> -->

                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="subject_name" id="subject_name_dropdown" class="form-control classid">
                                    <option value="{{ $diary_details->subject_name }}">Select a Subject</option>
                                </select>
                            </div> -->

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="subject_name" id="subject_name_dropdown" class="form-control classid">
                                    <option value="{{ $diary_details->subject_name }}">{{ $diary_details->subject_name }}</option>
                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->subject }}" {{ $subject->subject == $diary_details->subject_name ? 'selected' : '' }}>
                                        {{ $subject->subject }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3 mg-t-6">
                            <div class="col-xl-6 col-lg-6 col-12 form-group ">
                                <input type="date" value="{{ $diary_details->upload_date }}" name="upload_date" class="form-control" placeholder="Upload File" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group ">
                                <input type="file" id="uploaded_document" name="uploaded_document" class="form-control" id="uploaded_document">
                            </div>
                        </div>
                        <div class="row mt-3 mb-3 mg-t-6">
                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                <textarea type="textarea" name="diary_note" class="form-control" id="diary" placeholder="Enter New Diary Note">{{ $diary_details->diary_note }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5 mb-5 mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Submit
                            </button>
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
    $('#update_diary_uploaded_document').on('submit', function(e) {
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