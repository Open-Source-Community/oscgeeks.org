<?php

namespace App\Http\Controllers;

use App\Committee;
use Illuminate\Http\Request;

class CommitteesController extends Controller
{
    public function index1()
    {
        $committees_data = Committee::all();

        return view('linux', compact('committees_data'));
    }

    public function index2()
    {
        $committees_data = Committee::all();

        return view('about', compact('committees_data'));
    }
}