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
                        <h4 class="font-weight-bold">Select Attendance Details</h4>
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
                            @if (session('attendance_save'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Congratulations!</strong> {{ session('attendance_save') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (count($attendanceData) > 0)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Attendance Already Submitted You Can Edit Record.!</strong>
                                </div>
                            @endif
                            <div class="heading-layout1">
                                <div class="item-title text-center w-100 mt-5 mb-5">
                                    <h3>Generate Attendance</h3>
                                    <br>
                                    <h6>Course "{{ $class_name }}" And Department "{{ $section_name }}" And
                                        Date:&nbsp;"{{ $attendance_date }}"</h6>
                                </div>
                            </div>
                            <form action="{{ route('store-student-attendance') }}" method="POST">
                                @csrf
                                <table id="example3" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example3_info">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <td>Admission No</td>
                                            <td>Roll Number</td>
                                            <td>Name</td>
                                            <td>Attendance</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_students as $all_student)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $all_student->id }}
                                                    <input type="hidden" name="student_id[]"
                                                        value="{{ $all_student->id }}">
                                                </td>
                                                <td>{{ $all_student->gr }}</td>
                                                <td>
                                                    <input type="hidden" name="student_roll_number[]"
                                                        value="{{ $all_student->gr }}">
                                                    <input type="hidden" name="class_name"
                                                        value="{{ $class_name }}">
                                                    <input type="hidden" name="section_name"
                                                        value="{{ $section_name }}">
                                                    <input type="hidden" name="attendance_date"
                                                        value="{{ $attendance_date }}">
                                                    <input type="hidden" name="student_name[]"
                                                        value="{{ $all_student->first_name }}{{ $all_student->last_name }}">
                                                    <h6>{{ $all_student->first_name }}{{ $all_student->last_name }}
                                                    </h6>
                                                </td>
                                                <td>
                                                    <!-- Rest of the code -->

                                                    @php
                                                        $attendanceValue = $attendanceData[$all_student->id] ?? 'Present';
                                                    @endphp
                                                    <input type="radio" id="Present_{{ $all_student->id }}"
                                                        name="attendance[{{ $all_student->id }}]" value="Present"
                                                        {{ $attendanceValue === 'Present' ? 'checked' : '' }}>
                                                    <label for="Present_{{ $all_student->id }}">Present</label><br>
                                                    <input type="radio" id="Absent_{{ $all_student->id }}"
                                                        name="attendance[{{ $all_student->id }}]" value="Absent"
                                                        {{ $attendanceValue === 'Absent' ? 'checked' : '' }}>
                                                    <label for="Absent_{{ $all_student->id }}">Absent</label><br>
                                                    <input type="radio" id="Leave_{{ $all_student->id }}"
                                                        name="attendance[{{ $all_student->id }}]" value="Leave"
                                                        {{ $attendanceValue === 'Leave' ? 'checked' : '' }}>
                                                    <label for="Leave_{{ $all_student->id }}">Leave</label>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-12 mt-4 mb-5 d-flex justify-content-center align-content-center">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg">
                                            Mark Attendance
                                        </button>
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


</body>

</html>
