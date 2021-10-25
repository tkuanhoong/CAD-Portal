<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;

class RegisterEvent extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Event $event ,Request $request)
    {

        $validated = $request->validate([
            'full_name' => 'required|string|max:50',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|digits_between:10,12',
            'ic_number' => 'required|digits:12',
            'matric_number' => 'required|max:9',
        ]);

            //receive input pivot tables
            $full_name = strtoupper($request->input('full_name'));
            $email = $request->input('email');
            $phone_number = $request->input('phone_number');
            $ic_number = $request->input('ic_number');
            $matric_number = $request->input('matric_number');

            if($event->fee != 0){
                return view('stripe.payment',compact('event','email','full_name','phone_number','ic_number','matric_number'));
            }else{
                //establish relationship to register user
                auth()->user()->events()->attach($event,[
                    'full_name' => $full_name, 
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'ic_number' => $ic_number,
                    'matric_number' => $matric_number,
                    'payment_amount' => null
                ]);
                //establish relationship
                return view('user.event.free-register');
            }

        
        

    }
}
