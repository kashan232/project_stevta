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
                        <h1 class="mt-4">Fee Bills Management</h1>
                        <form>
                            <div class="form-group">
                                <label for="feeAmount">Student Id:</label>
                                <input type="number" id="feeAmount" name="feeAmount" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="feeAmount">Student NAme:</label>
                                <input type="number" id="feeAmount" name="feeAmount" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="feeAmount">Student Semester:</label>
                                <input type="number" id="feeAmount" name="feeAmount" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="feeAmount">Student Department:</label>
                                <input type="number" id="feeAmount" name="feeAmount" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="feeBillType">Fee Bill Type:</label>
                                <select id="feeBillType" name="feeBillType" class="form-control" required>
                                    <option value="Supplementary">Supplementary</option>
                                    <option value="Regular">Regular</option>
                                    <!-- You can add more fee bill types as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="feeAmount">Fee Amount:</label>
                                <input type="number" id="feeAmount" name="feeAmount" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="paymentMethod">Payment Method:</label>
                                <select id="paymentMethod" name="paymentMethod" class="form-control" required>
                                    <option value="Credit Card">Credit Card</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Cash">Cash</option>
                                    <!-- Add more payment methods as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="feeAmount">Student Address:</label>
                                <input type="number" id="feeAmount" name="feeAmount" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="feeAmount">Contact Number:</label>
                                <input type="number" id="feeAmount" name="feeAmount" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
