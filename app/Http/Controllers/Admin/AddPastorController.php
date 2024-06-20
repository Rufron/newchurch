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
