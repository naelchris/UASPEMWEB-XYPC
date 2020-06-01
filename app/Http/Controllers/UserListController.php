<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PHPUnit\Framework\Constraint\FileExists;

class UserListController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.users.index',['users'=>$user]);
       
    }

    public function create(){
        // 
    }

    public function store(Request $request ){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
       //
    }

    public function destroy($id){
        $user = User::find($id);
        User::destroy($id);

        //session
        session()->flash('msg','user has been deleted');

        //redirect
        return redirect('/admin/users');
    }

    public function show($id){
        //
    }
   
}