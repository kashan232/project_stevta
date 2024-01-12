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
                        <h4>Select Attendance Details</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('student-added'))
                            <div class="alert alert-success">
                                {{ session('student-added') }}
                            </div>
                            @endif
                            <form action="{{ route('fetch-student-attendance-record') }}" id="student_attendance_records" method="GET" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Class</label>
                                            <select name="class_name" class="form-control classid" id="select_class">
                                                <option>Select Class</option>
                                                @foreach($classes as $class)
                                                <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Department:</label>
                                            <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                                <option value="">Department</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label class="form-label">Date:</label>
                                        <input type="date" name="attendance_date" id="attendance_date" class="form-control" value="{{ date('Y-m-d') }}">
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- <script>
    function validateInput() {
        const inputElement = document.getElementById('class_name');
        const errorElement = document.getElementById('error-class_name');

        // Regular expression to match input starting with alphabetic characters followed by optional integers
        const regex = /^[A-Za-z]+[0-9]*$/;

        if (regex.test(inputElement.value)) {
            // Input matches the pattern, clear the error message
            errorElement.textContent = "";
        } else {
            // Input does not match the pattern, show an error message
            errorElement.textContent = "Please start with alphabetic characters followed by optional integers.";
            // You may also choose to revert the input to a valid state if needed.
        }
    }
</script> -->


<script>
    $(document).ready(function() {
        // Event listener for the first dropdown
        $('#select_class').on('change', function() {
            var selectedClass = $(this).val();

            // Make an AJAX request to get the corresponding sections based on the selected class
            $.ajax({
                url: '/get-sections', // Replace with your actual route
                method: 'POST',
                data: {
                    class_name: selectedClass,
                    // Add any other data you need to send
                },
                success: function(data) {
                    // Assuming the data is an array of section names
                    populateSectionsDropdown(data);
                },
                error: function(error) {
                    console.error('Error fetching sections:', error);
                }
            });
        });

        // Function to populate the second dropdown
        function populateSectionsDropdown(sections) {
            var sectionDropdown = $('#section_name_dropdown');
            sectionDropdown.empty(); // Clear existing options

            // Add default option
            sectionDropdown.append('<option value="">Department</option>');

            // Add options based on the received data
            $.each(sections, function(index, section) {
                sectionDropdown.append('<option value="' + section + '">' + section + '</option>');
            });
        }
    });
</script>


</body>

</html>