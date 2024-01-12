@include('campus_admin_panel.dashboard.include.header')
<style>
    /* ... Your existing styles ... */
    .progress {
        background-color: yellow;
        color: black;
        width: 200px;
        height: 20px !important;
        /* Increased height */
        border-radius: 20%;
        position: relative;
        /* Added position property */
    }

    .progress-bar {
        height: 100%;
        /* border-radius: 20%; */
        position: absolute;
        top: 0;
        left: 0;
        background-color: green;
        /* Set progress bar color */
    }

    .percentage-label {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 16px;
        /* Adjust font size as needed */
        font-weight: bold;
        color: #000;
        /* Set font color to white */
    }
</style>
<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.navbar')
    <!--**********************************
            Nav header end
        ***********************************-->
    <!--**********************************
            Header start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.topbar')
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.sidebar')
    <!--**********************************
            Sidebar end
        ***********************************-->
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
				    
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4> Attendance Of Per Class</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Attendance</a></li>
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Admission No</th>
                                                    <th>Roll Number</th>
                                                    <th>Name</th>
                                                    <th>Percentage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($fetch_students_by_class as $fetch_students_by_class)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $fetch_students_by_class->id }}</td>
                                                        <td>
                                                            <a href="{{ route('studentattendanceview', ['id' => $fetch_students_by_class->gr]) }}" class="text-primary">{{ $fetch_students_by_class->gr }}</a>
                                                        </td>
                                                        <td>{{ $fetch_students_by_class->first_name }}</td>
                                                        <td>
                                                            <div class="progress" id="deto">
                                                                <div class="progress-bar"
                                                                    style="width: {{ $fetch_students_by_class->attendancePercentage }}%;">
                                                                </div>
                                                                <span
                                                                    class="percentage-label">{{ $fetch_students_by_class->attendancePercentage }}%</span>
        
                                                                @if ($fetch_students_by_class->attendancePercentage >= 75)
                                                                    <span
                                                                        class="attendance-percentage good">{{ $fetch_students_by_class->attendancePercentage }}%</span>
                                                                @elseif ($fetch_students_by_class->attendancePercentage >= 50)
                                                                    <span
                                                                        class="attendance-percentage average">{{ $fetch_students_by_class->attendancePercentage }}%</span>
                                                                @else
                                                                    <!-- i comment this line to hide mini value of percentage  -->
                                                                    <!-- <span class="attendance-percentage poor">{{ $fetch_students_by_class->attendancePercentage }}%</span> -->
                                                                @endif
                                                            </div>
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
                </div>
            </div>
            
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->
    <!--**********************************
            Footer start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.poweredby')
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
@include('campus_admin_panel.dashboard.include.footer')

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
</body>

</html>
