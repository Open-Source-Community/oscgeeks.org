<?php

namespace App\Http\Controllers;

use App\WorkShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cookie;
use App\Committee;
use App\Form;
use Session;
use App\Http\Requests\formvalidation;

class RegisterationForm extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    /* public function setCookie()
     {
        $response=new Response();
        $response->withCookie('lamin','laravel',1);
        echo "cookie set";
        return $response;
     }
   public function getCookie(Request $request)
   {
      return $request->cookie('lamin');
   }*/
    public function store(formvalidation $request)
    {
        //
        $cookie = Cookie::get('Recruit');
        $form = new Form();
        $form->first_name = $request->first_name;
        $form->last_name = $request->last_name;
        $form->email = $request->email;
        $form->contact_no = $request->contact_no;
        $form->year = $request->year;
        $form->homepage_select_first = $request->homepage_select_first;
        $form->homepage_select_second = $request->homepage_select_second;
        $form->day = $request->day;
        $form->time = $request->time;
        $form->ip = request()->ip();
        $committees_data = Committee::all();

        $day_default = $request->day;
        $day1 = 'Saturday';
        $day2 = 'Sunday';
        $day3 = 'Monday';
        $day4 = 'Tuesday';
        $day5 = 'Wednesday';
        $day6 = 'Thursday';

        $time_default = $request->time;
        $time1 = '10 am to 11.30 am';
        $time2 = '11.30 am to 1 pm';
        $time3 = '1 pm to 2.30 pm';
        $time4 = '2.30 pm to 4 pm';
        $time5 = '4 pm to 5.30 pm';


//            $ip_check = Form::where(['ip' => $request->ip])->get();
        if (!isset($cookie)) {
            if ($day_default == $day1) {
                if ($time_default == $time1) {
                    $Saturday_check1 = Form::where(['day' => $day1])->where(['time' => $time1])->get();
                    if (count($Saturday_check1) > 5)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time2) {
                    $Saturday_check2 = Form::where(['day' => $day1])->where(['time' => $time2])->get();
                    if (count($Saturday_check2) > 5)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time3) {
                    $Saturday_check3 = Form::where(['day' => $day1])->where(['time' => $time3])->get();
                    if (count($Saturday_check3) > 5)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time4) {
                    $Saturday_check4 = Form::where(['day' => $day1])->where(['time' => $time4])->get();
                    if (count($Saturday_check4) > 5)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time5) {
                    $Saturday_check5 = Form::where(['day' => $day1])->where(['time' => $time5])->get();
                    if (count($Saturday_check5) > 5)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                }
            }
            if ($day_default == $day2) {
                if ($time_default == $time1) {
                    $Sunday_check1 = Form::where(['day' => $day2])->where(['time' => $time1])->get();
                    if (count($Sunday_check1) > 6)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time2) {
                    $Sunday_check2 = Form::where(['day' => $day2])->where(['time' => $time2])->get();
                    if (count($Sunday_check2) > 7)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time3) {
                    $Sunday_check3 = Form::where(['day' => $day2])->where(['time' => $time3])->get();
                    if (count($Sunday_check3) > 7)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time4) {
                    $Sunday_check4 = Form::where(['day' => $day2])->where(['time' => $time4])->get();
                    if (count($Sunday_check4) > 7)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time5) {
                    $Sunday_check5 = Form::where(['day' => $day2])->where(['time' => $time5])->get();
                    if (count($Sunday_check5) > 6)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                }
            }

            if ($day_default == $day3) {
                if ($time_default == $time1) {
                    $Monday_check1 = Form::where(['day' => $day3])->where(['time' => $time1])->get();
                    if (count($Monday_check1) > 7)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time2) {
                    $Monday_check2 = Form::where(['day' => $day3])->where(['time' => $time2])->get();
                    if (count($Monday_check2) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time3) {
                    $Monday_check3 = Form::where(['day' => $day3])->where(['time' => $time3])->get();
                    if (count($Monday_check3) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time4) {
                    $Monday_check4 = Form::where(['day' => $day3])->where(['time' => $time4])->get();
                    if (count($Monday_check4) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time5) {
                    $Monday_check5 = Form::where(['day' => $day3])->where(['time' => $time5])->get();
                    if (count($Monday_check5) > 7)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                }
            }

            if ($day_default == $day4) {
                if ($time_default == $time1) {
                    $Tuesday_check1 = Form::where(['day' => $day4])->where(['time' => $time1])->get();
                    if (count($Tuesday_check1) > 7)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time2) {
                    $Tuesday_check2 = Form::where(['day' => $day4])->where(['time' => $time2])->get();
                    if (count($Tuesday_check2) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time3) {
                    $Tuesday_check3 = Form::where(['day' => $day4])->where(['time' => $time3])->get();
                    if (count($Tuesday_check3) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time4) {
                    $Tuesday_check4 = Form::where(['day' => $day4])->where(['time' => $time4])->get();
                    if (count($Tuesday_check4) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time5) {
                    $Tuesday_check5 = Form::where(['day' => $day4])->where(['time' => $time5])->get();
                    if (count($Tuesday_check5) > 7)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                }
            }

            if ($day_default == $day5) {
                if ($time_default == $time1) {
                    $Wednesday_check1 = Form::where(['day' => $day5])->where(['time' => $time1])->get();
                    if (count($Wednesday_check1) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time2) {
                    $Wednesday_check2 = Form::where(['day' => $day5])->where(['time' => $time2])->get();
                    if (count($Wednesday_check2) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time3) {
                    $Wednesday_check3 = Form::where(['day' => $day5])->where(['time' => $time3])->get();
                    if (count($Wednesday_check3) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time4) {
                    $Wednesday_check4 = Form::where(['day' => $day5])->where(['time' => $time4])->get();
                    if (count($Wednesday_check4) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time5) {
                    $Wednesday_check5 = Form::where(['day' => $day5])->where(['time' => $time5])->get();
                    if (count($Wednesday_check5) > 8)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                }
            }

            if ($day_default == $day6) {
                if ($time_default == $time1) {
                    $Thursday_check1 = Form::where(['day' => $day6])->where(['time' => $time1])->get();
                    if (count($Thursday_check1) > 10)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time2) {
                    $Thursday_check2 = Form::where(['day' => $day6])->where(['time' => $time2])->get();
                    if (count($Thursday_check2) > 10)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time3) {
                    $Thursday_check3 = Form::where(['day' => $day6])->where(['time' => $time3])->get();
                    if (count($Thursday_check3) > 10)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time4) {
                    $Thursday_check4 = Form::where(['day' => $day6])->where(['time' => $time4])->get();
                    if (count($Thursday_check4) > 10)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                } elseif ($time_default == $time5) {
                    $Thursday_check5 = Form::where(['day' => $day6])->where(['time' => $time5])->get();
                    if (count($Thursday_check5) > 10)
                        return redirect('/refused');
                    else {
                        $form->save();
                        $cookie = Cookie::forever('Recruit', 'Recruit');
                        $cookies = Session::put('key', $cookie);
                        return Response::view('done', compact('committees_data', 'cookies'))->withCookie($cookie);
                    }
                }
            }
        } else {
            $cookies = Session::put('key', $cookie);
            return view('done', compact('committees_data', 'cookies'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showWorkShop27()
    {
        $committees_data = Committee::all();
        return view("workShop2017", compact('committees_data'));
    }

    public function postWorkShop27(Request $request)
    {
        $day1 = 'Saturday';
        $day2 = 'Sunday';
        $day3 = 'Monday';
        $day4 = 'Tuesday';
        $day5 = 'Wednesday';
        $day6 = 'Thursday';
        $day7 = 'Saturday 7/10/2017';
        $day8 = 'Sunday 8/10/2017';
        
        $time1 = '10 am to 11 am';
        $time2 = '11 am to 12 pm';
        $time3 = '12 pm to 1 pm';
        $time4 = '1 pm to 2 pm';
        $time5 = '2 pm to 3 pm';
        $time6 = '3 pm to 4 pm';
        $time7 = '4 pm to 5 pm';
        
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $contact_no = $request->input('contact_no');
        $year = $request->input('year');
        $homepage_select_workshop = $request->input('homepage_select_workshop');
        $day = $request->input('day');
        $time = $request->input('time');
        $blenderTask = $request->input('blenderTask');
        
        $Saturday_check1 = Workshop::where(['day' => $day1])->where(['time' => $time1])->get();
        $Saturday_check2 = Workshop::where(['day' => $day1])->where(['time' => $time2])->get();
        $Saturday_check3 = Workshop::where(['day' => $day1])->where(['time' => $time3])->get();
        $Saturday_check4 = Workshop::where(['day' => $day1])->where(['time' => $time4])->get();
        $Saturday_check5 = Workshop::where(['day' => $day1])->where(['time' => $time5])->get();
        $Saturday_check6 = Workshop::where(['day' => $day1])->where(['time' => $time6])->get();
        $Saturday_check7 = Workshop::where(['day' => $day1])->where(['time' => $time7])->get();
        
        $Sunday_check1 = Workshop::where(['day' => $day2])->where(['time' => $time1])->get();
        $Sunday_check2 = Workshop::where(['day' => $day2])->where(['time' => $time2])->get();
        $Sunday_check3 = Workshop::where(['day' => $day2])->where(['time' => $time3])->get();
        $Sunday_check4 = Workshop::where(['day' => $day2])->where(['time' => $time4])->get();
        $Sunday_check5 = Workshop::where(['day' => $day2])->where(['time' => $time5])->get();
        $Sunday_check6 = Workshop::where(['day' => $day2])->where(['time' => $time6])->get();
        $Sunday_check7 = Workshop::where(['day' => $day2])->where(['time' => $time7])->get();
        
        $Monday_check1 = Workshop::where(['day' => $day3])->where(['time' => $time1])->get();
        $Monday_check2 = Workshop::where(['day' => $day3])->where(['time' => $time2])->get();
        $Monday_check3 = Workshop::where(['day' => $day3])->where(['time' => $time3])->get();
        $Monday_check4 = Workshop::where(['day' => $day3])->where(['time' => $time4])->get();
        $Monday_check5 = Workshop::where(['day' => $day3])->where(['time' => $time5])->get();
        $Monday_check6 = Workshop::where(['day' => $day3])->where(['time' => $time6])->get();
        $Monday_check7 = Workshop::where(['day' => $day3])->where(['time' => $time7])->get();
        
        $Tuesday_check1 = Workshop::where(['day' => $day4])->where(['time' => $time1])->get();
        $Tuesday_check2 = Workshop::where(['day' => $day4])->where(['time' => $time2])->get();
        $Tuesday_check3 = Workshop::where(['day' => $day4])->where(['time' => $time3])->get();
        $Tuesday_check4 = Workshop::where(['day' => $day4])->where(['time' => $time4])->get();
        $Tuesday_check5 = Workshop::where(['day' => $day4])->where(['time' => $time5])->get();
        $Tuesday_check6 = Workshop::where(['day' => $day4])->where(['time' => $time6])->get();
        $Tuesday_check7 = Workshop::where(['day' => $day4])->where(['time' => $time7])->get();
        
        $Wednesday_check1 = Workshop::where(['day' => $day5])->where(['time' => $time1])->get();
        $Wednesday_check2 = Workshop::where(['day' => $day5])->where(['time' => $time2])->get();
        $Wednesday_check3 = Workshop::where(['day' => $day5])->where(['time' => $time3])->get();
        $Wednesday_check4 = Workshop::where(['day' => $day5])->where(['time' => $time4])->get();
        $Wednesday_check5 = Workshop::where(['day' => $day5])->where(['time' => $time5])->get();
        $Wednesday_check6 = Workshop::where(['day' => $day5])->where(['time' => $time6])->get();
        $Wednesday_check7 = Workshop::where(['day' => $day5])->where(['time' => $time7])->get();
        
        $Thursday_check1 = Workshop::where(['day' => $day6])->where(['time' => $time1])->get();
        $Thursday_check2 = Workshop::where(['day' => $day6])->where(['time' => $time2])->get();
        $Thursday_check3 = Workshop::where(['day' => $day6])->where(['time' => $time3])->get();
        $Thursday_check4 = Workshop::where(['day' => $day6])->where(['time' => $time4])->get();
        $Thursday_check5 = Workshop::where(['day' => $day6])->where(['time' => $time5])->get();
        $Thursday_check6 = Workshop::where(['day' => $day6])->where(['time' => $time6])->get();
        $Thursday_check7 = Workshop::where(['day' => $day6])->where(['time' => $time7])->get();
        
        $Saturday2_check1 = Workshop::where(['day' => $day7])->where(['time' => $time1])->get();
        $Saturday2_check2 = Workshop::where(['day' => $day7])->where(['time' => $time2])->get();
        $Saturday2_check3 = Workshop::where(['day' => $day7])->where(['time' => $time3])->get();
        $Saturday2_check4 = Workshop::where(['day' => $day7])->where(['time' => $time4])->get();
        $Saturday2_check5 = Workshop::where(['day' => $day7])->where(['time' => $time5])->get();
        $Saturday2_check6 = Workshop::where(['day' => $day7])->where(['time' => $time6])->get();
        $Saturday2_check7 = Workshop::where(['day' => $day7])->where(['time' => $time7])->get();
        
        $Sunday2_check1 = Workshop::where(['day' => $day8])->where(['time' => $time1])->get();
        $Sunday2_check2 = Workshop::where(['day' => $day8])->where(['time' => $time2])->get();
        $Sunday2_check3 = Workshop::where(['day' => $day8])->where(['time' => $time3])->get();
        $Sunday2_check4 = Workshop::where(['day' => $day8])->where(['time' => $time4])->get();
        $Sunday2_check5 = Workshop::where(['day' => $day8])->where(['time' => $time5])->get();
        $Sunday2_check6 = Workshop::where(['day' => $day8])->where(['time' => $time6])->get();
        $Sunday2_check7 = Workshop::where(['day' => $day8])->where(['time' => $time7])->get();
        
        if ($day == $day1){
            if ($time == $time1){
                if (count($Saturday_check1) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
            elseif ($time == $time2){
                if (count($Saturday_check2) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time3){
                if (count($Saturday_check3) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time4){
                if (count($Saturday_check4) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time5){
                if (count($Saturday_check5) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time6){
                if (count($Saturday_check6) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time7){
                if (count($Saturday_check7) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
        }
        elseif ($day == $day2){
            if ($time == $time1){
                if (count($Sunday_check1) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
            elseif ($time == $time2){
                if (count($Sunday_check2) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time3){
                if (count($Sunday_check3) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time4){
                if (count($Sunday_check4) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time5){
                if (count($Sunday_check5) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time6){
                if (count($Sunday_check6) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time7){
                if (count($Sunday_check7) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
        }
        elseif ($day == $day3){
            if ($time == $time1){
                if (count($Monday_check1) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
            elseif ($time == $time2){
                if (count($Monday_check2) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time3){
                if (count($Monday_check3) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time4){
                if (count($Monday_check4) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time5){
                if (count($Monday_check5) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time6){
                if (count($Monday_check6) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time7){
                if (count($Monday_check7) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
        }
        elseif ($day == $day4){
            if ($time == $time1){
                if (count($Tuesday_check1) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
            elseif ($time == $time2){
                if (count($Tuesday_check2) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time3){
                if (count($Tuesday_check3) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time4){
                if (count($Tuesday_check4) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time5){
                if (count($Tuesday_check5) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time6){
                if (count($Tuesday_check6) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time7){
                if (count($Tuesday_check7) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
        }
        elseif ($day == $day5){
            if ($time == $time1){
                if (count($Wednesday_check1) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
            elseif ($time == $time2){
                if (count($Wednesday_check2) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time3){
                if (count($Wednesday_check3) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time4){
                if (count($Wednesday_check4) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time5){
                if (count($Wednesday_check5) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time6){
                if (count($Wednesday_check6) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time7){
                if (count($Wednesday_check7) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
        }
        elseif ($day == $day6){
            if ($time == $time1){
                if (count($Thursday_check1) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
            elseif ($time == $time2){
                if (count($Thursday_check2) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time3){
                if (count($Thursday_check3) > 5)
                   return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time4){
                if (count($Thursday_check4) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time5){
                if (count($Thursday_check5) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time6){
                if (count($Thursday_check6) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
             elseif ($time == $time7){
                if (count($Thursday_check7) > 5)
                    return redirect('/refused');
                else
                {
                    WorkShop::create($request->all());
                    return redirect('done');
                }
            }
        }
    }

}
