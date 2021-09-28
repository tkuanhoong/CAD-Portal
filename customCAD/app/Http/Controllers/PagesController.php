<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
    
    public function index(){
       
        return view('home.index');
    }

    public function about(){
        return view('home.about');
    }

    public function programs(){
        return view('home.programs');
    }

    public function organization(){
        return view('home.organization');
    }

    public function contact(){
        return view('home.contact');
    }

}
