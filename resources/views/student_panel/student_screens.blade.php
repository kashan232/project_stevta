@include('student_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{$pagename}}"</h3>
            </div>
            <div class="container payroll-heading">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-profile') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/update-profile.png" alt="student-screens-img">
                                </div>
                                <h5>Student Profile</h5>
                            </div>
                        </a> 
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('my-courses') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/courses.png" alt="student-screens-img">
                                </div>
                                <h5>My Courses</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('classes-schedule') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/class-schedule.png" alt="student-screens-img">
                                </div>
                                <h5>Class Schedule</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-result') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/result.png" alt="student-screens-img">
                                </div>
                                <h5>Result</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-exams') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/exams.png" alt="student-screens-img">
                                </div>
                                <h5>Exams</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('singl-student-attendance') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/attendance.png" alt="student-screens-img">
                                </div>
                                <h5>Attendance</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-library') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/library.png" alt="student-screens-img">
                                </div>
                                <h5>Library</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                        <!-- {{ route('stu-fees') }} -->
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/fees.png" alt="student-screens-img">
                                </div>
                                <h5>Fees</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('subject-page') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/assignment.png" alt="student-screens-img">
                                </div>
                                <h5>Assignments</h5>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/lms.png" alt="student-screens-img">
                                </div>
                                <h5>LMS</h5>
                            </div>
                        </a>
                    </div> --}}
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('stu-room') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/book-room.png" alt="student-screens-img">
                                </div>
                                <h5>Book Hostel Room</h5>
                            </div>
                        </a>
                    </div> --}}
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('studentnotice-board') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/notice-board.png" alt="student-screens-img">
                                </div>
                                <h5>Notice Board</h5>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('chat-box') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/complaint.png" alt="student-screens-img">
                                </div>
                                <h5>Chat</h5>
                            </div>
                        </a>
                    </div> -->
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('chat-box') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="student/complaint.png" alt="student-screens-img">
                                </div>
                                <h5>Chat</h5>
                            </div>
                        </a>
                    </div>


                </div>


            </div>
            <br>
            {{-- <div class="text-center">
                @include('main_super_admin.dashboard.include.poweredby')

            </div> --}}
        </div>
    </div>
</div>
@include('student_panel.include.footer')
