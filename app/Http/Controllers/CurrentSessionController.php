<?php

namespace App\Http\Controllers;

use App\Models\CurrentSession;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CurrentSessionController extends Controller
{
    //


    public function add_currentsession()
    {
        $pagename = 'Add Current Session';
        return view('institute_admin_panel.dashboard.current_session.add_current_session', [
            'pagename' => $pagename
        ]);
    }




    public function save_session(Request $request)
    {
        // dd($request);

        $sa_id = $request->session()->get('Institute_admin_id');

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $final = $start_date . ' to ' . $end_date;


        CurrentSession::create([
            'institute_id' => $sa_id,
            'session_years' => $final,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success', 'Session add successfully!');
    }
}
