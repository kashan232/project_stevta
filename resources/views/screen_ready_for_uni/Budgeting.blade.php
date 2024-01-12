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
                                    <h3>Create Budget</h3>
                                </div>
                            </div>
                            <form id="budget-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="category">Category:</label>
                                            <input type="text" id="category" name="category" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="allocatedBudget">Allocated Budget (USD):</label>
                                            <input type="number" id="allocatedBudget" name="allocatedBudget" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="utilizedBudget">Utilized Budget (USD):</label>
                                            <input type="number" id="utilizedBudget" name="utilizedBudget" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" onclick="createBudget()">Create Budget</button>
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
                                        <h3>Budget Utilization Reports</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Allocated Budget</th>
                                            <th>Utilized Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody id="budget-reports-list">
                                        <!-- Budget Utilization Reports will be listed here using JavaScript -->
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
   const budgetForm = document.getElementById('budget-form');
        const budgetReportsList = document.getElementById('budget-reports-list');

        function createBudget() {
            const category = document.getElementById('category').value;
            const allocatedBudget = parseFloat(document.getElementById('allocatedBudget').value);
            const utilizedBudget = parseFloat(document.getElementById('utilizedBudget').value);

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${category}</td>
                <td>$${allocatedBudget}</td>
                <td>$${utilizedBudget}</td>
            `;

            budgetReportsList.appendChild(row);
            budgetForm.reset();
        }
</script>