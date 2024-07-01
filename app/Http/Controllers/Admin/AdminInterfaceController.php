<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminInterfaceController extends Controller
{
    public function index()
    {

            $admins = Admin::all();
            $totalAdmins = $admins->count();

        return view('admin.admininterface', compact('admins','totalAdmins'));
    }

    public function add()
    {

        return view('admin.newadmin');
    }


}
