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
                        <a href="{{ route('institute_Dashboard') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('all-employee-leave') }}">Leave Details</a>
                    </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    @if(session('leave-complete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> {{ session('leave-complete') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if(session('leave-not-added'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry! </strong> {{ session('leave-not-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(session('leave-not-add'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry! </strong> {{ session('leave-not-add') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if(session('leave-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulation! </strong> {{ session('leave-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if(session('leave-not-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulation! </strong> {{ session('leave-not-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>New Leave</h3>
                        </div>

                        

                    </div>
                    <form class="new-added-form" action="{{ route('store-employee-leave') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Employee ID *</label>
                                <select name="emp_id" class="form-control" id="select_emp_id">
                                    <option value="">select Employe Id</option>
                                    @foreach($emp_ids as $emp_id)
                                        <option value="{{ $emp_id }}">{{ $emp_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Employee Name *</label>
                                <input type="hidden" name="no_of_leaves" id="no_of_leaves_fetch">
                                <input type="hidden" id="monthInput" name="current_month" readonly>
                                <input type="text" name="emp_name" id="emp_name_fetch" required placeholder="Enter Name"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Title*</label>
                                <input type="text" name="title" id="title" placeholder="Enter Title"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Start Date *</label>
                                <input type="date" name="start_date" id="start_date" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>End Date *</label>
                                <input type="date" name="end_date" id="end_date" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" placeholder="Write Description about leave" id="" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-12 form-group mg-t-8 text-center">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark btn-lg">
                                Submit
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

{{-- <script>
    $('#select_emp_id').on('change', function() {
        var select_emp_id = $(this).val();
        
        $.ajax({
            url: '/id-wise-name',
            method: 'get',
            data:  {select_emp_id : select_emp_id,
                _token: '{{csrf_token()}}'
            },
            success: function(response) {
                $("#emp_name_fetch").val(response.first_name);
                $("#no_of_leaves_fetch").val(response.no_of_leaves);
            },
            error: function(xhr, status, error) { 
                    alert("Error: " + error);
                }
        });
    });
</script>   --}}
<script>
    $(document).ready(function() {
        $('#select_emp_id').on('change', function() {
            var select_emp_id = $(this).val();

            $.ajax({
                url: '/id-wise-name',
                method: 'get',
                data:  {
                    select_emp_id: select_emp_id,
                    _token: '{{csrf_token()}}'
                },
                success: function(response) {
                    $("#emp_name_fetch").val(response.first_name);
                    $("#no_of_leaves_fetch").val(response.no_of_leaves);
                },
                error: function(xhr, status, error) { 
                    alert("Error: " + error);
                }
            });
        });
    });
</script>
<script>
    // Get the current date
    var currentDate = new Date();
    // Get the current month
    var currentMonth = currentDate.toLocaleString('default', { month: 'long' });
    // Set the value of the input field
    document.getElementById("monthInput").value = currentMonth;
  </script>

