<?php

namespace App\Http\Controllers;

use App\Models\campus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingleCampusController extends Controller
{
    public function campus_log(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $campus_username = $request->session()->get('campus_username');
        $campus_email = $request->session()->get('campus_email');
        $campus_password = $request->session()->get('campus_password');
        return view('campus_admin_panel.dashboard.Campus_welcome', [
            'Institute_admin_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'campus_username' => $campus_username,
            'campus_email' => $campus_email,
            'campus_password' => $campus_password
        ]);
    }
    public function CampusGeneral_Operations(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $Institute_admin_email = $request->session()->get('Institute_email');
        $campus_id = $request->session()->get('campus_id');
        $campus_username = $request->session()->get('campus_username');
        $campus_email = $request->session()->get('campus_email');
        $campus_password = $request->session()->get('campus_password');
        $campusName = $request->session()->get('campus_name');

        return view('campus_admin_panel.dashboard.General_Operations', [
            'Institute_admin_id' => $Institute_admin_id,
            'Institute_admin_email' => $Institute_admin_email,
            'campus_id' => $campus_id,
            'campus_username' => $campus_username,
            'campus_email' => $campus_email,
            'campus_password' => $campus_password,
            'campusName' => $campusName,
        ]);
    }
    public function CampusHrOperations(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $Institute_admin_email = $request->session()->get('Institute_email');
        $campus_id = $request->session()->get('campus_id');
        $campus_username = $request->session()->get('campus_username');
        $campus_email = $request->session()->get('campus_email');
        $campus_password = $request->session()->get('campus_password');
        $campusName = $request->session()->get('campus_name');
        return view('campus_admin_panel.dashboard.Hr_Operations', [
            'Institute_admin_id' => $Institute_admin_id,
            'Institute_admin_email' => $Institute_admin_email,
            'campus_id' => $campus_id,
            'campus_username' => $campus_username,
            'campus_email' => $campus_email,
            'campus_password' => $campus_password,
            'campusName' => $campusName,
        ]);
    }

    public function CampusAccountsOperations(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $Institute_admin_email = $request->session()->get('Institute_email');
        $campus_id = $request->session()->get('campus_id');
        $campus_username = $request->session()->get('campus_username');
        $campus_email = $request->session()->get('campus_email');
        $campus_password = $request->session()->get('campus_password');
        $campusName = $request->session()->get('campus_name');
        return view('campus_admin_panel.dashboard.Accounts_Operations', [
            'Institute_admin_id' => $Institute_admin_id,
            'Institute_admin_email' => $Institute_admin_email,
            'campus_id' => $campus_id,
            'campus_username' => $campus_username,
            'campus_email' => $campus_email,
            'campus_password' => $campus_password,
            'campusName' => $campusName,
        ]);
    }

    public function dummay_exam_model(Request $request)
    {
        $pagename = 'list student attendance';
        return view('campus_admin_panel.dashboard.exam', [
            'pagename' => $pagename,
        ]);
    }

    public function campus_login()
    {
        return view('campus_admin_panel.dashboard.login.campus_login');
    }
    public function campus_logged(Request $request)
    {
        $count = campus::where(function ($query) use ($request) {
            $query->where('campus_username', '=', $request->username)
                ->orWhere('campus_email', '=', $request->username); // Checking for username or email
        })->where('campus_password', '=', $request->password)->count();
        if ($count < 1) {
            return redirect()->back()->with('alert', 'invalid cridentials');
        } else {
            $user = campus::where(function ($query) use ($request) {
                $query->where('campus_username', '=', $request->username)
                    ->orWhere('campus_email', '=', $request->username); // Checking for username or email
            })->where('campus_password', '=', $request->password)->first();
            // $request->session()->put('campus_id', $id);
            $request->session()->put('Institute_admin_id', $user->institute_id);
            $request->session()->put('campus_id', $user->id);
            $request->session()->put('campus_username', $user->campus_username);
            $request->session()->put('campus_email', $user->campus_email);
            $request->session()->put('campus_password', $user->campus_password);
            return redirect()->route('campus-single-operation');
        }
    }
    public function campus_logout(Request $request)
    {
        $request->session()->forget(['campus_id', 'campus_username', 'campus_email', 'campus_password']);
        $request->session()->flush();
        echo '<script> 
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };  
      </script>';
        return Redirect()->route('campus-login');
    }

    public function Degree_Program_Managements(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $Institute_admin_email = $request->session()->get('Institute_email');
        $campus_id = $request->session()->get('campus_id');
        $campus_username = $request->session()->get('campus_username');
        $campus_email = $request->session()->get('campus_email');
        $campus_password = $request->session()->get('campus_password');
        $campusName = $request->session()->get('campus_name');

        return view('campus_admin_panel.dashboard.Degree_Program_Managements', [
            'Institute_admin_id' => $Institute_admin_id,
            'Institute_admin_email' => $Institute_admin_email,
            'campus_id' => $campus_id,
            'campus_username' => $campus_username,
            'campus_email' => $campus_email,
            'campus_password' => $campus_password,
            'campusName' => $campusName,
        ]);
    }
}
