@include('student_panel.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{ $pagename }}"</h3>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Classes Schedule</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Subject Name</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                    {{-- <th>More</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#12</label>
                                        </div>
                                    </td>
                                    <td>Maths</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>
                                    <td style="font-size: 13px">3:00pm to 4:00pm</td>

                                    {{-- <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href="{{ route('view-student') }}"><i class="fas fa-redo-alt text-orange-peel"></i>View</a>
                    </div>
                </div>
                </td> --}}
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <label class="form-check-label">#12</label>
                        </div>
                    </td>
                    <td>English</td>
                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                    <td style="font-size: 13px">2:00pm to 3:00pm</td>
                    <td style="font-size: 13px">2:00pm to 3:00pm</td>

                    {{-- <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href="{{ route('view-student') }}"><i class="fas fa-redo-alt text-orange-peel"></i>View</a>
            </div>
        </div>
        </td> --}}
        </tr>
        </tbody>
        </table> -->
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
@include('student_panel.include.footer')
