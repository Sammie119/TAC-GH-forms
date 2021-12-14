<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use App\Models\VWMemberReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MemberReportChartsController extends Controller
{
    static public function member($destination, $area, $dist, $loc)
    {
        switch ($destination) {
            case 'General':
                $total = VWMemberReport::count();
                $area_area = VWMemberReport::select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWMemberReport::select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWMemberReport::select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWMemberReport::select(DB::raw('member_question1, count(member_id) AS y'))->groupBy('member_question1')->get();
                $member_comment1 = VWMemberReport::select(DB::raw('member_comment1, count(member_comment1)'))->groupBy('member_comment1')->get();
                $question2 = VWMemberReport::select(DB::raw('member_question2, count(member_id) AS y'))->groupBy('member_question2')->get();
                $member_comment2 = VWMemberReport::select(DB::raw('member_comment2, count(member_comment2)'))->groupBy('member_comment2')->get();
                $question3 = VWMemberReport::select(DB::raw('member_question3, count(member_id) AS y'))->groupBy('member_question3')->get();
                $member_comment3 = VWMemberReport::select(DB::raw('member_comment3, count(member_comment3)'))->groupBy('member_comment3')->get();
                $member_comment4 = VWMemberReport::select(DB::raw('member_comment4, count(member_comment4)'))->groupBy('member_comment4')->get();
                $question5 = VWMemberReport::select(DB::raw('member_question5, count(member_id) AS y'))->groupBy('member_question5')->get();
                $member_comment5 = VWMemberReport::select(DB::raw('member_comment5, count(member_comment5)'))->groupBy('member_comment5')->get();
                $question6 = VWMemberReport::select(DB::raw('member_question6, count(member_id) AS y'))->groupBy('member_question6')->get();
                $member_comment6 = VWMemberReport::select(DB::raw('member_comment6, count(member_comment6)'))->groupBy('member_comment6')->get();
                $question7 = VWMemberReport::select(DB::raw('member_question7, count(member_id) AS y'))->groupBy('member_question7')->get();
                $member_comment7 = VWMemberReport::select(DB::raw('member_comment7, count(member_comment7)'))->groupBy('member_comment7')->get();
                $question8 = VWMemberReport::select(DB::raw('member_question8, count(member_id) AS y'))->groupBy('member_question8')->get();
                $member_comment8 = VWMemberReport::select(DB::raw('member_comment8, count(member_comment8)'))->groupBy('member_comment8')->get();
                $question9 = VWMemberReport::select(DB::raw('member_question9, count(member_id) AS y'))->groupBy('member_question9')->get();
                $member_comment9 = VWMemberReport::select(DB::raw('member_comment9, count(member_comment9)'))->groupBy('member_comment9')->get();
                $member_comment10 = VWMemberReport::select(DB::raw('member_comment10, count(member_comment10)'))->groupBy('member_comment10')->get();
                $question11 = VWMemberReport::select(DB::raw('member_question11, count(member_id) AS y'))->groupBy('member_question11')->get();
                $member_comment11 = VWMemberReport::select(DB::raw('member_comment11, count(member_comment11)'))->groupBy('member_comment11')->get();
                $question12 = VWMemberReport::select(DB::raw('member_question12, count(member_id) AS y'))->groupBy('member_question12')->get();
                $member_comment12 = VWMemberReport::select(DB::raw('member_comment12, count(member_comment12)'))->groupBy('member_comment12')->get();
                $question13 = VWMemberReport::select(DB::raw('member_question13, count(member_id) AS y'))->groupBy('member_question13')->get();
                $member_comment13 = VWMemberReport::select(DB::raw('member_comment13, count(member_comment13)'))->groupBy('member_comment13')->get();
                $question14 = VWMemberReport::select(DB::raw('member_question14, count(member_id) AS y'))->groupBy('member_question14')->get();
                $member_comment14 = VWMemberReport::select(DB::raw('member_comment14, count(member_comment14)'))->groupBy('member_comment14')->get();
                $question15 = VWMemberReport::select(DB::raw('member_question15, count(member_id) AS y'))->groupBy('member_question15')->get();
                $member_comment15 = VWMemberReport::select(DB::raw('member_comment15, count(member_comment15)'))->groupBy('member_comment15')->get();

                break;
        
            case 'Area':
                $total = VWMemberReport::where('area', 'ILIKE', $area)->count();
                $area_area = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question1, count(member_id) AS y'))->groupBy('member_question1')->get();
                $member_comment1 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment1, count(member_comment1)'))->groupBy('member_comment1')->get();
                $question2 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question2, count(member_id) AS y'))->groupBy('member_question2')->get();
                $member_comment2 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment2, count(member_comment2)'))->groupBy('member_comment2')->get();
                $question3 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question3, count(member_id) AS y'))->groupBy('member_question3')->get();
                $member_comment3 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment3, count(member_comment3)'))->groupBy('member_comment3')->get();
                $member_comment4 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment4, count(member_comment4)'))->groupBy('member_comment4')->get();
                $question5 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question5, count(member_id) AS y'))->groupBy('member_question5')->get();
                $member_comment5 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment5, count(member_comment5)'))->groupBy('member_comment5')->get();
                $question6 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question6, count(member_id) AS y'))->groupBy('member_question6')->get();
                $member_comment6 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment6, count(member_comment6)'))->groupBy('member_comment6')->get();
                $question7 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question7, count(member_id) AS y'))->groupBy('member_question7')->get();
                $member_comment7 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment7, count(member_comment7)'))->groupBy('member_comment7')->get();
                $question8 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question8, count(member_id) AS y'))->groupBy('member_question8')->get();
                $member_comment8 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment8, count(member_comment8)'))->groupBy('member_comment8')->get();
                $question9 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question9, count(member_id) AS y'))->groupBy('member_question9')->get();
                $member_comment9 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment9, count(member_comment9)'))->groupBy('member_comment9')->get();
                $member_comment10 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment10, count(member_comment10)'))->groupBy('member_comment10')->get();
                $question11 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question11, count(member_id) AS y'))->groupBy('member_question11')->get();
                $member_comment11 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment11, count(member_comment11)'))->groupBy('member_comment11')->get();
                $question12 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question12, count(member_id) AS y'))->groupBy('member_question12')->get();
                $member_comment12 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment12, count(member_comment12)'))->groupBy('member_comment12')->get();
                $question13 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question13, count(member_id) AS y'))->groupBy('member_question13')->get();
                $member_comment13 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment13, count(member_comment13)'))->groupBy('member_comment13')->get();
                $question14 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question14, count(member_id) AS y'))->groupBy('member_question14')->get();
                $member_comment14 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment14, count(member_comment14)'))->groupBy('member_comment14')->get();
                $question15 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_question15, count(member_id) AS y'))->groupBy('member_question15')->get();
                $member_comment15 = VWMemberReport::where('area', 'ILIKE', $area)->select(DB::raw('member_comment15, count(member_comment15)'))->groupBy('member_comment15')->get();

                break;
        
            case 'District':
                $total = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->count();
                $area_area = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question1, count(member_id) AS y'))->groupBy('member_question1')->get();
                $member_comment1 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment1, count(member_comment1)'))->groupBy('member_comment1')->get();
                $question2 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question2, count(member_id) AS y'))->groupBy('member_question2')->get();
                $member_comment2 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment2, count(member_comment2)'))->groupBy('member_comment2')->get();
                $question3 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question3, count(member_id) AS y'))->groupBy('member_question3')->get();
                $member_comment3 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment3, count(member_comment3)'))->groupBy('member_comment3')->get();
                $member_comment4 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment4, count(member_comment4)'))->groupBy('member_comment4')->get();
                $question5 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question5, count(member_id) AS y'))->groupBy('member_question5')->get();
                $member_comment5 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment5, count(member_comment5)'))->groupBy('member_comment5')->get();
                $question6 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question6, count(member_id) AS y'))->groupBy('member_question6')->get();
                $member_comment6 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment6, count(member_comment6)'))->groupBy('member_comment6')->get();
                $question7 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question7, count(member_id) AS y'))->groupBy('member_question7')->get();
                $member_comment7 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment7, count(member_comment7)'))->groupBy('member_comment7')->get();
                $question8 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question8, count(member_id) AS y'))->groupBy('member_question8')->get();
                $member_comment8 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment8, count(member_comment8)'))->groupBy('member_comment8')->get();
                $question9 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question9, count(member_id) AS y'))->groupBy('member_question9')->get();
                $member_comment9 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment9, count(member_comment9)'))->groupBy('member_comment9')->get();
                $member_comment10 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment10, count(member_comment10)'))->groupBy('member_comment10')->get();
                $question11 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question11, count(member_id) AS y'))->groupBy('member_question11')->get();
                $member_comment11 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment11, count(member_comment11)'))->groupBy('member_comment11')->get();
                $question12 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question12, count(member_id) AS y'))->groupBy('member_question12')->get();
                $member_comment12 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment12, count(member_comment12)'))->groupBy('member_comment12')->get();
                $question13 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question13, count(member_id) AS y'))->groupBy('member_question13')->get();
                $member_comment13 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment13, count(member_comment13)'))->groupBy('member_comment13')->get();
                $question14 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question14, count(member_id) AS y'))->groupBy('member_question14')->get();
                $member_comment14 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment14, count(member_comment14)'))->groupBy('member_comment14')->get();
                $question15 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_question15, count(member_id) AS y'))->groupBy('member_question15')->get();
                $member_comment15 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->select(DB::raw('member_comment15, count(member_comment15)'))->groupBy('member_comment15')->get();

                break;
        
            case 'Local':
                $total = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->count();
                $area_area = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('area, count(area)'))->groupBy('area')->get();
                $district_dist = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('district, count(district)'))->groupBy('district')->get();
                $local_loc = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('local, count(local)'))->groupBy('local')->get();
                $question1 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question1, count(member_id) AS y'))->groupBy('member_question1')->get();
                $member_comment1 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment1, count(member_comment1)'))->groupBy('member_comment1')->get();
                $question2 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question2, count(member_id) AS y'))->groupBy('member_question2')->get();
                $member_comment2 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment2, count(member_comment2)'))->groupBy('member_comment2')->get();
                $question3 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question3, count(member_id) AS y'))->groupBy('member_question3')->get();
                $member_comment3 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment3, count(member_comment3)'))->groupBy('member_comment3')->get();
                $member_comment4 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment4, count(member_comment4)'))->groupBy('member_comment4')->get();
                $question5 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question5, count(member_id) AS y'))->groupBy('member_question5')->get();
                $member_comment5 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment5, count(member_comment5)'))->groupBy('member_comment5')->get();
                $question6 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question6, count(member_id) AS y'))->groupBy('member_question6')->get();
                $member_comment6 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment6, count(member_comment6)'))->groupBy('member_comment6')->get();
                $question7 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question7, count(member_id) AS y'))->groupBy('member_question7')->get();
                $member_comment7 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment7, count(member_comment7)'))->groupBy('member_comment7')->get();
                $question8 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question8, count(member_id) AS y'))->groupBy('member_question8')->get();
                $member_comment8 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment8, count(member_comment8)'))->groupBy('member_comment8')->get();
                $question9 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question9, count(member_id) AS y'))->groupBy('member_question9')->get();
                $member_comment9 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment9, count(member_comment9)'))->groupBy('member_comment9')->get();
                $member_comment10 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment10, count(member_comment10)'))->groupBy('member_comment10')->get();
                $question11 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question11, count(member_id) AS y'))->groupBy('member_question11')->get();
                $member_comment11 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment11, count(member_comment11)'))->groupBy('member_comment11')->get();
                $question12 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question12, count(member_id) AS y'))->groupBy('member_question12')->get();
                $member_comment12 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment12, count(member_comment12)'))->groupBy('member_comment12')->get();
                $question13 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question13, count(member_id) AS y'))->groupBy('member_question13')->get();
                $member_comment13 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment13, count(member_comment13)'))->groupBy('member_comment13')->get();
                $question14 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question14, count(member_id) AS y'))->groupBy('member_question14')->get();
                $member_comment14 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment14, count(member_comment14)'))->groupBy('member_comment14')->get();
                $question15 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_question15, count(member_id) AS y'))->groupBy('member_question15')->get();
                $member_comment15 = VWMemberReport::where('area', 'ILIKE', $area)->where('district', 'ILIKE', $dist)->where('local', 'ILIKE', $loc)->select(DB::raw('member_comment15, count(member_comment15)'))->groupBy('member_comment15')->get();
                
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
            'member_comment1' => $member_comment1,
            'question2' => $question2,
            'member_comment2' => $member_comment2,
            'question3' => $question3,
            'member_comment3' => $member_comment3,
            'member_comment4' => $member_comment4,
            'question5' => $question5,
            'member_comment5' => $member_comment5,
            'question6' => $question6,
            'member_comment6' => $member_comment6,
            'question7' => $question7,
            'member_comment7' => $member_comment7,
            'question8' => $question8,
            'member_comment8' => $member_comment8,
            'question9' => $question9,
            'member_comment9' => $member_comment9,
            'member_comment10' => $member_comment10,
            'question11' => $question11,
            'member_comment11' => $member_comment11,
            'question12' => $question12,
            'member_comment12' => $member_comment12,
            'question13' => $question13,
            'member_comment13' => $member_comment13,
            'question14' => $question14,
            'member_comment14' => $member_comment14,
            'question15' => $question15,
            'member_comment15' => $member_comment15,
        ];
    }
}
