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
                                    <h3>Create Fixed Asset</h3>
                                </div>
                            </div>
                            <form id="fixed-asset-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="assetName">Asset Name:</label>
                                            <input type="text" id="assetName" name="assetName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="form-group">
                                            <label for="assetType">Asset Type:</label>
                                            <select id="assetType" name="assetType" class="form-control" required>
                                                <option value="Land">Land</option>
                                                <option value="Building">Building</option>
                                                <option value="Equipment">Equipment</option>
                                                <option value="Furniture/Fixture">Furniture/Fixture</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" onclick="createFixedAsset()">Create Fixed Asset</button>
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
                                        <h3>List of Fixed Assets</h3>
                                    </div>
                                </div>
                                <table class="table display  text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Asset Name</th>
                                            <th>Asset Type</th>
                                        </tr>
                                    </thead>
                                    <tbody id="fixed-assets-list">
                                        <!-- Fixed Assets will be listed here using JavaScript -->
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
    const fixedAssetForm = document.getElementById('fixed-asset-form');
        const fixedAssetsList = document.getElementById('fixed-assets-list');

        function createFixedAsset() {
            const assetName = document.getElementById('assetName').value;
            const assetType = document.getElementById('assetType').value;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${assetName}</td>
                <td>${assetType}</td>
            `;

            fixedAssetsList.appendChild(row);
            fixedAssetForm.reset();
        }
</script>