<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusEmployee;
use App\Models\CampusSubjectsTeacher;
use App\Models\TeacherNoticeBoard;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NoticeboardController extends Controller
{
    public function Notice_board(Request $request)
    {
        $pagename = 'Notice Board';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');

        $all_notices = TeacherNoticeBoard::where('institute_id', '=', $institute_id)->where('campus_id', '=', $campus_id)->where('teacher_id', '=', $teacher_id)->where('teacher_name', '=', $teacher_name)->get();
        return view('teacher_panel.NoticeBoard.Notice_board', ['pagename' => $pagename, 'all_notices' => $all_notices]);
    }
    public function add_Notice(Request $request)
    {
        $pagename = 'Add Notice';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');
        $teacher = CampusEmployee::find($teacher_id);
        $teacher_name = $teacher->first_name;
        $get_classes_subjects = CampusSubjectsTeacher::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_name', $teacher_name)
            ->pluck('class_name');
        //   dd($get_classes_subjects); 

        $get_subjects_classes = CampusSubjectsTeacher::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_name', $teacher_name)
            ->pluck('class_name', 'subjects');
        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();

        return view(
            'teacher_panel.NoticeBoard.AddNotice',
            [
                'pagename' => $pagename, 'classes' => $classes, 'institute_id' => $institute_id, 'campus_id' => $campus_id, 'teacher_id' => $teacher_id, 'teacher_name' => $teacher_name, 'institute_id' => $institute_id, 'campus_id' => $campus_id,
                'get_classes_subjects' => $get_classes_subjects,
                'get_subjects_classes' => $get_subjects_classes,
            ]
        );
    }
    public function save_notice(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');
        $request->validate([
            'Notice_title' => 'required',
            'Notice_Link' => 'required',
            'class_name' => 'required',
            // 'Notice_section' => 'required',
            'subject_name' => 'required',
            'Notice_Publish_date' => 'required',
            'Notice_Description' => 'required',
        ]);
        $notice = TeacherNoticeBoard::create([
            'institute_id' => $institute_id,
            'campus_id' => $campus_id,
            'teacher_id' => $teacher_id,
            'teacher_name' => $teacher_name,
            'Notice_title' => $request->Notice_title,
            'Notice_Link' => $request->Notice_Link,
            'Notice_class' => $request->Notice_class,
            // 'Notice_section' => $request->Notice_class,
            // 'class_name' => $request->class_name,
            // 'subject_name' => $request->subject_name,
            'Notice_Publish_date' => $request->Notice_Publish_date,
            'Notice_Description' => $request->Notice_Description,
            'active_status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('Success', 'Notice added Successfuly');
    }
    // function for delete
    public function delete_notice(Request $request, $id)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');

        $finder = TeacherNoticeBoard::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)->where('teacher_id', $teacher_id)->find($id);
        if ($finder) {
            $finder->delete();
            $finder->update(['active_status' => 0]);
            return redirect()->back()->with('Success', 'Notice Deleted Successfully');
        } else {
            return redirect()->back()->with('Success', 'Notice Not Deleted');
        }
    }
    // function for edit 
    public function edit_notice(Request $request, $id)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');
        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();

        $finder = TeacherNoticeBoard::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)->where('teacher_id', $teacher_id)->find($id);
        $pagename = 'edit Notice';
        return view('teacher_panel.NoticeBoard.editNotice', ['finder' => $finder, 'pagename' => $pagename, 'classes' => $classes]);
    }
    // function for edit 
    public function update_notice(Request $request, $id)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');

        $finder = TeacherNoticeBoard::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)->where('teacher_id', $teacher_id)->find($id);
        TeacherNoticeBoard::where('id', $finder->id)->update([
            'institute_id' => $institute_id,
            'campus_id' => $campus_id,
            'teacher_id' => $teacher_id,
            'teacher_name' => $teacher_name,
            'Notice_title' => $request->Notice_title,
            'Notice_Link' => $request->Notice_Link,
            'Notice_class' => $request->Notice_class,
            'Notice_section' => $request->Notice_section,
            'Notice_Publish_date' => $request->Notice_Publish_date,
            'Notice_Description' => $request->Notice_Description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('Success', 'Notice Data Updated Successfully');
    }
}
