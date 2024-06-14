<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class EventController extends Controller
{

    public function index(Request $request)
    {
        return view('admin.events');
    }

    public function store(Request $request)
    {


        // Validate the input data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        // Handle the image upload
        // $imagePath = $request->file('image')->store('public/events');
        $event->addMedia($request->file('image'))->toMediaCollection('event_images');
        // Create a new event
        $event = Event::create([
            'title' => $validatedData['title'],
            'date' => $validatedData['date'],
            'time' => $validatedData['time'],
            'location' => $validatedData['location'],
            'description' => $validatedData['description'],
            // 'image' => $imagePath,
        ]);



        // Redirect to a success page or the event list
        return redirect()->route('events')->with('success', 'Event created successfully.');
    }
}
