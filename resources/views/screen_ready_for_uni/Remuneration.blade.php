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
                <div class="col-lg-5 col-xl-5 col-md-5 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title w-100 text-center mt-2 mb-2">
                                    <h3>Disburse Remuneration & TA/DA</h3>
                                </div>
                            </div>
                            <form id="bank-account-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="employeeName">Employee Name:</label>
                                            <input type="text" id="employeeName" name="employeeName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="amount">Amount:</label>
                                            <input type="number" id="amount" name="amount" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="paymentMethod">Payment Method:</label>
                                            <select id="paymentMethod" name="paymentMethod" class="form-control" required>
                                                <option value="Cash">Cash</option>
                                                <option value="Bank Transfer">Bank Transfer</option>
                                                <option value="Check">Check</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="transactionReference">Transaction Reference:</label>
                                            <input type="text" id="transactionReference" name="transactionReference" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="type">Type:</label>
                                            <select id="type" name="type" class="form-control" required>
                                                <option value="Remuneration">Remuneration</option>
                                                <option value="TA/DA">TA/DA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select id="status" name="status" class="form-control" required>
                                                <option value="Approved">Approved</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Rejected">Rejected</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" onclick="disburseRemuneration()">Disburse Remuneration & TA/DA</button>
                            </form>
                           
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>

                <div class="col-lg-7 col-xl-7 col-md-7 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>List of Disbursements</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Employee Name</th>
                                            <th>Amount</th>
                                            <th>Payment Method</th>
                                            <th>Transaction Reference</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="disbursements-list">
                                        <!-- Disbursements will be listed here using JavaScript -->
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

<script>
    const remunerationForm = document.getElementById('remuneration-form');
        const disbursementsList = document.getElementById('disbursements-list');

        function disburseRemuneration() {
            const employeeName = document.getElementById('employeeName').value;
            const amount = document.getElementById('amount').value;
            const paymentMethod = document.getElementById('paymentMethod').value;
            const transactionReference = document.getElementById('transactionReference').value;
            const type = document.getElementById('type').value;
            const status = document.getElementById('status').value;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${employeeName}</td>
                <td>${amount}</td>
                <td>${paymentMethod}</td>
                <td>${transactionReference}</td>
                <td>${type}</td>
                <td>${status}</td>
            `;

            disbursementsList.appendChild(row);
            remunerationForm.reset();
        }
</script>