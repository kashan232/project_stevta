@include('teacher_panel.include.header')
<div id="preloader"></div>
<style>
    #course_uploaded {
        display: none;
    }

    #course_uploaded_error {
        display: none;
    }
</style>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('all-course-material') }}"
                        class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        ALL Course Material
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="alert alert-success" id="course_uploaded"></div>
                    <div class="alert alert-danger" id="course_uploaded_error"></div>
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Edit Course Material</h3>
                        </div>
                    </div>
                    <form id="course_uploaded_document" class="new-added-form" action="{{ route('update-course') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="subject_name" id="subject_name_dropdown" class="form-control classid">
                                    <option value="{{ $course_details->subject_name }}" selected>
                                        {{ $course_details->subject_name }}</option>
                                    <!-- Add other options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="text" name="course_title" id="course_title"
                                    value="{{ $course_details->course_title }}" placeholder="Course Material Title"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="date" name="upload_date" id="user_name" placeholder=".." required
                                    value="{{ $course_details->upload_date }}" class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group" for="uploaded_document">
                                <input type="file" id="uploaded_document" name="uploaded_document"
                                    class="form-control" id="uploaded_document">
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
    $('#course_uploaded_document').on('submit', function(e) {
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
                    $("#course_uploaded_error").html(errorMessage).show();
                } else if (response.message) {
                    var successMessage = response.message;
                    $("#course_uploaded").html(successMessage).show();
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>
