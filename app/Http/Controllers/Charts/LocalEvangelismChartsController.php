<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWLocalEvangelism;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LocalEvangelismChartsController extends Controller
{
    static public function localEvangelism($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWLocalEvangelism::count();
                $area_area = VWLocalEvangelism::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWLocalEvangelism::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWLocalEvangelism::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWLocalEvangelism::select(DB::raw('evange_question1, count(local_evang_id) AS y'))->groupBy('evange_question1')->get();
                $evange_comment1 = VWLocalEvangelism::select(DB::raw('evange_comment1, count(evange_comment1)'))->groupBy('evange_comment1')->get();
                $question2 = VWLocalEvangelism::select(DB::raw('evange_question2, count(local_evang_id) AS y'))->groupBy('evange_question2')->get();
                $evange_comment2 = VWLocalEvangelism::select(DB::raw('evange_comment2, count(evange_comment2)'))->groupBy('evange_comment2')->get();
                $question3 = VWLocalEvangelism::select(DB::raw('evange_question3, count(local_evang_id) AS y'))->groupBy('evange_question3')->get();
                $evange_comment3 = VWLocalEvangelism::select(DB::raw('evange_comment3, count(evange_comment3)'))->groupBy('evange_comment3')->get();
                $question4 = VWLocalEvangelism::select(DB::raw('evange_question4, count(local_evang_id) AS y'))->groupBy('evange_question4')->get();
                $evange_comment4 = VWLocalEvangelism::select(DB::raw('evange_comment4, count(evange_comment4)'))->groupBy('evange_comment4')->get();
                $question5 = VWLocalEvangelism::select(DB::raw('evange_question5, count(local_evang_id) AS y'))->groupBy('evange_question5')->get();
                $evange_comment5 = VWLocalEvangelism::select(DB::raw('evange_comment5, count(evange_comment5)'))->groupBy('evange_comment5')->get();
                $question6 = VWLocalEvangelism::select(DB::raw('evange_question6, count(local_evang_id) AS y'))->groupBy('evange_question6')->get();
                $evange_comment6 = VWLocalEvangelism::select(DB::raw('evange_comment6, count(evange_comment6)'))->groupBy('evange_comment6')->get();
                $question7 = VWLocalEvangelism::select(DB::raw('evange_question7, count(local_evang_id) AS y'))->groupBy('evange_question7')->get();
                $evange_comment7 = VWLocalEvangelism::select(DB::raw('evange_comment7, count(evange_comment7)'))->groupBy('evange_comment7')->get();
                $question8 = VWLocalEvangelism::select(DB::raw('evange_question8, count(local_evang_id) AS y'))->groupBy('evange_question8')->get();
                $evange_comment8 = VWLocalEvangelism::select(DB::raw('evange_comment8, count(evange_comment8)'))->groupBy('evange_comment8')->get();
                $question9 = VWLocalEvangelism::select(DB::raw('evange_question9, count(local_evang_id) AS y'))->groupBy('evange_question9')->get();
                $evange_comment9 = VWLocalEvangelism::select(DB::raw('evange_comment9, count(evange_comment9)'))->groupBy('evange_comment9')->get();
                $question10 = VWLocalEvangelism::select(DB::raw('evange_question10, count(local_evang_id) AS y'))->groupBy('evange_question10')->get();
                $evange_comment10 = VWLocalEvangelism::select(DB::raw('evange_comment10, count(evange_comment10)'))->groupBy('evange_comment10')->get();
                $question11 = VWLocalEvangelism::select(DB::raw('evange_question11, count(local_evang_id) AS y'))->groupBy('evange_question11')->get();
                $evange_comment11 = VWLocalEvangelism::select(DB::raw('evange_comment11, count(evange_comment11)'))->groupBy('evange_comment11')->get();
                $question12 = VWLocalEvangelism::select(DB::raw('evange_question12, count(local_evang_id) AS y'))->groupBy('evange_question12')->get();
                $evange_comment12 = VWLocalEvangelism::select(DB::raw('evange_comment12, count(evange_comment12)'))->groupBy('evange_comment12')->get();
                $question13 = VWLocalEvangelism::select(DB::raw('evange_question13, count(local_evang_id) AS y'))->groupBy('evange_question13')->get();
                $evange_comment13 = VWLocalEvangelism::select(DB::raw('evange_comment13, count(evange_comment13)'))->groupBy('evange_comment13')->get();
                $question14 = VWLocalEvangelism::select(DB::raw('evange_question14, count(local_evang_id) AS y'))->groupBy('evange_question14')->get();
                $evange_comment14 = VWLocalEvangelism::select(DB::raw('evange_comment14, count(evange_comment14)'))->groupBy('evange_comment14')->get();
                $question15 = VWLocalEvangelism::select(DB::raw('evange_question15, count(local_evang_id) AS y'))->groupBy('evange_question15')->get();
                $evange_comment15 = VWLocalEvangelism::select(DB::raw('evange_comment15, count(evange_comment15)'))->groupBy('evange_comment15')->get();
                $question16 = VWLocalEvangelism::select(DB::raw('evange_question16, count(local_evang_id) AS y'))->groupBy('evange_question16')->get();
                $evange_comment16 = VWLocalEvangelism::select(DB::raw('evange_comment16, count(evange_comment16)'))->groupBy('evange_comment16')->get();
                $question17 = VWLocalEvangelism::select(DB::raw('evange_question17, count(local_evang_id) AS y'))->groupBy('evange_question17')->get();
                $evange_comment17 = VWLocalEvangelism::select(DB::raw('evange_comment17, count(evange_comment17)'))->groupBy('evange_comment17')->get();
                $question18 = VWLocalEvangelism::select(DB::raw('evange_question18, count(local_evang_id) AS y'))->groupBy('evange_question18')->get();
                $evange_comment18 = VWLocalEvangelism::select(DB::raw('evange_comment18, count(evange_comment18)'))->groupBy('evange_comment18')->get();
                
                break;
        
            case 'Area':
                $total = VWLocalEvangelism::where('area', $area)->count();
                $area_area = VWLocalEvangelism::where('area', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWLocalEvangelism::where('area', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWLocalEvangelism::where('area', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question1, count(local_evang_id) AS y'))->groupBy('evange_question1')->get();
                $evange_comment1 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment1, count(evange_comment1)'))->groupBy('evange_comment1')->get();
                $question2 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question2, count(local_evang_id) AS y'))->groupBy('evange_question2')->get();
                $evange_comment2 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment2, count(evange_comment2)'))->groupBy('evange_comment2')->get();
                $question3 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question3, count(local_evang_id) AS y'))->groupBy('evange_question3')->get();
                $evange_comment3 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment3, count(evange_comment3)'))->groupBy('evange_comment3')->get();
                $question4 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question4, count(local_evang_id) AS y'))->groupBy('evange_question4')->get();
                $evange_comment4 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment4, count(evange_comment4)'))->groupBy('evange_comment4')->get();
                $question5 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question5, count(local_evang_id) AS y'))->groupBy('evange_question5')->get();
                $evange_comment5 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment5, count(evange_comment5)'))->groupBy('evange_comment5')->get();
                $question6 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question6, count(local_evang_id) AS y'))->groupBy('evange_question6')->get();
                $evange_comment6 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment6, count(evange_comment6)'))->groupBy('evange_comment6')->get();
                $question7 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question7, count(local_evang_id) AS y'))->groupBy('evange_question7')->get();
                $evange_comment7 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment7, count(evange_comment7)'))->groupBy('evange_comment7')->get();
                $question8 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question8, count(local_evang_id) AS y'))->groupBy('evange_question8')->get();
                $evange_comment8 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment8, count(evange_comment8)'))->groupBy('evange_comment8')->get();
                $question9 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question9, count(local_evang_id) AS y'))->groupBy('evange_question9')->get();
                $evange_comment9 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment9, count(evange_comment9)'))->groupBy('evange_comment9')->get();
                $question10 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question10, count(local_evang_id) AS y'))->groupBy('evange_question10')->get();
                $evange_comment10 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment10, count(evange_comment10)'))->groupBy('evange_comment10')->get();
                $question11 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question11, count(local_evang_id) AS y'))->groupBy('evange_question11')->get();
                $evange_comment11 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment11, count(evange_comment11)'))->groupBy('evange_comment11')->get();
                $question12 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question12, count(local_evang_id) AS y'))->groupBy('evange_question12')->get();
                $evange_comment12 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment12, count(evange_comment12)'))->groupBy('evange_comment12')->get();
                $question13 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question13, count(local_evang_id) AS y'))->groupBy('evange_question13')->get();
                $evange_comment13 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment13, count(evange_comment13)'))->groupBy('evange_comment13')->get();
                $question14 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question14, count(local_evang_id) AS y'))->groupBy('evange_question14')->get();
                $evange_comment14 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment14, count(evange_comment14)'))->groupBy('evange_comment14')->get();
                $question15 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question15, count(local_evang_id) AS y'))->groupBy('evange_question15')->get();
                $evange_comment15 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment15, count(evange_comment15)'))->groupBy('evange_comment15')->get();
                $question16 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question16, count(local_evang_id) AS y'))->groupBy('evange_question16')->get();
                $evange_comment16 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment16, count(evange_comment16)'))->groupBy('evange_comment16')->get();
                $question17 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question17, count(local_evang_id) AS y'))->groupBy('evange_question17')->get();
                $evange_comment17 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment17, count(evange_comment17)'))->groupBy('evange_comment17')->get();
                $question18 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_question18, count(local_evang_id) AS y'))->groupBy('evange_question18')->get();
                $evange_comment18 = VWLocalEvangelism::where('area', $area)->select(DB::raw('evange_comment18, count(evange_comment18)'))->groupBy('evange_comment18')->get();
                break;
        
            case 'District':
                $total = VWLocalEvangelism::where('area', $area)->where('district', $dist)->count();
                $area_area = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question1, count(local_evang_id) AS y'))->groupBy('evange_question1')->get();
                $evange_comment1 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment1, count(evange_comment1)'))->groupBy('evange_comment1')->get();
                $question2 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question2, count(local_evang_id) AS y'))->groupBy('evange_question2')->get();
                $evange_comment2 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment2, count(evange_comment2)'))->groupBy('evange_comment2')->get();
                $question3 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question3, count(local_evang_id) AS y'))->groupBy('evange_question3')->get();
                $evange_comment3 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment3, count(evange_comment3)'))->groupBy('evange_comment3')->get();
                $question4 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question4, count(local_evang_id) AS y'))->groupBy('evange_question4')->get();
                $evange_comment4 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment4, count(evange_comment4)'))->groupBy('evange_comment4')->get();
                $question5 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question5, count(local_evang_id) AS y'))->groupBy('evange_question5')->get();
                $evange_comment5 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment5, count(evange_comment5)'))->groupBy('evange_comment5')->get();
                $question6 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question6, count(local_evang_id) AS y'))->groupBy('evange_question6')->get();
                $evange_comment6 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment6, count(evange_comment6)'))->groupBy('evange_comment6')->get();
                $question7 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question7, count(local_evang_id) AS y'))->groupBy('evange_question7')->get();
                $evange_comment7 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment7, count(evange_comment7)'))->groupBy('evange_comment7')->get();
                $question8 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question8, count(local_evang_id) AS y'))->groupBy('evange_question8')->get();
                $evange_comment8 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment8, count(evange_comment8)'))->groupBy('evange_comment8')->get();
                $question9 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question9, count(local_evang_id) AS y'))->groupBy('evange_question9')->get();
                $evange_comment9 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment9, count(evange_comment9)'))->groupBy('evange_comment9')->get();
                $question10 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question10, count(local_evang_id) AS y'))->groupBy('evange_question10')->get();
                $evange_comment10 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment10, count(evange_comment10)'))->groupBy('evange_comment10')->get();
                $question11 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question11, count(local_evang_id) AS y'))->groupBy('evange_question11')->get();
                $evange_comment11 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment11, count(evange_comment11)'))->groupBy('evange_comment11')->get();
                $question12 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question12, count(local_evang_id) AS y'))->groupBy('evange_question12')->get();
                $evange_comment12 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment12, count(evange_comment12)'))->groupBy('evange_comment12')->get();
                $question13 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question13, count(local_evang_id) AS y'))->groupBy('evange_question13')->get();
                $evange_comment13 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment13, count(evange_comment13)'))->groupBy('evange_comment13')->get();
                $question14 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question14, count(local_evang_id) AS y'))->groupBy('evange_question14')->get();
                $evange_comment14 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment14, count(evange_comment14)'))->groupBy('evange_comment14')->get();
                $question15 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question15, count(local_evang_id) AS y'))->groupBy('evange_question15')->get();
                $evange_comment15 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment15, count(evange_comment15)'))->groupBy('evange_comment15')->get();
                $question16 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question16, count(local_evang_id) AS y'))->groupBy('evange_question16')->get();
                $evange_comment16 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment16, count(evange_comment16)'))->groupBy('evange_comment16')->get();
                $question17 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question17, count(local_evang_id) AS y'))->groupBy('evange_question17')->get();
                $evange_comment17 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment17, count(evange_comment17)'))->groupBy('evange_comment17')->get();
                $question18 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_question18, count(local_evang_id) AS y'))->groupBy('evange_question18')->get();
                $evange_comment18 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->select(DB::raw('evange_comment18, count(evange_comment18)'))->groupBy('evange_comment18')->get();
                break;
        
            case 'Local':
                $total = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->count();
                $area_area = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question1, count(local_evang_id) AS y'))->groupBy('evange_question1')->get();
                $evange_comment1 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment1, count(evange_comment1)'))->groupBy('evange_comment1')->get();
                $question2 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question2, count(local_evang_id) AS y'))->groupBy('evange_question2')->get();
                $evange_comment2 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment2, count(evange_comment2)'))->groupBy('evange_comment2')->get();
                $question3 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question3, count(local_evang_id) AS y'))->groupBy('evange_question3')->get();
                $evange_comment3 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment3, count(evange_comment3)'))->groupBy('evange_comment3')->get();
                $question4 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question4, count(local_evang_id) AS y'))->groupBy('evange_question4')->get();
                $evange_comment4 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment4, count(evange_comment4)'))->groupBy('evange_comment4')->get();
                $question5 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question5, count(local_evang_id) AS y'))->groupBy('evange_question5')->get();
                $evange_comment5 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment5, count(evange_comment5)'))->groupBy('evange_comment5')->get();
                $question6 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question6, count(local_evang_id) AS y'))->groupBy('evange_question6')->get();
                $evange_comment6 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment6, count(evange_comment6)'))->groupBy('evange_comment6')->get();
                $question7 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question7, count(local_evang_id) AS y'))->groupBy('evange_question7')->get();
                $evange_comment7 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment7, count(evange_comment7)'))->groupBy('evange_comment7')->get();
                $question8 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question8, count(local_evang_id) AS y'))->groupBy('evange_question8')->get();
                $evange_comment8 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment8, count(evange_comment8)'))->groupBy('evange_comment8')->get();
                $question9 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question9, count(local_evang_id) AS y'))->groupBy('evange_question9')->get();
                $evange_comment9 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment9, count(evange_comment9)'))->groupBy('evange_comment9')->get();
                $question10 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question10, count(local_evang_id) AS y'))->groupBy('evange_question10')->get();
                $evange_comment10 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment10, count(evange_comment10)'))->groupBy('evange_comment10')->get();
                $question11 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question11, count(local_evang_id) AS y'))->groupBy('evange_question11')->get();
                $evange_comment11 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment11, count(evange_comment11)'))->groupBy('evange_comment11')->get();
                $question12 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question12, count(local_evang_id) AS y'))->groupBy('evange_question12')->get();
                $evange_comment12 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment12, count(evange_comment12)'))->groupBy('evange_comment12')->get();
                $question13 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question13, count(local_evang_id) AS y'))->groupBy('evange_question13')->get();
                $evange_comment13 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment13, count(evange_comment13)'))->groupBy('evange_comment13')->get();
                $question14 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question14, count(local_evang_id) AS y'))->groupBy('evange_question14')->get();
                $evange_comment14 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment14, count(evange_comment14)'))->groupBy('evange_comment14')->get();
                $question15 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question15, count(local_evang_id) AS y'))->groupBy('evange_question15')->get();
                $evange_comment15 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment15, count(evange_comment15)'))->groupBy('evange_comment15')->get();
                $question16 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question16, count(local_evang_id) AS y'))->groupBy('evange_question16')->get();
                $evange_comment16 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment16, count(evange_comment16)'))->groupBy('evange_comment16')->get();
                $question17 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question17, count(local_evang_id) AS y'))->groupBy('evange_question17')->get();
                $evange_comment17 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment17, count(evange_comment17)'))->groupBy('evange_comment17')->get();
                $question18 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_question18, count(local_evang_id) AS y'))->groupBy('evange_question18')->get();
                $evange_comment18 = VWLocalEvangelism::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('evange_comment18, count(evange_comment18)'))->groupBy('evange_comment18')->get();
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
            'evange_comment1' => $evange_comment1,
            'question2' => $question2,
            'evange_comment2' => $evange_comment2,
            'question3' => $question3,
            'evange_comment3' => $evange_comment3,
            'question4' => $question4,
            'evange_comment4' => $evange_comment4,
            'question5' => $question5,
            'evange_comment5' => $evange_comment5,
            'question6' => $question6,
            'evange_comment6' => $evange_comment6,
            'question7' => $question7,
            'evange_comment7' => $evange_comment7,
            'question8' => $question8,
            'evange_comment8' => $evange_comment8,
            'question9' => $question9,
            'evange_comment9' => $evange_comment9,
            'question10' => $question10,
            'evange_comment10' => $evange_comment10,
            'question11' => $question11,
            'evange_comment11' => $evange_comment11,
            'question12' => $question12,
            'evange_comment12' => $evange_comment12,
            'question13' => $question13,
            'evange_comment13' => $evange_comment13,
            'question14' => $question14,
            'evange_comment14' => $evange_comment14,
            'question15' => $question15,
            'evange_comment15' => $evange_comment15,
            'question16' => $question16,
            'evange_comment16' => $evange_comment16,
            'question17' => $question17,
            'evange_comment17' => $evange_comment17,
            'question18' => $question18,
            'evange_comment18' => $evange_comment18,
        ];


    }
}
