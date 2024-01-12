@include('student_panel.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">"Campus Name"</h3>
            </div>
            <div class="container card height-auto">
                <div class="card-body">

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Books</h3>
                        </div>

                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>
                            <!-- <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Name ..." class="form-control" />
                            </div>
                            <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Class ..." class="form-control" />
                            </div> -->
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <h3> Filters</h3>
                    <div class="d-flex  mb-5">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow mr-3">
                            All
                        </button>
                        <div class="dropdown mr-3">
                            <button class=" fw-btn-fill btn  btn-gradient-yellow dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Progmming</a>
                                <a class="dropdown-item" href="#">Indutrial Engineering</a>
                                <a class="dropdown-item" href="#">Graphic Designing</a>
                            </div>
                        </div>
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow mr-3">
                            Avalible
                        </button>
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow mr-3">
                            Reserved
                        </button>

                    </div>

                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead class="">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Book Name</th>
                                    <th>Author</th>
                                    <th>edition</th>
                                    <th>Volume</th>
                                    <th>category</th>
                                    <th>Status</th>
                                    <th>Img</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#B-2</label>
                                        </div>
                                    </td>
                                    <!-- <td class="text-center">
                                        <img src="/main_assets/img/figure/student2.png" alt="student" />
                                    </td> -->
                                    <td>DataStructure</td>
                                    <td>William Norway</td>
                                    <td>4th</td>
                                    <td>3</td>
                                    <td>Programming</td>
                                    <td>Reserved/Avalible</td>
                                    <td>Optional</td>
                                    <td class="btn btn-warning text-white">PDF</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
            </div>
        </div>
    </div>

    <!-- Page Area End Here -->
</div>
@include('student_panel.include.footer')