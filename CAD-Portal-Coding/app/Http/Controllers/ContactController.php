<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function saveContact(Request $request){
        $validated = $request->validate([
            'name' => ['required','string','min:8','max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'digits_between:10,12'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
        
        $contact = Contact::create($validated);
        
        if($contact->save()){
            return back()->with('success','Thank you for contacting us!');
        }else{
            return back()->with('failed','There was problem saving the contact form!');
        }
        
        
    }
}
