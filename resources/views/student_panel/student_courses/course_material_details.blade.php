@include('student_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    @if (session('attendance_save'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('attendance_save') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>{{ $pagename }}</h3>
                            <br>
                            <h6>CLass "{{ @session('student_class') }}" &nbsp;&nbsp;&nbsp; Section
                                "{{ @session('student_section') }}" &nbsp;&nbsp;&nbsp;
                                Subject:&nbsp;"{{ $cardName }}"</h6>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <td>Course Title</td>
                                    <td>Upload Date</td>
                                    <td>Document</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($get_all_course_material_ofSubject as $get_all_course_material_ofSubject)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $get_all_course_material_ofSubject->course_title }}</td>
                                        <td>{{ $get_all_course_material_ofSubject->upload_date }}</td>
                                        <!-- <td>
                                       
                                        <a href="/teacher/course_material/{{ $get_all_course_material_ofSubject->uploaded_document }}">
                                            {{ $get_all_course_material_ofSubject->uploaded_document }}
                                        </a>
                                    </td>  -->


                                        <td>
                                            <a
                                                href="{{ route('download_course_material', ['filename' => $get_all_course_material_ofSubject->uploaded_document, 'title' => $get_all_course_material_ofSubject->course_title]) }}">
                                                {{ $get_all_course_material_ofSubject->uploaded_document }}
                                            </a>
                                        </td>



                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-5 d-flex justify-content-center align-content-center">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('student_panel.include.footer')
