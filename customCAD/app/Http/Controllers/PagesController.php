<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{

    public function index(){
        $events = Event::orderBy('date','asc')->orderBy('time', 'asc')->limit(3)->get();
        return view('home.index',compact('events'));
    }

    public function about(){
        return view('home.about');
    }

    public function programs(){
        $events = Event::orderBy('date','asc')->orderBy('time', 'asc')->paginate(6);
        return view('home.programs',compact('events'));
    }

    public function showSingleProgram(Event $event){
        return view('user.event.show',compact('event'));
    }


    public function organization(){
        return view('home.organization');
    }

    public function contact(){
        return view('home.contact');
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

    public function paidEventRegistrationSuccess(){
        return view('stripe.paymentSuccess');
    }

    public function paidEventRegistrationFailed(){
        return view('stripe.paymentFailed');
    }



}
