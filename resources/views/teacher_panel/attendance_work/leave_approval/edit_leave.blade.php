@include('teacher_panel.include.header')


<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('all-leave') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        ALL Leave
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                        @if(@session('update-success-message'))
                            <div class="alert alert-success">
                                <strong>Congratulations! </strong> {{ @session('update-success-message') }}
                            </div>
                        @endif
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Edit Leave</h3>
                        </div>

                    </div>
                    
                    <form id="course_uploaded_document" class="new-added-form" action="{{ route('update-leave',['id'=> $leave_details->id ]) }}" method="POST" 
                    enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                    <option value="">Section</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="student_name" id="student_name_dropdown" class="form-control classid">
                                    <option value="">Select a Student</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label for="">Apply Date*</label>
                                <input type="date" name="apply_date" id="apply_date" value="{{ $leave_details->apply_date }}"
                                    placeholder="Apply Date" required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label for="">From Date*</label>
                                
                                <input type="date" name="from_date" value="{{ $leave_details->from_date }}" id="from_date" placeholder=".." required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label for="">To Date*</label>
                                <input type="date" name="to_date" value="{{ $leave_details->to_date }}" id="to_date" placeholder=".." required
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-3 mb-3 mg-t-6">
                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                <label for="">Reason*</label>
                                <textarea type="textarea" name="leave_reason" class="form-control"  placeholder="Enter Your Reason">{{ $leave_details->leave_reason }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3 mg-t-6">
                            <div class="col-xl-12 col-lg-12 col-12 form-group ">
                                <label for="" class="form-check-label" >Leave status*</label>
                                    <div cla>
                                        <input type="radio" name="leave_status" value="pending" checked>
                                        pending
                                        <input type="radio" name="leave_status" value="Disapprove">
                                        Disapprove
                                        <input type="radio" name="leave_status" value="Approve">
                                        Approve
                                    </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5 mb-5 mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
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
@include('teacher_panel.include.footer')
<script>
    // Get the current date
    var currentDate = new Date();
    
    // Format the date as YYYY-MM-DD
    var year = currentDate.getFullYear();
    var month = String(currentDate.getMonth() + 1).padStart(2, '0');
    var day = String(currentDate.getDate()).padStart(2, '0');
    var formattedDate = year + '-' + month + '-' + day;
    
    // Set the value of the input field
    document.getElementById('apply_date').setAttribute('value', formattedDate);
  </script>
