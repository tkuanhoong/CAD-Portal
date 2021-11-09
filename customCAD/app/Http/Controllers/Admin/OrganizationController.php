<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $Organization)
    {
        return view('admin.pages.organization.edit',compact('Organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $Organization)
    {
        $validated = $this->validate($request,[
            'organization_name' => 'required|string'
        ]);
        
        $Organization->name = $request->input('organization_name');
        if($Organization->save()){
            $request->session()->flash('success','Organization Page has been successfully updated!');
        }else{
            $request->session()->flash('error','There was problem updating organization page!');
        }
        return redirect()->route('admin.Organization.edit',$Organization);
    }

}
