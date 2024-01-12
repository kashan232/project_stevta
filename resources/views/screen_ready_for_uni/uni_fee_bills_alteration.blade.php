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
                    <div class="container-fluid">
                        <h1 class="mt-4">Fee Bills Alteration</h1>
                        <form>
                            <div class="form-group">
                                <label for="feeBillNumber">Fee Bill Number:</label>
                                <input type="text" id="feeBillNumber" name="feeBillNumber" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="extendValidity">Extend Validity (Days):</label>
                                <input type="number" id="extendValidity" name="extendValidity" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="alterAmount">Alter Amount:</label>
                                <input type="number" id="alterAmount" name="alterAmount" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Fee Head Alteration:</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="addFeeHead" name="addFeeHead" class="form-control">
                                    <label class="form-check-label" for="addFeeHead">Add Fee Head</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="removeFeeHead" name="removeFeeHead" class="form-control">
                                    <label class="form-check-label" for="removeFeeHead">Remove Fee Head</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Alter Fee Bill</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
