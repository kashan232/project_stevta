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
                                    <h3>Create Voucher</h3>
                                </div>
                            </div>
                            <form id="voucher-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="voucherType">Voucher Type:</label>
                                            <select id="voucherType" name="voucherType" class="form-control" required>
                                                <option value="Journal Voucher">Journal Voucher</option>
                                                <option value="Payment Voucher">Payment Voucher</option>
                                                <option value="Other Voucher Type">Other Voucher Type</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="voucherDate">Voucher Date:</label>
                                            <input type="date" id="voucherDate" name="voucherDate" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="payee">Payee:</label>
                                            <input type="text" id="payee" name="payee" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="voucherEntry">Voucher Entry:</label>
                                            <textarea id="voucherEntry" name="voucherEntry" class="form-control" rows="4" required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" onclick="createVoucher()">Create Voucher</button>
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
                                        <h3>List of Vouchers</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Voucher Type</th>
                                            <th>Voucher Date</th>
                                            <th>Payee</th>
                                            <th>Voucher Entry</th>
                                        </tr>
                                    </thead>
                                    <tbody id="voucher-list">
                                        <!-- Vouchers will be listed here using JavaScript -->
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
    const voucherForm = document.getElementById('voucher-form');
        const voucherList = document.getElementById('voucher-list');

        function createVoucher() {
            const voucherType = document.getElementById('voucherType').value;
            const voucherDate = document.getElementById('voucherDate').value;
            const payee = document.getElementById('payee').value;
            const voucherEntry = document.getElementById('voucherEntry').value;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${voucherType}</td>
                <td>${voucherDate}</td>
                <td>${payee}</td>
                <td>${voucherEntry}</td>
            `;

            voucherList.appendChild(row);
            voucherForm.reset();
        }
</script>