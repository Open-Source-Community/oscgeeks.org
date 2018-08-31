<?php

namespace App\Http\Controllers;

use App\Event;
use App\Recruit;
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

    public function expired()
    {
        return view('expired');
    }

    public function apply(Request $request)
    {
        $time1 = 1;
        $time2 = 2;
        $time3 = 3;
        $time4 = 4;
        $time5 = 5;

        $day1 = 1;
        $day2 = 2;
        $day3 = 3;
        $day4 = 4;
        $day5 = 5;
        $day6 = 6;

        $day = $request->input('day');
        $time = $request->input('time');

        if ($day == $day1)
            if ($this->Saturday($day1, $time, $time1, $time2, $time3, $time4, $time5)) {
                Recruit::create($request->all());
                echo "done";
            } else
                echo "refused";

        elseif ($day == $day2)
            if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5)) {
                Recruit::create($request->all());
                echo "done";
            } else
                echo "refused";
        elseif ($day == $day3)
            if ($this->Monday($day3, $time, $time1, $time2, $time3, $time4, $time5)) {
                Recruit::create($request->all());
                echo "done";
            } else
                echo "refused";
        elseif ($day == $day4)
            if ($this->Tuesday($day4, $time, $time1, $time2, $time3, $time4, $time5)) {
                Recruit::create($request->all());
                echo "done";
            } else
                echo "refused";
        elseif ($day == $day5)
            if ($this->Wednesday($day5, $time, $time1, $time2, $time3, $time4, $time5)) {
                Recruit::create($request->all());
                echo "done";
            } else
                echo "refused";
        elseif ($day == $day6)
            if ($this->Thursday($day6, $time, $time1, $time2, $time3, $time4, $time5)) {
                Recruit::create($request->all());
                echo "done";
            } else
                echo "refused";
    }

    public function Saturday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        }
    }

    public function Sunday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        }
    }

    public function Monday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        }
    }

    public function Tuesday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        }
    }

    public function Wednesday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        }
    }

    public function Thursday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 5)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        }
    }
}