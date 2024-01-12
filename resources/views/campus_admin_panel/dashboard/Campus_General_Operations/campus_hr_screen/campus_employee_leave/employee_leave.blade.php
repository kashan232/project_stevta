@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        
                    </div>
                    <div class="row  d-flex justify-content-end">

                        <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <a href="{{ route('add-employee-leave') }}">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Add New
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('delete-message-employee'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Congratulations!</strong> {{ session('delete-message-employee') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>All Employees Leaves</h3>
                                </div>
                            </div>
                            <form class="mg-b-20">
                                <div class="row d-flex justify-content-end gutters-8">
                                    <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="Search by..." class="form-control" />
                                    </div>

                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Employee Name</th>
                                            <th>Leave Title</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Remaining Leaves</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_employees_leaves as $all_employees_leave)
                                            <tr>
                                                <td>{{ $all_employees_leave->emp_id }}</td>
                                                <td>{{ $all_employees_leave->emp_name }}</td>
                                                <td>{{ $all_employees_leave->title }}</td>
                                                <td>{{ $all_employees_leave->start_date }}</td>
                                                <td>{{ $all_employees_leave->end_date }}</td>
                                                @php
                                                    $employeeID = $all_employees_leave->emp_id;
                                                    $remainingLeave = isset($remainingLeave[$employeeID]) ? $remainingLeave[$employeeID] : 0;
                                                @endphp
                                                <td>{{ $remainingLeave }}</td>
                                                <td>
                                                    {{-- <a class="dropdown-item" href="">
                                                        <button type="submit" class="fw-btn-fill btn btn-warning">
                                                            Edit
                                                        </button>
                                                    </a> --}}
                                                    <a class="dropdown-item"
                                                        href="{{ route('delete-employee-leave', ['delete' => $all_employees_leave->id]) }}">
                                                        <button type="submit" class="fw-btn-fill btn btn-danger">
                                                            Delete
                                                        </button>
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
            <!-- Page Area End Here -->
        </div>
        @include('campus_admin_panel.dashboard.include.footer')
