<?php

namespace App\Http\Controllers;

use App\Committee;
use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $user_data = Event::all();

        $committees_data = Committee::all();

        return view('events', compact('user_data','committees_data'));
    }
}
