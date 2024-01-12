<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusClass;
use App\Models\CampusSubject;
use App\Models\Class_Section;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class CampusSubjectController extends Controller
{
    public function all_subjects(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

            // $class1 = CampusClass::where('class_name', '1')->first();
            // dd($class1);

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Subjects.all_subjects', [
            'classes' => $classes,
        ]);
    }
    // public function all_subjects(Request $request)
    // {
    //     $Institute_admin_id = $request->session()->get('Institute_admin_id');
    //     $campus_id = $request->session()->get('campus_id');

    //     $classes = CampusClass::with('sections.subjects')
    //     ->where('institute_id', $Institute_admin_id)
    //     ->where('campus_id', $campus_id)
    //     ->get();

    //     $subjects = CampusSubject::where('institute_id', $Institute_admin_id)
    //         ->where('campus_id', $campus_id)->get();
    //     $campusName = $request->session()->get('campus_name');
    //     return view('institute_admin_panel.dashboard.Campus.generation_operation.Subjects.all_subjects', [
    //         'classes' => $classes,
    //         'subjects' => $subjects,
    //     ]);
    // }

    public function add_subject(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)->get();

        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
        $campusName = $request->session()->get('campus_name');

        $pagename = 'Add Subject';

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Subjects.add_subject',
            [
                'classes' => $classes,
                'sections' => $sections,
                'pagename' => $pagename,
                'Institute_admin_id' => $Institute_admin_id,
                'campus_id' => $campus_id,
                // 'campuses' => $campuses,

            ]
        );
    }
    //   function for store subject 
    public function store_campus_subject(Request $request)
    {
        // dd($request);
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $class_name = $request->input('class_name');
        $section_name = $request->input('section_name');

        $request->validate([
            'subject' => [
                'required',
                Rule::unique('campus_subjects')->where(function ($query) use ($campus_id, $class_name) {
                    return $query->where('campus_id', $campus_id)
                        ->where('class_name', $class_name);
                }),
                'max:255',
            ],
        ]);

        CampusSubject::create([
            'institute_id'            => $Institute_admin_id,
            'campus_id'               => $campus_id,
            'class_name'               => $request->class_name,
            // 'section_name'            => $request->section_name,
            'subject'                 => $request->subject,
        ]);

        return redirect()->back()->with('SubjectAdded', 'Subject Added Successfully');
    }

    public function back_subjectlist(Request $request)
    {
        return redirect()->route('all-subjects');
    }


    public function edit_subject(Request $request, $id)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $pagename = 'Edit Subject';
        $SubjectsDetails = DB::table('campus_subjects')->where('id', $id)->get()->first();

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Subjects.edit_subject',
            [
                'SubjectsDetails' => $SubjectsDetails,
                'pagename' => $pagename,
                'Institute_admin_id' => $Institute_admin_id,
                'campus_id' => $campus_id,
                // 'campuses' => $campuses,

            ]
        );
    }


    public function save_edit_subject(Request $request, $id)
    {

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        CampusSubject::where('id', $id)->update([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'subject' => $request->subject,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success_update', 'Subject Updated Successfully');
    }
}
