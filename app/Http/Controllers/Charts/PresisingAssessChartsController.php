<?php

namespace App\Http\Controllers\Charts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\VWPresidingAssessment;
use Illuminate\Contracts\Session\Session;

class PresisingAssessChartsController extends Controller
{
    static public function presidingAss($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWPresidingAssessment::count();
                $area_area = VWPresidingAssessment::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWPresidingAssessment::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWPresidingAssessment::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $pres_ass_comment1 = VWPresidingAssessment::select(DB::raw('pres_ass_comment1, count(pres_ass_comment1)'))->groupBy('pres_ass_comment1')->get();
                $pres_ass_comment2 = VWPresidingAssessment::select(DB::raw('pres_ass_comment2, count(pres_ass_comment2)'))->groupBy('pres_ass_comment2')->get();
                $pres_ass_comment3 = VWPresidingAssessment::select(DB::raw('pres_ass_comment3, count(pres_ass_comment3)'))->groupBy('pres_ass_comment3')->get();
                $pres_ass_comment4 = VWPresidingAssessment::select(DB::raw('pres_ass_comment4, count(pres_ass_comment4)'))->groupBy('pres_ass_comment4')->get();
                $pres_ass_comment5 = VWPresidingAssessment::select(DB::raw('pres_ass_comment5, count(pres_ass_comment5)'))->groupBy('pres_ass_comment5')->get();
                $pres_ass_comment6 = VWPresidingAssessment::select(DB::raw('pres_ass_comment6, count(pres_ass_comment6)'))->groupBy('pres_ass_comment6')->get();
                $pres_ass_comment7 = VWPresidingAssessment::select(DB::raw('pres_ass_comment7, count(pres_ass_comment7)'))->groupBy('pres_ass_comment7')->get();
                $pres_ass_comment8 = VWPresidingAssessment::select(DB::raw('pres_ass_comment8, count(pres_ass_comment8)'))->groupBy('pres_ass_comment8')->get();
                $pres_ass_comment9 = VWPresidingAssessment::select(DB::raw('pres_ass_comment9, count(pres_ass_comment9)'))->groupBy('pres_ass_comment9')->get();
                $pres_ass_comment10 = VWPresidingAssessment::select(DB::raw('pres_ass_comment10, count(pres_ass_comment10)'))->groupBy('pres_ass_comment10')->get();
                $pres_ass_comment11 = VWPresidingAssessment::select(DB::raw('pres_ass_comment11, count(pres_ass_comment11)'))->groupBy('pres_ass_comment11')->get();
                $pres_ass_comment12 = VWPresidingAssessment::select(DB::raw('pres_ass_comment12, count(pres_ass_comment12)'))->groupBy('pres_ass_comment12')->get();
                
                break;
        
            case 'Area':
                $total = VWPresidingAssessment::where('area', 'ILIKE', $area)->count();
                $area_area = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $pres_ass_comment1 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment1, count(pres_ass_comment1)'))->groupBy('pres_ass_comment1')->get();
                $pres_ass_comment2 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment2, count(pres_ass_comment2)'))->groupBy('pres_ass_comment2')->get();
                $pres_ass_comment3 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment3, count(pres_ass_comment3)'))->groupBy('pres_ass_comment3')->get();
                $pres_ass_comment4 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment4, count(pres_ass_comment4)'))->groupBy('pres_ass_comment4')->get();
                $pres_ass_comment5 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment5, count(pres_ass_comment5)'))->groupBy('pres_ass_comment5')->get();
                $pres_ass_comment6 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment6, count(pres_ass_comment6)'))->groupBy('pres_ass_comment6')->get();
                $pres_ass_comment7 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment7, count(pres_ass_comment7)'))->groupBy('pres_ass_comment7')->get();
                $pres_ass_comment8 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment8, count(pres_ass_comment8)'))->groupBy('pres_ass_comment8')->get();
                $pres_ass_comment9 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment9, count(pres_ass_comment9)'))->groupBy('pres_ass_comment9')->get();
                $pres_ass_comment10 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment10, count(pres_ass_comment10)'))->groupBy('pres_ass_comment10')->get();
                $pres_ass_comment11 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment11, count(pres_ass_comment11)'))->groupBy('pres_ass_comment11')->get();
                $pres_ass_comment12 = VWPresidingAssessment::where('area', 'ILIKE', $area)->select(DB::raw('pres_ass_comment12, count(pres_ass_comment12)'))->groupBy('pres_ass_comment12')->get();
                
                break;
        
            case 'District':
                $total = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $pres_ass_comment1 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment1, count(pres_ass_comment1)'))->groupBy('pres_ass_comment1')->get();
                $pres_ass_comment2 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment2, count(pres_ass_comment2)'))->groupBy('pres_ass_comment2')->get();
                $pres_ass_comment3 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment3, count(pres_ass_comment3)'))->groupBy('pres_ass_comment3')->get();
                $pres_ass_comment4 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment4, count(pres_ass_comment4)'))->groupBy('pres_ass_comment4')->get();
                $pres_ass_comment5 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment5, count(pres_ass_comment5)'))->groupBy('pres_ass_comment5')->get();
                $pres_ass_comment6 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment6, count(pres_ass_comment6)'))->groupBy('pres_ass_comment6')->get();
                $pres_ass_comment7 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment7, count(pres_ass_comment7)'))->groupBy('pres_ass_comment7')->get();
                $pres_ass_comment8 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment8, count(pres_ass_comment8)'))->groupBy('pres_ass_comment8')->get();
                $pres_ass_comment9 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment9, count(pres_ass_comment9)'))->groupBy('pres_ass_comment9')->get();
                $pres_ass_comment10 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment10, count(pres_ass_comment10)'))->groupBy('pres_ass_comment10')->get();
                $pres_ass_comment11 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment11, count(pres_ass_comment11)'))->groupBy('pres_ass_comment11')->get();
                $pres_ass_comment12 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('pres_ass_comment12, count(pres_ass_comment12)'))->groupBy('pres_ass_comment12')->get();
                
