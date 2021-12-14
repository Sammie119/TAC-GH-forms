<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWMonitorReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class MonitorReportChartsController extends Controller
{
    static public function monitor($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWMonitorReport::count();
                $area_area = VWMonitorReport::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWMonitorReport::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWMonitorReport::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWMonitorReport::select(DB::raw('monirep_question1, count(monitor_id) AS y'))->groupBy('monirep_question1')->get();
                $monirep_comment1 = VWMonitorReport::select(DB::raw('monirep_comment1, count(monirep_comment1)'))->groupBy('monirep_comment1')->get();
                $question2 = VWMonitorReport::select(DB::raw('monirep_question2, count(monitor_id) AS y'))->groupBy('monirep_question2')->get();
                $monirep_comment2 = VWMonitorReport::select(DB::raw('monirep_comment2, count(monirep_comment2)'))->groupBy('monirep_comment2')->get();
                $monirep_comment3 = VWMonitorReport::select(DB::raw('monirep_comment3, count(monirep_comment3)'))->groupBy('monirep_comment3')->get();
                $monirep_comment4 = VWMonitorReport::select(DB::raw('monirep_comment4, count(monirep_comment4)'))->groupBy('monirep_comment4')->get();
                $question5 = VWMonitorReport::select(DB::raw('monirep_question5, count(monitor_id) AS y'))->groupBy('monirep_question5')->get();
                $monirep_comment5 = VWMonitorReport::select(DB::raw('monirep_comment5, count(monirep_comment5)'))->groupBy('monirep_comment5')->get();
                $question6 = VWMonitorReport::select(DB::raw('monirep_question6, count(monitor_id) AS y'))->groupBy('monirep_question6')->get();
                $monirep_comment6 = VWMonitorReport::select(DB::raw('monirep_comment6, count(monirep_comment6)'))->groupBy('monirep_comment6')->get();
                $question7a = VWMonitorReport::select(DB::raw('monirep_question7a, count(monitor_id) AS y'))->groupBy('monirep_question7a')->get();
                $question7b  = VWMonitorReport::select(DB::raw('monirep_question7b, count(monitor_id) AS y'))->groupBy('monirep_question7b')->get();
                $question7c  = VWMonitorReport::select(DB::raw('monirep_question7c, count(monitor_id) AS y'))->groupBy('monirep_question7c')->get();
                $question7d  = VWMonitorReport::select(DB::raw('monirep_question7d, count(monitor_id) AS y'))->groupBy('monirep_question7d')->get();
                $question7e  = VWMonitorReport::select(DB::raw('monirep_question7e, count(monitor_id) AS y'))->groupBy('monirep_question7e')->get();
                $question8a  = VWMonitorReport::select(DB::raw('monirep_question8a, count(monitor_id) AS y'))->groupBy('monirep_question8a')->get();
                $monirep_comment8b = VWMonitorReport::select(DB::raw('monirep_comment8b, count(monirep_comment8b)'))->groupBy('monirep_comment8b')->get();
                $monirep_comment9 = VWMonitorReport::select(DB::raw('monirep_comment9, count(monirep_comment9)'))->groupBy('monirep_comment9')->get();
                $monirep_pastors = VWMonitorReport::sum('monirep_pastors');
                $monirep_elders = VWMonitorReport::sum('monirep_elders');
                $monirep_deacons = VWMonitorReport::sum('monirep_deacons');
                $monirep_deaconesses = VWMonitorReport::sum('monirep_deaconesses');
                $monirep_adult_males = VWMonitorReport::sum('monirep_adult_males');
                $monirep_adult_females = VWMonitorReport::sum('monirep_adult_females');
                $monirep_children = VWMonitorReport::sum('monirep_children');
                $monirep_youth = VWMonitorReport::sum('monirep_youth');
                $monirep_total_att = VWMonitorReport::sum('monirep_total_att');
                $monirep_tithe_payers = VWMonitorReport::sum('monirep_tithe_payers');
                $monirep_tithes_paid = VWMonitorReport::sum('monirep_tithes_paid');
                $monirep_oferring = VWMonitorReport::sum('monirep_oferring');
                $monirep_total_tithe_off = VWMonitorReport::sum('monirep_total_tithe_off');
               
                break;
        
            case 'Area':
                $total = VWMonitorReport::where('area', 'ILIKE', $area)->count();
                $area_area = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question1, count(monitor_id) AS y'))->groupBy('monirep_question1')->get();
                $monirep_comment1 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_comment1, count(monirep_comment1)'))->groupBy('monirep_comment1')->get();
                $question2 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question2, count(monitor_id) AS y'))->groupBy('monirep_question2')->get();
                $monirep_comment2 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_comment2, count(monirep_comment2)'))->groupBy('monirep_comment2')->get();
                $monirep_comment3 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_comment3, count(monirep_comment3)'))->groupBy('monirep_comment3')->get();
                $monirep_comment4 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_comment4, count(monirep_comment4)'))->groupBy('monirep_comment4')->get();
                $question5 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question5, count(monitor_id) AS y'))->groupBy('monirep_question5')->get();
                $monirep_comment5 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_comment5, count(monirep_comment5)'))->groupBy('monirep_comment5')->get();
                $question6 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question6, count(monitor_id) AS y'))->groupBy('monirep_question6')->get();
                $monirep_comment6 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_comment6, count(monirep_comment6)'))->groupBy('monirep_comment6')->get();
                $question7a = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question7a, count(monitor_id) AS y'))->groupBy('monirep_question7a')->get();
                $question7b  = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question7b, count(monitor_id) AS y'))->groupBy('monirep_question7b')->get();
                $question7c  = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question7c, count(monitor_id) AS y'))->groupBy('monirep_question7c')->get();
                $question7d  = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question7d, count(monitor_id) AS y'))->groupBy('monirep_question7d')->get();
                $question7e  = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question7e, count(monitor_id) AS y'))->groupBy('monirep_question7e')->get();
                $question8a  = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_question8a, count(monitor_id) AS y'))->groupBy('monirep_question8a')->get();
                $monirep_comment8b = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_comment8b, count(monirep_comment8b)'))->groupBy('monirep_comment8b')->get();
                $monirep_comment9 = VWMonitorReport::where('area', 'ILIKE', $area)->select(DB::raw('monirep_comment9, count(monirep_comment9)'))->groupBy('monirep_comment9')->get();
                $monirep_pastors = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_pastors');
                $monirep_elders = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_elders');
                $monirep_deacons = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_deacons');
                $monirep_deaconesses = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_deaconesses');
                $monirep_adult_males = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_adult_males');
                $monirep_adult_females = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_adult_females');
                $monirep_children = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_children');
                $monirep_youth = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_youth');
                $monirep_total_att = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_total_att');
                $monirep_tithe_payers = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_tithe_payers');
                $monirep_tithes_paid = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_tithes_paid');
                $monirep_oferring = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_oferring');
                $monirep_total_tithe_off = VWMonitorReport::where('area', 'ILIKE', $area)->sum('monirep_total_tithe_off');

                break;
        
            case 'District':
                $total = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question1, count(monitor_id) AS y'))->groupBy('monirep_question1')->get();
                $monirep_comment1 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_comment1, count(monirep_comment1)'))->groupBy('monirep_comment1')->get();
                $question2 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question2, count(monitor_id) AS y'))->groupBy('monirep_question2')->get();
                $monirep_comment2 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_comment2, count(monirep_comment2)'))->groupBy('monirep_comment2')->get();
                $monirep_comment3 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_comment3, count(monirep_comment3)'))->groupBy('monirep_comment3')->get();
                $monirep_comment4 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_comment4, count(monirep_comment4)'))->groupBy('monirep_comment4')->get();
                $question5 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question5, count(monitor_id) AS y'))->groupBy('monirep_question5')->get();
                $monirep_comment5 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_comment5, count(monirep_comment5)'))->groupBy('monirep_comment5')->get();
                $question6 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question6, count(monitor_id) AS y'))->groupBy('monirep_question6')->get();
                $monirep_comment6 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_comment6, count(monirep_comment6)'))->groupBy('monirep_comment6')->get();
                $question7a = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question7a, count(monitor_id) AS y'))->groupBy('monirep_question7a')->get();
                $question7b  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question7b, count(monitor_id) AS y'))->groupBy('monirep_question7b')->get();
                $question7c  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question7c, count(monitor_id) AS y'))->groupBy('monirep_question7c')->get();
                $question7d  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question7d, count(monitor_id) AS y'))->groupBy('monirep_question7d')->get();
                $question7e  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question7e, count(monitor_id) AS y'))->groupBy('monirep_question7e')->get();
                $question8a  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_question8a, count(monitor_id) AS y'))->groupBy('monirep_question8a')->get();
                $monirep_comment8b = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_comment8b, count(monirep_comment8b)'))->groupBy('monirep_comment8b')->get();
                $monirep_comment9 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('monirep_comment9, count(monirep_comment9)'))->groupBy('monirep_comment9')->get();
                $monirep_pastors = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_pastors');
                $monirep_elders = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_elders');
                $monirep_deacons = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_deacons');
                $monirep_deaconesses = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_deaconesses');
                $monirep_adult_males = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_adult_males');
                $monirep_adult_females = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_adult_females');
                $monirep_children = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_children');
                $monirep_youth = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_youth');
                $monirep_total_att = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_total_att');
                $monirep_tithe_payers = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_tithe_payers');
                $monirep_tithes_paid = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_tithes_paid');
                $monirep_oferring = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_oferring');
                $monirep_total_tithe_off = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('monirep_total_tithe_off');

                break;
        
            case 'Local':
                $total = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->count();
                $area_area = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question1, count(monitor_id) AS y'))->groupBy('monirep_question1')->get();
                $monirep_comment1 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_comment1, count(monirep_comment1)'))->groupBy('monirep_comment1')->get();
                $question2 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question2, count(monitor_id) AS y'))->groupBy('monirep_question2')->get();
                $monirep_comment2 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_comment2, count(monirep_comment2)'))->groupBy('monirep_comment2')->get();
                $monirep_comment3 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_comment3, count(monirep_comment3)'))->groupBy('monirep_comment3')->get();
                $monirep_comment4 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_comment4, count(monirep_comment4)'))->groupBy('monirep_comment4')->get();
                $question5 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question5, count(monitor_id) AS y'))->groupBy('monirep_question5')->get();
                $monirep_comment5 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_comment5, count(monirep_comment5)'))->groupBy('monirep_comment5')->get();
                $question6 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question6, count(monitor_id) AS y'))->groupBy('monirep_question6')->get();
                $monirep_comment6 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_comment6, count(monirep_comment6)'))->groupBy('monirep_comment6')->get();
                $question7a = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question7a, count(monitor_id) AS y'))->groupBy('monirep_question7a')->get();
                $question7b  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question7b, count(monitor_id) AS y'))->groupBy('monirep_question7b')->get();
                $question7c  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question7c, count(monitor_id) AS y'))->groupBy('monirep_question7c')->get();
                $question7d  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question7d, count(monitor_id) AS y'))->groupBy('monirep_question7d')->get();
                $question7e  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question7e, count(monitor_id) AS y'))->groupBy('monirep_question7e')->get();
                $question8a  = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_question8a, count(monitor_id) AS y'))->groupBy('monirep_question8a')->get();
                $monirep_comment8b = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_comment8b, count(monirep_comment8b)'))->groupBy('monirep_comment8b')->get();
                $monirep_comment9 = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('monirep_comment9, count(monirep_comment9)'))->groupBy('monirep_comment9')->get();
                $monirep_pastors = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_pastors');
                $monirep_elders = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_elders');
                $monirep_deacons = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_deacons');
                $monirep_deaconesses = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_deaconesses');
                $monirep_adult_males = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_adult_males');
                $monirep_adult_females = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_adult_females');
                $monirep_children = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_children');
                $monirep_youth = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_youth');
                $monirep_total_att = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_total_att');
                $monirep_tithe_payers = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_tithe_payers');
                $monirep_tithes_paid = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_tithes_paid');
                $monirep_oferring = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_oferring');
                $monirep_total_tithe_off = VWMonitorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('monirep_total_tithe_off');
                
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
            'monirep_comment1' => $monirep_comment1,
            'question2' => $question2,
            'monirep_comment2' => $monirep_comment2,
            'monirep_comment3' => $monirep_comment3,
            'monirep_comment4' => $monirep_comment4,
            'question5' => $question5,
            'monirep_comment5' => $monirep_comment5,
            'question6' => $question6,
            'monirep_comment6' => $monirep_comment6,
            'question7a' => $question7a,
            'question7b' => $question7b,
            'question7c' => $question7c,
            'question7d' => $question7d,
            'question7e' => $question7e,
            'question8a' => $question8a,
            'monirep_comment8b' => $monirep_comment8b,
            'monirep_comment9' => $monirep_comment9,
            'monirep_pastors' => $monirep_pastors,
            'monirep_elders' => $monirep_elders,
            'monirep_deacons' => $monirep_deacons,
            'monirep_deaconesses' => $monirep_deaconesses,
            'monirep_adult_males' => $monirep_adult_males,
            'monirep_adult_females' => $monirep_adult_females,
            'monirep_children' => $monirep_children,
            'monirep_youth' => $monirep_youth,
            'monirep_total_att' => $monirep_total_att,
            'monirep_tithe_payers' => $monirep_tithe_payers,
            'monirep_tithes_paid' => $monirep_tithes_paid,
            'monirep_oferring' => $monirep_oferring,
            'monirep_total_tithe_off' => $monirep_total_tithe_off,
        ];
    }
}
