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
                        <h1 class="mt-4">Eligibility</h1>
                        <form>
                            <div class="form-group">
                                <label for="examYear">Exam Year:</label>
                                <input type="text" id="examYear" name="examYear" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="examGroup">Exam Group:</label>
                                <select id="examGroup" name="examGroup" class="form-control">
                                    <option value="mids">Midterms</option>
                                    <option value="finals">Finals</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="attendancePercentage">Attendance Percentage:</label>
                                <input type="number" id="attendancePercentage" name="attendancePercentage"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="feeStatus">Fee Status:</label>
                                <select id="feeStatus" name="feeStatus" class="form-control">
                                    <option value="paid">Paid</option>
                                    <option value="unpaid">Unpaid</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="libraryDues">Library Dues:</label>
                                <input type="number" id="libraryDues" name="libraryDues" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quizAttemptPercentage">Minimum Quiz Attempt Percentage:</label>
                                <select id="quizAttemptPercentage" name="quizAttemptPercentage" class="form-control">
                                    <option value="0">0%</option>
                                    <option value="25">25%</option>
                                    <option value="50">50%</option>
                                    <option value="75">75%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quizAttemptPercentage">Minimum Assignments Attempt Percentage:</label>
                                <select id="quizAttemptPercentage" name="quizAttemptPercentage" class="form-control">
                                    <option value="0">0%</option>
                                    <option value="25">25%</option>
                                    <option value="50">50%</option>
                                    <option value="75">75%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary btn-lg">Check Eligibility</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
