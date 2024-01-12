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
                                    <h3>Chart of Account</h3>
                                </div>
                            </div>
                            <form id="account-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="accountName">Account Name:</label>
                                            <input type="text" id="accountName" name="accountName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="accountCode">Account Code:</label>
                                            <input type="text" id="accountCode" name="accountCode" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="accountType">Account Type:</label>
                                            <select id="accountType" name="accountType" class="form-control" required>
                                                <option value="Income">Income</option>
                                                <option value="Expense">Expense</option>
                                                <option value="Asset">Asset</option>
                                                <option value="Liability">Liability</option>
                                                <option value="Equity">Equity</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="openingBalance">Opening Balance:</label>
                                            <input type="number" id="openingBalance" name="openingBalance" class="form-control" step="0.01" required>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" onclick="createAccount()">Create Account</button>
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
                                            <th>Account Code</th>
                                            <th>Account Type</th>
                                            <th>Opening Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody id="account-list">
                                        <!-- Accounts will be listed here using JavaScript -->
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
    const accountForm = document.getElementById('account-form');
    const accountList = document.getElementById('account-list');

    function createAccount() {
        const accountName = document.getElementById('accountName').value;
        const accountCode = document.getElementById('accountCode').value;
        const accountType = document.getElementById('accountType').value;
        const openingBalance = document.getElementById('openingBalance').value;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${accountName}</td>
            <td>${accountCode}</td>
            <td>${accountType}</td>
            <td>${openingBalance}</td>
        `;

        accountList.appendChild(row);
        accountForm.reset();
    }
</script>