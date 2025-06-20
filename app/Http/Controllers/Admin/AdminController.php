<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Admin;


// let me try using this auth property
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8',
        ]);



        $admin = Admin::create($validatedData);

        return redirect()->route('admininterface')
            ->with('success', 'New admin created successfully.');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $credentials['email'])->first();

        if ($admin && $credentials['password'] === $admin->password) {
            Auth::guard('admin')->login($admin, $request->filled('remember'));
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
