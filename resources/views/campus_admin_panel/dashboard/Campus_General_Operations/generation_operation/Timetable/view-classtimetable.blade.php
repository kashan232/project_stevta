@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Admit Form Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Time table</h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h6>class {{ $selectedClass }} {{ $selectedSection }}</h6>
                                        <p>Date: {{ $currentDate->format('Y, F j') }}</p>
                                    </div>

                                </div>
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                            <th>Saturday</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>


                                            @foreach ($timetableByDay as $day => $subjects)
                                                @if ($loop->first)
                                                    <!-- <td rowspan="{{ count($subjects) }}"> -->
                                                    <td>
                                                        @foreach ($subjects as $key => $subject)
                                                            <br>
                                                            <p>{{ $subjects[$key]['subject'] }}</p> <br>
                                                        @endforeach
                                                    </td>
                                                    <!-- </td>  -->
                                                @endif
                                                <td>
                                                    @foreach ($subjects as $subject)
                                                        @if ($subject['start_time'] === '00:00')
                                                            --- ---
                                                        @else
                                                            {{ $subject['start_time'] }} to {{ $subject['end_time'] }}
                                                        @endif

                                                        <!-- <p>{{ $subject['start_time'] }} to {{ $subject['end_time'] }}</p> -->
                                                        <p>{{ $subject['teacher'] }}</p>
                                                        <hr>
                                                    @endforeach
                                                </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Page Area End Here -->
        </div>

        @include('campus_admin_panel.dashboard.include.footer')
