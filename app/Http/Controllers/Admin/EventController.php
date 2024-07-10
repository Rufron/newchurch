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

    public function userindex(Request $request){
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function blogindex(Request $request){
        $events = Event::all();
        return view('blog', compact('events'));
    }



    public function store(Request $request, Event $event)
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

        // Update the event
        // $event->update($validatedData);

        // Redirect to a success page or the event list
        return redirect()->route('events')->with('success');
    }

    // this facilitates the edit function.
    public function edit($event)
    {
      $events = Event::find($event);
      return view ('admin.edit', compact('events'));
    }

    // Update the events table


    public function update(Request $request, Event $event)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'date' => 'required|date',
        'time' => 'required',
        'location' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {

        $imagePath = $request->file('image')->store('event_images', 'public');
    } else {
        $imagePath = $event->image;
    }

    $event->update([
        'title' => $validatedData['title'],
        'date' => $validatedData['date'],
        'time' => $validatedData['time'],
        'location' => $validatedData['location'],
        'description' => $validatedData['description'],
        'image' => $imagePath,
    ]);

    return redirect()->route('events');
}



    // Defining the destroy Method
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events');
    }


}
