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
                        <h4> All Employees</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Employees</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Employees</a></li>
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
                                    <a href="{{ route('add-employees') }}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input checkAll" />
                                                            <label class="form-check-label">ID</label>
                                                        </div>
                                                    </th>
                                                    <th>Designation</th>
                                                    <th>Name</th>
                                                    <th>Department</th>
                                                    <th>BPS</th>
                                                    <th>Letter No</th>
                                                    <th>CNIC</th>
                                                    <th>Joining Date</th>
                                                    <th>More</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($all_employees as $all_employee)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" />
                                                            <label class="form-check-label">{{ $loop->iteration }}</label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $all_employee->title_designation }}</td>
                                                    <td>{{ $all_employee->first_name }}</td>
                                                    <td>{{ $all_employee->department }}</td>
                                                    <td>{{ $all_employee->bps }}</td>
                                                    <td>{{ $all_employee->appointment_letter_no }}</td>
                                                    <td>{{ $all_employee->nic }}</td>
                                                    <td>{{ $all_employee->hire_date }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="{{ route('delete-employee', ['delete' => $all_employee->id]) }}"><i class="fas fa-times text-orange-red"></i>Delete</a>

                                                                <a class="dropdown-item" href="{{ route('edit-employee', ['id' => $all_employee->id]) }}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                            </div>
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