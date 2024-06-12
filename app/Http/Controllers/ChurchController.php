<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChurchController extends Controller
{
    public function home()
    {
        return view('home');
    }


    public function pastor()
    {
        return view('pastor');
    }

    public function about()
    {
        return view('about');
    }

    public function sermon()
    {
        return view('sermon');
    }

    public function events()
    {
        // $events = Event::all();
        return view('events');
        // , compact('events')
    }

    public function contact()
    {
        return view('contact');
    }

}
