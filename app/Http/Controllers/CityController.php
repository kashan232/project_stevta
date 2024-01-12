<?php

namespace App\Http\Controllers;

use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function add_city(Request $request)
    {
        $pagename = 'Add City';
        return view('main_super_admin.dashboard.city.add_city', [
            'pagename' => $pagename,
        ]);
    }
    public function store_add_city(Request $request)
    {
        City::create([
            'city_name' => $request->city_name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
        ]);
        
        return Redirect()->back()->with('success-message-city', 'City add successfully!');
    
    }
    public function all_cities(Request $request)
    {
        $pagename = "All Cities";

        $all_cities = City::all();
        
        return view('main_super_admin.dashboard.city.all_cities', [
            'pagename' => $pagename,
            'all_cities' => $all_cities
        ]);
    
    }
    public function edit_cities(Request $request, $id)
    {
        $pagename = "Edit Cities";
        $citedetails = City::findOrFail($id);
        
        return view('main_super_admin.dashboard.city.edit_city', [
            'pagename' => $pagename,
            'citedetails' => $citedetails,
        ]);
    }
    public function update_city(Request $request, $id)
    {
        City::where('id', $id)->update([
            'city_name' => $request->city_name,
            'updated_at' => Carbon::now(),
        ]);
        
        return Redirect()->back()->with('success-message-updte', 'City Updated successfully!');
    }


}
