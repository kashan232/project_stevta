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
                    <h1 class="mt-5 mb-4 text-center">Academic Calendar</h1>
                    <div class="container">
                        <!-- Exam/Assessment Schedule -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Exam/Assessment Schedule
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Exam</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mid-Term Exams</td>
                                            <td>December 5, 2023</td>
                                            <td>December 10, 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Final Exams</td>
                                            <td>April 15, 2024</td>
                                            <td>April 30, 2024</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Grading Criteria -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Grading Criteria
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Grade</th>
                                            <th>Range</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>90-100</td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>80-89</td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>70-79</td>
                                        </tr>
                                        <tr>
                                            <td>D</td>
                                            <td>60-69</td>
                                        </tr>
                                        <tr>
                                            <td>F</td>
                                            <td>Below 60</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Teaching/Non-Teaching Days, Holidays, and Events -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Teaching/Non-Teaching Days, Holidays, and Events
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Days</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Teaching Days</td>
                                            <td>Monday to Friday</td>
                                        </tr>
                                        <tr>
                                            <td>Non-Teaching Days</td>
                                            <td>Saturday and Sunday</td>
                                        </tr>
                                        <tr>
                                            <td>Public Holidays</td>
                                            <td>New Year's Day, Independence Day, Labor Day</td>
                                        </tr>
                                        <tr>
                                            <td>Upcoming Event</td>
                                            <td>Annual Sports Day on February 20, 2024</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Government Notifications -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Government Notifications
                            </div>
                            <div class="card-body">
                                <p>Attach government notifications related to the academic year here.</p>
                            </div>
                        </div>
                        <!-- Events and Reminders -->
                        <div class="card">
                            <div class="card-header">
                                Events and Reminders
                            </div>
                            <div class="card-body">
                                <div class="event">
                                    <strong>Orientation Day:</strong> August 30, 2023
                                </div>
                                <div class="event">
                                    <strong>Faculty Meeting:</strong> November 5, 2023
                                </div>
                                <div class="event">
                                    <strong>Parent-Teacher Meeting:</strong> October 15, 2023
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>
        @include('screen_ready_for_uni.include.footer')
