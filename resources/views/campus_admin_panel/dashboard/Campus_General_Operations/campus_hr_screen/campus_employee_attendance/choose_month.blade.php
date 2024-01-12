@include('campus_admin_panel.dashboard.include.header')
<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.navbar')
    <!--**********************************
            Nav header end
        ***********************************-->
    <!--**********************************
            Header start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.topbar')
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.sidebar')
    <!--**********************************
            Sidebar end
        ***********************************-->
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Select Details For Generate Employee Attendance </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success-message-class'))
                            <div class="alert alert-success alert-dismissible alert-alt fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                </button>
                                <strong>Congratulations!</strong> {{ session('success-message-class') }}.
                            </div>
                            @endif
                            <form class="new-added-form" method="GET" action="{{ route('fetch-employee-attendance') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <select name="dept_name" class="form-control classid" id="dept_name">
                                            <option>Select Department</option>
                                            @foreach($departments as $department)
                                            <option value="{{ $department->dept_name }}">{{ $department->dept_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <input type="date" name="employee_attendance_date" id="employee_attendance_date"
                                            class="form-control" value="{{ date('Y-m-d') }}">
                                    </div>
                                </div>
                                <div class="col-12 form-group mg-t-8 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->
    <!--**********************************
            Footer start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.poweredby')
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
@include('campus_admin_panel.dashboard.include.footer')

<script>
    function validateInput() {
        const inputElement = document.getElementById('class_name');
        const errorElement = document.getElementById('error-class_name');

        // Regular expression to match input starting with alphabetic characters followed by optional integers
        const regex = /^[A-Za-z]+[0-9]*$/;

        if (regex.test(inputElement.value)) {
            // Input matches the pattern, clear the error message
            errorElement.textContent = "";
        } else {
            // Input does not match the pattern, show an error message
            errorElement.textContent = "Please start with alphabetic characters followed by optional integers.";
            // You may also choose to revert the input to a valid state if needed.
        }
    }
</script>

</body>

</html>