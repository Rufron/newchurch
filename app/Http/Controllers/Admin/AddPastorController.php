<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPastor;

class AddPastorController extends Controller
{

    public function index()
    {

        return view('admin.addpastor');
    }

    public function userindex()
    {   $add_pastors = AddPastor::all();
        return view('pastor', compact('add_pastors'));
    }

    public function viewindex()
    {   $add_pastors = AddPastor::all();
        return view('admin.pastorview', compact('add_pastors'));
    }

        public function edit($id)
    {
        $add_pastors = AddPastor::findOrFail($id);
        return view('admin.pastoredit', compact('add_pastors'));
    }

    public function update(Request $request, $id)
    {
        $pastor = AddPastor::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB Max
        ]);

        $pastor->update($validatedData);

        return redirect()->route('viewpastor')->with('success', 'Pastor updated successfully');
    }

    public function destroy($id)
    {
        $pastor = AddPastor::findOrFail($id);
        $pastor->delete();

        return redirect()->route('viewpastor')->with('success', 'Pastor deleted successfully');
    }

    public function store(Request $request)
{
    $pastor = AddPastor::create([
        'name' => $request->input('name'),
        'role' => $request->input('role'),
        'message' => $request->input('message'),
        'image' => $request->file('image')->store('images'),
    ]);

    return redirect()->route('addpastor');
}

}
