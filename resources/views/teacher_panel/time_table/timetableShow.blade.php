@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title  mt-5 mb-5 text-center w-100">
                            <h3>Time Table</h3>
                        </div>
                    </div>

                   
                    <hr style="height:4px; background:#ffae01" />
                    <div class="table-responsive">
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

                                    
                                    <!-- <td>
                                        @foreach ($subjects as $subject)
                                        <p>{{ $subject['start_time'] }} to {{ $subject['end_time'] }}</p>
                                        <p>{{ $subject['teacher'] }}</p>
                                        <hr>
                                        @endforeach
                                    </td> -->


                                    <td> 
                                        @foreach ($subjects as $subject)
                                            @if ($subject['start_time'] != '--' && $subject['end_time'] != '--')
                                                <p>{{ $subject['start_time'] }} to {{ $subject['end_time'] }}</p>
                                            @else
                                                <p>--</p>
                                            @endif
                                            <p>{{ $subject['teacher'] }}</p>
                                            <hr>
                                        @endforeach
                                    </td>

                                    @endforeach
                                </tr>
                            </tbody>  
                        </table>
        </div>
                        


                        <div class="row my-4">
                            <div class="col-md-12 d-flex justify-content-center align-content-center">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Finish
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- Page Area End Here -->
</div>
@include('teacher_panel.include.footer')

