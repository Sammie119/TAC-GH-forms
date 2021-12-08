<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VWAreaheadReport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AreaHeadChartsController extends Controller
{
    static public function areaHead($destination, $area, $dist, $loc){
        switch ($destination) {
            case 'General':
                $total = VWAreaheadReport::count();
                $area_area = VWAreaheadReport::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWAreaheadReport::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWAreaheadReport::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $areahead_comment1 = VWAreaheadReport::select(DB::raw('areahead_comment1, count(areahead_comment1)'))->groupBy('areahead_comment1')->get();
                $areahead_comment2 = VWAreaheadReport::select(DB::raw('areahead_comment2, count(areahead_comment2)'))->groupBy('areahead_comment2')->get();
                $areahead_comment3 = VWAreaheadReport::select(DB::raw('areahead_comment3, count(areahead_comment3)'))->groupBy('areahead_comment3')->get();
                $areahead_comment4 = VWAreaheadReport::select(DB::raw('areahead_comment4, count(areahead_comment4)'))->groupBy('areahead_comment4')->get();
                $areahead_comment5 = VWAreaheadReport::select(DB::raw('areahead_comment5, count(areahead_comment5)'))->groupBy('areahead_comment5')->get();
                $areahead_comment6 = VWAreaheadReport::select(DB::raw('areahead_comment6, count(areahead_comment6)'))->groupBy('areahead_comment6')->get();
                $question7a = VWAreaheadReport::select(DB::raw('areahead_question7a, count(area_head_id) AS y'))->groupBy('areahead_question7a')->get();
                $question7b = VWAreaheadReport::select(DB::raw('areahead_question7b, count(area_head_id) AS y'))->groupBy('areahead_question7b')->get();
                $question7c = VWAreaheadReport::select(DB::raw('areahead_question7c, count(area_head_id) AS y'))->groupBy('areahead_question7c')->get();
                $question7d = VWAreaheadReport::select(DB::raw('areahead_question7d, count(area_head_id) AS y'))->groupBy('areahead_question7d')->get();
                $question7e = VWAreaheadReport::select(DB::raw('areahead_question7e, count(area_head_id) AS y'))->groupBy('areahead_question7e')->get();
                $question8 = VWAreaheadReport::select(DB::raw('areahead_question8, count(area_head_id) AS y'))->groupBy('areahead_question8')->get();
                $question9 = VWAreaheadReport::select(DB::raw('areahead_question9, count(area_head_id) AS y'))->groupBy('areahead_question9')->get();
                $question10 = VWAreaheadReport::select(DB::raw('areahead_question10, count(area_head_id) AS y'))->groupBy('areahead_question10')->get();
                $areahead_comment10 = VWAreaheadReport::select(DB::raw('areahead_comment10, count(areahead_comment10)'))->groupBy('areahead_comment10')->get();
                $question11 = VWAreaheadReport::select(DB::raw('areahead_question11, count(area_head_id) AS y'))->groupBy('areahead_question11')->get();
                $areahead_comment11 = VWAreaheadReport::select(DB::raw('areahead_comment11, count(areahead_comment11)'))->groupBy('areahead_comment11')->get();
                $areahead_comment12 = VWAreaheadReport::select(DB::raw('areahead_comment12, count(areahead_comment12)'))->groupBy('areahead_comment12')->get();
                $question13 = VWAreaheadReport::select(DB::raw('areahead_question13, count(area_head_id) AS y'))->groupBy('areahead_question13')->get();
                $areahead_comment13 = VWAreaheadReport::select(DB::raw('areahead_comment13, count(areahead_comment13)'))->groupBy('areahead_comment13')->get();
                $areahead_comment14 = VWAreaheadReport::select(DB::raw('areahead_comment14, count(areahead_comment14)'))->groupBy('areahead_comment14')->get();
                $areahead_comment15 = VWAreaheadReport::select(DB::raw('areahead_comment15, count(areahead_comment15)'))->groupBy('areahead_comment15')->get();
                $areahead_comment16 = VWAreaheadReport::select(DB::raw('areahead_comment16, count(areahead_comment16)'))->groupBy('areahead_comment16')->get();
                $areahead_comment17 = VWAreaheadReport::select(DB::raw('areahead_comment17, count(areahead_comment17)'))->groupBy('areahead_comment17')->get();
                $areahead_pastors = VWAreaheadReport::sum('areahead_pastors');
                $areahead_elders = VWAreaheadReport::sum('areahead_elders');
                $areahead_deacons = VWAreaheadReport::sum('areahead_deacons');
                $areahead_deaconesses = VWAreaheadReport::sum('areahead_deaconesses');
                $areahead_adult_males = VWAreaheadReport::sum('areahead_adult_males');
                $areahead_adult_females = VWAreaheadReport::sum('areahead_adult_females');
                $areahead_children = VWAreaheadReport::sum('areahead_children');
                $areahead_youth = VWAreaheadReport::sum('areahead_youth');
                $areahead_total_att = VWAreaheadReport::sum('areahead_total_att');
                $areahead_tithe_payers = VWAreaheadReport::sum('areahead_tithe_payers');
                $areahead_active_tithe_payers = VWAreaheadReport::sum('areahead_active_tithe_payers');
                $areahead_tithes_paid = VWAreaheadReport::sum('areahead_tithes_paid');
                $areahead_oferring = VWAreaheadReport::sum('areahead_oferring');
                $areahead_any_oferring = VWAreaheadReport::sum('areahead_any_oferring');
                $areahead_total_tithe_off = VWAreaheadReport::sum('areahead_total_tithe_off');
                break;
            
            case 'Area':
                $total = VWAreaheadReport::where('area', $area)->count();
                $area_area = VWAreaheadReport::where('area', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWAreaheadReport::where('area', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWAreaheadReport::where('area', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $areahead_comment1 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment1, count(areahead_comment1)'))->groupBy('areahead_comment1')->get();
                $areahead_comment2 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment2, count(areahead_comment2)'))->groupBy('areahead_comment2')->get();
                $areahead_comment3 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment3, count(areahead_comment3)'))->groupBy('areahead_comment3')->get();
                $areahead_comment4 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment4, count(areahead_comment4)'))->groupBy('areahead_comment4')->get();
                $areahead_comment5 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment5, count(areahead_comment5)'))->groupBy('areahead_comment5')->get();
                $areahead_comment6 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment6, count(areahead_comment6)'))->groupBy('areahead_comment6')->get();
                $question7a = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question7a, count(area_head_id) AS y'))->groupBy('areahead_question7a')->get();
                $question7b = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question7b, count(area_head_id) AS y'))->groupBy('areahead_question7b')->get();
                $question7c = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question7c, count(area_head_id) AS y'))->groupBy('areahead_question7c')->get();
                $question7d = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question7d, count(area_head_id) AS y'))->groupBy('areahead_question7d')->get();
                $question7e = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question7e, count(area_head_id) AS y'))->groupBy('areahead_question7e')->get();
                $question8 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question8, count(area_head_id) AS y'))->groupBy('areahead_question8')->get();
                $question9 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question9, count(area_head_id) AS y'))->groupBy('areahead_question9')->get();
                $question10 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question10, count(area_head_id) AS y'))->groupBy('areahead_question10')->get();
                $areahead_comment10 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment10, count(areahead_comment10)'))->groupBy('areahead_comment10')->get();
                $question11 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question11, count(area_head_id) AS y'))->groupBy('areahead_question11')->get();
                $areahead_comment11 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment11, count(areahead_comment11)'))->groupBy('areahead_comment11')->get();
                $areahead_comment12 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment12, count(areahead_comment12)'))->groupBy('areahead_comment12')->get();
                $question13 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_question13, count(area_head_id) AS y'))->groupBy('areahead_question13')->get();
                $areahead_comment13 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment13, count(areahead_comment13)'))->groupBy('areahead_comment13')->get();
                $areahead_comment14 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment14, count(areahead_comment14)'))->groupBy('areahead_comment14')->get();
                $areahead_comment15 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment15, count(areahead_comment15)'))->groupBy('areahead_comment15')->get();
                $areahead_comment16 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment16, count(areahead_comment16)'))->groupBy('areahead_comment16')->get();
                $areahead_comment17 = VWAreaheadReport::where('area', $area)->select(DB::raw('areahead_comment17, count(areahead_comment17)'))->groupBy('areahead_comment17')->get();
                $areahead_pastors = VWAreaheadReport::where('area', $area)->sum('areahead_pastors');
                $areahead_elders = VWAreaheadReport::where('area', $area)->sum('areahead_elders');
                $areahead_deacons = VWAreaheadReport::where('area', $area)->sum('areahead_deacons');
                $areahead_deaconesses = VWAreaheadReport::where('area', $area)->sum('areahead_deaconesses');
                $areahead_adult_males = VWAreaheadReport::where('area', $area)->sum('areahead_adult_males');
                $areahead_adult_females = VWAreaheadReport::where('area', $area)->sum('areahead_adult_females');
                $areahead_children = VWAreaheadReport::where('area', $area)->sum('areahead_children');
                $areahead_youth = VWAreaheadReport::where('area', $area)->sum('areahead_youth');
                $areahead_total_att = VWAreaheadReport::where('area', $area)->sum('areahead_total_att');
                $areahead_tithe_payers = VWAreaheadReport::where('area', $area)->sum('areahead_tithe_payers');
                $areahead_active_tithe_payers = VWAreaheadReport::where('area', $area)->sum('areahead_active_tithe_payers');
                $areahead_tithes_paid = VWAreaheadReport::where('area', $area)->sum('areahead_tithes_paid');
                $areahead_oferring = VWAreaheadReport::where('area', $area)->sum('areahead_oferring');
                $areahead_any_oferring = VWAreaheadReport::where('area', $area)->sum('areahead_any_oferring');
                $areahead_total_tithe_off = VWAreaheadReport::where('area', $area)->sum('areahead_total_tithe_off');

                break;

            case 'District':
                $total = VWAreaheadReport::where('area', $area)->where('district', $dist)->count();
                $area_area = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $areahead_comment1 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment1, count(areahead_comment1)'))->groupBy('areahead_comment1')->get();
                $areahead_comment2 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment2, count(areahead_comment2)'))->groupBy('areahead_comment2')->get();
                $areahead_comment3 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment3, count(areahead_comment3)'))->groupBy('areahead_comment3')->get();
                $areahead_comment4 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment4, count(areahead_comment4)'))->groupBy('areahead_comment4')->get();
                $areahead_comment5 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment5, count(areahead_comment5)'))->groupBy('areahead_comment5')->get();
                $areahead_comment6 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment6, count(areahead_comment6)'))->groupBy('areahead_comment6')->get();
                $question7a = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question7a, count(area_head_id) AS y'))->groupBy('areahead_question7a')->get();
                $question7b = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question7b, count(area_head_id) AS y'))->groupBy('areahead_question7b')->get();
                $question7c = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question7c, count(area_head_id) AS y'))->groupBy('areahead_question7c')->get();
                $question7d = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question7d, count(area_head_id) AS y'))->groupBy('areahead_question7d')->get();
                $question7e = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question7e, count(area_head_id) AS y'))->groupBy('areahead_question7e')->get();
                $question8 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question8, count(area_head_id) AS y'))->groupBy('areahead_question8')->get();
                $question9 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question9, count(area_head_id) AS y'))->groupBy('areahead_question9')->get();
                $question10 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question10, count(area_head_id) AS y'))->groupBy('areahead_question10')->get();
                $areahead_comment10 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment10, count(areahead_comment10)'))->groupBy('areahead_comment10')->get();
                $question11 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question11, count(area_head_id) AS y'))->groupBy('areahead_question11')->get();
                $areahead_comment11 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment11, count(areahead_comment11)'))->groupBy('areahead_comment11')->get();
                $areahead_comment12 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment12, count(areahead_comment12)'))->groupBy('areahead_comment12')->get();
                $question13 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_question13, count(area_head_id) AS y'))->groupBy('areahead_question13')->get();
                $areahead_comment13 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment13, count(areahead_comment13)'))->groupBy('areahead_comment13')->get();
                $areahead_comment14 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment14, count(areahead_comment14)'))->groupBy('areahead_comment14')->get();
                $areahead_comment15 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment15, count(areahead_comment15)'))->groupBy('areahead_comment15')->get();
                $areahead_comment16 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment16, count(areahead_comment16)'))->groupBy('areahead_comment16')->get();
                $areahead_comment17 = VWAreaheadReport::where('area', $area)->where('district', $dist)->select(DB::raw('areahead_comment17, count(areahead_comment17)'))->groupBy('areahead_comment17')->get();
                $areahead_pastors = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_pastors');
                $areahead_elders = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_elders');
                $areahead_deacons = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_deacons');
                $areahead_deaconesses = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_deaconesses');
                $areahead_adult_males = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_adult_males');
                $areahead_adult_females = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_adult_females');
                $areahead_children = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_children');
                $areahead_youth = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_youth');
                $areahead_total_att = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_total_att');
                $areahead_tithe_payers = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_tithe_payers');
                $areahead_active_tithe_payers = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_active_tithe_payers');
                $areahead_tithes_paid = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_tithes_paid');
                $areahead_oferring = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_oferring');
                $areahead_any_oferring = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_any_oferring');
                $areahead_total_tithe_off = VWAreaheadReport::where('area', $area)->where('district', $dist)->sum('areahead_total_tithe_off');

                break;

            case 'Local':
                $total = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->count();
                $area_area = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $areahead_comment1 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment1, count(areahead_comment1)'))->groupBy('areahead_comment1')->get();
                $areahead_comment2 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment2, count(areahead_comment2)'))->groupBy('areahead_comment2')->get();
                $areahead_comment3 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment3, count(areahead_comment3)'))->groupBy('areahead_comment3')->get();
                $areahead_comment4 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment4, count(areahead_comment4)'))->groupBy('areahead_comment4')->get();
                $areahead_comment5 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment5, count(areahead_comment5)'))->groupBy('areahead_comment5')->get();
                $areahead_comment6 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment6, count(areahead_comment6)'))->groupBy('areahead_comment6')->get();
                $question7a = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question7a, count(area_head_id) AS y'))->groupBy('areahead_question7a')->get();
                $question7b = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question7b, count(area_head_id) AS y'))->groupBy('areahead_question7b')->get();
                $question7c = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question7c, count(area_head_id) AS y'))->groupBy('areahead_question7c')->get();
                $question7d = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question7d, count(area_head_id) AS y'))->groupBy('areahead_question7d')->get();
                $question7e = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question7e, count(area_head_id) AS y'))->groupBy('areahead_question7e')->get();
                $question8 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question8, count(area_head_id) AS y'))->groupBy('areahead_question8')->get();
                $question9 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question9, count(area_head_id) AS y'))->groupBy('areahead_question9')->get();
                $question10 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question10, count(area_head_id) AS y'))->groupBy('areahead_question10')->get();
                $areahead_comment10 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment10, count(areahead_comment10)'))->groupBy('areahead_comment10')->get();
                $question11 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question11, count(area_head_id) AS y'))->groupBy('areahead_question11')->get();
                $areahead_comment11 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment11, count(areahead_comment11)'))->groupBy('areahead_comment11')->get();
                $areahead_comment12 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment12, count(areahead_comment12)'))->groupBy('areahead_comment12')->get();
                $question13 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_question13, count(area_head_id) AS y'))->groupBy('areahead_question13')->get();
                $areahead_comment13 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment13, count(areahead_comment13)'))->groupBy('areahead_comment13')->get();
                $areahead_comment14 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment14, count(areahead_comment14)'))->groupBy('areahead_comment14')->get();
                $areahead_comment15 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment15, count(areahead_comment15)'))->groupBy('areahead_comment15')->get();
                $areahead_comment16 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment16, count(areahead_comment16)'))->groupBy('areahead_comment16')->get();
                $areahead_comment17 = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->select(DB::raw('areahead_comment17, count(areahead_comment17)'))->groupBy('areahead_comment17')->get();
                $areahead_pastors = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_pastors');
                $areahead_elders = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_elders');
                $areahead_deacons = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_deacons');
                $areahead_deaconesses = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_deaconesses');
                $areahead_adult_males = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_adult_males');
                $areahead_adult_females = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_adult_females');
                $areahead_children = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_children');
                $areahead_youth = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_youth');
                $areahead_total_att = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_total_att');
                $areahead_tithe_payers = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_tithe_payers');
                $areahead_active_tithe_payers = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_active_tithe_payers');
                $areahead_tithes_paid = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_tithes_paid');
                $areahead_oferring = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_oferring');
                $areahead_any_oferring = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_any_oferring');
                $areahead_total_tithe_off = VWAreaheadReport::where('area', $area)->where('district', $dist)->where('local', $loc)->sum('areahead_total_tithe_off');

                break;
            default:
                return Session::flash('error', 'Wrong Input');
                break;
        }
        
        
        return [
            'total' => $total,
            'area' =>$area_area,
            'district' => $district_dist,
            'local' => $local_loc,
            'areahead_comment1' => $areahead_comment1,
            'areahead_comment2' => $areahead_comment2,
            'areahead_comment3' => $areahead_comment3,
            'areahead_comment4' => $areahead_comment4,
            'areahead_comment5' => $areahead_comment5,
            'areahead_comment6' => $areahead_comment6,
            'question7a' => $question7a,
            'question7b' => $question7b,
            'question7c' => $question7c,
            'question7d' => $question7d,
            'question7e' => $question7e,
            'question8' => $question8,
            'question9' => $question9,
            'question10' => $question10,
            'areahead_comment10' => $areahead_comment10,
            'question11' => $question11,
            'areahead_comment11' => $areahead_comment11,
            'areahead_comment12' => $areahead_comment12,
            'question13' => $question13,
            'areahead_comment13' => $areahead_comment13,
            'areahead_comment14' => $areahead_comment14,
            'areahead_comment15' => $areahead_comment15,
            'areahead_comment16' => $areahead_comment16,
            'areahead_comment17' => $areahead_comment17,
            'areahead_pastors' => $areahead_pastors,
            'areahead_elders' => $areahead_elders,
            'areahead_deacons' => $areahead_deacons,
            'areahead_deaconesses' => $areahead_deaconesses,
            'areahead_adult_males' => $areahead_adult_males,
            'areahead_adult_females' => $areahead_adult_females,
            'areahead_children' => $areahead_children,
            'areahead_youth' => $areahead_youth,
            'areahead_total_att' => $areahead_total_att,
            'areahead_tithe_payers' => $areahead_tithe_payers,
            'areahead_active_tithe_payers' => $areahead_active_tithe_payers,
            'areahead_tithes_paid' => $areahead_tithes_paid,
            'areahead_oferring' => $areahead_oferring,
            'areahead_any_oferring' => $areahead_any_oferring,
            'areahead_total_tithe_off' => $areahead_total_tithe_off,
        ];
    }
}
