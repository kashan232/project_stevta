@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('add-recorded-lectures') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        Add Recorded Lectures
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    @if (session()->has('delete-recorded-lecture'))
                            <div class="alert alert-danger">
                                {{ session('delete-recorded-lecture') }}
                            </div>
                        @endif
                    <div class="heading-layout1">
                        <div class="item-title  mt-5 mb-5 text-center w-100">
                            <h3>Recorded Lectures Details</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="form-check-label">ID</label>
                                    </th>
                                    <th>Course</th>
                                    <!-- <th>Section</th> -->
                                    <th>Subject</th>
                                    <th>Lecture Title</th>
                                    <th>Lecture</th>
                                    <th>Upload Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Recorded_Lectures as $Recorded_Lecture)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $Recorded_Lecture->class_name }}</td>
                                    <!-- <td>{{ $Recorded_Lecture->section_name }}</td> -->
                                    <td>{{ $Recorded_Lecture->subject_name }}</td>
                                    <td>{{ $Recorded_Lecture->lecture_title }}</td>
                                    <td>{{ $Recorded_Lecture->lecture_link }}</td>
                                    <td>{{ $Recorded_Lecture->lecture_upld_dte }}</td>
                                    <td>
                                        <a href="{{ route('edit-recorded-lectures',['id' => $Recorded_Lecture->id ]) }}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                        <a href="{{ route('delete-recorded-lectures',['id' => $Recorded_Lecture->id ]) }}">
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

