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
                        <h4>Batch</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('campus-single-operation') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('campus-batches') }}">All Batches</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible alert-alt fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="btn-close">
                                    </button>
                                    <strong>Congratulations!</strong> {{ session('success') }}.
                                </div>
                            @endif
                            <form class="new-added-form" action="{{route('save-batch')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Start Date</label>
                                            <input type="date"  class="form-control" name="start_date" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">End Date</label>
                                            <input type="date" class="form-control" id="endDatePicker" name="end_date" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="submit" class="btn btn-dark">Cencel</button>
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


</body>

</html>