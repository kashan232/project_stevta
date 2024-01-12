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
                        <h1 class="mt-4">Manage Exam Results</h1>
                        <form>
                            <div class="form-group">
                                <label for="studentName">Student Name:</label>
                                <input type="text" id="studentName" name="studentName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="studentID">Student ID:</label>
                                <input type="text" id="studentID" name="studentID" class="form-control" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="courseCode">Course Code:</label>
                                    <input type="text" id="courseCode" name="courseCode" class="form-control"
                                        required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="examType">Exam Type:</label>
                                    <select id="examType" name="examType" class="form-control" required>
                                        <option value="Midterm">Midterm</option>
                                        <option value="Finals">Finals</option>
                                        <!-- Add more exam types as needed -->
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="examScore">Exam Score:</label>
                                <input type="number" id="examScore" name="examScore" class="form-control" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="marksObtained">Marks Obtained:</label>
                                    <input type="number" id="marksObtained" name="marksObtained" class="form-control"
                                        required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="totalMarks">Total Marks:</label>
                                    <input type="number" id="totalMarks" name="totalMarks" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="examDate">Exam Date:</label>
                                <input type="date" id="examDate" name="examDate" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="resultStatus">Result Status:</label>
                                <select id="resultStatus" name="resultStatus" class="form-control" required>
                                    <option value="Pass">Pass</option>
                                    <option value="Fail">Fail</option>
                                    <!-- Add more result statuses as needed -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Enter Result</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>
        @include('screen_ready_for_uni.include.footer')
