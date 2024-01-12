@include('screen_ready_for_uni.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one mt-5">
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
                                    <h2>Examination Scheduling List</h2>
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
                                            <th>Exam Date</th>
                                            <th>Exam Time</th>
                                            <th>Exam Year</th>
                                            <th>Location</th>
                                            <th>Duration</th>
                                            <th>Maxi Marks</th>
                                            <th>Exam Group</th>
                                            <th>Instructions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10-10-2021</td>
                                            <td>9:00 AM to 10:00Am</td>
                                            <td>2021</td>
                                            <td>Main Campus</td>
                                            <td>1 hour</td>
                                            <td>40</td>
                                            <td>Mid Term</td>
                                            <td>Do not Cheating in your exam</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>10-10-2021</td>
                                            <td>9:00 AM to 10:00Am</td>
                                            <td>2021</td>
                                            <td>Main Campus</td>
                                            <td>1 hour</td>
                                            <td>40</td>
                                            <td>Mid Term</td>
                                            <td>Do not Cheating in your exam</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>10-10-2021</td>
                                            <td>9:00 AM to 10:00Am</td>
                                            <td>2021</td>
                                            <td>Main Campus</td>
                                            <td>1 hour</td>
                                            <td>40</td>
                                            <td>Mid Term</td>
                                            <td>Do not Cheating in your exam</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>10-10-2022</td>
                                            <td>12:00 AM to 2:00pm</td>
                                            <td>2022</td>
                                            <td>Main Campus</td>
                                            <td>2 hour</td>
                                            <td>60</td>
                                            <td>Final Term</td>
                                            <td>Do not Cheating in your exam</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>5-12-2022</td>
                                            <td>8:00 AM to 9:00Am</td>
                                            <td>2022</td>
                                            <td>Main Campus</td>
                                            <td>1 hour</td>
                                            <td>40</td>
                                            <td>Mid Term</td>
                                            <td>Do not Cheating in your exam</td>
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
