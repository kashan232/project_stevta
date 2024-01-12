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
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('department-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('department-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title mt-5 mb-5">
                            <h3>Add New Holiday</h3>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{ route('store-add-holiday') }}" method="POST">
                        @csrf
                        <div class="row d-flex align-items-center">

                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Title*</label>
                                <input type="text" name="holiday_title" id="holiday_title" required
                                    class="form-control" />
                            </div>
                             <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Start Date *</label>
                                <input type="date" name="holiday_start_date" id="holiday_start_date" required
                                    class="form-control" />
                            </div>
                             <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>End Date*</label>
                                <input type="date" name="holiday_end_date" id="holiday_end_date" required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                <label>Description*</label>
                                <textarea class="form-control" name="holiday_description" id="exampleFormControlTextarea1" rows="10"></textarea>
                            </div>
                            <br>
                            <div class="col-12 form-group mg-t-8 text-center">
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

@include('campus_admin_panel.dashboard.include.footer')


