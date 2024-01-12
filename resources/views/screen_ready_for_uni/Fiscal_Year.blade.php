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
                                    <h3>Fiscal Year Management</h3>
                                </div>
                            </div>
                            <form id="fiscal-year-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="yearName">Fiscal Year Name:</label>
                                            <input type="text" id="yearName" name="yearName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="startDate">Start Date:</label>
                                            <input type="date" id="startDate" name="startDate" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="endDate">End Date:</label>
                                            <input type="date" id="endDate" name="endDate" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select id="status" name="status" class="form-control" required>
                                                <option value="Open">Open</option>
                                                <option value="Closed">Closed</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" onclick="createFiscalYear()">Create Fiscal Year</button>
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
                                        <h3>List of Fiscal Years</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Fiscal Year Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="fiscal-year-list">
                                        <!-- Fiscal Years will be listed here using JavaScript -->
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
    const fiscalYearForm = document.getElementById('fiscal-year-form');
    const fiscalYearList = document.getElementById('fiscal-year-list');

    function createFiscalYear() {
        const yearName = document.getElementById('yearName').value;
        const startDate = document.getElementById('startDate').value;
        const endDate = document.getElementById('endDate').value;
        const status = document.getElementById('status').value;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${yearName}</td>
            <td>${startDate}</td>
            <td>${endDate}</td>
            <td>${status}</td>
        `;

        fiscalYearList.appendChild(row);
        fiscalYearForm.reset();
    }
</script>