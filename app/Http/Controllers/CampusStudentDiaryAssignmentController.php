<?php

namespace App\Http\Controllers;

use App\Models\CampusStudentStoreAssignment;
use App\Models\CampusSubject;
use App\Models\CampusTeacherDiaryAssignment;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class CampusStudentDiaryAssignmentController extends Controller
{
    public function subject_page(Request $request)
    {
        // dd($request);
        $pagename = 'Subject Page';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');
        $student_subjects = CampusSubject::where('institute_id', '=', $institute_id)
            ->where('campus_id', '=', $campus_id)
            ->where('class_name', '=', $student_class)
            ->where('section_name', '=', $student_section)->get();
        // dd($student_subjects);
        return view('student_panel.student_assignments.subject_page', [
            'pagename' => $pagename,
            'student_subjects' => $student_subjects,
        ]);
    }
    public function assignments(Request $request, $subject_name)
    {
        // dd($subject_name);
        $pagename = 'Student Attendance';
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_class = $request->session()->get('student_class');
        $student_section = $request->session()->get('student_section');
        $student_assignments = CampusTeacherDiaryAssignment::where('institute_id', '=', $institute_id)
            ->where('campus_id', '=', $campus_id)
            ->where('class_name', '=', $student_class)
            ->where('section_name', '=', $student_section)
            ->where('subject_name', '=', $subject_name)
            ->get();
        // ddd($student_assignments);
        return view('student_panel.student_assignments.assignments', [
            'pagename'            => $pagename,
            'student_assignments' => $student_assignments,
            'subject_name'  => $subject_name,
        ]);
    }
    public function submit_assignment(Request $request)
    {
        // dd($request);
        $assignmentId = $request->input('assignment_id');
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('assignment_file');
        $institute_id = $request->session()->get('institute_id');
        $campus_id = $request->session()->get('campus_id');
        $student_id = $request->session()->get('student_id');
        $student_gr = $request->session()->get('student_gr');
        $student_name = $request->session()->get('student_first_name');
        $assignment_file = $request->file('assignment_file');
        if ($request->file()) {
            $name_generate = hexdec(uniqid());
            $file_extension = strtolower($assignment_file->getClientOriginalExtension());
            $file_name = $name_generate . '.' . $file_extension;
            $path = $request->assignment_file->move(public_path('/assignment/student_store_assignment'), $file_name);
        }
        $existing_submission = CampusStudentStoreAssignment::where([
            'institute_id' => $institute_id,
            'campus_id' => $campus_id,
            'student_id' => $student_id,
        ])->first();

        // If a previous submission exists, update the 'is_submitted' flag to true
        if ($existing_submission) {
            $existing_submission->update(['is_submitted' => true]);
        }
        // Create the new assignment submission
        $newSubmission = CampusStudentStoreAssignment::create([
            'institute_id'     => $institute_id,
            'campus_id'        => $campus_id,
            'student_id'       => $student_id,
            'student_gr'       => $student_gr,
            'student_name'     => $student_name,
            'assignment_file'  => $file_name,
            'description'      => $request->description,
            'created_at'       => Carbon::now(),
            'updated_at'       => Carbon::now(),
        ]);
        // return redirect()->back()->with('assignment-submit', 'Assignment Submitted Successfully');
        $isSubmitted = true; // Assuming the assignment has been successfully submitted
        // Store the status in the session
        $request->session()->put('assignment_submitted', $isSubmitted);
        // ... (existing code)
        // return redirect()->back()->with('assignment-submit', 'Assignment Submitted Successfully');
        // return redirect()->back()->with('assignment-submit', 'Assignment Submitted Successfully')
        // ->with('assignment_id', $student_assignment->id);

        return redirect()->back()->with('assignment-submit', 'Assignment Submitted Successfully');
        // Pass the assignment ID back to the view
    }
}
