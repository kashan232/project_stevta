<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusClass;
use App\Models\Class_Section;
use App\Models\StudentAddmission;
use Illuminate\Http\Request;

class PromoteStudentController extends Controller
{
    //
    public function pro_student(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $campusName = $request->session()->get('campus_name');

        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.promote.pro_student',
            [
                'Institute_admin_id' => $Institute_admin_id,
                'campus_id' => $campus_id,
                'classes' => $classes,
                'sections' => $sections,
                // 'campuses' => $campuses,
            ]

        );
    }
    public function promotestudentClassData(Request $request)
    {
        $selectedClass = $request->input('class_name');
        $selectedSection = $request->input('section_name');

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $new = StudentAddmission::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->where('class_name', $selectedClass)
            ->where('section_name', $selectedSection)
            ->where(function ($query) {
                $query->where('next_session_status', '!=', 'Leave')
                    ->orWhereNull('next_session_status');
            })
            ->get();
        $campusName = $request->session()->get('campus_name');
        // dd($new); 

        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.promote.pro_studentClassData',
            [
                'Institute_admin_id' => $Institute_admin_id,
                'campus_id' => $campus_id,
                // 'campuses' => $campuses,
                'new' => $new,
                'classes' => $classes,
                'sections' => $sections,
                'selectedClass' => $selectedClass,
                'selectedSection' => $selectedSection,
            ]
        );
    }

    public function updatePromotedStudents(Request $request)
    {
        $previousSection = $request->input('previous_section');
        $previousClass = $request->input('previous_class');
        $nextclass = $request->input('class_name');

        //ddd($previousClass);

        $resultStatuses = $request->input('result_status');
        $nextSessionStatuses = $request->input('next_session_status');

        foreach ($resultStatuses as $studentId => $resultStatus) {
            $nextSessionStatus = $nextSessionStatuses[$studentId];

            $className = $request->input('class_name');
            $sectionName = $request->input('section_name');


            if (empty($className)) {
                $className = $previousClass;
            }


            if (empty($sectionName)) {
                $sectionName = $previousSection;
            }

            if ($className > $previousClass) {
                StudentAddmission::where('id', $studentId)
                    ->update([
                        'result_status' => $resultStatus,
                        'next_session_status' => $nextSessionStatus,
                        'class_name' => $className,
                        'section_name' => $sectionName,
                    ]);
            } else {
                // Handle the case when the student's next class is not greater than their previous class
                // For example, you can redirect back with an error message
                return redirect()->back()->with('error', 'Invalid promotion. you can not promote student in this class.');
            }
        }

        return redirect()->back()->with('success', 'Records Updated Successfully');
    }


    public function viewall_formers(Request $request)
    {
        $pagename = "All Formers";
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $campusName = $request->session()->get('campus_name');
        // $former = StudentAddmission::where('institute_id', $Institute_admin_id)
        // ->where('campus_id', $campus_id)
        // ->where('next_session_status', '=', 'Leave')
        // ->get(); 


        $former = StudentAddmission::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->onlyTrashed()->get();


        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.former.all_formers',
            [
                'pagename' => $pagename, 'Institute_admin_id' => $Institute_admin_id, 'campus_id' => $campus_id,
                'campusName' => $campusName, 'former' => $former

            ]
        );
    }


    // for view deletd students records 

    public function viewdeleted_student(Request $request, $id)
    {

        $pagename = 'view Student Detail';
        // $view_student = StudentAddmission::Find($id);
        $view_student = StudentAddmission::withTrashed()->find($id);
        //ddd($request); 
        // dd($id); 
        return view('campus_admin_panel.dashboard.Campus_General_Operations.generation_operation.former.viewdeleted_formers', [
            'pagename' => $pagename,
            'view_student' => $view_student,
        ]);
    }






    public function undo_former(Request $request, $id)
    {
        // dd($id);
        $former = StudentAddmission::find($id);
        if ($former) {
            $former->next_session_status = 'Continue';
            $former->save();
        }
        return redirect()->back()->with('success', 'Undo operation successful!');
    }



    public function restore_student(Request $request, $id)
    {
        $record = StudentAddmission::withTrashed()->find($id);
        // dd($record);

        if ($record) {
            $record->restore();
            return redirect()->back()->with('success', 'Record restored successfully.');
        }

        return redirect()->back()->with('success', 'Record not found');
    }
}
