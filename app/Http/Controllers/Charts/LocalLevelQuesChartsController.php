<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWLocalLevelQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LocalLevelQuesChartsController extends Controller
{
    static public function localQuestion($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWLocalLevelQuestion::count();
                $area_area = VWLocalLevelQuestion::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWLocalLevelQuestion::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWLocalLevelQuestion::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWLocalLevelQuestion::select(DB::raw('llm_question1, count(local_level_id) AS y'))->groupBy('llm_question1')->get();
                $llm_comment1 = VWLocalLevelQuestion::select(DB::raw('llm_comment1, count(llm_comment1)'))->groupBy('llm_comment1')->get();
                $question2 = VWLocalLevelQuestion::select(DB::raw('llm_question2, count(local_level_id) AS y'))->groupBy('llm_question2')->get();
                $llm_comment2 = VWLocalLevelQuestion::select(DB::raw('llm_comment2, count(llm_comment2)'))->groupBy('llm_comment2')->get();
                $question3 = VWLocalLevelQuestion::select(DB::raw('llm_question3, count(local_level_id) AS y'))->groupBy('llm_question3')->get();
                $llm_comment3 = VWLocalLevelQuestion::select(DB::raw('llm_comment3, count(llm_comment3)'))->groupBy('llm_comment3')->get();
                $question4 = VWLocalLevelQuestion::select(DB::raw('llm_question4, count(local_level_id) AS y'))->groupBy('llm_question4')->get();
                $llm_comment4 = VWLocalLevelQuestion::select(DB::raw('llm_comment4, count(llm_comment4)'))->groupBy('llm_comment4')->get();
                $question5 = VWLocalLevelQuestion::select(DB::raw('llm_question5, count(local_level_id) AS y'))->groupBy('llm_question5')->get();
                $llm_comment5 = VWLocalLevelQuestion::select(DB::raw('llm_comment5, count(llm_comment5)'))->groupBy('llm_comment5')->get();
                $question6 = VWLocalLevelQuestion::select(DB::raw('llm_question6, count(local_level_id) AS y'))->groupBy('llm_question6')->get();
                $llm_comment6 = VWLocalLevelQuestion::select(DB::raw('llm_comment6, count(llm_comment6)'))->groupBy('llm_comment6')->get();
                $question7 = VWLocalLevelQuestion::select(DB::raw('llm_question7, count(local_level_id) AS y'))->groupBy('llm_question7')->get();
                $llm_comment7 = VWLocalLevelQuestion::select(DB::raw('llm_comment7, count(llm_comment7)'))->groupBy('llm_comment7')->get();
                $question8 = VWLocalLevelQuestion::select(DB::raw('llm_question8, count(local_level_id) AS y'))->groupBy('llm_question8')->get();
                $llm_comment8 = VWLocalLevelQuestion::select(DB::raw('llm_comment8, count(llm_comment8)'))->groupBy('llm_comment8')->get();
                $question9 = VWLocalLevelQuestion::select(DB::raw('llm_question9, count(local_level_id) AS y'))->groupBy('llm_question9')->get();
                $llm_comment9 = VWLocalLevelQuestion::select(DB::raw('llm_comment9, count(llm_comment9)'))->groupBy('llm_comment9')->get();
                $question10 = VWLocalLevelQuestion::select(DB::raw('llm_question10, count(local_level_id) AS y'))->groupBy('llm_question10')->get();
                $llm_comment10 = VWLocalLevelQuestion::select(DB::raw('llm_comment10, count(llm_comment10)'))->groupBy('llm_comment10')->get();
                $question11 = VWLocalLevelQuestion::select(DB::raw('llm_question11, count(local_level_id) AS y'))->groupBy('llm_question11')->get();
                $llm_comment11 = VWLocalLevelQuestion::select(DB::raw('llm_comment11, count(llm_comment11)'))->groupBy('llm_comment11')->get();
                $question12 = VWLocalLevelQuestion::select(DB::raw('llm_question12, count(local_level_id) AS y'))->groupBy('llm_question12')->get();
                $llm_comment12 = VWLocalLevelQuestion::select(DB::raw('llm_comment12, count(llm_comment12)'))->groupBy('llm_comment12')->get();
                $question13 = VWLocalLevelQuestion::select(DB::raw('llm_question13, count(local_level_id) AS y'))->groupBy('llm_question13')->get();
                $llm_comment13 = VWLocalLevelQuestion::select(DB::raw('llm_comment13, count(llm_comment13)'))->groupBy('llm_comment13')->get();
                $question14 = VWLocalLevelQuestion::select(DB::raw('llm_question14, count(local_level_id) AS y'))->groupBy('llm_question14')->get();
                $llm_comment14 = VWLocalLevelQuestion::select(DB::raw('llm_comment14, count(llm_comment14)'))->groupBy('llm_comment14')->get();
                $question15 = VWLocalLevelQuestion::select(DB::raw('llm_question15, count(local_level_id) AS y'))->groupBy('llm_question15')->get();
                $llm_comment15 = VWLocalLevelQuestion::select(DB::raw('llm_comment15, count(llm_comment15)'))->groupBy('llm_comment15')->get();
                $question16 = VWLocalLevelQuestion::select(DB::raw('llm_question16, count(local_level_id) AS y'))->groupBy('llm_question16')->get();
                $llm_comment16 = VWLocalLevelQuestion::select(DB::raw('llm_comment16, count(llm_comment16)'))->groupBy('llm_comment16')->get();
                $question17 = VWLocalLevelQuestion::select(DB::raw('llm_question17, count(local_level_id) AS y'))->groupBy('llm_question17')->get();
                $llm_comment17 = VWLocalLevelQuestion::select(DB::raw('llm_comment17, count(llm_comment17)'))->groupBy('llm_comment17')->get();
                $question18 = VWLocalLevelQuestion::select(DB::raw('llm_question18, count(local_level_id) AS y'))->groupBy('llm_question18')->get();
                $llm_comment18 = VWLocalLevelQuestion::select(DB::raw('llm_comment18, count(llm_comment18)'))->groupBy('llm_comment18')->get();
                $question19 = VWLocalLevelQuestion::select(DB::raw('llm_question19, count(local_level_id) AS y'))->groupBy('llm_question19')->get();
                $llm_comment19 = VWLocalLevelQuestion::select(DB::raw('llm_comment19, count(llm_comment19)'))->groupBy('llm_comment19')->get();
                $question20 = VWLocalLevelQuestion::select(DB::raw('llm_question20, count(local_level_id) AS y'))->groupBy('llm_question20')->get();
                $llm_comment20 = VWLocalLevelQuestion::select(DB::raw('llm_comment20, count(llm_comment20)'))->groupBy('llm_comment20')->get();
                $question21 = VWLocalLevelQuestion::select(DB::raw('llm_question21, count(local_level_id) AS y'))->groupBy('llm_question21')->get();
                $llm_comment21 = VWLocalLevelQuestion::select(DB::raw('llm_comment21, count(llm_comment21)'))->groupBy('llm_comment21')->get();
                $question22 = VWLocalLevelQuestion::select(DB::raw('llm_question22, count(local_level_id) AS y'))->groupBy('llm_question22')->get();
                $llm_comment22 = VWLocalLevelQuestion::select(DB::raw('llm_comment22, count(llm_comment22)'))->groupBy('llm_comment22')->get();
                
                break;
        
            case 'Area':
                $total = VWLocalLevelQuestion::where('area', $area)->count();
                $area_area = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question1, count(local_level_id) AS y'))->groupBy('llm_question1')->get();
                $llm_comment1 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment1, count(llm_comment1)'))->groupBy('llm_comment1')->get();
                $question2 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question2, count(local_level_id) AS y'))->groupBy('llm_question2')->get();
                $llm_comment2 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment2, count(llm_comment2)'))->groupBy('llm_comment2')->get();
                $question3 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question3, count(local_level_id) AS y'))->groupBy('llm_question3')->get();
                $llm_comment3 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment3, count(llm_comment3)'))->groupBy('llm_comment3')->get();
                $question4 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question4, count(local_level_id) AS y'))->groupBy('llm_question4')->get();
                $llm_comment4 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment4, count(llm_comment4)'))->groupBy('llm_comment4')->get();
                $question5 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question5, count(local_level_id) AS y'))->groupBy('llm_question5')->get();
                $llm_comment5 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment5, count(llm_comment5)'))->groupBy('llm_comment5')->get();
                $question6 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question6, count(local_level_id) AS y'))->groupBy('llm_question6')->get();
                $llm_comment6 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment6, count(llm_comment6)'))->groupBy('llm_comment6')->get();
                $question7 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question7, count(local_level_id) AS y'))->groupBy('llm_question7')->get();
                $llm_comment7 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment7, count(llm_comment7)'))->groupBy('llm_comment7')->get();
                $question8 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question8, count(local_level_id) AS y'))->groupBy('llm_question8')->get();
                $llm_comment8 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment8, count(llm_comment8)'))->groupBy('llm_comment8')->get();
                $question9 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question9, count(local_level_id) AS y'))->groupBy('llm_question9')->get();
                $llm_comment9 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment9, count(llm_comment9)'))->groupBy('llm_comment9')->get();
                $question10 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question10, count(local_level_id) AS y'))->groupBy('llm_question10')->get();
                $llm_comment10 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment10, count(llm_comment10)'))->groupBy('llm_comment10')->get();
                $question11 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question11, count(local_level_id) AS y'))->groupBy('llm_question11')->get();
                $llm_comment11 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment11, count(llm_comment11)'))->groupBy('llm_comment11')->get();
                $question12 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question12, count(local_level_id) AS y'))->groupBy('llm_question12')->get();
                $llm_comment12 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment12, count(llm_comment12)'))->groupBy('llm_comment12')->get();
                $question13 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question13, count(local_level_id) AS y'))->groupBy('llm_question13')->get();
                $llm_comment13 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment13, count(llm_comment13)'))->groupBy('llm_comment13')->get();
                $question14 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question14, count(local_level_id) AS y'))->groupBy('llm_question14')->get();
                $llm_comment14 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment14, count(llm_comment14)'))->groupBy('llm_comment14')->get();
                $question15 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question15, count(local_level_id) AS y'))->groupBy('llm_question15')->get();
                $llm_comment15 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment15, count(llm_comment15)'))->groupBy('llm_comment15')->get();
                $question16 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question16, count(local_level_id) AS y'))->groupBy('llm_question16')->get();
                $llm_comment16 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment16, count(llm_comment16)'))->groupBy('llm_comment16')->get();
                $question17 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question17, count(local_level_id) AS y'))->groupBy('llm_question17')->get();
                $llm_comment17 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment17, count(llm_comment17)'))->groupBy('llm_comment17')->get();
                $question18 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question18, count(local_level_id) AS y'))->groupBy('llm_question18')->get();
                $llm_comment18 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment18, count(llm_comment18)'))->groupBy('llm_comment18')->get();
                $question19 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question19, count(local_level_id) AS y'))->groupBy('llm_question19')->get();
                $llm_comment19 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment19, count(llm_comment19)'))->groupBy('llm_comment19')->get();
                $question20 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question20, count(local_level_id) AS y'))->groupBy('llm_question20')->get();
                $llm_comment20 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment20, count(llm_comment20)'))->groupBy('llm_comment20')->get();
                $question21 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question21, count(local_level_id) AS y'))->groupBy('llm_question21')->get();
                $llm_comment21 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment21, count(llm_comment21)'))->groupBy('llm_comment21')->get();
                $question22 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_question22, count(local_level_id) AS y'))->groupBy('llm_question22')->get();
                $llm_comment22 = VWLocalLevelQuestion::where('area', $area)->select(DB::raw('llm_comment22, count(llm_comment22)'))->groupBy('llm_comment22')->get();
                
                break;
        
            case 'District':
                $total = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->count();
                $area_area = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question1, count(local_level_id) AS y'))->groupBy('llm_question1')->get();
                $llm_comment1 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment1, count(llm_comment1)'))->groupBy('llm_comment1')->get();
                $question2 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question2, count(local_level_id) AS y'))->groupBy('llm_question2')->get();
                $llm_comment2 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment2, count(llm_comment2)'))->groupBy('llm_comment2')->get();
                $question3 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question3, count(local_level_id) AS y'))->groupBy('llm_question3')->get();
                $llm_comment3 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment3, count(llm_comment3)'))->groupBy('llm_comment3')->get();
                $question4 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question4, count(local_level_id) AS y'))->groupBy('llm_question4')->get();
                $llm_comment4 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment4, count(llm_comment4)'))->groupBy('llm_comment4')->get();
                $question5 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question5, count(local_level_id) AS y'))->groupBy('llm_question5')->get();
                $llm_comment5 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment5, count(llm_comment5)'))->groupBy('llm_comment5')->get();
                $question6 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question6, count(local_level_id) AS y'))->groupBy('llm_question6')->get();
                $llm_comment6 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment6, count(llm_comment6)'))->groupBy('llm_comment6')->get();
                $question7 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question7, count(local_level_id) AS y'))->groupBy('llm_question7')->get();
                $llm_comment7 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment7, count(llm_comment7)'))->groupBy('llm_comment7')->get();
                $question8 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question8, count(local_level_id) AS y'))->groupBy('llm_question8')->get();
                $llm_comment8 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment8, count(llm_comment8)'))->groupBy('llm_comment8')->get();
                $question9 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question9, count(local_level_id) AS y'))->groupBy('llm_question9')->get();
                $llm_comment9 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment9, count(llm_comment9)'))->groupBy('llm_comment9')->get();
                $question10 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question10, count(local_level_id) AS y'))->groupBy('llm_question10')->get();
                $llm_comment10 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment10, count(llm_comment10)'))->groupBy('llm_comment10')->get();
                $question11 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question11, count(local_level_id) AS y'))->groupBy('llm_question11')->get();
                $llm_comment11 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment11, count(llm_comment11)'))->groupBy('llm_comment11')->get();
                $question12 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question12, count(local_level_id) AS y'))->groupBy('llm_question12')->get();
                $llm_comment12 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment12, count(llm_comment12)'))->groupBy('llm_comment12')->get();
                $question13 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question13, count(local_level_id) AS y'))->groupBy('llm_question13')->get();
                $llm_comment13 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment13, count(llm_comment13)'))->groupBy('llm_comment13')->get();
                $question14 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question14, count(local_level_id) AS y'))->groupBy('llm_question14')->get();
                $llm_comment14 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment14, count(llm_comment14)'))->groupBy('llm_comment14')->get();
                $question15 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question15, count(local_level_id) AS y'))->groupBy('llm_question15')->get();
                $llm_comment15 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment15, count(llm_comment15)'))->groupBy('llm_comment15')->get();
                $question16 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question16, count(local_level_id) AS y'))->groupBy('llm_question16')->get();
                $llm_comment16 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment16, count(llm_comment16)'))->groupBy('llm_comment16')->get();
                $question17 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question17, count(local_level_id) AS y'))->groupBy('llm_question17')->get();
                $llm_comment17 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment17, count(llm_comment17)'))->groupBy('llm_comment17')->get();
                $question18 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question18, count(local_level_id) AS y'))->groupBy('llm_question18')->get();
                $llm_comment18 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment18, count(llm_comment18)'))->groupBy('llm_comment18')->get();
                $question19 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question19, count(local_level_id) AS y'))->groupBy('llm_question19')->get();
                $llm_comment19 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment19, count(llm_comment19)'))->groupBy('llm_comment19')->get();
                $question20 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question20, count(local_level_id) AS y'))->groupBy('llm_question20')->get();
                $llm_comment20 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment20, count(llm_comment20)'))->groupBy('llm_comment20')->get();
                $question21 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question21, count(local_level_id) AS y'))->groupBy('llm_question21')->get();
                $llm_comment21 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment21, count(llm_comment21)'))->groupBy('llm_comment21')->get();
                $question22 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_question22, count(local_level_id) AS y'))->groupBy('llm_question22')->get();
                $llm_comment22 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->select(DB::raw('llm_comment22, count(llm_comment22)'))->groupBy('llm_comment22')->get();
               
                break;
        
            case 'Local':
                $total = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->count();
                $area_area = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question1, count(local_level_id) AS y'))->groupBy('llm_question1')->get();
                $llm_comment1 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment1, count(llm_comment1)'))->groupBy('llm_comment1')->get();
                $question2 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question2, count(local_level_id) AS y'))->groupBy('llm_question2')->get();
                $llm_comment2 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment2, count(llm_comment2)'))->groupBy('llm_comment2')->get();
                $question3 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question3, count(local_level_id) AS y'))->groupBy('llm_question3')->get();
                $llm_comment3 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment3, count(llm_comment3)'))->groupBy('llm_comment3')->get();
                $question4 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question4, count(local_level_id) AS y'))->groupBy('llm_question4')->get();
                $llm_comment4 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment4, count(llm_comment4)'))->groupBy('llm_comment4')->get();
                $question5 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question5, count(local_level_id) AS y'))->groupBy('llm_question5')->get();
                $llm_comment5 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment5, count(llm_comment5)'))->groupBy('llm_comment5')->get();
                $question6 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question6, count(local_level_id) AS y'))->groupBy('llm_question6')->get();
                $llm_comment6 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment6, count(llm_comment6)'))->groupBy('llm_comment6')->get();
                $question7 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question7, count(local_level_id) AS y'))->groupBy('llm_question7')->get();
                $llm_comment7 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment7, count(llm_comment7)'))->groupBy('llm_comment7')->get();
                $question8 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question8, count(local_level_id) AS y'))->groupBy('llm_question8')->get();
                $llm_comment8 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment8, count(llm_comment8)'))->groupBy('llm_comment8')->get();
                $question9 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question9, count(local_level_id) AS y'))->groupBy('llm_question9')->get();
                $llm_comment9 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment9, count(llm_comment9)'))->groupBy('llm_comment9')->get();
                $question10 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question10, count(local_level_id) AS y'))->groupBy('llm_question10')->get();
                $llm_comment10 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment10, count(llm_comment10)'))->groupBy('llm_comment10')->get();
                $question11 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question11, count(local_level_id) AS y'))->groupBy('llm_question11')->get();
                $llm_comment11 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment11, count(llm_comment11)'))->groupBy('llm_comment11')->get();
                $question12 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question12, count(local_level_id) AS y'))->groupBy('llm_question12')->get();
                $llm_comment12 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment12, count(llm_comment12)'))->groupBy('llm_comment12')->get();
                $question13 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question13, count(local_level_id) AS y'))->groupBy('llm_question13')->get();
                $llm_comment13 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment13, count(llm_comment13)'))->groupBy('llm_comment13')->get();
                $question14 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question14, count(local_level_id) AS y'))->groupBy('llm_question14')->get();
                $llm_comment14 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment14, count(llm_comment14)'))->groupBy('llm_comment14')->get();
                $question15 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question15, count(local_level_id) AS y'))->groupBy('llm_question15')->get();
                $llm_comment15 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment15, count(llm_comment15)'))->groupBy('llm_comment15')->get();
                $question16 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question16, count(local_level_id) AS y'))->groupBy('llm_question16')->get();
                $llm_comment16 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment16, count(llm_comment16)'))->groupBy('llm_comment16')->get();
                $question17 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question17, count(local_level_id) AS y'))->groupBy('llm_question17')->get();
                $llm_comment17 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment17, count(llm_comment17)'))->groupBy('llm_comment17')->get();
                $question18 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question18, count(local_level_id) AS y'))->groupBy('llm_question18')->get();
                $llm_comment18 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment18, count(llm_comment18)'))->groupBy('llm_comment18')->get();
                $question19 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question19, count(local_level_id) AS y'))->groupBy('llm_question19')->get();
                $llm_comment19 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment19, count(llm_comment19)'))->groupBy('llm_comment19')->get();
                $question20 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question20, count(local_level_id) AS y'))->groupBy('llm_question20')->get();
                $llm_comment20 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment20, count(llm_comment20)'))->groupBy('llm_comment20')->get();
                $question21 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question21, count(local_level_id) AS y'))->groupBy('llm_question21')->get();
                $llm_comment21 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment21, count(llm_comment21)'))->groupBy('llm_comment21')->get();
                $question22 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_question22, count(local_level_id) AS y'))->groupBy('llm_question22')->get();
                $llm_comment22 = VWLocalLevelQuestion::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('llm_comment22, count(llm_comment22)'))->groupBy('llm_comment22')->get();
              
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
            'llm_comment1' => $llm_comment1,
            'question2' => $question2,
            'llm_comment2' => $llm_comment2,
            'question3' => $question3,
            'llm_comment3' => $llm_comment3,
            'question4' => $question4,
            'llm_comment4' => $llm_comment4,
            'question5' => $question5,
            'llm_comment5' => $llm_comment5,
            'question6' => $question6,
            'llm_comment6' => $llm_comment6,
            'question7' => $question7,
            'llm_comment7' => $llm_comment7,
            'question8' => $question8,
            'llm_comment8' => $llm_comment8,
            'question9' => $question9,
            'llm_comment9' => $llm_comment9,
            'question10' => $question10,
            'llm_comment10' => $llm_comment10,
            'question11' => $question11,
            'llm_comment11' => $llm_comment11,
            'question12' => $question12,
            'llm_comment12' => $llm_comment12,
            'question13' => $question13,
            'llm_comment13' => $llm_comment13,
            'question14' => $question14,
            'llm_comment14' => $llm_comment14,
            'question15' => $question15,
            'llm_comment15' => $llm_comment15,
            'question16' => $question16,
            'llm_comment16' => $llm_comment16,
            'question17' => $question17,
            'llm_comment17' => $llm_comment17,
            'question18' => $question18,
            'llm_comment18' => $llm_comment18,
            'question19' => $question19,
            'llm_comment19' => $llm_comment19,
            'question20' => $question20,
            'llm_comment20' => $llm_comment20,
            'question21' => $question21,
            'llm_comment21' => $llm_comment21,
            'question22' => $question22,
            'llm_comment22' => $llm_comment22,
        ];
    }
}
