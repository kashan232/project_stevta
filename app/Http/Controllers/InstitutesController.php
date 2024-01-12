<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Institute;
use App\Models\MainSuperAdmin;
use App\Models\User;
use App\Models\Class_Section;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\InstituteLoginDetailMail;
use App\Models\CampusBilling;
use App\Models\CampusClass;
use App\Models\CampusDepartment;
use App\Models\CampusEmployee;
use App\Models\CampusEmployeeAttendance;
use App\Models\CampusEmployeeLeave;
use App\Models\CampusInventoryManagement;
use App\Models\CampusPublicHoliday;
use App\Models\CampusSyllabu;
use App\Models\StudentAddmission;
use App\Models\TeacherNoticeBoard;


class InstitutesController extends Controller
{
    public function main_dashboard(Request $request)
    {
        $pagename = 'Dashboard';
        $institute_counts   = DB::table('institutes')->count();
        $campus_counts   = DB::table('campuses')->count();
        $data = DB::table('cities')
            ->leftJoin('institutes', 'institutes.institute_city', '=', 'cities.city_name')
            ->select('cities.city_name', DB::raw('COUNT(institutes.id) as institute_count'))
            ->groupBy('cities.city_name')
            ->get()
            ->map(function ($item) {
                return [
                    'label' => $item->city_name,
                    'value' => $item->institute_count,
                ];
            })
            ->toArray();
        return view('main_super_admin.dashboard.index', [
            'pagename' => $pagename,
            'institute_counts' => $institute_counts,
            'campus_counts' => $campus_counts,
            'data' => $data,
        ]);
    }
    public function add_institute(Request $request)
    {
        $pagename = 'Add Institute';
        $all_cities = City::all();
        return view('main_super_admin.dashboard.institutes.institutes_form', [
            'pagename' => $pagename,
            'all_cities' => $all_cities,
        ]);
    }

    public function edit_institute($edit)
    {
        $pagename = "Edit Institute";
        $institutedetails = DB::table('institutes')->where('id', $edit)->get()->first();

        return view('main_super_admin.dashboard.institutes.institutes_edit_form', [
            'pagename' => $pagename,
            'institutedetails' => $institutedetails,
        ]);
    }

