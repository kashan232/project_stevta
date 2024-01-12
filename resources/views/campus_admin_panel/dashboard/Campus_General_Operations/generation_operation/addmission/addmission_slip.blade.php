<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .logo-name,
        .details {
            padding: 20px 0;
        }

        .logo-name img {
            width: 150px;
            height: 55px;
            margin: 10px 0;
            margin-left: 10px
        }

        .studen-img img {
            width: 100px;
            height: 100px;
        }

        .basic strong {
            font-size: 24px;
        }
    </style>
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    
                </div>
                <div class="col-lg-4 col-md-2 col-sm-2 mt-3 d-flex justify-content-start align-item-center">
                    <div class="logo-name">
                        <img src="/main_assets/img/logo3.png" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-5 mt-5 text-center">
                    <div class="logo-name">
                        <h3>YOUR SCHOOL NAME HERE</h3>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-5 col-sm-5 mt-5 d-flex justify-content-end align-item-center">
				<div class="details">
					<div>
						<strong>Address:</strong>
						<span>Adress herer</span>
					</div>
					<div>
						<strong>Phone Number:</strong>
						<span>Phone Number herer</span>
					</div>
					<div>
						<strong>Email:</strong>
						<span>Email herer</span>
					</div>
				</div>
			</div> --}}
            </div>
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center py-2" style="background: #000; color: #fff;">
                    <h4>Online Admission Receipt</h4>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="text-center border p-2">
                        <h6>Session Year</h6>
                        <span>{{ $admission_slip->session_year }}</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="text-center border p-2">
                        <h6>Enrollment Date</h6>
                        <span>{{ $admission_slip->enrollment_date }}</span>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2">

                </div>
                <div class="col-lg-5 col-md-5 col-sm-5  d-flex justify-content-end align-item-center ">
                    <div class="border p-2 text-center">
                        <div class="studen-img">
                            <img src="/campus/general_operations/student_image/{{ $admission_slip->student_img }}"
                                alt="student_image" />
                        </div>
                        <span>student Image</span>
                    </div>
                </div>
            </div>
            <div class="row border mt-3">
                <div class="col-lg-12 border-bottom py-2">
                    <h2>Basic Details</h2>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 py-4">
                    <div class="basic">
                        <strong>First Name</strong>
                        <br>
                        <span>{{ $admission_slip->first_name }}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 py-4">
                    <div class="basic">
                        <strong>Last Name</strong>
                        <br>
                        <span>{{ $admission_slip->last_name }}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 py-4">
                    <div class="basic">
                        <strong>Surname</strong>
                        <br>
                        <span>{{ $admission_slip->surname }}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 py-4">
                    <div class="basic">
                        <strong>Class</strong>
                        <br>
                        <span>{{ $admission_slip->class_name }}</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 py-4">
                    <div class="basic">
                        <strong>Gender</strong>
                        <br>
                        <span>{{ $admission_slip->gender }}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 py-4">
                    <div class="basic">
                        <strong>Date Of Birth</strong>
                        <br>
                        <span>{{ $admission_slip->birth_date }}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 py-4">
                    <div class="basic">
                        <strong>Mobile Number</strong>
                        <br>
                        <span>{{ $admission_slip->contact }}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 py-4">
                    <div class="basic">
                        <strong>Email</strong>
                        <br>
                        <span>{{ $admission_slip->student_email }}</span>
                    </div>
                </div>
            </div>
            <div class="row border mt-3">
                <div class="col-lg-12 border-bottom py-2">
                    <h2>Parent Detail</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 py-4">
                    <div class="basic">
                        <strong>Father Name/Guardian Name</strong>
                        <br>
                        <span>{{ $admission_slip->father_name }}</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 py-4">
                    <div class="basic">
                        <strong>Surname</strong>
                        <br>
                        <span>{{ $admission_slip->surname }}</span>
                    </div>
                </div>
            </div>
            <div class="row border text-center my-5">
                <div class="col-lg-12">
                    <span>This receipt is for online admission, computer generated it hence no signature is
                        required.</span>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
