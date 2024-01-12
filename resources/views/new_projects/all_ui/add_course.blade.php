@include('new_projects.include.header')
<div id="preloader"></div>
<style>
    #course_uploaded {
        display: none;
    }
    #course_uploaded_error {
        display: none;
    }
</style>
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        ALL Course Material
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="alert alert-success" id="course_uploaded"></div>
                    <div class="alert alert-danger" id="course_uploaded_error"></div>
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Upload Course Material</h3>
                        </div>

                    </div>

                    <form id="course_uploaded_document" class="new-added-form" action="" method="POST" 
                    enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    
                                    
                                </select>
                            </div> -->

                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                    <option value="">Section</option>
                                </select>
                            </div> -->

                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="subject_name" id="subject_name_dropdown" class="form-control classid">
                                    <option value="">Select a Subject</option>
                                </select>
                            </div>  -->
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    
                                    <option value=""></option>
                                   
                                </select>
                            </div>



                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="subject_name" class="form-control" id="individual_subjects">
                                    <option>Select Subject</option>
                                </select>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="text" name="course_title" id="course_title"
                                    placeholder="Course Material Title" required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <input type="date" name="upload_date" id="user_name" placeholder=".." required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group" for="uploaded_document">
                                <input type="file" id="uploaded_document" name="uploaded_document" class="form-control" id="uploaded_document">
                                @error('uploaded_document')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5 mb-5 mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Submit
                            </button>
                        </div>
                        <div id="error_messages"></div>
                        
                    </form>

                </div>
            </div>
        </div>

    </div>
    @include('new_projects.include.poweredby')

    <!-- Page Area End Here -->
</div>
@include('new_projects.include.footer')

