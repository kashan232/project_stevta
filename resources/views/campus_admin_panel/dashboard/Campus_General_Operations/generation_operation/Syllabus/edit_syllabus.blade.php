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
                        <h4>Edit Syllabus</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">All Syllabus</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="new-added-form" action="{{ route('save-edit-syllabus', ['id' => $SyllabusDetails->id]) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Select Course</label>
                                            <select name="class_name" class="form-control" id="select_class">
                                                <option value="">Select a Class</option>
                                                @foreach ($classes as $class)
                                                    <option value="{{ $class->class_name }}"
                                                        {{ $class->class_name == $SyllabusDetails->class_name ? 'selected' : '' }}>
                                                        {{ $class->class_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Select Subject</label>
                                            <select name="subject_name" id="subject_name_dropdown" class="form-control">
                                                <option value="">Select a Subject</option>
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->subject }}"
                                                        {{ $subject->subject == $SyllabusDetails->subject_name ? 'selected' : '' }}>
                                                        {{ $subject->subject }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Author Name</label>
                                            <input type="text" name="author_name" id="last_name" placeholder="Author Name" class="form-control" value="{{ $SyllabusDetails->author_name }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Book Name</label>
                                            <input type="text" name="book_name" id="last_name" placeholder="English book" class="form-control" value="{{ $SyllabusDetails->book_name }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">No: of Chapters</label>
                                            <input type="text" name="no_of_chapters" id="last_name" placeholder="(i.e) 12, 20" class="form-control" value="{{ $SyllabusDetails->no_of_chapters }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-dark">Cencel</button>
                                    </div>
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
    $('#select_class_syllabus').on('change', function() {
        var class_name = $(this).val();
        // alert(class_name);
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
</body>
</html>
