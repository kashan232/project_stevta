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
                        <div class="item-title">
                            <h3>Student Payments</h3>
                        </div>
                    </div>
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>ID
                                </th>
                                <th>Student
                                </th>
                                <th>Title
                                </th>
                                <th>Total</th>
                                <th>paid</th>
                                <th>status</th>
                                <th>Date</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Edward</td>
                                <td>Exam fees</td>
                                <td>500</td>
                                <td>0</td>
                                <td><button class="btn btn-danger" style="font-size: 15px">Unpaid</button></td>
                                <td>23/08/2023</td>
                                <td><button class="btn btn-primary" style="font-size: 15px">Action</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Thomas</td>
                                <td>Exam fees</td>
                                <td>500</td>
                                <td>0</td>
                                <td><button class="btn btn-success" style="font-size: 15px">paid</button></td>
                                <td>27/08/2023</td>
                                <td><button class="btn btn-primary" style="font-size: 15px">Action</button></td>
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
