<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {


        $contacts = Contact::all();
        $totalMembers = Contact::count();

        return view('admin.admin', ['contacts' => $contacts, 'totalMembers' => $totalMembers]);
    }

    // public function admininterface() {
    //     return view('admininterface');
    // }
}
