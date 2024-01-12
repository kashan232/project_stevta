@include('new_projects.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">"Campus Name"</h3>
            </div>
            <div class="container card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Student Result</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                       ID
                                    </th>
                                    <th>Subject Name</th>
                                    <th>Total Marks</th>
                                    <th>Obatined Marks</th>
                                    <th>Percentage</th>
                                    <th>Grade</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Maths</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>60%</td>
                                    <td>B</td>
                                </tr>
                                 <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>urdu</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>60%</td>
                                    <td>B</td>
                                </tr>
                                 <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>english</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>60%</td>
                                    <td>B</td>
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
