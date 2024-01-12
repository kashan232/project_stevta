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
                        <h4>Add Course </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('campus-single-operation') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('all-courses') }}">All Course</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success-message-class'))
                            <div class="alert alert-success alert-dismissible alert-alt fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="btn-close">
                                </button>
                                <strong>Congratulations!</strong> {{ session('success-message-class') }}.
                            </div>
                        @endif
                            <form class="new-added-form" action="{{ route('store-course') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Batch</label>
                                            <select name="batch" class="form-control" id="">
                                                <option value="">Select Batch</option>
                                                @foreach ($get_all_batches as $batches)
                                                    <option value="{{ $batches->batch }}">
                                                        {{ $batches->batch }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Course:</label>
                                            <input type="text" name="class_name" id="class_name"
                                            placeholder="Course Name" required class="form-control"/>
                                        <span class="text-danger error-message" id="error-class_name"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-dark">Cencel</button>
                                    </div>
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