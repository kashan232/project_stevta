<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectManagementController extends Controller
{
    public function add_sub_manage(Request $request)
    {
        $pagename = 'Add Subject Management';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.subject_management.add_sub_manage',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function list_sub_manage(Request $request)
    {
        $pagename = 'List Subject Management';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.subject_management.list_sub_manage',
            [
                'pagename' => $pagename,
            ]
        );
    }
}
