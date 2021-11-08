<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return view('login');
          }
          else{
            return view('home');
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
            'password' => Hash::make($request['password'])
          ]);
       
        return back()->with('success', 'New User Successfully Created!!');
    }
     
    public function home()
    {
        return view('home');
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
