<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramManagementController extends Controller
{
    public function add_program_manage(Request $request)
    {
        $pagename = 'Add Program Management';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.program_management.add_program_manage',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function list_program_manage(Request $request)
    {
        $pagename = 'List Degree Creation';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.program_management.list_program_manage',
            [
                'pagename' => $pagename,
            ]
        );
    }
}
