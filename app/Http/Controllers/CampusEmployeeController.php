<?php

namespace App\Http\Controllers;

use App\Models\CampusDepartment;
use App\Models\CampusEmployee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class CampusEmployeeController extends Controller
{
   public function add_employees(Request $request)
   {
        $pagename = 'Add Employee';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $CampusDepartments = CampusDepartment::where('institute_id','=',$Institute_admin_id)->where('campus_id','=',$campus_id)->get();
        
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.hr_employees.add_employees', [
                'pagename' => $pagename,
                'CampusDepartments' => $CampusDepartments,
        ]);
   }

   public function store_add_employees(Request $request)
    {
        $employee_pic_for_db ="";
        $employee_pic = $request->file('employee_pic'); 
        if($employee_pic != null)
        {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($employee_pic->getClientOriginalExtension());
            $image_name =   $name_generate.".".$image_extension;
            
            $upload_location = 'campus/hr_screen/employee_picture/';
            $last_image_name = $upload_location.$image_name;
            // overwriting variable to add image into database
            $employee_pic_for_db = $image_name;
            Image::make($employee_pic)->resize(500, 500)->save($last_image_name);
        }
         //employee image work end here

        //front CNIC image work

        $front_nic_pic_for_db ="";
        $front_nic_pic = $request->file('front_nic_pic'); 
        if($front_nic_pic != null)
        {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($front_nic_pic->getClientOriginalExtension());
            $image_name =   $name_generate.".".$image_extension;
            
            $upload_location = 'campus/hr_screen/employee_front_cnic_pic/';
            $last_image_name = $upload_location.$image_name;
            // overwriting variable to add image into database
            $front_nic_pic_for_db = $image_name;
            Image::make($front_nic_pic)->resize(500, 500)->save($last_image_name);
        }
        //front CNIC image work end here

        //back CNIC image work

        $back_nic_pic_for_db ="";
        $back_nic_pic = $request->file('back_nic_pic'); 
        if($back_nic_pic != null)
        {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($back_nic_pic->getClientOriginalExtension());
            $image_name =   $name_generate.".".$image_extension;
            
            $upload_location = 'campus/hr_screen/employee_back_cnic_pic/';
            $last_image_name = $upload_location.$image_name;
            // overwriting variable to add image into database
            $back_nic_pic_for_db = $image_name;
            Image::make($back_nic_pic)->resize(500, 500)->save($last_image_name);
        }
        //back CNIC image work end here

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $campus_employe = CampusEmployee::create([
            'institute_id'              =>$Institute_admin_id,
            'campus_id'                 =>$campus_id,
            'title_designation'         =>$request->title_designation,
            'first_name'                =>$request->first_name,
            'last_name'                 =>$request->last_name,
            'nic'                       =>$request->nic,
            'hire_date'                 =>$request->hire_date,
            'phone'                     =>$request->phone,
            'email'                     =>$request->email,
            'password'                  =>$request->password,
            'address'                   =>$request->address,
            'department'                =>$request->department,
            'salary'                    =>$request->salary,
            'bps'                       =>$request->bps,
            'medical_allowance'         =>$request->medical_allowance,
            'fuel_allowance'            =>$request->fuel_allowance,
            'house_allowance'           =>$request->house_allowance,
            'no_of_leaves'              =>$request->no_of_leaves,
            'account_name'              =>$request->account_name,
            'account_number'              =>$request->account_number,
            'emergency_contact_name'    =>$request->emergency_contact_name,
            'emergency_contact_relation'=>$request->emergency_contact_relation,
            'emergency_contact_phone'   =>$request->emergency_contact_phone,
            'employee_pic'               =>$employee_pic_for_db,
            'front_nic_pic'             =>$front_nic_pic_for_db,
            'back_nic_pic'              =>$back_nic_pic_for_db,
            'created_at'                => Carbon::now(),
            'updated_at'                => Carbon::now(),
        ]);

        $appoint_letter_no = Str::slug($request->first_name) . $campus_employe->id;
        CampusEmployee::where('id', $campus_employe->id)->update([
            'appointment_letter_no'     =>$appoint_letter_no,
        ]);
        return redirect()->back()->with('employee-added', 'Employee Added Successfully');
    }

   public function all_employees(Request $request)
   {
        $pagename = 'All Employee';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $all_employees = CampusEmployee::where('institute_id','=',$Institute_admin_id)->where('campus_id','=',$campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.hr_employees.all_employees', [
            'pagename'        => $pagename,
             'all_employees' => $all_employees,
        ]);
   }
   public function edit_employee(Request $request, $id)
    {
        $pagename = 'Edit Employee';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $employee_details = CampusEmployee::findOrFail($id);
        $CampusDepartments = CampusDepartment::where('institute_id','=',$Institute_admin_id)->where('campus_id','=',$campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.campus_hr_screen.hr_employees.edit_employees', [
            'pagename'        => $pagename,
            'employee_details' => $employee_details,
            'CampusDepartments' => $CampusDepartments,
        ]);
    }
    public function update_employees(Request $request, $id)
    {
        CampusEmployee::where('id', $id)->update([
            'title_designation'         =>$request->title_designation,
            'first_name'                =>$request->first_name,
            'last_name'                 =>$request->last_name,
            'nic'                       =>$request->nic,
            'hire_date'                 =>$request->hire_date,
            'phone'                     =>$request->phone,
            'email'                     =>$request->email,
            'password'                  =>$request->password,
            'address'                   =>$request->address,
            'department'                =>$request->department,
            'salary'                    =>$request->salary,
            'bps'                       =>$request->bps,
            'medical_allowance'         =>$request->medical_allowance,
            'fuel_allowance'            =>$request->fuel_allowance,
            'house_allowance'           =>$request->house_allowance,
            'appointment_letter_no'     =>$request->appointment_letter_no,
            'no_of_leaves'              =>$request->no_of_leaves,
            'emergency_contact_name'    =>$request->emergency_contact_name,
            'emergency_contact_relation'=>$request->emergency_contact_relation,
            'emergency_contact_phone'   =>$request->emergency_contact_phone,
            'updated_at'=> Carbon::now(),
        ]);
        return Redirect()->back()->with('update-success-message', 'Employee updated Successfully');
    }

   public function delete_employee($delete)
    {
        $del = CampusEmployee::find($delete)->delete();
        return redirect()->back()->with('delete-message-employee', 'Employee Deleted Successsfully');
    } 
}