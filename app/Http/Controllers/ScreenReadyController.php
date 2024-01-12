<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenReadyController extends Controller
{
    public function uni_addmission_form(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_addmisfsion_form',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_merit_list(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_merit_list',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_fee_bill_challan(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_fee_bill_challan',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_quiz(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_quiz',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_ptm_screen(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_ptm_screen',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_academic_calender(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_academic_calender',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_faculty_discipline(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_faculty_discipline',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_examination_scheduling(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_examination_scheduling',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_manage_exam_results(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_manage_exam_results',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_re_taken_exams(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_re_taken_exams',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_grace_marks(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_grace_marks',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_eligibility(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_eligibility',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_examination_scheduling_list(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_examination_scheduling_list',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_manage_exam_results_list(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_manage_exam_results_list',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_re_taken_exams_list(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_re_taken_exams_list',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_grace_marks_list(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_grace_marks_list',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_eligibility_list(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_eligibility_list',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_fee_bills(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_fee_bills',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_optional_charges(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_optional_charges',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_fee_receipt(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_fee_receipt',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_fee_bills_alteration(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_fee_bills_alteration',
            [
                'pagename' => $pagename,
            ]
        );
    }

    public function CampusfinancialOperations(Request $request)
    {
       
        return view('campus_admin_panel.dashboard.CampusfinancialOperations', [
        ]);
    }

    public function financial_Fiscal(Request $request)
    {
        $pagename = 'financial_Fiscal';
        return view('screen_ready_for_uni.Fiscal_Year',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function financial_ChartofAccount(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.ChartofAccount',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function financial_Budgeting(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.Budgeting',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function financial_AssetsManagement(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.AssetsManagement',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function financial_Bills(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.BillsVouchers',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function financial_Banking(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.Banking',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function financial_Remuneration(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.Remuneration',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function financial_Reports(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.FinancialReports',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function financial_Statements(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.financialstatements',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function Campuspayrollmanagement(Request $request)
    {
       
        return view('campus_admin_panel.dashboard.Campuspayrollmanagement', [
        ]);
    }
    public function uni_Annual_increments(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_Annual_increments',
            [
                'pagename' => $pagename,
            ]
        );
    }

    public function uni_advance_loan(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_advance_loan',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function uni_block_salary(Request $request)
    {
        $pagename = 'Add Student';
        return view('screen_ready_for_uni.uni_block_salary',
            [
                'pagename' => $pagename,
            ]
        );
    }

}
