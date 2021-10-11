<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
       
        return view('admin.index');
    }

    public function profile(){
        return view('admin.profile.index');
    }

    public function ChangePassword(){
        return view('admin.profile.password');
    }
}
