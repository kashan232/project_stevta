<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Attendance Report</h1>
        <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Attendance Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($studentAttendance as $attendance)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $attendance->student_attendance_date }}</td>
            <td>{{ $attendance->student_attendance }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</body>  
</html> -->


<!-- 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Attendance Report</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Attendance Type</th>
                </tr>
            </thead>
            <tbody>
                @php
                $previousDate = null;
                @endphp
                @foreach($studentAttendance as $attendance)
                @if ($previousDate !== $attendance->student_attendance_date)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $attendance->student_attendance_date }}</td>
                    <td>{{ $attendance->student_attendance }}</td>
                </tr>
                @php
                $previousDate = $attendance->student_attendance_date;
                @endphp
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html> -->







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Document</title>
  </head>

<body>
    <div class="container">
        <h1>Attendance Report</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Attendance Type</th>
                </tr>
            </thead>
            <tbody>  
                @php
                $iteration = 1;
                $previousDate = null;
                @endphp
                @foreach($studentAttendance as $attendance)
                @if ($previousDate !== $attendance->student_attendance_date)
                <tr>
                    <td scope="row">{{ $iteration }}</td>
                    <td>{{ $attendance->student_attendance_date }}</td>
                    <td>{{ $attendance->student_attendance }}</td>
                </tr>
                @php
                $previousDate = $attendance->student_attendance_date;
                $iteration++;
                @endphp
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>





