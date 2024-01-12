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
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Student form</li>
                </ul>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card height-auto">
                <div class="card-body">
                    <form class="new-added-form" action="{{ route('save-timetable') }}" method="POST"
                        id="timetable-form">
                        @csrf
                        <input type="hidden" value="{{ $class }}" name="class">
                        <input type="hidden" value="{{ $section }}" name="section">
                        <input type="hidden" value="{{ $subject }}" name="subject">
                        <!-- Time table detail -->
                        <div class="heading-layout1">
                            <div class="item-title Add-student m-auto justify-content-center">
                                <h3>Add Timetable</h3>
                            </div>
                        </div>
                        <h3>Monday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Monday]" id="time_start_Monday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Monday]" id="time_end_Monday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" name="teacher[Monday]">
                                    <option>Select Teacher</option>
                                    @foreach ($teacher as $t)
                                        <option value="{{ $t->first_name }}">{{ $t->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr />
                        <h3>Tuesday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Tuesday]" id="time_start_Tuesday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Tuesday]" id="time_end_Tuesday"
                                    class="form-control" />
                            </div>

                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" id="inputGroupSelect02" name="teacher[Tuesday]">
                                    <option>Dr.Ahsna Ansari</option>
                                    <option>Sir wahab</option>
                                    <option>Prof Usman</option>
                                </select>
                            </div> -->

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" name="teacher[Tuesday]">
                                    <option>Select Teacher</option>
                                    @foreach ($teacher as $t)
                                        <option value="{{ $t->first_name }}">{{ $t->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <hr />

                        <h3>Wednesday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Wednesday]" id="time_start_Wednesday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Wednesday]" id="time_end_Wednesday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" name="teacher[Wednesday]">
                                    <option>Select Teacher</option>
                                    @foreach ($teacher as $t)
                                        <option value="{{ $t->first_name }}">{{ $t->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <hr />

                        <h3>Thursday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Thursday]" id="time_start_Thursday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Thursday]" id="time_end_Thursday"
                                    class="form-control" />
                            </div>

                           
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" name="teacher[Thursday]">
                                    <option>Select Teacher</option>
                                    @foreach ($teacher as $t)
                                        <option value="{{ $t->first_name }}">{{ $t->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <hr />

                        <h3>Friday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Friday]" id="time_start_Friday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Friday]" id="time_end_Friday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" name="teacher[Friday]">
                                    <option>Select Teacher</option>
                                    @foreach ($teacher as $t)
                                        <option value="{{ $t->first_name }}">{{ $t->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <hr />

                        <h3>Saturday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Saturday]" id="time_start_Saturday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Saturday]" id="time_end_Saturday"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" name="teacher[Saturday]">
                                    <option>Select Teacher</option>
                                    @foreach ($teacher as $t)
                                        <option value="{{ $t->first_name }}">{{ $t->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <hr />

                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"
                                id="timetable-form">
                                Add
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#timetable-form").submit(function(e) {
            e.preventDefault();
            var timetableData = $(this).serializeArray();

            // Loop through the form data and check if the time is empty for each day
            $.each(timetableData, function(index, field) {
                if (field.name.includes("time_start") || field.name.includes("time_end")) {
                    if (!field.value) {
                        // If the time is empty, set it to '--'
                        field.value = '--';
                    }
                }
            });

            // Submit the form with updated data
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $.param(timetableData),
                success: function(response) {
                    // Handle the success response if needed
                    window.location.reload();
                },
                error: function(error) {
                    // Handle the error response if needed
                    console.log(error);
                }
            });
        });
    });
</script>
