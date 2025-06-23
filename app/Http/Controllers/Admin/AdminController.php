<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Admin;




class AdminController extends Controller
{
    public function index()
    {

        // $contacts = Contact::all()->sortByDesc('created_at')->take(5);
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(5);
        $totalMembers = Contact::count();

        return view('admin.admin', ['contacts' => $contacts, 'totalMembers' => $totalMembers]);
    }


    public function add()
    {

        return view('admin.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }




    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8',
        ]);

        // Hash the password before saving
        $validatedData['password'] = Hash::make($validatedData['password']);

        Admin::create($validatedData);

        return redirect()->route('admininterface')
            ->with('success', 'New admin created successfully.');
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate(); // optional, clears the session
        $request->session()->regenerateToken(); // prevents CSRF attacks

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

}
