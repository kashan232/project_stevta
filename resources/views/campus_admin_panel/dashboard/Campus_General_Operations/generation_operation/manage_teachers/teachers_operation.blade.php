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
                        <h4> Subject Teachers </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Subject Teachers</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Subject Teacher</a></li>
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
                                    <a href="{{ route('add-SubjectTeacher') }}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach ($get_subject_teachers as $get_subject_teacher)
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2 class="card-title">Teacher: <span class="font-weight-bold">{{ $get_subject_teacher->teacher_name }}</span></h2>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item d-flex px-0 justify-content-between">
                                                            <strong>Class</strong>
                                                            <span class="mb-0">{{ $get_subject_teacher->class_name }}</span>
                                                        </li>
                                                        <li class="list-group-item d-flex px-0 justify-content-between">
                                                            <strong>Section</strong>
                                                            <span class="mb-0">{{ $get_subject_teacher->section_name }}</span>
                                                        </li>
                                                        <li class="list-group-item d-flex px-0 justify-content-between">
                                                            <strong>Subjects</strong>
                                                            <span class="mb-0">
                                                                @php
                                                                    $subjectsArray = explode(' ', $get_subject_teacher->subjects);
                                                                    foreach ($subjectsArray as $subject) {
                                                                        echo '<span style="font-weight:bolder;">' . $subject . ' </span>';
                                                                    }
                                                                @endphp
                                                            </span>
                                                        </li>
                                                        
                                                    </ul>
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
