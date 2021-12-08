<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWSupAssessmentQues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SupAssessChartsController extends Controller
{
    static public function supAss($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWSupAssessmentQues::count();
                $area_area = VWSupAssessmentQues::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWSupAssessmentQues::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWSupAssessmentQues::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $sup_ass_comment1 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment1, count(sup_ass_comment1)'))->groupBy('sup_ass_comment1')->get();
                $sup_ass_comment2 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment2, count(sup_ass_comment2)'))->groupBy('sup_ass_comment2')->get();
                $sup_ass_comment3 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment3, count(sup_ass_comment3)'))->groupBy('sup_ass_comment3')->get();
                $sup_ass_comment4 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment4, count(sup_ass_comment4)'))->groupBy('sup_ass_comment4')->get();
                $sup_ass_comment5 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment5, count(sup_ass_comment5)'))->groupBy('sup_ass_comment5')->get();
                $sup_ass_comment6 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment6, count(sup_ass_comment6)'))->groupBy('sup_ass_comment6')->get();
                $sup_ass_comment7 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment7, count(sup_ass_comment7)'))->groupBy('sup_ass_comment7')->get();
                $sup_ass_comment8 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment8, count(sup_ass_comment8)'))->groupBy('sup_ass_comment8')->get();
                $sup_ass_comment9 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment9, count(sup_ass_comment9)'))->groupBy('sup_ass_comment9')->get();
                $sup_ass_comment10 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment10, count(sup_ass_comment10)'))->groupBy('sup_ass_comment10')->get();
                $sup_ass_comment11 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment11, count(sup_ass_comment11)'))->groupBy('sup_ass_comment11')->get();
                $sup_ass_comment12 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment12, count(sup_ass_comment12)'))->groupBy('sup_ass_comment12')->get();
                $sup_ass_comment13 = VWSupAssessmentQues::select(DB::raw('sup_ass_comment13, count(sup_ass_comment13)'))->groupBy('sup_ass_comment13')->get();
                break;
        
            case 'Area':
                $total = VWSupAssessmentQues::where('area', $area)->count();
                $area_area = VWSupAssessmentQues::where('area', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWSupAssessmentQues::where('area', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWSupAssessmentQues::where('area', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $sup_ass_comment1 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment1, count(sup_ass_comment1)'))->groupBy('sup_ass_comment1')->get();
                $sup_ass_comment2 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment2, count(sup_ass_comment2)'))->groupBy('sup_ass_comment2')->get();
                $sup_ass_comment3 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment3, count(sup_ass_comment3)'))->groupBy('sup_ass_comment3')->get();
                $sup_ass_comment4 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment4, count(sup_ass_comment4)'))->groupBy('sup_ass_comment4')->get();
                $sup_ass_comment5 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment5, count(sup_ass_comment5)'))->groupBy('sup_ass_comment5')->get();
                $sup_ass_comment6 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment6, count(sup_ass_comment6)'))->groupBy('sup_ass_comment6')->get();
                $sup_ass_comment7 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment7, count(sup_ass_comment7)'))->groupBy('sup_ass_comment7')->get();
                $sup_ass_comment8 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment8, count(sup_ass_comment8)'))->groupBy('sup_ass_comment8')->get();
                $sup_ass_comment9 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment9, count(sup_ass_comment9)'))->groupBy('sup_ass_comment9')->get();
                $sup_ass_comment10 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment10, count(sup_ass_comment10)'))->groupBy('sup_ass_comment10')->get();
                $sup_ass_comment11 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment11, count(sup_ass_comment11)'))->groupBy('sup_ass_comment11')->get();
                $sup_ass_comment12 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment12, count(sup_ass_comment12)'))->groupBy('sup_ass_comment12')->get();
                $sup_ass_comment13 = VWSupAssessmentQues::where('area', $area)->select(DB::raw('sup_ass_comment13, count(sup_ass_comment13)'))->groupBy('sup_ass_comment13')->get();

                break;
        
            case 'District':
                $total = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->count();
                $area_area = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $sup_ass_comment1 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment1, count(sup_ass_comment1)'))->groupBy('sup_ass_comment1')->get();
                $sup_ass_comment2 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment2, count(sup_ass_comment2)'))->groupBy('sup_ass_comment2')->get();
                $sup_ass_comment3 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment3, count(sup_ass_comment3)'))->groupBy('sup_ass_comment3')->get();
                $sup_ass_comment4 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment4, count(sup_ass_comment4)'))->groupBy('sup_ass_comment4')->get();
                $sup_ass_comment5 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment5, count(sup_ass_comment5)'))->groupBy('sup_ass_comment5')->get();
                $sup_ass_comment6 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment6, count(sup_ass_comment6)'))->groupBy('sup_ass_comment6')->get();
                $sup_ass_comment7 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment7, count(sup_ass_comment7)'))->groupBy('sup_ass_comment7')->get();
                $sup_ass_comment8 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment8, count(sup_ass_comment8)'))->groupBy('sup_ass_comment8')->get();
                $sup_ass_comment9 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment9, count(sup_ass_comment9)'))->groupBy('sup_ass_comment9')->get();
                $sup_ass_comment10 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment10, count(sup_ass_comment10)'))->groupBy('sup_ass_comment10')->get();
                $sup_ass_comment11 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment11, count(sup_ass_comment11)'))->groupBy('sup_ass_comment11')->get();
                $sup_ass_comment12 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment12, count(sup_ass_comment12)'))->groupBy('sup_ass_comment12')->get();
                $sup_ass_comment13 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->select(DB::raw('sup_ass_comment13, count(sup_ass_comment13)'))->groupBy('sup_ass_comment13')->get();

                break;
        
            case 'Local':
                $total = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->count();
                $area_area = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $sup_ass_comment1 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment1, count(sup_ass_comment1)'))->groupBy('sup_ass_comment1')->get();
                $sup_ass_comment2 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment2, count(sup_ass_comment2)'))->groupBy('sup_ass_comment2')->get();
                $sup_ass_comment3 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment3, count(sup_ass_comment3)'))->groupBy('sup_ass_comment3')->get();
                $sup_ass_comment4 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment4, count(sup_ass_comment4)'))->groupBy('sup_ass_comment4')->get();
                $sup_ass_comment5 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment5, count(sup_ass_comment5)'))->groupBy('sup_ass_comment5')->get();
                $sup_ass_comment6 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment6, count(sup_ass_comment6)'))->groupBy('sup_ass_comment6')->get();
                $sup_ass_comment7 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment7, count(sup_ass_comment7)'))->groupBy('sup_ass_comment7')->get();
                $sup_ass_comment8 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment8, count(sup_ass_comment8)'))->groupBy('sup_ass_comment8')->get();
                $sup_ass_comment9 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment9, count(sup_ass_comment9)'))->groupBy('sup_ass_comment9')->get();
                $sup_ass_comment10 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment10, count(sup_ass_comment10)'))->groupBy('sup_ass_comment10')->get();
                $sup_ass_comment11 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment11, count(sup_ass_comment11)'))->groupBy('sup_ass_comment11')->get();
                $sup_ass_comment12 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment12, count(sup_ass_comment12)'))->groupBy('sup_ass_comment12')->get();
                $sup_ass_comment13 = VWSupAssessmentQues::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('sup_ass_comment13, count(sup_ass_comment13)'))->groupBy('sup_ass_comment13')->get();
                
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
            'sup_ass_comment1' => $sup_ass_comment1,
            'sup_ass_comment2' => $sup_ass_comment2,
            'sup_ass_comment3' => $sup_ass_comment3,
            'sup_ass_comment4' => $sup_ass_comment4,
            'sup_ass_comment5' => $sup_ass_comment5,
            'sup_ass_comment6' => $sup_ass_comment6,
            'sup_ass_comment7' => $sup_ass_comment7,
            'sup_ass_comment8' => $sup_ass_comment8,
            'sup_ass_comment9' => $sup_ass_comment9,
            'sup_ass_comment10' => $sup_ass_comment10,
            'sup_ass_comment11' => $sup_ass_comment11,
            'sup_ass_comment12' => $sup_ass_comment12,
            'sup_ass_comment13' => $sup_ass_comment13,
        ];
    }
}
