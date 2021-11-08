<?php

namespace App\Http\Controllers;

use App\Exports\LocalEvangelismExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\VWLocalEvangelism;
use App\Models\VWAreaheadReport;
use App\Models\VWAreaSupQuestions;
use App\Models\VWCommunityReport;
use App\Models\VWDistrictLevelMonoter;
use App\Models\VWDistrictPastorQuestion;
use App\Models\VWDistrictPastorReport;
use App\Models\VWLocalLevelQuestion;
use App\Models\VWMemberReport;
use App\Models\VWMonitorReport;
use App\Exports\AreaHeadReportExport;
use App\Exports\AreaSupQuestionsExport;
use App\Exports\CommunityReportExport;
use App\Exports\DistrictLevelMonoterExport;
use App\Exports\DistrictPastorQuestionExport;
use App\Exports\DistrictPastorReportExport;
use App\Exports\LocalLevelQuestionExport;
use App\Exports\MemberReportExport;
use App\Exports\MonitorReportExport;

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
        $destination_name = $request->destination_name;

        if($report == 'Local Evangelism'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWLocalEvangelism::all();
                return view('report.report-local-evangelism', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWLocalEvangelism::where('area', $destination_name)->get();
                return view('report.report-local-evangelism', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWLocalEvangelism::where('district', $destination_name)->get();
                return view('report.report-local-evangelism', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWLocalEvangelism::where('local', $destination_name)->get();
                return view('report.report-local-evangelism', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'Area Heads Visitation Report'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWAreaheadReport::all();
                return view('report.report-area-head', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWAreaheadReport::where('area', $destination_name)->get();
                return view('report.report-area-head', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWAreaheadReport::where('district', $destination_name)->get();
                return view('report.report-area-head', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWAreaheadReport::where('local', $destination_name)->get();
                return view('report.report-area-head', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'Area Sup Questionnaire'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWAreaSupQuestions::all();
                return view('report.report-area-sup-questions', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWAreaSupQuestions::where('area', $destination_name)->get();
                return view('report.report-area-sup-questions', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWAreaSupQuestions::where('district', $destination_name)->get();
                return view('report.report-area-sup-questions', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWAreaSupQuestions::where('local', $destination_name)->get();
                return view('report.report-area-sup-questions', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'Community Impression Report'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWCommunityReport::all();
                return view('report.report-community-rep', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWCommunityReport::where('area', $destination_name)->get();
                return view('report.report-community-rep', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWCommunityReport::where('district', $destination_name)->get();
                return view('report.report-community-rep', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWCommunityReport::where('local', $destination_name)->get();
                return view('report.report-community-rep', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'District Level Monitoring'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWDistrictLevelMonoter::all();
                return view('report.report-district-level-monitor', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWDistrictLevelMonoter::where('area', $destination_name)->get();
                return view('report.report-district-level-monitor', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWDistrictLevelMonoter::where('district', $destination_name)->get();
                return view('report.report-district-level-monitor', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWDistrictLevelMonoter::where('local', $destination_name)->get();
                return view('report.report-district-level-monitor', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'Dist Pastors Questionnaire'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWDistrictPastorQuestion::all();
                return view('report.report-district_pastor_question', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWDistrictPastorQuestion::where('area', $destination_name)->get();
                return view('report.report-district_pastor_question', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWDistrictPastorQuestion::where('district', $destination_name)->get();
                return view('report.report-district_pastor_question', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWDistrictPastorQuestion::where('local', $destination_name)->get();
                return view('report.report-district_pastor_question', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'District Pastor Visitation Rep'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWDistrictPastorReport::all();
                return view('report.report-district_pastor', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWDistrictPastorReport::where('area', $destination_name)->get();
                return view('report.report-district_pastor', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWDistrictPastorReport::where('district', $destination_name)->get();
                return view('report.report-district_pastor', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWDistrictPastorReport::where('local', $destination_name)->get();
                return view('report.report-district_pastor', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'Local Level Monitoring'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWLocalLevelQuestion::all();
                return view('report.report-local-level-question', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWLocalLevelQuestion::where('area', $destination_name)->get();
                return view('report.report-local-level-question', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWLocalLevelQuestion::where('district', $destination_name)->get();
                return view('report.report-local-level-question', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWLocalLevelQuestion::where('local', $destination_name)->get();
                return view('report.report-local-level-question', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'Members Report'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWMemberReport::all();
                return view('report.report-member', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWMemberReport::where('area', $destination_name)->get();
                return view('report.report-member', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWMemberReport::where('district', $destination_name)->get();
                return view('report.report-member', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWMemberReport::where('local', $destination_name)->get();
                return view('report.report-member', compact('data', 'destination_name', 'destination'));
            }
        }
        elseif($report == 'Monitors Opinion'){
            if($destination == 'General'){
                $destination_name = $destination;
                $data = VWMonitorReport::all();
                return view('report.report-monitor-report', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Area'){
                $data = VWMonitorReport::where('area', $destination_name)->get();
                return view('report.report-monitor-report', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'District'){
                $data = VWMonitorReport::where('district', $destination_name)->get();
                return view('report.report-monitor-report', compact('data', 'destination_name', 'destination'));
            }
            elseif($destination == 'Local'){
                $data = VWMonitorReport::where('local', $destination_name)->get();
                return view('report.report-monitor-report', compact('data', 'destination_name', 'destination'));
            }
        }
    }
    
    public function exportToExcelLocalEvange($destination, $destination_name)
    {
        return Excel::download(new LocalEvangelismExport($destination, $destination_name), $destination.'_'.$destination_name.'_local_evangelism.xlsx');
    }

    public function exportToExcelAreaHeadReport($destination, $destination_name)
    {
        return Excel::download(new AreaHeadReportExport($destination, $destination_name), $destination.'_'.$destination_name.'_area_head_report.xlsx');
    }
    
    public function exportToExcelAreaSup($destination)
    {
        return Excel::download(new AreaSupQuestionsExport($destination), $destination.'_area_sup_questions.xlsx');
    }
    
    public function exportToExcelCommunityReport($destination, $destination_name)
    {
        return Excel::download(new CommunityReportExport($destination, $destination_name), $destination.'_'.$destination_name.'_community_report.xlsx');
    }
    
    public function exportToExcelDistrictLevelMonoter($destination, $destination_name)
    {
        return Excel::download(new DistrictLevelMonoterExport($destination, $destination_name), $destination.'_'.$destination_name.'_district_level_moniter.xlsx');
    }
    
    public function exportToExcelDistrictPastorQuestion($destination)
    {
        return Excel::download(new DistrictPastorQuestionExport($destination), $destination.'_district_pastor_question.xlsx');
    }
    
    public function exportToExcelDistrictPastorReport($destination, $destination_name)
    {
        return Excel::download(new DistrictPastorReportExport($destination, $destination_name), $destination.'_'.$destination_name.'_district_pastor_report.xlsx');
    }
    
    public function exportToExcelLocalLevelQuestion($destination, $destination_name)
    {
        return Excel::download(new LocalLevelQuestionExport($destination, $destination_name), $destination.'_'.$destination_name.'_local_level_question.xlsx');
    }
    
    public function exportToExcelMemberReport($destination, $destination_name)
    {
        return Excel::download(new MemberReportExport($destination, $destination_name), $destination.'_'.$destination_name.'_member_report.xlsx');
    }
    
    public function exportToExcelMonitorReport($destination, $destination_name)
    {
        return Excel::download(new MonitorReportExport($destination, $destination_name), $destination.'_'.$destination_name.'_monitor_report.xlsx');
    }
}
