<?php

namespace App\Http\Controllers;

use App\Committee_image;
use Session;

class CommitteesController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function companies()
    {
        return view('companies');
    }

    public function Linux()
    {
        return view('linux');
    }

    public function Blender()
    {
        $committee_images = Committee_image::where('committee_id', 7)->get();
        return view('blender', compact('committee_images'));
    }

    public function Laravel()
    {
        return view('laravel');
    }

    public function Artwork()
    {
        $committee_images = Committee_image::where('committee_id', 5)->get();
        return view('art', compact('committee_images'));
    }

    public function Logistics()
    {
        $committee_images = Committee_image::where('committee_id', 11)->get();
        return view('logistics', compact('committee_images'));
    }

    public function CCC()
    {
        return view('ccc');
    }

    public function BlenderWorkshop()
    {
        return view('BlenderWorkshop');
    }

    public function EnglishHeroes()
    {
        return view('EnglishHeroes');
    }

    public function LinuxWorkshop()
    {
        return view('LinuxWorkshop');
    }

    public function HumanResource()
    {
        return view('HumanResource');
    }

    public function PublicRelations()
    {
        return view('PublicRelations');
    }

    public function fundraising()
    {
        return view('fundraising');
    }

    public function Web()
    {
        return view('web');
    }

    public function Projects()
    {
        return view('Projects');
    }
}