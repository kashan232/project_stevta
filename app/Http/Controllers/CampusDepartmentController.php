<?php

namespace App\Http\Controllers;

use App\Models\CampusDepartment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusDepartmentController extends Controller
{

    public function add_department(Request $request)
    {
        $pagename = 'Add Department';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.hr_department.add_department', [
            'pagename' => $pagename,
        ]);
    }
    public function store_add_department(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        CampusDepartment::create([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'dept_name' => $request->dept_name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('department-added', 'Department Added Successfully');
    }

    public function all_department(Request $request)
    {
        $pagename = 'All Department';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_departments = CampusDepartment::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.hr_department.all_department', [
            'pagename'        => $pagename,
            'all_departments' => $all_departments,
        ]);
    }

    public function edit_department(Request $request, $id)
    {
        $pagename = 'Edit Department';
        $department_details = CampusDepartment::findOrFail($id);
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.hr_department.edit_department', [
            'pagename'        => $pagename,
            'department_details' => $department_details,
        ]);
    }
    public function update_department(Request $request, $id)
    {
        CampusDepartment::where('id', $id)->update([
            'dept_name' => $request->dept_name,
            'updated_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('update-success-message', 'Department updated Successfully');
    }
}
