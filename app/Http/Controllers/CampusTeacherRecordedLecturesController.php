<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusEmployee;
use App\Models\CampusSubject;
use App\Models\CampusSubjectsTeacher;
use App\Models\CampusTeacherRecordedLectures;
use App\Models\Class_Section;
use App\Models\StudentAddmission;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusTeacherRecordedLecturesController extends Controller
{
    public function recorded_lectures(Request $request)
    {
        $pagename = 'recorded lectures';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');

        $Recorded_Lectures = CampusTeacherRecordedLectures::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_id', $teacher_id)
            ->get();
        return view('teacher_panel.recorded_lectures.recorded_lectures',
            [
                'pagename' => $pagename,
                'Recorded_Lectures' => $Recorded_Lectures,

            ]
        );
    }
    public function add_recorded_lectures(Request $request)
    {
        $pagename = 'add recorded lectures';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');

        $teacher = CampusEmployee::find($teacher_id);
        // dd($teacher); 

        $teacher_name = $teacher->first_name;
        // dd($teacher_name); 
        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();
        $get_classes_subjects = CampusSubjectsTeacher::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_name', $teacher_name)
            ->pluck('class_name');
        //   dd($get_classes_subjects); 

        $get_subjects_classes = CampusSubjectsTeacher::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_name', $teacher_name)
            ->pluck('class_name', 'subjects');

        // dd($get_subjects_classes);
        return view('teacher_panel.recorded_lectures.add_recorded_lectures',
            [
                'pagename' => $pagename,
                'classes' => $classes,
                'get_classes_subjects' => $get_classes_subjects,
                'get_subjects_classes' => $get_subjects_classes,
            ]
        );
    }
    public function store_recorded_lectures(Request $request)
    {
        // dd($request);

        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');

        CampusTeacherRecordedLectures::create([
            'institute_id' => $institute_id,
            'campus_id' => $campus_id,
            'teacher_id' => $teacher_id,
            'class_name' => $request->class_name,
            // 'section_name' => $request->section_name,
            'subject_name' => $request->subject_name,
            'lecture_title' => $request->lecture_title,
            'lecture_upld_dte' => $request->lecture_upld_dte,
            'lecture_link' => $request->lecture_link,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success-message-lecture', 'Recorded lectures upload successfully!');
    }
    public function teacher_cls_wise_sectn(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $class_name = $request->input('class_name');
        $data = Class_Section::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('class_name', $request->class_name)->pluck('section_name')->toArray();

        return response()->json($data);
    }

    public function teacher_sectn_wise_subjct(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $section_name = $request->section_name;
        $class_name = $request->class_name;

        $data = CampusSubject::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('section_name', $section_name)
            ->where('class_name', $class_name)
            ->get();

        return response()->json($data);
    }
    public function teacher_sectn_wise_student(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $section_name = $request->section_name;
        $class_name = $request->class_name;

        $data = StudentAddmission::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('section_name', $section_name)
            ->where('class_name', $class_name)
            ->get();


        return response()->json($data);
    }

    public function edit_recorded_lectures(Request $request, $id)
    {
        $pagename = 'recorded lectures';

        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');


        $lecture_details = CampusTeacherRecordedLectures::findOrFail($id);

        $teacher_id = $request->session()->get('teacher_id');

        $teacher = CampusEmployee::find($teacher_id);
        // dd($teacher); 

        $teacher_name = $teacher->first_name;
        // dd($teacher_name); 
        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();
        $get_classes_subjects = CampusSubjectsTeacher::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_name', $teacher_name)
            ->pluck('class_name');
        //   dd($get_classes_subjects); 

        $get_subjects_classes = CampusSubjectsTeacher::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_name', $teacher_name)
            ->pluck('class_name', 'subjects');


        return view('teacher_panel.recorded_lectures.edit_recorded_lectures',
            [
                'pagename' => $pagename,
                'lecture_details' => $lecture_details,
                'lecture_details' => $lecture_details,
                'get_classes_subjects' => $get_classes_subjects,
                'get_subjects_classes' => $get_subjects_classes,
            ]
        );
    }
    public function update_recorded_lectures(Request $request, $id)
    {
        CampusTeacherRecordedLectures::where('id', $id)->update([
            'class_name'              => $request->class_name,
            // 'section_name'               => $request->section_name,
            'subject_name'                 => $request->subject_name,
            'lecture_title'                  => $request->lecture_title,
            'lecture_link'                => $request->lecture_link,
            'lecture_upld_dte'              => $request->lecture_upld_dte,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('edit-recorded-lecture', 'Lecture updated successsfully');
    }
    public function delete_recorded_lectures($id)
    {
        $del = CampusTeacherRecordedLectures::find($id)->delete();
        return redirect()->back()->with('delete-recorded-lecture', 'Recorded Lecture Has Been Deleted Successsfully');
    }





    public function fetch_subjects(Request $request)
    {
        $pagename = 'add recorded lectures';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');

        $teacher = CampusEmployee::find($teacher_id);
        // dd($teacher); 

        if ($teacher) {
            $teacher_name = $teacher->first_name;
        }
        // Get the selected class name from the AJAX request
        $class_name = $request->input('class_name');

        // Query the subjects associated with the selected class
        // $subjects = CampusSubjectsTeacher::where('class_name', $class_name)
        //     ->where('institute_id', $request->session()->get('institute_id'))
        //     ->where('campus_id', $request->session()->get('campus_id'))
        //     ->where('teacher_name', $request->session()->get('teacher_id'))
        //     ->pluck('subject_name', 'subject_name')
        //     ->toArray();


        $subjects = CampusSubjectsTeacher::where('class_name', $class_name)
            ->where('institute_id', $request->session()->get('institute_id'))
            ->where('campus_id', $request->session()->get('campus_id'))
            ->where('teacher_name', $teacher_name)
            ->pluck('subjects', 'subjects')
            ->toArray();

        // Return the subjects as JSON
        return response()->json(['subjects' => $subjects]);
    }
}
