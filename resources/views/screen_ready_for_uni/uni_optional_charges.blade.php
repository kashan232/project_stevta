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
                        <h1 class="text-center mb-4">Optional Charges Management</h1>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h2 class="card-title">Activity Charges</h2>
                                        <form id="activity-form">
                                            <div class="form-group">
                                                <label for="activityName">Activity Name:</label>
                                                <input type="text" id="activityName" name="activityName" class="form-control" required>
                                            </div>
                
                                            <div class="form-group">
                                                <label for="chargeAmount">Charge Amount:</label>
                                                <input type="number" id="chargeAmount" name="chargeAmount" class="form-control" required>
                                            </div>
                
                                            <button type="button" class="btn btn-primary btn-lg" onclick="addActivityCharge()">Add Activity Charge</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h2 class="text-center">Added Activity Charges</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Activity Name</th>
                                            <th>Charge Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="activity-charges-list">
                                        <!-- Activity Charges will be added here using JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h2 class="card-title">Subject-wise Fees</h2>
                                        <form id="subject-form">
                                            <div class="form-group">
                                                <label for="subjectName">Subject Name:</label>
                                                <input type="text" id="subjectName" name="subjectName" class="form-control" required>
                                            </div>
                
                                            <div class="form-group">
                                                <label for="feeAmount">Fee Amount:</label>
                                                <input type="number" id="feeAmount" name="feeAmount" class="form-control" required>
                                            </div>
                
                                            <button type="button" class="btn btn-primary btn-lg" onclick="addSubjectFee()">Add Subject-wise Fee</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h2 class="text-center">Added Subject-wise Fees</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Subject Name</th>
                                            <th>Fee Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="subject-charges-list">
                                        <!-- Subject-wise Fees will be added here using JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h2 class="card-title">Transport Charges</h2>
                                        <form id="transport-form">
                                            <div class="form-group">
                                                <label for="routeName">Route Name:</label>
                                                <input type="text" id="routeName" name="routeName" class="form-control" required>
                                            </div>
                
                                            <div class="form-group">
                                                <label for="chargeAmount">Charge Amount:</label>
                                                <input type="number" id="chargeAmount" name="chargeAmount" class="form-control" required>
                                            </div>
                
                                            <button type="button" class="btn btn-primary btn-lg" onclick="addTransportCharge()">Add Transport Charge</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h2 class="text-center">Added Transport Charges</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Route Name</th>
                                            <th>Charge Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="transport-charges-list">
                                        <!-- Transport Charges will be added here using JavaScript -->
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
            const activityForm = document.getElementById('activity-form');
            const subjectForm = document.getElementById('subject-form');
            const transportForm = document.getElementById('transport-form');
            const activityChargesList = document.getElementById('activity-charges-list');
            const subjectChargesList = document.getElementById('subject-charges-list');
            const transportChargesList = document.getElementById('transport-charges-list');
    
            function addActivityCharge() {
                const activityName = document.getElementById('activityName').value;
                const chargeAmount = document.getElementById('chargeAmount').value;
    
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${activityName}</td>
                    <td>${chargeAmount}</td>
                `;
    
                activityChargesList.appendChild(row);
                activityForm.reset();
            }
    
            function addSubjectFee() {
                const subjectName = document.getElementById('subjectName').value;
                const feeAmount = document.getElementById('feeAmount').value;
    
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${subjectName}</td>
                    <td>${feeAmount}</td>
                `;
    
                subjectChargesList.appendChild(row);
                subjectForm.reset();
            }
    
            function addTransportCharge() {
                const routeName = document.getElementById('routeName').value;
                const chargeAmount = document.getElementById('chargeAmount').value;
    
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${routeName}</td>
                    <td>${chargeAmount}</td>
                `;
    
                transportChargesList.appendChild(row);
                transportForm.reset();
            }
        </script>
