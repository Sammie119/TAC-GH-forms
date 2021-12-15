<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Charts\AreaHeadChartsController;
use App\Http\Controllers\Charts\AreaSupChartsController;
use App\Http\Controllers\Charts\CommunityChartsController;
use App\Http\Controllers\Charts\DistrictLevelChartsController;
use Illuminate\Http\Request;
use App\Http\Controllers\Charts\DistrictPastorQuestionChartsController;
use App\Http\Controllers\Charts\DistrictPastorReportChartsController;
use App\Http\Controllers\Charts\FinancialPolicyChartsController;
use App\Http\Controllers\Charts\LocalEvangelismChartsController;
use App\Http\Controllers\Charts\LocalLevelQuesChartsController;
use App\Http\Controllers\Charts\MemberReportChartsController;
use App\Http\Controllers\Charts\MonitorReportChartsController;
use App\Http\Controllers\Charts\PastorAssessChartsController;
use App\Http\Controllers\Charts\PresisingAssessChartsController;
use App\Http\Controllers\Charts\ProcurementPolicyChartsController;
use App\Http\Controllers\Charts\RecordBooksAreaChartsController;
use App\Http\Controllers\Charts\SupAssessChartsController;
use App\Http\Controllers\Charts\RecordBooksDistrictChartsController;
use App\Http\Controllers\Charts\RecordBooksLocalChartsController;

class ChartsController extends Controller
{
    public function chartsAreaSup($form, $destination, $area, $dist, $loc)
    {
        switch ($form) {
            case 'area-head-r':
                $query = AreaHeadChartsController::areaHead($destination, $area, $dist, $loc);
                $form = "SUPERINTENDENT'S VISITATION REPORT";
                return view('charts.chart-area-head', compact('form', 'query'));
                break;

            case 'area-sup-r':
                $query = AreaSupChartsController::areaSup();
                $form = "AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE";
                return view('charts.chart-area-sup-questions', compact('form', 'query'));
                break;

            case 'community':
                $query = CommunityChartsController::community($destination, $area, $dist, $loc);
                $form = "COMMUNITY IMPRESSION REPORT";
                return view('charts.chart-community-rep', compact('form', 'query'));
                break;
            
            case 'dist-level-m':
                $query = DistrictLevelChartsController::districtLevel($destination, $area, $dist, $loc);
                $form = "DISTRICT OFFICERS LEVEL QUESTIONNAIRE";
                return view('charts.chart-district-level-monitor', compact('form', 'query'));
                break;

            case 'dist-past-q':
                $query = DistrictPastorQuestionChartsController::districtPastQues();
                $form = "DISTRICT PASTORS' DIRECT QUESTIONNAIRE";
                return view('charts.chart-district-pastor-question', compact('form', 'query'));
                break;

            case 'dist-past-r':
                $query = DistrictPastorReportChartsController::districtPastReport($destination, $area, $dist, $loc);
                $form = "DISTRICT PASTOR'S VISITATION REPORT";
                return view('charts.chart-district-pastor', compact('form', 'query'));
                break;

            case 'financial-p':
                $query = FinancialPolicyChartsController::financialPolicy($destination, $area, $dist, $loc);
                $form = "FINANCIAL POLICY REPORT";
                return view('charts.chart-financial-policy', compact('form', 'query'));
                break;

            case 'local-ev':
                $query = LocalEvangelismChartsController::localEvangelism($destination, $area, $dist, $loc);
                $form = "LOCAL QUESTIONNAIRE ON EVANGELISM";
                return view('charts.chart-local-evangelism', compact('form', 'query'));
                break;

            case 'local-level':
                $query = LocalLevelQuesChartsController::localQuestion($destination, $area, $dist, $loc);
                $form = "LOCAL LEVEL QUESTIONNAIRE";
                return view('charts.chart-local-level-question', compact('form', 'query'));
                break;

            case 'member-r':
                $query = MemberReportChartsController::member($destination, $area, $dist, $loc);
                $form = "MEMBER QUESTIONNAIRE";
                return view('charts.chart-member', compact('form', 'query'));
                break;

            case 'moniter-r':
                $query = MonitorReportChartsController::monitor($destination, $area, $dist, $loc);
                $form = "MONITOR'S  REPORT";
                return view('charts.chart-monitor-report', compact('form', 'query'));
                break;

            case 'pastor-ass':
                $query = PastorAssessChartsController::pastorAss($destination, $area, $dist, $loc);
                $form = "PASTOR'S ASSESSMENT QUESTIONNAIRE";
                return view('charts.chart-pastor-assessment', compact('form', 'query'));
                break;

            case 'sup-ass':
                $query = SupAssessChartsController::supAss($destination, $area, $dist, $loc);
                $form = "AREA SUPERINTENDENT'S ASSESSMENT QUESTIONNAIRE";
                return view('charts.chart-sup-assessment', compact('form', 'query'));
                break;

            case 'procurement-p':
                $query = ProcurementPolicyChartsController::procurement($destination, $area, $dist, $loc);
                $form = "PROCUREMENT POLICY REPORT";
                return view('charts.chart-procurement-policy', compact('form', 'query'));
                break;

            case 'r-booking-area':
                $query = RecordBooksAreaChartsController::recordBooksArea($destination, $area, $dist, $loc);
                $form = "RECORDING AND BOOK KEEPING - AREA REPORT";
                return view('charts.chart-report-books-area', compact('form', 'query'));
                break;

            case 'r-booking-district':
                $query = RecordBooksDistrictChartsController::recordBooksDistrict($destination, $area, $dist, $loc);
                $form = "RECORDING AND BOOK KEEPING - DISTRICT REPORT";
                return view('charts.chart-report-books-district', compact('form', 'query'));
                break;

            case 'r-booking-local':
                $query = RecordBooksLocalChartsController::recordBooksLocal($destination, $area, $dist, $loc);
                $form = "RECORDING AND BOOK KEEPING - LOCAL REPORT";
                return view('charts.chart-report-books-local', compact('form', 'query'));
                break;

            case 'pres-ass':
                $query = PresisingAssessChartsController::presidingAss($destination, $area, $dist, $loc);
                $form = "PRESIDING ELDER'S ASSESSMENT";
                return view('charts.chart-presiding-assessment', compact('form', 'query'));
                break;
            
            default:
                # code...
                break;
        }
        
    }
}
