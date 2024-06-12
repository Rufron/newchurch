<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use Illuminate\Http\Event;
use App\Models\Event;

class EventsController extends Controller
{
    public function index() {
            // $events = Event::all();
            return view('admin.events',
            // ['events'=>$events]
        );
    }

    public function store(Request $request)
    {
         // Validate the form data
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'time' => ['required', 'regex:/^(?:[01]\d|2[0-3]):[0-5]\d$/'
            ],
            'location' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);



        // Create a new event
        $events = new Event();
        $events->title = $request->input('title');
        $events->date = $request->input('date');
        $events->time = $request->input('time');
        $events->location = $request->input('location');
        $events->description = $request->input('description');
        $events->image = $request->input('image');
        $events->save();


        // Redirect to a success page or the event list
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }
}
