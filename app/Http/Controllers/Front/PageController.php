<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function apple(){

        
        return view('front.pages.apple');
    }

    public function dell(){
        return view('front.pages.dell');
    }
    public function microsoft(){
        return view('front.pages.microsoft');
    }
}
