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
                                                    <th>S.No</th>
                                                    <th>Course Batch</th>
                                                    <th>Course Name</th>
                                                    <th>Department</th>
                                                    <th style="width:20%;">Students</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($all_classes as $class)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $class->batch }}</td>
                                                        <td>{{ $class->class_name }}</td>
                                                        <td>
                                                            <a href="{{ route('sections-view', ['class_id' => $class->id]) }}">
                                                            <button type="button"
                                                                class="btn btn-warning text-white mr-4 mb-3"
                                                                style="font-size: 14px">Department
                                                            </button>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex;justify-content: center;align-content: center;align-self: center;">
                                                                <p
                                                                    style="width:96%;background-color: #d0d0d0 !important;font-weight: bold;padding: 5px 0;">
                                                                    {{ $studentCounts[$class->class_name] }} students</p>
                                                            </div>
                                                            <div style="display: flex;justify-content: space-around;">
                                                                <p
                                                                    style="width:45%;background-color: #d0d0d0 !important;font-size:18px;font-weight: bold;padding: 5px 0;">
                                                                    <span><img src="assets/general_operations/graduated.png"
                                                                            alt=""></span>&nbsp;{{ $genderCounts[$class->class_name]['male'] }}
                                                                </p>
                                                                <p
                                                                    style="width:45%;background-color: #d0d0d0 !important;font-size:18px;font-weight: bold;padding: 5px 0;">
                                                                    <span><img src="assets/general_operations/girl.png"
                                                                            alt=""></span>&nbsp;{{ $genderCounts[$class->class_name]['female'] }}
                                                                </p>
                                                            </div>
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