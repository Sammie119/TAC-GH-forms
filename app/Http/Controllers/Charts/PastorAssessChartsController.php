<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWPastorAssessmentQues;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;

class PastorAssessChartsController extends Controller
{
    static public function pastorAss($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWPastorAssessmentQues::count();
                $area_area = VWPastorAssessmentQues::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWPastorAssessmentQues::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWPastorAssessmentQues::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $past_ass_comment1 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment1, count(past_ass_comment1)'))->groupBy('past_ass_comment1')->get();
                $past_ass_comment2 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment2, count(past_ass_comment2)'))->groupBy('past_ass_comment2')->get();
                $past_ass_comment3 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment3, count(past_ass_comment3)'))->groupBy('past_ass_comment3')->get();
                $past_ass_comment4 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment4, count(past_ass_comment4)'))->groupBy('past_ass_comment4')->get();
                $past_ass_comment5 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment5, count(past_ass_comment5)'))->groupBy('past_ass_comment5')->get();
                $past_ass_comment6 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment6, count(past_ass_comment6)'))->groupBy('past_ass_comment6')->get();
                $past_ass_comment7 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment7, count(past_ass_comment7)'))->groupBy('past_ass_comment7')->get();
                $past_ass_comment8 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment8, count(past_ass_comment8)'))->groupBy('past_ass_comment8')->get();
                $past_ass_comment9 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment9, count(past_ass_comment9)'))->groupBy('past_ass_comment9')->get();
                $past_ass_comment10 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment10, count(past_ass_comment10)'))->groupBy('past_ass_comment10')->get();
                $past_ass_comment11 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment11, count(past_ass_comment11)'))->groupBy('past_ass_comment11')->get();
                $past_ass_comment12 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment12, count(past_ass_comment12)'))->groupBy('past_ass_comment12')->get();
                $past_ass_comment13 = VWPastorAssessmentQues::select(DB::raw('past_ass_comment13, count(past_ass_comment13)'))->groupBy('past_ass_comment13')->get();
                break;
        
            case 'Area':
                $total = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->count();
                $area_area = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $past_ass_comment1 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment1, count(past_ass_comment1)'))->groupBy('past_ass_comment1')->get();
                $past_ass_comment2 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment2, count(past_ass_comment2)'))->groupBy('past_ass_comment2')->get();
                $past_ass_comment3 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment3, count(past_ass_comment3)'))->groupBy('past_ass_comment3')->get();
                $past_ass_comment4 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment4, count(past_ass_comment4)'))->groupBy('past_ass_comment4')->get();
                $past_ass_comment5 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment5, count(past_ass_comment5)'))->groupBy('past_ass_comment5')->get();
                $past_ass_comment6 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment6, count(past_ass_comment6)'))->groupBy('past_ass_comment6')->get();
                $past_ass_comment7 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment7, count(past_ass_comment7)'))->groupBy('past_ass_comment7')->get();
                $past_ass_comment8 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment8, count(past_ass_comment8)'))->groupBy('past_ass_comment8')->get();
                $past_ass_comment9 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment9, count(past_ass_comment9)'))->groupBy('past_ass_comment9')->get();
                $past_ass_comment10 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment10, count(past_ass_comment10)'))->groupBy('past_ass_comment10')->get();
                $past_ass_comment11 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment11, count(past_ass_comment11)'))->groupBy('past_ass_comment11')->get();
                $past_ass_comment12 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment12, count(past_ass_comment12)'))->groupBy('past_ass_comment12')->get();
                $past_ass_comment13 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->select(DB::raw('past_ass_comment13, count(past_ass_comment13)'))->groupBy('past_ass_comment13')->get();

                break;
        
            case 'District':
                $total = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $past_ass_comment1 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment1, count(past_ass_comment1)'))->groupBy('past_ass_comment1')->get();
                $past_ass_comment2 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment2, count(past_ass_comment2)'))->groupBy('past_ass_comment2')->get();
                $past_ass_comment3 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment3, count(past_ass_comment3)'))->groupBy('past_ass_comment3')->get();
                $past_ass_comment4 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment4, count(past_ass_comment4)'))->groupBy('past_ass_comment4')->get();
                $past_ass_comment5 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment5, count(past_ass_comment5)'))->groupBy('past_ass_comment5')->get();
                $past_ass_comment6 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment6, count(past_ass_comment6)'))->groupBy('past_ass_comment6')->get();
                $past_ass_comment7 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment7, count(past_ass_comment7)'))->groupBy('past_ass_comment7')->get();
                $past_ass_comment8 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment8, count(past_ass_comment8)'))->groupBy('past_ass_comment8')->get();
                $past_ass_comment9 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment9, count(past_ass_comment9)'))->groupBy('past_ass_comment9')->get();
                $past_ass_comment10 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment10, count(past_ass_comment10)'))->groupBy('past_ass_comment10')->get();
                $past_ass_comment11 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment11, count(past_ass_comment11)'))->groupBy('past_ass_comment11')->get();
                $past_ass_comment12 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment12, count(past_ass_comment12)'))->groupBy('past_ass_comment12')->get();
                $past_ass_comment13 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('past_ass_comment13, count(past_ass_comment13)'))->groupBy('past_ass_comment13')->get();

