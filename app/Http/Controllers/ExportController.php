<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\MemberReportExport;
use App\Exports\MonitorReportExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AreaHeadReportExport;
use App\Exports\CommunityReportExport;
use App\Exports\FinancialPolicyExport;
use App\Exports\LocalEvangelismExport;
use App\Exports\AreaSupQuestionsExport;
use App\Exports\ProcurementPolicyExport;
use App\Exports\ReportBookingAreaExport;
use App\Exports\SupAssessmentQuesExport;
use App\Exports\AttendanceAnalysisExport;
use App\Exports\LocalLevelQuestionExport;
use App\Exports\ReportBookingLocalExport;
use App\Exports\FinancialAssessmentExport;
use App\Exports\GrowthQuestionniareExport;
use App\Exports\DistrictLevelMonoterExport;
use App\Exports\DistrictPastorReportExport;
use App\Exports\PastorAssessmentQuesExport;
use App\Exports\ReportBookingDistrictExport;
use App\Exports\DistrictPastorQuestionExport;
use App\Exports\PresidingAssessmentQuesExport;

class ExportController extends Controller
{
    public function exportToExcelLocalEvange($destination, $area, $dist, $loc)
    {
        return Excel::download(new LocalEvangelismExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_local_evangelism.xlsx');
    }

    public function exportToExcelAreaHeadReport($destination, $area, $dist, $loc)
    {
        return Excel::download(new AreaHeadReportExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_area_head_report.xlsx');
    }
    
    public function exportToExcelAreaSup($destination)
    {
        return Excel::download(new AreaSupQuestionsExport($destination), $destination.'_area_sup_questions.xlsx');
    }
    
    public function exportToExcelCommunityReport($destination, $area, $dist, $loc)
    {
        return Excel::download(new CommunityReportExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_community_report.xlsx');
    }
    
    public function exportToExcelDistrictLevelMonoter($destination, $area, $dist, $loc)
    {
        return Excel::download(new DistrictLevelMonoterExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_district_level_moniter.xlsx');
    }
    
    public function exportToExcelDistrictPastorQuestion($destination)
    {
        return Excel::download(new DistrictPastorQuestionExport($destination), $destination.'_district_pastor_question.xlsx');
    }
    
    public function exportToExcelDistrictPastorReport($destination, $area, $dist, $loc)
    {
        return Excel::download(new DistrictPastorReportExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_district_pastor_report.xlsx');
    }
    
    public function exportToExcelLocalLevelQuestion($destination, $area, $dist, $loc)
    {
        return Excel::download(new LocalLevelQuestionExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_local_level_question.xlsx');
    }
    
    public function exportToExcelMemberReport($destination, $area, $dist, $loc)
    {
        return Excel::download(new MemberReportExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_member_report.xlsx');
    }
    
    public function exportToExcelMonitorReport($destination, $area, $dist, $loc)
    {
        return Excel::download(new MonitorReportExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_monitor_report.xlsx');
    }

    public function exportToExcelFinancialPolicy($destination, $area, $dist, $loc)
    {
        return Excel::download(new FinancialPolicyExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_financial_policy.xlsx');
    }

    public function exportToExcelProcurementPolicy($destination, $area, $dist, $loc)
    {
        return Excel::download(new ProcurementPolicyExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_procurement_policy.xlsx');
    }

    public function exportToExcelReportBookingArea($destination, $area, $dist, $loc)
    {
        return Excel::download(new ReportBookingAreaExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_report_booking_area.xlsx');
    }

    public function exportToExcelReportBookingDistrict($destination, $area, $dist, $loc)
    {
        return Excel::download(new ReportBookingDistrictExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_report_booking_district.xlsx');
    }

    public function exportToExcelReportBookingLocal($destination, $area, $dist, $loc)
    {
        return Excel::download(new ReportBookingLocalExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_report_booking_local.xlsx');
    }

    public function exportToExcelPastorAssessment($destination, $area, $dist, $loc)
    {
        return Excel::download(new PastorAssessmentQuesExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_pastor_assessment.xlsx');
    }

    public function exportToExcelSupAssessment($destination, $area, $dist, $loc)
    {
        return Excel::download(new SupAssessmentQuesExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_sup_assessment.xlsx');
    }

    public function exportToExcelPresidingAssessment($destination, $area, $dist, $loc)
    {
        return Excel::download(new PresidingAssessmentQuesExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_presiding_assessment.xlsx');
    }

    public function exportToExcelGrowthQuestionniare($destination, $area, $dist, $loc)
    {
        return Excel::download(new GrowthQuestionniareExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_growth_questionnaire.xlsx');
    }

    public function exportToExcelFinancialAssessment($destination, $area, $dist, $loc)
    {
        // return "Export not ready";
        return Excel::download(new FinancialAssessmentExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_financial_assessment.xlsx');
    }

    public function exportToExcelAttendanceAnalysis($destination, $area, $dist, $loc)
    {
        // return "Export not ready";
        return Excel::download(new AttendanceAnalysisExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_attendance_analysis.xlsx');
    }

    // public function exportToExcelGrowthAssessment($destination, $area, $dist, $loc)
    // {
    //     return Excel::download(new GrowthAssessmentExport($destination, $area, $dist, $loc), $area.'_'.$dist.'_'.$loc.'_growth_assessment.xlsx');
    // }
}
