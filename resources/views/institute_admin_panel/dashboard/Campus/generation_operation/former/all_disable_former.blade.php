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
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>{{ $pagename }}</h3>
                        </div>
                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    SEARCH
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Cadet Number</th>
                                    <th>Last Attendent</th>
                                    <th>Leaving Date</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @php
                                $serialNumber = 1;
                                @endphp

                                @foreach($deleted_formers as $deleted_former)
                                <tr>
                                    <td>
                                        {{ $serialNumber }}
                                    </td>
                                    <td>{{ $deleted_former->first_name }}</td>
                                    <td>{{ $deleted_former->gr }}</td>
                                    <td>{{ $deleted_former->class_name }}</td>
                                    <td>{{ $deleted_former->updated_at->format('Y-m-d') }}</td>
                                </tr>
                                <tr id="empty-row" style="display: none;">
                                    <td colspan="5">No records found.</td>
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
    <!-- Page Area End Here -->
</div>    
@include('institute_admin_panel.dashboard.include.footer')  