<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewProjectController extends Controller
{
    public function student_addmission(Request $request)
    {
        $pagename = 'Add Addmission';
        return view('new_projects.all_ui.student_addmission', [
            'pagename' => $pagename,
        ]);
    }
    public function addmission_list(Request $request)
    {
        $pagename = 'Addmission List';
        return view('new_projects.all_ui.addmission_list', [
            'pagename' => $pagename,
        ]);
    }
    public function student_slip(Request $request)
    {
        $pagename = 'student Slip';
        return view('new_projects.all_ui.student_slip', [
            'pagename' => $pagename,
        ]);
    }
    public function view_detail(Request $request)
    {
        $pagename = 'View Detail';
        return view('new_projects.all_ui.view_detail', [
            'pagename' => $pagename,
        ]);
    }
    public function discipline(Request $request)
    {
        $pagename = 'Discipline Record';
        return view('new_projects.all_ui.discipline', [
            'pagename' => $pagename,
        ]);
    }
    public function add_dairy(Request $request)
    {
        $pagename = 'Add Dairy';
        return view('new_projects.all_ui.add_dairy', [
            'pagename' => $pagename,
        ]);
    }
    public function all_diary(Request $request)
    {
        $pagename = 'All Diary';
        return view('new_projects.all_ui.all_diary', [
            'pagename' => $pagename,
        ]);
    }
    public function add_course(Request $request)
    {
        $pagename = 'Add Course';
        return view('new_projects.all_ui.add_course', [
            'pagename' => $pagename,
        ]);
    }
    public function all_course(Request $request)
    {
        $pagename = 'All Course';
        return view('new_projects.all_ui.all_course', [
            'pagename' => $pagename,
        ]);
    }
    public function choose_attendance_detail(Request $request)
    {
        $pagename = 'Choose Attendance';
        return view('new_projects.all_ui.choose_attendance_detail', [
            'pagename' => $pagename,
        ]);
    }
    public function generate_student_attendance(Request $request)
    {
        $pagename = 'View Attendance';
        return view('new_projects.all_ui.generate_student_attendance', [
            'pagename' => $pagename,
        ]);
    }
    public function choose_attendance_record(Request $request)
    {
        $pagename = 'choose Attendance record';
        return view('new_projects.all_ui.choose_attendance_record', [
            'pagename' => $pagename,
        ]);
    }
    public function list_student_attendance(Request $request)
    {
        $pagename = 'list student attendance';
        return view('new_projects.all_ui.list_student_attendance', [
            'pagename' => $pagename,
        ]);
    }
    public function choose_timetable(Request $request)
    {
        $pagename = 'list student attendance';
        return view('new_projects.all_ui.choose_timetable', [
            'pagename' => $pagename,
        ]);
    }
    public function timetable_list(Request $request)
    {
        $pagename = 'list student attendance';
        return view('new_projects.all_ui.timetable_list', [
            'pagename' => $pagename,
        ]);
    }
    public function exam(Request $request)
    {
        $pagename = 'list student attendance';
        return view('new_projects.all_ui.exam', [
            'pagename' => $pagename,
        ]);
    }
    public function s_profile(Request $request)
    {
        $pagename = 'list student attendance';
        return view('new_projects.all_ui.s_profile', [
            'pagename' => $pagename,
        ]);
    }
    public function select_courses(Request $request)
    {
        $pagename = 'list student attendance';
        return view('new_projects.all_ui.select_courses', [
            'pagename' => $pagename,
        ]);
    }
    public function my_course(Request $request)
    {
        $pagename = 'my_course';
        return view('new_projects.all_ui.my_course', [
            'pagename' => $pagename,
        ]);
    }
    public function student_class_schedule(Request $request)
    {
        $pagename = 'student_class_schedule';
        return view('new_projects.all_ui.student_class_schedule', [
            'pagename' => $pagename,
        ]);
    }
    public function student_result(Request $request)
    {
        $pagename = 'student_class_schedule';
        return view('new_projects.all_ui.studentresult', [
            'pagename' => $pagename,
        ]);
    }
    public function account_receivable(Request $request)
    {
        $pagename = 'student_class_schedule';
        return view('new_projects.all_ui.account_receivable', [
            'pagename' => $pagename,
        ]);
    }
    public function invoice(Request $request)
    {
        $pagename = 'student_class_schedule';
        return view('new_projects.all_ui.invoice', [
            'pagename' => $pagename,
        ]);
    }
    public function payments(Request $request)
    {
        $pagename = 'student_class_schedule';
        return view('new_projects.all_ui.payments', [
            'pagename' => $pagename,
        ]);
    }
    public function receipt(Request $request)
    {
        $pagename = 'student_class_schedule';
        return view('new_projects.all_ui.receipt', [
            'pagename' => $pagename,
        ]);
    }
}
