@include('screen_ready_for_uni.include.header')
<style>
    .form-control {
        display: block;
        width: 100%;
        height: calc(2.25rem + 11px) !important;
        padding: 0.375rem 0.75rem;
        font-size: 1.4rem !important;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    p {
        color: grey
    }

    #heading {
        text-transform: uppercase;
        color: #ffae01;
        ;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        /* background-color: #ECEFF1; */
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #ffae01;
        ;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #ffae01;
        ;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #ffae01;
        ;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #ffae01;
        ;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #ffae01;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #ffae01;
    }

    .progress {
        /* height: 20px */
    }

    .progress-bar {
        background-color: #ffae01;
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body mt-5">
                            <div class="row mt-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                        <h2 id="heading">Apply For Addmission</h2>
                                        <p>Fill all form field to go to next step</p>
                                        <form id="msform">
                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="account"><strong>Program Selection</strong>
                                                </li>
                                                <li id="personal"><strong>Personal Information</strong></li>
                                                <li id="payment"><strong>Upload Documents</strong></li>
                                                <li id="confirm"><strong>Finish</strong></li>
                                            </ul>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                    role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> <br> <!-- fieldsets -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Program Selection:</h2>
                                                        </div>
                                                        <div class="col-5">
                                                            <h2 class="steps">Step 1 - 4</h2>
                                                        </div>
                                                    </div>
                                                    <label class="fieldlabels">Degree:*</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">MS</option>
                                                        <option value="">Bs</option>
                                                        <option value="">Diploma</option>
                                                        <option value="">PHD</option>
                                                        <option value="">Mphil</option>
                                                    </select>
                                                    <label class="fieldlabels">Program:*</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Software Engineering</option>
                                                        <option value="">Information Technology</option>
                                                        <option value="">English Literature</option>
                                                        <option value="">Economics</option>
                                                        <option value="">Mass Communication</option>
                                                    </select>
                                                    <label class="fieldlabels">City:*</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Hyderabad</option>
                                                        <option value="">Karachi</option>
                                                        <option value="">LAhore</option>
                                                        <option value="">Punjab</option>
                                                    </select>
                                                    <label class="fieldlabels">Campus:*</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Hyderabad</option>
                                                        <option value="">Karachi</option>
                                                        <option value="">LAhore</option>
                                                        <option value="">Punjab</option>
                                                    </select>
                                                </div> <input type="button" name="next" class="next action-button"
                                                    value="Next" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Personal Information:</h2>
                                                        </div>
                                                        <div class="col-5">
                                                            <h2 class="steps">Step 2 - 4</h2>
                                                        </div>
                                                    </div>
                                                    <label class="fieldlabels">CNIC: *</label>
                                                    <input type="text" name="cnic"
                                                        placeholder="41303-3333333-6" />
                                                    <label class="fieldlabels">First Name: *</label> <input
                                                        type="text" name="fname" placeholder="First Name" />
                                                    <label class="fieldlabels">Last Name: *</label>
                                                    <input type="text" name="lname" placeholder="Last Name" />
                                                    <label class="fieldlabels">Gender: *</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                        <option value="">Custom</option>
                                                    </select>
                                                    <label class="fieldlabels">Date Of Birth: *</label>
                                                    <input type="Date" name="phno_2"
                                                        placeholder="Alternate Contact No." />
                                                    <label class="fieldlabels">Nationality: *</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Pakistan</option>
                                                        <option value="">Indian</option>
                                                    </select>
                                                    <label class="fieldlabels">Religion: *</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Islam</option>
                                                        <option value="">Hindu</option>
                                                    </select>
                                                    <label class="fieldlabels">Mother Tongue *</label>
                                                    <input type="text" name="cnic"
                                                        placeholder="Mother Tongue" />
                                                    <label class="fieldlabels">Contact Number*</label>
                                                    <input type="text" name="cnic"
                                                        placeholder="Contact Number" />
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Father/Guardian Information:</h2>
                                                        </div>
                                                    </div>
                                                    <label class="fieldlabels">Father Full Name: *</label>
                                                    <input type="text"
                                                        name="cnic"placeholder="Father Full Name" />
                                                    <label class="fieldlabels">Father CNIC: *</label>
                                                    <input type="text" name="cnic"placeholder="Father CNIC" />
                                                    <label class="fieldlabels">Father/Guardian Mobile: *</label>
                                                    <input type="text"
                                                        name="cnic"placeholder="Father/Guardian Mobile" />
                                                    <label class="fieldlabels">Name OF Guardian If Any: *</label>
                                                    <input type="text"
                                                        name="cnic"placeholder="Name OF Guardian" />
                                                    <label class="fieldlabels">Relationship with Guardian If Any:
                                                        *</label>
                                                    <input type="text"
                                                        name="cnic"placeholder="Relationship with Guardian" />
                                                    <label class="fieldlabels">Father/Guardian Monthly Income:
                                                        *</label>
                                                    <input type="text"
                                                        name="cnic"placeholder="Father Monthly Income" />

                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Contact Information:</h2>
                                                        </div>
                                                    </div>
                                                    <label class="fieldlabels">Contact Number*</label>
                                                    <input type="text" name="cnic"
                                                        placeholder="Contact NUmber" />
                                                    <label class="fieldlabels">Country*</label>
                                                    <input type="text" name="cnic" placeholder="Country" />
                                                    <label class="fieldlabels">City*</label>
                                                    <input type="text" name="cnic" placeholder="City" />
                                                    <label class="fieldlabels">Postal Address*</label>
                                                    <input type="text" name="cnic"
                                                        placeholder="Postal Address" />
                                                    <label class="fieldlabels">Permanent Address: *</label>
                                                    <input type="text"
                                                        name="cnic"placeholder="Permanent Address" />

                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Educational Information:</h2>
                                                        </div>
                                                    </div>
                                                    <label class="fieldlabels">Last Qualifiaction*</label>
                                                    <input type="text" name="cnic" placeholder="Inter" />
                                                    <label class="fieldlabels">Result Status*</label>
                                                    <input type="text" name="cnic" placeholder="A Grade" />
                                                    <label class="fieldlabels">Board/university*</label>
                                                    <input type="text" name="cnic" placeholder="BISEH" />
                                                    <label class="fieldlabels">Roll No*</label>
                                                    <input type="text" name="cnic" placeholder="41312" />
                                                    <label class="fieldlabels">Registration No: *</label>
                                                    <input type="text" name="cnic"placeholder="56478" />
                                                    <label class="fieldlabels">Exam Type: *</label>
                                                    <input type="text" name="cnic"placeholder="Regular" />
                                                    <label class="fieldlabels">Total Marks/ CGPA: *</label>
                                                    <input type="text" name="cnic"placeholder="1100" />
                                                    <label class="fieldlabels">Obtained Marks/ CGPA: *</label>
                                                    <input type="text" name="cnic"placeholder="900" />

                                                </div> <input type="button" name="next"
                                                    class="next action-button" value="Next" /> <input
                                                    type="button" name="previous"
                                                    class="previous action-button-previous" value="Previous" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Upload Documents:</h2>
                                                        </div>
                                                        <div class="col-5">
                                                            <h2 class="steps">Step 3 - 4</h2>
                                                        </div>
                                                    </div>
                                                    <label class="fieldlabels">Upload Your Photo:</label>
                                                    <input type="file" name="pic" accept="image/*">
                                                    <label class="fieldlabels">Upload Signature Photo:</label>
                                                    <input type="file" name="pic" accept="image/*">
                                                    <label class="fieldlabels">CNIC Front Photo:</label>
                                                    <input type="file" name="pic" accept="image/*">
                                                    <label class="fieldlabels">CNIC Back Photo:</label>
                                                    <input type="file" name="pic" accept="image/*">
                                                    <label class="fieldlabels">Matriculation Mark Sheet:</label>
                                                    <input type="file" name="pic" accept="image/*">
                                                    <label class="fieldlabels">Intermediate Mark Sheet:</label>
                                                    <input type="file" name="pic" accept="image/*">
                                                    <label class="fieldlabels">Intermediate Certificate:</label>
                                                    <input type="file" name="pic" accept="image/*">
                                                    <label class="fieldlabels">Domicle:</label>
                                                    <input type="file" name="pic" accept="image/*">
                                                </div>
                                                <input type="button" name="next" class="next action-button"
                                                    value="Submit" /> <input type="button" name="previous"
                                                    class="previous action-button-previous" value="Previous" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Finish:</h2>
                                                        </div>
                                                        <div class="col-5">
                                                            <h2 class="steps">Step 4 - 4</h2>
                                                        </div>
                                                    </div> <br><br>
                                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                                                    <br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-3"> <img src="assets/tick.png"
                                                                class="fit-image"> </div>
                                                    </div> <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-7 text-center">
                                                            <h5 class="purple-text text-center">You Have Successfully
                                                                Enrolled</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>
        @include('screen_ready_for_uni.include.footer')
        <script>
            $(document).ready(function() {
                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;
                var current = 1;
                var steps = $("fieldset").length;
                setProgressBar(current);
                $(".next").click(function() {
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                });
                $(".previous").click(function() {
                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();
                    //Remove class active
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                    //show the previous fieldset
                    previous_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;
                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            previous_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(--current);
                });
                function setProgressBar(curStep) {
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                    $(".progress-bar")
                        .css("width", percent + "%")
                }
                $(".submit").click(function() {
                    return false;
                })
            });
        </script>
        <script>
            $('#select_class').on('change', function() {
                var class_name = $(this).val();
                $.ajax({
                    url: '/class-wise-section',
                    method: 'get',
                    data: {
                        class_name: class_name,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $("#section_name_dropdown").empty();
                        $.each(response, function(index, sectionName) {
                            if ($("#section_name_dropdown option[value='" + sectionName + "']")
                                .length === 0) {
                                $("#section_name_dropdown").append('<option value="' + sectionName +
                                    '">' + sectionName + '</option>');
                            }
                        });
                    },
                    error: function(xhr, status) {
                        console.log("Error: ", xhr, status);
                    }
                });
            });
        </script>