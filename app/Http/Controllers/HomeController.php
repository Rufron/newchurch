<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddSermon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $add_sermons = AddSermon::all();
        return view('home', compact('add_sermons'));
    }

    public function userindex()
    {
        $add_sermons = AddSermon::all();
        return view('home', compact('add_sermons'));
    }
}
