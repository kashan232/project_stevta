<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusTeacherStudentLeaveApproval;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusTeacherStudentLeaveApprovalController extends Controller
{
    public function add_leave(Request $request)
    {
        $pagename = 'Students Leave Approval';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');


        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();

        return view('teacher_panel.attendance_work.leave_approval.add_leave',
            [
                'pagename' => $pagename,
                'classes' => $classes,
            ]
        );
    }
    public function store_add_leave(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');

        CampusTeacherStudentLeaveApproval::create([
            'institute_id'  => $institute_id,
            'campus_id'     => $campus_id,
            'teacher_id'    => $teacher_id,
            'teacher_name'  => $teacher_name,
            'confirmation_by'  => $teacher_name,
            'class_name'    => $request->class_name,
            'section_name'  => $request->section_name,
            'student_name'  => $request->student_name,
            'apply_date'    => $request->apply_date,
            'from_date'     => $request->from_date,
            'to_date'       => $request->to_date,
            'leave_reason'  => $request->leave_reason,
            'leave_status'  => $request->leave_status,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),  
        ]);
        
        return Redirect()->back()->with('success-message-leave-add', 'Leave added successfully!');
    }
    public function all_leave(Request $request)
    {
        $pagename = 'All Leave';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');

        $all_leaves = CampusTeacherStudentLeaveApproval::where('institute_id', '=', $institute_id)->where('campus_id', '=', $campus_id)
            ->where('teacher_id', '=', $teacher_id)->get();

        return view('teacher_panel.attendance_work.leave_approval.all_leave',
      [
               'pagename'   => $pagename,
               'all_leaves' => $all_leaves,
            ]
        );
    }
    public function edit_leave(Request $request, $id)
    {
        $pagename = 'Edit Leave';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');

        $leave_details = CampusTeacherStudentLeaveApproval::findOrFail($id);
        $leave = CampusTeacherStudentLeaveApproval::where('institute_id', '=', $institute_id)->where('campus_id', '=', $campus_id)
            ->where('teacher_id', '=', $teacher_id)->get();


        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();
        return view(
            'teacher_panel.attendance_work.leave_approval.edit_leave',
            [
                'pagename'      => $pagename,
                'classes'       => $classes,
                'leave_details' => $leave_details,
                'leave'         => $leave,
            ]
        );
    }
    public function update_leave(Request $request, $id)
    {
        CampusTeacherStudentLeaveApproval::where('id', $id)->update([
            'class_name'    => $request->class_name,
            'section_name'  => $request->section_name,
            'student_name'  => $request->student_name,
            'apply_date'    => $request->apply_date,
            'from_date'     => $request->from_date,
            'to_date'       => $request->to_date,
            'leave_reason'  => $request->leave_reason,
            'leave_status'  => $request->leave_status,
            'updated_at'=> Carbon::now(),
        ]);
        return Redirect()->back()->with('update-success-message', 'Leave updated Successfully');
    }
    public function delete_leave($id)
    {
        $del = CampusTeacherStudentLeaveApproval::find($id)->delete();
        return redirect()->back()->with('delete-message-leave', 'Leave Has Been Deleted Successsfully');
    }
}
