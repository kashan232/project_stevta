@include('screen_ready_for_uni.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
@include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>   
            <div class="container-fluid">
            <div class="dashboard-content-one">
            
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>General Ledger Report</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Account</th>
                                            <th>Description</th>
                                            <th>Debit</th>
                                            <th>Credit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-11-01</td>
                                            <td>Account 101</td>
                                            <td>Opening Balance</td>
                                            <td>1000.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-03</td>
                                            <td>Account 201</td>
                                            <td>Sale of Product A</td>
                                            <td>0.00</td>
                                            <td>500.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-05</td>
                                            <td>Account 102</td>
                                            <td>Purchase of Equipment</td>
                                            <td>800.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-10</td>
                                            <td>Account 301</td>
                                            <td>Salary Payment</td>
                                            <td>0.00</td>
                                            <td>700.00</td>
                                        </tr>
                                    </tbody>
                
                                </table>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>

                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>Cashbook Report</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Transaction Type</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-11-01</td>
                                            <td>Cash In</td>
                                            <td>1000.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-03</td>
                                            <td>Cash Out</td>
                                            <td>300.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-05</td>
                                            <td>Cash In</td>
                                            <td>700.00</td>
                                        </tr>
                                    </tbody>
                
                                </table>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>Budget Utilization Report Statement of Expenditure</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Department/Cost Center</th>
                                            <th>Account</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-11-01</td>
                                            <td>Department A</td>
                                            <td>Account 101</td>
                                            <td>Purchase of Supplies</td>
                                            <td>500.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-03</td>
                                            <td>Department B</td>
                                            <td>Account 201</td>
                                            <td>Salary Payment</td>
                                            <td>700.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-05</td>
                                            <td>Department A</td>
                                            <td>Account 102</td>
                                            <td>Purchase of Equipment</td>
                                            <td>800.00</td>
                                        </tr>
                                    </tbody>
                
                                </table>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>Salary Expenditure Report</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Employee Name</th>
                                            <th>Department/Cost Center</th>
                                            <th>Salary Component</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-11-01</td>
                                            <td>Employee A</td>
                                            <td>Department A</td>
                                            <td>Basic Salary</td>
                                            <td>1000.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-03</td>
                                            <td>Employee B</td>
                                            <td>Department B</td>
                                            <td>Overtime Pay</td>
                                            <td>300.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-05</td>
                                            <td>Employee C</td>
                                            <td>Department A</td>
                                            <td>Bonuses</td>
                                            <td>200.00</td>
                                        </tr>
                                    </tbody>
                
                                </table>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>Non-Salary Expenditure Report</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Department/Cost Center</th>
                                            <th>Expense Category</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-11-01</td>
                                            <td>Department A</td>
                                            <td>Office Supplies</td>
                                            <td>Purchase of office stationery</td>
                                            <td>200.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-03</td>
                                            <td>Department B</td>
                                            <td>Utilities</td>
                                            <td>Electricity bill payment</td>
                                            <td>300.00</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-05</td>
                                            <td>Department A</td>
                                            <td>Travel Expenses</td>
                                            <td>Employee business travel</td>
                                            <td>500.00</td>
                                        </tr>
                                    </tbody>
                
                                </table>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>Demand Register Report</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Employee Name</th>
                                            <th>Amount</th>
                                            <th>Account</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-11-01</td>
                                            <td>Employee A</td>
                                            <td>500.00</td>
                                            <td>Account 101</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-03</td>
                                            <td>Employee B</td>
                                            <td>300.00</td>
                                            <td>Account 201</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-05</td>
                                            <td>Employee C</td>
                                            <td>700.00</td>
                                            <td>Account 102</td>
                                        </tr>
                                    </tbody>
                
                                </table>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>TA Register Report</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Employee Name</th>
                                            <th>Amount</th>
                                            <th>Expense Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-11-01</td>
                                            <td>Employee X</td>
                                            <td>300.00</td>
                                            <td>Travel</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-03</td>
                                            <td>Employee Y</td>
                                            <td>200.00</td>
                                            <td>Travel</td>
                                        </tr>
                                        <tr>
                                            <td>2023-11-05</td>
                                            <td>Employee Z</td>
                                            <td>400.00</td>
                                            <td>Travel</td>
                                        </tr>
                                    </tbody>
                
                                </table>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>
               
                
                

            </div>
            
        </div>
                
       
    </div>
    <!-- Page Area End Here -->
</div>

@include('screen_ready_for_uni.include.footer')
