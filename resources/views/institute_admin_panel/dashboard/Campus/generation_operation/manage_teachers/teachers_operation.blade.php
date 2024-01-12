@include('institute_admin_panel.dashboard.include.header')
<style type="text/css">
    .main-bg-cus {
        background: #fff;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 10px 0;
        border-radius: 8px;
    }

    .had-label h5 {
        text-transform: uppercase;
        letter-spacing: 0.1em;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .had-label h5 img {
        width: 35px;
        margin: 0px 10px;
    }

    .content-of-label {
        display: flex;
        padding: 0px 30px;
    }

    .content-of-label .img-cont {
        width: 80px;
        height: 80px;
        padding: 10px;
        border-radius: 50%;
        margin: 0px 10px;

    }

    .content-of-label .img-cont img {
        max-width: 100%;
    }

    .label-con {
        padding: 10px 0px;
    }

    .label-con h4 {
        letter-spacing: 0.1em;
        font-weight: bold;
    }

    .label-con span {
        background: blue;
        color: #fff;
        font-size: 10px;
        border-radius: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase;
        font-weight: bold;
        padding: 0px 6px;
    }

    .teah-con {
        display: flex;
        column-gap: 5px;
    }
</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('institute_admin_panel.dashboard.include.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <!-- <h3 class="text-center">""</h3> -->
                <a href="{{ route('add-classTeacher') }}" class="btn btn-primary">
                    Add Class Teacher
                </a>

                <a href="{{ route('add-SubjectTeacher') }}" class="btn btn-primary">
                    Add Subject Teacher
                </a>

            </div>
            <div class="container-fluid">
                <div class="row">





                    <div class="container-fluid py-5">
                        <div class="row py-3">

                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <div class="main-bg-cus">
                                    <div class="had-label">
                                        <h5><img src="/institute_login/images/teacher.png" alt=""> Class Teacher
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @foreach ($get_class_teachers as $get_class_teachers)
                                <div class="col-lg-6 col-md-12 col-sm-12 text-center py-3">
                                    <div class="main-bg-cus">
                                        <div class="content-of-label">
                                            <div class="img-cont">
                                                <img src="/institute_login/images/teacher.png" alt="">
                                            </div>
                                            <div class="label-con">
                                                <h4>{{ $get_class_teachers->teacher_name }}</h4>
                                                <div class="teah-con">
                                                    <span>Class: {{ $get_class_teachers->class_name }}</span>
                                                    <span>Section: {{ $get_class_teachers->section_name }}</span>
                                                </div>
                                                <!-- <span>content label</span> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <div class="main-bg-cus">
                                    <div class="had-label">
                                        <h5><img src="/institute_login/images/teacher.png" alt=""> Subject
                                            Teacher</h5>
                                    </div>
                                </div>
                            </div>


                            @foreach ($get_subject_teachers as $get_subject_teacher)
                                <div class="col-lg-6 col-md-12 col-sm-12 text-center py-3">
                                    <div class="main-bg-cus">
                                        <div class="content-of-label">
                                            <div class="img-cont">
                                                <img src="/institute_login/images/teacher.png" alt="">
                                            </div>
                                            <div class="label-con">
                                                <h4>{{ $get_subject_teacher->teacher_name }}</h4>
                                                <div class="teah-con">
                                                    <span>Class: {{ $get_subject_teacher->class_name }}</span>
                                                    <span>Section: {{ $get_subject_teacher->section_name }}</span>
                                                    <span class="subject-span">
                                                        @php
                                                            $subjectsArray = explode(' ', $get_subject_teacher->subjects);
                                                            foreach ($subjectsArray as $subject) {
                                                                $randomColor = '#' . substr(md5(mt_rand()), 0, 6); // Generate a random color
                                                                echo '<span style="background-color: ' . $randomColor . ';">' . $subject . ' </span>';
                                                            }
                                                        @endphp
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>








                </div>
            </div>
        </div>
        <br>
    </div>
</div>
<!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
<!-- <script>
    function getRandomColor() {
        // Generate a random color in hexadecimal format
        return "#" + Math.floor(Math.random() * 16777215).toString(16);
    }
</script>
 -->


<script>
    // Get all the elements with class "subject-span"
    const subjectSpans = document.querySelectorAll(".subject-span");

    // Define an array of colors
    const colors = ["#ff0000", "#00ff00", "#0000ff", "#ffff00", "#ff00ff"];

    // Loop through the elements and assign a random color
    subjectSpans.forEach((span, index) => {
        const randomColor = colors[index % colors.length];
        span.style.backgroundColor = randomColor;
    });
</script>

<!-- <div class="col-md-3 text-center">
<a href="">
    <div class="box-main-card">
        <div class="card-content">
            <img src="teacher/send-message-01.png" alt="">
        </div>
        <h5>Class Teacher</h5>
    </div>
</a>
</div>
<div class="col-md-3 text-center">
<a href="{{ route('add-SubjectTeacher') }}">
    <div class="box-main-card">
        <div class="card-content">
            <img src="teacher/recived-message-01.png" alt="">
        </div>
        <h5>Subject Teacher</h5>
    </div>
</a>
</div> -->
