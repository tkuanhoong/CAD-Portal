<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;

class ChangePasswordController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
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
            'current_password' => ['required', 'string', new MatchOldPassword],
            'new_password' => ['required', 'string', 'min:8'],
            'new_confirm_password' => ['required', 'string', 'min:8', 'same:new_password']
        ]);

        $user->password = Hash::make($request->new_password);

        if($user->save()){
            $request->session()->flash('success','Password successfully changed!');
        }

        if($user->hasRole('admin')){
            return redirect()->route('admin.change-password');
        }else{
            return redirect()->route('profile.edit',auth()->user()->id);
        }
    }
}
