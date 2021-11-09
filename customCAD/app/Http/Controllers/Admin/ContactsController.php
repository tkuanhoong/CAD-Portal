<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index',compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.show',compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact,Request $request)
    {
        if($contact->delete()){
            $request->session()->flash('success','The contact has been deleted successfully!');
        }else{
            $request->session()->flash('error','There was an error deleting the contact!');
        }
        
        return back();
    }
}