                break;
        
            case 'Local':
                $total = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->count();
                $area_area = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $pres_ass_comment1 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment1, count(pres_ass_comment1)'))->groupBy('pres_ass_comment1')->get();
                $pres_ass_comment2 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment2, count(pres_ass_comment2)'))->groupBy('pres_ass_comment2')->get();
                $pres_ass_comment3 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment3, count(pres_ass_comment3)'))->groupBy('pres_ass_comment3')->get();
                $pres_ass_comment4 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment4, count(pres_ass_comment4)'))->groupBy('pres_ass_comment4')->get();
                $pres_ass_comment5 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment5, count(pres_ass_comment5)'))->groupBy('pres_ass_comment5')->get();
                $pres_ass_comment6 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment6, count(pres_ass_comment6)'))->groupBy('pres_ass_comment6')->get();
                $pres_ass_comment7 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment7, count(pres_ass_comment7)'))->groupBy('pres_ass_comment7')->get();
                $pres_ass_comment8 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment8, count(pres_ass_comment8)'))->groupBy('pres_ass_comment8')->get();
                $pres_ass_comment9 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment9, count(pres_ass_comment9)'))->groupBy('pres_ass_comment9')->get();
                $pres_ass_comment10 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment10, count(pres_ass_comment10)'))->groupBy('pres_ass_comment10')->get();
                $pres_ass_comment11 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment11, count(pres_ass_comment11)'))->groupBy('pres_ass_comment11')->get();
                $pres_ass_comment12 = VWPresidingAssessment::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('pres_ass_comment12, count(pres_ass_comment12)'))->groupBy('pres_ass_comment12')->get();
                                
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
            'pres_ass_comment1' => $pres_ass_comment1,
            'pres_ass_comment2' => $pres_ass_comment2,
            'pres_ass_comment3' => $pres_ass_comment3,
            'pres_ass_comment4' => $pres_ass_comment4,
            'pres_ass_comment5' => $pres_ass_comment5,
            'pres_ass_comment6' => $pres_ass_comment6,
            'pres_ass_comment7' => $pres_ass_comment7,
            'pres_ass_comment8' => $pres_ass_comment8,
            'pres_ass_comment9' => $pres_ass_comment9,
            'pres_ass_comment10' => $pres_ass_comment10,
            'pres_ass_comment11' => $pres_ass_comment11,
            'pres_ass_comment12' => $pres_ass_comment12,
            
        ];
    }
}
