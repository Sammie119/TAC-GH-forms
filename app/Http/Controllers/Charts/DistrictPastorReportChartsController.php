<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWDistrictPastorReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DistrictPastorReportChartsController extends Controller
{
    static public function districtPastReport($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWDistrictPastorReport::count();
                $area_area = VWDistrictPastorReport::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWDistrictPastorReport::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWDistrictPastorReport::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $distpast_comment1 = VWDistrictPastorReport::select(DB::raw('distpast_comment1, count(distpast_comment1)'))->groupBy('distpast_comment1')->get();
                $distpast_comment2 = VWDistrictPastorReport::select(DB::raw('distpast_comment2, count(distpast_comment2)'))->groupBy('distpast_comment2')->get();
                $distpast_comment3 = VWDistrictPastorReport::select(DB::raw('distpast_comment3, count(distpast_comment3)'))->groupBy('distpast_comment3')->get();
                $distpast_comment4 = VWDistrictPastorReport::select(DB::raw('distpast_comment4, count(distpast_comment4)'))->groupBy('distpast_comment4')->get();
                $distpast_comment5 = VWDistrictPastorReport::select(DB::raw('distpast_comment5, count(distpast_comment5)'))->groupBy('distpast_comment5')->get();
                $question6a = VWDistrictPastorReport::select(DB::raw('distpast_question6a, count(district_pastor_id) AS y'))->groupBy('distpast_question6a')->get();
                $question6b = VWDistrictPastorReport::select(DB::raw('distpast_question6b, count(district_pastor_id) AS y'))->groupBy('distpast_question6b')->get();
                $question6c = VWDistrictPastorReport::select(DB::raw('distpast_question6c, count(district_pastor_id) AS y'))->groupBy('distpast_question6c')->get();
                $question6d = VWDistrictPastorReport::select(DB::raw('distpast_question6d, count(district_pastor_id) AS y'))->groupBy('distpast_question6d')->get();
                $question6e = VWDistrictPastorReport::select(DB::raw('distpast_question6e, count(district_pastor_id) AS y'))->groupBy('distpast_question6e')->get();
                $question7 = VWDistrictPastorReport::select(DB::raw('distpast_question7, count(district_pastor_id) AS y'))->groupBy('distpast_question7')->get();
                $question8 = VWDistrictPastorReport::select(DB::raw('distpast_question8, count(district_pastor_id) AS y'))->groupBy('distpast_question8')->get();
                $question9 = VWDistrictPastorReport::select(DB::raw('distpast_question9, count(district_pastor_id) AS y'))->groupBy('distpast_question9')->get();
                $distpast_comment9 = VWDistrictPastorReport::select(DB::raw('distpast_comment9, count(distpast_comment9)'))->groupBy('distpast_comment9')->get();
                $distpast_comment10 = VWDistrictPastorReport::select(DB::raw('distpast_comment10, count(distpast_comment10)'))->groupBy('distpast_comment10')->get();
                $distpast_comment11 = VWDistrictPastorReport::select(DB::raw('distpast_comment11, count(distpast_comment11)'))->groupBy('distpast_comment11')->get();
                $distpast_comment12 = VWDistrictPastorReport::select(DB::raw('distpast_comment12, count(distpast_comment12)'))->groupBy('distpast_comment12')->get();
                $distpast_comment13 = VWDistrictPastorReport::select(DB::raw('distpast_comment13, count(distpast_comment13)'))->groupBy('distpast_comment13')->get();
                $distpast_comment14 = VWDistrictPastorReport::select(DB::raw('distpast_comment14, count(distpast_comment14)'))->groupBy('distpast_comment14')->get();
                $distpast_comment15 = VWDistrictPastorReport::select(DB::raw('distpast_comment15, count(distpast_comment15)'))->groupBy('distpast_comment15')->get();
                $distpast_comment16 = VWDistrictPastorReport::select(DB::raw('distpast_comment16, count(distpast_comment16)'))->groupBy('distpast_comment16')->get();
                $distpast_pastors = VWDistrictPastorReport::sum('distpast_pastors');
                $distpast_elders = VWDistrictPastorReport::sum('distpast_elders');
                $distpast_deacons = VWDistrictPastorReport::sum('distpast_deacons');
                $distpast_deaconesses = VWDistrictPastorReport::sum('distpast_deaconesses');
                $distpast_adult_males = VWDistrictPastorReport::sum('distpast_adult_males');
                $distpast_adult_females = VWDistrictPastorReport::sum('distpast_adult_females');
                $distpast_children = VWDistrictPastorReport::sum('distpast_children');
                $distpast_youth = VWDistrictPastorReport::sum('distpast_youth');
                $distpast_total_att = VWDistrictPastorReport::sum('distpast_total_att');
                $distpast_tithe_payers = VWDistrictPastorReport::sum('distpast_tithe_payers');
                $distpast_active_tithe_payers = VWDistrictPastorReport::sum('distpast_active_tithe_payers');
                $distpast_officers_tithe_payers = VWDistrictPastorReport::sum('distpast_officers_tithe_payers');
                $distpast_tithes_paid = VWDistrictPastorReport::sum('distpast_tithes_paid');
                $distpast_oferring = VWDistrictPastorReport::sum('distpast_oferring');
                $distpast_any_oferring = VWDistrictPastorReport::sum('distpast_any_oferring');
                $distpast_total_tithe_off = VWDistrictPastorReport::sum('distpast_total_tithe_off');

                break;
        
            case 'Area':
                $total = VWDistrictPastorReport::where('area', 'ILIKE', $area)->count();
                $area_area = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $distpast_comment1 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment1, count(distpast_comment1)'))->groupBy('distpast_comment1')->get();
                $distpast_comment2 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment2, count(distpast_comment2)'))->groupBy('distpast_comment2')->get();
                $distpast_comment3 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment3, count(distpast_comment3)'))->groupBy('distpast_comment3')->get();
                $distpast_comment4 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment4, count(distpast_comment4)'))->groupBy('distpast_comment4')->get();
                $distpast_comment5 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment5, count(distpast_comment5)'))->groupBy('distpast_comment5')->get();
                $question6a = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_question6a, count(district_pastor_id) AS y'))->groupBy('distpast_question6a')->get();
                $question6b = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_question6b, count(district_pastor_id) AS y'))->groupBy('distpast_question6b')->get();
                $question6c = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_question6c, count(district_pastor_id) AS y'))->groupBy('distpast_question6c')->get();
                $question6d = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_question6d, count(district_pastor_id) AS y'))->groupBy('distpast_question6d')->get();
                $question6e = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_question6e, count(district_pastor_id) AS y'))->groupBy('distpast_question6e')->get();
                $question7 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_question7, count(district_pastor_id) AS y'))->groupBy('distpast_question7')->get();
                $question8 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_question8, count(district_pastor_id) AS y'))->groupBy('distpast_question8')->get();
                $question9 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_question9, count(district_pastor_id) AS y'))->groupBy('distpast_question9')->get();
                $distpast_comment9 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment9, count(distpast_comment9)'))->groupBy('distpast_comment9')->get();
                $distpast_comment10 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment10, count(distpast_comment10)'))->groupBy('distpast_comment10')->get();
                $distpast_comment11 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment11, count(distpast_comment11)'))->groupBy('distpast_comment11')->get();
                $distpast_comment12 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment12, count(distpast_comment12)'))->groupBy('distpast_comment12')->get();
                $distpast_comment13 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment13, count(distpast_comment13)'))->groupBy('distpast_comment13')->get();
                $distpast_comment14 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment14, count(distpast_comment14)'))->groupBy('distpast_comment14')->get();
                $distpast_comment15 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment15, count(distpast_comment15)'))->groupBy('distpast_comment15')->get();
                $distpast_comment16 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->select(DB::raw('distpast_comment16, count(distpast_comment16)'))->groupBy('distpast_comment16')->get();
                $distpast_pastors = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_pastors');
                $distpast_elders = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_elders');
                $distpast_deacons = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_deacons');
                $distpast_deaconesses = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_deaconesses');
                $distpast_adult_males = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_adult_males');
                $distpast_adult_females = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_adult_females');
                $distpast_children = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_children');
                $distpast_youth = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_youth');
                $distpast_total_att = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_total_att');
                $distpast_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_tithe_payers');
                $distpast_active_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_active_tithe_payers');
                $distpast_officers_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_officers_tithe_payers');
                $distpast_tithes_paid = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_tithes_paid');
                $distpast_oferring = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_oferring');
                $distpast_any_oferring = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_any_oferring');
                $distpast_total_tithe_off = VWDistrictPastorReport::where('area', 'ILIKE', $area)->sum('distpast_total_tithe_off');
                
                break;
        
            case 'District':
                $total = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $distpast_comment1 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment1, count(distpast_comment1)'))->groupBy('distpast_comment1')->get();
                $distpast_comment2 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment2, count(distpast_comment2)'))->groupBy('distpast_comment2')->get();
                $distpast_comment3 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment3, count(distpast_comment3)'))->groupBy('distpast_comment3')->get();
                $distpast_comment4 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment4, count(distpast_comment4)'))->groupBy('distpast_comment4')->get();
                $distpast_comment5 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment5, count(distpast_comment5)'))->groupBy('distpast_comment5')->get();
                $question6a = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_question6a, count(district_pastor_id) AS y'))->groupBy('distpast_question6a')->get();
                $question6b = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_question6b, count(district_pastor_id) AS y'))->groupBy('distpast_question6b')->get();
                $question6c = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_question6c, count(district_pastor_id) AS y'))->groupBy('distpast_question6c')->get();
                $question6d = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_question6d, count(district_pastor_id) AS y'))->groupBy('distpast_question6d')->get();
                $question6e = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_question6e, count(district_pastor_id) AS y'))->groupBy('distpast_question6e')->get();
                $question7 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_question7, count(district_pastor_id) AS y'))->groupBy('distpast_question7')->get();
                $question8 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_question8, count(district_pastor_id) AS y'))->groupBy('distpast_question8')->get();
                $question9 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_question9, count(district_pastor_id) AS y'))->groupBy('distpast_question9')->get();
                $distpast_comment9 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment9, count(distpast_comment9)'))->groupBy('distpast_comment9')->get();
                $distpast_comment10 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment10, count(distpast_comment10)'))->groupBy('distpast_comment10')->get();
                $distpast_comment11 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment11, count(distpast_comment11)'))->groupBy('distpast_comment11')->get();
                $distpast_comment12 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment12, count(distpast_comment12)'))->groupBy('distpast_comment12')->get();
                $distpast_comment13 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment13, count(distpast_comment13)'))->groupBy('distpast_comment13')->get();
                $distpast_comment14 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment14, count(distpast_comment14)'))->groupBy('distpast_comment14')->get();
                $distpast_comment15 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment15, count(distpast_comment15)'))->groupBy('distpast_comment15')->get();
                $distpast_comment16 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('distpast_comment16, count(distpast_comment16)'))->groupBy('distpast_comment16')->get();
                $distpast_pastors = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_pastors');
                $distpast_elders = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_elders');
                $distpast_deacons = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_deacons');
                $distpast_deaconesses = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_deaconesses');
                $distpast_adult_males = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_adult_males');
                $distpast_adult_females = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_adult_females');
                $distpast_children = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_children');
                $distpast_youth = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_youth');
                $distpast_total_att = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_total_att');
                $distpast_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_tithe_payers');
                $distpast_active_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_active_tithe_payers');
                $distpast_officers_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_officers_tithe_payers');
                $distpast_tithes_paid = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_tithes_paid');
                $distpast_oferring = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_oferring');
                $distpast_any_oferring = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_any_oferring');
                $distpast_total_tithe_off = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->sum('distpast_total_tithe_off');
               
                break;
        
            case 'Local':
                $total = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->count();
                $area_area = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $distpast_comment1 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment1, count(distpast_comment1)'))->groupBy('distpast_comment1')->get();
                $distpast_comment2 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment2, count(distpast_comment2)'))->groupBy('distpast_comment2')->get();
                $distpast_comment3 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment3, count(distpast_comment3)'))->groupBy('distpast_comment3')->get();
                $distpast_comment4 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment4, count(distpast_comment4)'))->groupBy('distpast_comment4')->get();
                $distpast_comment5 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment5, count(distpast_comment5)'))->groupBy('distpast_comment5')->get();
                $question6a = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_question6a, count(district_pastor_id) AS y'))->groupBy('distpast_question6a')->get();
                $question6b = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_question6b, count(district_pastor_id) AS y'))->groupBy('distpast_question6b')->get();
                $question6c = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_question6c, count(district_pastor_id) AS y'))->groupBy('distpast_question6c')->get();
                $question6d = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_question6d, count(district_pastor_id) AS y'))->groupBy('distpast_question6d')->get();
                $question6e = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_question6e, count(district_pastor_id) AS y'))->groupBy('distpast_question6e')->get();
                $question7 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_question7, count(district_pastor_id) AS y'))->groupBy('distpast_question7')->get();
                $question8 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_question8, count(district_pastor_id) AS y'))->groupBy('distpast_question8')->get();
                $question9 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_question9, count(district_pastor_id) AS y'))->groupBy('distpast_question9')->get();
                $distpast_comment9 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment9, count(distpast_comment9)'))->groupBy('distpast_comment9')->get();
                $distpast_comment10 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment10, count(distpast_comment10)'))->groupBy('distpast_comment10')->get();
                $distpast_comment11 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment11, count(distpast_comment11)'))->groupBy('distpast_comment11')->get();
                $distpast_comment12 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment12, count(distpast_comment12)'))->groupBy('distpast_comment12')->get();
                $distpast_comment13 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment13, count(distpast_comment13)'))->groupBy('distpast_comment13')->get();
                $distpast_comment14 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment14, count(distpast_comment14)'))->groupBy('distpast_comment14')->get();
                $distpast_comment15 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment15, count(distpast_comment15)'))->groupBy('distpast_comment15')->get();
                $distpast_comment16 = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('distpast_comment16, count(distpast_comment16)'))->groupBy('distpast_comment16')->get();
                $distpast_pastors = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_pastors');
                $distpast_elders = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_elders');
                $distpast_deacons = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_deacons');
                $distpast_deaconesses = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_deaconesses');
                $distpast_adult_males = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_adult_males');
                $distpast_adult_females = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_adult_females');
                $distpast_children = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_children');
                $distpast_youth = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_youth');
                $distpast_total_att = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_total_att');
                $distpast_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_tithe_payers');
                $distpast_active_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_active_tithe_payers');
                $distpast_officers_tithe_payers = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_officers_tithe_payers');
                $distpast_tithes_paid = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_tithes_paid');
                $distpast_oferring = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_oferring');
                $distpast_any_oferring = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_any_oferring');
                $distpast_total_tithe_off = VWDistrictPastorReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->sum('distpast_total_tithe_off');
               
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
            'distpast_comment1' => $distpast_comment1,
            'distpast_comment2' => $distpast_comment2,
            'distpast_comment3' => $distpast_comment3,
            'distpast_comment4' => $distpast_comment4,
            'distpast_comment5' => $distpast_comment5,
            'question6a' => $question6a,
            'question6b' => $question6b,
            'question6c' => $question6c,
            'question6d' => $question6d,
            'question6e' => $question6e,
            'question7' => $question7,
            'question8' => $question8,
            'question9' => $question9,
            'distpast_comment9' => $distpast_comment9,
            'distpast_comment10' => $distpast_comment10,
            'distpast_comment11' => $distpast_comment11,
            'distpast_comment12' => $distpast_comment12,
            'distpast_comment13' => $distpast_comment13,
            'distpast_comment14' => $distpast_comment14,
            'distpast_comment15' => $distpast_comment15,
            'distpast_comment16' => $distpast_comment16,
            'distpast_pastors' => $distpast_pastors,
            'distpast_elders' => $distpast_elders,
            'distpast_deacons' => $distpast_deacons,
            'distpast_deaconesses' => $distpast_deaconesses,
            'distpast_adult_males' => $distpast_adult_males,
            'distpast_adult_females' => $distpast_adult_females,
            'distpast_children' => $distpast_children,
            'distpast_youth' => $distpast_youth,
            'distpast_total_att' => $distpast_total_att,
            'distpast_tithe_payers' => $distpast_tithe_payers,
            'distpast_active_tithe_payers' => $distpast_active_tithe_payers,
            'distpast_officers_tithe_payers' => $distpast_officers_tithe_payers,
            'distpast_tithes_paid' => $distpast_tithes_paid,
            'distpast_oferring' => $distpast_oferring,
            'distpast_any_oferring' => $distpast_any_oferring,
            'distpast_total_tithe_off' => $distpast_total_tithe_off,
        ];
    }
}
