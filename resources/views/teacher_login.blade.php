<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Teacher Login </title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background: #4070f4; */
			background: url('/teacher/header-bg.png');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
        }

        .wrapper {
            position: relative;
            max-width: 430px;
            width: 100%;
            background: #fff;
            padding: 34px;
            border-radius: 6px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .wrapper h2 {
            position: relative;
            font-size: 22px;
            font-weight: 600;
            color: #333;
        }

        .wrapper h2::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 28px;
            border-radius: 12px;
            background: #4070f4;
        }

        .wrapper form {
            margin-top: 30px;
        }

        .wrapper form .input-box {
            height: 52px;
            margin: 18px 0;
        }

		form .input-box select {
            height: 100%;
            width: 100%;
            outline: none;
            padding: 0 15px;
            font-size: 17px;
            font-weight: 400;
            color: #333;
            border: 1.5px solid #C7BEBE;
            border-bottom-width: 2.5px;
            border-radius: 6px;
            transition: all 0.3s ease;
			background: #fff;
        }

        form .input-box input {
            height: 100%;
            width: 100%;
            outline: none;
            padding: 0 15px;
            font-size: 17px;
            font-weight: 400;
            color: #333;
            border: 1.5px solid #C7BEBE;
            border-bottom-width: 2.5px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .input-box input:focus,
        .input-box input:valid {
            border-color: #4070f4;
        }

        form .policy {
            display: flex;
            align-items: center;
        }

        form h3 {
            color: #707070;
            font-size: 14px;
            font-weight: 500;
            margin-left: 10px;
        }

        .input-box.button input {
            color: #fff;
            letter-spacing: 1px;
            border: none;
            background: #4070f4;
            cursor: pointer;
        }

        .input-box.button input:hover {
            background: #0e4bf1;
        }
        form .text h3 {
            color: #333;
            width: 100%;
            text-align: center;
        }
        form .text h3 a {
            color: #4070f4;
            text-decoration: none;
        }
        form .text h3 a:hover {
            text-decoration: underline;
        }
		.alert 
		{
			position: relative;
			padding: 0.75rem 1.25rem;
			margin-bottom: 1rem;
			border: 1px solid transparent;
			border-radius: 0.25rem;
		}
		.alert-danger {
			color: #721c24;
			background-color: #f8d7da;
			border-color: #f5c6cb;
		}
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Teacher Login</h2>
        <form action="{{ route('teacher-logged') }}" method="POST">
            @csrf
			@if(@session('wrong-deprt'))
				<div class="alert alert-danger">
					<strong>Opps!</strong> {{ @session('wrong-deprt') }}
				</div>
			@endif
			@if(@session('wrong-pswd'))
				<div class="alert alert-danger">
					<strong>Opps!</strong> {{ @session('wrong-pswd') }}
				</div>
			@endif
            <input type="hidden" name="institute_id_change" id="institute_id_change">
            <div class="input-box">
				<select name="institute_id" id="institue_id">
					@foreach ($registered_institutes as $registered_institute)
						<option value="{{ $registered_institute->id }}">{{ $registered_institute->institute_name }}</option>
					@endforeach
				</select>
            </div>
            <div class="input-box">
				<select name="campus_id" id="campus_id_dropdwn">
					<option value="">Campuses</option>
				</select>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email Here" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password Here" required>
            </div>
           
            <div class="input-box button">
                <input type="Submit" value="Login">
            </div>
            <div class="text">
                {{-- <h3>Forget Password? <a href="#"></a></h3> --}}
            </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // Set the default value of the hidden input field to the first institute ID
        $('#institute_id_change').val($('#institue_id').val());

        // Trigger the AJAX request when the page loads to fetch campuses for the initial selected institute
        fetchCampuses();

        $('#institue_id').on('change', function() {
            var selectedInstituteId = $(this).val();
            $('#institute_id_change').val(selectedInstituteId);
            fetchCampuses();
        });

        function fetchCampuses() {
            var institute_id_change = $('#institute_id_change').val();
            $.ajax({
                url: '/teacher-institue-cmpus',
                method: 'get',
                data: {
                    institute_id_change: institute_id_change,
                    _token: '{{csrf_token()}}'
                },
                success: function(response) {
                    $("#campus_id_dropdwn").html(response);
                },
                error: function() {
                    alert("Error");
                }
            });
        }
    }); 
</script>

</body>
</html>

{{-- $('#institue_id').on('change',function(){
    //      var institue_id=$(this).val();
    //      $.ajax({
    //            url: '/teacher-institue-cmpus',
    //            method: 'get',
    //            data:{institue_id : institue_id,
    //              _token: '{{csrf_token()}}'
    //            },
    //            success: function(response) {
    //                $("#campus_id_dropdwn").html(response);
    //            },
    //            error: function() {
    //                alert("Error: ");
    //            }
    //        });
    //    }); --}}


