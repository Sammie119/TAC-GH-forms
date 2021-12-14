<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWCommunityReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CommunityChartsController extends Controller
{
    static public function community($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWCommunityReport::count();
                $area_area = VWCommunityReport::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWCommunityReport::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWCommunityReport::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $commrep_comment1 = VWCommunityReport::select(DB::raw('commrep_comment1, count(commrep_comment1)'))->groupBy('commrep_comment1')->get();
                $commrep_comment2 = VWCommunityReport::select(DB::raw('commrep_comment2, count(commrep_comment2)'))->groupBy('commrep_comment2')->get();
                $question3 = VWCommunityReport::select(DB::raw('commrep_question3, count(community_id) AS y'))->groupBy('commrep_question3')->get();
                $commrep_comment3 = VWCommunityReport::select(DB::raw('commrep_comment3, count(commrep_comment3)'))->groupBy('commrep_comment3')->get();
                $question4 = VWCommunityReport::select(DB::raw('commrep_question4, count(community_id) AS y'))->groupBy('commrep_question4')->get();
                $commrep_comment4 = VWCommunityReport::select(DB::raw('commrep_comment4, count(commrep_comment4)'))->groupBy('commrep_comment4')->get();
                $question5 = VWCommunityReport::select(DB::raw('commrep_question5, count(community_id) AS y'))->groupBy('commrep_question5')->get();
                $commrep_comment5 = VWCommunityReport::select(DB::raw('commrep_comment5, count(commrep_comment5)'))->groupBy('commrep_comment5')->get();
                $question6 = VWCommunityReport::select(DB::raw('commrep_question6, count(community_id) AS y'))->groupBy('commrep_question6')->get();
                $commrep_comment6 = VWCommunityReport::select(DB::raw('commrep_comment6, count(commrep_comment6)'))->groupBy('commrep_comment6')->get();
                $question7 = VWCommunityReport::select(DB::raw('commrep_question7, count(community_id) AS y'))->groupBy('commrep_question7')->get();
                $commrep_comment7 = VWCommunityReport::select(DB::raw('commrep_comment7, count(commrep_comment7)'))->groupBy('commrep_comment7')->get();
                $question8 = VWCommunityReport::select(DB::raw('commrep_question8, count(community_id) AS y'))->groupBy('commrep_question8')->get();
                $commrep_comment8 = VWCommunityReport::select(DB::raw('commrep_comment8, count(commrep_comment8)'))->groupBy('commrep_comment8')->get();
                $question9 = VWCommunityReport::select(DB::raw('commrep_question9, count(community_id) AS y'))->groupBy('commrep_question9')->get();
                $commrep_comment9 = VWCommunityReport::select(DB::raw('commrep_comment9, count(commrep_comment9)'))->groupBy('commrep_comment9')->get();
                $question10 = VWCommunityReport::select(DB::raw('commrep_question10, count(community_id) AS y'))->groupBy('commrep_question10')->get();
                $commrep_comment10 = VWCommunityReport::select(DB::raw('commrep_comment10, count(commrep_comment10)'))->groupBy('commrep_comment10')->get();
                $question11 = VWCommunityReport::select(DB::raw('commrep_question11, count(community_id) AS y'))->groupBy('commrep_question11')->get();
                $commrep_comment11 = VWCommunityReport::select(DB::raw('commrep_comment11, count(commrep_comment11)'))->groupBy('commrep_comment11')->get();
                
                break;
        
            case 'Area':
                $total = VWCommunityReport::where('area', 'ILIKE', $area)->count();
                $area_area = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $commrep_comment1 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment1, count(commrep_comment1)'))->groupBy('commrep_comment1')->get();
                $commrep_comment2 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment2, count(commrep_comment2)'))->groupBy('commrep_comment2')->get();
                $question3 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question3, count(community_id) AS y'))->groupBy('commrep_question3')->get();
                $commrep_comment3 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment3, count(commrep_comment3)'))->groupBy('commrep_comment3')->get();
                $question4 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question4, count(community_id) AS y'))->groupBy('commrep_question4')->get();
                $commrep_comment4 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment4, count(commrep_comment4)'))->groupBy('commrep_comment4')->get();
                $question5 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question5, count(community_id) AS y'))->groupBy('commrep_question5')->get();
                $commrep_comment5 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment5, count(commrep_comment5)'))->groupBy('commrep_comment5')->get();
                $question6 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question6, count(community_id) AS y'))->groupBy('commrep_question6')->get();
                $commrep_comment6 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment6, count(commrep_comment6)'))->groupBy('commrep_comment6')->get();
                $question7 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question7, count(community_id) AS y'))->groupBy('commrep_question7')->get();
                $commrep_comment7 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment7, count(commrep_comment7)'))->groupBy('commrep_comment7')->get();
                $question8 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question8, count(community_id) AS y'))->groupBy('commrep_question8')->get();
                $commrep_comment8 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment8, count(commrep_comment8)'))->groupBy('commrep_comment8')->get();
                $question9 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question9, count(community_id) AS y'))->groupBy('commrep_question9')->get();
                $commrep_comment9 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment9, count(commrep_comment9)'))->groupBy('commrep_comment9')->get();
                $question10 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question10, count(community_id) AS y'))->groupBy('commrep_question10')->get();
                $commrep_comment10 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment10, count(commrep_comment10)'))->groupBy('commrep_comment10')->get();
                $question11 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_question11, count(community_id) AS y'))->groupBy('commrep_question11')->get();
                $commrep_comment11 = VWCommunityReport::where('area', 'ILIKE', $area)->select(DB::raw('commrep_comment11, count(commrep_comment11)'))->groupBy('commrep_comment11')->get();
                break;
        
            case 'District':
                $total = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $commrep_comment1 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment1, count(commrep_comment1)'))->groupBy('commrep_comment1')->get();
                $commrep_comment2 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment2, count(commrep_comment2)'))->groupBy('commrep_comment2')->get();
                $question3 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question3, count(community_id) AS y'))->groupBy('commrep_question3')->get();
                $commrep_comment3 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment3, count(commrep_comment3)'))->groupBy('commrep_comment3')->get();
                $question4 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question4, count(community_id) AS y'))->groupBy('commrep_question4')->get();
                $commrep_comment4 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment4, count(commrep_comment4)'))->groupBy('commrep_comment4')->get();
                $question5 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question5, count(community_id) AS y'))->groupBy('commrep_question5')->get();
                $commrep_comment5 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment5, count(commrep_comment5)'))->groupBy('commrep_comment5')->get();
                $question6 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question6, count(community_id) AS y'))->groupBy('commrep_question6')->get();
                $commrep_comment6 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment6, count(commrep_comment6)'))->groupBy('commrep_comment6')->get();
                $question7 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question7, count(community_id) AS y'))->groupBy('commrep_question7')->get();
                $commrep_comment7 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment7, count(commrep_comment7)'))->groupBy('commrep_comment7')->get();
                $question8 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question8, count(community_id) AS y'))->groupBy('commrep_question8')->get();
                $commrep_comment8 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment8, count(commrep_comment8)'))->groupBy('commrep_comment8')->get();
                $question9 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question9, count(community_id) AS y'))->groupBy('commrep_question9')->get();
                $commrep_comment9 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment9, count(commrep_comment9)'))->groupBy('commrep_comment9')->get();
                $question10 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question10, count(community_id) AS y'))->groupBy('commrep_question10')->get();
                $commrep_comment10 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment10, count(commrep_comment10)'))->groupBy('commrep_comment10')->get();
                $question11 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_question11, count(community_id) AS y'))->groupBy('commrep_question11')->get();
                $commrep_comment11 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('commrep_comment11, count(commrep_comment11)'))->groupBy('commrep_comment11')->get();
                break;
        
            case 'Local':
                $total = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->count();
                $area_area = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $commrep_comment1 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment1, count(commrep_comment1)'))->groupBy('commrep_comment1')->get();
                $commrep_comment2 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment2, count(commrep_comment2)'))->groupBy('commrep_comment2')->get();
                $question3 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question3, count(community_id) AS y'))->groupBy('commrep_question3')->get();
                $commrep_comment3 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment3, count(commrep_comment3)'))->groupBy('commrep_comment3')->get();
                $question4 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question4, count(community_id) AS y'))->groupBy('commrep_question4')->get();
                $commrep_comment4 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment4, count(commrep_comment4)'))->groupBy('commrep_comment4')->get();
                $question5 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question5, count(community_id) AS y'))->groupBy('commrep_question5')->get();
                $commrep_comment5 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment5, count(commrep_comment5)'))->groupBy('commrep_comment5')->get();
                $question6 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question6, count(community_id) AS y'))->groupBy('commrep_question6')->get();
                $commrep_comment6 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment6, count(commrep_comment6)'))->groupBy('commrep_comment6')->get();
                $question7 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question7, count(community_id) AS y'))->groupBy('commrep_question7')->get();
                $commrep_comment7 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment7, count(commrep_comment7)'))->groupBy('commrep_comment7')->get();
                $question8 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question8, count(community_id) AS y'))->groupBy('commrep_question8')->get();
                $commrep_comment8 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment8, count(commrep_comment8)'))->groupBy('commrep_comment8')->get();
                $question9 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question9, count(community_id) AS y'))->groupBy('commrep_question9')->get();
                $commrep_comment9 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment9, count(commrep_comment9)'))->groupBy('commrep_comment9')->get();
                $question10 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question10, count(community_id) AS y'))->groupBy('commrep_question10')->get();
                $commrep_comment10 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment10, count(commrep_comment10)'))->groupBy('commrep_comment10')->get();
                $question11 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_question11, count(community_id) AS y'))->groupBy('commrep_question11')->get();
                $commrep_comment11 = VWCommunityReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('commrep_comment11, count(commrep_comment11)'))->groupBy('commrep_comment11')->get();
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
            'commrep_comment1' => $commrep_comment1,
            'commrep_comment2' => $commrep_comment2,
            'question3' => $question3,
            'commrep_comment3' => $commrep_comment3,
            'question4' => $question4,
            'commrep_comment4' => $commrep_comment4,
            'question5' => $question5,
            'commrep_comment5' => $commrep_comment5,
            'question6' => $question6,
            'commrep_comment6' => $commrep_comment6,
            'question7' => $question7,
            'commrep_comment7' => $commrep_comment7,
            'question8' => $question8,
            'commrep_comment8' => $commrep_comment8,
            'question9' => $question9,
            'commrep_comment9' => $commrep_comment9,
            'question10' => $question10,
            'commrep_comment10' => $commrep_comment10,
            'question11' => $question11,
            'commrep_comment11' => $commrep_comment11,
        ];
    }
}
