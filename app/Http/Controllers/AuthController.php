<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\AreaHeadReport;
use App\Models\AreaSupQuestions;
use App\Models\CommunityReport;
use App\Models\DistrictLevelMonoter;
use App\Models\DistrictPastorQuestion;
use App\Models\DistrictPastorReport;
use App\Models\FinancialPolicy;
use App\Models\LocalEvangelism;
use App\Models\LocalLevelQuestion;
use App\Models\MemberReport;
use App\Models\MonitorReport;
use App\Models\ProcurementPolicy;
use App\Models\RecordBooksArea;
use App\Models\RecordBooksDistrict;
use App\Models\RecordBooksLocal;

class AuthController extends Controller
{
    public function userList()
    {
        $users = User::where('user_role', '!=', 1)->get();
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
            'user_role' => $request['user_role']
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

        $total = $areaHeadReport + $areaSupQuestions + $communityReport + $districtLevelMonoter + $districtPastorQuestion + $districtPastorReport + $localEvangelism + $localLevelQuestion + $memberReport + $monitorReport + $fin_policy + $pro_policy + $rec_booking_area + $rec_booking_dist + $rec_booking_loc;

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

        $user->user_role = $request->user_role;

        $user->update();

        return back()->with('success', $user->name.'\'s Role changed Successfully!!');
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
