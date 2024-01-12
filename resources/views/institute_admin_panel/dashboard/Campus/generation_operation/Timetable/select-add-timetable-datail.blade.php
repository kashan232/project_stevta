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
                    <li>TimeTable</li>
                </ul>
            </div>

            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Class Details</h3>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{ route('new-timetable') }}" method="GET">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group mt-3 mb-3">
                                <label>Class*</label>
                                <select name="class_name" class="form-control" id="select_class">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-12 form-group mt-3 mb-3">
                                <label>Section *</label>
                                <select name="section_name" id="section_name_dropdown" class="form-control">
                                    <option value="">Section</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-12 form-group mg-t-8 text-center mt-5 mb-5">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Next
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

<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-wise-section',
            method: 'GET',
            data: {
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },

            success: function(response) {
                $("#section_name_dropdown").empty();
                $.each(response, function(index, sectionName) {
                    if ($("#section_name_dropdown option[value='" + sectionName + "']").length === 0) {
                        $("#section_name_dropdown").append('<option value="' + sectionName + '">' + sectionName + '</option>');
                    }
                });

            },

            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });
    });
</script>

{{-- <script>
    $('#section_name_dropdown').on('change', function() {
        var section_name = $(this).val();
        var class_name = $('#select_class').val(); 

        $.ajax({
            url: '/section-subjects',
            method: 'GET',
            data: {
                section_name: section_name,
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },
            success: function(response) {
                $('#subject_name_dropdown').empty(); 
                $.each(response, function(index, subject) {
                    $('#subject_name_dropdown').append($('<option></option>').val(subject.subject).text(subject.subject));
                });

            },
            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });
    });
</script> --}}