                break;
        
            case 'Local':
                $total = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->count();
                $area_area = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $past_ass_comment1 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment1, count(past_ass_comment1)'))->groupBy('past_ass_comment1')->get();
                $past_ass_comment2 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment2, count(past_ass_comment2)'))->groupBy('past_ass_comment2')->get();
                $past_ass_comment3 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment3, count(past_ass_comment3)'))->groupBy('past_ass_comment3')->get();
                $past_ass_comment4 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment4, count(past_ass_comment4)'))->groupBy('past_ass_comment4')->get();
                $past_ass_comment5 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment5, count(past_ass_comment5)'))->groupBy('past_ass_comment5')->get();
                $past_ass_comment6 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment6, count(past_ass_comment6)'))->groupBy('past_ass_comment6')->get();
                $past_ass_comment7 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment7, count(past_ass_comment7)'))->groupBy('past_ass_comment7')->get();
                $past_ass_comment8 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment8, count(past_ass_comment8)'))->groupBy('past_ass_comment8')->get();
                $past_ass_comment9 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment9, count(past_ass_comment9)'))->groupBy('past_ass_comment9')->get();
                $past_ass_comment10 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment10, count(past_ass_comment10)'))->groupBy('past_ass_comment10')->get();
                $past_ass_comment11 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment11, count(past_ass_comment11)'))->groupBy('past_ass_comment11')->get();
                $past_ass_comment12 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment12, count(past_ass_comment12)'))->groupBy('past_ass_comment12')->get();
                $past_ass_comment13 = VWPastorAssessmentQues::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('past_ass_comment13, count(past_ass_comment13)'))->groupBy('past_ass_comment13')->get();
                
                break;
            
            default:
                // return Session::flash('error', 'Wrong Input');
                break;
        }

        return [
            'total' => $total,
            'area' => $area_area,
            'district' => $district_dist,
            'local' => $local_loc,
            'past_ass_comment1' => $past_ass_comment1,
            'past_ass_comment2' => $past_ass_comment2,
            'past_ass_comment3' => $past_ass_comment3,
            'past_ass_comment4' => $past_ass_comment4,
            'past_ass_comment5' => $past_ass_comment5,
            'past_ass_comment6' => $past_ass_comment6,
            'past_ass_comment7' => $past_ass_comment7,
            'past_ass_comment8' => $past_ass_comment8,
            'past_ass_comment9' => $past_ass_comment9,
            'past_ass_comment10' => $past_ass_comment10,
            'past_ass_comment11' => $past_ass_comment11,
            'past_ass_comment12' => $past_ass_comment12,
            'past_ass_comment13' => $past_ass_comment13,
        ];
    }
}
