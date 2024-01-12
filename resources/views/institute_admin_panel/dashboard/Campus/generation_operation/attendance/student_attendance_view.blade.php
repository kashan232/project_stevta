<style>
    .attendance-button {
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }

    .present {
        background-color: green;
        color: white;
    }

    .absent {
        background-color: red;
        color: white;
    }

    .leave {
        background-color: yellow;
        color: black;
    }

    #leftone {
        margin-left: 500px;
    }

    .label {
        font-size: 12px;
        margin-left: 2px;
        margin-right: 2px;
        margin-top: 4px;
    }
</style>



@include('institute_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('institute_admin_panel.dashboard.include.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                {{-- <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Classes</li>
                </ul> --}}
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- filter  -->

            <!-- Add the filters above the table -->
            <div class="filters">
                <div class="row">
                    <!-- <div class="col ml-0"> -->
                    <label class="label">Start Date: </label>
                    <input type="date" id="datepicker-start" placeholder="Start Date" class="form-control col-md-2">
                    <!-- </div> -->
                    <!-- <div class="col ml-0"> -->
                    <label class="label">End Date: </label>
                    <input type="date" id="datepicker-end" placeholder="End Date" class="form-control col-md-2">
                    <!-- </div> -->
                    <!-- <div class="col"> -->
                    <label class="label">Attendance Type: </label>
                    <select id="attendance-type" class="form-control col-md-2">
                        <option value="">All</option>
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                        <option value="Leave">Leave</option>
                    </select>
                    <!-- </div> -->

                    <!-- <div class="col"> -->
                    <button id="apply-filters" class="btn btn-warning ml-3 mr-3 mb-3">Filter</button>
                    <!-- pdf export button  -->
                    <!-- <button class="btn btn-primary ml-3 mr-3 mb-3" id="export-pdf">Export PDF</button> -->
                    <!-- try new  -->
                    <button class="btn btn-primary ml-3 mr-3 mb-3" id="export-pdf"
                        data-route="{{ route('export.pdf') }}">Export PDF</button>

                    <!-- try new end  -->

                    <!-- </div> -->
                </div>
            </div>
            <!-- filter end  -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h2>All Record Attendance</h2>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Attendance Date</th>
                                    <th>Student Name</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($studentAttendance as $studentAttendance)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $studentAttendance->student_attendance_date }}</td>
                                        <!-- <td>{{ $studentAttendance->student_attendance }}</td>
                                    <td>{{ $studentAttendance->student_name }}</td>
                                    <td>
                                        @if ($studentAttendance->student_attendance == 'Present')
                                        <button class="btn btn-success">{{ $studentAttendance->student_attendance }}</button>
                                        @elseif ($studentAttendance->student_attendance == 'Absent')
                                        <button class="btn btn-danger">{{ $studentAttendance->student_attendance }}</button>
                                        @elseif ($studentAttendance->student_attendance == 'Leave')
                                        <button class="btn btn-warning">{{ $studentAttendance->student_attendance }}</button>
                                        @endif
                                     </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
<script>
    $(document).ready(function() {
        $('#apply-filters').click(function() {
            var startDate = $('#datepicker-start').val();
            var endDate = $('#datepicker-end').val();
            var attendanceType = $('#attendance-type').val();

            // Apply the filters to the table rows
            $('.data-table tbody tr').each(function() {
                var date = $(this).find('td:nth-child(2)').text();
                var type = $(this).find('td:nth-child(4) button').text();

                if ((startDate === '' || date >= startDate) && (endDate === '' || date <=
                        endDate) &&
                    (attendanceType === '' || type === attendanceType)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        $('#export-pdf').click(function() {
            var startDate = $('#datepicker-start').val();
            var endDate = $('#datepicker-end').val();
            var attendanceType = $('#attendance-type').val();
            // var pdfUrl = '{{ route('export.pdf') }}?start_date=' + startDate + '&end_date=' + endDate + '&attendance_type=' + attendanceType;
            // Construct the URL with filter parameters
            var pdfUrl = $(this).data('route'); // Retrieve the route URL from the data attribute

            // Construct the URL with filter parameters
            if (attendanceType === 'All' && startDate === '' && endDate === '') {
                // Export all records without date range or attendance type filter
                pdfUrl += '';
            } else if (attendanceType === 'All') {
                // Export all records with date range
                pdfUrl += '?start_date=' + startDate + '&end_date=' + endDate;
            } else {
                // Export filtered records
                pdfUrl += '?start_date=' + startDate + '&end_date=' + endDate + '&attendance_type=' +
                    attendanceType;
            }
            // Open the URL in a new window or tab
            window.open(pdfUrl, '_blank');
        });

    });
</script>
