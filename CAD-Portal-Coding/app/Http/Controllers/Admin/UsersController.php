<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;
//Bring in storage image
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect()->route('admin.users.index');
        }
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        $user->roles()->update(array(
            'role_id'=> $request->roles
        ));

        $user->name = $request->name;
        $user->email = $request->email;
        if($request->has('verification')){
            $user->verification = $request->verification;
        }else{
            $user->verification = 'unverified';
        }

        if($request->has('password') && $request->password !== null){
            $user->password = Hash::make($request->password);
        }

        if($user->save()){
            $request->session()->flash('success','User has been updated successfully.');
        }else{
            $request->session()->flash('error','There was an error updating the user');
        }

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect()->route('admin.users.index');
        }

        //Delete whole date of the user from user table
        if($user->delete()){
            //Delete user role
            $user->roles()->detach();
            //Delete user profile picture
            if($user->avatar != 'userLogo.png'){
                //Delete Image
                Storage::disk('s3')->delete('avatar_images/'.$user->id.'/'.$user->avatar);
            }
            $request->session()->flash('success','The user has been deleted successfully!');
        }else{
            $request->session()->flash('error','There was an error deleting the user!');
        }

        return redirect()->route('admin.users.index');
    }

    public function verifyAllCheckedUser(Request $request){
    
        //verify all selected user
        if($request->has('checkboxes')){
            $checkedUsers = $request->checkboxes;
            foreach($checkedUsers as $checkedUser){
                DB::table('users')->where('id','=',$checkedUser)->update(['verification'=>"verified"]);
            }
            return back()->with('success','The selected user(s) has been verified!');
        }else if(!$request->has('checkboxes')){
            return back()->with('warning','There is no selected user(s). Please select at least 1 user to verify.');
        }else{
            return back()->with('error','There was a problem verifying user(s)');
        }

    }

}
