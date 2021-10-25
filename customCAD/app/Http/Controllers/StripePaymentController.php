<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Event;

class StripePaymentController extends Controller
{ 
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {   
        $event = Event::find($request->event_id);
        
            Stripe::setApiKey(env('STRIPE_SECRET'));

            // Create customer object in stripe
            /*$customer = Customer::create(array(
                "email" => auth()->user()->email,
                "name" => $request->name,
                "source"  => $request->stripeToken,
            ));*/


            // Create charge object in stripe to charge the customer //Stripe
            $payment = Charge::create(array(
                "amount" => $request->total  * 100,
                "currency" => "myr",
                "description" => "Event fee from ".strtoupper($request->name)." | Event: ".$event->title,
                "receipt_email" => auth()->user()->email,
                "source"  => $request->stripeToken,
            ));

            if($payment->paid){
                $full_name = strtoupper($request->full_name);
                $email = $request->email;
                $phone_number = $request->phone_number;
                $ic_number = $request->ic_number;
                $matric_number = $request->matric_number;
                
                //Create relationship 
                //establish relationship to register user
                auth()->user()->events()->attach($event,[
                    'full_name' => $full_name, 
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'ic_number' => $ic_number,
                    'matric_number' => $matric_number,
                    'payment_amount' => $payment->amount / 100
                ]);
                
                //return view
                return redirect()->route('paidEventSuccess');
                //return "Payment Successful and Event Registered Successful";

            }else{
                //return
                return redirect()->route('paidEventFailed');
            }
        
        /*  TRY CATCH STATEMENT   
        try {
        } catch (\Throwable $th) {
            return $th->getMessage();
        }*/
        
    }
}
