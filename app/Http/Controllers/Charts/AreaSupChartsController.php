<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWAreaSupQuestions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AreaSupChartsController extends Controller
{
    static public function areaSup()
    {
        $total = VWAreaSupQuestions::count();
        $dob = VWAreaSupQuestions::select(DB::raw('areasupq_dob, age, count(areasupq_dob)'))->groupBy('areasupq_dob', 'age')->get();
        $areasupq_year = VWAreaSupQuestions::select(DB::raw('areasupq_year, count(areasupq_year)'))->groupBy('areasupq_year')->get();
        $areasupq_wife = VWAreaSupQuestions::select(DB::raw('areasupq_wife, count(areasupq_wife) AS y'))->groupBy('areasupq_wife')->get();
        $areasupq_comment1 = VWAreaSupQuestions::select(DB::raw('areasupq_comment1, count(areasupq_comment1)'))->groupBy('areasupq_comment1')->get();
        $areasupq_comment2 = VWAreaSupQuestions::select(DB::raw('areasupq_comment2, count(areasupq_comment2)'))->groupBy('areasupq_comment2')->get();
        $areasupq_comment3 = VWAreaSupQuestions::select(DB::raw('areasupq_comment3, count(areasupq_comment3)'))->groupBy('areasupq_comment3')->get();
        $areasupq_comment4 = VWAreaSupQuestions::select(DB::raw('areasupq_comment4, count(areasupq_comment4)'))->groupBy('areasupq_comment4')->get();
        $areasupq_comment5 = VWAreaSupQuestions::select(DB::raw('areasupq_comment5, count(areasupq_comment5)'))->groupBy('areasupq_comment5')->get();
        $areasupq_comment6 = VWAreaSupQuestions::select(DB::raw('areasupq_comment6, count(areasupq_comment6)'))->groupBy('areasupq_comment6')->get();
        $areasupq_comment7 = VWAreaSupQuestions::select(DB::raw('areasupq_comment7, count(areasupq_comment7)'))->groupBy('areasupq_comment7')->get();
        $areasupq_comment8 = VWAreaSupQuestions::select(DB::raw('areasupq_comment8, count(areasupq_comment8)'))->groupBy('areasupq_comment8')->get();
        $areasupq_comment9 = VWAreaSupQuestions::select(DB::raw('areasupq_comment9, count(areasupq_comment9)'))->groupBy('areasupq_comment9')->get();
        
        return [
            'total' => $total,
            'dob' => $dob,
            'year' => $areasupq_year,
            'wife'=> $areasupq_wife,
            'areasupq_comment1' => $areasupq_comment1,
            'areasupq_comment2' => $areasupq_comment2,
            'areasupq_comment3' => $areasupq_comment3,
            'areasupq_comment4' => $areasupq_comment4,
            'areasupq_comment5' => $areasupq_comment5,
            'areasupq_comment6' => $areasupq_comment6,
            'areasupq_comment7' => $areasupq_comment7,
            'areasupq_comment8' => $areasupq_comment8,
            'areasupq_comment9' => $areasupq_comment9,
        ];
    }
}
