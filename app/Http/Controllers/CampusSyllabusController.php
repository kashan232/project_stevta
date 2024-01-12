<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusClass;
use App\Models\CampusSubject;
use App\Models\CampusSyllabu;
use App\Models\Class_Section;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class CampusSyllabusController extends Controller
{
    public function all_syllabus(Request $request)
    {
        // $all_syllabus = CampusClass::all();  
        // Institute_admin_id 
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $pagename = 'Syllabus';
        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
        // $Institute_admin_id = $request->session()->get('Institute_admin_id');
        // $campus_id = $request->session()->get('campus_id');
        $all_syllabus = CampusSyllabu::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        $campusName = $request->session()->get('campus_name');

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Syllabus.all_syllabus',
            [
                'pagename' => $pagename,
                'all_syllabus' => $all_syllabus,
                // 'campuses' => $campuses 

            ]

        );
    }

    public function add_syllabus(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();
        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        $subjects = CampusSubject::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        $campusName = $request->session()->get('campus_name');
        $pagename = 'Add Syllabus';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Syllabus.add_syllabus',
            [
                'pagename' => $pagename,
                'classes' => $classes,
                'sections' => $sections,
                'subjects' => $subjects,
                'Institute_admin_id'  => $Institute_admin_id,
                'campus_id'  => $campus_id,

            ]
        );
    }

    public function store_syllabus(Request $request)
    {
        // dd($request);
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $class_name = $request->input('class_name');
        // $section_name = $request->input('section_name');
        $subject_name = $request->input('subject_name');


        // validate 
        $request->validate([
            'book_name' => [
                'required',
                Rule::unique('campus_syllabus')->where(function ($query) use ($campus_id, $class_name, $subject_name) {
                    return $query->where('campus_id', $campus_id)
                        ->where('class_name', $class_name)
                        ->where('subject_name', $subject_name);
                }),

            ],
        ]);


        CampusSyllabu::create([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'class_name' => $request->class_name,
            // 'section_name' => $request->section_name,
            'subject_name' => $request->subject_name,
            'author_name' => $request->author_name,
            'book_name' => $request->book_name,
            'no_of_chapters' => $request->no_of_chapters,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('success-message-syllabus', 'Syllabus add successfully!');
    }


    // function for delete syllabus 
    public function delete_syllabus(Request $request, $id)
    {
        $delete = CampusSyllabu::find($id)->delete();
        return redirect()->back()->with('delete-message-syllabus', 'Syllabus deleted successsfully');
    }


    public function edit_syllabus(Request $request, $id)
    {
        $pagename = 'Edit Syllabus';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $SyllabusDetails = DB::table('campus_syllabus')->where('id', $id)->get()->first();


        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        // $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $subjects = CampusSubject::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Syllabus.edit_syllabus', [
            'SyllabusDetails' => $SyllabusDetails,
            'Institute_admin_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'classes' => $classes,
            'pagename' => $pagename,
            // 'sections' => $sections,
            'subjects' => $subjects,

        ]);
    }


    public function save_edit_syllabus(Request $request, $id)
    {

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');


        $request->validate([
            'class_name' => 'required:campus_syllabus',
            // 'section_name' => 'required:campus_syllabus',
            'subject_name' => 'required:campus_syllabus',
            'author_name' => 'required:campus_syllabus',
            'book_name' => 'required:campus_syllabus',
            'no_of_chapters' => 'required:campus_syllabus',

        ]);

        CampusSyllabu::where('id', $id)->update([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'class_name' => $request->class_name,
            // 'section_name' => $request->section_name,
            'subject_name' => $request->subject_name,
            'author_name' => $request->author_name,
            'book_name' => $request->book_name,
            'no_of_chapters' => $request->no_of_chapters,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success_update', 'Syllabus Updated Successfully');
    }



    public function class_subjects(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $class_name = $request->input('class_name');

        $subjects = CampusSubject::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('class_name', $class_name)
            ->pluck('subject')
            ->toArray();

        // Debugging statement
        // console($subjects);

        return response()->json($subjects);
    }
}
