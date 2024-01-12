@include('new_projects.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <ul>
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">Student List</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title Add-student m-auto justify-content-center">
                                    <h3>Student Addmission Form</h3>
                                </div>
                            </div>
                            <form class="new-added-form" action="" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Batch*</label>
                                        <select name="batch" class="form-control" id="">
                                            <option value="">Select Batch</option>
                                                <option value="">
                                                    </option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>First Name *</label>
                                        <input type="text" name="first_name" id="first_name" placeholder="First Name"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Last Name *</label>
                                        <input type="text" name="last_name" id="last_name" placeholder="Last name"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Surname*</label>
                                        <input type="text" name="surname" id="surname" placeholder="Surname"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Gender*</label>
                                        <select class="form-control" id="inputGroupSelect02" name="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Custom</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Religion*</label>
                                        <input type="text" name="religion" id="religion" placeholder="Religion"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Date of Birth *</label>
                                        <input type="date" name="birth_date" id="birth_date" class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Date of Birth Certificate *</label>
                                        <input type="file" accept="image/*" name="birth_certificate_img"
                                            class="form-control">
                                    </div>
                                </div>
                                <!-- Parents Details -->
                                <div class="heading-layout1">
                                    <div class="item-title Add-student m-auto justify-content-center">
                                        <h3>Parents Details</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Father Name *</label>
                                        <input type="text" name="father_name" id="father_name"
                                            placeholder="Father Name" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Contact *</label>
                                        <input type="text" name="contact" id="contact" placeholder="Father contact"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                        <label>Address*</label>
                                        <input type="text" name="Address" id="Address" placeholder=" Address"
                                            class="form-control" />
                                    </div>
                                </div>
                                <!-- Account Details -->
                                <div class="heading-layout1">
                                    <div class="item-title Add-student m-auto justify-content-center">
                                        <h3>Bank Account Details</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Account Name*</label>
                                        <input type="text" name="account_name" id="account_name"
                                            placeholder="Account Name" class="form-control" required />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Account Number*</label>
                                        <input type="number" name="account_number" id="account_number"
                                            placeholder="Account Number" class="form-control" required />
                                    </div>
                                </div>
                                <!-- Acdemiv info -->
                                <div class="heading-layout1">
                                    <div class="item-title Add-student m-auto justify-content-center">
                                        <h3>Academic Details</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Enrollment Date *</label>
                                        <input type="date" name="enrollment_date" id="enrollment_date"
                                            placeholder="enrollment Date" class="form-control" />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Class *</label>
                                        <select name="class_name" class="form-control" id="select_class">
                                            <option value="">Select a Class</option>
                                                <option value="">
                                                </option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Section*</label>
                                        <select name="section_name" id="section_name_dropdown" class="form-control">
                                            <option value="">Section</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Scholarship Awarded(percentage)*</label>
                                        <input type="text" name="scholarship_percentage"
                                            id="scholarship_percentage" placeholder="Scholarship Percentage"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Student Picture*</label>
                                        <input type="file" accept="image/*" name="student_img" id="student_img"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Covid Vaccination Certificate*</label>
                                        <input type="file" accept="image/*" name="covid_certificate_img"
                                            id="covid_certificate" placeholder="Enter  Religion"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Last School*</label>
                                        <input type="text" name="last_school" id="last_school"
                                            placeholder="Last School" class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Leaving Certificate*</label>
                                        <input type="file" accept="image/*" name="leaving_certificate_img"
                                            id="leaving_certificate_img" placeholder="..." class="form-control" />
                                    </div>
                                </div>
                                <!-- Login Credential -->
                                <div class="heading-layout1">
                                    <div class="item-title Add-student m-auto justify-content-center">
                                        <h3>Login Credentials</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Email*</label>
                                        <input type="email" name="student_email" id="student_email"
                                            placeholder="Email" class="form-control" />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Password*</label>
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            class="form-control" />
                                    </div>
                                    <div class="col-12 form-group mg-t-8 text-center">
                                        <button type="submit"
                                            class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            Save
                                        </button>
                                    </div>
                                </div>

                            </form>


                        </div>

                    </div>

                </div>

            </div>
            <!-- Page Area End Here -->
        @include('new_projects.include.poweredby')
        </div>
        
    

        @include('new_projects.include.footer')