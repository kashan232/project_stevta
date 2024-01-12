<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusEmployeeDeductionController extends Controller
{
    public function add_deduction(Request $request)
    {
        $pagename = 'Add Deduction';
        return view('institute_admin_panel.dashboard.Campus.campus_accounts.deduction.add-deduction', [
            'pagename' => $pagename,
        ]);
    }
    public function all_deduction(Request $request)
    {
        $pagename = 'All Deduction';
        return view('institute_admin_panel.dashboard.Campus.campus_accounts.deduction.all-deduction', [
            'pagename' => $pagename,
        ]);
    }
}
