<?php

namespace App\Http\Controllers;

use App\Event;
use App\Recruit;
use Illuminate\Http\Request;
use App\workshop_day;
use App\workshop_time;
use App\slot;
use App\time;
class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function get_day_times(Request $req)
    {
        $availableTimes = [];
        $allTimes = workshop_time::all();
        $dayTimes = workshop_day::where('id' , $req->day)->first();
        $dayTimes = explode(",",$dayTimes->times);
        $availableTimes = $dayTimes;
        foreach($dayTimes as $time){
            $addedTime = workshop_time::where('time' , $time)->first();
            $slot = slot::where('time_id' , $addedTime['id'])->where("day_id" , $req->day)->first();
            $added = Recruit::where('day' , $req->day)->where('time' , $addedTime['id'])->get();
            
            // dd($slot['slots']);
            
            if($slot['slots'] == count($added)){
                $index = array_search($time , $availableTimes);
                unset($availableTimes[$index]);
            }

        }

        $aTimes=[];
        $i=0;
        foreach ($allTimes as $item) {
            foreach ($availableTimes as $time) {
                if($item->time == $time){
                    $aTimes[$i]['id']=$item->id;
                    $aTimes[$i]['time']=$time;

                    $i++;
                }
            }
        }

        return response()->json($aTimes);
    }
    public function show_apply()
    {
        $days = workshop_day::all();   
        return view('form' , ['days'=>$days]);
    }

    public function done()
    {
        return view('done');
    }

    public function expired()
    {
        return view('expired');
    }

    public function apply(Request $req)
    {
        $this->validate($req,[
            'name'              => "required",
            'email'             => "required",
            'mobile'            => "required",
            'year'              => "required",
            'first_committee'   => "required",
            'second_committee'  => "required",
            'day'               => "required",
            'time'              => "required",
        ]);

        $row = new Recruit;
        $row->name = $req->name;
        $row->email = $req->email;
        $row->mobile = $req->mobile;
        $row->year = $req->year;
        $row->first_committee = $req->first_committee;
        $row->second_committee = $req->second_committee;
        $row->day = $req->day;
        $row->time = $req->time;
        $row->status = "لسه متحددش";
        $row->comment = "لسه متحددش";
        $row->hr_interviewer = "لسه متحددش";
        $row->first_com_interviewer = "لسه متحددش";
        $row->second_com_interviewer = "لسه متحددش";
        if($row->save()){
            echo "done";
        }

    //     $time1 = 1;
    //     $time2 = 2;
    //     $time3 = 3;
    //     $time4 = 4;
    //     $time5 = 5;

    //     $day1 = 1;
    //     $day2 = 2;
    //     $day3 = 3;
    //     $day4 = 4;
    //     $day5 = 5;
    //     $day6 = 6;

    //     $day = $request->input('day');
    //     $time = $request->input('time');

    //     if ($day == $day1)
    //         if ($this->Saturday($day1, $time, $time1, $time2, $time3, $time4, $time5)) {
    //             Recruit::create($request->all());
    //             echo "done";
    //         } else
    //             echo "refused";

    //     elseif ($day == $day2)
    //         if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5)) {
    //             Recruit::create($request->all());
    //             echo "done";
    //         } else
    //             echo "refused";
    //     elseif ($day == $day3)
    //         if ($this->Monday($day3, $time, $time1, $time2, $time3, $time4, $time5)) {
    //             Recruit::create($request->all());
    //             echo "done";
    //         } else
    //             echo "refused";
    //     elseif ($day == $day4)
    //         if ($this->Tuesday($day4, $time, $time1, $time2, $time3, $time4, $time5)) {
    //             Recruit::create($request->all());
    //             echo "done";
    //         } else
    //             echo "refused";
    //     elseif ($day == $day5)
    //         if ($this->Wednesday($day5, $time, $time1, $time2, $time3, $time4, $time5)) {
    //             Recruit::create($request->all());
    //             echo "done";
    //         } else
    //             echo "refused";
    //     elseif ($day == $day6)
    //         if ($this->Thursday($day6, $time, $time1, $time2, $time3, $time4, $time5)) {
    //             Recruit::create($request->all());
    //             echo "done";
    //         } else
    //             echo "refused";
    //     else
    //         echo "refused";
    }

    // public function Saturday($day, $time, $time1, $time2, $time3, $time4, $time5)
    // {
    //     $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
    //     $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
    //     $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
    //     $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
    //     $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

    //     if ($time == $time1) {
    //         if (count($check1) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time2) {
    //         if (count($check2) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time3) {
    //         if (count($check3) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time4) {
    //         if (count($check4) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time5) {
    //         if (count($check5) == 4)
    //             return false;
    //         else
    //             return true;
    //     } else
    //         return false;
    // }

    // public function Sunday($day, $time, $time1, $time2, $time3, $time4, $time5)
    // {
    //     $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
    //     $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
    //     $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
    //     $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
    //     $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

    //     if ($time == $time1) {
    //         if (count($check1) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time2) {
    //         if (count($check2) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time3) {
    //         if (count($check3) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time4) {
    //         if (count($check4) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time5) {
    //         if (count($check5) == 4)
    //             return false;
    //         else
    //             return true;
    //     } else
    //         return false;
    // }

    // public function Monday($day, $time, $time1, $time2, $time3, $time4, $time5)
    // {
    //     $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
    //     $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
    //     $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
    //     $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
    //     $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

    //     if ($time == $time1) {
    //         if (count($check1) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time2) {
    //         if (count($check2) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time3) {
    //         if (count($check3) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time4) {
    //         if (count($check4) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time5) {
    //         if (count($check5) == 4)
    //             return false;
    //         else
    //             return true;
    //     } else
    //         return false;
    // }

    // public function Tuesday($day, $time, $time1, $time2, $time3, $time4, $time5)
    // {
    //     $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
    //     $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
    //     $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
    //     $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
    //     $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

    //     if ($time == $time1) {
    //         if (count($check1) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time2) {
    //         if (count($check2) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time3) {
    //         if (count($check3) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time4) {
    //         if (count($check4) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time5) {
    //         if (count($check5) == 4)
    //             return false;
    //         else
    //             return true;
    //     } else
    //         return false;
    // }

    // public function Wednesday($day, $time, $time1, $time2, $time3, $time4, $time5)
    // {
    //     $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
    //     $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
    //     $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
    //     $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
    //     $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

    //     if ($time == $time1) {
    //         if (count($check1) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time2) {
    //         if (count($check2) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time3) {
    //         if (count($check3) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time4) {
    //         if (count($check4) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time5) {
    //         if (count($check5) == 4)
    //             return false;
    //         else
    //             return true;
    //     } else
    //         return false;
    // }

    // public function Thursday($day, $time, $time1, $time2, $time3, $time4, $time5)
    // {
    //     $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
    //     $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
    //     $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
    //     $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
    //     $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

    //     if ($time == $time1) {
    //         if (count($check1) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time2) {
    //         if (count($check2) == 5)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time3) {
    //         if (count($check3) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time4) {
    //         if (count($check4) == 4)
    //             return false;
    //         else
    //             return true;
    //     } elseif ($time == $time5) {
    //         if (count($check5) == 4)
    //             return false;
    //         else
    //             return true;
    //     } else
    //         return false;
    // }
}