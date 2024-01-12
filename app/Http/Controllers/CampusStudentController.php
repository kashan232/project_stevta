<?php

namespace App\Http\Controllers;

use App\Models\CampusStudentTeacherChat;
use App\Models\CampusTeacherDiaryAssignment;
use App\Models\CampusTeacherStudentAttendance;
use App\Models\CampusTimetable;
use App\Models\StudentAddmission;
use Carbon\Carbon;
use App\Models\CampusEmployee;
use App\Models\CampusTeacherStudentChat;
use App\Models\CampusSubject;
use Illuminate\Http\Request;
use App\Models\CampusTeacherCourseMaterial;
use App\Models\TeacherNoticeBoard;
use Illuminate\Support\Facades\Response;

class CampusStudentController extends Controller
{
    public function student_login(Request $request)
    {

        // dd($request);

        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');

        $pagename = 'Student Login';
        return view(
            'student_login',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function student_logged(Request $request)
    {
        $count = StudentAddmission::where('student_email', '=', $request->student_email)
            ->where('password', '=', $request->password)
            ->count();

        // dd($count);

        if ($count < 1) {
            return Redirect()->back()->with('wrong', 'Sorry, you are not a student');
        } else {

            $student_data = StudentAddmission::where('student_email', '=', $request->student_email)
                ->where('password', '=', $request->password)
                ->first();

            // dd($student_data);

            $request->session()->put('institute_id', $student_data->institute_id);
            $request->session()->put('campus_id', $student_data->campus_id);
            $request->session()->put('student_id', $student_data->id);
            $request->session()->put('student_first_name', $student_data->first_name);
            $request->session()->put('student_email', $student_data->student_email);
            $request->session()->put('student_gr', $student_data->gr);
            $request->session()->put('student_class', $student_data->class_name);
            $request->session()->put('student_section', $student_data->section_name);

            return Redirect()->route('student-screens');
        }
    }
    public function student_logout(Request $request)
    {

        $request->session()->forget(['institute_id', 'campus_id', 'student_id', 'student_first_name', 'student_email', 'gr']);
        $request->session()->flush();

        return Redirect()->route('student-login');
    }

    public function student_screens(Request $request)
    {

        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_first_name = $request->session()->get('student_first_name');
        $student_email = $request->session()->get('student_email');
        $gr = $request->session()->get('student_gr');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');

        // dd($student_class, $student_section);
        $pagename = 'Student Screens';

        return view('student_panel.student_screens', [
            'pagename' => $pagename,
            'institute_id' => $institute_id,
            'campus_id' => $campus_id,
            'student_id' => $student_id,
            'student_first_name' => $student_first_name,
            'student_email' => $student_email,
            'gr' => $gr,
            'student_class' => $student_class,
            'student_section' => $student_section,
        ]);
    }
    public function student_profile(Request $request)
    {
        $pagename = 'My Profile';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');

        $student_data = StudentAddmission::where('institute_id', '=', $institute_id)->where('campus_id', '=', $campus_id)->first();
        // dd($student_data);

        //ddd($student_data);
        return view('student_panel.student_profile.student_profile', [
            'pagename' => $pagename,
            'student_data' => $student_data,
        ]);
    }
    public function assignments(Request $request)
    {
        $pagename = 'Student Attendance';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_assignments = CampusTeacherDiaryAssignment::where('institute_id', '=', $institute_id)->where('campus_id', '=', $campus_id)->first();
        return view('student_panel.student_assignments.assignments', [
            'pagename'            => $pagename,
            'student_assignments' => $student_assignments,
        ]);
    }
    public function my_courses(Request $request)
    {


        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_first_name = $request->session()->get('student_first_name');
        $student_email = $request->session()->get('student_email');
        $gr = $request->session()->get('student_gr');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');

        // $get_all_courses = CampusSubject::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('class_name', $student_class)->where('section_name', $student_section)->get();
        $get_all_courses = CampusSubject::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('class_name', $student_class)->get();

        // dd($get_all_courses);

        $pagename = 'My Courses';
        return view('student_panel.student_courses.my_courses', [
            'pagename' => $pagename,
            'get_all_courses' => $get_all_courses,
        ]);
    }




    public function classes_schedule(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');
        // dd( 
        //     $student_class,
        //     $student_section

        // );
        // dd($student_class, $student_section);

        $pagename = 'Student classes schedule';

        $timetableData = CampusTimetable::where('class_name', $student_class)
            ->where('section_name', $student_section)
            ->where('campus_id', $campus_id)
            ->get();

        // dd($timetableData);

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

            $timetableBySubject = CampusTimetable::where('class_name', $student_class)->where('section_name', $student_section)->where('campus_id', $campus_id)
                ->get();
        }

        return view('student_panel.student_class_schedule.classes_schedule', [
            'pagename' => $pagename,
            'student_class' => $student_class,
            'student_section' => $student_section,
            'timetableByDay' => $timetableByDay,
            'timetableBySubject' => $timetableBySubject,
        ]);
    }


    public function student_result(Request $request)
    {
        $pagename = 'Student result';
        return view('student_panel.student_result.student_result', [
            'pagename' => $pagename,
        ]);
    }

    public function student_exams(Request $request)
    {
        $pagename = 'Student Exams';
        return view('student_panel.student_exam.student_exams', [
            'pagename' => $pagename,
        ]);
    }
    public function singl_student_attendance(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('student_panel.sudent_attendance.student_attendance', [
            'pagename' => $pagename,
        ]);
    }
    public function get_student_calendar_attendance(Request $request)
    {
        $month = $request->query('month');
        $year = $request->query('year');
        $institute_id = $request->query('institute_id');
        $campus_id = $request->query('campus_id');
        $student_id = $request->query('student_id');

        $currentTD = 0;
        $calendar = "";

        $daysmonth = cal_days_in_month(CAL_GREGORIAN, $month - 1, $year);
        $minusDays = date('w', strtotime(date($year . '-' . $month . '-' . '1')));

        for ($em = ($daysmonth - $minusDays) + 1; $em <= $daysmonth; $em++) {
            $currentTD += 1;
            if ($currentTD == 1) {
                $calendar .= "<tr>";
            }
            $calendar .= '<td data-value="' . $em . '" style="width: 14.28571428571429%;" class="bg-light">
            <div class="day" style="text-align: right;margin-bottom: 10px;">' . $em . '</div>
        </td>';
        }

        $daysmonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        for ($d = 1; $d <= $daysmonth; $d++) {
            $currentTD += 1;
            if ($currentTD == 1) {
                $calendar .= "<tr>";
            } else if ($currentTD == 8) {
                $calendar .= "<tr>";
            } else if ($currentTD == 15) {
                $calendar .= "<tr>";
            } else if ($currentTD == 22) {
                $calendar .= "<tr>";
            } else if ($currentTD == 29) {
                $calendar .= "<tr>";
            } else if ($currentTD == 36) {
                $calendar .= "<tr>";
            }

            $loop_date = ($d < 10) ? '0' . $d : $d;
            $today_date = date('d');
            $show_border = "";

            if ($today_date == $loop_date) {
                $show_border = 'style="text-align: center; margin-bottom: 4px; border: 2px solid #ffae01;float: right; padding: 1px 4px; border-radius: 100%; background-color: #ffae01; color: #fff;"';
            } else {
                $show_border = 'style="text-align: right;margin-bottom: 10px;"';
            }

            $running_date_in_query = $year . '-' . $month . '-' . $loop_date;
            $show_calendars = "";
            $students_attendance = CampusTeacherStudentAttendance::where('institute_id', $institute_id)
                ->where('campus_id', $campus_id)
                ->where('student_id', $student_id)
                ->where('student_attendance_date', $running_date_in_query)
                ->first();

            if ($students_attendance) {
                $student_attendance = $students_attendance->student_attendance;
                $show_calendars .= '<div class="bg-light" style="/* margin-bottom: 2px; *//* border-left:4px solid #035d00; *//* padding: 10px 2px; *//* text-align: left; */width: 100%; display:flex;';
                switch ($student_attendance) {
                    case "Present":
                        $show_calendars .= 'background-color: #035d00!important;color: #fff!important;padding: 7px;">
                        <p style="font-size:12px; font-weight:bold; margin:0; padding:0; color:#fff!important;">Present</p>
                    </div>';
                        break;
                    case "Absent":
                        $show_calendars .= 'background-color: #ff0000!important;color: #fff!important;padding: 7px;">
                        <p style="font-size:12px; font-weight:bold; margin:0; padding:0; color:#fff!important;">Absent</p>
                    </div>';
                        break;
                    case "Leave":
                        $show_calendars .= 'background-color: #ffbf00!important;color: #fff!important;padding: 7px;">
                        <p style="font-size:12px; font-weight:bold; margin:0; padding:0; color:#fff!important;">Leave</p>
                    </div>';
                        break;
                    default:
                        $show_calendars .= 'background-color: #ffff00!important;color: #000!important;padding: 7px;">
                        <p style="font-size:12px; font-weight:bold; margin:0; padding:0; color:#000!important;">Unknown</p>
                    </div>';
                        break;
                }
            }

            $calendar .= '<td data-value="' . $d . '" style="width: 14.28571428571429%;">
            <div class="day" ' . $show_border . '>' . $d . '</div>
            ' . $show_calendars . '
         </td>';

            $show_calendars = "";
        }

        $lastcurrentTD = $currentTD;
        for ($em = $currentTD; $em < 42; $em++) {
            $currentTD += 1;

            if ($currentTD == 29) {
                $calendar .= "<tr>";
            } else if ($currentTD == 36) {
                $calendar .= "<tr>";
            }

            $calendar .= '<td data-value="' . (($em - $lastcurrentTD) + 1) . '" style="width: 14.28571428571429%;" class="bg-light">
            <div class="day" style="text-align: right;margin-bottom: 10px;">' . (($em - $lastcurrentTD) + 1) . '</div>
        </td>';
        }

        return $calendar;
    }

    public function student_library(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('student_panel.student_library.student_library', [
            'pagename' => $pagename,
        ]);
    }
    public function stu_fees(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('student_panel.student_fees.specific_stu_fees', [
            'pagename' => $pagename,
        ]);
    }

    public function stu_room(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('student_panel.book_student_room.stu_room', [
            'pagename' => $pagename,
        ]);
    }

    public function notice_board(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('student_panel.notice_board.notice_board', [
            'pagename' => $pagename,
        ]);
    }




    public function chat_box(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_first_name = $request->session()->get('student_first_name');
        $student_email = $request->session()->get('student_email');
        $pagename = 'Student Chat';


        return view('student_panel.student_chat.student_chats_boxes', [
            'pagename' => $pagename,
            'institute_id' => $institute_id,
            'campus_id' => $campus_id,
            'student_id' => $student_id,
            'student_first_name' => $student_first_name,
            'student_email' => $student_email,
        ]);
    }
    public function send_messagePage(Request $request)
    {
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_first_name = $request->session()->get('student_first_name');
        $student_email = $request->session()->get('student_email');
        $pagename = 'Student Chat';
        $gr = $request->session()->get('student_gr');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');
        $pagename = 'Student Chat';
        // $get_all_teachers = CampusEmployee::where();
        // $teacher = CampusEmployee::where('department', 'Teacher')->where('institute_id',$institute_id)->where('campus_id',$campus_id)->get();
        $teacher = CampusEmployee::where('institute_id', $institute_id)
            ->where('campus_id', $campus_id)
            ->where('department', 'Teacher')
            ->get();
        // dd($get_all_teachers); 
        $currentDateTime = Carbon::now();
        $currentFormattedTime = $currentDateTime->format('h:i A');
        $currentFormattedDate = $currentDateTime->format('Y-m-d');
        $get_all_sent_messages = CampusStudentTeacherChat::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('student_gr', $gr)->get();
        // dd( $get_all_sent_messages);
        return view('student_panel.student_chat.chat_box', [
            'pagename' => $pagename,
            'institute_id' => $institute_id,
            'campus_id' => $campus_id,
            'student_id' => $student_id,
            'student_first_name' => $student_first_name,
            'student_email' => $student_email,
            'currentDateTime' => $currentDateTime,
            'currentFormattedTime' => $currentFormattedTime,
            'currentFormattedDate' => $currentFormattedDate,
            'teacher' => $teacher,
            'get_all_sent_messages' => $get_all_sent_messages,
        ]);
    }
    public function StudentChat_send(Request $request)
    {
        // dd($request); 
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_first_name = $request->session()->get('student_first_name');
        $student_email = $request->session()->get('student_email');
        $gr = $request->session()->get('student_gr');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');

        $currentTime = $request->input('current_time');
        $currentDate = $request->input('current_date');
        $selectedTeacher = $request->input('teacher');
        $student_class = $request->input('student_class');
        $student_section = $request->input('student_section');
        $student_gr = $request->input('student_gr');
        $message = $request->input('message');
        // dd($currentDate); 
        $request->validate(
            [
                'teacher' => 'required',
                'message' => 'required',
            ]
        );
        $formData = new CampusStudentTeacherChat();
        $formData->institute_id = $institute_id;
        $formData->campus_id = $campus_id;
        $formData->student_gr = $student_gr;
        $formData->student_name = $student_first_name;
        $formData->student_class = $student_class;
        $formData->student_section = $student_section;
        $formData->teacher_name = $selectedTeacher;
        $formData->message = $message;
        $formData->message_sent_time =  $currentTime;
        $formData->message_sent_date = $currentDate;
        $formData->save();
        return response()->json(['message' => 'Form data saved successfully']);
        // Return a response indicating the success or failure of the form submission
        // return response()->json(['message' => 'Form submitted successfully']);
    }
    public function viewCourseDeatils(Request $request, $cardName)
    {
        // $cardName = $request->input('cardName');
        // dd($cardName);  
        // dd($request);
        $pagename = 'Subject Deatils';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_first_name = $request->session()->get('student_first_name');
        $student_email = $request->session()->get('student_email');
        $gr = $request->session()->get('student_gr');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');
        // dd( $institute_id, $campus_id, $student_id,  $student_first_name, $student_email, $student_class, $student_section);
        $get_all_course_material_ofSubject = CampusTeacherCourseMaterial::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('class_name', $student_class)->where('section_name', $student_section)->where('subject_name', $cardName)->get();

        // $all = CampusTeacherCourseMaterial::all();
        // dd($all);   
        // dd($get_all_course_material_ofSubject);
        return view('student_panel.student_courses.course_material_details', [
            'get_all_course_material_ofSubject' => $get_all_course_material_ofSubject,
            'pagename' => $pagename,
            'student_class' => $student_class,
            'student_section' => $student_section,
            'cardName' => $cardName,
        ]);
    }
    public function download_course_material($filename, $title)
    {
        // Define the path to the folder where the uploaded documents are stored.
        $pathToFile = public_path('teacher/course_material/' . $filename);
        // Check if the file exists
        if (file_exists($pathToFile)) {
            // Prepare the desired filename for the downloaded file.
            //  $downloadFilename = $title . ' - ' . $filename;
            $downloadFilename = $title;
            // Create a response to force download the file with the desired filename.
            return Response::download($pathToFile, $downloadFilename);
        } else {
            // If the file doesn't exist, redirect back or show an error message.
            return back()->with('error', 'File not found.');
        }
    }
    public function studentnotice_board(Request $request)
    {
        // dd($request);
        $pagename = 'Notice Board';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_first_name = $request->session()->get('student_first_name');
        $student_email = $request->session()->get('student_email');
        $gr = $request->session()->get('student_gr');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');
        // dd( $student_class, $student_section);
        $get_all_notices = TeacherNoticeBoard::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('Notice_class', $student_class)->where('Notice_section', $student_section)->get();

        // dd($get_all_notices);  
        return view('student_panel.student_notice.notices', [
            'pagename' => $pagename,
            'get_all_notices' => $get_all_notices,
        ]);
    }
    public function recieved_teachermessages(Request $request)
    {
        $pagename = 'Messages Recieved From Teachers';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_first_name = $request->session()->get('student_first_name');
        $student_email = $request->session()->get('student_email');
        $gr = $request->session()->get('student_gr');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');
        $get_all_teachers_messages = CampusTeacherStudentChat::where('institute_id', $institute_id)->where('campus_id', $campus_id)->where('class_name', $student_class)->where('section_name', $student_section)->where('student_gr_number', $gr)->get();
        // dd( $get_all_teachers_messages); 
        return view('student_panel.student_chat.recieved_messages', [
            'pagename' => $pagename,
            'get_all_teachers_messages' => $get_all_teachers_messages,
            'institute_id' => $institute_id,
            'campus_id' => $campus_id,
            'student_id' => $student_id,
            'student_first_name' => $student_first_name,
            'student_email' => $student_email,
            'gr' => $gr,
            'student_class' => $student_class,
            'student_section' => $student_section,
        ]);
    }
}
