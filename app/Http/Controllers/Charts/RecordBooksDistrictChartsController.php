<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWReportBookingDistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RecordBooksDistrictChartsController extends Controller
{
    static public function recordBooksDistrict($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWReportBookingDistrict::count();
                $area_area = VWReportBookingDistrict::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWReportBookingDistrict::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                // $local_loc = VWReportBookingDistrict::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingDistrict::select(DB::raw('rec_dist_question1, count(record_id) AS y'))->groupBy('rec_dist_question1')->get();
                $rec_dist_comment1 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment1, count(rec_dist_comment1)'))->groupBy('rec_dist_comment1')->get();
                $question2 = VWReportBookingDistrict::select(DB::raw('rec_dist_question2, count(record_id) AS y'))->groupBy('rec_dist_question2')->get();
                $rec_dist_comment2 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment2, count(rec_dist_comment2)'))->groupBy('rec_dist_comment2')->get();
                $question3 = VWReportBookingDistrict::select(DB::raw('rec_dist_question3, count(record_id) AS y'))->groupBy('rec_dist_question3')->get();
                $rec_dist_comment3 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment3, count(rec_dist_comment3)'))->groupBy('rec_dist_comment3')->get();
                $question4 = VWReportBookingDistrict::select(DB::raw('rec_dist_question4, count(record_id) AS y'))->groupBy('rec_dist_question4')->get();
                $rec_dist_comment4 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment4, count(rec_dist_comment4)'))->groupBy('rec_dist_comment4')->get();
                $question5 = VWReportBookingDistrict::select(DB::raw('rec_dist_question5, count(record_id) AS y'))->groupBy('rec_dist_question5')->get();
                $rec_dist_comment5 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment5, count(rec_dist_comment5)'))->groupBy('rec_dist_comment5')->get();
                $question6 = VWReportBookingDistrict::select(DB::raw('rec_dist_question6, count(record_id) AS y'))->groupBy('rec_dist_question6')->get();
                $rec_dist_comment6 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment6, count(rec_dist_comment6)'))->groupBy('rec_dist_comment6')->get();
                $question7 = VWReportBookingDistrict::select(DB::raw('rec_dist_question7, count(record_id) AS y'))->groupBy('rec_dist_question7')->get();
                $rec_dist_comment7 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment7, count(rec_dist_comment7)'))->groupBy('rec_dist_comment7')->get();
                $question8 = VWReportBookingDistrict::select(DB::raw('rec_dist_question8, count(record_id) AS y'))->groupBy('rec_dist_question8')->get();
                $rec_dist_comment8 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment8, count(rec_dist_comment8)'))->groupBy('rec_dist_comment8')->get();
                $question9 = VWReportBookingDistrict::select(DB::raw('rec_dist_question9, count(record_id) AS y'))->groupBy('rec_dist_question9')->get();
                $rec_dist_comment9 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment9, count(rec_dist_comment9)'))->groupBy('rec_dist_comment9')->get();
                $question10 = VWReportBookingDistrict::select(DB::raw('rec_dist_question10, count(record_id) AS y'))->groupBy('rec_dist_question10')->get();
                $rec_dist_comment10 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment10, count(rec_dist_comment10)'))->groupBy('rec_dist_comment10')->get();
                $question11 = VWReportBookingDistrict::select(DB::raw('rec_dist_question11, count(record_id) AS y'))->groupBy('rec_dist_question11')->get();
                $rec_dist_comment11 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment11, count(rec_dist_comment11)'))->groupBy('rec_dist_comment11')->get();
                $question12 = VWReportBookingDistrict::select(DB::raw('rec_dist_question12, count(record_id) AS y'))->groupBy('rec_dist_question12')->get();
                $rec_dist_comment12 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment12, count(rec_dist_comment12)'))->groupBy('rec_dist_comment12')->get();
                $question13 = VWReportBookingDistrict::select(DB::raw('rec_dist_question13, count(record_id) AS y'))->groupBy('rec_dist_question13')->get();
                $rec_dist_comment13 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment13, count(rec_dist_comment13)'))->groupBy('rec_dist_comment13')->get();
                $question14 = VWReportBookingDistrict::select(DB::raw('rec_dist_question14, count(record_id) AS y'))->groupBy('rec_dist_question14')->get();
                $rec_dist_comment14 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment14, count(rec_dist_comment14)'))->groupBy('rec_dist_comment14')->get();
                $question15 = VWReportBookingDistrict::select(DB::raw('rec_dist_question15, count(record_id) AS y'))->groupBy('rec_dist_question15')->get();
                $rec_dist_comment15 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment15, count(rec_dist_comment15)'))->groupBy('rec_dist_comment15')->get();
                $question16 = VWReportBookingDistrict::select(DB::raw('rec_dist_question16, count(record_id) AS y'))->groupBy('rec_dist_question16')->get();
                $rec_dist_comment16 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment16, count(rec_dist_comment16)'))->groupBy('rec_dist_comment16')->get();
                $question17 = VWReportBookingDistrict::select(DB::raw('rec_dist_question17, count(record_id) AS y'))->groupBy('rec_dist_question17')->get();
                $rec_dist_comment17 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment17, count(rec_dist_comment17)'))->groupBy('rec_dist_comment17')->get();
                $question18 = VWReportBookingDistrict::select(DB::raw('rec_dist_question18, count(record_id) AS y'))->groupBy('rec_dist_question18')->get();
                $rec_dist_comment18 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment18, count(rec_dist_comment18)'))->groupBy('rec_dist_comment18')->get();
                $question19 = VWReportBookingDistrict::select(DB::raw('rec_dist_question19, count(record_id) AS y'))->groupBy('rec_dist_question19')->get();
                $rec_dist_comment19 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment19, count(rec_dist_comment19)'))->groupBy('rec_dist_comment19')->get();
                $question20 = VWReportBookingDistrict::select(DB::raw('rec_dist_question20, count(record_id) AS y'))->groupBy('rec_dist_question20')->get();
                $rec_dist_comment20 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment20, count(rec_dist_comment20)'))->groupBy('rec_dist_comment20')->get();
                $question21 = VWReportBookingDistrict::select(DB::raw('rec_dist_question21, count(record_id) AS y'))->groupBy('rec_dist_question21')->get();
                $rec_dist_comment21 = VWReportBookingDistrict::select(DB::raw('rec_dist_comment21, count(rec_dist_comment21)'))->groupBy('rec_dist_comment21')->get();

                break;
        
            case 'Area':
                $total = VWReportBookingDistrict::where('area', 'ILIKE', $area)->count();
                $area_area = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                // $local_loc = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question1, count(record_id) AS y'))->groupBy('rec_dist_question1')->get();
                $rec_dist_comment1 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment1, count(rec_dist_comment1)'))->groupBy('rec_dist_comment1')->get();
                $question2 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question2, count(record_id) AS y'))->groupBy('rec_dist_question2')->get();
                $rec_dist_comment2 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment2, count(rec_dist_comment2)'))->groupBy('rec_dist_comment2')->get();
                $question3 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question3, count(record_id) AS y'))->groupBy('rec_dist_question3')->get();
                $rec_dist_comment3 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment3, count(rec_dist_comment3)'))->groupBy('rec_dist_comment3')->get();
                $question4 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question4, count(record_id) AS y'))->groupBy('rec_dist_question4')->get();
                $rec_dist_comment4 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment4, count(rec_dist_comment4)'))->groupBy('rec_dist_comment4')->get();
                $question5 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question5, count(record_id) AS y'))->groupBy('rec_dist_question5')->get();
                $rec_dist_comment5 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment5, count(rec_dist_comment5)'))->groupBy('rec_dist_comment5')->get();
                $question6 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question6, count(record_id) AS y'))->groupBy('rec_dist_question6')->get();
                $rec_dist_comment6 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment6, count(rec_dist_comment6)'))->groupBy('rec_dist_comment6')->get();
                $question7 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question7, count(record_id) AS y'))->groupBy('rec_dist_question7')->get();
                $rec_dist_comment7 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment7, count(rec_dist_comment7)'))->groupBy('rec_dist_comment7')->get();
                $question8 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question8, count(record_id) AS y'))->groupBy('rec_dist_question8')->get();
                $rec_dist_comment8 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment8, count(rec_dist_comment8)'))->groupBy('rec_dist_comment8')->get();
                $question9 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question9, count(record_id) AS y'))->groupBy('rec_dist_question9')->get();
                $rec_dist_comment9 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment9, count(rec_dist_comment9)'))->groupBy('rec_dist_comment9')->get();
                $question10 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question10, count(record_id) AS y'))->groupBy('rec_dist_question10')->get();
                $rec_dist_comment10 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment10, count(rec_dist_comment10)'))->groupBy('rec_dist_comment10')->get();
                $question11 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question11, count(record_id) AS y'))->groupBy('rec_dist_question11')->get();
                $rec_dist_comment11 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment11, count(rec_dist_comment11)'))->groupBy('rec_dist_comment11')->get();
                $question12 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question12, count(record_id) AS y'))->groupBy('rec_dist_question12')->get();
                $rec_dist_comment12 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment12, count(rec_dist_comment12)'))->groupBy('rec_dist_comment12')->get();
                $question13 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question13, count(record_id) AS y'))->groupBy('rec_dist_question13')->get();
                $rec_dist_comment13 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment13, count(rec_dist_comment13)'))->groupBy('rec_dist_comment13')->get();
                $question14 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question14, count(record_id) AS y'))->groupBy('rec_dist_question14')->get();
                $rec_dist_comment14 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment14, count(rec_dist_comment14)'))->groupBy('rec_dist_comment14')->get();
                $question15 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question15, count(record_id) AS y'))->groupBy('rec_dist_question15')->get();
                $rec_dist_comment15 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment15, count(rec_dist_comment15)'))->groupBy('rec_dist_comment15')->get();
                $question16 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question16, count(record_id) AS y'))->groupBy('rec_dist_question16')->get();
                $rec_dist_comment16 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment16, count(rec_dist_comment16)'))->groupBy('rec_dist_comment16')->get();
                $question17 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question17, count(record_id) AS y'))->groupBy('rec_dist_question17')->get();
                $rec_dist_comment17 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment17, count(rec_dist_comment17)'))->groupBy('rec_dist_comment17')->get();
                $question18 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question18, count(record_id) AS y'))->groupBy('rec_dist_question18')->get();
                $rec_dist_comment18 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment18, count(rec_dist_comment18)'))->groupBy('rec_dist_comment18')->get();
                $question19 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question19, count(record_id) AS y'))->groupBy('rec_dist_question19')->get();
                $rec_dist_comment19 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment19, count(rec_dist_comment19)'))->groupBy('rec_dist_comment19')->get();
                $question20 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question20, count(record_id) AS y'))->groupBy('rec_dist_question20')->get();
                $rec_dist_comment20 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment20, count(rec_dist_comment20)'))->groupBy('rec_dist_comment20')->get();
                $question21 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_question21, count(record_id) AS y'))->groupBy('rec_dist_question21')->get();
                $rec_dist_comment21 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->select(DB::raw('rec_dist_comment21, count(rec_dist_comment21)'))->groupBy('rec_dist_comment21')->get();
                
                break;
        
            case 'District':
                $total = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                // $local_loc = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question1, count(record_id) AS y'))->groupBy('rec_dist_question1')->get();
                $rec_dist_comment1 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment1, count(rec_dist_comment1)'))->groupBy('rec_dist_comment1')->get();
                $question2 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question2, count(record_id) AS y'))->groupBy('rec_dist_question2')->get();
                $rec_dist_comment2 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment2, count(rec_dist_comment2)'))->groupBy('rec_dist_comment2')->get();
                $question3 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question3, count(record_id) AS y'))->groupBy('rec_dist_question3')->get();
                $rec_dist_comment3 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment3, count(rec_dist_comment3)'))->groupBy('rec_dist_comment3')->get();
                $question4 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question4, count(record_id) AS y'))->groupBy('rec_dist_question4')->get();
                $rec_dist_comment4 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment4, count(rec_dist_comment4)'))->groupBy('rec_dist_comment4')->get();
                $question5 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question5, count(record_id) AS y'))->groupBy('rec_dist_question5')->get();
                $rec_dist_comment5 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment5, count(rec_dist_comment5)'))->groupBy('rec_dist_comment5')->get();
                $question6 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question6, count(record_id) AS y'))->groupBy('rec_dist_question6')->get();
                $rec_dist_comment6 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment6, count(rec_dist_comment6)'))->groupBy('rec_dist_comment6')->get();
                $question7 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question7, count(record_id) AS y'))->groupBy('rec_dist_question7')->get();
                $rec_dist_comment7 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment7, count(rec_dist_comment7)'))->groupBy('rec_dist_comment7')->get();
                $question8 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question8, count(record_id) AS y'))->groupBy('rec_dist_question8')->get();
                $rec_dist_comment8 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment8, count(rec_dist_comment8)'))->groupBy('rec_dist_comment8')->get();
                $question9 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question9, count(record_id) AS y'))->groupBy('rec_dist_question9')->get();
                $rec_dist_comment9 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment9, count(rec_dist_comment9)'))->groupBy('rec_dist_comment9')->get();
                $question10 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question10, count(record_id) AS y'))->groupBy('rec_dist_question10')->get();
                $rec_dist_comment10 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment10, count(rec_dist_comment10)'))->groupBy('rec_dist_comment10')->get();
                $question11 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question11, count(record_id) AS y'))->groupBy('rec_dist_question11')->get();
                $rec_dist_comment11 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment11, count(rec_dist_comment11)'))->groupBy('rec_dist_comment11')->get();
                $question12 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question12, count(record_id) AS y'))->groupBy('rec_dist_question12')->get();
                $rec_dist_comment12 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment12, count(rec_dist_comment12)'))->groupBy('rec_dist_comment12')->get();
                $question13 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question13, count(record_id) AS y'))->groupBy('rec_dist_question13')->get();
                $rec_dist_comment13 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment13, count(rec_dist_comment13)'))->groupBy('rec_dist_comment13')->get();
                $question14 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question14, count(record_id) AS y'))->groupBy('rec_dist_question14')->get();
                $rec_dist_comment14 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment14, count(rec_dist_comment14)'))->groupBy('rec_dist_comment14')->get();
                $question15 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question15, count(record_id) AS y'))->groupBy('rec_dist_question15')->get();
                $rec_dist_comment15 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment15, count(rec_dist_comment15)'))->groupBy('rec_dist_comment15')->get();
                $question16 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question16, count(record_id) AS y'))->groupBy('rec_dist_question16')->get();
                $rec_dist_comment16 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment16, count(rec_dist_comment16)'))->groupBy('rec_dist_comment16')->get();
                $question17 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question17, count(record_id) AS y'))->groupBy('rec_dist_question17')->get();
                $rec_dist_comment17 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment17, count(rec_dist_comment17)'))->groupBy('rec_dist_comment17')->get();
                $question18 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question18, count(record_id) AS y'))->groupBy('rec_dist_question18')->get();
                $rec_dist_comment18 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment18, count(rec_dist_comment18)'))->groupBy('rec_dist_comment18')->get();
                $question19 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question19, count(record_id) AS y'))->groupBy('rec_dist_question19')->get();
                $rec_dist_comment19 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment19, count(rec_dist_comment19)'))->groupBy('rec_dist_comment19')->get();
                $question20 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question20, count(record_id) AS y'))->groupBy('rec_dist_question20')->get();
                $rec_dist_comment20 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment20, count(rec_dist_comment20)'))->groupBy('rec_dist_comment20')->get();
                $question21 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question21, count(record_id) AS y'))->groupBy('rec_dist_question21')->get();
                $rec_dist_comment21 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment21, count(rec_dist_comment21)'))->groupBy('rec_dist_comment21')->get();
                
                break;
        
            case 'Local':
                $total = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                // $local_loc = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question1, count(record_id) AS y'))->groupBy('rec_dist_question1')->get();
                $rec_dist_comment1 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment1, count(rec_dist_comment1)'))->groupBy('rec_dist_comment1')->get();
                $question2 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question2, count(record_id) AS y'))->groupBy('rec_dist_question2')->get();
                $rec_dist_comment2 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment2, count(rec_dist_comment2)'))->groupBy('rec_dist_comment2')->get();
                $question3 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question3, count(record_id) AS y'))->groupBy('rec_dist_question3')->get();
                $rec_dist_comment3 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment3, count(rec_dist_comment3)'))->groupBy('rec_dist_comment3')->get();
                $question4 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question4, count(record_id) AS y'))->groupBy('rec_dist_question4')->get();
                $rec_dist_comment4 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment4, count(rec_dist_comment4)'))->groupBy('rec_dist_comment4')->get();
                $question5 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question5, count(record_id) AS y'))->groupBy('rec_dist_question5')->get();
                $rec_dist_comment5 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment5, count(rec_dist_comment5)'))->groupBy('rec_dist_comment5')->get();
                $question6 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question6, count(record_id) AS y'))->groupBy('rec_dist_question6')->get();
                $rec_dist_comment6 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment6, count(rec_dist_comment6)'))->groupBy('rec_dist_comment6')->get();
                $question7 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question7, count(record_id) AS y'))->groupBy('rec_dist_question7')->get();
                $rec_dist_comment7 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment7, count(rec_dist_comment7)'))->groupBy('rec_dist_comment7')->get();
                $question8 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question8, count(record_id) AS y'))->groupBy('rec_dist_question8')->get();
                $rec_dist_comment8 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment8, count(rec_dist_comment8)'))->groupBy('rec_dist_comment8')->get();
                $question9 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question9, count(record_id) AS y'))->groupBy('rec_dist_question9')->get();
                $rec_dist_comment9 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment9, count(rec_dist_comment9)'))->groupBy('rec_dist_comment9')->get();
                $question10 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question10, count(record_id) AS y'))->groupBy('rec_dist_question10')->get();
                $rec_dist_comment10 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment10, count(rec_dist_comment10)'))->groupBy('rec_dist_comment10')->get();
                $question11 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question11, count(record_id) AS y'))->groupBy('rec_dist_question11')->get();
                $rec_dist_comment11 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment11, count(rec_dist_comment11)'))->groupBy('rec_dist_comment11')->get();
                $question12 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question12, count(record_id) AS y'))->groupBy('rec_dist_question12')->get();
                $rec_dist_comment12 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment12, count(rec_dist_comment12)'))->groupBy('rec_dist_comment12')->get();
                $question13 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question13, count(record_id) AS y'))->groupBy('rec_dist_question13')->get();
                $rec_dist_comment13 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment13, count(rec_dist_comment13)'))->groupBy('rec_dist_comment13')->get();
                $question14 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question14, count(record_id) AS y'))->groupBy('rec_dist_question14')->get();
                $rec_dist_comment14 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment14, count(rec_dist_comment14)'))->groupBy('rec_dist_comment14')->get();
                $question15 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question15, count(record_id) AS y'))->groupBy('rec_dist_question15')->get();
                $rec_dist_comment15 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment15, count(rec_dist_comment15)'))->groupBy('rec_dist_comment15')->get();
                $question16 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question16, count(record_id) AS y'))->groupBy('rec_dist_question16')->get();
                $rec_dist_comment16 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment16, count(rec_dist_comment16)'))->groupBy('rec_dist_comment16')->get();
                $question17 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question17, count(record_id) AS y'))->groupBy('rec_dist_question17')->get();
                $rec_dist_comment17 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment17, count(rec_dist_comment17)'))->groupBy('rec_dist_comment17')->get();
                $question18 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question18, count(record_id) AS y'))->groupBy('rec_dist_question18')->get();
                $rec_dist_comment18 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment18, count(rec_dist_comment18)'))->groupBy('rec_dist_comment18')->get();
                $question19 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question19, count(record_id) AS y'))->groupBy('rec_dist_question19')->get();
                $rec_dist_comment19 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment19, count(rec_dist_comment19)'))->groupBy('rec_dist_comment19')->get();
                $question20 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question20, count(record_id) AS y'))->groupBy('rec_dist_question20')->get();
                $rec_dist_comment20 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment20, count(rec_dist_comment20)'))->groupBy('rec_dist_comment20')->get();
                $question21 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_question21, count(record_id) AS y'))->groupBy('rec_dist_question21')->get();
                $rec_dist_comment21 = VWReportBookingDistrict::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('rec_dist_comment21, count(rec_dist_comment21)'))->groupBy('rec_dist_comment21')->get();
                
                break;
            
            default:
                return Session::flash('error', 'Wrong Input');
                break;
        }

        return [
            'total' => $total,
            'area' => $area_area,
            'district' => $district_dist,
            'question1' => $question1,
            'rec_dist_comment1' => $rec_dist_comment1,
            'question2' => $question2,
            'rec_dist_comment2' => $rec_dist_comment2,
            'question3' => $question3,
            'rec_dist_comment3' => $rec_dist_comment3,
            'question4' => $question4,
            'rec_dist_comment4' => $rec_dist_comment4,
            'question5' => $question5,
            'rec_dist_comment5' => $rec_dist_comment5,
            'question6' => $question6,
            'rec_dist_comment6' => $rec_dist_comment6,
            'question7' => $question7,
            'rec_dist_comment7' => $rec_dist_comment7,
            'question8' => $question8,
            'rec_dist_comment8' => $rec_dist_comment8,
            'question9' => $question9,
            'rec_dist_comment9' => $rec_dist_comment9,
            'question10' => $question10,
            'rec_dist_comment10' => $rec_dist_comment10,
            'question11' => $question11,
            'rec_dist_comment11' => $rec_dist_comment11,
            'question12' => $question12,
            'rec_dist_comment12' => $rec_dist_comment12,
            'question13' => $question13,
            'rec_dist_comment13' => $rec_dist_comment13,
            'question14' => $question14,
            'rec_dist_comment14' => $rec_dist_comment14,
            'question15' => $question15,
            'rec_dist_comment15' => $rec_dist_comment15,
            'question16' => $question16,
            'rec_dist_comment16' => $rec_dist_comment16,
            'question17' => $question17,
            'rec_dist_comment17' => $rec_dist_comment17,
            'question18' => $question18,
            'rec_dist_comment18' => $rec_dist_comment18,
            'question19' => $question19,
            'rec_dist_comment19' => $rec_dist_comment19,
            'question20' => $question20,
            'rec_dist_comment20' => $rec_dist_comment20,
            'question21' => $question21,
            'rec_dist_comment21' => $rec_dist_comment21,
        ];
    }
}
