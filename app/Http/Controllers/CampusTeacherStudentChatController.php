<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusEmployee;
use App\Models\CampusStudentTeacherChat;
use App\Models\CampusSubjectsTeacher;
use App\Models\CampusTeacherStudentChat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusTeacherStudentChatController extends Controller
{
    public function chat_screen(Request $request)
    {
        $pagename = 'Students Leave Approval';
        return view('teacher_panel.chat_work.chat_screen',
            [
                'pagename' => $pagename,
            ]
        );
    }



    public function send_meessage_chat_screen(Request $request)
    {
        $pagename = 'Send Message';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');


        
        $teacher = CampusEmployee::find($teacher_id);
        $teacher_name = $teacher->first_name;

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


        $get_all_messages = CampusTeacherStudentChat::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('teacher_id', $teacher_id)->where('teacher_name', $teacher_name)->get();

        // dd($get_all_messages);

        // $currentDateTime = now(); 
        // $currentFormattedTime = $currentDateTime->format('H:i:s');

        $currentDateTime = Carbon::now();
        $currentFormattedTime = $currentDateTime->format('h:i A');
        $currentFormattedDate = $currentDateTime->format('Y-m-d');


        return view('teacher_panel.chat_work.send_message_screen',
            [
                'pagename' => $pagename,
                'classes' => $classes,
                'currentDateTime' => $currentDateTime,
                'currentFormattedTime' => $currentFormattedTime,
                'currentFormattedDate' => $currentFormattedDate,
                'get_all_messages' => $get_all_messages,
                'get_classes_subjects' => $get_classes_subjects,
                'get_subjects_classes' => $get_subjects_classes,

            ]
        );
    }



    // function for save message 
    // public function send_chat(Request $request)
    // {
    //     dd($request);   
    //     // dd($request->all());
    //     $institute_id = $request->session()->get('institute_id');
    //     $campus_id = $request->session()->get('campus_id');
    //     $teacher_id = $request->session()->get('teacher_id');
    //     $teacher_name = $request->session()->get('teacher_first_name');

    //     $class = $request->input('class_name');
    //     $section = $request->input('section_name');
    //     $student = $request->input('student_name');
    //     $message = $request->input('message');
    //     $currentTime = $request->input('current_time');
    //     $currentDate = $request->input('current_date');
    //     $grNumber = $request->input('gr_number');

    //     $request->validate(
    //         [
    //             'class_name' => 'required', 
    //             'message' => 'required',
    //         ]
    //     );

    //     $formData = new CampusTeacherStudentChat();
    //     $formData->institute_id = $institute_id;
    //     $formData->campus_id = $campus_id;
    //     $formData->teacher_id = $teacher_id;
    //     $formData->teacher_name = $teacher_name;
    //     $formData->class_name = $class;
    //     $formData->section_name = $section;
    //     $formData->student_name = $student;
    //     $formData->message = $message;

    //     // $formData->message_sent_time = $currentTime;
    //     // $formData->message_sent_date = $currentDate;

    //     $formData->message_sent_time = Carbon::createFromFormat('H:i A', $currentTime)->format('H:i A');
    //     $formData->message_sent_date = Carbon::createFromFormat('Y-m-d', $currentDate)->format('Y-m-d');

    //     $formData->student_gr_number = $grNumber;
    //     $formData->save();

    //     // return response()->json(['message' => 'Form data saved successfully']);
    //     return response()->json($formData);
    // }



    // new 

    public function send_chat(Request $request)
    {
        // dd($request);
        // dd($request);   
        // dd($request->all());
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');

        $class = $request->input('class_name');
        $section = $request->input('section_name');
        $student = $request->input('student_name');
        $message = $request->input('message');
        $currentTime = $request->input('current_time');
        $currentDate = $request->input('current_date');
        $grNumber = $request->input('gr_number');

        $request->validate(
            [
                'class_name' => 'required',
                'message' => 'required',
            ]
        );

        $formData = new CampusTeacherStudentChat();
        $formData->institute_id = $institute_id;
        $formData->campus_id = $campus_id;
        $formData->teacher_id = $teacher_id;
        $formData->teacher_name = $teacher_name;
        $formData->class_name = $class;
        $formData->section_name = $section;
        $formData->student_name = $student;
        $formData->message = $message;

        // $formData->message_sent_time = $currentTime;
        // $formData->message_sent_date = $currentDate;

        $formData->message_sent_time = Carbon::createFromFormat('H:i A', $currentTime)->format('H:i A');
        $formData->message_sent_date = Carbon::createFromFormat('Y-m-d', $currentDate)->format('Y-m-d');

        $formData->student_gr_number = $grNumber;
        $formData->save();

        // return response()->json(['message' => 'Form data saved successfully']);
        return response()->json($formData);
    }



    public function recieved_messages_chat_screen(Request $request){
        $pagename = 'Send Message';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');
        $teacher_name = $request->session()->get('teacher_first_name');


        $get_all_students_messages = CampusStudentTeacherChat::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('teacher_name',  $teacher_name)->get();

        return view('teacher_panel.chat_work.recieved_messages_screen',
            [
                'pagename' => $pagename,
                'institute_id' => $institute_id,
                'campus_id' => $campus_id,
                'teacher_id' => $teacher_id,
                'teacher_name' => $teacher_name,
                'get_all_students_messages' =>  $get_all_students_messages, 
                
            ]
        ); 
    }
}
