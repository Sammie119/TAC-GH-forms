<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VWLocalEvangelism;
use App\Models\VWAreaheadReport;
use App\Models\VWAreaSupQuestions;
use App\Models\VWCommunityReport;
use App\Models\VWDistrictLevelMonoter;
use App\Models\VWDistrictPastorQuestion;
use App\Models\VWDistrictPastorReport;
use App\Models\VWFinancialPolicy;
use App\Models\VWLocalLevelQuestion;
use App\Models\VWMemberReport;
use App\Models\VWMonitorReport;
use App\Models\VWProcurementPolicy;
use App\Models\VWReportBookingArea;
use App\Models\VWReportBookingDistrict;
use App\Models\VWReportBookingLocal;

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
                $data = VWLocalEvangelism::where('area', $area)->get();
                return view('report.report-local-evangelism', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWLocalEvangelism::where('area', $area)->where('district', $district)->get();
                return view('report.report-local-evangelism', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWLocalEvangelism::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWAreaheadReport::where('area', $area)->get();
                return view('report.report-area-head', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWAreaheadReport::where('area', $area)->where('district', $district)->get();
                return view('report.report-area-head', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWAreaheadReport::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWCommunityReport::where('area', $area)->get();
                return view('report.report-community-rep', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWCommunityReport::where('area', $area)->where('district', $district)->get();
                return view('report.report-community-rep', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWCommunityReport::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWDistrictLevelMonoter::where('area', $area)->get();
                return view('report.report-district-level-monitor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWDistrictLevelMonoter::where('area', $area)->where('district', $district)->get();
                return view('report.report-district-level-monitor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWDistrictLevelMonoter::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWDistrictPastorReport::where('area', $area)->get();
                return view('report.report-district_pastor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWDistrictPastorReport::where('area', $area)->where('district', $district)->get();
                return view('report.report-district_pastor', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWDistrictPastorReport::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWLocalLevelQuestion::where('area', $area)->get();
                return view('report.report-local-level-question', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWLocalLevelQuestion::where('area', $area)->where('district', $district)->get();
                return view('report.report-local-level-question', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWLocalLevelQuestion::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWMemberReport::where('area', $area)->get();
                return view('report.report-member', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWMemberReport::where('area', $area)->where('district', $district)->get();
                return view('report.report-member', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWMemberReport::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWMonitorReport::where('area', $area)->get();
                return view('report.report-monitor-report', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWMonitorReport::where('area', $area)->where('district', $district)->get();
                return view('report.report-monitor-report', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWMonitorReport::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWFinancialPolicy::where('area', $area)->get();
                return view('report.report-financial-policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWFinancialPolicy::where('area', $area)->where('district', $district)->get();
                return view('report.report-financial-policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWFinancialPolicy::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWProcurementPolicy::where('area', $area)->get();
                return view('report.report-procurement_policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWProcurementPolicy::where('area', $area)->where('district', $district)->get();
                return view('report.report-procurement_policy', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWProcurementPolicy::where('area', $area)->where('district', $district)->where('local', $local)->get();
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
                $data = VWReportBookingArea::where('area', $area)->get();
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
                $data = VWReportBookingDistrict::where('area', $area)->get();
                return view('report.report-books-district', compact('data', 'area', 'destination'));
            }
            else{
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWReportBookingDistrict::where('area', $area)->where('district', $district)->get();
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
                $data = VWReportBookingLocal::where('area', $area)->get();
                return view('report.report-books-local', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'District'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => 'all'
                ];
                $data = VWReportBookingLocal::where('area', $area)->where('district', $district)->get();
                return view('report.report-books-local', compact('data', 'area', 'destination'));
            }
            elseif($destination == 'Local'){
                $area = [
                    'area' => $area,
                    'district' => $district,
                    'local' => $local
                ];
                $data = VWReportBookingLocal::where('area', $area)->where('district', $district)->where('local', $local)->get();
                return view('report.report-books-local', compact('data', 'area', 'destination'));
            }
        }
    }
    
}
