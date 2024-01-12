@include('screen_ready_for_uni.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-center">Apply Annual Increment</h2>
                            </div>
                            <div class="card-body">
                                <form id="increment-form">
                                    <div class="form-group">
                                        <label for="incrementDate">Increment Date:</label>
                                        <input type="date" id="incrementDate" name="incrementDate" class="form-control" required>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="incrementAmount">Increment Amount:</label>
                                        <input type="number" id="incrementAmount" name="incrementAmount" class="form-control" required>
                                    </div>
        
                                    <div class="form-group form-check">
                                        <input type="checkbox" id="freezeIncrement" name="freezeIncrement" class="form-check-input">
                                        <label for="freezeIncrement" class="form-check-label">Freeze Increment for Study Leave Employees</label>
                                    </div>
        
                                    <div class="form-group form-check">
                                        <input type="checkbox" id="allowMultipleIncrements" name="allowMultipleIncrements" class="form-check-input">
                                        <label for="allowMultipleIncrements" class="form-check-label">Allow Multiple Increments</label>
                                    </div>
        
                                    <button type="button" class="btn btn-primary btn-block btn-lg" onclick="applyAnnualIncrement()">Apply Increment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="container mt-5">
                <h2 class="text-center">Previous Annual Increments</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Increment Date</th>
                            <th>Increment Amount</th>
                            <th>Frozen for Study Leave</th>
                            <th>Allow Multiple Increments</th>
                        </tr>
                    </thead>
                    <tbody id="increment-list">
                        <!-- Previous annual increments will be listed here using JavaScript -->
                    </tbody>
                </table>
            </div>
        
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
        <script>
            const incrementForm = document.getElementById('increment-form');
            const incrementList = document.getElementById('increment-list');
    
            function applyAnnualIncrement() {
                const incrementDate = document.getElementById('incrementDate').value;
                const incrementAmount = document.getElementById('incrementAmount').value;
                const freezeIncrement = document.getElementById('freezeIncrement').checked;
                const allowMultipleIncrements = document.getElementById('allowMultipleIncrements').checked;
    
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${incrementDate}</td>
                    <td>${incrementAmount}</td>
                    <td>${freezeIncrement ? 'Yes' : 'No'}</td>
                    <td>${allowMultipleIncrements ? 'Yes' : 'No'}</td>
                `;
    
                incrementList.appendChild(row);
                incrementForm.reset();
            }
        </script>
