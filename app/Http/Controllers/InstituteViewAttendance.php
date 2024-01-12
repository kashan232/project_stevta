<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusTeacherStudentAttendance;
use App\Models\StudentAddmission;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class InstituteViewAttendance extends Controller
{
    public function view_attendance_institute(Request $request)
    {
        // dd($request);
        $pagename = 'View Attendance';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $classes = CampusClass::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        // dd($classes);
        $campusName = $request->session()->get('campus_name');
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.attendance.view_attendance', [
            'pagename' => $pagename,
            'classes' =>  $classes,
            'campusName' => $campusName,

        ]);
    }
    public function fetch_attendance_institute(Request $request, $class_name)
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
    public function studentattendanceview(Request $request, $id)
    {
        $pagename = 'Attendance Record';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $studentAttendance = CampusTeacherStudentAttendance::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->where('student_roll_number', $id)->get();
        // $attendance_records = CampusTeacherStudentAttendance::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->where('class_name', '=', $class_name)->get();

        // dd($studentAttendance); student_attendance_view.blade.php
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.attendance.student_attendance_view', [
            'pagename' => $pagename,
            'studentAttendance' => $studentAttendance,
        ]);
    }
    public function exportPDF(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $attendance_type = $request->input('attendance_type');

        $query = CampusTeacherStudentAttendance::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id);

        if ($start_date && $end_date) {
            $query->whereBetween('student_attendance_date', [$start_date, $end_date]);
        }
        if ($attendance_type == 'All') {
            $query->where('student_attendance', $attendance_type);
        }
        $studentAttendance = $query->get();

        $pdf = PDF::loadView('pdf.attendance', [
            'studentAttendance' => $studentAttendance,
        ]);
        return $pdf->download('attendance_report.pdf');
    }
}
