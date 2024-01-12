@include('teacher_panel.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100">
                            <h3 class="mt-5 mb-5">Events Details</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Event Name</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($all_events) < 1)
                                    <div class="alert alert-danger">
                                        <strong>Sorry!</strong> No Event Found.
                                    </div>
                                @else
                                    @foreach ($all_events as $all_event)
                                        <tr>
                                            <td>{{ $all_event->id }}</td>
                                            <td>{{ $all_event->holiday_title }}</td>
                                            <td>{{ $all_event->holiday_start_date }}</td>
                                            <td>{{ $all_event->holiday_end_date }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Page Area End Here -->
</div>

@include('teacher_panel.include.footer')
