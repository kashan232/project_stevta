@include('institute_admin_panel.dashboard.include.header')


<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')

    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('institute_admin_panel.dashboard.include.sidebar')


        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center"> "{{ @session('campus_name') }}"" </h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Time Table</li>
                </ul>
            </div>

            <!-- Breadcubs Area End Here -->
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
                                        @foreach($subjects as $key => $subject)
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

@include('institute_admin_panel.dashboard.include.footer')


