@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
@include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>   
            <div class="container">
            <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Add Section</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Promote Student</h3>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{ route('promotestudentClassData') }}" method="GET">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>
                                <select name="class_name" class="form-control" id="select_class">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>0
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Section *</label>
                                <select name="section_name" id="section_name_dropdown" class="form-control">
                                    <option value="">Section</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group mg-t-8 text-center">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Next</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                
       
    </div>
    <!-- Page Area End Here -->
</div>

@include('campus_admin_panel.dashboard.include.footer')




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
