<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\ExtraFee;
use App\Models\StudentFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountsController extends Controller
{
    public function student_fee(Request $request){
        $pagename = "Fees";
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $campusName = $request->session()->get('campus_name');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_accounts.Fees.fees', [
            'pagename' => $pagename,
            'Institute_admin_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'campusName' => $campusName,
            'classes' => $classes,

        ]);
    }



    public function update_fee(Request $request)
{
    
    $validator = Validator::make($request->all(), [
        'class_name' => 'required',
        'Fee_type' => 'required',
        'amount' => 'required',
        'id' => 'required' 
    ]);  

    if ($validator->fails()) {
        return response()->json(['success' => false, 'message' => $validator->errors()], 400);
    }

    try {
        
        $fee = StudentFee::find($request->id);

        if (!$fee) {
            return response()->json(['success' => false, 'message' => 'Record not found'], 404);
        }

       
        $fee->class_name = $request->class_name;
        $fee->Fee_type = $request->Fee_type;
        $fee->amount = $request->amount;
        $fee->save();

        return response()->json(['success' => true, 'message' => 'Fee updated successfully']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}


public function fetch_fee(Request $request)
{
    $institute_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');

    // Fetch the fees from the database based on institute_id and campus_id
    $fees = StudentFee::where('institute_id', $institute_id)
        ->where('campus_id', $campus_id)
        ->get();
        // dd($fees);

    // Return the fetched fees as a JSON response
    return response()->json(['data' => $fees]);
}



public function store_fee(Request $request)
{
    $institute_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');

    $validatedData = $request->validate([
        'class_name' => 'required',
        'Fee_type' => 'required',
        'amount' => 'required|numeric',
    ]); 

    $studentFee = new StudentFee();
    $studentFee->class_name = $validatedData['class_name'];
    $studentFee->fee_type = $validatedData['Fee_type'];
    $studentFee->amount = $validatedData['amount'];
    $studentFee->institute_id = $institute_id;
    $studentFee->campus_id = $campus_id;
    $studentFee->save();
     

    // Return a response indicating the success of the operation
    return response()->json(['message' => 'Fee stored successfully']);
}
    


public function delete_fee(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'id' => 'required' // Assuming the ID is passed in the request
    ]);

    if ($validator->fails()) {
        return response()->json(['success' => false, 'message' => $validator->errors()], 400);
    }
 
    try {
        // Find the record to be deleted
        $fee = StudentFee::find($request->id);

        if (!$fee) {
            return response()->json(['success' => false, 'message' => 'Record not found'], 404);
        }

        // Delete the record
        $fee->delete();

        return response()->json(['success' => true, 'message' => 'Fee deleted successfully']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}




public function fetch_fee_details(Request $request){
    $feeId = $request->input('id');
    
    // Fetch the fee details from the database based on the fee ID
    $fee = StudentFee::find($feeId);
    
    if (!$fee) {
        // Return an error response if the fee is not found
        return response()->json(['error' => 'Fee not found'], 404);
    }
    
    // Assuming the 'class_name' property exists in the fee object
    $className = $fee->class_name;
    
    // Create a response with the fee details
    $response = [
        'data' => [
            'class_name' => $className,
            // Include other fee details as needed
        ],
    ];
    
    return response()->json($response);
}



public function store_extra_fee(Request $request)
{

  

    $institute_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $class_Name = $request->input('classid');

        $validatedData = $request->validate([
            'extra_fee' => 'required',
            'extra_amount' => 'required',
        ]); 
    
        $studentextra = new ExtraFee();
        // $studentextra->class_name = $validatedData['class_name'];
        $studentextra->class_name = $class_Name;
        $studentextra->extra_fee = $validatedData['extra_fee'];
        $studentextra->extra_amount = $validatedData['extra_amount'];
        $studentextra->institute_id = $institute_id;
        $studentextra->campus_id = $campus_id; 
        $studentextra->save(); 
         

        // Return a response indicating the success of the operation
        return response()->json(['message' => 'extra Fee stored successfully']);

    }

    
    
    public function fetchExtraFees(Request $request)
{
    $institute_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');

    // Fetch the fees from the database based on institute_id and campus_id
    $fees = ExtraFee::where('institute_id', $institute_id)
        ->where('campus_id', $campus_id)
        ->get(); 

        return response()->json(['data' => $fees]);
}

// public function deleteextra_fee
public function deleteextra_fee(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'id' => 'required' // Assuming the ID is passed in the request
    ]);

    if ($validator->fails()) {
        return response()->json(['success' => false, 'message' => $validator->errors()], 400);
    }
 
    try {
        // Find the record to be deleted
        $fee = ExtraFee::find($request->id);

        if (!$fee) {
            return response()->json(['success' => false, 'message' => 'Record not found'], 404);
        }

        // Delete the record
        $fee->delete(); 

        return response()->json(['success' => true, 'message' => 'Fee deleted successfully']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}



  

}
