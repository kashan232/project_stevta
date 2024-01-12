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
                        <a href="{{ route('all-department') }}">Department List</a>
                    </li>
                </ul>
            </div>
            <div class="card height-auto">
                <div class="card-body">

                    @if(session('update-success-message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('update-success-message') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Edit Department</h3>
                        </div>

                    </div>

                    <form class="new-added-form" action="{{ route('update-department',['id'=> $department_details->id ]) }}" method="POST">
                        @csrf
                        <div class="row d-flex align-items-center">

                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                <label>Department Name*</label>
                                <input type="text" name="dept_name" id="dept_name" required placeholder="Enter name"
                                    class="form-control" value="{{ $department_details->dept_name }}" />
                            </div>
                           <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
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
