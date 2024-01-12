<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusBatch;
use App\Models\CampusClass;
use App\Models\Class_Section;
use App\Models\StudentAddmission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ClassController extends Controller
{
    public function all_courses(Request $request)
    {
        $pagename = 'View Classes';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $all_classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        $sections = [];
        foreach ($all_classes as $class) {
            $classSections = Class_Section::where('class_name', $class->class_name)
                ->where('campus_id', $campus_id)
                ->where('institute_id', $Institute_admin_id)
                ->pluck('section_name')
                ->toArray();
            $sections[$class->class_name] = $classSections;
        }

        $studentCounts = [];
        foreach ($all_classes as $class) {
            $studentCount = StudentAddmission::where('class_name', $class->class_name)
                ->where('campus_id', $campus_id)
                ->where('institute_id', $Institute_admin_id)
                ->count();
            $studentCounts[$class->class_name] = $studentCount;
        }

        $genderCounts = [];
        foreach ($all_classes as $class) {
            $maleCount = StudentAddmission::where('class_name', $class->class_name)
                ->where('campus_id', $campus_id)
                ->where('institute_id', $Institute_admin_id)
                ->where('gender', 'male')
                ->count();
                
            $femaleCount = StudentAddmission::where('class_name', $class->class_name)
                ->where('campus_id', $campus_id)
                ->where('institute_id', $Institute_admin_id)
                ->where('gender', 'female')
                ->count();
                
            $genderCounts[$class->class_name] = [
                'male' => $maleCount,
                'female' => $femaleCount
            ];
        }

        $campusName = $request->session()->get('campus_name');
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.classes.all_classes', [
            'pagename' => $pagename,
            'all_classes' => $all_classes,
            // 'campuses' => $campuses,   
            'sections' => $sections,
            'studentCounts' => $studentCounts,
            'genderCounts' => $genderCounts,
        ]);
    }

    public function all_sections(Request $request)
    {
        $pagename = 'View Classes';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $Class_Sections = Class_Section::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();
        
        $campusName = $request->session()->get('campus_name');
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.classes.all_sections', [
            'pagename' => $pagename,
            'Class_Sections' => $Class_Sections,
        ]);
    }

    public function back_list(Request $request)
    {
        return redirect()->route('all-courses');
    }
    public function add_course(Request $request)
    {
        $pagename = 'Add Course';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $get_all_batches = CampusBatch::where('institute_id', $Institute_admin_id)->get();
        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
        $campusName = $request->session()->get('campus_name');
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.classes.add_class', [
            'pagename' => $pagename,
            'get_all_batches' => $get_all_batches,
            // 'campuses' => $campuses, 
        ]);
    }
    public function store_course(Request $request)
    {
        // dd($request);
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        // $request->validate([
        //     'campus_name' => 'required|unique:campuses|max:255',
        //     'campus_email' => 'required|unique:campuses|max:255',
        //     'campus_address' => 'required|unique:campuses|max:255',
        //     'campus_phone' => 'required|unique:campuses|max:255',

        // ]); 

        $request->validate([
            'class_name' => [
                'required',
                Rule::unique('campus_classes')->where(function ($query) use ($request) {
                    return $query->where('campus_id', $request->session()->get('campus_id'));
                }),
                'max:255',
            ],

        ]);

        CampusClass::create([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'class_name' => $request->class_name,
            'batch' => $request->batch,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(), 
        ]);
        return Redirect()->back()->with('success-message-class', 'Class add successfully!');
    }
    public function add_section(Request $request)
    {
        $pagename = 'Add Section';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();
        $campusName = $request->session()->get('campus_name');
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.classes.add_section', [
            'pagename' => $pagename,
            'Institute_admin_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'classes' => $classes,
            // 'campuses' => $campuses,  
        ]);
    }






    // function for save data into databse of section 
    // public function store_section(Request $request){
    //     $Institute_admin_id = $request->session()->get('Institute_admin_id');
    //     $campus_id = $request->session()->get('campus_id');

    //     Class_Section::create([
    //         'institute_id' => $Institute_admin_id,
    //         'campus_id' => $campus_id,
    //         'class_name' => $request->input('class_name'),
    //         'created_at' => Carbon::now(),
    //         'updated_at' => Carbon::now(),
    //     ]);

    //     return redirect()->back()->with('success-message-section', 'Section added successfully!');
    // }


    public function store_section(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $class_name = $request->input('class_name');



        // validate section 
        $request->validate([
            'section_name' => [
                'required',
                Rule::unique('class__sections')->where(function ($query) use ($request, $class_name, $campus_id) {
                    return $query->where('campus_id', $campus_id)
                        ->where('class_name', $class_name);
                }),
                'max:255',
            ],
        ]);

        Class_Section::create([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'class_name' => $class_name,
            'section_name' => $request->input('section_name'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success-message-section', 'Section added successfully!');
        // return redirect()->route('route-name')->with('success', 'Message goes here');
        //     @if(session('success'))
        //     <div class="alert alert-success">
        //         {{ session('success') }}
        //     </div>
        // @endif

    }


    public function back_section(Request $request)
    {
        return redirect()->route('all-courses');
    }


    // public function sections_view(Request $request,$class_id){

    //     $Institute_admin_id = $request->session()->get('Institute_admin_id');
    //     $campus_id = $request->session()->get('campus_id');

    //     $campuses = Campus::where('institute_id', $Institute_admin_id)
    //         ->where('id', $campus_id) 
    //         ->first();

    //     $all_classes = CampusClass::where('institute_id', $Institute_admin_id)
    //         ->where('campus_id', $campus_id)
    //         ->get(); 


    // }


    public function sections(Request $request, $class_id)
    {
        // dd($class_id);
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');


        $campusName = $request->session()->get('campus_name');

        $class = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('id', $class_id)
            ->first();

        // $all_sections = CampusClass::where('institute_id', $Institute_admin_id)
        // ->where('campus_id', $campus_id)->where('class_name',$class_id)
        // ->get(); 

        $sections = Class_Section::where('class_name', $class->class_name)
            ->where('campus_id', $campus_id)
            ->where('institute_id', $Institute_admin_id)
            ->get();
        dd($sections);



        // $sections = [];
        // foreach ($class as $class) {
        //     $classSections = Class_Section::where('class_name', $class->class_name)
        //         ->where('campus_id', $campus_id)
        //         ->where('institute_id', $Institute_admin_id)
        //         ->pluck('section_name')
        //         ->toArray();
        //     $sections[$class->class_name] = $classSections;
        // }


        // return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.sections_view', compact('class', 'sections'));
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.classes.sections_view', [
            'class' => $class,
            // 'sections' => $sections, 
        ]);
    }
    
    public function sections_view(Request $request, $class_id)
    {
        $institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $campusName = $request->session()->get('campus_name');

        $class = CampusClass::where('institute_id', $institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('id', $class_id)
            ->first();

        if ($class) {
            $sections = Class_Section::where('class_name', $class->class_name)
                ->where('campus_id', $campus_id)
                ->where('institute_id', $institute_admin_id)
                ->get();
        } else {
            $sections = [];
        }

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.classes.sections_view', [
            'class' => $class,
            'sections' => $sections,
        ]);
    }
    // check existing function 
    public function check_existenceClass(Request $request)
    {
        $field = $request->input('field');
        $value = $request->input('value');
        $campusId = $request->session()->get('campus_id');

        // Check if the value exists in the database for the specified field and campus ID
        $existingRecord = CampusClass::where('campus_id', $campusId)
            ->where($field, $value)
            ->first();

        return response()->json(['exists' => ($existingRecord !== null)]);
    }





    // check existance 

    // public function checkSectionExistence(Request $request)
    // {
    //     $className = $request->input('class_name');
    //     $sectionName = $request->input('section_name');
    //     $campusId = $request->input('campus_id');

    //     // Check if the section already exists in the selected class and campus
    //     $existingSection = Class_Section::where('class_name', $className)
    //         ->where('section_name', $sectionName)
    //         ->where('campus_id', $campusId)
    //         ->first();

    //     return response()->json(['exists' => ($existingSection !== null)]);
    // }




}
