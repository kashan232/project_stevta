<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatchCreationController extends Controller
{
    public function add_batch_creation(Request $request)
    {
        $pagename = 'Add Program Management';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.batch_creation.add_batch_creation',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function list_batch_creation(Request $request)
    {
        $pagename = 'List Degree Creation';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.batch_creation.list_batch_creation',
            [
                'pagename' => $pagename,
            ]
        );
    }
}
