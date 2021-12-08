<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWDistrictPastorQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictPastorQuestionChartsController extends Controller
{
    static public function districtPastQues()
    {
        $total = VWDistrictPastorQuestion::count();
        $dob = VWDistrictPastorQuestion::select(DB::raw('pastorques_dob, age, count(pastorques_dob)'))->groupBy('pastorques_dob', 'age')->get();
        $pastorques_year = VWDistrictPastorQuestion::select(DB::raw('pastorques_year, count(pastorques_year)'))->groupBy('pastorques_year')->get();
        $pastorques_wife = VWDistrictPastorQuestion::select(DB::raw('pastorques_wife, count(pastorques_wife) AS y'))->groupBy('pastorques_wife')->get();
        $pastorques_comment1 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment1, count(pastorques_comment1)'))->groupBy('pastorques_comment1')->get();
        $pastorques_comment2 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment2, count(pastorques_comment2)'))->groupBy('pastorques_comment2')->get();
        $pastorques_comment3 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment3, count(pastorques_comment3)'))->groupBy('pastorques_comment3')->get();
        $pastorques_comment4 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment4, count(pastorques_comment4)'))->groupBy('pastorques_comment4')->get();
        $pastorques_comment5 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment5, count(pastorques_comment5)'))->groupBy('pastorques_comment5')->get();
        $pastorques_comment6 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment6, count(pastorques_comment6)'))->groupBy('pastorques_comment6')->get();
        $pastorques_comment7 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment7, count(pastorques_comment7)'))->groupBy('pastorques_comment7')->get();
        $pastorques_comment8 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment8, count(pastorques_comment8)'))->groupBy('pastorques_comment8')->get();
        $pastorques_comment9 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment9, count(pastorques_comment9)'))->groupBy('pastorques_comment9')->get();
        $pastorques_comment10 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment10, count(pastorques_comment10)'))->groupBy('pastorques_comment10')->get();
        $pastorques_comment11 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment11, count(pastorques_comment11)'))->groupBy('pastorques_comment11')->get();
        $pastorques_comment12 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment12, count(pastorques_comment12)'))->groupBy('pastorques_comment12')->get();
        $pastorques_comment13 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment13, count(pastorques_comment13)'))->groupBy('pastorques_comment13')->get();
        $pastorques_comment14 = VWDistrictPastorQuestion::select(DB::raw('pastorques_comment14, count(pastorques_comment14)'))->groupBy('pastorques_comment14')->get();
        
        return [
            'total' => $total,
            'dob' => $dob,
            'year' => $pastorques_year,
            'wife' => $pastorques_wife,
            'pastorques_comment1' => $pastorques_comment1,
            'pastorques_comment2' => $pastorques_comment2,
            'pastorques_comment3' => $pastorques_comment3,
            'pastorques_comment4' => $pastorques_comment4,
            'pastorques_comment5' => $pastorques_comment5,
            'pastorques_comment6' => $pastorques_comment6,
            'pastorques_comment7' => $pastorques_comment7,
            'pastorques_comment8' => $pastorques_comment8,
            'pastorques_comment9' => $pastorques_comment9,
            'pastorques_comment10' => $pastorques_comment10,
            'pastorques_comment11' => $pastorques_comment11,
            'pastorques_comment12' => $pastorques_comment12,
            'pastorques_comment13' => $pastorques_comment13,
            'pastorques_comment14' => $pastorques_comment14,
        ];  
    }
}
