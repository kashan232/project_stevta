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
                        <h4>Daily Attendance Record </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('store-employee-attendance') }}" method="POST">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Department</th>
                                                <th>Job Designation</th>
                                                <th>Employee Name</th>
                                                <th>Date</th>
                                                <th>Attendance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($attendance_records) < 1) <div class="alert alert-danger">
                                                <strong>Sorry!</strong> No Attendance Found.
                                </div>
                                @else
                                @foreach ($attendance_records as $attendance_record)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $attendance_record->department}}</td>
                                    <td>{{ $attendance_record->job_designation}}</td>
                                    <td>{{ $attendance_record->emp_name}}</td>
                                    <td>{{ $attendance_record->employee_attendance_date}}</td>
                                    <td>
                                        @if ($attendance_record->employee_attendance == 'Present')
                                        <button class="btn btn-success">{{ $attendance_record->employee_attendance }}</button>
                                        @elseif ($attendance_record->employee_attendance == 'Absent')
                                        <button class="btn btn-danger">{{ $attendance_record->employee_attendance }}</button>
                                        @elseif ($attendance_record->employee_attendance == 'Leave')
                                        <button class="btn btn-warning">{{ $attendance_record->employee_attendance }}</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                </tbody>
                                </table>
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
</script>

</body>

</html>