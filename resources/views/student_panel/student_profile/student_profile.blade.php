@include('student_panel.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center"> "{{ $pagename }}" </h3>
            </div>
            <div class="card height-auto">
                <div class="card-body">
                    <div class="profile_main">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="left">
                                    <div class="student_img">
                                        @if ($student_data->student_img)
                                            <img src="/campus/general_operations/student_image/{{ $student_data->student_img }}"
                                                alt="" class="img-fluid">
                                        @else
                                            <img src="/campus/general_operations/student_image/dummy.jpg" alt=""
                                                class="img-fluid">
                                        @endif
                                        <span>{{ $student_data->first_name }}</span>
                                    </div>
                                    <hr>

                                    <div class="class_detail">
                                        <ul>
                                            <li>Student ID: <span>{{ $student_data->gr }}</span> </li>
                                            <li>Class: <span>{{ $student_data->class_name }}</span></li>
                                            <li>Section: <span>{{ $student_data->section_name }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-home-tab"
                                                            data-toggle="pill" href="#pills-home" role="tab"
                                                            aria-controls="pills-home" aria-selected="true">General
                                                            Information</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                                            href="#pills-profile" role="tab"
                                                            aria-controls="pills-profile" aria-selected="false">Personal
                                                            Information</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                                            href="#pills-contact" role="tab"
                                                            aria-controls="pills-contact"
                                                            aria-selected="false">Contact</a>
                                                    </li>

                                                </ul>


                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-home"
                                                        role="tabpanel" aria-labelledby="pills-home-tab">

                                                        <div class=" pt-4">
                                                            <table class="table table-bordered table-hover rounded text-dark">
                                                                <tbody>

                                                                    <tr>
                                                                        <th>First Name</th>
                                                                        <td>{{ $student_data->first_name }}</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th>Last Name</th>
                                                                        <td>{{ $student_data->last_name }}</td>

                                                                    </tr>

                                                                    <tr>
                                                                        <th>Father Name</th>
                                                                        <td>{{ $student_data->father_name }}</td>

                                                                    </tr>

                                                                    <tr>
                                                                        <th>Surname</th>
                                                                        <td>{{ $student_data->surname }}</td>

                                                                    </tr>


                                                                    <tr>
                                                                        <th>Gender</th>
                                                                        <td>{{ $student_data->gender }}</td>

                                                                    </tr>


                                                                    <tr>
                                                                        <th>Religion</th>
                                                                        <td>{{ $student_data->religion }}</td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                        aria-labelledby="pills-profile-tab">
                                                        <div class=" pt-4">
                                                            <table class="table table-bordered table-hover rounded text-dark">
                                                                <tbody>



                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <td>{{ $student_data->student_email }}</td>

                                                                    </tr>

                                                                    <tr>
                                                                        <th>Password</th>
                                                                        <td>{{ $student_data->password }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Date of Birth</th>
                                                                        <td>{{ $student_data->birth_date }}</td>

                                                                    </tr>



                                                                    <tr>
                                                                        <th>Enrollment Date</th>
                                                                        <td>{{ $student_data->enrollment_date }}</td>

                                                                    </tr>


                                                                    <tr>
                                                                        <th>Scholarship Percentage</th>
                                                                        <td>{{ $student_data->scholarship_percentage }}
                                                                        </td>

                                                                    </tr>

                                                                    <tr>
                                                                        <th>Last School</th>
                                                                        <td>{{ $student_data->last_school }}</td>

                                                                    </tr>


                                                                    <tr>
                                                                        <th>Result Status</th>
                                                                        <td>{{ $student_data->result_status }}</td>

                                                                    </tr>


                                                                    <tr>
                                                                        <th>Next Session Status</th>
                                                                        <td>{{ $student_data->next_session_status }}
                                                                        </td>

                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                        aria-labelledby="pills-contact-tab">

                                                        <div class=" pt-4">
                                                            <table class="table table-bordered table-hover rounded text-dark">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Contact </th>
                                                                        <td>{{ $student_data->contact }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Address</th>
                                                                        <td>{{ $student_data->Address }}</td>

                                                                    </tr>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('student_panel.include.footer')
