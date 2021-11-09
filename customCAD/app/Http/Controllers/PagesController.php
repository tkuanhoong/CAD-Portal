<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use App\Home;
use App\AboutPage;
use App\ContactPage;
use App\Organization;
use App\Top;
use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{

    public function index(){
        $home = Home::first();
        $events = Event::orderBy('date','asc')->orderBy('time', 'asc')->limit(3)->get();
        return view('home.index',compact('events','home'));
    }

    public function about(){
        $home = Home::first();
        $AboutPage = AboutPage::first();
        return view('home.about',compact('home','AboutPage'));
    }

    public function programs(){
        $events = Event::orderBy('date','asc')->orderBy('time', 'asc')->paginate(6);
        return view('home.programs',compact('events'));
    }

    public function showSingleProgram(Event $event){
        return view('user.event.show',compact('event'));
    }


    public function organization(){
        $Organization = Organization::first();
        $founder = Top::where('priority', '=', 1)->limit(1)->get()->first();
        $president = Top::where('priority', '=', 2)->limit(1)->get()->first();
        $tops = Top::orderBy('priority','asc')->where('priority', '<>', 1)->where('priority', '<>', 2)->get();
        return view('home.organization',compact('Organization','founder','president','tops'));
    }

    public function contact(){
        $ContactPage = ContactPage::first();
        return view('home.contact',compact('ContactPage'));
    }

    public function viewEventHistory(User $user, Request $request){
        if(auth()->user()->id !== $user->id){
            $request->session()->flash('error','Unauthorized action');
            return redirect()->route('eventHistory',auth()->user());
        }
        $events = $user->events()->paginate(5);
        return view('user.event.history',compact('events'));
    }

    public function freeEventRegistrationSuccess(){
        return view('user.event.free-register');
    }

    public function freeEventRegistrationFailed(){
        return view('user.event.free-register-failed');
    }

    public function paidEventRegistrationSuccess(){
        return view('stripe.paymentSuccess');
    }

    public function paidEventRegistrationFailed(){
        return view('stripe.paymentFailed');
    }



}
