@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title  mt-5 mb-5 text-center w-100">
                            <h3>Edit Notice</h3>
                        </div>
                    </div>
                    @if(session('Success'))
                        <div class="alert alert-success">
                            {{ session('Success') }}
                        </div>
                    @endif
                    <form class="new-added-form" action="{{ route('update-notice',['id' => $finder->id])}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label for="">Add Title*</label>
                                <input type="text" name="Notice_title" id="course_tilte" placeholder="Student Name" required class="form-control" value="{{ $finder->Notice_title}}" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label for="">Add Link*</label>
                                <input type="text" name="Notice_Link" id="course_tilte" placeholder="Student Name" required class="form-control" value="{{ $finder->Notice_Link}}" />
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label for="">Notice Publish Date*</label>
                                <input type="text" name="Notice_Publish_date" id="course_tilte" placeholder="Obtained Marks" required class="form-control" value="{{ $finder->Notice_Publish_date}}" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group mt-2 mb-2">
                                <select name="Notice_class" class="form-control classid" id="select_class">
                                    <option>Select Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}" {{ $class->class_name == $finder->Notice_class ? 'selected' : '' }}>
                                        {{ $class->class_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group mt-2 mb-2">
                                <select name="Notice_section" id="section_name_dropdown" class="form-control classid" value="{{ $finder->Notice_section}}">
                                    <option value="">Section</option>
                                </select>
                            </div>
                            
                            <div class="col-xl-12 col-lg-6 col-12 form-group  mt-2 mb-2">
                                <label for="">Write Message *</label>
                                <textarea name="Notice_Description" id="course_tilte" placeholder="Obtained Marks" required class="form-control">{{ $finder->Notice_Description }}</textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="submit" class="btn-fill-lg mt-3 mb-3 btn-gradient-yellow btn-hover-bluedark">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('teacher_panel.include.footer')  