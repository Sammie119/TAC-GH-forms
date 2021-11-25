<?php

namespace App\Http\Controllers;

use App\Models\AreaHeadReport;
use App\Models\AreaSupQuestions;
use App\Models\CommunityReport;
use App\Models\DistrictLevelMonoter;
use App\Models\DistrictPastorQuestion;
use App\Models\DistrictPastorReport;
use App\Models\LocalEvangelism;
use App\Models\LocalLevelQuestion;
use App\Models\MemberReport;
use App\Models\MonitorReport;
use App\Models\PastorAssessmentQues;
use App\Models\SupAssessmentQues;
use Illuminate\Http\Request;

class FormController extends Controller
{
    private function message(){
        return 'Record Saved Successfully!!';
    }

    private function updatMmessage(){
        return 'Record Updated Successfully!!';
    }

    public function create()
    {
        return view('forms');
    }

    public function areaHeadReport(Request $request)
    {
        if(isset($request->id)){
            $data = AreaHeadReport::find($request->id);
        }
        else{
            $data = new AreaHeadReport;
        }
        
        $data->areahead_district = $request->areahead_district;
        $data->areahead_area = $request->areahead_area;
        $data->areahead_local = $request->areahead_local;
        $data->areahead_status = $request->areahead_status;
        $data->areahead_comment1 = $request->areahead_comment1;
        $data->areahead_comment2 = $request->areahead_comment2;
        $data->areahead_comment3 = $request->areahead_comment3;
        $data->areahead_comment4 = $request->areahead_comment4;
        $data->areahead_comment5 = $request->areahead_comment5;
        $data->areahead_comment6 = $request->areahead_comment6;
        $data->areahead_question7 = $request->areahead_question7;
        $data->areahead_question8 = $request->areahead_question8;
        $data->areahead_question9 = $request->areahead_question9;
        $data->areahead_question10 = $request->areahead_question10;
        $data->areahead_question11 = $request->areahead_question11;
        $data->areahead_question12 = $request->areahead_question12;
        $data->areahead_question13 = $request->areahead_question13;
        $data->areahead_question14 = $request->areahead_question14;
        $data->areahead_comment14 = $request->areahead_comment14;
        $data->areahead_question15 = $request->areahead_question15;
        $data->areahead_comment15 = $request->areahead_comment15;
        $data->areahead_comment16 = $request->areahead_comment16;
        $data->areahead_question17 = $request->areahead_question17;
        $data->areahead_comment17 = $request->areahead_comment17;
        $data->areahead_comment18 = $request->areahead_comment18;
        $data->areahead_comment19 = $request->areahead_comment19;
        $data->areahead_comment20 = $request->areahead_comment20;
        $data->areahead_comment21 = $request->areahead_comment21;
        $data->areahead_pastors = $request->areahead_pastors;
        $data->areahead_elders = $request->areahead_elders;
        $data->areahead_deacons = $request->areahead_deacons;
        $data->areahead_deaconesses = $request->areahead_deaconesses;
        $data->areahead_adult_males = $request->areahead_adult_males;
        $data->areahead_adult_females = $request->areahead_adult_females;
        $data->areahead_children = $request->areahead_children;
        $data->areahead_youth = $request->areahead_youth;
        $data->areahead_total_att = $request->areahead_total_att;
        $data->areahead_tithe_payers = $request->areahead_tithe_payers;
        $data->areahead_active_tithe_payers = $request->areahead_active_tithe_payers;
        $data->areahead_tithes_paid = $request->areahead_tithes_paid;
        $data->areahead_oferring = $request->areahead_oferring;
        $data->areahead_any_oferring = $request->areahead_any_oferring;
        $data->areahead_total_tithe_off = $request->areahead_total_tithe_off;
        $data->areahead_apostle = $request->areahead_apostle;
        $data->areahead_pastor = $request->areahead_pastor;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function areaSupQuestions(Request $request)
    {
        if(isset($request->id)){
            $data = AreaSupQuestions::find($request->id);
        }
        else{
            $data = new AreaSupQuestions;
        }
    
        $data->areasupq_name = $request->areasupq_name;
        $data->areasupq_dob = $request->areasupq_dob;
        $data->areasupq_year = $request->areasupq_year;
        $data->areasupq_date_of_report = $request->areasupq_date_of_report;
        $data->areasupq_wife = $request->areasupq_wife;
        $data->areasupq_children = $request->areasupq_children;
        $data->areasupq_child_age = $request->areasupq_child_age;
        $data->areasupq_comment1 = $request->areasupq_comment1;
        $data->areasupq_comment2 = $request->areasupq_comment2;
        $data->areasupq_comment3 = $request->areasupq_comment3;
        $data->areasupq_comment4 = $request->areasupq_comment4;
        $data->areasupq_comment5 = $request->areasupq_comment5;
        $data->areasupq_comment6 = $request->areasupq_comment6;
        $data->areasupq_comment7 = $request->areasupq_comment7;
        $data->areasupq_comment8 = $request->areasupq_comment8;
        $data->areasupq_comment9 = $request->areasupq_comment9;
        $data->areasupq_name_sup = $request->areasupq_name_sup;

        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function communityReport(Request $request)
    {
        if(isset($request->id)){
            $data = CommunityReport::find($request->id);
        }
        else{
            $data = new CommunityReport;
        }

        $data->commrep_district = $request->commrep_district;
        $data->commrep_area = $request->commrep_area;
        $data->commrep_local = $request->commrep_local;
        $data->commrep_status = $request->commrep_status;
        $data->commrep_comment1 = $request->commrep_comment1;
        $data->commrep_comment2 = $request->commrep_comment2;
        $data->commrep_question3 = $request->commrep_question3;
        $data->commrep_comment3 = $request->commrep_comment3;
        $data->commrep_question4 = $request->commrep_question4;
        $data->commrep_comment4 = $request->commrep_comment4;
        $data->commrep_question5 = $request->commrep_question5;
        $data->commrep_comment5 = $request->commrep_comment5;
        $data->commrep_question6 = $request->commrep_question6;
        $data->commrep_comment6 = $request->commrep_comment6;
        $data->commrep_question7 = $request->commrep_question7;
        $data->commrep_comment7 = $request->commrep_comment7;
        $data->commrep_question8 = $request->commrep_question8;
        $data->commrep_comment8 = $request->commrep_comment8;
        $data->commrep_question9 = $request->commrep_question9;
        $data->commrep_comment9 = $request->commrep_comment9;
        $data->commrep_question10 = $request->commrep_question10;
        $data->commrep_comment10 = $request->commrep_comment10;
        $data->commrep_question11 = $request->commrep_question11;
        $data->commrep_comment11 = $request->commrep_comment11;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function districtLevelMonitor(Request $request)
    {
        if(isset($request->id)){
            $data = DistrictLevelMonoter::find($request->id);
        }
        else{
            $data = new DistrictLevelMonoter;
        }

        $data->dlm_district = $request->dlm_district;
        $data->dlm_area = $request->dlm_area;
        $data->dlm_local = $request->dlm_local;
        $data->dlm_status = $request->dlm_status;
        $data->dlm_question1 = $request->dlm_question1;
        $data->dlm_comment1 = $request->dlm_comment1;
        $data->dlm_question2 = $request->dlm_question2;
        $data->dlm_comment2 = $request->dlm_comment2;
        $data->dlm_question3 = $request->dlm_question3;
        $data->dlm_comment3 = $request->dlm_comment3;
        $data->dlm_question4 = $request->dlm_question4;
        $data->dlm_comment4 = $request->dlm_comment4;
        $data->dlm_question5 = $request->dlm_question5;
        $data->dlm_comment5 = $request->dlm_comment5;
        $data->dlm_question6 = $request->dlm_question6;
        $data->dlm_comment6 = $request->dlm_comment6;
        $data->dlm_question7 = $request->dlm_question7;
        $data->dlm_comment7 = $request->dlm_comment7;
        $data->dlm_question8 = $request->dlm_question8;
        $data->dlm_comment8 = $request->dlm_comment8;
        $data->dlm_question9 = $request->dlm_question9;
        $data->dlm_comment9 = $request->dlm_comment9;
        $data->dlm_question10 = $request->dlm_question10;
        $data->dlm_comment10 = $request->dlm_comment10;
        $data->dlm_question11 = $request->dlm_question11;
        $data->dlm_comment11 = $request->dlm_comment11;
        $data->dlm_question12 = $request->dlm_question12;
        $data->dlm_comment12 = $request->dlm_comment12;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function districtPastorQuestion(Request $request)
    {
        if(isset($request->id)){
            $data = DistrictPastorQuestion::find($request->id);
        }
        else{
            $data = new DistrictPastorQuestion;
        }

        $data->pastorques_name = $request->pastorques_name;
        $data->pastorques_dob = $request->pastorques_dob;
        $data->pastorques_year = $request->pastorques_year;
        $data->pastorques_stay_length = $request->pastorques_stay_length;
        $data->pastorques_wife = $request->pastorques_wife;
        $data->pastorques_children = $request->pastorques_children;
        $data->pastorques_child_age = $request->pastorques_child_age;
        $data->pastorques_child_station = $request->pastorques_child_station;
        $data->pastorques_comment1 = $request->pastorques_comment1;
        $data->pastorques_comment2 = $request->pastorques_comment2;
        $data->pastorques_comment3 = $request->pastorques_comment3;
        $data->pastorques_comment4 = $request->pastorques_comment4;
        $data->pastorques_comment5 = $request->pastorques_comment5;
        $data->pastorques_comment6 = $request->pastorques_comment6;
        $data->pastorques_comment7 = $request->pastorques_comment7;
        $data->pastorques_comment8 = $request->pastorques_comment8;
        $data->pastorques_comment9 = $request->pastorques_comment9;
        $data->pastorques_comment10 = $request->pastorques_comment10;
        $data->pastorques_comment11 = $request->pastorques_comment11;
        $data->pastorques_comment12 = $request->pastorques_comment12;
        $data->pastorques_comment13 = $request->pastorques_comment13;
        $data->pastorques_comment14 = $request->pastorques_comment14;
        $data->pastorques_name_dist = $request->pastorques_name_dist;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function districtPastorReport(Request $request)
    {
        if(isset($request->id)){
            $data = DistrictPastorReport::find($request->id);
        }
        else{
            $data = new DistrictPastorReport;
        }

        $data->distpast_district = $request->distpast_district;
        $data->distpast_area = $request->distpast_area;
        $data->distpast_local = $request->distpast_local;
        $data->distpast_status = $request->distpast_status;
        $data->distpast_comment1 = $request->distpast_comment1;
        $data->distpast_comment2 = $request->distpast_comment2;
        $data->distpast_comment3 = $request->distpast_comment3;
        $data->distpast_comment4 = $request->distpast_comment4;
        $data->distpast_comment5 = $request->distpast_comment5;
        $data->distpast_question6 = $request->distpast_question6;
        $data->distpast_question7 = $request->distpast_question7;
        $data->distpast_question8 = $request->distpast_question8;
        $data->distpast_question9 = $request->distpast_question9;
        $data->distpast_question10 = $request->distpast_question10;
        $data->distpast_question11 = $request->distpast_question11;
        $data->distpast_question12 = $request->distpast_question12;
        $data->distpast_question13 = $request->distpast_question13;
        $data->distpast_comment13 = $request->distpast_comment13;
        $data->distpast_comment14 = $request->distpast_comment14;
        $data->distpast_comment15 = $request->distpast_comment15;
        $data->distpast_comment16 = $request->distpast_comment16;
        $data->distpast_comment17 = $request->distpast_comment17;
        $data->distpast_comment18 = $request->distpast_comment18;
        $data->distpast_comment19 = $request->distpast_comment19;
        $data->distpast_comment20 = $request->distpast_comment20;
        $data->distpast_pastors = $request->distpast_pastors;
        $data->distpast_elders = $request->distpast_elders;
        $data->distpast_deacons = $request->distpast_deacons;
        $data->distpast_deaconesses = $request->distpast_deaconesses;
        $data->distpast_adult_males = $request->distpast_adult_males;
        $data->distpast_adult_females = $request->distpast_adult_females;
        $data->distpast_children = $request->distpast_children;
        $data->distpast_youth = $request->distpast_youth;
        $data->distpast_total_att = $request->distpast_total_att;
        $data->distpast_tithe_payers = $request->distpast_tithe_payers;
        $data->distpast_active_tithe_payers = $request->distpast_active_tithe_payers;
        $data->distpast_officers_tithe_payers = $request->distpast_officers_tithe_payers;
        $data->distpast_tithes_paid = $request->distpast_tithes_paid;
        $data->distpast_oferring = $request->distpast_oferring;
        $data->distpast_any_oferring = $request->distpast_any_oferring;
        $data->distpast_total_tithe_off = $request->distpast_total_tithe_off;
        $data->distpast_pastor = $request->distpast_pastor;
        $data->distpast_p_elder = $request->distpast_p_elder;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function localEvangelism(Request $request)
    {
        if(isset($request->id)){
            $data = LocalEvangelism::find($request->id);
        }
        else{
            $data = new LocalEvangelism;
        }
        
        $data->evange_district = $request->evange_district;
        $data->evange_area = $request->evange_area;
        $data->evange_local = $request->evange_local;
        $data->evange_status = $request->evange_status;
        $data->evange_question1 = $request->evange_question1;
        $data->evange_comment1 = $request->evange_comment1;
        $data->evange_question2 = $request->evange_question2;
        $data->evange_comment2 = $request->evange_comment2;
        $data->evange_question3 = $request->evange_question3;
        $data->evange_comment3 = $request->evange_comment3;
        $data->evange_question4 = $request->evange_question4;
        $data->evange_comment4 = $request->evange_comment4;
        $data->evange_question5 = $request->evange_question5;
        $data->evange_comment5 = $request->evange_comment5;
        $data->evange_question6 = $request->evange_question6;
        $data->evange_comment6 = $request->evange_comment6;
        $data->evange_question7 = $request->evange_question7;
        $data->evange_comment7 = $request->evange_comment7;
        $data->evange_question8 = $request->evange_question8;
        $data->evange_comment8 = $request->evange_comment8;
        $data->evange_question9 = $request->evange_question9;
        $data->evange_comment9 = $request->evange_comment9;
        $data->evange_question10 = $request->evange_question10;
        $data->evange_comment10 = $request->evange_comment10;
        $data->evange_question11 = $request->evange_question11;
        $data->evange_comment11 = $request->evange_comment11;
        $data->evange_question12 = $request->evange_question12;
        $data->evange_comment12 = $request->evange_comment12;
        $data->evange_question13 = $request->evange_question13;
        $data->evange_comment13 = $request->evange_comment13;
        $data->evange_question14 = $request->evange_question14;
        $data->evange_comment14 = $request->evange_comment14;
        $data->evange_question15 = $request->evange_question15;
        $data->evange_comment15 = $request->evange_comment15;
        $data->evange_question16 = $request->evange_question16;
        $data->evange_comment16 = $request->evange_comment16;
        $data->evange_question17 = $request->evange_question17;
        $data->evange_comment17 = $request->evange_comment17;
        $data->evange_question18 = $request->evange_question18;
        $data->evange_comment18 = $request->evange_comment18;
        $data->evange_name = $request->evange_name;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function localLevelQuestion(Request $request)
    {
        if(isset($request->id)){
            $data = LocalLevelQuestion::find($request->id);
        }
        else{
            $data = new LocalLevelQuestion;
        }
        
        $data->llm_district = $request->llm_district;
        $data->llm_area = $request->llm_area;
        $data->llm_local = $request->llm_local;
        $data->llm_status = $request->llm_status;
        $data->llm_question1 = $request->llm_question1;
        $data->llm_comment1 = $request->llm_comment1;
        $data->llm_question2 = $request->llm_question2;
        $data->llm_comment2 = $request->llm_comment2;
        $data->llm_question3 = $request->llm_question3;
        $data->llm_comment3 = $request->llm_comment3;
        $data->llm_question4 = $request->llm_question4;
        $data->llm_comment4 = $request->llm_comment4;
        $data->llm_question5 = $request->llm_question5;
        $data->llm_comment5 = $request->llm_comment5;
        $data->llm_question6 = $request->llm_question6;
        $data->llm_comment6 = $request->llm_comment6;
        $data->llm_question7 = $request->llm_question7;
        $data->llm_comment7 = $request->llm_comment7;
        $data->llm_question8 = $request->llm_question8;
        $data->llm_comment8 = $request->llm_comment8;
        $data->llm_question9 = $request->llm_question9;
        $data->llm_comment9 = $request->llm_comment9;
        $data->llm_question10 = $request->llm_question10;
        $data->llm_comment10 = $request->llm_comment10;
        $data->llm_question11 = $request->llm_question11;
        $data->llm_comment11 = $request->llm_comment11;
        $data->llm_question12 = $request->llm_question12;
        $data->llm_comment12 = $request->llm_comment12;
        $data->llm_question13 = $request->llm_question13;
        $data->llm_comment13 = $request->llm_comment13;
        $data->llm_question14 = $request->llm_question14;
        $data->llm_comment14 = $request->llm_comment14;
        $data->llm_question15 = $request->llm_question15;
        $data->llm_comment15 = $request->llm_comment15;
        $data->llm_question16 = $request->llm_question16;
        $data->llm_comment16 = $request->llm_comment16;
        $data->llm_question17 = $request->llm_question17;
        $data->llm_comment17 = $request->llm_comment17;
        $data->llm_question18 = $request->llm_question18;
        $data->llm_comment18 = $request->llm_comment18;
        $data->llm_question19 = $request->llm_question19;
        $data->llm_comment19 = $request->llm_comment19;
        $data->llm_question20 = $request->llm_question20;
        $data->llm_comment20 = $request->llm_comment20;
        $data->llm_question21 = $request->llm_question21;
        $data->llm_comment21 = $request->llm_comment21;
        $data->llm_question22 = $request->llm_question22;
        $data->llm_comment22 = $request->llm_comment22;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function memberReport(Request $request)
    {
        if(isset($request->id)){
            $data = MemberReport::find($request->id);
        }
        else{
            $data = new MemberReport;
        }
        
        $data->member_district = $request->member_district;
        $data->member_area = $request->member_area;
        $data->member_local = $request->member_local;
        $data->member_status = $request->member_status;
        $data->member_question1 = $request->member_question1;
        $data->member_comment1 = $request->member_comment1;
        $data->member_question2 = $request->member_question2;
        $data->member_comment2 = $request->member_comment2;
        $data->member_question3 = $request->member_question3;
        $data->member_comment3 = $request->member_comment3;
        $data->member_question4 = $request->member_question4;
        $data->member_comment4 = $request->member_comment4;
        $data->member_question5 = $request->member_question5;
        $data->member_comment5 = $request->member_comment5;
        $data->member_question6 = $request->member_question6;
        $data->member_comment6 = $request->member_comment6;
        $data->member_question7 = $request->member_question7;
        $data->member_comment7 = $request->member_comment7;
        $data->member_question8 = $request->member_question8;
        $data->member_comment8 = $request->member_comment8;
        $data->member_question9 = $request->member_question9;
        $data->member_comment9 = $request->member_comment9;
        $data->member_question10 = $request->member_question10;
        $data->member_comment10 = $request->member_comment10;
        $data->member_question11 = $request->member_question11;
        $data->member_comment11 = $request->member_comment11;
        $data->member_question12 = $request->member_question12;
        $data->member_comment12 = $request->member_comment12;
        $data->member_question13 = $request->member_question13;
        $data->member_comment13 = $request->member_comment13;
        $data->member_question14 = $request->member_question14;
        $data->member_comment14 = $request->member_comment14;
        $data->member_question15 = $request->member_question15;
        $data->member_comment15 = $request->member_comment15;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function monitorsReport(Request $request)
    {
        if(isset($request->id)){
            $data = MonitorReport::find($request->id);
        }
        else{
            $data = new MonitorReport;
        }
        
        $data->monirep_district = $request->monirep_district;
        $data->monirep_area = $request->monirep_area;
        $data->monirep_local = $request->monirep_local;
        $data->monirep_status = $request->monirep_status;
        $data->monirep_question1 = $request->monirep_question1;
        $data->monirep_comment1 = $request->monirep_comment1;
        $data->monirep_question2 = $request->monirep_question2;
        $data->monirep_comment2 = $request->monirep_comment2;
        $data->monirep_comment3 = $request->monirep_comment3;
        $data->monirep_comment4 = $request->monirep_comment4;
        $data->monirep_question5 = $request->monirep_question5;
        $data->monirep_comment5 = $request->monirep_comment5;
        $data->monirep_question6 = $request->monirep_question6;
        $data->monirep_comment6 = $request->monirep_comment6;
        $data->monirep_question7 = $request->monirep_question7;
        $data->monirep_question8 = $request->monirep_question8;
        $data->monirep_question9 = $request->monirep_question9;
        $data->monirep_question10 = $request->monirep_question10;
        $data->monirep_question11 = $request->monirep_question11;
        $data->monirep_question12 = $request->monirep_question12;
        $data->monirep_comment13 = $request->monirep_comment13;
        $data->monirep_comment14 = $request->monirep_comment14;
        $data->monirep_pastors = $request->monirep_pastors;
        $data->monirep_elders = $request->monirep_elders;
        $data->monirep_deacons = $request->monirep_deacons;
        $data->monirep_deaconesses = $request->monirep_deaconesses;
        $data->monirep_adult_males = $request->monirep_adult_males;
        $data->monirep_adult_females = $request->monirep_adult_females;
        $data->monirep_children = $request->monirep_children;
        $data->monirep_youth = $request->monirep_youth;
        $data->monirep_total_att = $request->monirep_total_att;
        $data->monirep_tithe_payers = $request->monirep_tithe_payers;
        $data->monirep_tithes_paid = $request->monirep_tithes_paid;
        $data->monirep_oferring = $request->monirep_oferring;
        $data->monirep_total_tithe_off = $request->monirep_total_tithe_off;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function pastorAssessmentQuestion(Request $request)
    {
        if(isset($request->id)){
            $data = PastorAssessmentQues::find($request->id);
        }
        else{
            $data = new PastorAssessmentQues;
        }
        
        $data->past_ass_district = $request->past_ass_district;
        $data->past_ass_area = $request->past_ass_area;
        $data->past_ass_local = $request->past_ass_local;
        $data->past_ass_name = $request->past_ass_name;
        $data->past_ass_comment1 = $request->past_ass_comment1;
        $data->past_ass_comment2 = $request->past_ass_comment2;
        $data->past_ass_comment3 = $request->past_ass_comment3;
        $data->past_ass_comment4 = $request->past_ass_comment4;
        $data->past_ass_comment5 = $request->past_ass_comment5;
        $data->past_ass_comment6 = $request->past_ass_comment6;
        $data->past_ass_comment7 = $request->past_ass_comment7;
        $data->past_ass_comment8 = $request->past_ass_comment8;
        $data->past_ass_comment9 = $request->past_ass_comment9;
        $data->past_ass_comment10 = $request->past_ass_comment10;
        $data->past_ass_comment11 = $request->past_ass_comment11;
        $data->past_ass_comment12 = $request->past_ass_comment12;
        $data->past_ass_comment13 = $request->past_ass_comment13;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }

    public function supAssessmentQuestion(Request $request)
    {
        if(isset($request->id)){
            $data = SupAssessmentQues::find($request->id);
        }
        else{
            $data = new SupAssessmentQues;
        }
        
        $data->sup_ass_district = $request->sup_ass_district;
        $data->sup_ass_area = $request->sup_ass_area;
        $data->sup_ass_local = $request->sup_ass_local;
        $data->sup_ass_name = $request->sup_ass_name;
        $data->sup_ass_comment1 = $request->sup_ass_comment1;
        $data->sup_ass_comment2 = $request->sup_ass_comment2;
        $data->sup_ass_comment3 = $request->sup_ass_comment3;
        $data->sup_ass_comment4 = $request->sup_ass_comment4;
        $data->sup_ass_comment5 = $request->sup_ass_comment5;
        $data->sup_ass_comment6 = $request->sup_ass_comment6;
        $data->sup_ass_comment7 = $request->sup_ass_comment7;
        $data->sup_ass_comment8 = $request->sup_ass_comment8;
        $data->sup_ass_comment9 = $request->sup_ass_comment9;
        $data->sup_ass_comment10 = $request->sup_ass_comment10;
        $data->sup_ass_comment11 = $request->sup_ass_comment11;
        $data->sup_ass_comment12 = $request->sup_ass_comment12;
        $data->sup_ass_comment13 = $request->sup_ass_comment13;
        
        if(isset($request->id)){
            $data->updated_by = Auth()->user()->user_id;

            $data->update();

            return back()->with('success', $this->updatMmessage());
        }
        else{
            $data->created_by = Auth()->user()->user_id;
            $data->updated_by = Auth()->user()->user_id;

            $data->save();

            return back()->with('success', $this->message());
        }
    }
}
