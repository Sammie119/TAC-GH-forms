<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\AreaHeadReport;
use App\Models\AreaSupQuestions;
use App\Models\AttendanceAnalysis;
use App\Models\CommunityReport;
use App\Models\DistrictLevelMonoter;
use App\Models\DistrictPastorQuestion;
use App\Models\DistrictPastorReport;
use App\Models\FinancialAssessment;
use App\Models\FinancialPolicy;
use App\Models\GrowthQuestionnaire;
use App\Models\LocalEvangelism;
use App\Models\LocalLevelQuestion;
use App\Models\MemberReport;
use App\Models\MonitorReport;
use App\Models\PastorAssessmentQues;
use App\Models\PresidingAssessment;
use App\Models\ProcurementPolicy;
use App\Models\RecordBooksArea;
use App\Models\RecordBooksDistrict;
use App\Models\RecordBooksLocal;
use App\Models\SupAssessmentQues;

class AuthController extends Controller
{
    public function userList()
    {
        $users = User::where('user_role', '!=', 1)->orderBy('user_id')->get();
        return view('users-list', compact('users'));
    }

    public function index()
    {
        if(!Auth::check()){
            return view('login');
          }
          else{
            return redirect('home');
          }
    }  
 
    public function registration()
    {
        return view('register');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required|exists:users',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $request->session()->put('user', Auth::user());
            return redirect()->intended('home');
        }

