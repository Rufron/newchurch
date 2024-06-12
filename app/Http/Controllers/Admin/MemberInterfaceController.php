<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MemberInterfaceController extends Controller
{
    public function show()
    {
        // return view('admin.memberinterface');
        $contacts = Contact::all();
        $totalMembers = Contact::count();

        return view('admin.memberinterface', ['contacts' => $contacts, 'totalMembers' => $totalMembers]);
    }
}


