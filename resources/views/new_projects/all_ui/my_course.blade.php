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
                    {{-- @if (session('attendance_save'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('attendance_save') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif --}}


                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Subject Details</h3>
                            <br>
                            <h6>CLass " Matric" &nbsp;&nbsp;&nbsp; Section
                                "B" &nbsp;&nbsp;&nbsp;
                                Subject:&nbsp;"English"</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <td>Course Title</td>
                                    <td>Upload Date</td>
                                    <td>Document</td>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>English</td>
                                        <td>18/09/2023</td>
                                       <td>
                                            <a href="#">
                                                Download here
                                            </a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-5 d-flex justify-content-center align-content-center">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('new_projects.include.poweredby')

    <!-- Page Area End Here -->
</div>
@include('new_projects.include.footer')
