<?php

namespace App\Http\Controllers;

use App\Models\CampusPublicHoliday;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusPublicHolidayController extends Controller
{
   public function add_new_holiday(Request $request)
   {
        $pagename = 'Add Holiday';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.hr_public_holidays.add_new_holiday', [
            'pagename' => $pagename,
        ]);
   }
    public function store_add_holiday(Request $request)
    {
        // ddd($request);
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        CampusPublicHoliday::create([
            'institute_id'        =>$Institute_admin_id,
            'campus_id'           =>$campus_id,
            'holiday_title'       =>$request->holiday_title,
            'holiday_start_date'  =>$request->holiday_start_date,
            'holiday_end_date'    =>$request->holiday_end_date,
            'holiday_description' =>$request->holiday_description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('department-added', 'Holiday Added Successfully');
    }

   public function all_holiday(Request $request)
   {
        $pagename = 'All Department';
        
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_public_holidys = CampusPublicHoliday::where('institute_id','=',$Institute_admin_id)->where('campus_id','=',$campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.hr_public_holidays.all_holidays', [
            'pagename'        => $pagename,
            'all_public_holidys' => $all_public_holidys,
        ]);
   }
   public function delete_holiday($delete)
    {
        $del = CampusPublicHoliday::find($delete)->delete();
        return redirect()->back()->with('delete-message-campus-holiday', 'Holiday Deleted Successsfully');
    } 
}
