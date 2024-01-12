<?php

namespace App\Http\Controllers;

use App\Models\CampusEmployee;
use App\Models\CampusEmployeeLeave;
use App\Models\CampusPublicHoliday;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampusEmployeeLeaveController extends Controller
{
    public function add_employee_leave(Request $request)
    {
        $pagename = 'Add Employee Leave';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        //$emp_leaves = CampusEmployeeLeave::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get(); 
        $emp_ids = CampusEmployee::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->pluck('id');

        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.campus_employee_leave.add_employee_leave', [
            'pagename'  => $pagename,
            //'emp_leaves' => $emp_leaves,
            'emp_ids' => $emp_ids,
        ]);
    }
    public function store_employee_leave(Request $request)
    {
        $institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $employee_id = $request->input('emp_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $no_of_leaves = $request->input('no_of_leaves');

        $current_month = Carbon::now()->format('F');

        $leaveCounts = DB::table('campus_employee_leaves')
            ->select('emp_id', DB::raw('count(id) as leave_count'))
            ->where('current_month', $current_month)
            ->groupBy('emp_id')
            ->get()
            ->keyBy('emp_id');

        $leaveCountsArray = [];
        foreach ($leaveCounts as $empId => $count) {
            $leaveCount = $count->leave_count;
            $leaveCountsArray[$empId] = $leaveCount;
        }

        if (isset($leaveCountsArray[$employee_id]) && $leaveCountsArray[$employee_id] >= $no_of_leaves) {
            // Leave not granted
            // Add your logic here for when the leave is not granted
            
            return redirect()->back()->with('leave-complete', 'Your leave of this month is completed');
        } else {
            
            // Leave granted
            // Add your logic here for when the leave is granted

            // Check if an existing leave record exists for the employee
            $existingLeave = CampusEmployeeLeave::where('emp_id', $employee_id)
                ->where('institute_id', $institute_admin_id)
                ->where('campus_id', $campus_id)
                ->whereNull('deleted_at')
                ->first();

            if ($existingLeave) {
                // An existing leave record for this employee exists without a deleted_at value
                return redirect()->back()->with('leave-not-add', 'Leave already exists for this employee.');
            }


            // Check if a public holiday overlaps with the employee's leave dates
            $overlappingHoliday = CampusPublicHoliday::where('institute_id', $institute_admin_id)
                ->where('campus_id', $campus_id)
                ->where(function ($query) use ($start_date, $end_date) {
                    $query->where(function ($subQuery) use ($start_date, $end_date) {
                        $subQuery->where('holiday_start_date', '<=', $start_date)
                            ->where('holiday_end_date', '>=', $start_date);
                    })->orWhere(function ($subQuery) use ($start_date, $end_date) {
                        $subQuery->where('holiday_start_date', '<=', $end_date)
                            ->where('holiday_end_date', '>=', $end_date);
                    });
                })
                ->first();


            if ($overlappingHoliday) {
                // A public holiday overlaps with the employee's leave dates
                return redirect()->back()->with('leave-not-added', 'Leave cannot be granted, because holiday already given to these days.');
            } else {
                // Check if an existing leave record exists for the employee
                $existingLeave = CampusEmployeeLeave::where('emp_id', $employee_id)
                    ->whereNull('deleted_at')
                    ->first();

                if ($existingLeave) {
                    // An existing leave record for this employee exists without a deleted_at value
                    return redirect()->back()->with('leave-not-add', 'Leave already exist.');
                } else {
                    CampusEmployeeLeave::create([
                        'institute_id'   => $institute_admin_id,
                        'campus_id'      => $campus_id,
                        'emp_id'         => $request->emp_id,
                        'emp_name'       => $request->emp_name,
                        'title'          => $request->title,
                        'start_date'     => $request->start_date,
                        'current_month'  => $request->current_month,
                        'end_date'       => $request->end_date,
                        'description'    => $request->description,
                        'created_at'     => Carbon::now(),
                        'updated_at'     => Carbon::now(),
                    ]);

                    return redirect()->back()->with('leave-added', 'Leave Added Successfully');
                }
            }
        }
    }

    public function all_employee_leave(Request $request)
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
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.campus_employee_leave.employee_leave', [
            'pagename'              => $pagename,
            'all_employees_leaves'   => $all_employees_leaves,
            'remainingLeave'   => $remainingLeave,
        ]);
    }
    public function id_wise_name(Request $request)
    {
        $data = CampusEmployee::where('id', $request->select_emp_id)
            ->select('first_name', 'no_of_leaves')
            ->first();

        if ($data) {
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Employee not found.']);
        }
    }
    public function delete_employee_leave($delete)
    {
        $del = CampusEmployeeLeave::find($delete)->delete();
        return redirect()->back()->with('delete-message-employee', 'Employee Deleted Successsfully');
    }
}
