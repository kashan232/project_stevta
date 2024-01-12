<?php

namespace App\Http\Controllers;

use App\Models\CampusBilling;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusBillingController extends Controller
{

    
    public function billing(Request $request)
    { 
        $pagename = 'All billing';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $billing_lists = CampusBilling::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        //dd($billing_lists);  
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_accounts.inventory_billing_management.billing', [
            'pagename'      => $pagename,
            'billing_lists' => $billing_lists,
        ]);
    }
    public function store_add_bill(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        CampusBilling::create([
            'institute_id' => $Institute_admin_id,
            'campus_id'    => $campus_id,
            'purpose_name' => $request->purpose_name,
            'amount'       => $request->amount,
            'date'         => $request->date,
            'description'  => $request->description,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
        ]);
        return redirect()->back()->with('expenses-added',  'Expenses Added Successfully'); 
    }
    public function delete_bill($delete)
    {
        $del = CampusBilling::find($delete)->delete();
        return redirect()->back()->with('delete-message-expense', 'Expense Deleted Successsfully');
    } 

}
