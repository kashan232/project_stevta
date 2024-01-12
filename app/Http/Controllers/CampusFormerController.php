<?php

namespace App\Http\Controllers;

use App\Models\StudentAddmission;
use Illuminate\Http\Request;

class CampusFormerController extends Controller
{
    public function Campusformer_student(Request $request)
    {
        $pagename = "All Formers";
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $campusName = $request->session()->get('campus_name');
        // $former = StudentAddmission::where('institute_id', $Institute_admin_id)
        // ->where('campus_id', $campus_id)
        // ->where('next_session_status', '=', 'Leave')
        // ->get(); 
        $former = StudentAddmission::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->onlyTrashed()->get();

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.former.all_formers',
            [
                'pagename' => $pagename, 'Institute_admin_id' => $Institute_admin_id, 'campus_id' => $campus_id,
                'campusName' => $campusName, 'former' => $former
            ]
        );
    }
    public function CampusViewFormer_Stuent(Request $request, $id)
    {
        $pagename = 'view Student Detail';
        // $view_student = StudentAddmission::Find($id);
        $view_student= StudentAddmission::withTrashed()->find($id);
        //ddd($request); 
        // dd($id); 
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.former.Campusviewdeleted_formers', [
            'pagename' => $pagename,
            'view_student' => $view_student,
        ]);
    }
    public function Campusrestore_student(Request $request, $id)
    {
        $record = StudentAddmission::withTrashed()->find($id);
        // dd($record);
            if ($record) {
                $record->restore();
                return redirect()->back()->with('success', 'Record restored successfully.');
            }
            return redirect()->back()->with('success', 'Record not found');
    }
}
