@include('new_projects.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    {{-- @if (session('attendance_save'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('attendance_save') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif --}}
                    {{-- @if(count($attendanceData) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Attendance Already Submitted You Can Edit Record.!</strong>
                    </div>
                    @endif --}}
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Generate Student Online Attendance</h3>
                            <br>
                            <h6>CLass "2" And Section "B" And
                                Date:&nbsp;"17/09/2023"</h6>
                        </div>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <td>Roll Number</td>
                                        <td>Name</td>
                                        <td>Attendance</td>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>25</td>
                                            <td>Edward</td>
                                            <td>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Present</label><br>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Absent</label><br>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Leave</label><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>26</td>
                                            <td>Harry</td>
                                            <td>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Present</label><br>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Absent</label><br>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Leave</label><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>27</td>
                                            <td>Ronald</td>
                                            <td>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Present</label><br>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Absent</label><br>
                                                <input type="radio"  name="attendance" value="Present">
                                                <label>Leave</label><br>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-4 mb-5 d-flex justify-content-center align-content-center">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@include('new_projects.include.poweredby')

    <!-- Page Area End Here -->
</div>
@include('new_projects.include.footer')


