<?php

namespace App\Http\Controllers;

use App\Models\FinancialPolicy;
use App\Models\ProcurementPolicy;
use App\Models\RecordBooksArea;
use App\Models\RecordBooksDistrict;
use App\Models\RecordBooksLocal;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    private function message(){
        return 'Record Saved Successfully!!';
    }

    public function create()
    {
        return view('finance');
    }

    public function financialPolicyReport(Request $request)
    {
        $data = new FinancialPolicy;
        $data->fin_eva_a_area = $request->fin_eva_a_area;
        $data->fin_eva_a_district = $request->fin_eva_a_district;
        $data->fin_eva_a_local = $request->fin_eva_a_local;
        $data->fin_eva_a_moniter = $request->fin_eva_a_moniter;
        $data->fin_eva_a_question1a = $request->fin_eva_a_question1a;
        $data->fin_eva_a_comment1a = $request->fin_eva_a_comment1a;
        $data->fin_eva_a_question1b = $request->fin_eva_a_question1b;
        $data->fin_eva_a_comment1b = $request->fin_eva_a_comment1b;
        $data->fin_eva_a_question1c = $request->fin_eva_a_question1c;
        $data->fin_eva_a_comment1c = $request->fin_eva_a_comment1c;
        $data->fin_eva_a_question1d = $request->fin_eva_a_question1d;
        $data->fin_eva_a_comment1d = $request->fin_eva_a_comment1d;
        $data->fin_eva_a_question1e = $request->fin_eva_a_question1e;
        $data->fin_eva_a_comment1e = $request->fin_eva_a_comment1e;
        $data->fin_eva_a_question1f = $request->fin_eva_a_question1f;
        $data->fin_eva_a_comment1f = $request->fin_eva_a_comment1f;
        $data->fin_eva_a_question1g = $request->fin_eva_a_question1g;
        $data->fin_eva_a_comment1g = $request->fin_eva_a_comment1g;
        $data->fin_eva_a_question2a = $request->fin_eva_a_question2a;
        $data->fin_eva_a_comment2a = $request->fin_eva_a_comment2a;
        $data->fin_eva_a_question2b = $request->fin_eva_a_question2b;
        $data->fin_eva_a_comment2b = $request->fin_eva_a_comment2b;
        $data->fin_eva_a_question2c = $request->fin_eva_a_question2c;
        $data->fin_eva_a_comment2c = $request->fin_eva_a_comment2c;
        $data->fin_eva_a_question3a = $request->fin_eva_a_question3a;
        $data->fin_eva_a_comment3a = $request->fin_eva_a_comment3a;
        $data->fin_eva_a_question3b = $request->fin_eva_a_question3b;
        $data->fin_eva_a_comment3b = $request->fin_eva_a_comment3b;
        $data->fin_eva_a_question3c = $request->fin_eva_a_question3c;
        $data->fin_eva_a_comment3c = $request->fin_eva_a_comment3c;
        $data->fin_eva_a_question3d = $request->fin_eva_a_question3d;
        $data->fin_eva_a_comment3d = $request->fin_eva_a_comment3d;
        $data->fin_eva_a_question3e = $request->fin_eva_a_question3e;
        $data->fin_eva_a_comment3e = $request->fin_eva_a_comment3e;
        $data->fin_eva_a_question3f = $request->fin_eva_a_question3f;
        $data->fin_eva_a_comment3f = $request->fin_eva_a_comment3f;
        $data->fin_eva_a_question3g = $request->fin_eva_a_question3g;
        $data->fin_eva_a_comment3g = $request->fin_eva_a_comment3g;
        $data->fin_eva_a_question3h = $request->fin_eva_a_question3h;
        $data->fin_eva_a_comment3h = $request->fin_eva_a_comment3h;
        $data->fin_eva_a_question3i = $request->fin_eva_a_question3i;
        $data->fin_eva_a_comment3i = $request->fin_eva_a_comment3i;
        $data->fin_eva_a_question4a = $request->fin_eva_a_question4a;
        $data->fin_eva_a_comment4a = $request->fin_eva_a_comment4a;
        $data->fin_eva_a_comment4b = $request->fin_eva_a_comment4b;
        $data->fin_eva_a_comment4c1 = $request->fin_eva_a_comment4c1;
        $data->fin_eva_a_comment4c2 = $request->fin_eva_a_comment4c2;
        $data->fin_eva_a_comment4c3 = $request->fin_eva_a_comment4c3;
        $data->fin_eva_a_comment4d = $request->fin_eva_a_comment4d;
        $data->fin_eva_a_comment4e = $request->fin_eva_a_comment4e;
        $data->fin_eva_a_comment4f = $request->fin_eva_a_comment4f;
        $data->fin_eva_a_comment5a = $request->fin_eva_a_comment5a;
        $data->fin_eva_a_comment5b1 = $request->fin_eva_a_comment5b1;
        $data->fin_eva_a_comment5b2 = $request->fin_eva_a_comment5b2;
        $data->fin_eva_a_comment5b3 = $request->fin_eva_a_comment5b3;
        $data->fin_eva_a_comment5b4 = $request->fin_eva_a_comment5b4;
        $data->fin_eva_a_comment5c = $request->fin_eva_a_comment5c;
        $data->fin_eva_a_question6a = $request->fin_eva_a_question6a;
        $data->fin_eva_a_comment6a = $request->fin_eva_a_comment6a;
        $data->fin_eva_a_comment6b = $request->fin_eva_a_comment6b;
        $data->fin_eva_a_question6c1 = $request->fin_eva_a_question6c1;
        $data->fin_eva_a_comment6c1 = $request->fin_eva_a_comment6c1;
        $data->fin_eva_a_question6c2 = $request->fin_eva_a_question6c2;
        $data->fin_eva_a_comment6c2 = $request->fin_eva_a_comment6c2;
        $data->fin_eva_a_comment6c3 = $request->fin_eva_a_comment6c3;
        $data->fin_eva_a_question6d = $request->fin_eva_a_question6d;
        $data->fin_eva_a_comment6d = $request->fin_eva_a_comment6d;
        $data->fin_eva_a_question6e = $request->fin_eva_a_question6e;
        $data->fin_eva_a_comment6e = $request->fin_eva_a_comment6e;
        $data->fin_eva_a_question7a1 = $request->fin_eva_a_question7a1;
        $data->fin_eva_a_comment7a1 = $request->fin_eva_a_comment7a1;
        $data->fin_eva_a_question7a2 = $request->fin_eva_a_question7a2;
        $data->fin_eva_a_comment7a2 = $request->fin_eva_a_comment7a2;
        $data->fin_eva_a_question7b1 = $request->fin_eva_a_question7b1;
        $data->fin_eva_a_comment7b1 = $request->fin_eva_a_comment7b1;
        $data->fin_eva_a_question7b2 = $request->fin_eva_a_question7b2;
        $data->fin_eva_a_comment7b2 = $request->fin_eva_a_comment7b2;
        $data->fin_eva_a_question7b3 = $request->fin_eva_a_question7b3;
        $data->fin_eva_a_comment7b3 = $request->fin_eva_a_comment7b3;
        $data->fin_eva_a_question7c = $request->fin_eva_a_question7c;
        $data->fin_eva_a_comment7c = $request->fin_eva_a_comment7c;
        $data->fin_eva_a_question7d = $request->fin_eva_a_question7d;
        $data->fin_eva_a_comment7d = $request->fin_eva_a_comment7d;
        $data->fin_eva_a_comment8a = $request->fin_eva_a_comment8a;
        $data->fin_eva_a_comment8b = $request->fin_eva_a_comment8b;
        $data->fin_eva_a_question8c = $request->fin_eva_a_question8c;
        $data->fin_eva_a_comment8c = $request->fin_eva_a_comment8c;
        $data->fin_eva_a_question8d = $request->fin_eva_a_question8d;
        $data->fin_eva_a_comment8d = $request->fin_eva_a_comment8d;
        $data->fin_eva_a_comment8e = $request->fin_eva_a_comment8e;
        $data->fin_eva_a_comment8f = $request->fin_eva_a_comment8f;
        $data->created_by = Auth()->user()->user_id;
        $data->updated_by = Auth()->user()->user_id;

        $data->save();

        return back()->with('success', $this->message());
    }

    public function procurementPolicyReport(Request $request)
    {
        $data = new ProcurementPolicy;
        $data->fin_eva_b_area = $request->fin_eva_b_area;
        $data->fin_eva_b_district = $request->fin_eva_b_district;
        $data->fin_eva_b_local = $request->fin_eva_b_local;
        $data->fin_eva_b_moniter = $request->fin_eva_b_moniter;
        $data->fin_eva_b_comment1a = $request->fin_eva_b_comment1a;
        $data->fin_eva_b_question1b = $request->fin_eva_b_question1b;
        $data->fin_eva_b_comment1b = $request->fin_eva_b_comment1b;
        $data->fin_eva_b_question1c = $request->fin_eva_b_question1c;
        $data->fin_eva_b_comment1c = $request->fin_eva_b_comment1c;
        $data->fin_eva_b_question1d = $request->fin_eva_b_question1d;
        $data->fin_eva_b_comment1d = $request->fin_eva_b_comment1d;
        $data->fin_eva_b_comment2a = $request->fin_eva_b_comment2a;
        $data->fin_eva_b_question2b = $request->fin_eva_b_question2b;
        $data->fin_eva_b_comment2b = $request->fin_eva_b_comment2b;
        $data->fin_eva_b_question2c = $request->fin_eva_b_question2c;
        $data->fin_eva_b_comment2c = $request->fin_eva_b_comment2c;
        $data->fin_eva_b_comment2d = $request->fin_eva_b_comment2d;
        $data->fin_eva_b_question3a = $request->fin_eva_b_question3a;
        $data->fin_eva_b_comment3a = $request->fin_eva_b_comment3a;
        $data->fin_eva_b_comment3b = $request->fin_eva_b_comment3b;
        $data->fin_eva_b_question3c = $request->fin_eva_b_question3c;
        $data->fin_eva_b_comment3c = $request->fin_eva_b_comment3c;
        $data->fin_eva_b_comment3d = $request->fin_eva_b_comment3d;
        $data->fin_eva_b_question4a = $request->fin_eva_b_question4a;
        $data->fin_eva_b_comment4a = $request->fin_eva_b_comment4a;
        $data->fin_eva_b_comment4b = $request->fin_eva_b_comment4b;
        $data->fin_eva_b_question4c = $request->fin_eva_b_question4c;
        $data->fin_eva_b_comment4c = $request->fin_eva_b_comment4c;
        $data->fin_eva_b_question5a = $request->fin_eva_b_question5a;
        $data->fin_eva_b_comment5a = $request->fin_eva_b_comment5a;
        $data->fin_eva_b_question5b = $request->fin_eva_b_question5b;
        $data->fin_eva_b_comment5b = $request->fin_eva_b_comment5b;
        $data->fin_eva_b_question5c = $request->fin_eva_b_question5c;
        $data->fin_eva_b_comment5c = $request->fin_eva_b_comment5c;
        $data->fin_eva_b_comment5d = $request->fin_eva_b_comment5d;
        $data->fin_eva_b_question6a = $request->fin_eva_b_question6a;
        $data->fin_eva_b_comment6a = $request->fin_eva_b_comment6a;
        $data->fin_eva_b_question6b = $request->fin_eva_b_question6b;
        $data->fin_eva_b_comment6b = $request->fin_eva_b_comment6b;
        $data->fin_eva_b_question6c = $request->fin_eva_b_question6c;
        $data->fin_eva_b_comment6c = $request->fin_eva_b_comment6c;
        $data->fin_eva_b_question7a = $request->fin_eva_b_question7a;
        $data->fin_eva_b_comment7a = $request->fin_eva_b_comment7a;
        $data->fin_eva_b_comment7b = $request->fin_eva_b_comment7b;
        $data->fin_eva_b_comment7c = $request->fin_eva_b_comment7c;
        $data->fin_eva_b_comment7d = $request->fin_eva_b_comment7d;
        $data->fin_eva_b_question8a = $request->fin_eva_b_question8a;
        $data->fin_eva_b_comment8a = $request->fin_eva_b_comment8a;
        $data->fin_eva_b_question8b = $request->fin_eva_b_question8b;
        $data->fin_eva_b_comment8b = $request->fin_eva_b_comment8b;
        $data->created_by = Auth()->user()->user_id;
        $data->updated_by = Auth()->user()->user_id;

        $data->save();

        return back()->with('success', $this->message());
    }

    public function recordBookingArea(Request $request)
    {
        $data = new RecordBooksArea;
        $data->rec_area_area = $request->rec_area_area;
        $data->rec_area_prepared_by = $request->rec_area_prepared_by;
        $data->rec_area_year = $request->rec_area_year;
        $data->rec_area_period = $request->rec_area_period;
        $data->rec_area_w_p = $request->rec_area_w_p;
        $data->rec_area_question1 = $request->rec_area_question1;
        $data->rec_area_comment1 = $request->rec_area_comment1;
        $data->rec_area_question2 = $request->rec_area_question2;
        $data->rec_area_comment2 = $request->rec_area_comment2;
        $data->rec_area_question3 = $request->rec_area_question3;
        $data->rec_area_comment3 = $request->rec_area_comment3;
        $data->rec_area_question4 = $request->rec_area_question4;
        $data->rec_area_comment4 = $request->rec_area_comment4;
        $data->rec_area_question5 = $request->rec_area_question5;
        $data->rec_area_comment5 = $request->rec_area_comment5;
        $data->rec_area_question6 = $request->rec_area_question6;
        $data->rec_area_comment6 = $request->rec_area_comment6;
        $data->rec_area_question7 = $request->rec_area_question7;
        $data->rec_area_comment7 = $request->rec_area_comment7;
        $data->rec_area_question8 = $request->rec_area_question8;
        $data->rec_area_comment8 = $request->rec_area_comment8;
        $data->rec_area_question9 = $request->rec_area_question9;
        $data->rec_area_comment9 = $request->rec_area_comment9;
        $data->rec_area_question10 = $request->rec_area_question10;
        $data->rec_area_comment10 = $request->rec_area_comment10;
        $data->rec_area_question11 = $request->rec_area_question11;
        $data->rec_area_comment11 = $request->rec_area_comment11;
        $data->rec_area_question12 = $request->rec_area_question12;
        $data->rec_area_comment12 = $request->rec_area_comment12;
        $data->rec_area_question13 = $request->rec_area_question13;
        $data->rec_area_comment13 = $request->rec_area_comment13;
        $data->rec_area_question14 = $request->rec_area_question14;
        $data->rec_area_comment14 = $request->rec_area_comment14;
        $data->rec_area_question15 = $request->rec_area_question15;
        $data->rec_area_comment15 = $request->rec_area_comment15;
        $data->rec_area_question16 = $request->rec_area_question16;
        $data->rec_area_comment16 = $request->rec_area_comment16;
        $data->rec_area_question17 = $request->rec_area_question17;
        $data->rec_area_comment17 = $request->rec_area_comment17;
        $data->rec_area_question18 = $request->rec_area_question18;
        $data->rec_area_comment18 = $request->rec_area_comment18;
        $data->rec_area_question19 = $request->rec_area_question19;
        $data->rec_area_comment19 = $request->rec_area_comment19;
        $data->rec_area_question20 = $request->rec_area_question20;
        $data->rec_area_comment20 = $request->rec_area_comment20;
        $data->rec_area_question21 = $request->rec_area_question21;
        $data->rec_area_comment21 = $request->rec_area_comment21;
        $data->created_by = Auth()->user()->user_id;
        $data->updated_by = Auth()->user()->user_id;

        $data->save();

        return back()->with('success', $this->message());
    }

    public function recordBookingDistrict(Request $request)
    {
        $data = new RecordBooksDistrict;
        $data->rec_dist_area = $request->rec_dist_area;
        $data->rec_dist_district = $request->rec_dist_district;
        $data->rec_dist_prepared_by = $request->rec_dist_prepared_by;
        $data->rec_dist_year = $request->rec_dist_year;
        $data->rec_dist_period = $request->rec_dist_period;
        $data->rec_dist_w_p = $request->rec_dist_w_p;
        $data->rec_dist_question1 = $request->rec_dist_question1;
        $data->rec_dist_comment1 = $request->rec_dist_comment1;
        $data->rec_dist_question2 = $request->rec_dist_question2;
        $data->rec_dist_comment2 = $request->rec_dist_comment2;
        $data->rec_dist_question3 = $request->rec_dist_question3;
        $data->rec_dist_comment3 = $request->rec_dist_comment3;
        $data->rec_dist_question4 = $request->rec_dist_question4;
        $data->rec_dist_comment4 = $request->rec_dist_comment4;
        $data->rec_dist_question5 = $request->rec_dist_question5;
        $data->rec_dist_comment5 = $request->rec_dist_comment5;
        $data->rec_dist_question6 = $request->rec_dist_question6;
        $data->rec_dist_comment6 = $request->rec_dist_comment6;
        $data->rec_dist_question7 = $request->rec_dist_question7;
        $data->rec_dist_comment7 = $request->rec_dist_comment7;
        $data->rec_dist_question8 = $request->rec_dist_question8;
        $data->rec_dist_comment8 = $request->rec_dist_comment8;
        $data->rec_dist_question9 = $request->rec_dist_question9;
        $data->rec_dist_comment9 = $request->rec_dist_comment9;
        $data->rec_dist_question10 = $request->rec_dist_question10;
        $data->rec_dist_comment10 = $request->rec_dist_comment10;
        $data->rec_dist_question11 = $request->rec_dist_question11;
        $data->rec_dist_comment11 = $request->rec_dist_comment11;
        $data->rec_dist_question12 = $request->rec_dist_question12;
        $data->rec_dist_comment12 = $request->rec_dist_comment12;
        $data->rec_dist_question13 = $request->rec_dist_question13;
        $data->rec_dist_comment13 = $request->rec_dist_comment13;
        $data->rec_dist_question14 = $request->rec_dist_question14;
        $data->rec_dist_comment14 = $request->rec_dist_comment14;
        $data->rec_dist_question15 = $request->rec_dist_question15;
        $data->rec_dist_comment15 = $request->rec_dist_comment15;
        $data->rec_dist_question16 = $request->rec_dist_question16;
        $data->rec_dist_comment16 = $request->rec_dist_comment16;
        $data->rec_dist_question17 = $request->rec_dist_question17;
        $data->rec_dist_comment17 = $request->rec_dist_comment17;
        $data->rec_dist_question18 = $request->rec_dist_question18;
        $data->rec_dist_comment18 = $request->rec_dist_comment18;
        $data->rec_dist_question19 = $request->rec_dist_question19;
        $data->rec_dist_comment19 = $request->rec_dist_comment19;
        $data->rec_dist_question20 = $request->rec_dist_question20;
        $data->rec_dist_comment20 = $request->rec_dist_comment20;
        $data->rec_dist_question21 = $request->rec_dist_question21;
        $data->rec_dist_comment21 = $request->rec_dist_comment21;
        $data->created_by = Auth()->user()->user_id;
        $data->updated_by = Auth()->user()->user_id;

        $data->save();

        return back()->with('success', $this->message());
    }

    public function recordBookingLocal(Request $request)
    {
        $data = new RecordBooksLocal;
        $data->rec_local_area = $request->rec_local_area;
        $data->rec_local_district = $request->rec_local_district;
        $data->rec_local_local = $request->rec_local_local;
        $data->rec_local_prepared_by = $request->rec_local_prepared_by;
        $data->rec_local_year = $request->rec_local_year;
        $data->rec_local_period = $request->rec_local_period;
        $data->rec_local_w_p = $request->rec_local_w_p;
        $data->rec_local_question1 = $request->rec_local_question1;
        $data->rec_local_comment1 = $request->rec_local_comment1;
        $data->rec_local_question2 = $request->rec_local_question2;
        $data->rec_local_comment2 = $request->rec_local_comment2;
        $data->rec_local_question3 = $request->rec_local_question3;
        $data->rec_local_comment3 = $request->rec_local_comment3;
        $data->rec_local_question4 = $request->rec_local_question4;
        $data->rec_local_comment4 = $request->rec_local_comment4;
        $data->rec_local_question5 = $request->rec_local_question5;
        $data->rec_local_comment5 = $request->rec_local_comment5;
        $data->rec_local_question6 = $request->rec_local_question6;
        $data->rec_local_comment6 = $request->rec_local_comment6;
        $data->rec_local_question7 = $request->rec_local_question7;
        $data->rec_local_comment7 = $request->rec_local_comment7;
        $data->rec_local_question8 = $request->rec_local_question8;
        $data->rec_local_comment8 = $request->rec_local_comment8;
        $data->rec_local_question9 = $request->rec_local_question9;
        $data->rec_local_comment9 = $request->rec_local_comment9;
        $data->rec_local_question10 = $request->rec_local_question10;
        $data->rec_local_comment10 = $request->rec_local_comment10;
        $data->rec_local_question11 = $request->rec_local_question11;
        $data->rec_local_comment11 = $request->rec_local_comment11;
        $data->rec_local_question12 = $request->rec_local_question12;
        $data->rec_local_comment12 = $request->rec_local_comment12;
        $data->rec_local_question13 = $request->rec_local_question13;
        $data->rec_local_comment13 = $request->rec_local_comment13;
        $data->rec_local_question14 = $request->rec_local_question14;
        $data->rec_local_comment14 = $request->rec_local_comment14;
        $data->rec_local_question15 = $request->rec_local_question15;
        $data->rec_local_comment15 = $request->rec_local_comment15;
        $data->rec_local_question16 = $request->rec_local_question16;
        $data->rec_local_comment16 = $request->rec_local_comment16;
        $data->rec_local_question17 = $request->rec_local_question17;
        $data->rec_local_comment17 = $request->rec_local_comment17;
        $data->rec_local_question18 = $request->rec_local_question18;
        $data->rec_local_comment18 = $request->rec_local_comment18;
        $data->rec_local_question19 = $request->rec_local_question19;
        $data->rec_local_comment19 = $request->rec_local_comment19;
        $data->rec_local_question20 = $request->rec_local_question20;
        $data->rec_local_comment20 = $request->rec_local_comment20;
        $data->rec_local_question21 = $request->rec_local_question21;
        $data->rec_local_comment21 = $request->rec_local_comment21;
        $data->created_by = Auth()->user()->user_id;
        $data->updated_by = Auth()->user()->user_id;

        $data->save();

        return back()->with('success', $this->message());
    }
}
