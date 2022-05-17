<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VWMemberReport;
use App\Models\VWMonitorReport;
use App\Models\VWAreaheadReport;
use App\Models\VWCommunityReport;
use App\Models\VWFinancialPolicy;
use App\Models\VWLocalEvangelism;
use App\Models\AttendanceAnalysis;
use App\Models\VWAreaSupQuestions;
use Illuminate\Support\Facades\DB;
use App\Models\FinancialAssessment;
use App\Models\GrowthQuestionnaire;
use App\Models\VWProcurementPolicy;
use App\Models\VWReportBookingArea;
use App\Models\VWSupAssessmentQues;
use App\Models\VWAttendanceAnalysis;
use App\Models\VWLocalLevelQuestion;
use App\Models\VWReportBookingLocal;
use App\Models\VWFinancialAssessment;
use App\Models\VWGrowthQuestionnaire;
use App\Models\VWPresidingAssessment;
use App\Models\VWDistrictLevelMonoter;
use App\Models\VWDistrictPastorReport;
use App\Models\VWPastorAssessmentQues;
use App\Models\VWReportBookingDistrict;
use App\Models\VWDistrictPastorQuestion;

class ReportController extends Controller
{
    public function index()
    {
        return view('report');
    }

    public function report(Request $request)
    {
        $report = $request->report;
        $destination = $request->destination;
        $area = $request->area;
        $district = $request->district;
        $local = $request->local;

        if($report == 'Local Evangelism'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWLocalEvangelism::all();
                return view('report.report-local-evangelism', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWLocalEvangelism::where('area', 'ILIKE', $area)->get();
                return view('report.report-local-evangelism', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWLocalEvangelism::where('area', 'ILIKE',  $area)->where('district', 'ILIKE',  $district)->get();
                return view('report.report-local-evangelism', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWLocalEvangelism::where('area', 'ILIKE',  $area)->where('district', 'ILIKE',  $district)->where('local', 'ILIKE',  $local)->get();
                return view('report.report-local-evangelism', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Area Heads Visitation Report'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWAreaheadReport::all();
                return view('report.report-area-head', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWAreaheadReport::where('area', 'ILIKE', $area)->get();
                return view('report.report-area-head', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWAreaheadReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-area-head', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWAreaheadReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-area-head', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Area Sup Questionnaire'){
            $destination = 'General';
            $data = VWAreaSupQuestions::all();
            return view('report.report-area-sup-questions', compact('data', 'destination'));
            
        }
        elseif($report == 'Community Impression Report'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWCommunityReport::all();
                return view('report.report-community-rep', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWCommunityReport::where('area', 'ILIKE', $area)->get();
                return view('report.report-community-rep', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-community-rep', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-community-rep', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'District Level Monitoring'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWDistrictLevelMonoter::all();
                return view('report.report-district-level-monitor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->get();
                return view('report.report-district-level-monitor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-district-level-monitor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-district-level-monitor', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Dist Pastors Questionnaire'){
            $destination = 'General';
            $data = VWDistrictPastorQuestion::all();
            return view('report.report-district_pastor_question', compact('data', 'destination'));
        
        }
        elseif($report == 'District Pastor Visitation Rep'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWDistrictPastorReport::all();
                return view('report.report-district_pastor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWDistrictPastorReport::where('area', 'ILIKE', $area)->get();
                return view('report.report-district_pastor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-district_pastor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-district_pastor', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Local Level Monitoring'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWLocalLevelQuestion::all();
                return view('report.report-local-level-question', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWLocalLevelQuestion::where('area', 'ILIKE', $area)->get();
                return view('report.report-local-level-question', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWLocalLevelQuestion::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-local-level-question', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWLocalLevelQuestion::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-local-level-question', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Members Report'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWMemberReport::all();
                return view('report.report-member', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWMemberReport::where('area', 'ILIKE', $area)->get();
                return view('report.report-member', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-member', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-member', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Monitors Opinion'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWMonitorReport::all();
                return view('report.report-monitor-report', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWMonitorReport::where('area', 'ILIKE', $area)->get();
                return view('report.report-monitor-report', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-monitor-report', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-monitor-report', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Financial Policy'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWFinancialPolicy::all();
                return view('report.report-financial-policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWFinancialPolicy::where('area', 'ILIKE', $area)->get();
                return view('report.report-financial-policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWFinancialPolicy::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-financial-policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWFinancialPolicy::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-financial-policy', compact('data', 'area', 'destination'));
            }            
        }
        elseif($report == 'Procurement Policy'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWProcurementPolicy::all();
                return view('report.report-procurement_policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWProcurementPolicy::where('area', 'ILIKE', $area)->get();
                return view('report.report-procurement_policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWProcurementPolicy::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-procurement_policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWProcurementPolicy::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-procurement_policy', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Records Keeping - Area'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWReportBookingArea::all();
                return view('report.report-books-area', compact('data', 'area', 'destination'));
            }
            else{
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWReportBookingArea::where('area', 'ILIKE', $area)->get();
                return view('report.report-books-area', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Records Keeping - District'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWReportBookingDistrict::all();
                return view('report.report-books-district', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWReportBookingDistrict::where('area', 'ILIKE', $area)->get();
                return view('report.report-books-district', compact('data', 'area', 'destination'));
            }
            else{
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-books-district', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Records Keeping - Local'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWReportBookingLocal::all();
                return view('report.report-books-local', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWReportBookingLocal::where('area', 'ILIKE', $area)->get();
                return view('report.report-books-local', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWReportBookingLocal::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-books-local', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWReportBookingLocal::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-books-local', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Data Aggregation Report'){
            if(isset($request->date)){
                $date = $request->date;

                $area_head_r = VWAreaheadReport::where(DB::raw('updated_at::date'), $date)->count();
                $area_sup_q = VWAreaSupQuestions::where(DB::raw('updated_at::date'), $date)->count();
                $community = VWCommunityReport::where(DB::raw('updated_at::date'), $date)->count();
                $district_level = VWDistrictLevelMonoter::where(DB::raw('updated_at::date'), $date)->count();
                $district_pas_q = VWDistrictPastorQuestion::where(DB::raw('updated_at::date'), $date)->count();
                $district_pas_r = VWDistrictPastorReport::where(DB::raw('updated_at::date'), $date)->count();
                $fin_policy = VWFinancialPolicy::where(DB::raw('updated_at::date'), $date)->count();
                $local_eveng = VWLocalEvangelism::where(DB::raw('updated_at::date'), $date)->count();
                $local_level = VWLocalLevelQuestion::where(DB::raw('updated_at::date'), $date)->count();
                $member = VWMemberReport::where(DB::raw('updated_at::date'), $date)->count();
                $moniter = VWMonitorReport::where(DB::raw('updated_at::date'), $date)->count();
                $pro_policy = VWProcurementPolicy::where(DB::raw('updated_at::date'), $date)->count();
                $report_area = VWReportBookingArea::where(DB::raw('updated_at::date'), $date)->count();
                $report_district = VWReportBookingDistrict::where(DB::raw('updated_at::date'), $date)->count();
                $report_local = VWReportBookingLocal::where(DB::raw('updated_at::date'), $date)->count();
                $pastorass = VWPastorAssessmentQues::where(DB::raw('updated_at::date'), $date)->count();
                $sup_ass = VWSupAssessmentQues::where(DB::raw('updated_at::date'), $date)->count();
                $pres_ass = VWPresidingAssessment::where(DB::raw('updated_at::date'), $date)->count();
                $growth_ques = GrowthQuestionnaire::where(DB::raw('updated_at::date'), $date)->count();
                $fin_assessment = FinancialAssessment::where(DB::raw('updated_at::date'), $date)->count();
                $attn_analysis = AttendanceAnalysis::where(DB::raw('updated_at::date'), $date)->count();
                // $growth_assess = PastorAssessmentQues::where(DB::raw('updated_at::date'), $date)->count();

                $total = $area_head_r+$area_sup_q+$community+$district_level+$district_pas_q+$district_pas_r+$fin_policy+$local_eveng+$local_level+$member+$moniter+$pro_policy+$report_area+$report_district+$report_local+$pastorass+$sup_ass+$pres_ass
                        + $growth_ques + $fin_assessment + $attn_analysis; //+$growth_assess;

            }
            else{
                $date = "All";
                $area_head_r = VWAreaheadReport::count();
                $area_sup_q = VWAreaSupQuestions::count();
                $community = VWCommunityReport::count();
                $district_level = VWDistrictLevelMonoter::count();
                $district_pas_q = VWDistrictPastorQuestion::count();
                $district_pas_r = VWDistrictPastorReport::count();
                $fin_policy = VWFinancialPolicy::count();
                $local_eveng = VWLocalEvangelism::count();
                $local_level = VWLocalLevelQuestion::count();
                $member = VWMemberReport::count();
                $moniter = VWMonitorReport::count();
                $pro_policy = VWProcurementPolicy::count();
                $report_area = VWReportBookingArea::count();
                $report_district = VWReportBookingDistrict::count();
                $report_local = VWReportBookingLocal::count();
                $pastorass = VWPastorAssessmentQues::count();
                $sup_ass = VWSupAssessmentQues::count();
                $pres_ass = VWPresidingAssessment::count();
                $growth_ques = GrowthQuestionnaire::count();
                $fin_assessment = FinancialAssessment::count();
                $attn_analysis = AttendanceAnalysis::count();
                // $growth_assess = PastorAssessmentQues::count();

                $total = $area_head_r+$area_sup_q+$community+$district_level+$district_pas_q+$district_pas_r+$fin_policy+$local_eveng+$local_level+$member+$moniter+$pro_policy+$report_area+$report_district+$report_local+$pastorass+$sup_ass+$pres_ass
                        + $growth_ques + $fin_assessment + $attn_analysis; //+$growth_assess;

            }   

            $data = [
                'area_head_r' => $area_head_r,
                'area_sup_q' => $area_sup_q,
                'community' => $community,
                'district_level' => $district_level,
                'district_pas_q' => $district_pas_q,
                'district_pas_r' => $district_pas_r,
                'fin_policy' => $fin_policy,
                'local_eveng' => $local_eveng,
                'local_level' => $local_level,
                'member' => $member,
                'moniter' => $moniter,
                'pro_policy' => $pro_policy,
                'report_area' => $report_area,
                'report_district' => $report_district,
                'report_local' => $report_local,
                'pastorass' => $pastorass,
                'sup_ass' => $sup_ass,
                'pres_ass' => $pres_ass,
                'growth_ques' => $growth_ques, 
                'fin_assessment' => $fin_assessment,
                'attn_analysis' => $attn_analysis,
                // 'growth_assess' => $growth_assess,
                'total' => $total
            ];
            
            return view('report.report-data-aggregation', compact('data', 'date'));
            
        }
        elseif($report == 'Pastors Assessment Questionnaire'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWPastorAssessmentQues::all();
                return view('report.report-pastor-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->get();
                return view('report.report-pastor-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-pastor-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-pastor-assessment', compact('data', 'area', 'destination'));
            }
        }
        elseif($report == 'Sup Assessment Questionnaire'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWSupAssessmentQues::all();
                return view('report.report-sup-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWSupAssessmentQues::where('area', 'ILIKE', $area)->get();
                return view('report.report-sup-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWSupAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-sup-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWSupAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-sup-assessment', compact('data', 'area', 'destination'));
            }
        }

        elseif($report == 'Presiding Elders Assessment'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWPresidingAssessment::all();
                return view('report.report-presiding-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWPresidingAssessment::where('area', 'ILIKE', $area)->get();
                return view('report.report-presiding-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-presiding-assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-presiding-assessment', compact('data', 'area', 'destination'));
            }
        }

        elseif($report == 'Attendance Analysis'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWAttendanceAnalysis::all();
                return view('report.report-attendance_analysis', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWAttendanceAnalysis::where('area', 'ILIKE', $area)->get();
                return view('report.report-attendance_analysis', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWAttendanceAnalysis::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-attendance_analysis', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWAttendanceAnalysis::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-attendance_analysis', compact('data', 'area', 'destination'));
            }
        }

        elseif($report == 'Financial Assessment'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWFinancialAssessment::all();
                return view('report.report-financial_assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWFinancialAssessment::where('area', 'ILIKE', $area)->get();
                return view('report.report-financial_assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWFinancialAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-financial_assessment', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWFinancialAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-financial_assessment', compact('data', 'area', 'destination'));
            }
        }

        elseif($report == 'Growth Questionnaire'){
            if($destination == 'General'){
                $area = [
                    'area' => $destination,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWGrowthQuestionnaire::all();
                return view('report.report-growth_questionnaire', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Area'){
                $area = [
                    'area' => $area,
                    'district' => 'all',
                    'local' => 'all'
                ];
                $data = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->get();
                return view('report.report-growth_questionnaire', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
                return view('report.report-growth_questionnaire', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
                return view('report.report-growth_questionnaire', compact('data', 'area', 'destination'));
            }
        }

        // elseif($report == 'Growth Assessment'){
        //     if($destination == 'General'){
        //         $area = [
        //             'area' => $destination,
        //             'district' => 'all',
        //             'local' => 'all'
        //         ];
        //         $data = VWPresidingAssessment::all();
        //         return view('report.report-growth_assessment', compact('data', 'area', 'destination'));
        //     }
        //     elseif($destination == 'Area'){
        //         $area = [
        //             'area' => $area,
        //             'district' => 'all',
        //             'local' => 'all'
        //         ];
        //         $data = VWPresidingAssessment::where('area', 'ILIKE', $area)->get();
        //         return view('report.report-growth_assessment', compact('data', 'area', 'destination'));
        //     }
        //     elseif($destination == 'District'){
        //         $area = [
        //             'area' => $area,
        //             'district' => $district,
        //             'local' => 'all'
        //         ];
        //         $data = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->get();
        //         return view('report.report-growth_assessment', compact('data', 'area', 'destination'));
        //     }
        //     elseif($destination == 'Local'){
        //         $area = [
        //             'area' => $area,
        //             'district' => $district,
        //             'local' => $local
        //         ];
        //         $data = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $district)->where('local', 'ILIKE', $local)->get();
        //         return view('report.report-growth_assessment', compact('data', 'area', 'destination'));
        //     }
        // }

    }
    
}
