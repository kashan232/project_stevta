@include('new_projects.include.header')


<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="profile_main">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="left">
                                    <div class="student_img">

                                        <img src="/campus/general_operations/student_image/b.jpg" alt=""
                                            class="img-fluid">
                                        <span>Kashan</span>
                                    </div>
                                    <hr>

                                    <div class="class_detail">
                                        <ul>
                                            <li>Student ID: 22200344 </span> </li>
                                            <li>Class: Matric<span></span></li>
                                            <li>Section: B<span></span></li>
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
                                                            <table class="table table-bordered table-hover rounded">
                                                                <tbody>


                                                                    <tr>
                                                                        <th>First Name</th>
                                                                        <td>Kashan</td>

                                                                    </tr>

                                                                    <tr>
                                                                        <th>Father Name</th>
                                                                        <td>ather</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th>Surname</th>
                                                                        <td>Shaikh</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th>Gender</th>
                                                                        <td>MAle</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Religion</th>
                                                                        <td>Islam</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                        aria-labelledby="pills-profile-tab">
                                                        <div class=" pt-4">
                                                            <table class="table table-bordered table-hover rounded">
                                                                <tbody>



                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <td></td>

                                                                    </tr>

                                                                    <tr>
                                                                        <th>Password</th>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Date of Birth</th>
                                                                        <td></td>

                                                                    </tr>



                                                                    <tr>
                                                                        <th>Enrollment Date</th>
                                                                        <td></td>

                                                                    </tr>


                                                                    <tr>
                                                                        <th>Scholarship Percentage</th>
                                                                        <td>
                                                                        </td>

                                                                    </tr>

                                                                    <tr>
                                                                        <th>Last School</th>
                                                                        <td></td>

                                                                    </tr>


                                                                    <tr>
                                                                        <th>Result Status</th>
                                                                        <td></td>

                                                                    </tr>


                                                                    <tr>
                                                                        <th>Next Session Status</th>
                                                                        <td>
                                                                        </td>

                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                        aria-labelledby="pills-contact-tab">

                                                        <div class=" pt-4">
                                                            <table class="table table-bordered table-hover rounded">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Contact </th>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Address</th>
                                                                        <td></td>

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
@include('new_projects.include.poweredby')

</div>

@include('student_panel.include.footer')
