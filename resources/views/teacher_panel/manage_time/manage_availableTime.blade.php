


@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <!-- <a href="{{ route('recorded-lectures') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        List Recorded Lectures
                    </a> -->
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body pt-3 pb-4">
                    <div class="heading-layout1">
                        <div class="item-title  mt-5 mb-5 text-center w-100">
                            <h3> Add Available time </h3>
                        </div> 
                    </div> 
                    <form action="{{ route('store-availableTime') }}" method="POST" class="new-added-form">
                        @csrf
                        @if (session()->has('success-message-lecture'))
                        <div class="alert alert-success">
                            {{ session('success-message-lecture') }}
                        </div>
                        @endif
                        <div class="row">
                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div> -->

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="course_name" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    @foreach($get_classes_subjects as $class_name)
                                    <option value="{{ $class_name }}">{{ $class_name }}</option>
                                    @endforeach  
                                </select>
                            </div>   


                            <!-- New dropdown for individual subjects -->
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="subject_name" class="form-control" id="individual_subjects">
                                    <option>Select Subject</option>
                                </select>
                            </div>


                        </div>
                        <div class="row">

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label for="lecture_date">Date *</label>
                                <input type="date" name="lecture_date" id="lecture_date" placeholder="Lecture Date.." required class="form-control" />
                            </div>


                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label for="">Start time *</label>
                                <input type="time" name="start_time" id="start_time" placeholder="Link.." required class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label for="">End time *</label>
                                <input type="time" name="end_time" id="end_time" placeholder="Link.." required class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label for="lecture_day">Day *</label>
                                <input type="text" name="lecture_day" id="lecture_day" placeholder="Day.." required class="form-control" readonly />
                            </div>

                            <!-- <div class="col-xl-2 col-lg-6 col-12 form-group">
                                <label for="">Day *</label>
                                <input type="text" name="lecture_link" id="lecture_link" placeholder="Link.." required class="form-control" />
                            </div> -->

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label for="lecture_link">Availability *</label>
                                <select name="availability" id="availability" class="form-control" required>
                                    <option value="available">Available</option>
                                    <option value="not_available">Not Available</option>
                                </select>
                            </div>  
  

                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" id="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('teacher_panel.include.footer')

<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-subjects',
            method: 'get',
            data: {
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },

            success: function(response) {
                console.log(response); // Log the response data to the console

                $("#subject_name_dropdown").empty();
                $.each(response, function(index, subject) {
                    if ($("#subject_name_dropdown option[value='" + subject + "']").length === 0) {
                        $("#subject_name_dropdown").append('<option value="' + subject + '">' + subject + '</option>');
                    }
                });
            },

            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });
    });
</script>


<!-- 

<script>
    $(document).ready(function() {
        $('#select_class').change(function() {
            var selectedClass = $(this).val();

            $.ajax({
                url: '/fetch-subjects', // Replace with your Laravel route URL
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // Include CSRF token for security
                    class_name: selectedClass
                },
                success: function(data) {
                    // Clear the existing options
                    $('#select_subject').empty();

                    // Populate the subjects dropdown with the fetched data
                    $.each(data.subjects, function(key, value) {
                        $('#select_subject').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        });
    });
</script> -->



<script>
    $(document).ready(function() {
        $('#select_class').change(function() {
            var selectedClass = $(this).val();

            $.ajax({
                url: '/fetch-subjects', // Replace with your Laravel route URL
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    class_name: selectedClass
                },
                success: function(data) {
                    // Clear the existing options in both dropdowns
                    $('#select_subject').empty();
                    $('#individual_subjects').empty();

                    // Populate the subjects dropdown with the fetched data
                    $.each(data.subjects, function(key, value) {
                        $('#select_subject').append('<option value="' + key + '">' + value + '</option>');

                        // Split subjects by comma and add them to the individual subjects dropdown
                        var subjectsArray = value.split(',');
                        $.each(subjectsArray, function(index, subject) {
                            $('#individual_subjects').append('<option value="' + subject + '">' + subject + '</option>');
                        });
                    });
                }
            });
        });
    });
</script>


<!-- <script>
document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.getElementById('lecture_date');
    const dayInput = document.getElementById('lecture_day');

    dateInput.addEventListener('input', function () {
        const selectedDate = new Date(dateInput.value);
        const options = { weekday: 'long' }; // 'long' format gives the full day name

        // Format the selected day and set it in the dayInput field
        dayInput.value = selectedDate.toLocaleDateString('en-US', options);
    });
});
</script> -->



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dateInput = document.getElementById('lecture_date');
        const dayInput = document.getElementById('lecture_day');

        dateInput.addEventListener('input', function() {
            const selectedDate = new Date(dateInput.value);
            const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            const selectedDay = daysOfWeek[selectedDate.getUTCDay()];

            dayInput.value = selectedDay;
        });

    });
   
</script>




<script>
document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.getElementById('lecture_date');
    const dayInput = document.getElementById('lecture_day');
    const submitButton = document.querySelector('button[type="submit"]');

    function checkDay() {
        const selectedDate = new Date(dateInput.value);
        const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const selectedDay = daysOfWeek[selectedDate.getUTCDay()];

        dayInput.value = selectedDay;

        // Check if selectedDay is "Sunday" and disable the submit button accordingly
        if (selectedDay === "Sunday") {
            submitButton.disabled = true;
        } else {
            submitButton.disabled = false;
        }
    }

    dateInput.addEventListener('input', checkDay);

    // Call the checkDay function when the page loads
    checkDay();
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.getElementById('lecture_date');
    const dayInput = document.getElementById('lecture_day');
    const submitButton = document.getElementById('submit');
    // const submitButton = document.querySelector('button[type="submit"]');

    function checkDay() {
        const selectedDate = new Date(dateInput.value);
        const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const selectedDay = daysOfWeek[selectedDate.getUTCDay()];

        dayInput.value = selectedDay;

        // Check if selectedDay is "Sunday" and disable the submit button accordingly
        if (selectedDay === "Sunday") {
            submitButton.disabled = true;
        } else {
            submitButton.disabled = false;
        }
    }

    dateInput.addEventListener('input', checkDay);

    // Call the checkDay function when the page loads
    checkDay();
});
</script>



<script>
    $(document).ready(function () {
        const dateInput = $('#lecture_date');
        const submitButton = $('#submit');

        dateInput.on('change', function () {
            const selectedDate = new Date(dateInput.val());
            const selectedDay = selectedDate.getDay(); // 0 for Sunday, 1 for Monday, etc.

            // Check if selectedDay is 0 (Sunday)
            if (selectedDay === 0) {
                submitButton.prop('disabled', true);
                submitButton.css('background-color', 'gray'); // Change the background color to gray
                submitButton.css('color', 'white'); // Change the text color to white
                // You can also change other CSS properties as needed
            } else {
                submitButton.prop('disabled', false);
                submitButton.css('background-color', ''); // Reset background color
                submitButton.css('color', ''); // Reset text color
                // Reset other CSS properties if needed
            }
        });
    });
</script>



