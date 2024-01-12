<?php

namespace App\Http\Controllers;

use App\Models\CampusBatch;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusBatchController extends Controller
{
    //
    public function campus_batches(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        // dd($Institute_admin_id,$campus_id);  

        $get_all_batches = CampusBatch::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)->get();

        $pagename = "Batch";

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.batch.batches', [
            'get_all_batches' => $get_all_batches,
            'pagename' => $pagename,
        ]);
    }


    public function add_batch(Request $request)
    {

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        // dd($Institute_admin_id);
        $campus_id = $request->session()->get('campus_id');
        // dd($Institute_admin_id,$campus_id);  

        $pagename = "Batch";
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.batch.add_batch');
    }



    public function save_batch(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        // dd($campus_id); 

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $final = $start_date . ' to ' . $end_date;

        CampusBatch::create([
            'institute_id'            => $Institute_admin_id,
            'campus_id'               => $campus_id,
            'batch'               => $final,
            'created_at'              => Carbon::now(),
            'updated_at'              => Carbon::now(),
        ]);
        return redirect()->back()->with('success', 'Batch added Successfully.. !');
    }

}
