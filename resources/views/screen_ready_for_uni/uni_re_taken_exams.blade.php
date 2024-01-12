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
                        <h1 class="mt-4">Re-Taken Exams</h1>
                        <form>
                            <div class="form-group">
                                <label for="studentID">Student ID:</label>
                                <input type="text" id="studentID" name="studentID" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="courseCode">Course Code:</label>
                                <input type="text" id="courseCode" name="courseCode" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="examType">Exam Type:</label>
                                <select id="examType" name="examType" class="form-control" required>
                                    <option value="Midterm">Midterm</option>
                                    <option value="Finals">Finals</option>
                                    <!-- Add more exam types as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="examDate">Exam Date:</label>
                                <input type="date" id="examDate" name="examDate" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="examTime">Exam Time:</label>
                                <input type="time" id="examTime" name="examTime" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="examYear">Exam Year which you are Re-taking:</label>
                                <select id="examYear" name="examYear" class="form-control" required>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <!-- Add more years as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" id="location" name="location" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="reason">Reason for Re-Take:</label>
                                <textarea id="reason" name="reason" class="form-control" rows="3" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Apply for Re-Taken Exam</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
