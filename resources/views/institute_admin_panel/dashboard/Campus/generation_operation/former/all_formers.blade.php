@include('institute_admin_panel.dashboard.include.header')



<!-- Preloader Start Here -->
<div id="preloader"></div>


<!-- Preloader End Here -->
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
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Classes</li>
                </ul>
            </div>

           
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->


            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="card height-auto">
                <div class="card-body">


                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>{{ $pagename }}</h3>
                        </div>

                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    SEARCH
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>

                                    <th>S.No</th>
                                    <th>Student Image</th>
                                    <th>Student Name</th>
                                    <th>GR No:</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Batch</th>
                                    <th>House</th>
                                    <th>Enrollment</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            @php
                            $serialNumber = 1;
                            @endphp
                            <tbody>
                                @foreach($former as $student_list) <tr>


                                    <td> {{ $serialNumber }} </td>

                                    <td>
                                        <img src="/campus/general_operations/student_image/{{ $student_list->student_img }}" alt="student_img" class="rounded-circle" width="80px" height="80px">
                                    </td>
                                    <td>{{$student_list->first_name}}</td>
                                    <td>{{$student_list->gr}}</td>
                                    <td>{{$student_list->class_name}}</td>
                                    <td>{{$student_list->section_name}}</td>
                                    <td>{{$student_list->session_year}}</td>
                                    <td>{{$student_list->Address}}</td>
                                    <td>{{$student_list->enrollment_date}}</td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- <a class="dropdown-item" href="{{ route('change-class' ,['id' => $student_list->id ]) }}"> -->
                                                    <!-- <i class="fad fa-users-class"></i>Change Class</a> -->

                                           
                                                <a class="dropdown-item" href="{{ route('viewdeleted-student' ,['id' => $student_list->id ]) }}"><i class="fas fa-bed text-orange-peel"></i>View</a>
                                                <!-- <a class="dropdown-item" href="{{ route('delete-student' ,['id' => $student_list->id ]) }}"><i class="fas fa-bed text-danger"></i>Delete</a> -->
                                                <a class="dropdown-item" href="{{ route('restore-student' ,['id' => $student_list->id ]) }}"><i class="fas fa-bed text-orange-peel"></i>Restore</a>

                                            </div>
                                        </div>

                                    </td>
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
@include('institute_admin_panel.dashboard.include.footer')  