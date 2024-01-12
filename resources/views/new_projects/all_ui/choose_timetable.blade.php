@include('new_projects.include.header')

<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title w-100 text-center mt-5 mb-5">
                            <h3>Time Table</h3>
                        </div>
                    </div>
                    <form class="new-added-form" id="timetableForm" action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Class</option>
                                    
                                    <option value=""></option>
                                   
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                    <option value="">Section</option>
                                </select>
                            </div>
                        </div>
                        <hr style="height:4px; background:#ffae01" />
                        <div class="row my-4">
                            <div class="col-md-12 mt-4 mb-4 d-flex justify-content-center align-content-center">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('new_projects.include.poweredby')

<!-- Page Area End Here -->
</div>
@include('new_projects.include.footer')