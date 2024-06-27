<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $totalMembers = Contact::count();

        return view('admin.admin', ['contacts' => $contacts, 'totalMembers' => $totalMembers]);
    }


    public function adminindex()
    {
        $admins = Admin::all();
        return view('admin.newadmin', compact('admins'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8',
        ]);

        $admin = Admin::create($validatedData);

        return redirect()->route('newadmin.index')
            ->with('success', 'New admin created successfully.');
    }

}
