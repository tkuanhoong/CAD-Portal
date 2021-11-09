<?php

namespace App\Http\Controllers\Admin;

use App\AboutPage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutPage $AboutPage)
    {
        return view('admin.pages.about.edit',compact('AboutPage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutPage $AboutPage)
    {
        $validated = $this->validate($request,[
            'mission1' => 'required|string',
            'mission2' => 'required|string',
            'mission3' => 'required|string',
            'mission4' => 'required|string',
            'vision1' => 'required|string',
            'vision2' => 'required|string',
            'vision3' => 'required|string',
            'vision4' => 'required|string',
        ]);

        $AboutPage->mission1 = $request->input('mission1');
        $AboutPage->mission2 = $request->input('mission2');
        $AboutPage->mission3 = $request->input('mission3');
        $AboutPage->mission4 = $request->input('mission4');

        $AboutPage->vision1 = $request->input('vision1');
        $AboutPage->vision2 = $request->input('vision2');
        $AboutPage->vision3 = $request->input('vision3');
        $AboutPage->vision4 = $request->input('vision4');

        if($AboutPage->save()){
            $request->session()->flash('success','About Page has been successfully updated!');
        }else{
            $request->session()->flash('error','There was problem updating about page!');
        }

        return redirect()->route('admin.AboutPage.edit',$AboutPage);
    }
}
