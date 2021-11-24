<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Top;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tops = Top::all();
        return view('admin.pages.top.index',compact('Tops'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function show(Top $Top)
    {
        return view('admin.pages.top.show',compact('Top'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function edit(Top $Top)
    {
        return view('admin.pages.top.edit',compact('Top'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Top $Top)
    {
        $validated = $this->validate($request,[
            'image' => 'image|nullable|max:800|mimes:jpg,jpeg,png',
            'name' => 'required|string',
            'position' => 'required|string',
            'priority'=>'required|numeric|min:1',
        ]);
        if($request->hasfile('image')){

            // Get filename with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $Top->image = $fileNameToStore;
        }

        $Top->name = $request->input('name');
        $Top->position = $request->input('position');
        $Top->priority = $request->input('priority');
        $originalFile = $Top->getOriginal('image');
        
        
        if($Top->save()){
            if($request->hasFile('image')){
                // Delete Original Image
                Storage::disk('s3')->delete('org_images/'.$Top->id.'/'.$originalFile);
                // Upload Image
                $path = $request->file('image')->storeAs('org_images/'.$Top->id.'/', $fileNameToStore,'s3');
            }
            $request->session()->flash('success','The top member details has been successfully updated!');
        }else{
            $request->session()->flash('error','There was problem updating the top member details!');
        }

        return redirect()->route('admin.Tops.index');
    }
}
