<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request,[
            'banner' => 'image|nullable|max:800|mimes:jpg,jpeg,png',
            'title' => 'required',
            'short_description' => 'required',
            'description'=>'required',
            'location' => 'required',
            'organizer' => 'required',
            'category' => 'required',
            'date' => 'required|date_format:Y-m-d|after_or_equal:'.date('d-m-Y'),
            'time' => 'required|date_format:H:i',
            'fee' => 'required',
            'attendance_link' => 'required|url',
            'whatsapp_link' => 'required|url',
            'meeting_link' => 'required|url',
        ]);

        if($request->hasfile('banner')){

            // Get filename with extension
            $fileNameWithExt = $request->file('banner')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('banner')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('banner')->storeAs('public/event_images', $fileNameToStore);

        }else{
            $fileNameToStore = 'NoImage.png';
        }
        
        //Create new instance for event model
        $event = new Event;
        
        //input values
        $event->banner = $fileNameToStore;
        $event->title = $request->input('title');
        $event->short_description = $request->input('short_description');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->organizer = $request->input('organizer');
        $event->category = $request->input('category');
        $event->date = $request->input('date');
        $event->time = $request->input('time');
        $event->fee = $request->input('fee');
        $event->attendance_link = $request->input('attendance_link');
        $event->whatsapp_link = $request->input('whatsapp_link');
        $event->meeting_link = $request->input('meeting_link');
        
        if($event->save()){
            $request->session()->flash('success','The event has been successfully created!');
        }else{
            $request->session()->flash('error','There is problem creating event');
        }
        return redirect()->route('admin.events.index');

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $validated = $this->validate($request,[
            'banner' => 'image|nullable|max:800|mimes:jpg,jpeg,png',
            'title' => 'required',
            'short_description' => 'required',
            'description'=>'required',
            'location' => 'required',
            'organizer' => 'required',
            'category' => 'required',
            'date' => 'required|date_format:Y-m-d|after_or_equal:'.date('d-m-Y'),
            'time' => 'required|date_format:H:i',
            'fee' => 'required',
            'attendance_link' => 'required|url',
            'whatsapp_link' => 'required|url',
            'meeting_link' => 'required|url',
        ]);

        if($request->hasfile('banner')){

            // Get filename with extension
            $fileNameWithExt = $request->file('banner')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('banner')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('banner')->storeAs('public/event_images', $fileNameToStore);

        }
     
        //input values
        if($request->hasFile('banner')){
            if($event->banner != 'NoImage.png'){
                Storage::delete('public/event_images/' . $event->banner);
                $event->banner = $fileNameToStore;
            }else{
                $event->banner = $fileNameToStore;
            }
        }
        $event->title = $request->input('title');
        $event->short_description = $request->input('short_description');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->organizer = $request->input('organizer');
        $event->category = $request->input('category');
        $event->date = $request->input('date');
        $event->time = $request->input('time');
        $event->fee = $request->input('fee');
        $event->attendance_link = $request->input('attendance_link');
        $event->whatsapp_link = $request->input('whatsapp_link');
        $event->meeting_link = $request->input('meeting_link');
        
        if($event->save()){
            $request->session()->flash('success','The event has been successfully updated!');
        }else{
            $request->session()->flash('error','There was problem updating event!');
        }

        return redirect()->route('admin.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Event $event)
    {
        if($event->banner != 'NoImage.png'){
            //Delete Image
            Storage::delete('public/event_images/'.$event->banner);
        }
        if($event->delete()){
            $request->session()->flash('success','The event has been deleted successfully!');
        }else{
            $request->session()->flash('error','There was an error deleting the event!');
        }
        
        return back();
    }
}