    public function store_institute(Request $request)
    {
        // dd($request); 
        $institute = Institute::create([
            'institute_name' => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'institute_email' => $request->institute_email,
            'institute_password' => $request->institute_password,
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $user = User::create([
            'name'  => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'email' => $request->institute_email,
            'password' => $request->institute_password,
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'who_is_login' => 'Institute'
        ]);
        // add 
        $institute_username = Str::slug($request->institute_name) . $user->id;
        Institute::where('id', $institute->id)->update([
            'Institute_username' => $institute_username,
        ]);
        User::where('id', $user->id)->update([
            'username' => $institute_username,
        ]);
        // add 
        return Redirect()
            ->back()
            ->with(
                'success-message-Institute',
                'Institute is successfully Registered!'
            );
    }

    public function update_institute(Request $request, $id)
    {
        Institute::where('id', $id)->update([
            'institute_name' => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'institute_email' => $request->institute_email,
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'updated_at' => Carbon::now(),
        ]);

        User::where('id', $id)->update([
            'name' => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'email' => $request->institute_email,
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'updated_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success-message-update', 'Institute is successfully Update!');
    }
    public function all_institute(Request $request)
    {
        $pagename = 'All Institute';
        $registered_institutes = Institute::all();
        // dd($registered_institutes);
        return view('main_super_admin.dashboard.institutes.all_institutes', [
            'pagename' => $pagename,
            'registered_institutes' => $registered_institutes,
        ]);
    }
    public function send_email_institute(Request $request)
    {
        $registered_institute_id = $request->input('registered_institute_id');
        $institute_email = $request->input('institute_email');
        $institute_username = $request->input('institute_username');
        $institute_password = $request->input('institute_password');

        $count = Institute::where('institute_email', $institute_email)->count();


        if ($count < 1) {
            $message = 'Entered Email is not located in our Database.';
            return response()->json(['success' => false, 'message' => $message]);
        } else {
            $mailData = [
                'institute_username' => $institute_username,
                'institute_password' => $institute_password,
            ];

            try {
                Mail::to($institute_email)->send(new InstituteLoginDetailMail($mailData));
                $successMessage = 'Email has been sent successfully.';
                return response()->json(['success' => true, 'message' => $successMessage]);
            } catch (\Exception $e) {
                // Log the exception for further debugging
                Log::error('Email sending error: ' . $e->getMessage());

                return response()->json(['success' => false, 'message' => 'Email is not sent. Please try again later.']);
            }
        }

        return false;
    }

    public function lock_institute(Request $request)
    {
        $registered_institute_id = $request->input('registered_institute_id');
        $isChecked = $request->input('isChecked');

        Institute::where('id', $registered_institute_id)->update([
            'lock_status' => $isChecked,
        ]);

        // Return a response message
        $message = ($isChecked == 1) ? 'Institute locked successfully.' : 'Institute unlocked successfully.';
        return response()->json(['message' => $message]);
    }
    public function view_institute($view)
    {
        $pagename = 'View Institute';
        $view_institutes = Institute::find($view);
        // dd($view_institutes);
        return view('main_super_admin.dashboard.institutes.institutes_detail', [
            'pagename' => $pagename,
            'view_institutes' => $view_institutes,
        ]);
    }


    public function delete_institute($delete)
    {
        $res = Institute::find($delete)->delete();
        return Redirect()
            ->back()
            ->with(
                'delete-message-Institute',
                'Institute is deleted successfully!'
            );
    }


    public function updateUserStatus(Request $request)
    {
        $userId = $request->input('user_id');

        $user = User::find($userId);
        if ($user) {
            $user->active_status = 0;
            $user->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }



    // function for view login page of insitute 
    public function Insitute_login(Request $request)
    {
        return view('main_super_admin.dashboard.institutes.Insitute_login');
    }

    // function for logged insitute 

    public function institute_logged(Request $request)
    {


        $count = Institute::where('Institute_username', '=', $request->Institute_username)
            ->where('institute_password', '=', $request->Institute_password)
            ->where('lock_status', '=', 0) // Add this condition to check lock_status
            ->count();
        // dd($count);
        if ($count < 1) {

            $user = Institute::where('Institute_username', '=', $request->Institute_username)
                ->first();

            if (!$user) {
                return Redirect()->back()->with('ints-message', 'Wrong Login Details');
            }

            if ($user->lock_status == 1) {
                return Redirect()->back()->with('ints-message', 'Sorry, your account is locked');
            }

            if ($user->institute_password !== $request->Institute_password) {
                return Redirect()->back()->with('ints-message', 'Wrong Login Details');
            }
        } else {

            // Rest of the code remains the same
            $user = Institute::where('Institute_username', '=', $request->Institute_username)
                ->where('institute_password', '=', $request->Institute_password)
                ->where('lock_status', '=', 0)
                ->first();
            $request->session()->put('Institute_admin_id', $user->id);
            $request->session()->put('Institute_username', $user->Institute_username);
            $request->session()->put('Institute_email', $user->institute_email);
            $request->session()->put('Institute_admin_password', $user->institute_password);

            // dd($request); 
            $Institute_admin_id = $request->session()->get('Institute_admin_id');
            $all_campuses_fr_side = campus::where('institute_id', $Institute_admin_id)->get();
            $request->session()->put('all_campuses_fr_side', $all_campuses_fr_side);

            return Redirect()->route('institute_Dashboard');
        }
    }

    // function for opening Institute Dashboard page 
    public function institute_Dashboard(Request $request)
    {
        $pagename = 'institute';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $all_campuses_fr_side = campus::where('institute_id', $Institute_admin_id)->get();
        $students_count   = DB::table('student_addmissions')->where('institute_id', $Institute_admin_id)->count();
        $teachers_count   = DB::table('campus_employees')->where('department', 'Teacher')->count();

        $maleCount = DB::table('student_addmissions')->where('gender', 'male')->count();
        $femaleCount = DB::table('student_addmissions')->where('gender', 'female')->count();
        // dd($maleCount, $femaleCount);


        // fetching the teacher notices  
        $all_notices = TeacherNoticeBoard::where('institute_id', $Institute_admin_id)->get();


        $request->session()->put('all_campuses_fr_side', $all_campuses_fr_side);
        return view('main_super_admin.dashboard.institutes.institute_Dashboard', ['Institute_admin_id' => $Institute_admin_id, 'all_campuses_fr_side' => $all_campuses_fr_side, 'request' => $request, 'pagename' => $pagename, 'students_count' => $students_count, 'teachers_count' => $teachers_count, 'maleCount' => $maleCount, 'femaleCount' => $femaleCount, 'all_notices' => $all_notices]);
    }

    // function for view Institute-profile from navbar 
    public function Institute_profile_view(Request $request)
    {

        $sa_id = $request->session()->get('Institute_admin_id');

        $InstituteData = DB::table('institutes')->where('id', $sa_id)->first();

        return view('institute_admin_panel.dashboard.Campus.Institute_profile',  ['InstituteData' => $InstituteData]);
    }

    // function for settings of institute view 
    public function Institute_account_settings(Request $request)
    {

        $sa_id = $request->session()->get('Institute_admin_id');

        $Data = DB::table('institutes')->where('id', $sa_id)->first();

        return view('institute_admin_panel.dashboard.Campus.institute_profile_settings', ['Data' => $Data]);
    }


    // function for update profile settings update of Institutes 
    public function update_institute_settings(Request $request, $id)
    {

        $sa_id = $request->session()->get('Institute_admin_id');

        $old_password            = $request->old_password;
        $new_password            = $request->new_password;
        $retype_password         = $request->retype_password;

        $sa_id_data = Institute::where('id', '=', $sa_id)->first();

        if ($old_password != $sa_id_data->institute_password) {
            return Redirect()->back()->with('dont-match', 'Old password is not correct');
        } else {
            if ($new_password === $retype_password) {


                //    ddd($request); 
                Institute::where('id', $id)->update([
                    'institute_name' => $request->institute_name,
                    'Institute_username' => $request->Institute_username,
                    'Institute_address' => $request->Institute_address,
                    'institute_password' => $request->new_password,
                    'institute_city' => $request->institute_city,
                    'institute_email' => $request->institute_email,
                    'institute_contact' => $request->institute_contact,
                    'institute_ptcl' => $request->institute_ptcl,
                    'updated_at' => Carbon::now(),
                ]);

                return Redirect()->back()->with('success-message-update', 'Institute Details is successfully Update!');
            } else {
                return Redirect()->back()->with('failed', 'Pasword not match ! Both passwords must  same ');
            }
        }
    }



    //   public function  logout_insitute
    public function logout_insitute(Request $request)
    {


        $request->session()->forget(['Institute_admin_id', 'Institute_username', 'Institute_admin_password']);
        $request->session()->flush();

        echo '<script> 
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };  
    </script>';
        // return Redirect()->route('Super-admin-login');
        return Redirect()->route('Insitute-login');
    }

    public function campus_general_operation(Request $request, $id)
    {
        $pagename = 'General Operation';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $request->session()->put('campus_id', $id);
        $Institute_admin_email = $request->session()->get('Institute_email');

        $campus_id = $request->session()->get('campus_id');

        $campus = DB::table('campuses')
            ->where('institute_id', $Institute_admin_id)
            ->where('id', $campus_id)
            ->select('campus_name')
            ->first();

        if ($campus) {
            $campusName = $campus->campus_name;
        } else {
            $campusName = null;
        }
        // dd($campusName); 
        $request->session()->put('campus_name', $campusName);

        return view('institute_admin_panel.dashboard.Campus.generation_operation.general_operation', [
            'pagename' => $pagename,
            'campuses' => $campus,
            'Institute_admin_em ail' => $Institute_admin_email,
            'Institute_admin_id' => $Institute_admin_id,
            'campusName' => $campusName,
            'campus_id' => $campus_id,

        ]);
    }
    public function campus_hr(Request $request, $id)
    {
        $pagename = 'HR';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $request->session()->put('campus_id', $id);
        $Institute_admin_email = $request->session()->get('Institute_email');

        $campus_id = $request->session()->get('campus_id');
        $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first();

        $campus_id = $request->session()->get('campus_id');

        $campus = DB::table('campuses')
            ->where('institute_id', $Institute_admin_id)
            ->where('id', $campus_id)
            ->select('campus_name')
            ->first();

        if ($campus) {
            $campusName = $campus->campus_name;
        } else {
            $campusName = null;
        }
        // dd($campusName); 
        $request->session()->put('campus_name', $campusName);
        return view('institute_admin_panel.dashboard.campus.campus_hr_screen.campus_hr', [
            'pagename' => $pagename,
            'campuses' => $campuses,
            'campusName' => $campusName,
        ]);
    }
    public function campus_exams(Request $request)
    {
        $pagename = 'HR';
        return view('institute_admin_panel.dashboard.campus.campus_exams', [
            'pagename' => $pagename,
        ]);
    }
    public function campus_accounts_screen(Request $request, $id)
    {
        $pagename = 'Accounts';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $request->session()->put('campus_id', $id);
        $Institute_admin_email = $request->session()->get('Institute_email');

        $campus_id = $request->session()->get('campus_id');
        $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first();

        $campus_id = $request->session()->get('campus_id');

        $campus = DB::table('campuses')
            ->where('institute_id', $Institute_admin_id)
            ->where('id', $campus_id)
            ->select('campus_name')
            ->first();

        if ($campus) {
            $campusName = $campus->campus_name;
        } else {
            $campusName = null;
        }
        // dd($campusName); 
        $request->session()->put('campus_name', $campusName);
        return view('institute_admin_panel.dashboard.campus.campus_accounts.campus_accounts_screen', [
            'pagename' => $pagename,
            'campuses' => $campuses,
            'campusName' => $campusName,
        ]);
    }
    public function updateActiveStatus(Request $request, $id)
    {
        $item = User::findOrFail($id);
        $item->active_status = 1;
        $item->save();

        return response()->json(['success' => true, 'message' => 'Item updated successfully']);
    }
    // Seprate Instutite FUnctions
    // all institutes listes views functions 
    public function Institute_admissions(Request $request)
    {
        $pagename = "Addmissions";
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first();

        $student_lists = StudentAddmission::where('institute_id', '=', $Institute_admin_id)
            ->where('campus_id', '=', $campus_id)
            ->where(function ($query) {
                $query->where('next_session_status', '!=', 'leave')
                    ->orWhereNull('next_session_status');
            })
            ->orderBy('id', 'DESC')
            ->get();

        $campusName = $request->session()->get('campus_name');
        return view(
            'institute_admin_panel.dashboard.Campus.generation_operation.addmission.addmissions',
            [
                'pagename' => $pagename, 'student_lists' => $student_lists,
            ]
        );
    }
    public function institute_view_student(Request $request, $id)
    {
        $pagename = 'view Student Detail';
        $view_student = StudentAddmission::Find($id);
        //ddd($request);
        // dd($id);
        return view('institute_admin_panel.dashboard.Campus.generation_operation.addmission.view_student_detail', [
            'pagename' => $pagename,
            'view_student' => $view_student,
        ]);
    }
    public function institute_former(Request $request)
    {
        // ddd($request);
        $pagename = 'Disbale Formers';
        $deleted_formers = StudentAddmission::onlyTrashed()->get();
        return view('institute_admin_panel.dashboard.Campus.generation_operation.former.all_disable_former', [
            'pagename' => $pagename,
            'deleted_formers' => $deleted_formers,
        ]);
    }
    public function institute_classes(Request $request)
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
        return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.all_classes', [
            'pagename' => $pagename,
            'all_classes' => $all_classes,
            // 'campuses' => $campuses,   
            'sections' => $sections,
            'studentCounts' => $studentCounts,
            'genderCounts' => $genderCounts,
        ]);
    }
    public function institute_sections_view(Request $request, $class_id)
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

