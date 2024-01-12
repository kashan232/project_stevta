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
            <div class="row  d-flex justify-content-end">
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <a href="{{ route('back-subjectlist') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Back
                        </button>
                    </a>
                </div>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if (session('success_update'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success_update') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session()->has('success-message-section'))
                        <div class="alert alert-success">
                            {{ session('success-message-section') }}
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
                    <!-- <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Subject</h3>
                        </div>

                    </div> -->

                    <form class="new-added-form" action="{{ route('save-edit-subject',['id'=> $SubjectsDetails->id ]) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Subject *</label>
                                <input type="text" name="subject" id="last_name" required
                                    placeholder="(i.e) Englishm Urdu, Sindhi" class="form-control" value="{{$SubjectsDetails->subject}}" />
                                <span class="text-danger error-message" id="error-subject"></span>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="mg-t-8">
                                <button t ype="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Update
                                </button>
                            </div>

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
                _token: '{{ csrf_token() }}'
            },


            success: function(response) {
                $("#section_name_dropdown").empty(); 
                $.each(response, function(index, sectionName) {
                    if ($("#section_name_dropdown option[value='" + sectionName + "']")
                        .length === 0) {
                        $("#section_name_dropdown").append('<option value="' + sectionName +
                            '">' + sectionName + '</option>');
                    }
                });
            },

            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });
    });
</script>
