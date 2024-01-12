<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusEmployeeBonusController extends Controller
{
    public function add_bonus(Request $request)
    {
        $pagename = 'All Deduction';
        return view('institute_admin_panel.dashboard.Campus.campus_accounts.bonus.add-bonus', [
            'pagename' => $pagename,
        ]);
    }
    public function all_bonus(Request $request)
    {
        $pagename = 'All Deduction';
        return view('institute_admin_panel.dashboard.Campus.campus_accounts.bonus.all-bonus', [
            'pagename' => $pagename,
        ]);
    }
}
