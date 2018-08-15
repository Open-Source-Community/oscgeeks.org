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

    public function refused()
    {
        return view('refused');
    }

    public function apply(Request $request)
    {
        $time1 = 'from 10:00 to 11:30';
        $time2 = 'from 11:30 to 01:00';
        $time3 = 'from 01:00 to 02:30';
        $time4 = 'from 02:30 to 04:00';
        $time5 = 'from 04:00 to 05:30';

        $day1 = 'Saturday';
        $day2 = 'Sunday';
        $day3 = 'Monday';
        $day4 = 'Tuesday';
        $day5 = 'Wednesday';
        $day6 = 'Thursday';

        $day = $request->input('day');
        $committee = $request->input('first_committee');
        $time = $request->input('time');

        if ($day == $day1)
            if ($this->Saturday($day1, $time, $time1, $time2, $time3, $time4, $time5)) {
                $count = Recruit::where("day" , $day)->where("first_committee" , $committee)->get()->count();
                if($count < 5){
                    Recruit::create($request->all());
                    return redirect('done');
                }else{
                    return redirect('refused');
                }
            } else
            return redirect('refused');
        elseif ($day == $day2)
            if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5)) {
                    Recruit::create($request->all());
                    return redirect('done');
            } else
                return redirect('refused');
        elseif ($day == $day3)
            if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5)) {
                    Recruit::create($request->all());
                    return redirect('done');
            } else
                return redirect('refused');
        elseif ($day == $day4)
            if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5)) {
                    Recruit::create($request->all());
                    return redirect('done');
            } else
                return redirect('refused');
        elseif ($day == $day5)
            if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5)) {
                    Recruit::create($request->all());
                    return redirect('done');
            } else
                return redirect('refused');
        elseif ($day == $day6)
            if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5)) {
                    Recruit::create($request->all());
                    return redirect('done');
            } else
                return redirect('refused');
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

    public function availTime(Request $request){
        
        $committee = $request->input("first_committee");
        $day = $request->input("day");
        $allTimes = array(
            'from 10:00 to 11:30', 
            'from 11:30 to 01:00', 
            'from 01:00 to 02:30', 
            'from 02:30 to 04:00', 
            'from 04:00 to 05:30'
        );
        $reservedTimes  = array();
        $data = Recruit::where("day" , $day)->where("first_committee" , $committee)->get();
        $count = Recruit::where("day" , $day)->where("first_committee" , $committee)->get()->count();
        if($count >=5){

            return Response()->json("full");
            die();
        }
        if(!empty($data && $count < 5)){

            foreach ($data as $row) {
                $reservedTimes[] = $row->time;                
            }

            
            foreach($reservedTimes as $resTime){
                $index = array_search($resTime , $allTimes);
                unset($allTimes[$index]);
            }
            
            return Response()->json($allTimes);
            die("2");
        }   
        
        return Response()->json($allTimes);

    }
}