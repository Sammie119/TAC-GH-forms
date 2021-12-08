<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWReportBookingLocal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RecordBooksLocalChartsController extends Controller
{
    static public function recordBooksLocal($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWReportBookingLocal::count();
                $area_area = VWReportBookingLocal::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWReportBookingLocal::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWReportBookingLocal::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingLocal::select(DB::raw('rec_local_question1, count(record_id) AS y'))->groupBy('rec_local_question1')->get();
                $rec_local_comment1 = VWReportBookingLocal::select(DB::raw('rec_local_comment1, count(rec_local_comment1)'))->groupBy('rec_local_comment1')->get();
                $question2 = VWReportBookingLocal::select(DB::raw('rec_local_question2, count(record_id) AS y'))->groupBy('rec_local_question2')->get();
                $rec_local_comment2 = VWReportBookingLocal::select(DB::raw('rec_local_comment2, count(rec_local_comment2)'))->groupBy('rec_local_comment2')->get();
                $question3 = VWReportBookingLocal::select(DB::raw('rec_local_question3, count(record_id) AS y'))->groupBy('rec_local_question3')->get();
                $rec_local_comment3 = VWReportBookingLocal::select(DB::raw('rec_local_comment3, count(rec_local_comment3)'))->groupBy('rec_local_comment3')->get();
                $question4 = VWReportBookingLocal::select(DB::raw('rec_local_question4, count(record_id) AS y'))->groupBy('rec_local_question4')->get();
                $rec_local_comment4 = VWReportBookingLocal::select(DB::raw('rec_local_comment4, count(rec_local_comment4)'))->groupBy('rec_local_comment4')->get();
                $question5 = VWReportBookingLocal::select(DB::raw('rec_local_question5, count(record_id) AS y'))->groupBy('rec_local_question5')->get();
                $rec_local_comment5 = VWReportBookingLocal::select(DB::raw('rec_local_comment5, count(rec_local_comment5)'))->groupBy('rec_local_comment5')->get();
                $question6 = VWReportBookingLocal::select(DB::raw('rec_local_question6, count(record_id) AS y'))->groupBy('rec_local_question6')->get();
                $rec_local_comment6 = VWReportBookingLocal::select(DB::raw('rec_local_comment6, count(rec_local_comment6)'))->groupBy('rec_local_comment6')->get();
                $question7 = VWReportBookingLocal::select(DB::raw('rec_local_question7, count(record_id) AS y'))->groupBy('rec_local_question7')->get();
                $rec_local_comment7 = VWReportBookingLocal::select(DB::raw('rec_local_comment7, count(rec_local_comment7)'))->groupBy('rec_local_comment7')->get();
                $question8 = VWReportBookingLocal::select(DB::raw('rec_local_question8, count(record_id) AS y'))->groupBy('rec_local_question8')->get();
                $rec_local_comment8 = VWReportBookingLocal::select(DB::raw('rec_local_comment8, count(rec_local_comment8)'))->groupBy('rec_local_comment8')->get();
                $question9 = VWReportBookingLocal::select(DB::raw('rec_local_question9, count(record_id) AS y'))->groupBy('rec_local_question9')->get();
                $rec_local_comment9 = VWReportBookingLocal::select(DB::raw('rec_local_comment9, count(rec_local_comment9)'))->groupBy('rec_local_comment9')->get();
                $question10 = VWReportBookingLocal::select(DB::raw('rec_local_question10, count(record_id) AS y'))->groupBy('rec_local_question10')->get();
                $rec_local_comment10 = VWReportBookingLocal::select(DB::raw('rec_local_comment10, count(rec_local_comment10)'))->groupBy('rec_local_comment10')->get();
                $question11 = VWReportBookingLocal::select(DB::raw('rec_local_question11, count(record_id) AS y'))->groupBy('rec_local_question11')->get();
                $rec_local_comment11 = VWReportBookingLocal::select(DB::raw('rec_local_comment11, count(rec_local_comment11)'))->groupBy('rec_local_comment11')->get();
                $question12 = VWReportBookingLocal::select(DB::raw('rec_local_question12, count(record_id) AS y'))->groupBy('rec_local_question12')->get();
                $rec_local_comment12 = VWReportBookingLocal::select(DB::raw('rec_local_comment12, count(rec_local_comment12)'))->groupBy('rec_local_comment12')->get();
                $question13 = VWReportBookingLocal::select(DB::raw('rec_local_question13, count(record_id) AS y'))->groupBy('rec_local_question13')->get();
                $rec_local_comment13 = VWReportBookingLocal::select(DB::raw('rec_local_comment13, count(rec_local_comment13)'))->groupBy('rec_local_comment13')->get();
                $question14 = VWReportBookingLocal::select(DB::raw('rec_local_question14, count(record_id) AS y'))->groupBy('rec_local_question14')->get();
                $rec_local_comment14 = VWReportBookingLocal::select(DB::raw('rec_local_comment14, count(rec_local_comment14)'))->groupBy('rec_local_comment14')->get();
                $question15 = VWReportBookingLocal::select(DB::raw('rec_local_question15, count(record_id) AS y'))->groupBy('rec_local_question15')->get();
                $rec_local_comment15 = VWReportBookingLocal::select(DB::raw('rec_local_comment15, count(rec_local_comment15)'))->groupBy('rec_local_comment15')->get();
                $question16 = VWReportBookingLocal::select(DB::raw('rec_local_question16, count(record_id) AS y'))->groupBy('rec_local_question16')->get();
                $rec_local_comment16 = VWReportBookingLocal::select(DB::raw('rec_local_comment16, count(rec_local_comment16)'))->groupBy('rec_local_comment16')->get();
                $question17 = VWReportBookingLocal::select(DB::raw('rec_local_question17, count(record_id) AS y'))->groupBy('rec_local_question17')->get();
                $rec_local_comment17 = VWReportBookingLocal::select(DB::raw('rec_local_comment17, count(rec_local_comment17)'))->groupBy('rec_local_comment17')->get();
                $question18 = VWReportBookingLocal::select(DB::raw('rec_local_question18, count(record_id) AS y'))->groupBy('rec_local_question18')->get();
                $rec_local_comment18 = VWReportBookingLocal::select(DB::raw('rec_local_comment18, count(rec_local_comment18)'))->groupBy('rec_local_comment18')->get();
                $question19 = VWReportBookingLocal::select(DB::raw('rec_local_question19, count(record_id) AS y'))->groupBy('rec_local_question19')->get();
                $rec_local_comment19 = VWReportBookingLocal::select(DB::raw('rec_local_comment19, count(rec_local_comment19)'))->groupBy('rec_local_comment19')->get();
                $question20 = VWReportBookingLocal::select(DB::raw('rec_local_question20, count(record_id) AS y'))->groupBy('rec_local_question20')->get();
                $rec_local_comment20 = VWReportBookingLocal::select(DB::raw('rec_local_comment20, count(rec_local_comment20)'))->groupBy('rec_local_comment20')->get();
                $question21 = VWReportBookingLocal::select(DB::raw('rec_local_question21, count(record_id) AS y'))->groupBy('rec_local_question21')->get();
                $rec_local_comment21 = VWReportBookingLocal::select(DB::raw('rec_local_comment21, count(rec_local_comment21)'))->groupBy('rec_local_comment21')->get();

                break;
        
            case 'Area':
                $total = VWReportBookingLocal::where('area', $area)->count();
                $area_area = VWReportBookingLocal::where('area', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWReportBookingLocal::where('area', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWReportBookingLocal::where('area', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question1, count(record_id) AS y'))->groupBy('rec_local_question1')->get();
                $rec_local_comment1 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment1, count(rec_local_comment1)'))->groupBy('rec_local_comment1')->get();
                $question2 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question2, count(record_id) AS y'))->groupBy('rec_local_question2')->get();
                $rec_local_comment2 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment2, count(rec_local_comment2)'))->groupBy('rec_local_comment2')->get();
                $question3 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question3, count(record_id) AS y'))->groupBy('rec_local_question3')->get();
                $rec_local_comment3 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment3, count(rec_local_comment3)'))->groupBy('rec_local_comment3')->get();
                $question4 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question4, count(record_id) AS y'))->groupBy('rec_local_question4')->get();
                $rec_local_comment4 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment4, count(rec_local_comment4)'))->groupBy('rec_local_comment4')->get();
                $question5 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question5, count(record_id) AS y'))->groupBy('rec_local_question5')->get();
                $rec_local_comment5 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment5, count(rec_local_comment5)'))->groupBy('rec_local_comment5')->get();
                $question6 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question6, count(record_id) AS y'))->groupBy('rec_local_question6')->get();
                $rec_local_comment6 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment6, count(rec_local_comment6)'))->groupBy('rec_local_comment6')->get();
                $question7 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question7, count(record_id) AS y'))->groupBy('rec_local_question7')->get();
                $rec_local_comment7 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment7, count(rec_local_comment7)'))->groupBy('rec_local_comment7')->get();
                $question8 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question8, count(record_id) AS y'))->groupBy('rec_local_question8')->get();
                $rec_local_comment8 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment8, count(rec_local_comment8)'))->groupBy('rec_local_comment8')->get();
                $question9 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question9, count(record_id) AS y'))->groupBy('rec_local_question9')->get();
                $rec_local_comment9 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment9, count(rec_local_comment9)'))->groupBy('rec_local_comment9')->get();
                $question10 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question10, count(record_id) AS y'))->groupBy('rec_local_question10')->get();
                $rec_local_comment10 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment10, count(rec_local_comment10)'))->groupBy('rec_local_comment10')->get();
                $question11 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question11, count(record_id) AS y'))->groupBy('rec_local_question11')->get();
                $rec_local_comment11 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment11, count(rec_local_comment11)'))->groupBy('rec_local_comment11')->get();
                $question12 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question12, count(record_id) AS y'))->groupBy('rec_local_question12')->get();
                $rec_local_comment12 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment12, count(rec_local_comment12)'))->groupBy('rec_local_comment12')->get();
                $question13 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question13, count(record_id) AS y'))->groupBy('rec_local_question13')->get();
                $rec_local_comment13 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment13, count(rec_local_comment13)'))->groupBy('rec_local_comment13')->get();
                $question14 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question14, count(record_id) AS y'))->groupBy('rec_local_question14')->get();
                $rec_local_comment14 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment14, count(rec_local_comment14)'))->groupBy('rec_local_comment14')->get();
                $question15 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question15, count(record_id) AS y'))->groupBy('rec_local_question15')->get();
                $rec_local_comment15 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment15, count(rec_local_comment15)'))->groupBy('rec_local_comment15')->get();
                $question16 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question16, count(record_id) AS y'))->groupBy('rec_local_question16')->get();
                $rec_local_comment16 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment16, count(rec_local_comment16)'))->groupBy('rec_local_comment16')->get();
                $question17 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question17, count(record_id) AS y'))->groupBy('rec_local_question17')->get();
                $rec_local_comment17 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment17, count(rec_local_comment17)'))->groupBy('rec_local_comment17')->get();
                $question18 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question18, count(record_id) AS y'))->groupBy('rec_local_question18')->get();
                $rec_local_comment18 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment18, count(rec_local_comment18)'))->groupBy('rec_local_comment18')->get();
                $question19 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question19, count(record_id) AS y'))->groupBy('rec_local_question19')->get();
                $rec_local_comment19 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment19, count(rec_local_comment19)'))->groupBy('rec_local_comment19')->get();
                $question20 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question20, count(record_id) AS y'))->groupBy('rec_local_question20')->get();
                $rec_local_comment20 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment20, count(rec_local_comment20)'))->groupBy('rec_local_comment20')->get();
                $question21 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_question21, count(record_id) AS y'))->groupBy('rec_local_question21')->get();
                $rec_local_comment21 = VWReportBookingLocal::where('area', $area)->select(DB::raw('rec_local_comment21, count(rec_local_comment21)'))->groupBy('rec_local_comment21')->get();
                
                break;
        
            case 'District':
                $total = VWReportBookingLocal::where('area', $area)->where('district', $dist)->count();
                $area_area = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question1, count(record_id) AS y'))->groupBy('rec_local_question1')->get();
                $rec_local_comment1 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment1, count(rec_local_comment1)'))->groupBy('rec_local_comment1')->get();
                $question2 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question2, count(record_id) AS y'))->groupBy('rec_local_question2')->get();
                $rec_local_comment2 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment2, count(rec_local_comment2)'))->groupBy('rec_local_comment2')->get();
                $question3 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question3, count(record_id) AS y'))->groupBy('rec_local_question3')->get();
                $rec_local_comment3 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment3, count(rec_local_comment3)'))->groupBy('rec_local_comment3')->get();
                $question4 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question4, count(record_id) AS y'))->groupBy('rec_local_question4')->get();
                $rec_local_comment4 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment4, count(rec_local_comment4)'))->groupBy('rec_local_comment4')->get();
                $question5 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question5, count(record_id) AS y'))->groupBy('rec_local_question5')->get();
                $rec_local_comment5 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment5, count(rec_local_comment5)'))->groupBy('rec_local_comment5')->get();
                $question6 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question6, count(record_id) AS y'))->groupBy('rec_local_question6')->get();
                $rec_local_comment6 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment6, count(rec_local_comment6)'))->groupBy('rec_local_comment6')->get();
                $question7 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question7, count(record_id) AS y'))->groupBy('rec_local_question7')->get();
                $rec_local_comment7 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment7, count(rec_local_comment7)'))->groupBy('rec_local_comment7')->get();
                $question8 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question8, count(record_id) AS y'))->groupBy('rec_local_question8')->get();
                $rec_local_comment8 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment8, count(rec_local_comment8)'))->groupBy('rec_local_comment8')->get();
                $question9 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question9, count(record_id) AS y'))->groupBy('rec_local_question9')->get();
                $rec_local_comment9 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment9, count(rec_local_comment9)'))->groupBy('rec_local_comment9')->get();
                $question10 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question10, count(record_id) AS y'))->groupBy('rec_local_question10')->get();
                $rec_local_comment10 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment10, count(rec_local_comment10)'))->groupBy('rec_local_comment10')->get();
                $question11 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question11, count(record_id) AS y'))->groupBy('rec_local_question11')->get();
                $rec_local_comment11 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment11, count(rec_local_comment11)'))->groupBy('rec_local_comment11')->get();
                $question12 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question12, count(record_id) AS y'))->groupBy('rec_local_question12')->get();
                $rec_local_comment12 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment12, count(rec_local_comment12)'))->groupBy('rec_local_comment12')->get();
                $question13 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question13, count(record_id) AS y'))->groupBy('rec_local_question13')->get();
                $rec_local_comment13 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment13, count(rec_local_comment13)'))->groupBy('rec_local_comment13')->get();
                $question14 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question14, count(record_id) AS y'))->groupBy('rec_local_question14')->get();
                $rec_local_comment14 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment14, count(rec_local_comment14)'))->groupBy('rec_local_comment14')->get();
                $question15 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question15, count(record_id) AS y'))->groupBy('rec_local_question15')->get();
                $rec_local_comment15 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment15, count(rec_local_comment15)'))->groupBy('rec_local_comment15')->get();
                $question16 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question16, count(record_id) AS y'))->groupBy('rec_local_question16')->get();
                $rec_local_comment16 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment16, count(rec_local_comment16)'))->groupBy('rec_local_comment16')->get();
                $question17 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question17, count(record_id) AS y'))->groupBy('rec_local_question17')->get();
                $rec_local_comment17 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment17, count(rec_local_comment17)'))->groupBy('rec_local_comment17')->get();
                $question18 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question18, count(record_id) AS y'))->groupBy('rec_local_question18')->get();
                $rec_local_comment18 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment18, count(rec_local_comment18)'))->groupBy('rec_local_comment18')->get();
                $question19 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question19, count(record_id) AS y'))->groupBy('rec_local_question19')->get();
                $rec_local_comment19 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment19, count(rec_local_comment19)'))->groupBy('rec_local_comment19')->get();
                $question20 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question20, count(record_id) AS y'))->groupBy('rec_local_question20')->get();
                $rec_local_comment20 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment20, count(rec_local_comment20)'))->groupBy('rec_local_comment20')->get();
                $question21 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_question21, count(record_id) AS y'))->groupBy('rec_local_question21')->get();
                $rec_local_comment21 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->select(DB::raw('rec_local_comment21, count(rec_local_comment21)'))->groupBy('rec_local_comment21')->get();
                
                break;
        
            case 'Local':
                $total = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->count();
                $area_area = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question1, count(record_id) AS y'))->groupBy('rec_local_question1')->get();
                $rec_local_comment1 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment1, count(rec_local_comment1)'))->groupBy('rec_local_comment1')->get();
                $question2 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question2, count(record_id) AS y'))->groupBy('rec_local_question2')->get();
                $rec_local_comment2 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment2, count(rec_local_comment2)'))->groupBy('rec_local_comment2')->get();
                $question3 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question3, count(record_id) AS y'))->groupBy('rec_local_question3')->get();
                $rec_local_comment3 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment3, count(rec_local_comment3)'))->groupBy('rec_local_comment3')->get();
                $question4 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question4, count(record_id) AS y'))->groupBy('rec_local_question4')->get();
                $rec_local_comment4 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment4, count(rec_local_comment4)'))->groupBy('rec_local_comment4')->get();
                $question5 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question5, count(record_id) AS y'))->groupBy('rec_local_question5')->get();
                $rec_local_comment5 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment5, count(rec_local_comment5)'))->groupBy('rec_local_comment5')->get();
                $question6 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question6, count(record_id) AS y'))->groupBy('rec_local_question6')->get();
                $rec_local_comment6 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment6, count(rec_local_comment6)'))->groupBy('rec_local_comment6')->get();
                $question7 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question7, count(record_id) AS y'))->groupBy('rec_local_question7')->get();
                $rec_local_comment7 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment7, count(rec_local_comment7)'))->groupBy('rec_local_comment7')->get();
                $question8 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question8, count(record_id) AS y'))->groupBy('rec_local_question8')->get();
                $rec_local_comment8 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment8, count(rec_local_comment8)'))->groupBy('rec_local_comment8')->get();
                $question9 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question9, count(record_id) AS y'))->groupBy('rec_local_question9')->get();
                $rec_local_comment9 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment9, count(rec_local_comment9)'))->groupBy('rec_local_comment9')->get();
                $question10 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question10, count(record_id) AS y'))->groupBy('rec_local_question10')->get();
                $rec_local_comment10 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment10, count(rec_local_comment10)'))->groupBy('rec_local_comment10')->get();
                $question11 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question11, count(record_id) AS y'))->groupBy('rec_local_question11')->get();
                $rec_local_comment11 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment11, count(rec_local_comment11)'))->groupBy('rec_local_comment11')->get();
                $question12 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question12, count(record_id) AS y'))->groupBy('rec_local_question12')->get();
                $rec_local_comment12 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment12, count(rec_local_comment12)'))->groupBy('rec_local_comment12')->get();
                $question13 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question13, count(record_id) AS y'))->groupBy('rec_local_question13')->get();
                $rec_local_comment13 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment13, count(rec_local_comment13)'))->groupBy('rec_local_comment13')->get();
                $question14 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question14, count(record_id) AS y'))->groupBy('rec_local_question14')->get();
                $rec_local_comment14 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment14, count(rec_local_comment14)'))->groupBy('rec_local_comment14')->get();
                $question15 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question15, count(record_id) AS y'))->groupBy('rec_local_question15')->get();
                $rec_local_comment15 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment15, count(rec_local_comment15)'))->groupBy('rec_local_comment15')->get();
                $question16 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question16, count(record_id) AS y'))->groupBy('rec_local_question16')->get();
                $rec_local_comment16 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment16, count(rec_local_comment16)'))->groupBy('rec_local_comment16')->get();
                $question17 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question17, count(record_id) AS y'))->groupBy('rec_local_question17')->get();
                $rec_local_comment17 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment17, count(rec_local_comment17)'))->groupBy('rec_local_comment17')->get();
                $question18 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question18, count(record_id) AS y'))->groupBy('rec_local_question18')->get();
                $rec_local_comment18 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment18, count(rec_local_comment18)'))->groupBy('rec_local_comment18')->get();
                $question19 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question19, count(record_id) AS y'))->groupBy('rec_local_question19')->get();
                $rec_local_comment19 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment19, count(rec_local_comment19)'))->groupBy('rec_local_comment19')->get();
                $question20 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question20, count(record_id) AS y'))->groupBy('rec_local_question20')->get();
                $rec_local_comment20 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment20, count(rec_local_comment20)'))->groupBy('rec_local_comment20')->get();
                $question21 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_question21, count(record_id) AS y'))->groupBy('rec_local_question21')->get();
                $rec_local_comment21 = VWReportBookingLocal::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('rec_local_comment21, count(rec_local_comment21)'))->groupBy('rec_local_comment21')->get();
                
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
            'rec_local_comment1' => $rec_local_comment1,
            'question2' => $question2,
            'rec_local_comment2' => $rec_local_comment2,
            'question3' => $question3,
            'rec_local_comment3' => $rec_local_comment3,
            'question4' => $question4,
            'rec_local_comment4' => $rec_local_comment4,
            'question5' => $question5,
            'rec_local_comment5' => $rec_local_comment5,
            'question6' => $question6,
            'rec_local_comment6' => $rec_local_comment6,
            'question7' => $question7,
            'rec_local_comment7' => $rec_local_comment7,
            'question8' => $question8,
            'rec_local_comment8' => $rec_local_comment8,
            'question9' => $question9,
            'rec_local_comment9' => $rec_local_comment9,
            'question10' => $question10,
            'rec_local_comment10' => $rec_local_comment10,
            'question11' => $question11,
            'rec_local_comment11' => $rec_local_comment11,
            'question12' => $question12,
            'rec_local_comment12' => $rec_local_comment12,
            'question13' => $question13,
            'rec_local_comment13' => $rec_local_comment13,
            'question14' => $question14,
            'rec_local_comment14' => $rec_local_comment14,
            'question15' => $question15,
            'rec_local_comment15' => $rec_local_comment15,
            'question16' => $question16,
            'rec_local_comment16' => $rec_local_comment16,
            'question17' => $question17,
            'rec_local_comment17' => $rec_local_comment17,
            'question18' => $question18,
            'rec_local_comment18' => $rec_local_comment18,
            'question19' => $question19,
            'rec_local_comment19' => $rec_local_comment19,
            'question20' => $question20,
            'rec_local_comment20' => $rec_local_comment20,
            'question21' => $question21,
            'rec_local_comment21' => $rec_local_comment21,
        ];
    }
}
