<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function show_apply()
    {
        return view('workshop_form');
    }

    public function done()
    {
        return view('done');
    }

    public function apply(Request $request)
    {
        $time1 = 1;
        $time2 = 2;
        $time3 = 3;
        $time4 = 4;
        $time5 = 5;
        $time6 = 6;
        $time7 = 7;
        $time8 = 8;
        $time9 = 9;
        $time10 = 10;
        $time11 = 11;
        $time12 = 12;

        $day1 = 1;
        $day2 = 2;
        $day3 = 3;
        $day4 = 4;
        $day5 = 5;
        $day6 = 6;

        $day = $request->input('day');
        $time = $request->input('time');

        if ($day == $day1)
            if ($this->Saturday($day1, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)) {
                Workshop::create($request->all());
                echo "done";
            } else
                echo "refused";

        elseif ($day == $day2)
            if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)) {
                Workshop::create($request->all());
                echo "done";
            } else
                echo "refused";
        elseif ($day == $day3)
            if ($this->Monday($day3, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)) {
                Workshop::create($request->all());
                echo "done";
            } else
                echo "refused";
        elseif ($day == $day4)
            if ($this->Tuesday($day4, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)) {
                Workshop::create($request->all());
                echo "done";
            } else
                echo "refused";
        elseif ($day == $day5)
            if ($this->Wednesday($day5, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)) {
                Workshop::create($request->all());
                echo "done";
            } else
                echo "refused";
        elseif ($day == $day6)
            if ($this->Thursday($day6, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)) {
                Workshop::create($request->all());
                echo "done";
            } else
                echo "refused";
        else
            echo "refused";
    }

    public function Saturday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();
        $check8 = Workshop::where('day', $day)->where('time', $time8)->get();
        $check9 = Workshop::where('day', $day)->where('time', $time9)->get();
        $check10 = Workshop::where('day', $day)->where('time', $time10)->get();
        $check11 = Workshop::where('day', $day)->where('time', $time11)->get();
        $check12 = Workshop::where('day', $day)->where('time', $time12)->get();

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
        } else if ($time == $time6) {
            if (count($check6) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time7) {
            if (count($check7) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time8) {
            if (count($check8) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time9) {
            if (count($check9) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time10) {
            if (count($check10) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time11) {
            if (count($check11) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time12) {
            if (count($check12) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Sunday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();
        $check8 = Workshop::where('day', $day)->where('time', $time8)->get();
        $check9 = Workshop::where('day', $day)->where('time', $time9)->get();
        $check10 = Workshop::where('day', $day)->where('time', $time10)->get();
        $check11 = Workshop::where('day', $day)->where('time', $time11)->get();
        $check12 = Workshop::where('day', $day)->where('time', $time12)->get();

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
        } else if ($time == $time6) {
            if (count($check6) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time7) {
            if (count($check7) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time8) {
            if (count($check8) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time9) {
            if (count($check9) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time10) {
            if (count($check10) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time11) {
            if (count($check11) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time12) {
            if (count($check12) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Monday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();
        $check8 = Workshop::where('day', $day)->where('time', $time8)->get();
        $check9 = Workshop::where('day', $day)->where('time', $time9)->get();
        $check10 = Workshop::where('day', $day)->where('time', $time10)->get();
        $check11 = Workshop::where('day', $day)->where('time', $time11)->get();
        $check12 = Workshop::where('day', $day)->where('time', $time12)->get();

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
        } else if ($time == $time6) {
            if (count($check6) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time7) {
            if (count($check7) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time8) {
            if (count($check8) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time9) {
            if (count($check9) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time10) {
            if (count($check10) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time11) {
            if (count($check11) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time12) {
            if (count($check12) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Tuesday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();
        $check8 = Workshop::where('day', $day)->where('time', $time8)->get();
        $check9 = Workshop::where('day', $day)->where('time', $time9)->get();
        $check10 = Workshop::where('day', $day)->where('time', $time10)->get();
        $check11 = Workshop::where('day', $day)->where('time', $time11)->get();
        $check12 = Workshop::where('day', $day)->where('time', $time12)->get();

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
        } else if ($time == $time6) {
            if (count($check6) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time7) {
            if (count($check7) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time8) {
            if (count($check8) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time9) {
            if (count($check9) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time10) {
            if (count($check10) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time11) {
            if (count($check11) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time12) {
            if (count($check12) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Wednesday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();
        $check8 = Workshop::where('day', $day)->where('time', $time8)->get();
        $check9 = Workshop::where('day', $day)->where('time', $time9)->get();
        $check10 = Workshop::where('day', $day)->where('time', $time10)->get();
        $check11 = Workshop::where('day', $day)->where('time', $time11)->get();
        $check12 = Workshop::where('day', $day)->where('time', $time12)->get();

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
        } else if ($time == $time6) {
            if (count($check6) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time7) {
            if (count($check7) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time8) {
            if (count($check8) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time9) {
            if (count($check9) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time10) {
            if (count($check10) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time11) {
            if (count($check11) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time12) {
            if (count($check12) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Thursday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8, $time9, $time10, $time11, $time12)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();
        $check8 = Workshop::where('day', $day)->where('time', $time8)->get();
        $check9 = Workshop::where('day', $day)->where('time', $time9)->get();
        $check10 = Workshop::where('day', $day)->where('time', $time10)->get();
        $check11 = Workshop::where('day', $day)->where('time', $time11)->get();
        $check12 = Workshop::where('day', $day)->where('time', $time12)->get();

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
        } else if ($time == $time6) {
            if (count($check6) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time7) {
            if (count($check7) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time8) {
            if (count($check8) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time9) {
            if (count($check9) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time10) {
            if (count($check10) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time11) {
            if (count($check11) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time12) {
            if (count($check12) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }
}
