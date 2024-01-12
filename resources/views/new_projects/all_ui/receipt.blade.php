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
                            <h3>Student Receipt</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                           <strong>Receipt No</strong> : 1
                        </div>
                        <div class="col-4">
                            <strong>Date</strong> :10/09/2023
                        </div>
                        <div class="col-4">
                           <strong>GR no </strong> : 191
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-4">
                            <strong>Name</strong>
                        </div>
                        <div class="col-4">
                            Edward David Potter
                        </div>
                    </div>
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>Sr no.
                                </th>
                                <th>Particulars
                                </th>
                                <th>Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Computer fees</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Term fee</td>
                                <td>600</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>language Proficiency Class</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tution fees</td>
                                <td>1380</td>
                            </tr>
                            
                            <tr>
                                <td>5</td>
                                <td>Payment By</td>
                                <td>Total Amount</td>
                                <td>Rs. 2440</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Fees Paid Amount</td>
                                <td>1200</td>
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
