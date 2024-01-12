<?php

namespace App\Http\Controllers;

use App\Models\CampusDepartment;
use App\Models\CampusEmployee;
use App\Models\CampusEmployeeAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class CampusEmployeeAttendanceController extends Controller
{
    public function choose_month(Request $request)
    {
        $pagename = 'Choose Month';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $departments = CampusDepartment::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.campus_employee_attendance.choose_month',
            [
                'pagename'      => $pagename,
                'departments'    => $departments,
            ]
        );
    }
    public function fetch_employee_attendance(Request $request)
    {
        // dd($request);
        $pagename = 'List Employee Attendance';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $dept_name = $request->input('dept_name');
        $employee_attendance_date = $request->input('employee_attendance_date');
        $all_employess = CampusEmployee::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('department', $dept_name)
            ->get();

        $employees_attendance_data = DB::table('campus_employee_attendances')
            ->where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('department', $dept_name)
            ->where('employee_attendance_date', $employee_attendance_date)
            ->pluck('employee_attendance', 'emp_id')
            ->toArray();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.campus_employee_attendance.employee_attendance',
            [
                'pagename' => $pagename,
                'all_employess' => $all_employess,
                'dept_name' => $dept_name,
                'employee_attendance_date' => $employee_attendance_date,
                'employees_attendance_data' => $employees_attendance_data,
            ]
        );
    }
    public function store_employee_attendance(Request $request)
    {
        // dd($request);
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $empIds = $request->input('emp_id');
        $employee_attendance_date = $request->input('employee_attendance_date');
        $empNames = $request->input('emp_name');
        $employees_attendance_data = $request->input('attendance');
        $department = $request->input('department');
        $job_designation = $request->input('job_designation');

        foreach ($empIds as $index => $empId) {
            $attendance = $employees_attendance_data[$empId];

            $recordExists = CampusEmployeeAttendance::where('emp_id', $empId)
                ->where('employee_attendance_date', $employee_attendance_date)
                ->exists();

            if ($recordExists) {
                CampusEmployeeAttendance::where('emp_id', $empId)
                    ->where('employee_attendance_date', $employee_attendance_date)
                    ->update([
                        'employee_attendance' => $attendance,
                    ]);
            } else {
                CampusEmployeeAttendance::create([
                    'institute_id' => $Institute_admin_id,
                    'campus_id' => $campus_id,
                    'emp_id' => $empId,
                    'department' => $department,
                    'job_designation' => $job_designation,
                    'emp_name' => $empNames[$index],
                    'employee_attendance_date' => $employee_attendance_date,
                    'employee_attendance' => $attendance,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
        return Redirect()->back()->with('attendance_save', 'Attendance create successfully!');
    }

    // Attendance record
    public function attendance_daily_monthly(Request $request)
    {
        $pagename = 'Choose Card';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        return view(
            'campus_admin_panel.dashboard.Campus_General_operations.campus_hr_screen.campus_employee_attendance.attendance_daily_monthly',
            [
                'pagename'      => $pagename,
            ]
        );
    }
    // Daily Attendance Record
    public function choose_daily_att(Request $request)
    {
        $pagename = 'Choose Date';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_departments = CampusDepartment::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_operations.campus_hr_screen.campus_employee_record.daily_attendance.choose_daily_att',
            [
                'pagename'      => $pagename,
                'all_departments'      => $all_departments,
            ]
        );
    }
    public function fetch_employee_attendance_record(Request $request)
    {
        $pagename = 'Attendance List';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $dept_name = $request->input('dept_name');
        $attendance_date = $request->input('employee_attendance_date');

        $attendance_records = CampusEmployeeAttendance::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('department', $dept_name)
            ->where('employee_attendance_date', $attendance_date)
            ->get();
        // dd($attendance_records);
        return view('campus_admin_panel.dashboard.Campus_General_operations.campus_hr_screen.campus_employee_record.daily_attendance.list_employee_attendance_record',
            [
                'pagename'                => $pagename,
                'attendance_records'      => $attendance_records,
            ]
        );
    }
    public function choose_month_employee(Request $request)
    {
        $pagename = 'Choose Month';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_departments = CampusDepartment::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_operations.campus_hr_screen.campus_employee_record.monthly_attendance.choose_month_employee',
            [
                'pagename'           => $pagename,
                'all_departments'    => $all_departments,
            ]
        );
    }
    public function employee_monthly_attendance_record(Request $request)
    {
        $pagename = 'Monthly Attendance List';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $dept_name = $request->input('dept_name');
        $attendance_date = $request->input('employee_attendance_date');
        $emp_name = $request->input('emp_name');

        // Extract the month and year from the selected date
        $year = date('Y', strtotime($attendance_date));
        $month = date('m', strtotime($attendance_date));

        // Days count nikalne ke liye cal_days_in_month function ka istemal karen
        // $days_count = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        
        $days_count = date('t', strtotime($year . '-' . $month . '-01'));
        $attendance_records = CampusEmployeeAttendance::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('department', $dept_name)
            ->whereYear('employee_attendance_date', $year)
            ->whereMonth('employee_attendance_date', $month)
            ->get();

        // dd($present_count);
        return view('campus_admin_panel.dashboard.Campus_General_operations.campus_hr_screen.campus_employee_record.monthly_attendance.employee_monthly_attendance_record',
            [
                'pagename'                => $pagename,
                'attendance_records'      => $attendance_records,
                'attendance_date'        => $attendance_date,
                'days_count'             => $days_count,
            ]
        );
    }
    public function individual_employee_attendance(Request $request, $id, $dep, $at_date, $total_month_days)
    {
        $pagename     = 'Attendance List';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id    = $request->session()->get('campus_id');
        $emp_name     = $request->input('emp_name');
        $emp_id       = $id;
        $emp_dep      = $dep;
        $emp_at_date  = $at_date;
        $year         = date('Y', strtotime($emp_at_date));
        $month        = date('m', strtotime($emp_at_date));
        $total_month_days = $total_month_days;
        $employee_data = CampusEmployeeAttendance::selectRaw('
            SUM(CASE WHEN employee_attendance = "Present" THEN 1 ELSE 0 END) as present_count,
            SUM(CASE WHEN employee_attendance = "Absent" THEN 1 ELSE 0 END) as absent_count,
            SUM(CASE WHEN employee_attendance = "Leave" THEN 1 ELSE 0 END) as leave_count,
            department,
            job_designation,
            emp_name,
            employee_attendance_date,
            employee_attendance
        ')
            ->where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('emp_id', $emp_id)
            ->where('department', $emp_dep)
            ->whereYear('employee_attendance_date', $year)
            ->whereMonth('employee_attendance_date', $month)
            ->groupBy('department', 'job_designation', 'emp_name', 'employee_attendance_date', 'employee_attendance')
            ->get();

        // Calculate the counts after retrieving the data
        $present_count = $employee_data->sum('present_count');
        $absent_count = $employee_data->sum('absent_count');
        $leave_count = $employee_data->sum('leave_count');
        return view('campus_admin_panel.dashboard.Campus_General_operations.campus_hr_screen.campus_employee_record.monthly_attendance.individual_employee_attendance',
            [
                'employee_data' => $employee_data,
                'pagename'      => $pagename,
                'emp_id'        => $emp_id,
                'emp_dep'       => $emp_dep,
                'emp_at_date'   => $emp_at_date,
                'emp_name'      => $emp_name,
                'total_month_days'      => $total_month_days,
                'present_count'      => $present_count,
                'absent_count'      => $absent_count,
                'leave_count'      => $leave_count,
            ]
        );
    }
    // public function generate_pdf(Request $request)
    // {
    //     $Institute_admin_id = $request->session()->get('Institute_admin_id');
    //     $campus_id = $request->session()->get('campus_id');
    //     $employee_attendance_date = $request->input('employee_attendance_date');
    //     $employee_attendance_type = $request->input('employee_attendance');

    //     $query = CampusEmployeeAttendance::where('institute_id', $Institute_admin_id)
    //     ->where('campus_id', $campus_id);

    //     if ($employee_attendance_date) {
    //         $query->whereBetween('employee_attendance_date', [ $employee_attendance_date ]);
    //     }
    //     if ($employee_attendance_type == 'All') {
    //         $query->where('employee_attendance', $employee_attendance_type);
    //     }
    //     $emp_Attendance = $query->get();

    //     $pdf = PDF::loadView('pdf.attendance', [
    //         'employee_attendance' => $emp_Attendance,
    //     ]);
    //     return $pdf->download('employee_attendance_report.pdf');
    // }    
}
