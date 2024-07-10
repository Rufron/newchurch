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

    public function userindex()
    {   $add_sermons = AddSermon::all();
        return view('sermon', compact('add_sermons'));
    }

    public function viewindex()
    {
        $add_sermons = AddSermon::all();
        return view('admin/sermonview', compact('add_sermons'));
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

    // public function edit(Request $request,AddSermon $add_sermon)
    // {
    //     $add_sermons = AddSermon::all();

    //     return view('admin/sermonedit', compact('add_sermons'));
    // }

        public function edit($id)
        {
            $add_sermons = AddSermon::findOrFail($id);
            return view('admin/sermonedit', compact('add_sermons'));
        }

    // public function update(Request $request, AddSermon $add_sermon)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required|max:255',
    //         'text' => 'required',
    //         'date' => 'required|date',
    //         'author' => 'required|max:255',
    //          'notes' => 'required|string|max:255',
    //     ]);

    //     $add_sermon->update($validatedData);

    //     // return response()->json(['success' => true]);
    //     return redirect()->route('addsermon')->with('success', 'You have added the Sermon');
    // }

        public function update(Request $request, $id)
    {
        $sermon = AddSermon::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'date' => 'required|date',
            'text' => 'required',
            'notes' => 'required',
            'author' => 'required|max:255',
        ]);

        $sermon->update($validatedData);

        return redirect()->route('addsermon')->with('success', 'Sermon updated successfully');
    }

    // public function destroy(Request $request, $id)
    // {
    //     $id->delete();
    //     return redirect()->back()->with('success', 'Sermon deleted successfully');
    // }

    public function destroy($id)
    {
        $sermon = AddSermon::findOrFail($id);
        $sermon->delete();

        return redirect()->route('viewsermon')->with('success', 'Sermon deleted successfully');
    }

}

