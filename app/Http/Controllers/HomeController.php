<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        if (auth()->check()) {
            if (auth()->user()->position_id == 5) {
                $id = auth()->user()->id;
                return redirect("members/$id/tasks");
            } else
                return redirect("committees");

        } else
            return view("home");
    }
}
