@include('student_panel.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- foreach start  -->
                    @foreach ($get_all_courses as $course)
                        <div class="col-md-3 text-center">
                            <a href="{{ route('viewCourseDeatils', ['cardName' => $course->subject]) }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="teacher/send-message-01.png" alt="">
                                    </div>
                                    <h5>{{ $course->subject }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- foreach end  -->
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('student_panel.include.footer')
