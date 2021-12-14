<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWDistrictLevelMonoter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DistrictLevelChartsController extends Controller
{
    static public function districtLevel($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWDistrictLevelMonoter::count();
                $area_area = VWDistrictLevelMonoter::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWDistrictLevelMonoter::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWDistrictLevelMonoter::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWDistrictLevelMonoter::select(DB::raw('dlm_question1, count(district_level_id) AS y'))->groupBy('dlm_question1')->get();
                $dlm_comment1 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment1, count(dlm_comment1)'))->groupBy('dlm_comment1')->get();
                $question2 = VWDistrictLevelMonoter::select(DB::raw('dlm_question2, count(district_level_id) AS y'))->groupBy('dlm_question2')->get();
                $dlm_comment2 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment2, count(dlm_comment2)'))->groupBy('dlm_comment2')->get();
                $question3 = VWDistrictLevelMonoter::select(DB::raw('dlm_question3, count(district_level_id) AS y'))->groupBy('dlm_question3')->get();
                $dlm_comment3 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment3, count(dlm_comment3)'))->groupBy('dlm_comment3')->get();
                $question4 = VWDistrictLevelMonoter::select(DB::raw('dlm_question4, count(district_level_id) AS y'))->groupBy('dlm_question4')->get();
                $dlm_comment4 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment4, count(dlm_comment4)'))->groupBy('dlm_comment4')->get();
                $question5 = VWDistrictLevelMonoter::select(DB::raw('dlm_question5, count(district_level_id) AS y'))->groupBy('dlm_question5')->get();
                $dlm_comment5 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment5, count(dlm_comment5)'))->groupBy('dlm_comment5')->get();
                $question6 = VWDistrictLevelMonoter::select(DB::raw('dlm_question6, count(district_level_id) AS y'))->groupBy('dlm_question6')->get();
                $dlm_comment6 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment6, count(dlm_comment6)'))->groupBy('dlm_comment6')->get();
                $question7 = VWDistrictLevelMonoter::select(DB::raw('dlm_question7, count(district_level_id) AS y'))->groupBy('dlm_question7')->get();
                $dlm_comment7 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment7, count(dlm_comment7)'))->groupBy('dlm_comment7')->get();
                $question8 = VWDistrictLevelMonoter::select(DB::raw('dlm_question8, count(district_level_id) AS y'))->groupBy('dlm_question8')->get();
                $dlm_comment8 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment8, count(dlm_comment8)'))->groupBy('dlm_comment8')->get();
                $question9 = VWDistrictLevelMonoter::select(DB::raw('dlm_question9, count(district_level_id) AS y'))->groupBy('dlm_question9')->get();
                $dlm_comment9 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment9, count(dlm_comment9)'))->groupBy('dlm_comment9')->get();
                $question10 = VWDistrictLevelMonoter::select(DB::raw('dlm_question10, count(district_level_id) AS y'))->groupBy('dlm_question10')->get();
                $dlm_comment10 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment10, count(dlm_comment10)'))->groupBy('dlm_comment10')->get();
                $question11 = VWDistrictLevelMonoter::select(DB::raw('dlm_question11, count(district_level_id) AS y'))->groupBy('dlm_question11')->get();
                $dlm_comment11 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment11, count(dlm_comment11)'))->groupBy('dlm_comment11')->get();
                $question12 = VWDistrictLevelMonoter::select(DB::raw('dlm_question12, count(district_level_id) AS y'))->groupBy('dlm_question12')->get();
                $dlm_comment12 = VWDistrictLevelMonoter::select(DB::raw('dlm_comment12, count(dlm_comment12)'))->groupBy('dlm_comment12')->get();

                break;
        
            case 'Area':
                $total = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->count();
                $area_area = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question1, count(district_level_id) AS y'))->groupBy('dlm_question1')->get();
                $dlm_comment1 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment1, count(dlm_comment1)'))->groupBy('dlm_comment1')->get();
                $question2 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question2, count(district_level_id) AS y'))->groupBy('dlm_question2')->get();
                $dlm_comment2 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment2, count(dlm_comment2)'))->groupBy('dlm_comment2')->get();
                $question3 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question3, count(district_level_id) AS y'))->groupBy('dlm_question3')->get();
                $dlm_comment3 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment3, count(dlm_comment3)'))->groupBy('dlm_comment3')->get();
                $question4 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question4, count(district_level_id) AS y'))->groupBy('dlm_question4')->get();
                $dlm_comment4 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment4, count(dlm_comment4)'))->groupBy('dlm_comment4')->get();
                $question5 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question5, count(district_level_id) AS y'))->groupBy('dlm_question5')->get();
                $dlm_comment5 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment5, count(dlm_comment5)'))->groupBy('dlm_comment5')->get();
                $question6 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question6, count(district_level_id) AS y'))->groupBy('dlm_question6')->get();
                $dlm_comment6 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment6, count(dlm_comment6)'))->groupBy('dlm_comment6')->get();
                $question7 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question7, count(district_level_id) AS y'))->groupBy('dlm_question7')->get();
                $dlm_comment7 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment7, count(dlm_comment7)'))->groupBy('dlm_comment7')->get();
                $question8 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question8, count(district_level_id) AS y'))->groupBy('dlm_question8')->get();
                $dlm_comment8 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment8, count(dlm_comment8)'))->groupBy('dlm_comment8')->get();
                $question9 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question9, count(district_level_id) AS y'))->groupBy('dlm_question9')->get();
                $dlm_comment9 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment9, count(dlm_comment9)'))->groupBy('dlm_comment9')->get();
                $question10 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question10, count(district_level_id) AS y'))->groupBy('dlm_question10')->get();
                $dlm_comment10 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment10, count(dlm_comment10)'))->groupBy('dlm_comment10')->get();
                $question11 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question11, count(district_level_id) AS y'))->groupBy('dlm_question11')->get();
                $dlm_comment11 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment11, count(dlm_comment11)'))->groupBy('dlm_comment11')->get();
                $question12 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_question12, count(district_level_id) AS y'))->groupBy('dlm_question12')->get();
                $dlm_comment12 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->select(DB::raw('dlm_comment12, count(dlm_comment12)'))->groupBy('dlm_comment12')->get();
                break;
        
            case 'District':
                $total = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question1, count(district_level_id) AS y'))->groupBy('dlm_question1')->get();
                $dlm_comment1 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment1, count(dlm_comment1)'))->groupBy('dlm_comment1')->get();
                $question2 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question2, count(district_level_id) AS y'))->groupBy('dlm_question2')->get();
                $dlm_comment2 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment2, count(dlm_comment2)'))->groupBy('dlm_comment2')->get();
                $question3 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question3, count(district_level_id) AS y'))->groupBy('dlm_question3')->get();
                $dlm_comment3 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment3, count(dlm_comment3)'))->groupBy('dlm_comment3')->get();
                $question4 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question4, count(district_level_id) AS y'))->groupBy('dlm_question4')->get();
                $dlm_comment4 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment4, count(dlm_comment4)'))->groupBy('dlm_comment4')->get();
                $question5 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question5, count(district_level_id) AS y'))->groupBy('dlm_question5')->get();
                $dlm_comment5 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment5, count(dlm_comment5)'))->groupBy('dlm_comment5')->get();
                $question6 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question6, count(district_level_id) AS y'))->groupBy('dlm_question6')->get();
                $dlm_comment6 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment6, count(dlm_comment6)'))->groupBy('dlm_comment6')->get();
                $question7 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question7, count(district_level_id) AS y'))->groupBy('dlm_question7')->get();
                $dlm_comment7 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment7, count(dlm_comment7)'))->groupBy('dlm_comment7')->get();
                $question8 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question8, count(district_level_id) AS y'))->groupBy('dlm_question8')->get();
                $dlm_comment8 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment8, count(dlm_comment8)'))->groupBy('dlm_comment8')->get();
                $question9 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question9, count(district_level_id) AS y'))->groupBy('dlm_question9')->get();
                $dlm_comment9 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment9, count(dlm_comment9)'))->groupBy('dlm_comment9')->get();
                $question10 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question10, count(district_level_id) AS y'))->groupBy('dlm_question10')->get();
                $dlm_comment10 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment10, count(dlm_comment10)'))->groupBy('dlm_comment10')->get();
                $question11 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question11, count(district_level_id) AS y'))->groupBy('dlm_question11')->get();
                $dlm_comment11 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment11, count(dlm_comment11)'))->groupBy('dlm_comment11')->get();
                $question12 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_question12, count(district_level_id) AS y'))->groupBy('dlm_question12')->get();
                $dlm_comment12 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('dlm_comment12, count(dlm_comment12)'))->groupBy('dlm_comment12')->get();
                break;
        
            case 'Local':
                $total = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->count();
                $area_area = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question1, count(district_level_id) AS y'))->groupBy('dlm_question1')->get();
                $dlm_comment1 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment1, count(dlm_comment1)'))->groupBy('dlm_comment1')->get();
                $question2 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question2, count(district_level_id) AS y'))->groupBy('dlm_question2')->get();
                $dlm_comment2 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment2, count(dlm_comment2)'))->groupBy('dlm_comment2')->get();
                $question3 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question3, count(district_level_id) AS y'))->groupBy('dlm_question3')->get();
                $dlm_comment3 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment3, count(dlm_comment3)'))->groupBy('dlm_comment3')->get();
                $question4 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question4, count(district_level_id) AS y'))->groupBy('dlm_question4')->get();
                $dlm_comment4 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment4, count(dlm_comment4)'))->groupBy('dlm_comment4')->get();
                $question5 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question5, count(district_level_id) AS y'))->groupBy('dlm_question5')->get();
                $dlm_comment5 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment5, count(dlm_comment5)'))->groupBy('dlm_comment5')->get();
                $question6 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question6, count(district_level_id) AS y'))->groupBy('dlm_question6')->get();
                $dlm_comment6 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment6, count(dlm_comment6)'))->groupBy('dlm_comment6')->get();
                $question7 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question7, count(district_level_id) AS y'))->groupBy('dlm_question7')->get();
                $dlm_comment7 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment7, count(dlm_comment7)'))->groupBy('dlm_comment7')->get();
                $question8 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question8, count(district_level_id) AS y'))->groupBy('dlm_question8')->get();
                $dlm_comment8 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment8, count(dlm_comment8)'))->groupBy('dlm_comment8')->get();
                $question9 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question9, count(district_level_id) AS y'))->groupBy('dlm_question9')->get();
                $dlm_comment9 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment9, count(dlm_comment9)'))->groupBy('dlm_comment9')->get();
                $question10 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question10, count(district_level_id) AS y'))->groupBy('dlm_question10')->get();
                $dlm_comment10 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment10, count(dlm_comment10)'))->groupBy('dlm_comment10')->get();
                $question11 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question11, count(district_level_id) AS y'))->groupBy('dlm_question11')->get();
                $dlm_comment11 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment11, count(dlm_comment11)'))->groupBy('dlm_comment11')->get();
                $question12 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_question12, count(district_level_id) AS y'))->groupBy('dlm_question12')->get();
                $dlm_comment12 = VWDistrictLevelMonoter::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('dlm_comment12, count(dlm_comment12)'))->groupBy('dlm_comment12')->get();
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
            'dlm_comment1' => $dlm_comment1,
            'question2' => $question2,
            'dlm_comment2' => $dlm_comment2,
            'question3' => $question3,
            'dlm_comment3' => $dlm_comment3,
            'question4' => $question4,
            'dlm_comment4' => $dlm_comment4,
            'question5' => $question5,
            'dlm_comment5' => $dlm_comment5,
            'question6' => $question6,
            'dlm_comment6' => $dlm_comment6,
            'question7' => $question7,
            'dlm_comment7' => $dlm_comment7,
            'question8' => $question8,
            'dlm_comment8' => $dlm_comment8,
            'question9' => $question9,
            'dlm_comment9' => $dlm_comment9,
            'question10' => $question10,
            'dlm_comment10' => $dlm_comment10,
            'question11' => $question11,
            'dlm_comment11' => $dlm_comment11,
            'question12' => $question12,
            'dlm_comment12' => $dlm_comment12,
        ];
    }
}
