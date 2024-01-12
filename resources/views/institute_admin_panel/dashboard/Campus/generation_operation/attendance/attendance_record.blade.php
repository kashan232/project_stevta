 <!-- <style>
     .attendance-percentage {
         padding: 10px 10px;
         border-radius: 5px;
         font-weight: bold;
         font-size: 10px;
     }

     .good {
         background-color: green;
         color: white;
     }

     .average {
         background-color: yellow;
         color: black;

     }

     .poor {
         background-color: red;
         color: white;
         border-radius: 20%;  


     }

     /* .progress {
         background-color: yellow;
         color: black;
         width: 200px;
         height: 600px;
         border-radius: 20%;

     } */

     #deto {
         height: 30px;
     }



     .progress {
        background-color: yellow;
        color: black;
        width: 200px;
        height: 30px; 
        border-radius: 20%;
        position: relative; 
    }

    .progress-bar {
        height: 100%;
        border-radius: 20%;
        position: absolute;
        top: 0;
        left: 0;
    }  
 </style> -->

 <style>
    /* ... Your existing styles ... */

     .progress {
        background-color: yellow;
        color: black;
        width: 200px;
        height: 20px!important; /* Increased height */
        border-radius: 20%;
        position: relative; /* Added position property */
    }  

    .progress-bar {
        height: 100%;
        /* border-radius: 20%; */
        position: absolute;
        top: 0;
        left: 0;
        background-color: green; /* Set progress bar color */
    }

    .percentage-label {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 16px; /* Adjust font size as needed */
        font-weight: bold;
        color: #000; /* Set font color to white */
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
                                     <th>Admission No</th>
                                     <th>Roll Number</th>
                                     <th>Name</th>
                                     <th>Percentage</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach($fetch_students_by_class as $fetch_students_by_class)
                                 <tr>
                                     <td>{{ $loop->iteration}}</td>
                                     <td>{{ $fetch_students_by_class->id}}</td>
                                     <!-- <td>{{ $fetch_students_by_class->gr}}</td> -->
                                     <td><a href="{{ route('studentattendanceview', ['id' => $fetch_students_by_class->gr]) }}">{{ $fetch_students_by_class->gr }}</a></td>

                                     <td>{{ $fetch_students_by_class->first_name}}</td>
                                     <!-- <td>{{$fetch_students_by_class->attendancePercentage}}</td>
                                     -->

                                     <td>

                                         <!-- <div class="progress" id="deto">


                                             @if ($fetch_students_by_class->attendancePercentage >= 75)

                                             <span class="attendance-percentage good">{{ $fetch_students_by_class->attendancePercentage }}%</span>

                                             @elseif ($fetch_students_by_class->attendancePercentage >= 50)
                                             <span class="attendance-percentage average">{{ $fetch_students_by_class->attendancePercentage }}%</span>
                                             @else
                                             <span class="attendance-percentage poor">{{ $fetch_students_by_class->attendancePercentage }}%</span>
                                             @endif
                                         </div> -->

<!-- 

                                         <div class="progress" id="deto">
    <div class="progress-bar" style="width: {{ $fetch_students_by_class->attendancePercentage }}%;"></div>

    @if ($fetch_students_by_class->attendancePercentage >= 75)
        <span class="attendance-percentage good">{{ $fetch_students_by_class->attendancePercentage }}%</span>
    @elseif ($fetch_students_by_class->attendancePercentage >= 50)
        <span class="attendance-percentage average">{{ $fetch_students_by_class->attendancePercentage }}%</span>
    @else
        <span class="attendance-percentage poor">{{ $fetch_students_by_class->attendancePercentage }}%</span>
    @endif
</div> -->


<!-- 
<div class="progress" id="deto">
    <div class="progress-bar" style="width: {{ $fetch_students_by_class->attendancePercentage }}%;"></div>
    <span class="percentage-label">{{ $fetch_students_by_class->attendancePercentage }}%</span>

    @if ($fetch_students_by_class->attendancePercentage >= 75)
        <span class="attendance-percentage good">{{ $fetch_students_by_class->attendancePercentage }}%</span>
    @elseif ($fetch_students_by_class->attendancePercentage >= 50)
        <span class="attendance-percentage average">{{ $fetch_students_by_class->attendancePercentage }}%</span>
    @else
        <span class="attendance-percentage poor">{{ $fetch_students_by_class->attendancePercentage }}%</span>
    @endif
</div> -->


<div class="progress" id="deto">
    <div class="progress-bar" style="width: {{ $fetch_students_by_class->attendancePercentage }}%;"></div>
    <span class="percentage-label">{{ $fetch_students_by_class->attendancePercentage }}%</span>

    @if ($fetch_students_by_class->attendancePercentage >= 75)
        <span class="attendance-percentage good">{{ $fetch_students_by_class->attendancePercentage }}%</span>
    @elseif ($fetch_students_by_class->attendancePercentage >= 50)
        <span class="attendance-percentage average">{{ $fetch_students_by_class->attendancePercentage }}%</span>
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
     <!-- Page Area End Here -->  
 </div> 
 @include('institute_admin_panel.dashboard.include.footer')