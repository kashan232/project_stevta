@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('add-course-material') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        Add Course Material
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                        @if(@session('delete-message-course'))
                            <div class="alert alert-success">
                                <strong>Congratulations! </strong> {{ @session('delete-message-course') }}
                            </div>
                        @endif
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>All Course Material</h3>
                        </div>

                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8 my-5">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>


                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">


                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>File Type</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Course Material Title</th>
                                    <th>Course File</th>
                                    <th>Upload Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_courses as $all_course)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>
                                            @if(explode('.', $all_course->uploaded_document)[1] == 'pdf')
                                              <img src="/teacher/pdf-file.png" alt="pdf icon">
                                            @elseif(explode('.', $all_course->uploaded_document)[1] == 'doc' || explode('.', $all_course->uploaded_document)[1] == 'docx')
                                              <img src="/teacher/docx.png" alt="doc icon">
                                            @elseif(explode('.', $all_course->uploaded_document)[1] == 'xlx' || explode('.', $all_course->uploaded_document)[1] == 'xls')
                                              <img src="/teacher/xls.png" alt="xlx icon">
                                            @elseif(explode('.', $all_course->uploaded_document)[1] == 'jpg' || explode('.', $all_course->uploaded_document)[1] == 'jpg')
                                            <img src="/teacher/jpg.png" alt="xlx icon">
                                            @elseif(explode('.', $all_course->uploaded_document)[1] == 'png' || explode('.', $all_course->uploaded_document)[1] == 'png')
                                            <img src="/teacher/png.png" alt="xlx icon">
                                            @elseif(explode('.', $all_course->uploaded_document)[1] == 'jpeg' || explode('.', $all_course->uploaded_document)[1] == 'jpeg')
                                            <img src="/teacher/jpeg.png" alt="xlx icon">
                                            @elseif(explode('.', $all_course->uploaded_document)[1] == 'xlsx' || explode('.', $all_course->uploaded_document)[1] == 'xls')
                                            <img src="/teacher/xls.png" alt="xlx icon">
                                            @elseif(explode('.', $all_course->uploaded_document)[1] == 'csv')
                                              <img src="/teacher/csv.png" alt="csv icon">
                                            @elseif(explode('.', $all_course->uploaded_document)[1] == 'txt')
                                              <img src="/teacher/txt.png" alt="txt icon">
                                            @else
                                            <i class="fas fa-file"></i>
                                            @endif
                                        </td>
                                        <td>{{ $all_course->class_name}}</td>
                                        <!-- <td>{{ $all_course->section_name}}</td> -->
                                        <td>{{ $all_course->subject_name}}</td>
                                        <td>{{ $all_course->course_title}}</td>
                                        <td>
                                            <a href="teacher/course_material/{{ $all_course->uploaded_document}}" target="_blank" >
                                                {{ $all_course->uploaded_document}}
                                            </a>  
                                        </td>
                                        
                                        <td>{{ $all_course->upload_date}}</td>
                                        <td>
                                            <a href="{{ route('edit-course' ,['id' => $all_course->id ]) }}">
                                                <button class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="{{ route('delete-course' ,['id' => $all_course->id ]) }}">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
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
@include('teacher_panel.include.footer')

