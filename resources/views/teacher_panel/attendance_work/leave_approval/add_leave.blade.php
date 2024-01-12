@include('teacher_panel.teacher_includes.header')
<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    @include('teacher_panel.teacher_includes.navbar')
    <!--**********************************
            Nav header end
        ***********************************-->
    <!--**********************************
            Header start
        ***********************************-->
    @include('teacher_panel.teacher_includes.topbar')

    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('teacher_panel.teacher_includes.sidebar')
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
                        <h4>Add Leave </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">All Leave</a></li>
                        <li class="breadcrumb-item active"><a href="#">Add Leave</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="new-added-form" action="{{ route('store-add-leave') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label class="form-label">Course:</label>
                                        <select name="class_name" class="form-control classid" id="select_class_checking">
                                            <option>Select Course</option>
                                            @foreach($classes as $class)
                                            <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-12 form-group">

                                        <label class="form-label">Department:</label>
                                        <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                            <option value="">Department</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label class="form-label">Students:</label>
                                        <select name="student_name" id="student_name_dropdown" class="form-control classid">
                                            <option value="">Select a Student</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label for="">Apply Date*</label>
                                        <input type="date" name="apply_date" id="apply_date" value="YYYY-MM-DD" placeholder="Apply Date" required class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label for="">From Date*</label>

                                        <input type="date" name="from_date" id="from_date" placeholder=".." required class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label for="">To Date*</label>
                                        <input type="date" name="to_date" id="to_date" placeholder=".." required class="form-control" />
                                    </div>
                                </div>

                                <div class="row mt-3 mb-3 mg-t-6">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <label for="">Reason*</label>
                                        <textarea type="textarea" name="leave_reason" class="form-control" id="diary" placeholder="Enter Your Reason" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3 mg-t-6">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group ">
                                        <label for="" class="form-check-label">Leave status*</label>
                                        <div>
                                            <input type="radio" name="leave_status" value="Pending" checked>
                                            pending
                                            <input type="radio" name="leave_status" value="Disapprove">
                                            Disapprove
                                            <input type="radio" name="leave_status" value="Approve">
                                            Approve
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-center mt-5 mb-5 mg-t-8">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
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
    @include('teacher_panel.teacher_includes.poweredby')
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
@include('teacher_panel.teacher_includes.footer')


<script>
    $('#select_class_checking').on('change', function () {
    var class_name = $(this).val();

    $.ajax({
        url: '/teacher-cls-wise-sectn',
        method: 'get',
        data: {
            class_name: class_name,
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            var sectionDropdown = $("#section_name_dropdown");
            sectionDropdown.empty(); // Clear existing options

            // Add default option
            sectionDropdown.append('<option value="">Department</option>');

            // Add options based on the received data
            $.each(response, function (index, sectionName) {
                sectionDropdown.append('<option value="' + sectionName + '">' + sectionName + '</option>');
            });
        },
        error: function (xhr, status) {
            console.log("Error: ", xhr, status);
        }
    });
});

    // Get the current date
    var currentDate = new Date();

    // Format the date as YYYY-MM-DD
    var year = currentDate.getFullYear();
    var month = String(currentDate.getMonth() + 1).padStart(2, '0');
    var day = String(currentDate.getDate()).padStart(2, '0');
    var formattedDate = year + '-' + month + '-' + day;

    // Set the value of the input field
    document.getElementById('apply_date').setAttribute('value', formattedDate);
</script>

</body>

</html>