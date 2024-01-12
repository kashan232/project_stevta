<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusClass;
use App\Models\CampusEmployee;
use App\Models\CampusPublicHoliday;
use App\Models\CampusSubjectsTeacher;
use App\Models\CampusTimetable;
use App\Models\Institute;
use App\Models\TeacherAvailableTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusTeacherController extends Controller
{
    public function teacher_login(Request $request)
    {
        $pagename = 'Login';
        $registered_institutes = Institute::all();

        return view(
            'teacher_login',
            [
                'pagename' => $pagename,
                'registered_institutes' => $registered_institutes,
            ]
        );
    }

    public function teacher_logged(Request $request)
    {

        $count = CampusEmployee::where('institute_id', '=', $request->institute_id)
            ->where('campus_id', '=', $request->campus_id)
            ->where('email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->where('department', '=', 'Teacher') // Add this condition to check lock_status
            ->count();

        if ($count < 1) {
            return Redirect()->back()->with('wrong-deprt', 'Sorry, you are not a teacher');
        } else {

            $teacher_data = CampusEmployee::where('institute_id', '=', $request->institute_id)
                ->where('campus_id', '=', $request->campus_id)
                ->where('email', '=', $request->email)
                ->where('password', '=', $request->password)
                ->where('department', '=', 'Teacher') // Add this condition to check lock_status
                ->first();

            $request->session()->put('institute_id', $teacher_data->institute_id);
            $request->session()->put('campus_id', $teacher_data->campus_id);
            $request->session()->put('teacher_id', $teacher_data->id);
            $request->session()->put('teacher_first_name', $teacher_data->first_name);
            $request->session()->put('teacher_email', $teacher_data->email);

            return Redirect()->route('teacher-screen');
        }
    }
    public function teacher_logout(Request $request)
    {
        $request->session()->forget(['institute_id', 'campus_id', 'teacher_id', 'teacher_first_name', 'teacher_email']);
        $request->session()->flush();

        return Redirect()->route('teacher-login');
        session()->flush();
    }
    public function teacher_institue_cmpus(Request $request)
    {
        $data = campus::where('institute_id', $request->institute_id_change)->get();
        // ddd($data);
        // $output = '<option value=\"\">Tehsil</option>';
        $output = "";
        foreach ($data as $list) {
            $output .= "
            <option value=\" " . $list->id . " \" >$list->campus_name </option>
            ";
        }
        echo $output;
    }
    public function teacher_screen(Request $request)
    {

        $pagename = 'Teacher Screen';
        return view('teacher_panel.teacher_screen',
            [
                'pagename' => $pagename,
            ]
        );
    }

    public function teacher_result(Request $request)
    {
        $pagename = 'Teacher Result';
        return view('teacher_panel.result', [
            'pagename' => $pagename,
        ]);
    }
    public function give_marks(Request $request)
    {
        $pagename = 'Teacher Result';
        return view('teacher_panel.give_marks', [
            'pagename' => $pagename,
        ]);
    }
    public function recorded_lectures(Request $request)
    {
        $pagename = 'recorded lectures';
        return view(
            'teacher_panel.recorded-lectures',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function diary(Request $request)
    {
        $pagename = 'diary';
        return view(
            'teacher_panel.dairy-assignment',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function events(Request $request)
    {
        $pagename = 'event';
        $Institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $all_events = CampusPublicHoliday::where('institute_id', '=', $Institute_id)->where('campus_id', '=', $campus_id)->get();
        //ddd($all_events);
        return view('teacher_panel.events', [
            'pagename' => $pagename,
            'all_events' => $all_events,
        ]);
    }
    public function timetable(Request $request)
    {
        $pagename = 'timetable';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        // $teacher_id = $request->session()->get('teacher_id');

        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();

        return view('teacher_panel.time_table.timetable', [
            'pagename' => $pagename,
            'classes' => $classes,

        ]);
    }


    // manage_avilableTime
    public function manage_avilableTime(Request $request)
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

        return view('teacher_panel.manage_time.manage_availableTime', [
            'pagename' => $pagename,
            'classes' => $classes,
            'get_classes_subjects' => $get_classes_subjects,
            'get_subjects_classes' => $get_subjects_classes,

        ]);
    }




    public function Show_timetable(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');

        $selectedClass = $request->input('class_name');
        $selectedSection = $request->input('section_name');

        $classes = CampusClass::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->get();

        $pagename = 'timetable';

        $timetableByDay = [];
        $timetableBySubject = [];

        if ($selectedClass && $selectedSection) {
            // Fetch the timetable data for the selected class and section
            $timetableData = CampusTimetable::where('institute_id', $institute_id)
                ->where('campus_id', $campus_id)
                ->where('class_name', $selectedClass)
                ->where('section_name', $selectedSection)
                ->get();

            foreach ($timetableData as $row) {
                $day = $row->day;
                if (!isset($timetableByDay[$day])) {
                    $timetableByDay[$day] = [];
                }

                $timetableByDay[$day][] = [
                    'subject' => $row->subject_name,
                    'start_time' => $row->start_time,
                    'end_time' => $row->end_time,
                    'teacher' => $row->teacher,
                ];
            }

            // Fetch the timetable data by subject
            $timetableBySubject = CampusTimetable::where('class_name', $selectedClass)
                ->where('section_name', $selectedSection)
                ->where('campus_id', $campus_id)
                ->get();
        }

        $currentDate = Carbon::now();

        return view('teacher_panel.time_table.timetableShow', [
            'timetableByDay' => $timetableByDay,
            'selectedClass' => $selectedClass,
            'selectedSection' => $selectedSection,
            'timetableBySubject' => $timetableBySubject,
            'currentDate' => $currentDate,
            'classes' => $classes,
            'pagename' => $pagename,
        ]);
    }





    public function store_availableTime(Request $request)
    {

        // dd($request);  

        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $teacher_id = $request->session()->get('teacher_id');

        // $validatedData = $request->validate([
        //     'course_name' => 'required',
        //     'subject_name' => 'required',
        //     'lecture_date' => 'required|date',
        //     'start_time' => 'required',
        //     'end_time' => 'required',
        //     'lecture_day' => 'required',
        //     'lecture_link' => 'required',
        //     'availability' => 'required',
        // ]);


        $availableTime = new TeacherAvailableTime([
            'institute_id' => $institute_id,
            'campus_id' =>  $campus_id,
            'teacher_id' =>  $teacher_id,
            'course_name' => $request->input('course_name'),
            'subject_name' => $request->input('subject_name'),
            'lecture_date' => $request->input('lecture_date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'lecture_day' => $request->input('lecture_day'),
            // 'l' => $request->input('lecture_link'),
            'availability' => $request->input('availability'),
        ]);

        // Save the AvailableTime instance to the database
        $availableTime->save();


        return redirect()->back()->with('success', 'available Dates Successfully added');
    }
}
