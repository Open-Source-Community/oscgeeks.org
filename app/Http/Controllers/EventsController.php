<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function show_apply()
    {
        return view('form');
    }

    public function done()
    {
        return view('done');
    }

    public function refused()
    {
        return view('refused');
    }

    public function apply(Request $request)
    {

    }
}
