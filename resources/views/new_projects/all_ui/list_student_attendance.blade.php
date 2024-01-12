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
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Student Attendance Record</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Roll Number</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td>1</td>
                                        <td>345</td>
                                        <td>Ali</td>
                                        <td>17/09/2023</td>
                                        <td>
                                                <button class="btn btn-success"style="font-size: 15px">Present</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>346</td>
                                        <td>Umer</td>
                                        <td>17/09/2023</td>
                                        <td>
                                                <button class="btn btn-danger" style="font-size: 15px">Absent</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>347</td>
                                        <td>KAshan</td>
                                        <td>17/09/2023</td>
                                        <td>
                                                <button class="btn btn-warning" style="font-size: 15px">leave</button>
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

