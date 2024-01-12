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
                        <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                        <ul>
                            <li>
                                <a href="{{ route('campus-single-operation') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('CampusHrOperations') }}">HR Screen</a>
                            </li>
                            <li>
                                <a href="{{ route('choose-month') }}">Choose Month</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row  d-flex justify-content-end">

                        <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <a href="{{ route('add-attendance') }}">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Add Attendance
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> --}}
                            <div class="heading-layout1">
                                <div class="item-title text-center w-100">
                                    <h3>Attendance Record</h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>ID</th>
                                            <th>Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendance_details as $attendance_detail)
                                            <tr>
                                                <td>{{ $attendance_detail->date }}</td>
                                                <td>{{ $attendance_detail->emp_id }}</td>
                                                <td>{{ $attendance_detail->status }}</td>
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
