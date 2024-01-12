@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Classes</li>
                        </ul> 
                    </div>
                    <!-- <div class="row d-flex justify-content-end">
                        <a href="{{ route('add-course') }}">
                            <button type="button" class="btn btn-warning text-white mr-4 mb-3"
                                style="font-size: 14px">Add
                                Course</button>
                        </a>
                        <a href="{{ route('add-section') }}">
                            <button type="button" class="btn btn-warning text-white mb-3" style="font-size: 14px">Add
                                Section</button>
                        </a> 
                    </div> -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title mt-3 mb-3">
                                    <h3>{{$pagename}}</h3>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead class="text-center">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Teacher</th>
                                            <th>Course Name</th>
                                            <th>subject</th>
                                            <th>lecture date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Lecture day</th>
                                            <th>Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body" class="text-center">
                                        @php
                                            $serialNumber = 1;
                                        @endphp
                                        @foreach ($available_teachers as $available_teachers)
                                            <tr>
                                                <td> 
                                                    {{ $serialNumber }}
                                                </td>
                                               
                                                <td>{{ $teacherNames[$available_teachers->teacher_id] }}</td> <!-- Accessing teacher's name from the $teacherNames array -->
                                                <td>{{ $available_teachers->course_name }}</td>
                                                <td>{{ $available_teachers->subject_name }}</td>
                                                <td>{{ $available_teachers->lecture_date }}</td>
                                                <td>{{ $available_teachers->start_time }}</td>
                                                <td>{{ $available_teachers->end_time }}</td>
                                                <td>{{ $available_teachers->lecture_day }}</td>
                                                <td>{{ $available_teachers->availability }}</td>
                                                
                                            </tr>
                                            @php
                                                $serialNumber++;
                                            @endphp
                                        @endforeach
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



        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var tableBody = document.getElementById('table-body');
                var emptyRow = document.getElementById('empty-row');

                if (tableBody.rows.length === 0) {
                    emptyRow.style.display = 'table-row';
                } else {
                    emptyRow.style.display = 'none';
                }
            });
        </script>
