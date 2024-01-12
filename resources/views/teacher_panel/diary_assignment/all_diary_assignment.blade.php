@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('add-diary') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        Add Diary/Assignment
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                        @if(@session('delete-message-diary'))
                            <div class="alert alert-success">
                                <strong>Congratulations! </strong> {{ @session('delete-message-diary') }}
                            </div>
                        @endif
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>All Diary/Assignments</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>File Type</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Title  </th>
                                    <th>Diary Notes</th> 
                                    <th>Assignment File</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Total Marks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_diaries as $all_diary)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>
                                            @if(explode('.', $all_diary->uploaded_document)[1] == 'pdf')
                                              <img src="/teacher/pdf-file.png" alt="pdf icon">
                                            @elseif(explode('.', $all_diary->uploaded_document)[1] == 'doc' || explode('.', $all_diary->uploaded_document)[1] == 'docx')
                                              <img src="/teacher/docx.png" alt="doc icon">
                                            @elseif(explode('.', $all_diary->uploaded_document)[1] == 'xlx' || explode('.', $all_diary->uploaded_document)[1] == 'xls')
                                              <img src="/teacher/xls.png" alt="xlx icon">
                                            @elseif(explode('.', $all_diary->uploaded_document)[1] == 'jpg' || explode('.', $all_diary->uploaded_document)[1] == 'jpg')
                                            <img src="/teacher/jpg.png" alt="xlx icon">
                                            @elseif(explode('.', $all_diary->uploaded_document)[1] == 'png' || explode('.', $all_diary->uploaded_document)[1] == 'png')
                                            <img src="/teacher/png.png" alt="xlx icon">
                                            @elseif(explode('.', $all_diary->uploaded_document)[1] == 'jpeg' || explode('.', $all_diary->uploaded_document)[1] == 'jpeg')
                                            <img src="/teacher/jpeg.png" alt="xlx icon">
                                            @elseif(explode('.', $all_diary->uploaded_document)[1] == 'xlsx' || explode('.', $all_diary->uploaded_document)[1] == 'xls')
                                            <img src="/teacher/xls.png" alt="xlx icon">
                                            @elseif(explode('.', $all_diary->uploaded_document)[1] == 'csv')
                                              <img src="/teacher/csv.png" alt="csv icon">
                                            @elseif(explode('.', $all_diary->uploaded_document)[1] == 'txt')
                                              <img src="/teacher/txt.png" alt="txt icon">
                                            @else
                                            <i class="fas fa-file"></i>
                                            @endif
                                        </td>
                                        <td>{{ $all_diary->class_name}}</td>
                                        <!-- <td>{{ $all_diary->section_name}}</td> -->
                                        <td>{{ $all_diary->subject_name}}</td>
                                        <td>{{ $all_diary->title}}</td>
                                        <td>{{ $all_diary->diary_note}}</td>
                                        <td>
                                            <a href="teacher/dry_asgmets_duploaded_document/{{ $all_diary->uploaded_document}}">
                                                {{ $all_diary->uploaded_document}}
                                            </a>
                                        </td>
                                        <td>{{ $all_diary->start_date}}</td>
                                        <td>{{ $all_diary->due_date}}</td>
                                        <td>{{ $all_diary->assignmnet_total_marks}}</td>
                                        <td>
                                            <a href="{{ route('edit-diary' ,['id' => $all_diary->id ]) }}">
                                                <button class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="{{ route('delete-diary' ,['delete' => $all_diary->id ]) }}">
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

