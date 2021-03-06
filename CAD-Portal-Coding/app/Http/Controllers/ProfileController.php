<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

//Bring in storage image
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\User
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if(auth()->user()->id !== $user->id){
            $request->session()->flash('error','Unauthorized action');
            return redirect()->route('profile.edit',auth()->user()->id);
        }
        return view('user.profile.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:8','max:20'],
            'avatar' => ['image', 'nullable', 'max:800', 'mimes:jpg,jpeg,png']
        ]);

        if($request->hasfile('avatar')){

            // Get filename with extension
            $fileNameWithExt = $request->file('avatar')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $user->avatar = $fileNameToStore;

        }

        //Input Data
        $user->name = $request->name;
        $originalFile = $user->getOriginal('avatar');

        if($user->save()){
            if($request->hasFile('avatar')){
                if($user->avatar != 'userLogo.png'){
                // Delete Original Image
                Storage::disk('s3')->delete('avatar_images/'.auth()->user()->id.'/'.$originalFile);
                // Upload Image
                $path = $request->file('avatar')->storeAs('avatar_images/'.auth()->user()->id.'/', $fileNameToStore,'s3');
                }
            }
            $request->session()->flash('success','Your profile have been successfully changed!');
        }else{
            $request->session()->flash('error','There is problem saving your profile');
        }
    
        if($user->hasRole('admin')){
            return redirect()->route('admin.profile');
            
        }else{
            return redirect()->route('profile.edit',auth()->user()->id);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
