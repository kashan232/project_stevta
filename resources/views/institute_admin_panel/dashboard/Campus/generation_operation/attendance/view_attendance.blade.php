@include('institute_admin_panel.dashboard.include.header')
<style>

</style>
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
                <!-- <h3 class="text-center">""</h3> -->
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul> 
                    <li>  
                        <a href="#">Home</a>
                    </li>
                    <li>General operations</li>
                </ul> 
            </div>  
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="container payroll-heading">
                <div class="row">
                    @foreach($classes as $class)
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('fetch-attendance-institute',['class_name'=> $class->class_name ]) }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/class-01.png" alt="">
                                </div>
                                <h5>{{ $class->class_name }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
