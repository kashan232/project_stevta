<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DegreeCreationController extends Controller
{
    public function list_degree_creation(Request $request)
    {
        $pagename = 'List Degree Creation';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.degree_creation.list_degree_creation',
            [
                'pagename' => $pagename,
            ]
        );
    }

    public function add_degree_creation(Request $request)
    {
        $pagename = 'Add Degree Creation';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.degree_creation.add_degree_creation',
            [
                'pagename' => $pagename,
            ]
        );
    }
}
