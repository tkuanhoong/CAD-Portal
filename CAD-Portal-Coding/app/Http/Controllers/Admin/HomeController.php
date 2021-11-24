<?php

namespace App\Http\Controllers\Admin;

use App\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        return view('admin.pages.home.edit',compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Home $home,Request $request)
    {
        $validated = $this->validate($request,[
            'upcoming_programs' => 'required|numeric',
            'programs_completed' => 'required|numeric',
            'members' => 'required|numeric',
            'years' => 'required|numeric',
            'facebook_link' => 'required|url',
            'instagram_link' => 'required|url',
            'telegram_link' => 'required|url',
        ]);

        $home->upcoming_programs = $request->input('upcoming_programs');
        $home->programs_completed = $request->input('programs_completed');
        $home->members = $request->input('members');
        $home->years = $request->input('years');
        $home->facebook_link = $request->input('facebook_link');
        $home->instagram_link = $request->input('instagram_link');
        $home->telegram_link = $request->input('telegram_link');

        if($home->save()){
            $request->session()->flash('success','Home Page has been successfully updated!');
        }else{
            $request->session()->flash('error','There was problem updating home page!');
        }

        return redirect()->route('admin.home.edit',$home);
    }
}
