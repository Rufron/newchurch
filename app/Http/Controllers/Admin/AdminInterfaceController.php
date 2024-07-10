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

    // this facilitates the edit function.
    public function edit($admin)
    {
      $admins = Admin::find($admin);
      return view ('admin.edits', compact('admins'));
    }

    // Defining the destroy Method
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admininterface');
    }

    // Defining the Update Method
        public function update(Request $request, Admin $admin)
    {
        $admin->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('admininterface')->with('success', 'Admin updated successfully.');
    }


}
