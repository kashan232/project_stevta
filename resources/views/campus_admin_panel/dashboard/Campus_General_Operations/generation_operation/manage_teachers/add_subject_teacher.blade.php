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
                        <h4>Add Subject Teachers</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">All Subject Teachers</a></li>
                        <li class="breadcrumb-item active"><a href="#">Add Subject Teacher</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="new-added-form" action="{{ route('store-subjectTeacher') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Select Class</label>
                                            <select name="class_name" class="form-control" id="select_class">
                                                <option value="">Select a Class</option>
                                                @foreach ($classes as $class)
                                                    <option value="{{ $class->class_name }}">{{ $class->class_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Select Subject</label>
                                            <select id="subject_name_dropdown" class="form-control" multiple>
                                                <option value="">Select a Subject</option>
                                            </select>
                                            <input type="hidden" class="form-control" name="subject_name"
                                                id="subjects_names" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Teacher</label>
                                            <select class="form-control" name="teacher_name">
                                                @foreach ($teacher as $t)
                                                    <option value="{{ $t->first_name }}">{{ $t->first_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-dark">Cencel</button>
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


<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-subjects',
            method: 'get',
            data: {
                class_name: class_name,
                _token: '{{ csrf_token() }}'
            },

            success: function(response) {
                $("#subject_name_dropdown").empty();
                $.each(response, function(index, subject) {
                    if ($("#subject_name_dropdown option[value='" + subject + "']")
                        .length === 0) {
                        $("#subject_name_dropdown").append('<option value="' + subject +
                            '">' + subject + '</option>');
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