        return back()->with('success', 'Oppes! You have entered invalid credentials!');
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|same:confirm_password',
        'confirm_password' => 'required|min:6|same:password'
        ]);
 
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'user_role' => $request['user_role'],
            'form1' => ($request->has('form1') || $request['user_role'] != 3) ? 1 : 0,
            'form2' => ($request->has('form2') || $request['user_role'] != 3) ? 1 : 0,
            'form3' => ($request->has('form3') || $request['user_role'] != 3) ? 1 : 0,
            'form4' => ($request->has('form4') || $request['user_role'] != 3) ? 1 : 0,
            'form5' => ($request->has('form5') || $request['user_role'] != 3) ? 1 : 0,
            'form6' => ($request->has('form6') || $request['user_role'] != 3) ? 1 : 0,
            'form7' => ($request->has('form7') || $request['user_role'] != 3) ? 1 : 0,
            'form8' => ($request->has('form8') || $request['user_role'] != 3) ? 1 : 0,
            'form9' => ($request->has('form9') || $request['user_role'] != 3) ? 1 : 0,
            'form10' => ($request->has('form10') || $request['user_role'] != 3) ? 1 : 0,
            'form11' => ($request->has('form11') || $request['user_role'] != 3) ? 1 : 0,
            'form12' => ($request->has('form12') || $request['user_role'] != 3) ? 1 : 0,
            'form13' => ($request->has('form13') || $request['user_role'] != 3) ? 1 : 0,
            'form14' => ($request->has('form14') || $request['user_role'] != 3) ? 1 : 0,
            'form15' => ($request->has('form15') || $request['user_role'] != 3) ? 1 : 0,
            'form16' => ($request->has('form16') || $request['user_role'] != 3) ? 1 : 0,
            'form17' => ($request->has('form17') || $request['user_role'] != 3) ? 1 : 0,
            'form18' => ($request->has('form18') || $request['user_role'] != 3) ? 1 : 0,
            'form19' => ($request->has('form19') || $request['user_role'] != 3) ? 1 : 0,
            'form20' => ($request->has('form20') || $request['user_role'] != 3) ? 1 : 0,
            'form21' => ($request->has('form21') || $request['user_role'] != 3) ? 1 : 0,
            'form22' => ($request->has('form22') || $request['user_role'] != 3) ? 1 : 0,
          ]);
       
        return back()->with('success', 'New User Successfully Created!!');
    }
     
    public function home()
    {
        $users = User::count();
        $areaHeadReport = AreaHeadReport::count();
        $areaSupQuestions = AreaSupQuestions::count();
        $communityReport = CommunityReport::count();
        $districtLevelMonoter = DistrictLevelMonoter::count();
        $districtPastorQuestion = DistrictPastorQuestion::count();
        $districtPastorReport = DistrictPastorReport::count();
        $localEvangelism = LocalEvangelism::count();
        $localLevelQuestion = LocalLevelQuestion::count();
        $memberReport = MemberReport::count();
        $monitorReport = MonitorReport::count();
        $fin_policy = FinancialPolicy::count();
        $pro_policy = ProcurementPolicy::count();
        $rec_booking_area = RecordBooksArea::count();
        $rec_booking_dist = RecordBooksDistrict::count();
        $rec_booking_loc = RecordBooksLocal::count();
        $pas_assessment = PastorAssessmentQues::count();
        $sup_assessment = SupAssessmentQues::count();
        $pres_assessment = PresidingAssessment::count();
        $growth_ques = GrowthQuestionnaire::count();
        $fin_assessment = FinancialAssessment::count();
        $attn_analysis = AttendanceAnalysis::count();
        // $growth_assess = PastorAssessmentQues::count();

        $total = $areaHeadReport + $areaSupQuestions + $communityReport + $districtLevelMonoter + $districtPastorQuestion + $districtPastorReport + $localEvangelism + $localLevelQuestion + $memberReport + $monitorReport + $fin_policy + $pro_policy + $rec_booking_area + $rec_booking_dist + $rec_booking_loc + $pas_assessment + $sup_assessment + $pres_assessment
                + $growth_ques + $fin_assessment + $attn_analysis; //+$growth_assess;

        $data = [
            'users' => $users,
            'areaHeadReport' => $areaHeadReport,
            'areaSupQuestions' => $areaSupQuestions,
            'communityReport' => $communityReport,
            'districtLevelMonoter' => $districtLevelMonoter,
            'districtPastorQuestion' => $districtPastorQuestion,
            'districtPastorReport' => $districtPastorReport,
            'localEvangelism' => $localEvangelism,
            'localLevelQuestion' => $localLevelQuestion,
            'memberReport' => $memberReport,
            'monitorReport' => $monitorReport,
            'fin_policy' => $fin_policy, 
            'pro_policy' => $pro_policy,
            'rec_booking_area' => $rec_booking_area,
            'rec_booking_dist' => $rec_booking_dist,
            'rec_booking_loc' => $rec_booking_loc, 
            'pas_assessment' => $pas_assessment,
            'sup_assessment' => $sup_assessment,
            'pres_assessment' => $pres_assessment,
            'growth_ques' => $growth_ques, 
            'fin_assessment' => $fin_assessment,
            'attn_analysis' => $attn_analysis,
            // 'growth_assess' => $growth_assess,
            'total' => $total
        ];
        return view('home', compact('data'));
    }

    public function profile()
    {
        $user = Auth()->user();
        return view('profile', compact('user'));
    }

    public function postProfile(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|same:confirm_password',
        'confirm_password' => 'required|min:6|same:password'
        ]);
        
        $user = Auth()->user();
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
          ]);
       
          Session::flush();
          Auth::logout();
          return redirect('/');
    }

    public function adminEdit($id)
    {
        $user = User::find($id);
        return view('admin-edit', compact('user'));
    }

    public function adminUpdate(Request $request)
    {
        $user = User::find($request->id);

        if($request['user_role'] == 3){
            $user->update([
                'user_role' => $request['user_role'],
                'form1' => ($request->has('form1')) ? 1 : 0,
                'form2' => ($request->has('form2')) ? 1 : 0,
                'form3' => ($request->has('form3')) ? 1 : 0,
                'form4' => ($request->has('form4')) ? 1 : 0,
                'form5' => ($request->has('form5')) ? 1 : 0,
                'form6' => ($request->has('form6')) ? 1 : 0,
                'form7' => ($request->has('form7')) ? 1 : 0,
                'form8' => ($request->has('form8')) ? 1 : 0,
                'form9' =>  ($request->has('form9')) ? 1 : 0,
                'form10' => ($request->has('form10')) ? 1 : 0,
                'form11' => ($request->has('form11')) ? 1 : 0,
                'form12' => ($request->has('form12')) ? 1 : 0,
                'form13' => ($request->has('form13')) ? 1 : 0,
                'form14' => ($request->has('form14')) ? 1 : 0,
                'form15' => ($request->has('form15')) ? 1 : 0,
                'form16' => ($request->has('form16')) ? 1 : 0,
                'form17' => ($request->has('form17')) ? 1 : 0,
                'form18' => ($request->has('form18')) ? 1 : 0,
                'form19' => ($request->has('form19')) ? 1 : 0,
                'form20' => ($request->has('form20')) ? 1 : 0,
                'form21' => ($request->has('form21')) ? 1 : 0,
                'form22' => ($request->has('form22')) ? 1 : 0,
              ]);
        }
        else{
            $user->update([
                'user_role' => $request['user_role'],
                'form1' => 1,
                'form2' => 1,
                'form3' => 1,
                'form4' => 1,
                'form5' => 1,
                'form6' => 1,
                'form7' => 1,
                'form8' => 1,
                'form9' => 1,
                'form10' => 1,
                'form11' => 1,
                'form12' => 1,
                'form13' => 1,
                'form14' => 1,
                'form15' => 1,
                'form16' => 1,
                'form17' => 1,
                'form18' => 1,
                'form19' => 1,
                'form20' => 1,
                'form21' => 1,
                'form22' => 1,
              ]);
        }
        // $user->user_role = $request->user_role;
        

        return back()->with('success', $user->name.'\'s Role changed Successfully!!');
    }

    public function resetPassword($id)
    {
        $user = User::find($id);
        return view('reset_password', compact('user'));
    }

    public function resetPasswordSave(Request $request)
    {  
        request()->validate([
        'password' => 'required|min:6|same:confirm_password',
        'confirm_password' => 'required|min:6|same:password'
        ]);
        
        $user = User::find($request->id);
        $user->update([
            'password' => Hash::make($request['password'])
          ]);
       
        return redirect('user-list')->with('success', 'User Password Resetted Successfully!!');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $current_user = Auth()->user()->user_id;
        if($user->user_id == $current_user){
            return back()->with('unsuccessful', 'Main User Account Cannot be Deleted');
        }
        else{
            $user->delete();
            return back()->with('success', 'Account Deleted Successfully!!');
        }
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
