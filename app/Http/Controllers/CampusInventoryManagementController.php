<?php

namespace App\Http\Controllers;

use App\Models\CampusInventoryManagement;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusInventoryManagementController extends Controller
{
    public function add_inventory(Request $request)
    {
        $pagename = 'Add Inventory';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_accounts.inventory_billing_management.add-inventory', [
            'pagename' => $pagename,
        ]);
    }
    public function store_add_inventory(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        CampusInventoryManagement::create([
            'institute_id' => $Institute_admin_id,
            'campus_id'    => $campus_id,
            'item_name'    => $request->item_name,
            'stock'        => $request->stock,
            'description'  => $request->description,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
        ]);
        return redirect()->back()->with('inventory-added',  'Inventory Added Successfully');
    }
    public function all_inventory(Request $request)
    {
        $pagename = 'All Inventory';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $inventory_lists = CampusInventoryManagement::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_accounts.inventory_billing_management.all-inventory', [
            'pagename'        => $pagename,
            'inventory_lists' => $inventory_lists,
        ]);
    }
    public function store_add_stock(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $stock_list = CampusInventoryManagement::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)
            ->get()->pluck('stock');

        $stockId = $request->input('stock_id');
        $stockValue = $request->input('stock');

        $inventory = CampusInventoryManagement::find($stockId);
        $inventory->stock += $stockValue;
        $update = $inventory->save();

        if ($update) {
            return 'Stock Update successfully!';
        } else {
            return 'Something went wrong, or connection error. Try again later.';
        }
    }
    public function store_add_usage(Request $request)
    {
        $institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $usage_id = $request->input('usage_id');

        // Get the inventory item by ID
        $inventoryItem = CampusInventoryManagement::where('institute_id', $institute_admin_id)
            ->where('campus_id', $campus_id)
            ->find($usage_id); // Corrected variable usage here

        if ($inventoryItem) {
            $stock = $inventoryItem->stock;
            $usage = $request->input('usage'); // Corrected getting the 'usage' value from the request

            // Subtract the usage from the available quantity
            $availableQuantity = $stock - $usage;
            $availableusage = $inventoryItem->usage + $usage; // Updated the calculation of available usage

            // Update the inventory item with the new available quantity
            $inventoryItem->update([
                'stock' => $availableQuantity,
                'usage' => $availableusage,
                'updated_at' => Carbon::now(),
            ]);
            return response()->json('Usage added successfully!');
        }
        return response()->json('Failed to add usage.');
    }

    public function delete_inventory($delete)
    {
        $del = CampusInventoryManagement::find($delete)->delete();
        return redirect()->back()->with('delete-message-inventory', 'Inventory Deleted Successsfully');
    }
}
