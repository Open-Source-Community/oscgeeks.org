<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()) {

            if (auth()->user()->position_id == 5) {
                $id = auth()->user()->id;
                return redirect("members/$id/tasks");
            } else
                return redirect("committees");

        } else
            return redirect("committees");
    }
}
