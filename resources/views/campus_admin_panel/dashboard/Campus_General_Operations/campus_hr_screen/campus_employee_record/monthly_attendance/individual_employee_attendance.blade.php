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
                        <h4> Single Employee Attendance Record</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                </div>
            </div>
            <div class="row mt-4 ">
                <button class="btn btn-primary ml-3" style="font-size: 15px">
                    Total Days in month : {{ $total_month_days }}
                </button>
                <button class="btn btn-success ml-3" style="font-size: 15px">
                    Total Present : {{ $present_count }}
                </button>
                <button class="btn btn-danger ml-3" style="font-size: 15px">
                    Total Absent : {{ $absent_count }}
                </button>
                <button class="btn btn-warning ml-3" style="font-size: 15px">
                    Total Leave : {{ $leave_count }}
                </button>
                <button class="btn btn-dark ml-3" id="downloadpdf" style="font-size: 15px">
                    Generate PDF
                </button>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($employee_data as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->department }}</td>
                                                    <td>{{ $data->job_designation }}</td>
                                                    <td>
                                                        {{ $data->emp_name }}
                                                    </td>
                                                    <td id="date">{{ $data->employee_attendance_date }}</td>
                                                    <td id="attendance_type">
                                                        @if ($data->employee_attendance == 'Present')
                                                        <button class="btn btn-success">{{ $data->employee_attendance }}</button>
                                                        @elseif ($data->employee_attendance == 'Absent')
                                                        <button class="btn btn-danger">{{ $data->employee_attendance }}</button>
                                                        @elseif ($data->employee_attendance == 'Leave')
                                                        <button class="btn btn-warning">{{ $data->employee_attendance }}</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
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