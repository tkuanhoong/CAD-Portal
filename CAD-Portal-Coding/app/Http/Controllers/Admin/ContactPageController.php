<?php

namespace App\Http\Controllers\Admin;

use App\ContactPage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPage $ContactPage)
    {
        return view('admin.pages.contact.edit',compact('ContactPage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactPage $ContactPage)
    {
        $validated = $request->validate([
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email|max:191',
            'website' => 'required|url'
        ]);

        $ContactPage->address = $request->input('address');
        $ContactPage->phone = $request->input('phone');
        $ContactPage->email = $request->input('email');
        $ContactPage->website = $request->input('website');

        if($ContactPage->save()){
            $request->session()->flash('success','Contact Page has been successfully updated!');
        }else{
            $request->session()->flash('error','There was problem updating contact page!');
        }
        
        return redirect()->route('admin.ContactPage.edit',$ContactPage);
    }
}
