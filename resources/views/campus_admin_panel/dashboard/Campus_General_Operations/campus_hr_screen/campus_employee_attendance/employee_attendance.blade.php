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
                        <h4>Select Details For Generate Employee Attendance </h4>
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
                            @if (session('attendance_save'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congratulations!</strong> {{ session('attendance_save') }}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif
                            @if(count($employees_attendance_data) > 0)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Attendance Already Submitted You Can Edit Record.!</strong>
                            </div>
                            @endif
                            <div class="heading-layout1">
                                <div class="item-title text-center w-100 mt-5 mb-5">
                                    <h3>Generate Attendance</h3>
                                    <h6>
                                    Your Attendance Date is:&nbsp;"{{ $employee_attendance_date }}"</h6>
                                    <br>
                                </div>
                            </div>
                            <form action="{{ route('store-employee-attendance') }}" method="POST">
                        @csrf
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Department</th>
                                        <th>Job Designation</th>
                                        <td>Employee Name</td>
                                        <td>Attendance</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_employess as $employess)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <input type="hidden" name="emp_id[]"
                                            value="{{ $employess->id }}">
                                            <td>{{ $employess->department }}</td>
                                            <td>{{ $employess->title_designation }}</td>
                                            <td>
                                                <input type="hidden" name="employee_attendance_date"
                                                    value="{{ $employee_attendance_date }}">
                                                <input type="hidden" name="department"
                                                value="{{ $employess->department }}">
                                                <input type="hidden" name="job_designation"
                                                value="{{ $employess->title_designation }}">
                                                <input type="hidden" name="emp_name[]"
                                                    value="{{ $employess->first_name }}{{ $employess->last_name }}">
                                                    <h6>{{ $employess->first_name }}&nbsp{{ $employess->last_name }}</h6>
                                            </td>
                                            {{-- radio button work --}}

                                            <td>
                                                <!-- Rest of the code -->

                                                @php
                                                    $attendanceValue = $employees_attendance_data[$employess->id] ?? 'Present';
                                                @endphp
                                                <input type="radio" id="Present_{{ $employess->id }}"
                                                    name="attendance[{{ $employess->id }}]" value="Present"
                                                    {{ $attendanceValue === 'Present' ? 'checked' : '' }}>
                                                <label for="Present_{{ $employess->id }}">Present</label><br>
                                                <input type="radio" id="Absent_{{ $employess->id }}"
                                                    name="attendance[{{ $employess->id }}]" value="Absent"
                                                    {{ $attendanceValue === 'Absent' ? 'checked' : '' }}>
                                                <label for="Absent_{{ $employess->id }}">Absent</label><br>
                                                <input type="radio" id="Leave_{{ $employess->id }}"
                                                    name="attendance[{{ $employess->id }}]" value="Leave"
                                                    {{ $attendanceValue === 'Leave' ? 'checked' : '' }}>
                                                <label for="Leave_{{ $employess->id }}">Leave</label>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                                <div class="col-12 form-group mg-t-8 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
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