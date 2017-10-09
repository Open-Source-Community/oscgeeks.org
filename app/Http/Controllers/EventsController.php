<?php

namespace App\Http\Controllers;

use App\Event;

class EventsController extends Controller
{
    public function index()
    {
        $user_data = Event::all();
        return view('events', compact('user_data'));
    }
}
