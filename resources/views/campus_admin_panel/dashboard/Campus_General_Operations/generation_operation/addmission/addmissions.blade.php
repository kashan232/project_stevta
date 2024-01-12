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
                        <h4>All  Students</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Students</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Students</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3">
                        <li class="nav-item"><a href="#list-view" data-toggle="tab"
                                class="nav-link btn-primary mr-1 show active">List View</a></li>
                        <li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid
                                View</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Students </h4>
                                    <a href="{{ route('add-Student') }}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Student Image</th>
                                                    <th>Student Name</th>
                                                    <th>GR No:</th>
                                                    <th>Class</th>
                                                    <th>Section</th>
                                                    <th>Batch</th>
                                                    <th>House</th>
                                                    <th>Enrollment</th>
                                                    <th>Addmission Slip</th>
                                                    <th>More</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($student_lists as $student_list)
                                                    <tr>
                                                        <td scope="row">{{ $loop->iteration }}</td>
                                                        <td>
                                                            <img class="rounded-circle" width="35"
                                                                src="/campus/general_operations/student_image/{{ $student_list->student_img }}"
                                                                alt="student_img">
                                                        </td>
                                                        <td>{{ $student_list->first_name }}</td>
                                                        <td>{{ $student_list->gr }}</td>
                                                        <td>{{ $student_list->class_name }}</td>
                                                        <td>{{ $student_list->section_name }}</td>
                                                        <td>{{ $student_list->batch }}</td>
                                                        <td>{{ $student_list->Address }}</td>
                                                        <td>{{ $student_list->enrollment_date }}</td>
                                                        <td>
                                                            <a
                                                                href="{{ route('admission-slip', ['id' => $student_list->id]) }}">
                                                                <button class="btn btn-success"
                                                                    style="font-size: 15px">Slip </button>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('change-class', ['id' => $student_list->id]) }}"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="la la-pencil"></i></a>
                                                            <a href="{{ route('edit-student', ['id' => $student_list->id]) }}"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="la la-trash-o"></i></a>
                                                            <a href="{{ route('view-student', ['id' => $student_list->id]) }}"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="la la-trash-o"></i></a>
                                                            <a href="{{ route('delete-student', ['id' => $student_list->id]) }}"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="la la-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="grid-view" class="tab-pane fade col-lg-12">
                            <div class="row">
                                @foreach ($student_lists as $student_list)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card card-profile">
                                        <div class="card-header justify-content-end pb-0">
                                            <div class="dropdown">
                                                <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                    <span class="dropdown-dots fs--1"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0">
                                                    <div class="py-2">
                                                        <a class="dropdown-item" href="{{ route('change-class', ['id' => $student_list->id]) }}">Change Class</a>
                                                        <a class="dropdown-item text-danger" href="{{ route('edit-student', ['id' => $student_list->id]) }}">Edit</a>
                                                        <a class="dropdown-item text-danger" href="{{ route('delete-student', ['id' => $student_list->id]) }}">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="text-center">
                                                <div class="profile-photo">
                                                    <img src="new_template/images/profile/small/pic2.jpg" width="100"
                                                        class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <h3 class="mt-4 mb-1">{{ $student_list->first_name }}</h3>
                                                <p class="text-muted">{{ $student_list->batch }}</p>
                                                <ul class="list-group mb-3 list-group-flush">
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span class="mb-0">Gender :</span><strong>{{ $student_list->first_name }}</strong>
                                                    </li>
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span class="mb-0">Phone No. :</span><strong>{{ $student_list->contact }}</strong>
                                                    </li>
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span
                                                            class="mb-0">Email:</span><strong>{{ $student_list->student_email }}</strong>
                                                    </li>
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span class="mb-0">Address:</span><strong>{{ $student_list->Address }}</strong>
                                                    </li>
                                                </ul>
                                                <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                                    href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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


</body>

</html>
