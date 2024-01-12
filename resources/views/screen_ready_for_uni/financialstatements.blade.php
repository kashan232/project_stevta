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
                                    <h3>Input Financial Data</h3>
                                </div>
                            </div>
                            <form id="financial-data-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="accountName">Account Name:</label>
                                            <input type="text" id="accountName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="debitAmount">Debit Amount:</label>
                                            <input type="number" id="debitAmount" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="creditAmount">Credit Amount:</label>
                                            <input type="number" id="creditAmount" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" onclick="addFinancialData()">Add Data</button>
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
                                        <h3>Data</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Account Name</th>
                                            <th>Debit Balance</th>
                                            <th>Credit Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody id="trial-balance-list">
                                        <!-- Trial Balance entries will be listed here using JavaScript -->
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
    const financialDataForm = document.getElementById('financial-data-form');
        const trialBalanceList = document.getElementById('trial-balance-list');

        function addFinancialData() {
            const accountName = document.getElementById('accountName').value;
            const debitAmount = parseFloat(document.getElementById('debitAmount').value) || 0;
            const creditAmount = parseFloat(document.getElementById('creditAmount').value) || 0;

            // Calculate and add entries to the Trial Balance
            const debitBalance = debitAmount - creditAmount;
            const creditBalance = creditAmount - debitAmount;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${accountName}</td>
                <td>${debitBalance.toFixed(2)}</td>
                <td>${creditBalance.toFixed(2)}</td>
            `;

            trialBalanceList.appendChild(row);
            financialDataForm.reset();
        }
</script>