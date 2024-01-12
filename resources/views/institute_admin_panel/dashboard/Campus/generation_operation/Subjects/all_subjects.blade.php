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
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title w-100 p-2 text-center mt-3 mb-3">
                            <h3>All Subjects</h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($classes as $class)
                            <div class="col-md-12">
                                <div class="m-0 p-0 text-center mb-2 mt-2">
                                    <h4>Class: <span>{{ $class->class_name }}</span> </h4>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Section</th>
                                            <th>Subjects</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($class->class_sections as $section)
                                            <tr>
                                                <td>{{ $section->section_name }}</td>
                                                <td>
                                                    @foreach ($section->subjects as $subject)
                                                       <a href="{{ route('edit-subject',['id' => $subject->id ]) }}"> {{ $subject->subject }} </a>
                                                        <br>
                                                    @endforeach 
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('institute_admin_panel.dashboard.include.footer')
