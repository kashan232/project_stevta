<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusEmployee;
use App\Models\CampusSubjectsTeacher;
use App\Models\CampusTeacherCourseMaterial;
use Carbon\Carbon;
//use Dotenv\Validator;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;


class CampusTeacherCourseMaterialController extends Controller
{

    public function add_course_material(Request $request)
    {
        $pagename = 'course material';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher = CampusEmployee::find($teacher_id);
        $teacher_name = $teacher->first_name;


        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();

            $get_classes_subjects = CampusSubjectsTeacher::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_name', $teacher_name)
            ->pluck('class_name');
         

        $get_subjects_classes = CampusSubjectsTeacher::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('teacher_name', $teacher_name)
            ->pluck('class_name', 'subjects');



        return view('teacher_panel.course_material.add_course_material',
            [
                'pagename' => $pagename,
                'classes' => $classes,
                'get_classes_subjects' => $get_classes_subjects,
                'get_subjects_classes' => $get_subjects_classes,

            ]
        );
    }
    public function store_course_material(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'uploaded_document' => 'required|mimes:csv,txt,xlx,xlsx,xls,pdf,doc,docx,jpg,png,jpeg|max:2048'
        ], [
            'uploaded_document.required' => 'Document must be uploaded.',
            'uploaded_document.mimes' => 'Uploaded document is not supported, please choose one of these => csv,txt,xlx,xls,pdf,doc,docx.',
            'uploaded_document.max' => 'Document must be less than 2MB.',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }

        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');

        $uploaded_document = $request->file('uploaded_document');
        if ($request->file()) {
            // $fileName = time().'_'.$request->file->getClientOriginalName();
            $name_generate = hexdec(uniqid());
            $file_extension = strtolower($uploaded_document->getClientOriginalExtension());
            $file_name = $name_generate . '.' . $file_extension;
            // $filePath = $request->file('uploaded_document')->store('public/super_admin_assets/upload_staff_document', $file_name);
            $path = $request->uploaded_document->move(public_path('/teacher/course_material'), $file_name);
        }

        $upload = CampusTeacherCourseMaterial::create([
            'institute_id'       => $institute_id,
            'campus_id'          => $campus_id,
            'teacher_id'         => $teacher_id,
            'class_name'         => $request->class_name,
            'section_name'       => $request->section_name,
            'subject_name'       => $request->subject_name,
            'course_title'       => $request->course_title,
            'upload_date'        => $request->upload_date,
            'uploaded_document'  => $file_name,
            'created_at'         => Carbon::now(),
            'updated_at'         => Carbon::now(),
        ]);

        if ($upload) 
        {
            return response()->json(['message' => 'Documents uploaded successfully!']);
        } else {
            return response()->json(['error' => 'Something went wrong, or connection error. Try again later.']);
        }

        // return Redirect()->back()->with('di  ary-uploaded', 'Your Diary has been Uploaded successfully!');
    
    }
    public function all_course_material(Request $request)
    {
        $pagename = 'course material';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $all_courses = CampusTeacherCourseMaterial::where('institute_id', '=', $institute_id)->where('campus_id', '=', $campus_id)
            ->where('teacher_id', '=', $teacher_id)->get();
        return view('teacher_panel.course_material.all_course_material',
            [
                'pagename' => $pagename,
                'all_courses' => $all_courses,
            ] 
        );
    }
    public function edit_course(Request $request, $id)
    {
        $pagename = 'Edit Course';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');

        $course_details = CampusTeacherCourseMaterial::findOrFail($id);
        $course = CampusTeacherCourseMaterial::where('institute_id', '=', $institute_id)->where('campus_id', '=', $campus_id)
            ->where('teacher_id', '=', $teacher_id)->get();

        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();
        return view('teacher_panel.course_material.edit_course_material',
            [
                'pagename' => $pagename,
                'classes' => $classes,
                'course_details' => $course_details,
                'course' => $course,
            ]
        );
    }
    public function update_course(Request $request)
    {
        $uploaded_document = $request->file('uploaded_document');
        $updated_id = $request->input('updated_id');
        
        if($request->file())
        {
            $validator = Validator::make($request->all(), [
                'uploaded_document' => 'required|mimes:csv,txt,xlx,xlsx,xls,pdf,doc,docx,jpg,png,jpeg|max:2048'
            ], [
                'uploaded_document.required' => 'Document must be uploaded.',
                'uploaded_document.mimes' => 'Uploaded document is not supported, please choose one of these => csv,txt,xlx,xls,pdf,doc,docx.',
                'uploaded_document.max' => 'Document must be less than 2MB.',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()]);
            }

            // $fileName = time().'_'.$request->file->getClientOriginalName();
            $name_generate = hexdec(uniqid());
            $file_extension = strtolower($uploaded_document->getClientOriginalExtension());
            $file_name = $name_generate.'.'.$file_extension;

            // $filePath = $request->file('uploaded_document')->store('public/super_admin_assets/upload_staff_document', $file_name);
            $path = $request->uploaded_document->move(public_path('/teacher/course_material'), $file_name);

            $upload = CampusTeacherCourseMaterial::where('id', $updated_id)->update([
                'uploaded_document'=> $file_name,
                'updated_at' => Carbon::now(),
            ]);
        }

        $upload = CampusTeacherCourseMaterial::where('id', $updated_id)->update([
            'class_name'      => $request->class_name,
            'section_name'    => $request->section_name,
            'subject_name'    => $request->subject_name,
            'course_title'      => $request->course_title,
            'upload_date'     => $request->upload_date,
            'updated_at' => Carbon::now(),
        ]);

        if ($upload) 
        {
            return response()->json(['message' => 'Documents updated successfully!']);
        } else {
            return response()->json(['error' => 'Something went wrong, or connection error. Try again later.']);
        }

    }
    public function delete_course($id)
    {
        $del = CampusTeacherCourseMaterial::find($id)->delete();
        return redirect()->back()->with('delete-message-course', 'Course Has Been Deleted Successsfully');
    }
}
