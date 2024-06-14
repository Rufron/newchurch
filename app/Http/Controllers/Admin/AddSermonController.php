<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddSermon;

class AddSermonController extends Controller
{

    public function index()
    {
        // Display the add sermon form
        return view('admin/addsermon');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'text' => 'required|string|max:255',
            'notes' => 'required|string|max:255',
             'author' => 'required|string|max:255',
        ]);



        $sermon = new AddSermon();
        $sermon->title = $validatedData['title'];
        $sermon->date = $validatedData['date'];
        $sermon->text = $validatedData['text'];
        $sermon->notes = $validatedData['notes'];
        $sermon->author = $validatedData['author'];
        $sermon->save();


        return redirect()->route('addsermon')->with('success', 'You have added the Sermon');

    }
}

