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
                        <h1 class="mt-4">Examination Scheduling</h1>
                        <form>
                            <div class="form-group">
                                <label for="examName">Exam Name:</label>
                                <input type="text" id="examName" name="examName" class="form-control" required>
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
                            <label for="examYear">Exam Year:</label>
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
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="duration">Duration (in hours):</label>
                                <input type="number" id="duration" name="duration" class="form-control" required>
                            </div>
                
                            <div class="form-group col-md-6">
                                <label for="maxMarks">Maximum Marks:</label>
                                <input type="number" id="maxMarks" class="form-control" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="examGroup">Exam Group:</label>
                            <select id="examGroup" name="examGroup" class="form-control" required>
                                <option value="Mids">Mids</option>
                                <option value="Finals">Finals</option>
                                <!-- Add more exam groups as needed -->
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="instructions">Instructions:</label>
                            <textarea id="instructions" name="instructions" class="form-control" required></textarea>
                        </div>
                
                            <button type="submit" class="btn btn-primary btn-lg">Schedule Exam</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
