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
                            <h3>Invoice</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                           <span><strong>Student Name</strong></span>
                        </div>
                        <div class="col-2">
                            <span>Edward</span>
                        </div>
                        <div class="col-2">
                            
                        </div>
                        <div class="col-2">
                            <span><strong>Course</strong></span>
                        </div>
                        <div class="col-2">
                            <span>Mecahnical engineering</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <span><strong>Admission Number</strong></span>
                         </div>
                         <div class="col-2">
                             <span>345674</span>
                         </div>
                         <div class="col-2">
                             
                         </div>
                         <div class="col-2">
                             <span><strong>Parent</strong></span>
                         </div>
                         <div class="col-2">
                             <span>David Potter</span>
                         </div>
                    </div>
                    <div class="row mt-3 mb-5">
                        <div class="col-2">
                            <span><strong>Finance Fee Challan</strong></span>
                         </div>
                         <div class="col-2">
                             <span>test fee</span>
                         </div>
                         <div class="col-2">
                             
                         </div>
                         <div class="col-2">
                             <span><strong>Due Date</strong></span>
                         </div>
                         <div class="col-2">
                             <span>28/08/2023</span>
                         </div>
                    </div>
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Particulars</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>MAnage fees 1</td>
                                <td>9000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>MAnage fees 2</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>MAnage fees 3</td>
                                <td>9000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>fees</td>
                                <td>3200</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>Tax</strong></td>
                                <td><strong>Amount</strong></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>GST</td>
                                <td>1620</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>DA</td>
                                <td>6787</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong>summary</strong></td>
                                <td><strong>Amount</strong></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Total Fees</td>
                                <td>51323</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Total Tax</td>
                                <td>8047</td>
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
