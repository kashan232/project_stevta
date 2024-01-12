<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\StudentAddmission;
use App\Models\CampusTeacherStudentAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusViewAttendanceController extends Controller
{
    //

    public function view_CampusAttendenceInstitute(Request $request)
    {
        $pagename = 'View Attendance';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

    //    dd( $Institute_admin_id, $campus_id);

        
        $classes = CampusClass::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();

        $get_all_classes = CampusClass::where('institute_id', '=' , $Institute_admin_id)->where('campus_id', '=' , $campus_id)->get();
        // dd($get_all_classes);

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.attendance.view_attendance', [
            'pagename' => $pagename,
            'classes' =>  $classes,
            'get_all_classes' => $get_all_classes,
        ]);
    }





    // new 

    public function fetchCampusattendance_institute(Request $request, $class_name)
    {
        $pagename = 'Attendance Record';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $fetch_students_by_class = StudentAddmission::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('class_name', $class_name)
            ->get();

        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;

        // dd( $currentYear, $currentMonth);

        foreach ($fetch_students_by_class as $student) {
            // Get the total number of days in the current month
            $totalDaysInMonth = Carbon::createFromDate($currentYear, $currentMonth)->daysInMonth;


            // dd($totalDaysInMonth);

            $student->presentDays = CampusTeacherStudentAttendance::where('institute_id', $Institute_admin_id)
                ->where('campus_id', $campus_id)
                ->where('student_roll_number', $student->gr)
                ->where('student_attendance', 'Present') 
                ->whereYear('student_attendance_date', $currentYear)
                ->whereMonth('student_attendance_date', $currentMonth)
                ->count();

            // dd($student->presentDays);  
            // dd($student); 

            // Calculate attendance percentage and round to 2 decimal places
            $student->attendancePercentage = ($totalDaysInMonth > 0)
                ? round(($student->presentDays / $totalDaysInMonth) * 100, 2)
                : 0;
        }

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.attendance.attendance_record', [
            'pagename' => $pagename,
            'fetch_students_by_class' => $fetch_students_by_class,
        ]);
    }
}
