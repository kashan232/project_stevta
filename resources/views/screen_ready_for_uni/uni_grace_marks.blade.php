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
                        <h1 class="mt-4">Manage Grace Marks</h1>
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
                            <label for="graceMarks">Grace Marks:</label>
                            <input type="number" id="graceMarks" name="graceMarks" class="form-control" required>
                        </div>
                
                        <div class="form-group">
                            <label for="reason">Reason for Grace Marks:</label>
                            <textarea id="reason" name="reason" class="form-control" rows="3" required></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary btn-lg">Add Grace Marks</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
