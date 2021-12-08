<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWProcurementPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProcurementPolicyChartsController extends Controller
{
    static public function procurement($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWProcurementPolicy::count();
                $area_area = VWProcurementPolicy::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWProcurementPolicy::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWProcurementPolicy::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $fin_eva_b_comment1a = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment1a, count(fin_eva_b_comment1a)'))->groupBy('fin_eva_b_comment1a')->get();
                $question1b = VWProcurementPolicy::select(DB::raw('fin_eva_b_question1b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1b')->get();
                $fin_eva_b_comment1b = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment1b, count(fin_eva_b_comment1b)'))->groupBy('fin_eva_b_comment1b')->get();
                $question1c = VWProcurementPolicy::select(DB::raw('fin_eva_b_question1c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1c')->get();
                $fin_eva_b_comment1c = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment1c, count(fin_eva_b_comment1c)'))->groupBy('fin_eva_b_comment1c')->get();
                $question1d = VWProcurementPolicy::select(DB::raw('fin_eva_b_question1d, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1d')->get();
                $fin_eva_b_comment1d = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment1d, count(fin_eva_b_comment1d)'))->groupBy('fin_eva_b_comment1d')->get();
                $fin_eva_b_comment2a = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment2a, count(fin_eva_b_comment2a)'))->groupBy('fin_eva_b_comment2a')->get();
                $question2b = VWProcurementPolicy::select(DB::raw('fin_eva_b_question2b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question2b')->get();
                $fin_eva_b_comment2b = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment2b, count(fin_eva_b_comment2b)'))->groupBy('fin_eva_b_comment2b')->get();
                $question2c = VWProcurementPolicy::select(DB::raw('fin_eva_b_question2c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question2c')->get();
                $fin_eva_b_comment2c = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment2c, count(fin_eva_b_comment2c)'))->groupBy('fin_eva_b_comment2c')->get();
                $fin_eva_b_comment2d = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment2d, count(fin_eva_b_comment2d)'))->groupBy('fin_eva_b_comment2d')->get();
                $question3a = VWProcurementPolicy::select(DB::raw('fin_eva_b_question3a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question3a')->get();
                $fin_eva_b_comment3a = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment3a, count(fin_eva_b_comment3a)'))->groupBy('fin_eva_b_comment3a')->get();
                $fin_eva_b_comment3b = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment3b, count(fin_eva_b_comment3b)'))->groupBy('fin_eva_b_comment3b')->get();
                $question3c = VWProcurementPolicy::select(DB::raw('fin_eva_b_question3c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question3c')->get();
                $fin_eva_b_comment3c = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment3c, count(fin_eva_b_comment3c)'))->groupBy('fin_eva_b_comment3c')->get();
                $fin_eva_b_comment3d = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment3d, count(fin_eva_b_comment3d)'))->groupBy('fin_eva_b_comment3d')->get();
                $question4a = VWProcurementPolicy::select(DB::raw('fin_eva_b_question4a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question4a')->get();
                $fin_eva_b_comment4a = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment4a, count(fin_eva_b_comment4a)'))->groupBy('fin_eva_b_comment4a')->get();
                $fin_eva_b_comment4b = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment4b, count(fin_eva_b_comment4b)'))->groupBy('fin_eva_b_comment4b')->get();
                $question4c = VWProcurementPolicy::select(DB::raw('fin_eva_b_question4c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question4c')->get();
                $fin_eva_b_comment4c = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment4c, count(fin_eva_b_comment4c)'))->groupBy('fin_eva_b_comment4c')->get();
                $question5a = VWProcurementPolicy::select(DB::raw('fin_eva_b_question5a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5a')->get();
                $fin_eva_b_comment5a = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment5a, count(fin_eva_b_comment5a)'))->groupBy('fin_eva_b_comment5a')->get();
                $question5b = VWProcurementPolicy::select(DB::raw('fin_eva_b_question5b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5b')->get();
                $fin_eva_b_comment5b = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment5b, count(fin_eva_b_comment5b)'))->groupBy('fin_eva_b_comment5b')->get();
                $question5c = VWProcurementPolicy::select(DB::raw('fin_eva_b_question5c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5c')->get();
                $fin_eva_b_comment5c = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment5c, count(fin_eva_b_comment5c)'))->groupBy('fin_eva_b_comment5c')->get();
                $fin_eva_b_comment5d = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment5d, count(fin_eva_b_comment5d)'))->groupBy('fin_eva_b_comment5d')->get();
                $question6a = VWProcurementPolicy::select(DB::raw('fin_eva_b_question6a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6a')->get();
                $fin_eva_b_comment6a = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment6a, count(fin_eva_b_comment6a)'))->groupBy('fin_eva_b_comment6a')->get();
                $question6b = VWProcurementPolicy::select(DB::raw('fin_eva_b_question6b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6b')->get();
                $fin_eva_b_comment6b = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment6b, count(fin_eva_b_comment6b)'))->groupBy('fin_eva_b_comment6b')->get();
                $question6c = VWProcurementPolicy::select(DB::raw('fin_eva_b_question6c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6c')->get();
                $fin_eva_b_comment6c = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment6c, count(fin_eva_b_comment6c)'))->groupBy('fin_eva_b_comment6c')->get();
                $question7a = VWProcurementPolicy::select(DB::raw('fin_eva_b_question7a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question7a')->get();
                $fin_eva_b_comment7a = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment7a, count(fin_eva_b_comment7a)'))->groupBy('fin_eva_b_comment7a')->get();
                $fin_eva_b_comment7b = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment7b, count(fin_eva_b_comment7b)'))->groupBy('fin_eva_b_comment7b')->get();
                $fin_eva_b_comment7c = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment7c, count(fin_eva_b_comment7c)'))->groupBy('fin_eva_b_comment7c')->get();
                $fin_eva_b_comment7d = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment7d, count(fin_eva_b_comment7d)'))->groupBy('fin_eva_b_comment7d')->get();
                $question8a = VWProcurementPolicy::select(DB::raw('fin_eva_b_question8a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question8a')->get();
                $fin_eva_b_comment8a = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment8a, count(fin_eva_b_comment8a)'))->groupBy('fin_eva_b_comment8a')->get();
                $question8b = VWProcurementPolicy::select(DB::raw('fin_eva_b_question8b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question8b')->get();
                $fin_eva_b_comment8b = VWProcurementPolicy::select(DB::raw('fin_eva_b_comment8b, count(fin_eva_b_comment8b)'))->groupBy('fin_eva_b_comment8b')->get();

                break;
        
            case 'Area':
                $total = VWProcurementPolicy::where('area', $area)->count();
                $area_area = VWProcurementPolicy::where('area', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWProcurementPolicy::where('area', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWProcurementPolicy::where('area', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $fin_eva_b_comment1a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment1a, count(fin_eva_b_comment1a)'))->groupBy('fin_eva_b_comment1a')->get();
                $question1b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question1b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1b')->get();
                $fin_eva_b_comment1b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment1b, count(fin_eva_b_comment1b)'))->groupBy('fin_eva_b_comment1b')->get();
                $question1c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question1c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1c')->get();
                $fin_eva_b_comment1c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment1c, count(fin_eva_b_comment1c)'))->groupBy('fin_eva_b_comment1c')->get();
                $question1d = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question1d, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1d')->get();
                $fin_eva_b_comment1d = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment1d, count(fin_eva_b_comment1d)'))->groupBy('fin_eva_b_comment1d')->get();
                $fin_eva_b_comment2a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment2a, count(fin_eva_b_comment2a)'))->groupBy('fin_eva_b_comment2a')->get();
                $question2b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question2b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question2b')->get();
                $fin_eva_b_comment2b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment2b, count(fin_eva_b_comment2b)'))->groupBy('fin_eva_b_comment2b')->get();
                $question2c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question2c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question2c')->get();
                $fin_eva_b_comment2c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment2c, count(fin_eva_b_comment2c)'))->groupBy('fin_eva_b_comment2c')->get();
                $fin_eva_b_comment2d = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment2d, count(fin_eva_b_comment2d)'))->groupBy('fin_eva_b_comment2d')->get();
                $question3a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question3a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question3a')->get();
                $fin_eva_b_comment3a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment3a, count(fin_eva_b_comment3a)'))->groupBy('fin_eva_b_comment3a')->get();
                $fin_eva_b_comment3b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment3b, count(fin_eva_b_comment3b)'))->groupBy('fin_eva_b_comment3b')->get();
                $question3c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question3c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question3c')->get();
                $fin_eva_b_comment3c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment3c, count(fin_eva_b_comment3c)'))->groupBy('fin_eva_b_comment3c')->get();
                $fin_eva_b_comment3d = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment3d, count(fin_eva_b_comment3d)'))->groupBy('fin_eva_b_comment3d')->get();
                $question4a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question4a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question4a')->get();
                $fin_eva_b_comment4a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment4a, count(fin_eva_b_comment4a)'))->groupBy('fin_eva_b_comment4a')->get();
                $fin_eva_b_comment4b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment4b, count(fin_eva_b_comment4b)'))->groupBy('fin_eva_b_comment4b')->get();
                $question4c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question4c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question4c')->get();
                $fin_eva_b_comment4c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment4c, count(fin_eva_b_comment4c)'))->groupBy('fin_eva_b_comment4c')->get();
                $question5a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question5a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5a')->get();
                $fin_eva_b_comment5a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment5a, count(fin_eva_b_comment5a)'))->groupBy('fin_eva_b_comment5a')->get();
                $question5b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question5b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5b')->get();
                $fin_eva_b_comment5b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment5b, count(fin_eva_b_comment5b)'))->groupBy('fin_eva_b_comment5b')->get();
                $question5c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question5c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5c')->get();
                $fin_eva_b_comment5c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment5c, count(fin_eva_b_comment5c)'))->groupBy('fin_eva_b_comment5c')->get();
                $fin_eva_b_comment5d = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment5d, count(fin_eva_b_comment5d)'))->groupBy('fin_eva_b_comment5d')->get();
                $question6a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question6a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6a')->get();
                $fin_eva_b_comment6a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment6a, count(fin_eva_b_comment6a)'))->groupBy('fin_eva_b_comment6a')->get();
                $question6b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question6b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6b')->get();
                $fin_eva_b_comment6b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment6b, count(fin_eva_b_comment6b)'))->groupBy('fin_eva_b_comment6b')->get();
                $question6c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question6c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6c')->get();
                $fin_eva_b_comment6c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment6c, count(fin_eva_b_comment6c)'))->groupBy('fin_eva_b_comment6c')->get();
                $question7a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question7a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question7a')->get();
                $fin_eva_b_comment7a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment7a, count(fin_eva_b_comment7a)'))->groupBy('fin_eva_b_comment7a')->get();
                $fin_eva_b_comment7b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment7b, count(fin_eva_b_comment7b)'))->groupBy('fin_eva_b_comment7b')->get();
                $fin_eva_b_comment7c = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment7c, count(fin_eva_b_comment7c)'))->groupBy('fin_eva_b_comment7c')->get();
                $fin_eva_b_comment7d = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment7d, count(fin_eva_b_comment7d)'))->groupBy('fin_eva_b_comment7d')->get();
                $question8a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question8a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question8a')->get();
                $fin_eva_b_comment8a = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment8a, count(fin_eva_b_comment8a)'))->groupBy('fin_eva_b_comment8a')->get();
                $question8b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_question8b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question8b')->get();
                $fin_eva_b_comment8b = VWProcurementPolicy::where('area', $area)->select(DB::raw('fin_eva_b_comment8b, count(fin_eva_b_comment8b)'))->groupBy('fin_eva_b_comment8b')->get();

                break;
        
            case 'District':
                $total = VWProcurementPolicy::where('area', $area)->where('district', $dist)->count();
                $area_area = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $fin_eva_b_comment1a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment1a, count(fin_eva_b_comment1a)'))->groupBy('fin_eva_b_comment1a')->get();
                $question1b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question1b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1b')->get();
                $fin_eva_b_comment1b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment1b, count(fin_eva_b_comment1b)'))->groupBy('fin_eva_b_comment1b')->get();
                $question1c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question1c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1c')->get();
                $fin_eva_b_comment1c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment1c, count(fin_eva_b_comment1c)'))->groupBy('fin_eva_b_comment1c')->get();
                $question1d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question1d, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1d')->get();
                $fin_eva_b_comment1d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment1d, count(fin_eva_b_comment1d)'))->groupBy('fin_eva_b_comment1d')->get();
                $fin_eva_b_comment2a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment2a, count(fin_eva_b_comment2a)'))->groupBy('fin_eva_b_comment2a')->get();
                $question2b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question2b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question2b')->get();
                $fin_eva_b_comment2b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment2b, count(fin_eva_b_comment2b)'))->groupBy('fin_eva_b_comment2b')->get();
                $question2c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question2c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question2c')->get();
                $fin_eva_b_comment2c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment2c, count(fin_eva_b_comment2c)'))->groupBy('fin_eva_b_comment2c')->get();
                $fin_eva_b_comment2d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment2d, count(fin_eva_b_comment2d)'))->groupBy('fin_eva_b_comment2d')->get();
                $question3a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question3a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question3a')->get();
                $fin_eva_b_comment3a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment3a, count(fin_eva_b_comment3a)'))->groupBy('fin_eva_b_comment3a')->get();
                $fin_eva_b_comment3b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment3b, count(fin_eva_b_comment3b)'))->groupBy('fin_eva_b_comment3b')->get();
                $question3c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question3c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question3c')->get();
                $fin_eva_b_comment3c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment3c, count(fin_eva_b_comment3c)'))->groupBy('fin_eva_b_comment3c')->get();
                $fin_eva_b_comment3d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment3d, count(fin_eva_b_comment3d)'))->groupBy('fin_eva_b_comment3d')->get();
                $question4a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question4a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question4a')->get();
                $fin_eva_b_comment4a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment4a, count(fin_eva_b_comment4a)'))->groupBy('fin_eva_b_comment4a')->get();
                $fin_eva_b_comment4b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment4b, count(fin_eva_b_comment4b)'))->groupBy('fin_eva_b_comment4b')->get();
                $question4c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question4c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question4c')->get();
                $fin_eva_b_comment4c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment4c, count(fin_eva_b_comment4c)'))->groupBy('fin_eva_b_comment4c')->get();
                $question5a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question5a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5a')->get();
                $fin_eva_b_comment5a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment5a, count(fin_eva_b_comment5a)'))->groupBy('fin_eva_b_comment5a')->get();
                $question5b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question5b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5b')->get();
                $fin_eva_b_comment5b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment5b, count(fin_eva_b_comment5b)'))->groupBy('fin_eva_b_comment5b')->get();
                $question5c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question5c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5c')->get();
                $fin_eva_b_comment5c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment5c, count(fin_eva_b_comment5c)'))->groupBy('fin_eva_b_comment5c')->get();
                $fin_eva_b_comment5d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment5d, count(fin_eva_b_comment5d)'))->groupBy('fin_eva_b_comment5d')->get();
                $question6a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question6a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6a')->get();
                $fin_eva_b_comment6a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment6a, count(fin_eva_b_comment6a)'))->groupBy('fin_eva_b_comment6a')->get();
                $question6b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question6b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6b')->get();
                $fin_eva_b_comment6b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment6b, count(fin_eva_b_comment6b)'))->groupBy('fin_eva_b_comment6b')->get();
                $question6c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question6c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6c')->get();
                $fin_eva_b_comment6c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment6c, count(fin_eva_b_comment6c)'))->groupBy('fin_eva_b_comment6c')->get();
                $question7a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question7a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question7a')->get();
                $fin_eva_b_comment7a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment7a, count(fin_eva_b_comment7a)'))->groupBy('fin_eva_b_comment7a')->get();
                $fin_eva_b_comment7b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment7b, count(fin_eva_b_comment7b)'))->groupBy('fin_eva_b_comment7b')->get();
                $fin_eva_b_comment7c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment7c, count(fin_eva_b_comment7c)'))->groupBy('fin_eva_b_comment7c')->get();
                $fin_eva_b_comment7d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment7d, count(fin_eva_b_comment7d)'))->groupBy('fin_eva_b_comment7d')->get();
                $question8a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question8a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question8a')->get();
                $fin_eva_b_comment8a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment8a, count(fin_eva_b_comment8a)'))->groupBy('fin_eva_b_comment8a')->get();
                $question8b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_question8b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question8b')->get();
                $fin_eva_b_comment8b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->select(DB::raw('fin_eva_b_comment8b, count(fin_eva_b_comment8b)'))->groupBy('fin_eva_b_comment8b')->get();

                break;
        
            case 'Local':
                $total = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->count();
                $area_area = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $fin_eva_b_comment1a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment1a, count(fin_eva_b_comment1a)'))->groupBy('fin_eva_b_comment1a')->get();
                $question1b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question1b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1b')->get();
                $fin_eva_b_comment1b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment1b, count(fin_eva_b_comment1b)'))->groupBy('fin_eva_b_comment1b')->get();
                $question1c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question1c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1c')->get();
                $fin_eva_b_comment1c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment1c, count(fin_eva_b_comment1c)'))->groupBy('fin_eva_b_comment1c')->get();
                $question1d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question1d, count(procurement_id) AS y'))->groupBy('fin_eva_b_question1d')->get();
                $fin_eva_b_comment1d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment1d, count(fin_eva_b_comment1d)'))->groupBy('fin_eva_b_comment1d')->get();
                $fin_eva_b_comment2a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment2a, count(fin_eva_b_comment2a)'))->groupBy('fin_eva_b_comment2a')->get();
                $question2b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question2b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question2b')->get();
                $fin_eva_b_comment2b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment2b, count(fin_eva_b_comment2b)'))->groupBy('fin_eva_b_comment2b')->get();
                $question2c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question2c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question2c')->get();
                $fin_eva_b_comment2c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment2c, count(fin_eva_b_comment2c)'))->groupBy('fin_eva_b_comment2c')->get();
                $fin_eva_b_comment2d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment2d, count(fin_eva_b_comment2d)'))->groupBy('fin_eva_b_comment2d')->get();
                $question3a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question3a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question3a')->get();
                $fin_eva_b_comment3a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment3a, count(fin_eva_b_comment3a)'))->groupBy('fin_eva_b_comment3a')->get();
                $fin_eva_b_comment3b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment3b, count(fin_eva_b_comment3b)'))->groupBy('fin_eva_b_comment3b')->get();
                $question3c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question3c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question3c')->get();
                $fin_eva_b_comment3c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment3c, count(fin_eva_b_comment3c)'))->groupBy('fin_eva_b_comment3c')->get();
                $fin_eva_b_comment3d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment3d, count(fin_eva_b_comment3d)'))->groupBy('fin_eva_b_comment3d')->get();
                $question4a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question4a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question4a')->get();
                $fin_eva_b_comment4a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment4a, count(fin_eva_b_comment4a)'))->groupBy('fin_eva_b_comment4a')->get();
                $fin_eva_b_comment4b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment4b, count(fin_eva_b_comment4b)'))->groupBy('fin_eva_b_comment4b')->get();
                $question4c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question4c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question4c')->get();
                $fin_eva_b_comment4c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment4c, count(fin_eva_b_comment4c)'))->groupBy('fin_eva_b_comment4c')->get();
                $question5a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question5a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5a')->get();
                $fin_eva_b_comment5a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment5a, count(fin_eva_b_comment5a)'))->groupBy('fin_eva_b_comment5a')->get();
                $question5b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question5b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5b')->get();
                $fin_eva_b_comment5b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment5b, count(fin_eva_b_comment5b)'))->groupBy('fin_eva_b_comment5b')->get();
                $question5c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question5c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question5c')->get();
                $fin_eva_b_comment5c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment5c, count(fin_eva_b_comment5c)'))->groupBy('fin_eva_b_comment5c')->get();
                $fin_eva_b_comment5d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment5d, count(fin_eva_b_comment5d)'))->groupBy('fin_eva_b_comment5d')->get();
                $question6a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question6a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6a')->get();
                $fin_eva_b_comment6a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment6a, count(fin_eva_b_comment6a)'))->groupBy('fin_eva_b_comment6a')->get();
                $question6b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question6b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6b')->get();
                $fin_eva_b_comment6b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment6b, count(fin_eva_b_comment6b)'))->groupBy('fin_eva_b_comment6b')->get();
                $question6c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question6c, count(procurement_id) AS y'))->groupBy('fin_eva_b_question6c')->get();
                $fin_eva_b_comment6c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment6c, count(fin_eva_b_comment6c)'))->groupBy('fin_eva_b_comment6c')->get();
                $question7a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question7a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question7a')->get();
                $fin_eva_b_comment7a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment7a, count(fin_eva_b_comment7a)'))->groupBy('fin_eva_b_comment7a')->get();
                $fin_eva_b_comment7b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment7b, count(fin_eva_b_comment7b)'))->groupBy('fin_eva_b_comment7b')->get();
                $fin_eva_b_comment7c = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment7c, count(fin_eva_b_comment7c)'))->groupBy('fin_eva_b_comment7c')->get();
                $fin_eva_b_comment7d = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment7d, count(fin_eva_b_comment7d)'))->groupBy('fin_eva_b_comment7d')->get();
                $question8a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question8a, count(procurement_id) AS y'))->groupBy('fin_eva_b_question8a')->get();
                $fin_eva_b_comment8a = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment8a, count(fin_eva_b_comment8a)'))->groupBy('fin_eva_b_comment8a')->get();
                $question8b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_question8b, count(procurement_id) AS y'))->groupBy('fin_eva_b_question8b')->get();
                $fin_eva_b_comment8b = VWProcurementPolicy::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('fin_eva_b_comment8b, count(fin_eva_b_comment8b)'))->groupBy('fin_eva_b_comment8b')->get();
                
                break;
            
            default:
                return Session::flash('error', 'Wrong Input');
                break;
        }

        return [
            'total' => $total,
            'area' => $area_area,
            'district' => $district_dist,
            'local' => $local_loc,
            'fin_eva_b_comment1a' => $fin_eva_b_comment1a,
            'question1b' => $question1b,
            'fin_eva_b_comment1b' => $fin_eva_b_comment1b,
            'question1c' => $question1c,
            'fin_eva_b_comment1c' => $fin_eva_b_comment1c,
            'question1d' => $question1d,
            'fin_eva_b_comment1d' => $fin_eva_b_comment1d,
            'fin_eva_b_comment2a' => $fin_eva_b_comment2a,
            'question2b' => $question2b,
            'fin_eva_b_comment2b' => $fin_eva_b_comment2b,
            'question2c' => $question2c,
            'fin_eva_b_comment2c' => $fin_eva_b_comment2c,
            'fin_eva_b_comment2d' => $fin_eva_b_comment2d,
            'question3a' => $question3a,
            'fin_eva_b_comment3a' => $fin_eva_b_comment3a,
            'fin_eva_b_comment3b' => $fin_eva_b_comment3b,
            'question3c' => $question3c,
            'fin_eva_b_comment3c' => $fin_eva_b_comment3c,
            'fin_eva_b_comment3d' => $fin_eva_b_comment3d,
            'question4a' => $question4a,
            'fin_eva_b_comment4a' => $fin_eva_b_comment4a,
            'fin_eva_b_comment4b' => $fin_eva_b_comment4b,
            'question4c' => $question4c,
            'fin_eva_b_comment4c' => $fin_eva_b_comment4c,
            'question5a' => $question5a,
            'fin_eva_b_comment5a' => $fin_eva_b_comment5a,
            'question5b' => $question5b,
            'fin_eva_b_comment5b' => $fin_eva_b_comment5b,
            'question5c' => $question5c,
            'fin_eva_b_comment5c' => $fin_eva_b_comment5c,
            'fin_eva_b_comment5d' => $fin_eva_b_comment5d,
            'question6a' => $question6a,
            'fin_eva_b_comment6a' => $fin_eva_b_comment6a,
            'question6b' => $question6b,
            'fin_eva_b_comment6b' => $fin_eva_b_comment6b,
            'question6c' => $question6c,
            'fin_eva_b_comment6c' => $fin_eva_b_comment6c,
            'question7a' => $question7a,
            'fin_eva_b_comment7a' => $fin_eva_b_comment7a,
            'fin_eva_b_comment7b' => $fin_eva_b_comment7b,
            'fin_eva_b_comment7c' => $fin_eva_b_comment7c,
            'fin_eva_b_comment7d' => $fin_eva_b_comment7d,
            'question8a' => $question8a,
            'fin_eva_b_comment8a' => $fin_eva_b_comment8a,
            'question8b' => $question8b,
            'fin_eva_b_comment8b' => $fin_eva_b_comment8b,
        ];
    }
}
