@include('screen_ready_for_uni.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="text-center">Block/Unblock Salary</h2>
                                    </div>
                                    <div class="card-body">
                                        <form id="block-salary-form">
                                            <div class="form-group">
                                                <label for="employeeId">Employee ID:</label>
                                                <input type="text" id="employeeId" name="employeeId" class="form-control" required>
                                            </div>
                
                                            
                
                                            <div class="form-group">
                                                <label for="reason">Reason:</label>
                                                <input type="text" id="reason" name="reason" class="form-control">
                                            </div>
                
                                            <div class="form-group">
                                                <label for="effectiveDate">Effective Date:</label>
                                                <input type="date" id="effectiveDate" name="effectiveDate" class="form-control">
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" id="blockSalary" name="blockSalary" class="form-check-input">
                                                <label for="blockSalary" class="form-check-label">Block Salary</label>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-block btn-lg" onclick="updateSalaryStatus()">Update Salary Status</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="alert alert-success alert-dismissible fade show" id="statusAlert" style="display: none;">
                                    <strong>Status:</strong> <span id="alertText"></span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="container mt-4">
                        <h4 class="text-center">Blocked/Unblocked Salaries</h4>
                        <ul class="list-group" id="salaryList">
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
        <script>
            const blockSalaryForm = document.getElementById('block-salary-form');
            const salaryList = document.getElementById('salaryList');
            const statusAlert = document.getElementById('statusAlert');
            const alertText = document.getElementById('alertText');
    
            function updateSalaryStatus() {
                const employeeId = document.getElementById('employeeId').value;
                const blockSalary = document.getElementById('blockSalary').checked;
                const reason = document.getElementById('reason').value;
                const effectiveDate = document.getElementById('effectiveDate').value;
    
                // You can update your backend database or take the required action here
                const status = blockSalary ? 'Blocked' : 'Unblocked';
    
                // Display an alert with the updated status
                alertText.textContent = `Salary for Employee ID: ${employeeId} has been ${status} (${reason}). Effective Date: ${effectiveDate}`;
                statusAlert.style.display = 'block';
    
                // Add the employee to the list
                const listItem = document.createElement('li');
                listItem.className = `list-group-item ${blockSalary ? 'list-group-item-danger' : 'list-group-item-success'}`;
                listItem.textContent = `Employee ID: ${employeeId} - ${status} (${reason}) - Effective Date: ${effectiveDate}`;
                salaryList.appendChild(listItem);
    
                blockSalaryForm.reset();
            }
        </script>
