@include('new_projects.include.header')
<div id="preloader"></div>
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
                            <h3>Select Details To View Attendance</h3>
                        </div>
                    </div>
                    <form action="" id="student_attendance" method="GET" enctype="multipart/form-data">
                    @csrf
                        <div class="row pt-4 pb-4">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Class</option>
                                   
                                    <option></option>
                                   
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                    <option value="">Section</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                               <input type="date" name="attendance_date" id="attendance_date" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                            <div class="col-12 d-flex justify-content-center  mg-t-8">
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
@include('new_projects.include.poweredby')

</div>
@include('new_projects.include.footer')


