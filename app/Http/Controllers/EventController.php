<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all data from Evetns Table
        $events = Event::all();// == select = FROM
        // return view('header.trialpage')->with('events',$events);
        return view('header.trialpage', compact('events'));
        // if want more in compact just 'events', 'some other variables'

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Display add/create form
        // $pages = 'event'; //too highlight in Nav
        // $users = User::pluck('id','name','email'); // takes based on parameter, not all
        $users = User::all();
        return view( 'header.addEvent',compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add new data
        // dd($request->all());
        Event::create($request->all());
        return redirect()->route('event.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //show specific data based on event id
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //display edit form based on event id
        return view('header.editEvent',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //update data from edit form
        // $update = Event::findOrFail($event);
        $event->update($request->all());
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //delete data based on event id
        $event->delete();
        return redirect()->back();
    }
}
