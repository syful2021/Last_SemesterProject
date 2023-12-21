<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
        //login
    public function login(){
        return view('auth.login');
    }

        //login_post
    public function login_post(Request $request){

        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember))
        {
            if(Auth::User()->is_role == '1')
            {
                return redirect()->intended('admin/dashboard');
            }else{
                Auth::logout();
                return redirect()->back()->with('error', 'Invalid Admin');
            }
        }else{
            return redirect()->back()->with('error', 'Please enter correct email and password');
        }

        // dd($request->all());
    }

        // logout
    public function logout(){
        Auth::logout();
        return redirect(url('login'));
    }

        // forgot-password
    public function forgot_password(){
        return view('auth.forgot');
    }



        // forgot-password_post
    public function forgot_password_post(Request $request){

        return view('admin/dashboard');
    }
}
