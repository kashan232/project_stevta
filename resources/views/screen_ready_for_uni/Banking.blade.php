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
                                    <h3>Open Bank Account</h3>
                                </div>
                            </div>
                            <form id="bank-account-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="accountName">Account Name:</label>
                                            <input type="text" id="accountName" name="accountName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="accountNumber">Account Number:</label>
                                            <input type="text" id="accountNumber" name="accountNumber" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="accountType">Account Type:</label>
                                            <select id="accountType" name="accountType" class="form-control" required>
                                                <option value="Savings">Savings</option>
                                                <option value="Checking">Checking</option>
                                                <option value="Business">Business</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="initialBalance">Initial Balance:</label>
                                            <input type="number" id="initialBalance" name="initialBalance" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="currency">Currency:</label>
                                            <input type="text" id="currency" name="currency" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="branch">Branch:</label>
                                            <input type="text" id="branch" name="branch" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" onclick="openBankAccount()">Open Bank Account</button>
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
                                        <h3>List of Accounts</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                            <th>Account Type</th>
                                            <th>Initial Balance</th>
                                            <th>Currency</th>
                                            <th>Branch</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bank-accounts-list">
                                        <!-- Bank Accounts will be listed here using JavaScript -->
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
    const bankAccountForm = document.getElementById('bank-account-form');
        const bankAccountsList = document.getElementById('bank-accounts-list');

        function openBankAccount() {
            const accountName = document.getElementById('accountName').value;
            const accountNumber = document.getElementById('accountNumber').value;
            const accountType = document.getElementById('accountType').value;
            const initialBalance = document.getElementById('initialBalance').value;
            const currency = document.getElementById('currency').value;
            const branch = document.getElementById('branch').value;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${accountName}</td>
                <td>${accountNumber}</td>
                <td>${accountType}</td>
                <td>${initialBalance}</td>
                <td>${currency}</td>
                <td>${branch}</td>
            `;

            bankAccountsList.appendChild(row);
            bankAccountForm.reset();
        }
</script>