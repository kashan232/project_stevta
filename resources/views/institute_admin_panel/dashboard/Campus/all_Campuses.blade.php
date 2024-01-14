@include('institute_admin_panel.dashboard.inst_include.header')
<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    @include('institute_admin_panel.dashboard.inst_include.navbar')
    <!--**********************************
            Nav header end
        ***********************************-->
    <!--**********************************
            Header start
        ***********************************-->
    @include('institute_admin_panel.dashboard.inst_include.topbar')
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('institute_admin_panel.dashboard.inst_include.sidebar')
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
                        <h4> All Campus</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('add-campus') }}">Add Campus</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                    <a href="{{ route('add-campus') }}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Website</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Operations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $serialNumber = 1;
                                                @endphp
                                                @foreach($all_campuses as $campus)
                                                <tr>
                                                    <td> {{ $serialNumber }}</td>
                                                    <td>{{ $campus->campus_name }}</td>
                                                    <td>{{ $campus->campus_address }}</td>
                                                    <td>{{ $campus->campus_phone }}</td>
                                                    <td>{{ $campus->campus_website }}</td>
                                                    <td>{{ $campus->campus_email }}</td>
                                                    <td>{{ $campus->campus_password }}</td>
                                                    <td>
                                                        <a href="{{ route('edit-campus',['edit' => $campus->id ]) }}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                        <a href="{{ route('view-campus',['view' => $campus->id ]) }}" class="btn btn-sm btn-danger"><i class="la la-eye"></i></a>
                                                        <a href="{{ route('delete-campus',['delete' => $campus->id ]) }}" class="btn btn-sm btn-danger"><i class="la la-lock"></i></a>
                                                    </td>
                                                </tr>
                                                @php
                                                    $serialNumber++;
                                                @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
    @include('institute_admin_panel.dashboard.inst_include.poweredby')
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
@include('institute_admin_panel.dashboard.inst_include.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tableBody = document.getElementById('table-body');
        var emptyRow = document.getElementById('empty-row');

        if (tableBody.rows.length === 0) {
            emptyRow.style.display = 'table-row';
        } else {
            emptyRow.style.display = 'none';
        }
    });
</script>

</body>
</html>