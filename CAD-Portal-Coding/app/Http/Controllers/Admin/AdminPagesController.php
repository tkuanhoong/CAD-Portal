<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Event;
use App\Contact;
use Illuminate\Http\Request;
use DateTime;

class AdminPagesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users = User::all();
        $events = Event::all();
        $today_events = Event::where('date','=',date('Y-m-d'))->where('time','>',date('H:i:s'))->orderBy('date','asc')->orderBy('time', 'asc')->paginate(5,['*'],'today_events');
        $upcoming_events = Event::where('date','>',date('Y-m-d'))->orderBy('date','asc')->orderBy('time', 'asc')->paginate(5,['*'],'upcoming_events');
        //$upcoming_events = Event::orderBy('date','asc')->orderBy('time', 'asc')->paginate(5);
        $contacts = Contact::all();
        return view('admin.index',compact('users','events','contacts','today_events','upcoming_events'));
    }

    public function profile(){
        return view('admin.profile.index');
    }

    public function ChangePassword(){
        return view('admin.profile.password');
    }
}
