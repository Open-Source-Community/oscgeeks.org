<?php

namespace App\Http\Controllers;

use Session;
use App\Image;

class CommitteesController extends Controller
{

    public function index()
    {

    }




    public function index1()
    {
        return view('linux');
    }

    public function index2()
    {
        return view('about');
    }

    public function index3()
    {
        $committee_images = Image::where(['comm_name' => 'Blender'])->get();
        return view('blender', compact('committee_images'));
    }

    public function index4()
    {
        return view('laravel');
    }

    public function index5()
    {
        $committees_data2 = Image::where(['comm_name' => 'Artwork'])->get();
        return view('art', compact('committees_data2'));
    }
    public function index6()
    {
        return view('companies');
    }

    public function index7()
    {
        $committee_images = Image::where(['comm_name' => 'Logistics'])->get();
        return view('logistics', compact('committee_images'));
    }
    
    public function index8()
    {
        return view('ccc');
    }
    public function index9()
    {
        if(Session::has('key')){
            return redirect('/done');
        }
        else{
        return view('form');}
    }
    public function index10()
    {
        return view('BlenderWorkshop');
    }
    public function index11()
    {
        return view('EnglishHeroes');
    }
    public function index12()
    {
        return view('LinuxWorkshop');
    }
    public function index13()
    {
        return view('HumanResource');
    }
    public function index14()
    {
        return view('PublicRelations');
    }
    public function index15()
    {
        return view('fundraising');
    }
    public function index16()
    {
        return view('web');
    }
    public function index17()
    {
        return view('Projects');
    }
    public function done()
    {
        return view('done');
    }
    public function refused()
    {
        return view('refused');
    }
}