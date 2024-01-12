@include('new_projects.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title  mt-5 mb-5 text-center w-100">
                            <h3>Time Table</h3>
                        </div>
                    </div>
                    <hr style="height:4px; background:#ffae01" />
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>English</td>
                                    <td>12:00 to 12:45</td>
                                    <td>12:00 to 12:45</td>
                                    <td>1:00 to 1:45</td>
                                    <td>1:00 to 1:45</td>
                                    <td>1:30 to 2:15</td>
                                    <td>1:30 to 2:15</td>
                                </tr>
                                <tr>
                                    <td>Urdu</td>
                                    <td>12:00 to 12:45</td>
                                    <td>12:00 to 12:45</td>
                                    <td>1:00 to 1:45</td>
                                    <td>1:00 to 1:45</td>
                                    <td>1:30 to 2:15</td>
                                    <td>1:30 to 2:15</td>
                                </tr>
                                <tr>
                                    <td>Science</td>
                                    <td>12:00 to 12:45</td>
                                    <td>12:00 to 12:45</td>
                                    <td>1:00 to 1:45</td>
                                    <td>1:00 to 1:45</td>
                                    <td>1:30 to 2:15</td>
                                    <td>1:30 to 2:15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-12 d-flex justify-content-center align-content-center">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Finish
                            </button>
                        </div>
                    </div>
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
