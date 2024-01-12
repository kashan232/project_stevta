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
                        <h4> All Course</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Course</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Course</a></li>
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                    <a href="{{ route('add-class') }}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Department</th>
                                                    <th>Job Designation</th>
                                                    <th>Employee Name</th>
                                                    <th>Date</th>
                                                    <th>Attendance</th>
                                                    <th>Monthly Record</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                @if (count($attendance_records) < 1)
                                    <div class="alert alert-danger">
                                        <strong>Sorry!</strong> No Attendance Found.
                                    </div>
                                @else
                                    @foreach ($attendance_records as $attendance_record)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $attendance_record->department }}</td>
                                            <td>{{ $attendance_record->job_designation }}</td>
                                            <td>
                                                {{-- <a href="#" data-emp-id="{{ $attendance_record->emp_id }}" class="single_employee">
                                                {{ $attendance_record->emp_name}}
                                            </a> --}}
                                                <a href="#" data-emp-id="{{ $attendance_record->emp_id }}"
                                                    data-department="{{ $attendance_record->department }}"
                                                    data-attendance-date="{{ $attendance_record->employee_attendance_date }}"
                                                    class="single_employee">
                                                    {{ $attendance_record->emp_name }}
                                                </a>
                                            </td>
                                            <td>{{ $attendance_record->employee_attendance_date }}</td>
                                            <td>
                                                @if ($attendance_record->employee_attendance == 'Present')
                                                    <button
                                                        class="btn btn-success">{{ $attendance_record->employee_attendance }}</button>
                                                @elseif ($attendance_record->employee_attendance == 'Absent')
                                                    <button
                                                        class="btn btn-danger">{{ $attendance_record->employee_attendance }}</button>
                                                @elseif ($attendance_record->employee_attendance == 'Leave')
                                                    <button
                                                        class="btn btn-warning">{{ $attendance_record->employee_attendance }}</button>
                                                @endif
                                            </td>
                                            <td>
                                                {{-- <h1>{{ $leave_count }}</h1> --}}
                                                <a href="{{ route('individual-employee-attendance', ['id' => $attendance_record->emp_id, 'dep' => $attendance_record->department, 'at_date' => $attendance_date, 'total_month_days' => $days_count]) }}"
                                                    class="btn btn-success btn-lg">
                                                    Monthly Record
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
    document.addEventListener('DOMContentLoaded', function() {
        var tableBody = document.getElementById('table-body');
        var emptyRow = document.getElementById('empty-row');

        if (tableBody.rows.length === 0) {
            emptyRow.style.display = 'table-row';
        } else {
            emptyRow.style.display = 'none';
        }
    });
</script>

</body>
</html>