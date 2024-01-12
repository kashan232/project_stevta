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
                    <div class="container">
                        <h1 class="mt-5 mb-4 text-center">Parents Teacher Meeting (PTM) Application</h1>
                        <!-- PTM Scheduling Section -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Schedule a PTM
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="teacher">Teacher's Name</label>
                                        <input type="text" class="form-control" id="teacher" placeholder="Enter teacher's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="program">Academic Program</label>
                                        <select class="form-control" id="program">
                                            <option value="program1">Program 1</option>
                                            <option value="program2">Program 2</option>
                                            <!-- Add more programs here -->
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="student">Student's Name</label>
                                        <input type="text" class="form-control" id="student" placeholder="Enter student's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="parent">Parent's Name</label>
                                        <input type="text" class="form-control" id="parent" placeholder="Enter parent's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                    <button type="submit"
                                            class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            Schedule PTM
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- PTM Minutes Section -->
                        <div class="card">
                            <div class="card-header">
                                PTM Minutes
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="minutesTeacher">Teacher's Name</label>
                                        <input type="text" class="form-control" id="minutesTeacher" placeholder="Enter teacher's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="program">Academic Program</label>
                                        <select class="form-control" id="program">
                                            <option value="program1">Program 1</option>
                                            <option value="program2">Program 2</option>
                                            <!-- Add more programs here -->
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="minutesStudent">Student's Name</label>
                                        <input type="text" class="form-control" id="minutesStudent" placeholder="Enter student's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="minutesParent">Parent's Name</label>
                                        <input type="text" class="form-control" id="minutesParent" placeholder="Enter parent's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="meetingMinutes">Meeting Minutes</label>
                                        <textarea class="form-control" id="meetingMinutes" rows="4" placeholder="Enter PTM minutes"></textarea>
                                    </div>
                                    {{-- <button type="submit" class="btn btn-primary btn-lg">Submit PTM Minutes</button> --}}
                                    <button type="submit"
                                            class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            Submit PTM Minutes
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>
        @include('screen_ready_for_uni.include.footer')