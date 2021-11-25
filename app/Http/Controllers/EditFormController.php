<?php

namespace App\Http\Controllers;

use App\Models\AreaHeadReport;
use App\Models\AreaSupQuestions;
use App\Models\CommunityReport;
use App\Models\DistrictLevelMonoter;
use App\Models\DistrictPastorQuestion;
use App\Models\DistrictPastorReport;
use App\Models\FinancialPolicy;
use App\Models\LocalEvangelism;
use App\Models\LocalLevelQuestion;
use App\Models\MemberReport;
use App\Models\MonitorReport;
use App\Models\PastorAssessmentQues;
use App\Models\ProcurementPolicy;
use Illuminate\Http\Request;
use App\Models\RecordBooksArea;
use App\Models\RecordBooksDistrict;
use App\Models\RecordBooksLocal;
use App\Models\SupAssessmentQues;
use Illuminate\Support\Facades\Session;

class EditFormController extends Controller
{
    private function message()
    {
        return 'Record Deleted Successfully!!';
    }

    public function editForm($id, $form)
    {
        if($form == 'area_head'){
            $data = AreaHeadReport::find($id);
            $form = 'SUPERINTENDENTS VISITATION REPORT';
            return view('edit.edit-area-head', compact('data','form'));
        }
        elseif($form == 'area_sup'){
            $data = AreaSupQuestions::find($id);
            $form = 'AREA SUPERINTENDENTS DIRECT QUESTIONNAIRE';
            return view('edit.edit-area-sup-questions', compact('data','form'));
        }
        elseif($form == 'community'){
            $data = CommunityReport::find($id);
            $form = 'COMMUNITY IMPRESSION REPORT';
            return view('edit.edit-community-rep', compact('data','form'));
        }
        elseif($form == 'dist_lev_m'){
            $data = DistrictLevelMonoter::find($id);
            $form = 'DISTRICT OFFICERS LEVEL QUESTIONNAIRE';
            return view('edit.edit-district-level-monitor', compact('data','form'));
        }
        elseif($form == 'dist_past_q'){
            $data = DistrictPastorQuestion::find($id);
            $form = 'DISTRICT PASTORS DIRECT QUESTIONNAIRE';
            return view('edit.edit-district-pastor-question', compact('data','form'));
        }
        elseif($form == 'dist_past_r'){
            $data = DistrictPastorReport::find($id);
            $form = 'DISTRICT PASTORS VISITATION REPORT';
            return view('edit.edit-district-pastor', compact('data','form'));
        }
        elseif($form == 'fin-policy'){
            $data = FinancialPolicy::find($id);
            $form = 'FINANCIAL POLICY REPORT';
            return view('edit.edit-financial-policy', compact('data','form'));
        }
        elseif($form == 'local_evang'){
            $data = LocalEvangelism::find($id);
            $form = 'LOCAL QUESTIONNAIRE ON EVANGELISM';
            return view('edit.edit-local-evangelism', compact('data','form'));
        }
        elseif($form == 'local_level'){
            $data = LocalLevelQuestion::find($id);
            $form = 'LOCAL LEVEL QUESTIONNAIRE';
            return view('edit.edit-local-level-question', compact('data','form'));
        }
        elseif($form == 'member'){
            $data = MemberReport::find($id);
            $form = 'MEMBER QUESTIONNAIRE';
            return view('edit.edit-member', compact('data','form'));
        }
        elseif($form == 'moniter'){
            $data = MonitorReport::find($id);
            $form = 'MONITORS REPORT';
            return view('edit.edit-monitor-report', compact('data','form'));
        }
        elseif($form == 'pro_policy'){
            $data = ProcurementPolicy::find($id);
            $form = 'PROCUREMENT POLICY REPORT';
            return view('edit.edit-procurement-policy', compact('data','form'));
        }
        elseif($form == 'booking_area'){
            $data = RecordBooksArea::find($id);
            $form = 'RECORDING AND BOOK KEEPING - AREA REPORT';
            return view('edit.edit-report-books-area', compact('data','form'));
        }
        elseif($form == 'booking_district'){
            $data = RecordBooksDistrict::find($id);
            $form = 'RECORDING AND BOOK KEEPING - DISTRICT REPORT';
            return view('edit.edit-report-books-district', compact('data','form'));
        }
        elseif($form == 'booking_local'){
            $data = RecordBooksLocal::find($id);
            $form = 'RECORDING AND BOOK KEEPING - LOCAL REPORT';
            return view('edit.edit-report-books-local', compact('data','form'));
        }
        elseif($form == 'pastorass'){
            $data = PastorAssessmentQues::find($id);
            $form = 'PASTORS ASSESSMENT QUESTIONNAIRE';
            return view('edit.edit-pastor-assessment', compact('data','form'));
        }
        elseif($form == 'sup_ass'){
            $data = SupAssessmentQues::find($id);
            $form = 'AREA SUPERINTENDENTS ASSESSMENT QUESTIONNAIRE';
            return view('edit.edit-sup-assessment', compact('data','form'));
        }
        
    }

    public function delete($id, $form)
        {
            if($form == 'area_head'){
                $data = AreaHeadReport::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'area_sup'){
                $data = AreaSupQuestions::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'community'){
                $data = CommunityReport::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'dist_lev_m'){
                $data = DistrictLevelMonoter::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'dist_past_q'){
                $data = DistrictPastorQuestion::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'dist_past_r'){
                $data = DistrictPastorReport::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'fin-policy'){
                $data = FinancialPolicy::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'local_evang'){
                $data = LocalEvangelism::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'local_level'){
                $data = LocalLevelQuestion::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'member'){
                $data = MemberReport::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'moniter'){
                $data = MonitorReport::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'pro_policy'){
                $data = ProcurementPolicy::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'booking_area'){
                $data = RecordBooksArea::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'booking_district'){
                $data = RecordBooksDistrict::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'booking_local'){
                $data = RecordBooksLocal::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'pastorass'){
                $data = PastorAssessmentQues::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
            elseif($form == 'sup_ass'){
                $data = SupAssessmentQues::find($id);
                $data->delete();
                Session::flash('success', $this->message());
                return response()->json(['success' => $this->message()]);
            }
        }
}
