<!DOCTYPE html>
<html class="no-js" lang="">

<head> 
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>IESS MAIN</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/main_assets/img/favicon.png" />
    <!-- Normalize CSS -->
    
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="/main_assets/css/normalize.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="/main_assets/css/main.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/main_assets/css/bootstrap.min.css" />
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/main_assets/css/all.min.css" />
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="/main_assets/css/fullcalendar.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/main_assets/css/animate.min.css" />
    <!-- dataTables - css -->
    <link rel="stylesheet" href="/main_assets/css/jquery.dataTables.min.css" />
    <!--datepicke css  -->
    <link rel="stylesheet" href="/main_assets/css/datepicker.min.css" />
    <!--select2 css  -->
    <link rel="stylesheet" href="/main_assets/css/select2.min.css" />

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/main_assets/fonts/flaticon.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/main_assets/css/style.css" />

    <!-- Modernize js -->
    <script src="main_assets/js/modernizr-3.6.0.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var room = 1;

        function education_fields() {
            room++;
            var objTo = document.getElementById('education_fields')
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "removeclass" + room);
            var rdiv = 'removeclass' + room;
            divtest.innerHTML =
                '<div style="display:flex"><div class="col-xl-5 col-lg-5 col-12 form-group"><label>Room no * </label><input type="number" id="Degree" name="Degree[]" value="" placeholder="Total Floors in Hostel" class="form-control"/></div><div class="col-xl-5 col-lg-5 col-12 form-group"> <label>Total beds in room *</label><input type="number" id="Degree" name="Degree[]" value="" placeholder="Total Floors in Hostel" class="form-control"/></div><div class="col-xl-2 col-lg-2 col-12" style="margin-top:40px"><button class="btn btn-danger py-4 px-5" type="button" onclick="remove_education_fields(' +
                room + ');"><i class="fa-solid fa-minus"></i></button></div></div>'

            objTo.appendChild(divtest)
        }

        function remove_education_fields(rid) {
            $('.removeclass' + rid).remove();
        }
    </script>
    <script src="https://use.typekit.net/hoy3lrg.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    {{-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'> --}}
</head>

<body>
