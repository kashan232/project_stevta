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
                        <h4>All Formers</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                                    <th>More</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($former as $student_list)
                                                    <tr>
                                                        <td scope="row">{{ $loop->iteration }}</td>
                                                        <td>
                                                            <img class="rounded-circle" width="35" src="/campus/general_operations/student_image/{{ $student_list->student_img }}" alt="">
                                                        </td>
                                                        <td>{{ $student_list->first_name }}</td>
                                                        <td>{{ $student_list->gr }}</td>
                                                        <td>{{ $student_list->class_name }}</td>
                                                        <td>{{ $student_list->section_name }}</td>
                                                        <td>{{ $student_list->session_year }}</td>
                                                        <td>{{ $student_list->Address }}</td>
                                                        <td>{{ $student_list->enrollment_date }}</td>
                                                        <td>
                                                            <a href="{{ route('viewdeleted-student', ['id' => $student_list->id]) }}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                            <a href="{{ route('restore-student', ['id' => $student_list->id]) }}"    class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
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


</body>

</html>


