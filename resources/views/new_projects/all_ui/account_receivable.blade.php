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
                            <h3>Account Receivable</h3>
                        </div>
                    </div>
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Balance Sheet
                                        <br><span>($000)</span>
                                    </th>
                                    <th>Initial
                                        <br><span>March 31</span>
                                    </th>
                                    <th>After Sales
                                        <br><span>April 30</span>
                                    </th>
                                    <th>After Collection
                                        <br><span>May 31</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Assests</td>
                                </tr>
                                <tr>
                                    <td>Cash</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td>Account Receivable</td>
                                    <td>100</td>
                                    <td>300</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <td>Other current assests</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>Fixed assests</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>other long term assests</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>550</td>
                                    <td>550</td>
                                    <td>550</td>
                                </tr>
                                <tr>
                                    <td>Total Assests</td>
                                    <td>800</td>
                                    <td>1,000</td>
                                    <td>1,000</td>
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
