@include('screen_ready_for_uni.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container mt-5">
                <h1 class="text-center">Advance and Loan Management</h1>
        
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title">Loan Processing</h2>
                                <form id="loan-processing-form">
                                    <div class="form-group">
                                        <label for="employeeName">Employee Name:</label>
                                        <input type="text" id="employeeName" class="form-control" required>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="loanAmount">Loan Amount:</label>
                                        <input type="number" id="loanAmount" class="form-control" required>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="serviceCharge">Service Charge:</label>
                                        <input type="number" id="serviceCharge" class="form-control">
                                    </div>
        
                                    <div class="form-group">
                                        <label for="installments">Number of Installments:</label>
                                        <input type="number" id="installments" class="form-control" required>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="serviceChargeRecovery">Service Charge Recovery:</label>
                                        <select id="serviceChargeRecovery" class="form-control">
                                            <option value="1st Installment">1st Installment</option>
                                            <option value="Last Installment">Last Installment</option>
                                            <option value="All Installments">All Installments</option>
                                        </select>
                                    </div>
        
                                    <button type="button" class="btn btn-primary" onclick="processLoan()">Process Loan</button>
                                </form>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Loan Installments</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Installment Number</th>
                                            <th>Due Date</th>
                                            <th>Installment Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="installments-list">
                                        <!-- Loan Installments will be listed here using JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
        <script>
            const loanProcessingForm = document.getElementById('loan-processing-form');
            const installmentsList = document.getElementById('installments-list');
            const loanData = [];
    
            function processLoan() {
                const employeeName = document.getElementById('employeeName').value;
                const loanAmount = parseFloat(document.getElementById('loanAmount').value) || 0;
                const serviceCharge = parseFloat(document.getElementById('serviceCharge').value) || 0;
                const installments = parseInt(document.getElementById('installments').value) || 0;
                const serviceChargeRecovery = document.getElementById('serviceChargeRecovery').value;
    
                // Calculate installment amounts and due dates
                const installmentAmount = (loanAmount + serviceCharge) / installments;
                const currentDate = new Date();
    
                for (let i = 1; i <= installments; i++) {
                    const dueDate = new Date(currentDate);
                    dueDate.setMonth(currentDate.getMonth() + i);
    
                    loanData.push({
                        installmentNumber: i,
                        dueDate: dueDate.toISOString().slice(0, 10),
                        amount: installmentAmount.toFixed(2),
                        action: serviceChargeRecovery,
                    });
                }
    
                // Display installment schedule
                displayInstallmentSchedule();
    
                // Reset the form
                loanProcessingForm.reset();
            }
    
            function displayInstallmentSchedule() {
                installmentsList.innerHTML = '';
    
                for (const installment of loanData) {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${installment.installmentNumber}</td>
                        <td>${installment.dueDate}</td>
                        <td>${installment.amount}</td>
                        <td>${installment.action}</td>
                    `;
    
                    installmentsList.appendChild(row);
                }
            }
        </script>
