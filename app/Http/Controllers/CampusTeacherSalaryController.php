<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusTeacherSalaryController extends Controller
{
    public function add_salary(Request $request)
    {
        $pagename = 'Add Salary';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_accounts.salary.add-salary', [
            'pagename' => $pagename,
        ]);
    }
    public function list_salary(Request $request)
    {
        $pagename = 'List Salary';
        return view('institute_admin_panel.dashboard.Campus.campus_accounts.salary.all-salary', [
            'pagename' => $pagename,
        ]);
    }
}
