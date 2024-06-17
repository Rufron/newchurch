<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function index(Request $request)
    {
        $events = Event::all();
        return view('admin.events', compact('events'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('public/images');
        // Create a new event
        $event = Event::create([
            'title' => $validatedData['title'],
            'date' => $validatedData['date'],
            'time' => $validatedData['time'],
            'location' => $validatedData['location'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
        ]);



        // Redirect to a success page or the event list
        return redirect()->route('events')->with('success');
    }


}
