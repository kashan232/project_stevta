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
                        <h4> Attendance Record</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
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
                                                <th>#</th>
                                                <th>Admission No</th>
                                                <th>Roll Number</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Attendance</th>
                                            </thead>
                                            <tbody>
                                                @if(count($attendance_records) < 1) <div class="alert alert-danger">
                                                    <strong>Sorry!</strong> No Attendance Found.
                                    </div>
                                    @else
                                    @foreach ($attendance_records as $attendance_record)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $attendance_record->admission_no}}</td>
                                        <td>{{ $attendance_record->student_roll_number}}</td>
                                        <td>{{ $attendance_record->student_name}}</td>
                                        <td>{{ $attendance_record->student_attendance_date}}</td>
                                        <td>
                                            @if ($attendance_record->student_attendance == 'Present')
                                            <button class="btn btn-success">{{ $attendance_record->student_attendance }}</button>
                                            @elseif ($attendance_record->student_attendance == 'Absent')
                                            <button class="btn btn-danger">{{ $attendance_record->student_attendance }}</button>
                                            @elseif ($attendance_record->student_attendance == 'Leave')
                                            <button class="btn btn-warning">{{ $attendance_record->student_attendance }}</button>
                                            @endif
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