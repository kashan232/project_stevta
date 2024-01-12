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
                        <h4> All Leave</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Leave</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Leave</a></li>
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
                                    <a href="{{ route('add-leave') }}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    @if(@session('delete-message-leave'))
                                        <div class="alert alert-success">
                                            <strong>Congratulations! </strong> {{ @session('delete-message-leave') }}
                                        </div>
                                    @endif
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Student Name</th>
                                                    <th>Course</th>
                                                    <th>Department</th>
                                                    <th>Apply Date</th>
                                                    <th>From Date</th>
                                                    <th>To Date</th>
                                                    <th>Leave Reason</th>
                                                    <th>Status</th>
                                                    <th>Confirmation By</th>
                                                    <th>Action</th>
                                                    <th style="width:20%;">Students</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($all_leaves as $all_leave)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{ $all_leave->student_name}}</td>
                                                <td>{{ $all_leave->class_name}}</td>
                                                <td>{{ $all_leave->section_name}}</td>
                                                <td>{{ $all_leave->apply_date}}</td>
                                                <td>{{ $all_leave->from_date}}</td>
                                                <td>{{ $all_leave->to_date}}</td>
                                                <td>{{ $all_leave->leave_reason}}</td>
                                                <td>
                                                    @if ($all_leave->leave_status == 'Approve')
                                                        <button class="btn btn-success">{{ $all_leave->leave_status }}</button>
                                                    @elseif ($all_leave->leave_status == 'Disapprove')
                                                        <button class="btn btn-danger">{{ $all_leave->leave_status }}</button>
                                                    @elseif ($all_leave->leave_status == 'Pending')
                                                        <button class="btn btn-warning">{{ $all_leave->leave_status }}</button>
                                                    @endif
                                                </td>
                                                {{-- <td>{{ $all_leave->leave_status}}</td> --}}
                                                <td>{{ $all_leave->confirmation_by}}</td>
                                                <td>
                                                    <a href="{{ route('edit-leave' ,['id' => $all_leave->id ]) }}">
                                                        <button class="btn btn-success">Edit</button>
                                                    </a>
                                                    <a href="{{ route('delete-leave' ,['id' => $all_leave->id ]) }}">
                                                        <button class="btn btn-danger">Delete</button>
                                                    </a>
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
