@include('institute_admin_panel.dashboard.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('institute_admin_panel.dashboard.include.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center"> "{{ @session('campus_name') }}" </h3>
                <ul>
                    <li>
                        <a href="{{ route('institute_Dashboard') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('all-attendance') }}">Attendance Details</a>
                    </li>
                </ul>
            </div>
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('attendance-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('attendance-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="heading-layout1">
                        <div class="item-title text-center w-100">
                            <h3>Employee Attendance</h3>
                        </div>
                    </div>

                    <form class="new-added-form " action="{{ route('store-add-attendance') }}" method="POST">
                        @csrf
                        <div class="row d-flex align-items-center">

                            <div class="col-xl-6 col-lg-4 col-12 form-group mt-4 mb-4">
                                <label>Attendance Date *</label>
                                <input type="date" name="date" id="date" required
                                    class="form-control" value="{{ date('Y-m-d') }}"/>
                            </div>
                        </div>
                    
                    <div class="table-responsive">
                         <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Department</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>ID</th>
                                    <th>Is Present</th>
                                    <th>Is Absent</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_employees as $all_employee)
                                <tr>
                                    <td>{{ $all_employee->department }}</td>
                                    <td>{{ $all_employee->first_name }}</td>
                                    <td>{{ $all_employee->last_name }}</td>
                                    <input type="hidden" name="emp_id" value="{{ $all_employee->id  }}">
                                    <td>{{ $all_employee->id  }}</td>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" name="status" class="form-check-input" value="present" checked/>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" name="status" class="form-check-input" value="absent" />
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="col-12 form-group mg-t-8 text-center">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark btn-lg">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
