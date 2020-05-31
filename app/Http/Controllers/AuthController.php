<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(){
        return view('admin.login');
    }
    public function postlogin(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            //creating session
            // session()->flash('user',$request->email) 
            return redirect('/dashboard');
        }
        return redirect('/login');

    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
