<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusSubject;
use App\Models\CampusSyllabu;
use App\Models\CampusTimetable;
use App\Models\Class_Section;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CampusEmployee;
use App\Models\TeacherAvailableTime;
use Illuminate\Support\Facades\DB;

class CampusTimeTableController extends Controller
{
    public function view_timetable(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();
        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Timetable.view_timeTable', [
            'classes' => $classes,
            'sections' => $sections,
        ]);
    }
    public function list_avilableTeachers(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $pagename = "Teachers Avilable Dates";
        $available_teachers = TeacherAvailableTime::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $teacherNames = [];
        foreach ($available_teachers as $available_teacher) {
            $teacherId = $available_teacher->teacher_id;
            $teacher = CampusEmployee::find($teacherId);
            // dd($teacher);  
            // Assuming 'Teacher' is the model for teachers
            if ($teacher) {
                $teacherNames[$teacherId] = $teacher->first_name;
            }

            // dd($teacherNames); 
            return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Timetable.teachers_list', [
                'Institute_admin_id' => $Institute_admin_id,
                'campus_id' => $campus_id,
                'available_teachers' => $available_teachers,
                'teacherNames' => $teacherNames,
                'pagename' => $pagename,
            ]);
        }
    }



    public function add_timetable(Request $request)
    {

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $subjects = CampusSubject::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $campusName = $request->session()->get('campus_name');

        $pagename = 'class Details';

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Timetable.select-add-timetable-datail', ['Institute_admin_id' => $Institute_admin_id, 'campus_id' => $campus_id, 'classes' => $classes, 'sections' => $sections, 'campusName' => $campusName, 'subjects' => $subjects, 'pagename' => $pagename]);
    }



    // public function section_wise_subjects(Request $request)
    // {
    //     $class_name = $request->input('class_name');
    //     $section_name = $request->input('section_name');

    //     // Fetch subjects based on the selected class and section
    //     $subjects = CampusSubject::where('class_name', $class_name)
    //                        ->where('section_name', $section_name)
    //                        ->pluck('subject_name', 'id');

    //     $options = '<option value="">Subject</option>';

    //     foreach ($subjects as $id => $subject_name) {
    //         $options .= '<option value="'.$id.'">'.$subject_name.'</option>';
    //     }

    //     return $options;  
    // }

    // new old 
    // public function section_subjects(Request $request)
    //     {

    //         $data= CampusSubject::where('section_name',$request->section_name)->get(); 

    //     return $data;  

    // }  



    // hihi 
    // public function section_subjects(Request $request)
    // {
    //     $section_name = $request->section_name;
    //     $data = CampusSubject::where('section_name', $section_name)->get();
    //     return response()->json($data);
    // }


    // public function section_subjects(Request $request)
    // {
    //     $data = CampusSubject::where('section_name', $request->section_name)->pluck('subject_name')->toArray();

    //     return response()->json($data);    
    // }



    public function section_subjects(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $section_name = $request->section_name;
        $class_name = $request->class_name;

        $data = CampusSubject::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('section_name', $section_name)
            ->where('class_name', $class_name)
            ->get();

        return response()->json($data);
    }

    // public function section_subjects(Request $request)
    // {
    //     $data = CampusSubject::where('section_name', $request->section_name)->pluck('subject_name')->toArray();

    //     return response()->json($data);
    // }   


    public function new_timetable(Request $request)
    {
        // dd($request); 
        $class = $request->input('class_name');
        // $section = $request->input('section_name');
        $subject = $request->input('subject_name');
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $teachers = DB::table('campus_subjects_teachers')
            ->where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('subjects', 'LIKE', '%' . $subject . '%')
            ->select('teacher_name')
            ->distinct()
            ->get();

        return view(
            'campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Timetable.add-new-table',
            ['class' => $class, 'subject' => $subject, 'Institute_admin_id' => $Institute_admin_id, 'campus_id' => $campus_id, 'teachers' => $teachers]
        );
    }



    // public function save_timetableOne(Request $request)
    // {

    // $timetableData = $request->all();
    // dd($timetableData); 
    // dd($request->all());    

    // $Institute_admin_id = $request->session()->get('Institute_admin_id');
    // $campus_id = $request->session()->get('campus_id');

    // $class = $request->input('class');
    // $section = $request->input('section');
    // $subject = $request->input('subject');
    // $teacher = $request->input('teacher');

    // $timetableData = [];


    // $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    // foreach ($days as $day) {
    //     $timeStart = $request->input('time_start.' . $day);
    //     $timeEnd = $request->input('time_end.' . $day);
    //     $teacher = $request->input('teacher.' . $day);


    // $timeStart = $timeStart ?: '--';
    // $timeEnd = $timeEnd ?: '--';
    // $teacher = $teacher === "Select Teacher" ? '--' : $teacher;

    // Set the time start and end to '--' if they are empty
    // $timeStart = !empty($timeStart) ? $timeStart : '--';
    // $timeEnd = !empty($timeEnd) ? $timeEnd : '--';
    // $teacher = $teacher === "Select Teacher" ? '--' : $teacher;

    // if (empty($timeStart) && empty($timeEnd) && $teacher === "Select Teacher") {
    //     $timeStart = '--';
    //     $timeEnd = '--';
    //     $teacher = '--';
    // } else {  
    //     // If any of the fields is empty, set it to '--'
    //     $timeStart = $timeStart ?: '--';
    //     $timeEnd = $timeEnd ?: '--';
    //     $teacher = $teacher === "Select Teacher" ? '--' : $teacher;
    // }  




    // Extract AM/PM values from time inputs
    // $timeStartPeriod = date('A', strtotime($timeStart));
    // $timeEndPeriod = date('A', strtotime($timeEnd));

    //  // Convert hours above 12 to 1, 2, etc. for 12-hour format
    //  $startHour = intval(date('h', strtotime($timeStart)));
    //  $endHour = intval(date('h', strtotime($timeEnd)));

    //  $formattedStartTime = sprintf("%02d:%s %s", $startHour, date('i', strtotime($timeStart)), $timeStartPeriod);
    // $formattedEndTime = sprintf("%02d:%s %s", $endHour, date('i', strtotime($timeEnd)), $timeEndPeriod);




    // Convert hours above 12 to 1, 2, etc. for 12-hour format
    // $startHour = intval(date('H', strtotime($timeStart)));
    // if ($startHour > 12) {
    //     $startHour -= 12;
    // }

    // $endHour = intval(date('H', strtotime($timeEnd)));
    // if ($endHour > 12) {
    //     $endHour -= 12;
    // }  

    // $timeStart = sprintf("%02d:%s", $startHour, date('i', strtotime($timeStart)));
    // $timeEnd = sprintf("%02d:%s", $endHour, date('i', strtotime($timeEnd)));



    //         $timetableData[] = [
    //             'class_name' => $class,
    //             'section_name' => $section,
    //             'subject_name' => $subject,
    //             'day' => $day,
    //             // 'start_time' => $timeStart,
    //             // 'end_time' => $timeEnd,
    //             'start_time' => $formattedStartTime,
    //         'end_time' => $formattedEndTime,
    //             'teacher' => $teacher,
    //             'institute_id' => $Institute_admin_id,
    //             'campus_id' => $campus_id,
    //             'timetable_created_on' => Carbon::now()->toDateString(),
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),
    //         ];    
    //     }  
    //     CampusTimetable::insert($timetableData);



    //     return redirect()->back()->with('success', 'Timetable has been saved successfully.');
    // }


    public function save_timetable(Request $request)
    {
        //    dd($request);  
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $class = $request->input('class');
        // $section = $request->input('section');
        $subject = $request->input('subject');

        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $timetableData = [];

        foreach ($days as $day) {
            $timeStart = $request->input('time_start.' . $day);
            $timeEnd = $request->input('time_end.' . $day);
            $teacher = $request->input('teacher.' . $day);


            // Set the time start and end to '--' if they are empty
            $timeStart = !empty($timeStart) ? $timeStart : '--';
            $timeEnd = !empty($timeEnd) ? $timeEnd : '--';
            $teacher = $teacher === "Select Teacher" ? '--' : $teacher;

            // Convert time to 12-hour format
            if ($timeStart !== '--') {
                $timeStart = Carbon::createFromFormat('H:i', $timeStart)->format('h:i A');
            }

            if ($timeEnd !== '--') {
                $timeEnd = Carbon::createFromFormat('H:i', $timeEnd)->format('h:i A');
            }




            $timetableData[] = [
                'class_name' => $class,
                // 'section_name' => $section,
                // 'subject_name' => $subject,
                'subject_name' => $subject, // Use the subject name here
                'day' => $day,
                'start_time' => $timeStart,
                'end_time' => $timeEnd,
                'teacher' => $teacher,
                'institute_id' => $Institute_admin_id,
                'campus_id' => $campus_id,
                'timetable_created_on' => Carbon::now()->toDateString(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        CampusTimetable::insert($timetableData);

        return redirect()->back()->with('success', 'Timetable has been saved successfully.');
    }





    public function view_classtimetable(Request $request)
    {
        $selectedClass = $request->input('class_name');
        $selectedSection = $request->input('section_name');
        // dd($section);
        // dd($request); 
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $timetableData = CampusTimetable::where('class_name', $selectedClass)
            ->where('section_name', $selectedSection)->where('campus_id', $campus_id)
            ->get();
        $timetableByDay = [];
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
            $timetableBySubject = CampusTimetable::where('class_name', $selectedClass)->where('section_name', $selectedSection)->where('campus_id', $campus_id)
                ->get();

            // try {
            //     $timetableBySubject = CampusTimetable::where('class_name', $selectedClass)
            //         ->where('section_name', $selectedSection)
            //         ->where('campus_id', $campus_id)
            //         ->get();
            // } catch (\Exception $e) {
            //     echo '<script>alert("Timetable data is not available for the selected class and section.");</script>';
            // }


            // Check if the result is empty
            // if ($timetableBySubject->isEmpty()) {
            //     $timetableBySubject = [];
            // }

            // $timetableBySubjectData = $timetableBySubject->isEmpty() ? [] : $timetableBySubject;
        }

        $currentDate = Carbon::now();

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.Timetable.view-classtimetable', [
            'timetableByDay' => $timetableByDay,
            'selectedClass' => $selectedClass,
            'selectedSection' => $selectedSection,
            'timetableBySubject' => $timetableBySubject,
            'currentDate' => $currentDate,
            // 'timetableBySubject' => $timetableBySubjectData, 


        ]);
    }



    public function delete_timetable(Request $request, $subject)
    {
        dd($subject);
        // $timetable = Timetable::findOrFail($id);
        // $timetable->delete();

    }
}
