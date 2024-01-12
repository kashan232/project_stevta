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
                    <li>Subject form</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Syllabus</h3>
                        </div>

                    </div>

                    @if(session('success-message-syllabus'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-message-syllabus') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif


                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif 


                    <form class="new-added-form" action="{{ route('store-syllabus') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>

                                <select name="class_name" class="form-control" id="select_class">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Section *</label>
                                <select name="section_name" id="section_name_dropdown" class="form-control">
                                    <option value="">Section</option>
                                </select>
                            </div>



                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Select Subject *</label>
                                <select name="subject_name" id="subject_name_dropdown" class="form-control">
                                    <option value="">Select a Subject</option>
                                </select>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Author Name *</label>
                                <input type="text" name="author_name" id="last_name" required placeholder="Author Name" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Book Name *</label>
                                <input type="text" name="book_name" id="last_name" required placeholder="English book" class="form-control" />
                                <span class="text-danger error-message" id="error-book"></span>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>No: of Chapters *</label>
                                <input type="text" name="no_of_chapters" id="last_name" required placeholder="(i.e) 12, 20" class="form-control" />
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="mg-t-8">
                                <button t ype="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
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
@include('institute_admin_panel.dashboard.include.footer')


<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-wise-section',
            method: 'get',
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




<script>
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
</script>
