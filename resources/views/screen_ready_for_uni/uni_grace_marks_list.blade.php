@include('screen_ready_for_uni.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="heading-layout1 ">
                                <div>
                                    <h2>Grace Marks List</h2>
                                </div>
                            </div>
                            <form class="mg-b-20">
                                <div class="row d-flex justify-content-end gutters-8">
                                    <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="Search by..." class="form-control" />
                                    </div>

                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="button" class="btn btn-warning text-white mt-2 mb-3"
                                            style="font-size: 18px">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Student ID</th>
                                            <th>Course Code</th>
                                            <th>Grace Marks</th>
                                            <th>Reason for Grace Marks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2201</td>
                                            <td>ENG101</td>
                                            <td>85</td>
                                            <td>Brilliant Performance in class</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2202</td>
                                            <td>ENG202</td>
                                            <td>90</td>
                                            <td>Brilliant Performance in class</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>2203</td>
                                            <td>CS301</td>
                                            <td>95</td>
                                            <td>Brilliant Performance in class</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>2204</td>
                                            <td>Cs625</td>
                                            <td>92</td>
                                            <td>Brilliant Performance in class</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>2205</td>
                                            <td>MTH101</td>
                                            <td>83</td>
                                            <td>Brilliant Performance in class</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
