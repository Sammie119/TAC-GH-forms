<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWReportBookingArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RecordBooksAreaChartsController extends Controller
{
    static public function recordBooksArea($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWReportBookingArea::count();
                $area_area = VWReportBookingArea::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                // $district_dist = VWReportBookingArea::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                // $local_loc = VWReportBookingArea::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingArea::select(DB::raw('rec_area_question1, count(record_id) AS y'))->groupBy('rec_area_question1')->get();
                $rec_area_comment1 = VWReportBookingArea::select(DB::raw('rec_area_comment1, count(rec_area_comment1)'))->groupBy('rec_area_comment1')->get();
                $question2 = VWReportBookingArea::select(DB::raw('rec_area_question2, count(record_id) AS y'))->groupBy('rec_area_question2')->get();
                $rec_area_comment2 = VWReportBookingArea::select(DB::raw('rec_area_comment2, count(rec_area_comment2)'))->groupBy('rec_area_comment2')->get();
                $question3 = VWReportBookingArea::select(DB::raw('rec_area_question3, count(record_id) AS y'))->groupBy('rec_area_question3')->get();
                $rec_area_comment3 = VWReportBookingArea::select(DB::raw('rec_area_comment3, count(rec_area_comment3)'))->groupBy('rec_area_comment3')->get();
                $question4 = VWReportBookingArea::select(DB::raw('rec_area_question4, count(record_id) AS y'))->groupBy('rec_area_question4')->get();
                $rec_area_comment4 = VWReportBookingArea::select(DB::raw('rec_area_comment4, count(rec_area_comment4)'))->groupBy('rec_area_comment4')->get();
                $question5 = VWReportBookingArea::select(DB::raw('rec_area_question5, count(record_id) AS y'))->groupBy('rec_area_question5')->get();
                $rec_area_comment5 = VWReportBookingArea::select(DB::raw('rec_area_comment5, count(rec_area_comment5)'))->groupBy('rec_area_comment5')->get();
                $question6 = VWReportBookingArea::select(DB::raw('rec_area_question6, count(record_id) AS y'))->groupBy('rec_area_question6')->get();
                $rec_area_comment6 = VWReportBookingArea::select(DB::raw('rec_area_comment6, count(rec_area_comment6)'))->groupBy('rec_area_comment6')->get();
                $question7 = VWReportBookingArea::select(DB::raw('rec_area_question7, count(record_id) AS y'))->groupBy('rec_area_question7')->get();
                $rec_area_comment7 = VWReportBookingArea::select(DB::raw('rec_area_comment7, count(rec_area_comment7)'))->groupBy('rec_area_comment7')->get();
                $question8 = VWReportBookingArea::select(DB::raw('rec_area_question8, count(record_id) AS y'))->groupBy('rec_area_question8')->get();
                $rec_area_comment8 = VWReportBookingArea::select(DB::raw('rec_area_comment8, count(rec_area_comment8)'))->groupBy('rec_area_comment8')->get();
                $question9 = VWReportBookingArea::select(DB::raw('rec_area_question9, count(record_id) AS y'))->groupBy('rec_area_question9')->get();
                $rec_area_comment9 = VWReportBookingArea::select(DB::raw('rec_area_comment9, count(rec_area_comment9)'))->groupBy('rec_area_comment9')->get();
                $question10 = VWReportBookingArea::select(DB::raw('rec_area_question10, count(record_id) AS y'))->groupBy('rec_area_question10')->get();
                $rec_area_comment10 = VWReportBookingArea::select(DB::raw('rec_area_comment10, count(rec_area_comment10)'))->groupBy('rec_area_comment10')->get();
                $question11 = VWReportBookingArea::select(DB::raw('rec_area_question11, count(record_id) AS y'))->groupBy('rec_area_question11')->get();
                $rec_area_comment11 = VWReportBookingArea::select(DB::raw('rec_area_comment11, count(rec_area_comment11)'))->groupBy('rec_area_comment11')->get();
                $question12 = VWReportBookingArea::select(DB::raw('rec_area_question12, count(record_id) AS y'))->groupBy('rec_area_question12')->get();
                $rec_area_comment12 = VWReportBookingArea::select(DB::raw('rec_area_comment12, count(rec_area_comment12)'))->groupBy('rec_area_comment12')->get();
                $question13 = VWReportBookingArea::select(DB::raw('rec_area_question13, count(record_id) AS y'))->groupBy('rec_area_question13')->get();
                $rec_area_comment13 = VWReportBookingArea::select(DB::raw('rec_area_comment13, count(rec_area_comment13)'))->groupBy('rec_area_comment13')->get();
                $question14 = VWReportBookingArea::select(DB::raw('rec_area_question14, count(record_id) AS y'))->groupBy('rec_area_question14')->get();
                $rec_area_comment14 = VWReportBookingArea::select(DB::raw('rec_area_comment14, count(rec_area_comment14)'))->groupBy('rec_area_comment14')->get();
                $question15 = VWReportBookingArea::select(DB::raw('rec_area_question15, count(record_id) AS y'))->groupBy('rec_area_question15')->get();
                $rec_area_comment15 = VWReportBookingArea::select(DB::raw('rec_area_comment15, count(rec_area_comment15)'))->groupBy('rec_area_comment15')->get();
                $question16 = VWReportBookingArea::select(DB::raw('rec_area_question16, count(record_id) AS y'))->groupBy('rec_area_question16')->get();
                $rec_area_comment16 = VWReportBookingArea::select(DB::raw('rec_area_comment16, count(rec_area_comment16)'))->groupBy('rec_area_comment16')->get();
                $question17 = VWReportBookingArea::select(DB::raw('rec_area_question17, count(record_id) AS y'))->groupBy('rec_area_question17')->get();
                $rec_area_comment17 = VWReportBookingArea::select(DB::raw('rec_area_comment17, count(rec_area_comment17)'))->groupBy('rec_area_comment17')->get();
                $question18 = VWReportBookingArea::select(DB::raw('rec_area_question18, count(record_id) AS y'))->groupBy('rec_area_question18')->get();
                $rec_area_comment18 = VWReportBookingArea::select(DB::raw('rec_area_comment18, count(rec_area_comment18)'))->groupBy('rec_area_comment18')->get();
                $question19 = VWReportBookingArea::select(DB::raw('rec_area_question19, count(record_id) AS y'))->groupBy('rec_area_question19')->get();
                $rec_area_comment19 = VWReportBookingArea::select(DB::raw('rec_area_comment19, count(rec_area_comment19)'))->groupBy('rec_area_comment19')->get();
                $question20 = VWReportBookingArea::select(DB::raw('rec_area_question20, count(record_id) AS y'))->groupBy('rec_area_question20')->get();
                $rec_area_comment20 = VWReportBookingArea::select(DB::raw('rec_area_comment20, count(rec_area_comment20)'))->groupBy('rec_area_comment20')->get();
                $question21 = VWReportBookingArea::select(DB::raw('rec_area_question21, count(record_id) AS y'))->groupBy('rec_area_question21')->get();
                $rec_area_comment21 = VWReportBookingArea::select(DB::raw('rec_area_comment21, count(rec_area_comment21)'))->groupBy('rec_area_comment21')->get();

                break;
        
            case 'Area':
                $total = VWReportBookingArea::where('area', 'ILIKE', $area)->count();
                $area_area = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                // $district_dist = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                // $local_loc = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question1, count(record_id) AS y'))->groupBy('rec_area_question1')->get();
                $rec_area_comment1 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment1, count(rec_area_comment1)'))->groupBy('rec_area_comment1')->get();
                $question2 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question2, count(record_id) AS y'))->groupBy('rec_area_question2')->get();
                $rec_area_comment2 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment2, count(rec_area_comment2)'))->groupBy('rec_area_comment2')->get();
                $question3 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question3, count(record_id) AS y'))->groupBy('rec_area_question3')->get();
                $rec_area_comment3 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment3, count(rec_area_comment3)'))->groupBy('rec_area_comment3')->get();
                $question4 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question4, count(record_id) AS y'))->groupBy('rec_area_question4')->get();
                $rec_area_comment4 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment4, count(rec_area_comment4)'))->groupBy('rec_area_comment4')->get();
                $question5 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question5, count(record_id) AS y'))->groupBy('rec_area_question5')->get();
                $rec_area_comment5 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment5, count(rec_area_comment5)'))->groupBy('rec_area_comment5')->get();
                $question6 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question6, count(record_id) AS y'))->groupBy('rec_area_question6')->get();
                $rec_area_comment6 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment6, count(rec_area_comment6)'))->groupBy('rec_area_comment6')->get();
                $question7 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question7, count(record_id) AS y'))->groupBy('rec_area_question7')->get();
                $rec_area_comment7 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment7, count(rec_area_comment7)'))->groupBy('rec_area_comment7')->get();
                $question8 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question8, count(record_id) AS y'))->groupBy('rec_area_question8')->get();
                $rec_area_comment8 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment8, count(rec_area_comment8)'))->groupBy('rec_area_comment8')->get();
                $question9 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question9, count(record_id) AS y'))->groupBy('rec_area_question9')->get();
                $rec_area_comment9 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment9, count(rec_area_comment9)'))->groupBy('rec_area_comment9')->get();
                $question10 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question10, count(record_id) AS y'))->groupBy('rec_area_question10')->get();
                $rec_area_comment10 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment10, count(rec_area_comment10)'))->groupBy('rec_area_comment10')->get();
                $question11 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question11, count(record_id) AS y'))->groupBy('rec_area_question11')->get();
                $rec_area_comment11 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment11, count(rec_area_comment11)'))->groupBy('rec_area_comment11')->get();
                $question12 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question12, count(record_id) AS y'))->groupBy('rec_area_question12')->get();
                $rec_area_comment12 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment12, count(rec_area_comment12)'))->groupBy('rec_area_comment12')->get();
                $question13 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question13, count(record_id) AS y'))->groupBy('rec_area_question13')->get();
                $rec_area_comment13 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment13, count(rec_area_comment13)'))->groupBy('rec_area_comment13')->get();
                $question14 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question14, count(record_id) AS y'))->groupBy('rec_area_question14')->get();
                $rec_area_comment14 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment14, count(rec_area_comment14)'))->groupBy('rec_area_comment14')->get();
                $question15 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question15, count(record_id) AS y'))->groupBy('rec_area_question15')->get();
                $rec_area_comment15 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment15, count(rec_area_comment15)'))->groupBy('rec_area_comment15')->get();
                $question16 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question16, count(record_id) AS y'))->groupBy('rec_area_question16')->get();
                $rec_area_comment16 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment16, count(rec_area_comment16)'))->groupBy('rec_area_comment16')->get();
                $question17 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question17, count(record_id) AS y'))->groupBy('rec_area_question17')->get();
                $rec_area_comment17 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment17, count(rec_area_comment17)'))->groupBy('rec_area_comment17')->get();
                $question18 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question18, count(record_id) AS y'))->groupBy('rec_area_question18')->get();
                $rec_area_comment18 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment18, count(rec_area_comment18)'))->groupBy('rec_area_comment18')->get();
                $question19 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question19, count(record_id) AS y'))->groupBy('rec_area_question19')->get();
                $rec_area_comment19 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment19, count(rec_area_comment19)'))->groupBy('rec_area_comment19')->get();
                $question20 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question20, count(record_id) AS y'))->groupBy('rec_area_question20')->get();
                $rec_area_comment20 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment20, count(rec_area_comment20)'))->groupBy('rec_area_comment20')->get();
                $question21 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question21, count(record_id) AS y'))->groupBy('rec_area_question21')->get();
                $rec_area_comment21 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment21, count(rec_area_comment21)'))->groupBy('rec_area_comment21')->get();
                
                break;
        
            case 'District':
                $total = VWReportBookingArea::where('area', 'ILIKE', $area)->count();
                $area_area = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                // $district_dist = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                // $local_loc = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question1, count(record_id) AS y'))->groupBy('rec_area_question1')->get();
                $rec_area_comment1 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment1, count(rec_area_comment1)'))->groupBy('rec_area_comment1')->get();
                $question2 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question2, count(record_id) AS y'))->groupBy('rec_area_question2')->get();
                $rec_area_comment2 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment2, count(rec_area_comment2)'))->groupBy('rec_area_comment2')->get();
                $question3 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question3, count(record_id) AS y'))->groupBy('rec_area_question3')->get();
                $rec_area_comment3 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment3, count(rec_area_comment3)'))->groupBy('rec_area_comment3')->get();
                $question4 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question4, count(record_id) AS y'))->groupBy('rec_area_question4')->get();
                $rec_area_comment4 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment4, count(rec_area_comment4)'))->groupBy('rec_area_comment4')->get();
                $question5 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question5, count(record_id) AS y'))->groupBy('rec_area_question5')->get();
                $rec_area_comment5 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment5, count(rec_area_comment5)'))->groupBy('rec_area_comment5')->get();
                $question6 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question6, count(record_id) AS y'))->groupBy('rec_area_question6')->get();
                $rec_area_comment6 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment6, count(rec_area_comment6)'))->groupBy('rec_area_comment6')->get();
                $question7 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question7, count(record_id) AS y'))->groupBy('rec_area_question7')->get();
                $rec_area_comment7 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment7, count(rec_area_comment7)'))->groupBy('rec_area_comment7')->get();
                $question8 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question8, count(record_id) AS y'))->groupBy('rec_area_question8')->get();
                $rec_area_comment8 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment8, count(rec_area_comment8)'))->groupBy('rec_area_comment8')->get();
                $question9 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question9, count(record_id) AS y'))->groupBy('rec_area_question9')->get();
                $rec_area_comment9 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment9, count(rec_area_comment9)'))->groupBy('rec_area_comment9')->get();
                $question10 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question10, count(record_id) AS y'))->groupBy('rec_area_question10')->get();
                $rec_area_comment10 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment10, count(rec_area_comment10)'))->groupBy('rec_area_comment10')->get();
                $question11 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question11, count(record_id) AS y'))->groupBy('rec_area_question11')->get();
                $rec_area_comment11 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment11, count(rec_area_comment11)'))->groupBy('rec_area_comment11')->get();
                $question12 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question12, count(record_id) AS y'))->groupBy('rec_area_question12')->get();
                $rec_area_comment12 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment12, count(rec_area_comment12)'))->groupBy('rec_area_comment12')->get();
                $question13 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question13, count(record_id) AS y'))->groupBy('rec_area_question13')->get();
                $rec_area_comment13 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment13, count(rec_area_comment13)'))->groupBy('rec_area_comment13')->get();
                $question14 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question14, count(record_id) AS y'))->groupBy('rec_area_question14')->get();
                $rec_area_comment14 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment14, count(rec_area_comment14)'))->groupBy('rec_area_comment14')->get();
                $question15 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question15, count(record_id) AS y'))->groupBy('rec_area_question15')->get();
                $rec_area_comment15 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment15, count(rec_area_comment15)'))->groupBy('rec_area_comment15')->get();
                $question16 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question16, count(record_id) AS y'))->groupBy('rec_area_question16')->get();
                $rec_area_comment16 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment16, count(rec_area_comment16)'))->groupBy('rec_area_comment16')->get();
                $question17 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question17, count(record_id) AS y'))->groupBy('rec_area_question17')->get();
                $rec_area_comment17 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment17, count(rec_area_comment17)'))->groupBy('rec_area_comment17')->get();
                $question18 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question18, count(record_id) AS y'))->groupBy('rec_area_question18')->get();
                $rec_area_comment18 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment18, count(rec_area_comment18)'))->groupBy('rec_area_comment18')->get();
                $question19 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question19, count(record_id) AS y'))->groupBy('rec_area_question19')->get();
                $rec_area_comment19 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment19, count(rec_area_comment19)'))->groupBy('rec_area_comment19')->get();
                $question20 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question20, count(record_id) AS y'))->groupBy('rec_area_question20')->get();
                $rec_area_comment20 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment20, count(rec_area_comment20)'))->groupBy('rec_area_comment20')->get();
                $question21 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question21, count(record_id) AS y'))->groupBy('rec_area_question21')->get();
                $rec_area_comment21 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment21, count(rec_area_comment21)'))->groupBy('rec_area_comment21')->get();
                
                break;
        
            case 'Local':
                $total = VWReportBookingArea::where('area', 'ILIKE', $area)->count();
                $area_area = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                // $district_dist = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                // $local_loc = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question1, count(record_id) AS y'))->groupBy('rec_area_question1')->get();
                $rec_area_comment1 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment1, count(rec_area_comment1)'))->groupBy('rec_area_comment1')->get();
                $question2 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question2, count(record_id) AS y'))->groupBy('rec_area_question2')->get();
                $rec_area_comment2 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment2, count(rec_area_comment2)'))->groupBy('rec_area_comment2')->get();
                $question3 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question3, count(record_id) AS y'))->groupBy('rec_area_question3')->get();
                $rec_area_comment3 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment3, count(rec_area_comment3)'))->groupBy('rec_area_comment3')->get();
                $question4 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question4, count(record_id) AS y'))->groupBy('rec_area_question4')->get();
                $rec_area_comment4 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment4, count(rec_area_comment4)'))->groupBy('rec_area_comment4')->get();
                $question5 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question5, count(record_id) AS y'))->groupBy('rec_area_question5')->get();
                $rec_area_comment5 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment5, count(rec_area_comment5)'))->groupBy('rec_area_comment5')->get();
                $question6 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question6, count(record_id) AS y'))->groupBy('rec_area_question6')->get();
                $rec_area_comment6 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment6, count(rec_area_comment6)'))->groupBy('rec_area_comment6')->get();
                $question7 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question7, count(record_id) AS y'))->groupBy('rec_area_question7')->get();
                $rec_area_comment7 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment7, count(rec_area_comment7)'))->groupBy('rec_area_comment7')->get();
                $question8 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question8, count(record_id) AS y'))->groupBy('rec_area_question8')->get();
                $rec_area_comment8 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment8, count(rec_area_comment8)'))->groupBy('rec_area_comment8')->get();
                $question9 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question9, count(record_id) AS y'))->groupBy('rec_area_question9')->get();
                $rec_area_comment9 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment9, count(rec_area_comment9)'))->groupBy('rec_area_comment9')->get();
                $question10 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question10, count(record_id) AS y'))->groupBy('rec_area_question10')->get();
                $rec_area_comment10 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment10, count(rec_area_comment10)'))->groupBy('rec_area_comment10')->get();
                $question11 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question11, count(record_id) AS y'))->groupBy('rec_area_question11')->get();
                $rec_area_comment11 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment11, count(rec_area_comment11)'))->groupBy('rec_area_comment11')->get();
                $question12 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question12, count(record_id) AS y'))->groupBy('rec_area_question12')->get();
                $rec_area_comment12 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment12, count(rec_area_comment12)'))->groupBy('rec_area_comment12')->get();
                $question13 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question13, count(record_id) AS y'))->groupBy('rec_area_question13')->get();
                $rec_area_comment13 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment13, count(rec_area_comment13)'))->groupBy('rec_area_comment13')->get();
                $question14 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question14, count(record_id) AS y'))->groupBy('rec_area_question14')->get();
                $rec_area_comment14 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment14, count(rec_area_comment14)'))->groupBy('rec_area_comment14')->get();
                $question15 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question15, count(record_id) AS y'))->groupBy('rec_area_question15')->get();
                $rec_area_comment15 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment15, count(rec_area_comment15)'))->groupBy('rec_area_comment15')->get();
                $question16 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question16, count(record_id) AS y'))->groupBy('rec_area_question16')->get();
                $rec_area_comment16 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment16, count(rec_area_comment16)'))->groupBy('rec_area_comment16')->get();
                $question17 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question17, count(record_id) AS y'))->groupBy('rec_area_question17')->get();
                $rec_area_comment17 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment17, count(rec_area_comment17)'))->groupBy('rec_area_comment17')->get();
                $question18 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question18, count(record_id) AS y'))->groupBy('rec_area_question18')->get();
                $rec_area_comment18 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment18, count(rec_area_comment18)'))->groupBy('rec_area_comment18')->get();
                $question19 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question19, count(record_id) AS y'))->groupBy('rec_area_question19')->get();
                $rec_area_comment19 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment19, count(rec_area_comment19)'))->groupBy('rec_area_comment19')->get();
                $question20 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question20, count(record_id) AS y'))->groupBy('rec_area_question20')->get();
                $rec_area_comment20 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment20, count(rec_area_comment20)'))->groupBy('rec_area_comment20')->get();
                $question21 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_question21, count(record_id) AS y'))->groupBy('rec_area_question21')->get();
                $rec_area_comment21 = VWReportBookingArea::where('area', 'ILIKE', $area)->select(DB::raw('rec_area_comment21, count(rec_area_comment21)'))->groupBy('rec_area_comment21')->get();

                break;
            
            default:
                return Session::flash('error', 'Wrong Input');
                break;
        }

        return [
            'total' => $total,
            'area' => $area_area,
            'question1' => $question1,
            'rec_area_comment1' => $rec_area_comment1,
            'question2' => $question2,
            'rec_area_comment2' => $rec_area_comment2,
            'question3' => $question3,
            'rec_area_comment3' => $rec_area_comment3,
            'question4' => $question4,
            'rec_area_comment4' => $rec_area_comment4,
            'question5' => $question5,
            'rec_area_comment5' => $rec_area_comment5,
            'question6' => $question6,
            'rec_area_comment6' => $rec_area_comment6,
            'question7' => $question7,
            'rec_area_comment7' => $rec_area_comment7,
            'question8' => $question8,
            'rec_area_comment8' => $rec_area_comment8,
            'question9' => $question9,
            'rec_area_comment9' => $rec_area_comment9,
            'question10' => $question10,
            'rec_area_comment10' => $rec_area_comment10,
            'question11' => $question11,
            'rec_area_comment11' => $rec_area_comment11,
            'question12' => $question12,
            'rec_area_comment12' => $rec_area_comment12,
            'question13' => $question13,
            'rec_area_comment13' => $rec_area_comment13,
            'question14' => $question14,
            'rec_area_comment14' => $rec_area_comment14,
            'question15' => $question15,
            'rec_area_comment15' => $rec_area_comment15,
            'question16' => $question16,
            'rec_area_comment16' => $rec_area_comment16,
            'question17' => $question17,
            'rec_area_comment17' => $rec_area_comment17,
            'question18' => $question18,
            'rec_area_comment18' => $rec_area_comment18,
            'question19' => $question19,
            'rec_area_comment19' => $rec_area_comment19,
            'question20' => $question20,
            'rec_area_comment20' => $rec_area_comment20,
            'question21' => $question21,
            'rec_area_comment21' => $rec_area_comment21,
        ];
    }
}
