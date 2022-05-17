<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWGrowthQuestionnaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FinancialAssessmentChartsController extends Controller
{
    static public function financailAss($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWGrowthQuestionnaire::count();
                $area_area = VWGrowthQuestionnaire::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWGrowthQuestionnaire::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWGrowthQuestionnaire::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWGrowthQuestionnaire::select(DB::raw('growthque_question1, count(growth_id) AS y'))->groupBy('growthque_question1')->get();
                $growthque_comment1 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment1, count(growthque_comment1)'))->groupBy('growthque_comment1')->get();
                $question2 = VWGrowthQuestionnaire::select(DB::raw('growthque_question2, count(growth_id) AS y'))->groupBy('growthque_question2')->get();
                $growthque_comment2 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment2, count(growthque_comment2)'))->groupBy('growthque_comment2')->get();
                $question3 = VWGrowthQuestionnaire::select(DB::raw('growthque_question3, count(growth_id) AS y'))->groupBy('growthque_question3')->get();
                $growthque_comment3 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment3, count(growthque_comment3)'))->groupBy('growthque_comment3')->get();
                $question4 = VWGrowthQuestionnaire::select(DB::raw('growthque_question4, count(growth_id) AS y'))->groupBy('growthque_question4')->get();
                $growthque_comment4 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment4, count(growthque_comment4)'))->groupBy('growthque_comment4')->get();
                $question5 = VWGrowthQuestionnaire::select(DB::raw('growthque_question5, count(growth_id) AS y'))->groupBy('growthque_question5')->get();
                $growthque_comment5 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment5, count(growthque_comment5)'))->groupBy('growthque_comment5')->get();
                $question6 = VWGrowthQuestionnaire::select(DB::raw('growthque_question6, count(growth_id) AS y'))->groupBy('growthque_question6')->get();
                $growthque_comment6 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment6, count(growthque_comment6)'))->groupBy('growthque_comment6')->get();
                $question7 = VWGrowthQuestionnaire::select(DB::raw('growthque_question7, count(growth_id) AS y'))->groupBy('growthque_question7')->get();
                $growthque_comment7 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment7, count(growthque_comment7)'))->groupBy('growthque_comment7')->get();
                $question8 = VWGrowthQuestionnaire::select(DB::raw('growthque_question8, count(growth_id) AS y'))->groupBy('growthque_question8')->get();
                $growthque_comment8 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment8, count(growthque_comment8)'))->groupBy('growthque_comment8')->get();
                $question9 = VWGrowthQuestionnaire::select(DB::raw('growthque_question9, count(growth_id) AS y'))->groupBy('growthque_question9')->get();
                $growthque_comment9 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment9, count(growthque_comment9)'))->groupBy('growthque_comment9')->get();
                $question10 = VWGrowthQuestionnaire::select(DB::raw('growthque_question10, count(growth_id) AS y'))->groupBy('growthque_question10')->get();
                $growthque_comment10 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment10, count(growthque_comment10)'))->groupBy('growthque_comment10')->get();
                $question11 = VWGrowthQuestionnaire::select(DB::raw('growthque_question11, count(growth_id) AS y'))->groupBy('growthque_question11')->get();
                $growthque_comment11 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment11, count(growthque_comment11)'))->groupBy('growthque_comment11')->get();
                $question12 = VWGrowthQuestionnaire::select(DB::raw('growthque_question12, count(growth_id) AS y'))->groupBy('growthque_question12')->get();
                $growthque_comment12 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment12, count(growthque_comment12)'))->groupBy('growthque_comment12')->get();
                $question13 = VWGrowthQuestionnaire::select(DB::raw('growthque_question13, count(growth_id) AS y'))->groupBy('growthque_question13')->get();
                $growthque_comment13 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment13, count(growthque_comment13)'))->groupBy('growthque_comment13')->get();
                $question14 = VWGrowthQuestionnaire::select(DB::raw('growthque_question14, count(growth_id) AS y'))->groupBy('growthque_question14')->get();
                $growthque_comment14 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment14, count(growthque_comment14)'))->groupBy('growthque_comment14')->get();
                $question15 = VWGrowthQuestionnaire::select(DB::raw('growthque_question15, count(growth_id) AS y'))->groupBy('growthque_question15')->get();
                $growthque_comment15 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment15, count(growthque_comment15)'))->groupBy('growthque_comment15')->get();
                $question16 = VWGrowthQuestionnaire::select(DB::raw('growthque_question16, count(growth_id) AS y'))->groupBy('growthque_question16')->get();
                $growthque_comment16 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment16, count(growthque_comment16)'))->groupBy('growthque_comment16')->get();
                $question17 = VWGrowthQuestionnaire::select(DB::raw('growthque_question17, count(growth_id) AS y'))->groupBy('growthque_question17')->get();
                $growthque_comment17 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment17, count(growthque_comment17)'))->groupBy('growthque_comment17')->get();
                $growthque_comment18 = VWGrowthQuestionnaire::select(DB::raw('growthque_comment18, count(growthque_comment18)'))->groupBy('growthque_comment18')->get();
                
                break;
        
            case 'Area':
                $total = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->count();
                $area_area = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question1, count(growth_id) AS y'))->groupBy('growthque_question1')->get();
                $growthque_comment1 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment1, count(growthque_comment1)'))->groupBy('growthque_comment1')->get();
                $question2 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question2, count(growth_id) AS y'))->groupBy('growthque_question2')->get();
                $growthque_comment2 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment2, count(growthque_comment2)'))->groupBy('growthque_comment2')->get();
                $question3 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question3, count(growth_id) AS y'))->groupBy('growthque_question3')->get();
                $growthque_comment3 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment3, count(growthque_comment3)'))->groupBy('growthque_comment3')->get();
                $question4 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question4, count(growth_id) AS y'))->groupBy('growthque_question4')->get();
                $growthque_comment4 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment4, count(growthque_comment4)'))->groupBy('growthque_comment4')->get();
                $question5 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question5, count(growth_id) AS y'))->groupBy('growthque_question5')->get();
                $growthque_comment5 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment5, count(growthque_comment5)'))->groupBy('growthque_comment5')->get();
                $question6 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question6, count(growth_id) AS y'))->groupBy('growthque_question6')->get();
                $growthque_comment6 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment6, count(growthque_comment6)'))->groupBy('growthque_comment6')->get();
                $question7 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question7, count(growth_id) AS y'))->groupBy('growthque_question7')->get();
                $growthque_comment7 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment7, count(growthque_comment7)'))->groupBy('growthque_comment7')->get();
                $question8 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question8, count(growth_id) AS y'))->groupBy('growthque_question8')->get();
                $growthque_comment8 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment8, count(growthque_comment8)'))->groupBy('growthque_comment8')->get();
                $question9 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question9, count(growth_id) AS y'))->groupBy('growthque_question9')->get();
                $growthque_comment9 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment9, count(growthque_comment9)'))->groupBy('growthque_comment9')->get();
                $question10 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question10, count(growth_id) AS y'))->groupBy('growthque_question10')->get();
                $growthque_comment10 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment10, count(growthque_comment10)'))->groupBy('growthque_comment10')->get();
                $question11 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question11, count(growth_id) AS y'))->groupBy('growthque_question11')->get();
                $growthque_comment11 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment11, count(growthque_comment11)'))->groupBy('growthque_comment11')->get();
                $question12 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question12, count(growth_id) AS y'))->groupBy('growthque_question12')->get();
                $growthque_comment12 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment12, count(growthque_comment12)'))->groupBy('growthque_comment12')->get();
                $question13 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question13, count(growth_id) AS y'))->groupBy('growthque_question13')->get();
                $growthque_comment13 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment13, count(growthque_comment13)'))->groupBy('growthque_comment13')->get();
                $question14 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question14, count(growth_id) AS y'))->groupBy('growthque_question14')->get();
                $growthque_comment14 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment14, count(growthque_comment14)'))->groupBy('growthque_comment14')->get();
                $question15 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question15, count(growth_id) AS y'))->groupBy('growthque_question15')->get();
                $growthque_comment15 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment15, count(growthque_comment15)'))->groupBy('growthque_comment15')->get();
                $question16 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question16, count(growth_id) AS y'))->groupBy('growthque_question16')->get();
                $growthque_comment16 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment16, count(growthque_comment16)'))->groupBy('growthque_comment16')->get();
                $question17 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_question17, count(growth_id) AS y'))->groupBy('growthque_question17')->get();
                $growthque_comment17 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment17, count(growthque_comment17)'))->groupBy('growthque_comment17')->get();
                $growthque_comment18 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->select(DB::raw('growthque_comment18, count(growthque_comment18)'))->groupBy('growthque_comment18')->get();

                break;
        
            case 'District':
                $total = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question1, count(growth_id) AS y'))->groupBy('growthque_question1')->get();
                $growthque_comment1 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment1, count(growthque_comment1)'))->groupBy('growthque_comment1')->get();
                $question2 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question2, count(growth_id) AS y'))->groupBy('growthque_question2')->get();
                $growthque_comment2 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment2, count(growthque_comment2)'))->groupBy('growthque_comment2')->get();
                $question3 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question3, count(growth_id) AS y'))->groupBy('growthque_question3')->get();
                $growthque_comment3 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment3, count(growthque_comment3)'))->groupBy('growthque_comment3')->get();
                $question4 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question4, count(growth_id) AS y'))->groupBy('growthque_question4')->get();
                $growthque_comment4 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment4, count(growthque_comment4)'))->groupBy('growthque_comment4')->get();
                $question5 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question5, count(growth_id) AS y'))->groupBy('growthque_question5')->get();
                $growthque_comment5 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment5, count(growthque_comment5)'))->groupBy('growthque_comment5')->get();
                $question6 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question6, count(growth_id) AS y'))->groupBy('growthque_question6')->get();
                $growthque_comment6 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment6, count(growthque_comment6)'))->groupBy('growthque_comment6')->get();
                $question7 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question7, count(growth_id) AS y'))->groupBy('growthque_question7')->get();
                $growthque_comment7 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment7, count(growthque_comment7)'))->groupBy('growthque_comment7')->get();
                $question8 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question8, count(growth_id) AS y'))->groupBy('growthque_question8')->get();
                $growthque_comment8 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment8, count(growthque_comment8)'))->groupBy('growthque_comment8')->get();
                $question9 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question9, count(growth_id) AS y'))->groupBy('growthque_question9')->get();
                $growthque_comment9 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment9, count(growthque_comment9)'))->groupBy('growthque_comment9')->get();
                $question10 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question10, count(growth_id) AS y'))->groupBy('growthque_question10')->get();
                $growthque_comment10 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment10, count(growthque_comment10)'))->groupBy('growthque_comment10')->get();
                $question11 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question11, count(growth_id) AS y'))->groupBy('growthque_question11')->get();
                $growthque_comment11 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment11, count(growthque_comment11)'))->groupBy('growthque_comment11')->get();
                $question12 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question12, count(growth_id) AS y'))->groupBy('growthque_question12')->get();
                $growthque_comment12 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment12, count(growthque_comment12)'))->groupBy('growthque_comment12')->get();
                $question13 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question13, count(growth_id) AS y'))->groupBy('growthque_question13')->get();
                $growthque_comment13 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment13, count(growthque_comment13)'))->groupBy('growthque_comment13')->get();
                $question14 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question14, count(growth_id) AS y'))->groupBy('growthque_question14')->get();
                $growthque_comment14 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment14, count(growthque_comment14)'))->groupBy('growthque_comment14')->get();
                $question15 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question15, count(growth_id) AS y'))->groupBy('growthque_question15')->get();
                $growthque_comment15 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment15, count(growthque_comment15)'))->groupBy('growthque_comment15')->get();
                $question16 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question16, count(growth_id) AS y'))->groupBy('growthque_question16')->get();
                $growthque_comment16 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment16, count(growthque_comment16)'))->groupBy('growthque_comment16')->get();
                $question17 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_question17, count(growth_id) AS y'))->groupBy('growthque_question17')->get();
                $growthque_comment17 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment17, count(growthque_comment17)'))->groupBy('growthque_comment17')->get();
                $growthque_comment18 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('growthque_comment18, count(growthque_comment18)'))->groupBy('growthque_comment18')->get();

                break;
        
            case 'Local':
                $total = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->count();
                $area_area = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question1, count(growth_id) AS y'))->groupBy('growthque_question1')->get();
                $growthque_comment1 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment1, count(growthque_comment1)'))->groupBy('growthque_comment1')->get();
                $question2 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question2, count(growth_id) AS y'))->groupBy('growthque_question2')->get();
                $growthque_comment2 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment2, count(growthque_comment2)'))->groupBy('growthque_comment2')->get();
                $question3 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question3, count(growth_id) AS y'))->groupBy('growthque_question3')->get();
                $growthque_comment3 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment3, count(growthque_comment3)'))->groupBy('growthque_comment3')->get();
                $question4 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question4, count(growth_id) AS y'))->groupBy('growthque_question4')->get();
                $growthque_comment4 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment4, count(growthque_comment4)'))->groupBy('growthque_comment4')->get();
                $question5 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question5, count(growth_id) AS y'))->groupBy('growthque_question5')->get();
                $growthque_comment5 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment5, count(growthque_comment5)'))->groupBy('growthque_comment5')->get();
                $question6 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question6, count(growth_id) AS y'))->groupBy('growthque_question6')->get();
                $growthque_comment6 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment6, count(growthque_comment6)'))->groupBy('growthque_comment6')->get();
                $question7 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question7, count(growth_id) AS y'))->groupBy('growthque_question7')->get();
                $growthque_comment7 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment7, count(growthque_comment7)'))->groupBy('growthque_comment7')->get();
                $question8 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question8, count(growth_id) AS y'))->groupBy('growthque_question8')->get();
                $growthque_comment8 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment8, count(growthque_comment8)'))->groupBy('growthque_comment8')->get();
                $question9 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question9, count(growth_id) AS y'))->groupBy('growthque_question9')->get();
                $growthque_comment9 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment9, count(growthque_comment9)'))->groupBy('growthque_comment9')->get();
                $question10 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question10, count(growth_id) AS y'))->groupBy('growthque_question10')->get();
                $growthque_comment10 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment10, count(growthque_comment10)'))->groupBy('growthque_comment10')->get();
                $question11 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question11, count(growth_id) AS y'))->groupBy('growthque_question11')->get();
                $growthque_comment11 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment11, count(growthque_comment11)'))->groupBy('growthque_comment11')->get();
                $question12 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question12, count(growth_id) AS y'))->groupBy('growthque_question12')->get();
                $growthque_comment12 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment12, count(growthque_comment12)'))->groupBy('growthque_comment12')->get();
                $question13 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question13, count(growth_id) AS y'))->groupBy('growthque_question13')->get();
                $growthque_comment13 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment13, count(growthque_comment13)'))->groupBy('growthque_comment13')->get();
                $question14 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question14, count(growth_id) AS y'))->groupBy('growthque_question14')->get();
                $growthque_comment14 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment14, count(growthque_comment14)'))->groupBy('growthque_comment14')->get();
                $question15 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question15, count(growth_id) AS y'))->groupBy('growthque_question15')->get();
                $growthque_comment15 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment15, count(growthque_comment15)'))->groupBy('growthque_comment15')->get();
                $question16 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question16, count(growth_id) AS y'))->groupBy('growthque_question16')->get();
                $growthque_comment16 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment16, count(growthque_comment16)'))->groupBy('growthque_comment16')->get();
                $question17 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_question17, count(growth_id) AS y'))->groupBy('growthque_question17')->get();
                $growthque_comment17 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment17, count(growthque_comment17)'))->groupBy('growthque_comment17')->get();
                $growthque_comment18 = VWGrowthQuestionnaire::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('growthque_comment18, count(growthque_comment18)'))->groupBy('growthque_comment18')->get();

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
            'question1' => $question1,
            'growthque_comment1' => $growthque_comment1,
            'question2' => $question2,
            'growthque_comment2' => $growthque_comment2,
            'question3' => $question3,
            'growthque_comment3' => $growthque_comment3,
            'question4' => $question4,
            'growthque_comment4' => $growthque_comment4,
            'question5' => $question5,
            'growthque_comment5' => $growthque_comment5,
            'question6' => $question6,
            'growthque_comment6' => $growthque_comment6,
            'question7' => $question7,
            'growthque_comment7' => $growthque_comment7,
            'question8' => $question8,
            'growthque_comment8' => $growthque_comment8,
            'question9' => $question9,
            'growthque_comment9' => $growthque_comment9,
            'question10' => $question10,
            'growthque_comment10' => $growthque_comment10,
            'question11' => $question11,
            'growthque_comment11' => $growthque_comment11,
            'question12' => $question12,
            'growthque_comment12' => $growthque_comment12,
            'question13' => $question13,
            'growthque_comment13' => $growthque_comment13,
            'question14' => $question14,
            'growthque_comment14' => $growthque_comment14,
            'question15' => $question15,
            'growthque_comment15' => $growthque_comment15,
            'question16' => $question16,
            'growthque_comment16' => $growthque_comment16,
            'question17' => $question17,
            'growthque_comment17' => $growthque_comment17,
            'growthque_comment18' => $growthque_comment18,
        ];
    }
}
