@include('new_projects.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('new_projects.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->

        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <!-- Button trigger modal -->

            <div class="breadcrumbs-area">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    {{-- @if(session('inventory-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('inventory-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif --}}
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Student Discipline Record</h3>
                        </div>

                    </div>
                    <!-- Add new Book Form -->
                    <form class="new-added-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>GR:no*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter GR"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Student Full Name*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Student Full Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Student Last Name*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Student Last Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Last Attendant Course*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Last Attendant Course"
                                    required class="form-control" />
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Leaving Date*</label>
                                <input type="date" name="item_name" id="item_name" placeholder="Enter Leaving Date"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Progress</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter student Progress"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Percentage</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Percentage"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Attendance Percentage</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Attendance Percentage"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                <label>Remarks*</label>
                                <input type="text" name="item_name" id="item_name" placeholder="Enter Student Remarks"
                                    required class="form-control" />
                            </div>
                             <div class="col-12 form-group text-center mg-t-8">
                                <button type="submit" class="btn btn-warning text-center" style="font-size: 20px">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @include('new_projects.include.poweredby')

    <!-- Page Area End Here -->
</div>

@include('new_projects.include.footer')
