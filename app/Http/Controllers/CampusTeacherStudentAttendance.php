<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusTeacherStudentAttendance as ModelsCampusTeacherStudentAttendance;
use App\Models\StudentAddmission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampusTeacherStudentAttendance extends Controller
{
    public function student_attendance_details(Request $request)
    {
        $pagename = 'Students Attendance';
        return view(
            'teacher_panel.attendance_work.details_student_attendance',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function student_attendance(Request $request)
    {
        $pagename = 'Attendance';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');

        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)->get();
        return view('teacher_panel.attendance_work.student_attendance.all_student_attendance',
            [
                'pagename' => $pagename,
                'classes' => $classes,
            ]
        );
    }
    public function fetch_student_attendance(Request $request)
    {

        $pagename = 'List Student';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $class_name = $request->input('class_name');
        $section_name = $request->input('section_name');
        $attendance_date = $request->input('attendance_date');
        $teacher_id = $request->session()->get('teacher_id');

        $all_students = StudentAddmission::where('institute_id', $institute_id)
        ->where('campus_id', $campus_id)
        ->where('class_name', $class_name)
        ->where('section_name', $section_name)
        ->get();
       
        $attendanceData = DB::table('campus_teacher_student_attendances')
        ->where('institute_id', $institute_id)
        ->where('campus_id', $campus_id)
        ->where('class_name', $class_name)
        ->where('section_name', $section_name)
        ->where('student_attendance_date', $attendance_date)
        ->pluck('student_attendance', 'student_id')
        ->toArray();
        return view('teacher_panel.attendance_work.student_attendance.view_all_student_attendance', [
            'pagename' => $pagename,
            'all_students' => $all_students,
            'class_name' => $class_name,
            'section_name' => $section_name,
            'attendance_date' => $attendance_date,
            'attendanceData' => $attendanceData,
        ]);
    }

    public function store_student_attendance(Request $request)
    {
        // dd($request);

        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $studentIds = $request->input('student_id');
        $student_roll_numbers = $request->input('student_roll_number'); // Update the variable name to be plural
        $className = $request->input('class_name');
        $sectionName = $request->input('section_name');
        $attendanceDate = $request->input('attendance_date');
        $studentNames = $request->input('student_name');
        $attendanceData = $request->input('attendance');
        
        foreach ($studentIds as $index => $studentId) {
            $attendance = $attendanceData[$studentId];
            $rollNumber = $student_roll_numbers[$index] ?? null;

            $recordExists = ModelsCampusTeacherStudentAttendance::where('student_id', $studentId)
            ->where('student_attendance_date', $attendanceDate)
            ->exists();
            
            if ($recordExists) {
                ModelsCampusTeacherStudentAttendance::where('student_id', $studentId)
                ->where('student_attendance_date', $attendanceDate)
                ->update([
                    'student_attendance' => $attendance,
                ]);
            }else {
                ModelsCampusTeacherStudentAttendance::create([
                    'institute_id' => $institute_id,
                    'campus_id' => $campus_id,
                    'teacher_id' => $teacher_id,
                    'class_name' => $className,
                    'section_name' => $sectionName,
                    'admission_no' => $studentId,
                    'student_roll_number' => $rollNumber,
                    'student_id' => $studentId,
                    'student_name' => $studentNames[$index],
                    'student_attendance_date' => $attendanceDate,
                    'student_attendance' => $attendance,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
        return Redirect()->back()->with('attendance_save', 'Attendance create successfully!');
    }
    public function student_attendance_record(Request $request)
    {
        $pagename = 'Attendance Record';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();
        return view('teacher_panel.attendance_work.attendance_record.all_student_attendance_record',
            [
                'pagename' => $pagename,
                'classes' => $classes,
            ]
        );
    }
    public function fetch_student_attendance_record(Request $request)
    {
        $pagename = 'Attendance Record';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $class_name = $request->input('class_name');
        $section_name = $request->input('section_name');
        $attendance_date = $request->input('attendance_date');

        $attendance_records = ModelsCampusTeacherStudentAttendance::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_id', $teacher_id)
            ->where('class_name', $class_name)
            ->where('section_name', $section_name)
            ->where('student_attendance_date', $attendance_date)
            ->get();

        return view('teacher_panel.attendance_work.attendance_record.list_student_attendance_record',
            [
                'pagename' => $pagename,
                'attendance_records' => $attendance_records,
            ]
        );  
    }
}
