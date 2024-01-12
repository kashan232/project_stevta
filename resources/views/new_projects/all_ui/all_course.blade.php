@include('new_projects.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        Add Course Material
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                        
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>All Course Material</h3>
                        </div>
                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8 my-5">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>File Type</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>Course File</th>
                                    <th>Upload Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="/teacher/pdf-file.png" alt=""></td>
                                        <td>2</td>
                                        <td>B</td>
                                        <td>
                                           English 
                                        </td>
                                        <td>Download Here</td>
                                        <td>17/09/2023</td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="/teacher/pdf-file.png" alt=""></td>
                                        <td>2</td>
                                        <td>B</td>
                                        <td>
                                           English 
                                        </td>
                                        <td>Download Here</td>
                                        <td>17/09/2023</td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="/teacher/pdf-file.png" alt=""></td>
                                        <td>2</td>
                                        <td>B</td>
                                        <td>
                                           English 
                                        </td>
                                        <td>Download Here</td>
                                        <td>17/09/2023</td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('new_projects.include.poweredby')

    <!-- Page Area End Here -->
</div>
@include('new_projects.include.footer')

