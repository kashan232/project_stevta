<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusEmployee;
use App\Models\Class_Section;
use Illuminate\Http\Request;
use App\Models\CampusClassTeacher;
use App\Models\CampusSubject;
use App\Models\CampusSubjectsTeacher;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ManageTeacherController extends Controller
{
    public function manage_teachers(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $get_class_teachers = CampusClassTeacher::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        // dd($get_class_teachers);
        $get_subject_teachers = CampusSubjectsTeacher::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.manage_teachers.teachers_operation',[
            'get_class_teachers' => $get_class_teachers,
            'get_subject_teachers' => $get_subject_teachers,
        ]);
    }


    public function add_classTeacher(Request $request)
    {

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $teacher = CampusEmployee::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('department', 'Teacher')
            ->get();

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.manage_teachers.add_class_teacher', [
            'classes' => $classes,
            'sections' => $sections,
            'teacher' => $teacher,
        ]);
    }


    public function store_classTeacher(Request $request)
    {

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        CampusClassTeacher::create([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'class_name' => $request->class_name,
            'section_name' => $request->section_name,
            'teacher_name' => $request->teacher_name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success-message-class', 'Class add successfully!');
    }


    public function add_SubjectTeacher(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();
           
        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $teacher = CampusEmployee::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('department', 'Teacher')
            ->get(); 

        $subjects = CampusSubject::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();


        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.manage_teachers.add_subject_teacher', [
            'classes' => $classes,
            'sections' => $sections,
            'teacher' => $teacher,  
            'subjects' => $subjects,
            'Institute_admin_id' => $Institute_admin_id,
            'campus_id' => $campus_id,

        ]);
    }




    public function store_subjectTeacher44(Request $request)
    {

        // dd($request); 
 
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');


        $validatedData = $request->validate([
            'class_name' => 'required',
            // 'section_name' => 'required',
            'teacher_name' => 'required',
            'subject_name' => 'required|array', // Assuming 'teacher_names' is the input field for selected teachers
        ]);

        

       
        // $selectedSubjects = $validatedData['subject_name']; 
        $selectedSubjects = $validatedData['subject_name']; 
        // $selectedSubjects = json_encode($request->input('subject_name')); 



        $subjectTeacher = new CampusSubjectsTeacher();

        // Fill the model fields
        $subjectTeacher->class_name = $validatedData['class_name'];
        // $subjectTeacher->section_name = $validatedData['section_name'];
        $subjectTeacher->teacher_name = $validatedData['teacher_name'];
        $subjectTeacher->institute_id = $Institute_admin_id;
        $subjectTeacher->campus_id =  $campus_id;
        $subjectTeacher->subjects = implode(', ', $selectedSubjects); // Store selected subjects as a comma-separated string
        // $subjectTeacher->subjects = $selectedSubjects; // Store selected subjects as a comma-separated string

        // Save the model to the database
        $subjectTeacher->save();


        return redirect()->back()->with('Success', 'successfully saved');
    }
    



    public function store_subjectTeacher(Request $request)
    {
        // dd($request); 
    
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
    
        // Get the subjects from the request
        $selectedSubjects = $request->input('subject_name');



        CampusSubjectsTeacher::create([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'class_name' => $request->class_name,
            'section_name' => $request->section_name,
            'teacher_name' => $request->teacher_name,
            'subjects' => $selectedSubjects,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
        ]);

    
        return redirect()->back()->with('success', 'Successfully saved');
    }
    

    public function getClassSubjects(Request $request)
    {

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $class_name = $request->input('class_name');
    
        // Replace this with your logic to fetch subjects based on class
        // You should query your database or any other data source here
        $subjects = []; // Initialize an empty array for subjects
    
        // Example: Query the subjects from your database based on class
        // Replace 'YourSubjectModel' with your actual subject model
        $subjects = CampusSubject::where('institute_id', $Institute_admin_id)->where('campus_id',$campus_id)->where('class_name', $class_name)
            ->pluck('subject_name')
            ->toArray();
    
        // Return the subjects as JSON response
        return response()->json($subjects);
    }



    public function class_subjects(Request $request){

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $class_name = $request->input('class_name');
        

        // Assuming you have a database table named 'subjects'
        // Replace 'subjects' with your actual table name
        $subjects = DB::table('campus_subjects')->where('institute_id',$Institute_admin_id)->where('campus_id',$campus_id)
            ->where('class_name', $class_name)
            ->pluck('subject');
    
        return response()->json($subjects);
    }
    

}
