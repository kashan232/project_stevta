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
                        <a href="{{ route('institute-all-attendance') }}">All Attendance</a>
                    </li>
                </ul>
            </div>
            <div class="card height-auto">
                <div class="card-body">
                    {{-- @if(session('attendance-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('attendance-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif --}}
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100">
                            <h3>Choose Month For Attendance</h3>
                        </div>
                    </div>
                    <form class="new-added-form " action="{{ route('institute-store-choose-month') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>From*</label>
                                <input type="date" name="date_from" id="date_from" placeholder="date..."
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>To*</label>
                                <input type="date" name="date_to" id="date" placeholder="date..."
                                    required class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 form-group mg-t-8 text-center">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark btn-lg">
                                Submit
                            </button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
