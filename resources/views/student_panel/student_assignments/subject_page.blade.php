@include('student_panel.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{$pagename}}"</h3>
            </div>
            <div class="container payroll-heading">
                <div class="row d-flex justify-content-center">
                    @foreach($student_subjects as $subject)
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('assignments',['subject_name'=> $subject->subject ]) }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="student/update-profile.png" alt="student-screens-img">
                                    </div>
                                    <h5>{{ $subject->subject }}</h5>
                                </div>
                            </a> 
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
            {{-- <div class="text-center">
                @include('main_super_admin.dashboard.include.poweredby')
            </div> --}}
        </div>
    </div>
</div>

@include('student_panel.include.footer')
