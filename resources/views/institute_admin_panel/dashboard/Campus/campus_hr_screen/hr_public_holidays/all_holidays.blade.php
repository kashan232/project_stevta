@include('institute_admin_panel.dashboard.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')
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
                </ul>
            </div>
            {{-- <div class="row  d-flex justify-content-end">
                <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <a href="{{ route('add-new-holiday') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Add New
                        </button>
                    </a>
                </div>
            </div> --}}
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    {{-- @if(session('delete-message-campus-holiday'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('delete-message-campus-holiday') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif --}}
                    <div class="heading-layout1">
                        <div class="item-title mt-5 mb-5">
                            <h3>Holidays</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead class="">
                                <tr>
                                    <td>ID</td>
                                    <th>Title</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Description</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_public_holidys as $all_public_holidys )
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $all_public_holidys->holiday_title }}</td>
                                    <td>{{ $all_public_holidys->holiday_start_date }}</td>
                                    <td>{{ $all_public_holidys->holiday_end_date }}</td>
                                    <td>{{ $all_public_holidys->holiday_description }}</td>
                                    {{-- <td>
                                        <a class="dropdown-item" href="{{ route('delete-holiday',['delete' => $all_public_holidys->id ]) }}">
                                        <button type="submit" class="fw-btn-fill btn btn-danger">
                                            Delete
                                        </button>
                                        </a>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
