<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    //

    public function __construct()
    {   
        $this->middleware('guest:admin')->except('logout');
    }
    public function index(){
        //return view index
        return view('auth.login');
    }

    public function store(Request $request){
        //validate
        // $request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required'
        // ]);

        //login user
        $credentials = $request->only('email','password');

        if(! Auth::guard('admin')->attempt($credentials)){
            return back()->withErrors([
                'message' => 'Wrong credetials please try again'
            ]);
        }
        //session
        session()->flash('msg','you have loggin');
        //redirect
        return redirect('/admin');

        
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }
}
