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
                            <h3>Classes Schedule</h3>
                        </div>
                    </div>
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
                                    <td>Maths</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                </tr>
                                <tr>
                                    <td>Physics</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
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