        return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.sections_view', [
            'class' => $class,
            'sections' => $sections,
        ]);
    }
    public function institute_all_subjects(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        return view('institute_admin_panel.dashboard.Campus.generation_operation.Subjects.all_subjects', [
            'classes' => $classes,
        ]);
    }
    public function institute_all_inventory(Request $request)
    {
        $pagename = 'All Inventory';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $inventory_lists = CampusInventoryManagement::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        return view('institute_admin_panel.dashboard.campus.campus_accounts.inventory_billing_management.all-inventory', [
            'pagename'        => $pagename,
            'inventory_lists' => $inventory_lists,
        ]);
    }
    public function institute_billing(Request $request)
    {
        $pagename = 'All billing';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $billing_lists = CampusBilling::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        //dd($billing_lists);
        return view('institute_admin_panel.dashboard.campus.campus_accounts.inventory_billing_management.billing', [
            'pagename'      => $pagename,
            'billing_lists' => $billing_lists,
        ]);
    }
    public function institute_all_employees(Request $request)
    {
        $pagename = 'All Employee';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_employees = CampusEmployee::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        return view('institute_admin_panel.dashboard.campus.campus_hr_screen.hr_employees.all_employees', [
            'pagename'        => $pagename,
            'all_employees' => $all_employees,
        ]);
    }
    public function institute_all_syllabus(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $pagename = 'Syllabus';
        $all_syllabus = CampusSyllabu::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();
        $campusName = $request->session()->get('campus_name');

        return view(
            'institute_admin_panel.dashboard.Campus.generation_operation.Syllabus.all_syllabus',
            [
                'pagename' => $pagename,
                'all_syllabus' => $all_syllabus,
            ]
        );
    }
    public function institute_all_employee_leave(Request $request)
    {
        $pagename = 'ALL Employee Leave';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_employees_leaves = CampusEmployeeLeave::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();


        $emp_leave = CampusEmployee::select('id', 'no_of_leaves')
            ->where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get()
            ->keyBy('id');

        $leaveCounts = DB::table('campus_employee_leaves')
            ->select('emp_id', DB::raw('count(id) as leave_count'))
            ->groupBy('emp_id')
            ->get()
            ->keyBy('emp_id');

        $remainingLeave = [];

        foreach ($emp_leave as $employee) {
            $employeeID = $employee->id;
            $leaveCount = $employee->no_of_leaves;

            $leaveTaken = isset($leaveCounts[$employeeID]) ? $leaveCounts[$employeeID]->leave_count : 0;
            $remainingLeave[$employeeID] = $leaveCount - $leaveTaken;
        }
        // dd($remainingLeave); 
        return view('institute_admin_panel.dashboard.campus.campus_hr_screen.campus_employee_leave.employee_leave', [
            'pagename'              => $pagename,
            'all_employees_leaves'   => $all_employees_leaves,
            'remainingLeave'   => $remainingLeave,
        ]);
    }
    public function institute_all_holiday(Request $request)
    {
        $pagename = 'All Department';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_public_holidys = CampusPublicHoliday::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        return view('institute_admin_panel.dashboard.campus.campus_hr_screen.hr_public_holidays.all_holidays', [
            'pagename'        => $pagename,
            'all_public_holidys' => $all_public_holidys,
        ]);
    }
    public function institute_all_department(Request $request)
    {
        $pagename = 'All Department';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_departments = CampusDepartment::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        return view('institute_admin_panel.dashboard.campus.campus_hr_screen.hr_department.all_department', [
            'pagename'        => $pagename,
            'all_departments' => $all_departments,
        ]);
    }
    public function institute_choose_month(Request $request)
    {
        $pagename = 'Choose Month';
        return view('institute_admin_panel.dashboard.campus.campus_hr_screen.campus_employee_attendance.choose_month', [
            'pagename' => $pagename,
        ]);
    }

    public function institute_store_choose_month(Request $request)
    {
        //dd($request);
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $dateFrom = $request->input('date_from');
        $dateTo = $request->input('date_to');
        $choose_date = CampusEmployeeAttendance::whereBetween('date', [$dateFrom, $dateTo])->get();
        $attendance_details = CampusEmployeeAttendance::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        return view('institute_admin_panel.dashboard.campus.campus_hr_screen.campus_employee_attendance.all_attendance', [
            'choose_date' => $choose_date,
            'attendance_details' => $attendance_details,
        ]);
    }
    public function institute_all_attendance(Request $request)
    {
        $pagename = 'ALL Attendance';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $attendance_details = CampusEmployeeAttendance::where('institute_id', '=', $Institute_admin_id)
            ->where('campus_id', '=', $campus_id)->get();

        return view('institute_admin_panel.dashboard.campus.campus_hr_screen.campus_employee_attendance.all_attendance', [
            'pagename' => $pagename,
            'attendance_details' => $attendance_details,
        ]);
    }

    public function discipline_record(Request $request)
    {
        $pagename = 'Discipline Record';
        return view('institute_admin_panel.dashboard.ui_work.discipline_record', [
            'pagename' => $pagename,
        ]);
    }
    public function fee_challan(Request $request)
    {
        $pagename = 'Fee Challan Submission';
        return view('institute_admin_panel.dashboard.ui_work.fee_challan', [
            'pagename' => $pagename,
        ]);
    }
    public function mcqs_testing(Request $request)
    {
        $pagename = 'MCQs Test';
        return view('institute_admin_panel.dashboard.ui_work.mcqs_testing', [
            'pagename' => $pagename,
        ]);
    }
}
