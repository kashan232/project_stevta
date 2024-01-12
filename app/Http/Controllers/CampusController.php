<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CampusController extends Controller
{
    //function for view page of Add campus 
    public function add_campus(Request $request)
    {
        $pagename = 'Add Campus';
        return view('institute_admin_panel.dashboard.Campus.add_Campus', [
            'pagename' => $pagename,
        ]);
    }

    // function for store add campus form data 
    public function store_campus(Request $request)
    {

        $campus_website = $request->campus_website;

        $sa_id = $request->session()->get('Institute_admin_id');

        if (empty($campus_website)) {
            $campus_website = 'not given';
        }


        $request->validate([
            'campus_name' => 'required|unique:campuses',
            'campus_email' => 'required|unique:campuses',
            'campus_phone' => 'required|unique:campuses',
        ]);


        $campus = campus::create([
            'institute_id' => $sa_id,
            'campus_name' => $request->campus_name,
            'campus_address' => $request->campus_address,
            'campus_phone' => $request->campus_phone,
            'campus_website' => $campus_website,
            'campus_email' => $request->campus_email,
            'campus_password' => $request->campus_password,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 

        $campus_username = Str::slug($request->campus_name) . $campus->id;
        campus::where('id', $campus->id)->update([
            'campus_username' => $campus_username,
        ]);



        $request->session()->put('campus_name', $request->campus_name);

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $all_campuses_fr_side = campus::where('institute_id', $Institute_admin_id)->get();
        $request->session()->put('all_campuses_fr_side', $all_campuses_fr_side);


        return redirect()->back()->with('added-message-Institute', 'Campus Added successsfully');
    }








    // function for view all-Campuses page 

    public function all_Campuses(Request $request)
    {
        // dd($request);
        // Institute_admin_id
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        // $all_campuses = DB::table('campuses')->where('institute_id', $Institute_admin_id)->get()->all();
        $all_campuses = DB::table('campuses')
            ->join('institutes', 'institutes.id', '=', 'campuses.institute_id')
            ->select('campuses.*', 'institutes.institute_name')
            ->where('campuses.institute_id', $Institute_admin_id)
            ->get();
        $pagename = "All Campuses Data";
        return view('institute_admin_panel.dashboard.Campus.all_Campuses', [
            'pagename' => $pagename,
            'all_campuses' => $all_campuses
        ]);
    }


    // function for edit campus 
    public function edit_campus($edit)
    {
        $pagename = "Edit Campus";
        $Campusdetails = DB::table('campuses')->where('id', $edit)->get()->first();

        return view('institute_admin_panel.dashboard.Campus.edit_Campus', [
            'pagename' => $pagename,
            'Campusdetails' => $Campusdetails,
        ]);
    }

    public function save_edit_campus(Request $request, $id)
    {
        // $all_campuses_fr_side = $request->session()->get('all_campuses_fr_side');

        // dd($request); 
        // dd($all_campuses_fr_side); 
        // $campusName = $request->session()->get('campus_name');


        $validatedData = $request->validate([
            // 'campus_name' => 'required',
            // 'campus_address' => 'required',
            // 'campus_phone' => 'required',
            // 'campus_website' => 'required',
            // 'campus_email' => 'required|email',
            // 'campus_password' => 'required|min:6',
            'confirm_password' => 'required|same:campus_password',
        ]);

        campus::where('id', $id)->update([
            // 'campus_name' => $request->campus_name,
            'campus_name' => $request->campus_name,
            'campus_address' => $request->campus_address,
            'campus_phone' => $request->campus_phone,
            'campus_website' => $request->campus_website,
            'campus_email' => $request->campus_email,
            'campus_password' => $request->campus_password,
            'updated_at' => Carbon::now(),
        ]);


        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $all_campuses_fr_side = campus::where('institute_id', $Institute_admin_id)->get();
        $request->session()->put('all_campuses_fr_side', $all_campuses_fr_side);


        return redirect()->back()->with('success', 'Campus updated successsfully');
    }


    // function for view record detail of campus from table 
    public function view_campus($view)
    {
        $pagename = 'View Campus';
        $view_Campus = campus::find($view);
        // dd($view_institutes);
        return view('institute_admin_panel.dashboard.Campus.campus_details', [
            'pagename' => $pagename,
            'view_Campus' => $view_Campus,
        ]);
    }

    // function for delete perticular record of campus from table 
    public function delete_campus($delete)
    {
        $del = campus::find($delete)->delete();
        return redirect()->back()->with('delete-message-Institute', 'Campus deleted successsfully');
    }


    // public function checkExistence(Request $request)
    // {
    //     $field = $request->input('field');
    //     $value = $request->input('value');

    //     // Check if the value exists in the database for the specified field
    //     $existingRecord = Campus::where($field, $value)->first();

    //     return response()->json(['exists' => ($existingRecord !== null)]);
    // }


}
