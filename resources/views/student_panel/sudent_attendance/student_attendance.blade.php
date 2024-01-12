@include('student_panel.include.header')
<style>
    .bg-light {
        background-color: #eee !important;
    }
    .calendar_weekdays td
    {
        background: #f3f3f3;
        font-weight: bold;
        text-align: center;
    }
    .calendar_days tr
    {
        width: 100%;
        height: 80px;
    }
</style>
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">"Student Attendance"</h3>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h2><span class="d-none" id="prev_next_month"></span><span id="get_month"></span> <span
                                        id="get_year"></span></h2>
                                <input type="hidden" id="student_id" value="{{ @session('student_id') }}">
                                <div class="d-flex justify-content-center mt-3 mb-3">
                                    <div><i class=""></i>
                                        <button class="btn btn-white btn-lg" id="prev_month"><i
                                                class="fas fa-chevron-left"></i></button>&nbsp;
                                    </div>
                                    <div>
                                        <button class="btn btn-white btn-lg" id="next_month"><i
                                                class="fas fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered text-center">
                                @csrf
                                <thead>
                                    <tr class="calendar_weekdays">
                                        <td>SUN</td>
                                        <td>MON</td>
                                        <td>TUE</td>
                                        <td>WED</td>
                                        <td>THU</td>
                                        <td>FRI</td>
                                        <td>SAT</td>
                                    </tr>
                                </thead>
                                <tbody class="calendar_days">
                                    <tr class="tr1"></tr>
                                    <tr class="tr2"></tr>
                                    <tr class="tr3"></tr>
                                    <tr class="tr4"></tr>
                                    <tr class="tr5"></tr>
                                    <tr class="tr6"></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('student_panel.include.footer')
<script>
    $(document).ready(function() {
        // var mon = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
        //     'October', 'November', 'December'
        // ];
        var mon = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'
        ];
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth(); // As January is 0.
        var yyyy = today.getFullYear();

        // Display the current month and year in the HTML
        $("#get_month").text(mon[mm]);
        $("#get_year").text(yyyy);

        // Set initial previous month as the current month
        var previous_month = mm + 1;
        $("#prev_next_month").text(previous_month);

        $(document).on('click', "#next_month", function() {
            var current_month = mon.indexOf($("#get_month").text()); // Get the current month
            var current_year = parseInt($("#get_year").text());

            // Increment the month and handle year change
            current_month += 1;
            if (current_month >= 12) {
                current_month = 0;
                current_year++;
            }
            var next_month = mon[current_month];
            // Update the month and year in the HTML
            $("#get_month").text(next_month);
            $("#get_year").text(current_year);

            var month = current_month + 1;
            if (month < 10) month = '0' + month;
            var year = current_year;
            var student_id = $('#student_id').val();

            $.ajax({
                method: 'GET',
                url: '/get_student_calendar_attendance',
                data: {
                    'month': month,
                    'year': year,
                    'institute_id': "@php echo session('institute_id'); @endphp",
                    'campus_id': "@php echo session('campus_id'); @endphp",
                    'student_id': student_id,
                },
            }).done(function(msg) {
                $('.calendar_days').html(msg);
            });
        });

        $(document).on('click', "#prev_month", function() {
            var current_month = mon.indexOf($("#get_month").text()); // Get the current month
            var current_year = parseInt($("#get_year").text());
            // Decrement the month and handle year change
            current_month -= 1;
            if (current_month < 0) {
                current_month = 11;
                current_year -= 1;
            }
            var prev_month = mon[current_month];
            // Update the month and year in the HTML
            $("#get_month").text(prev_month);
            $("#get_year").text(current_year);

            var month = current_month + 1;
            if (month < 10) month = '0' + month;
            var year = current_year;
            var student_id = $('#student_id').val();

            $.ajax({
                method: 'GET',
                url: '/get_student_calendar_attendance',
                data: {
                    'month': month,
                    'year': year,
                    'institute_id': "@php echo session('institute_id'); @endphp",
                    'campus_id': "@php echo session('campus_id'); @endphp",
                    'student_id': student_id,
                },
            }).done(function(msg) {
                $('.calendar_days').html(msg);
            });
        });
        // Call the initial AJAX request on page load
        var month = $("#prev_next_month").text();
        if (month < 10) month = '0' + month;
        var year = $("#get_year").text();
        var student_id = $('#student_id').val();

        $.ajax({
            method: 'GET',
            url: '/get_student_calendar_attendance',
            data: {
                'month': month,
                'year': year,
                'institute_id': "@php echo session('institute_id'); @endphp",
                'campus_id': "@php echo session('campus_id'); @endphp",
                'student_id': student_id,
            },
        }).done(function(msg) {
            $('.calendar_days').html(msg);
        });
    });
</script>
