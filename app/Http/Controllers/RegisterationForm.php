<?php

namespace App\Http\Controllers;

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
     * @param  \Illuminate\Http\Request  $request
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
            $form=new Form();
            $form->first_name=$request->first_name;
            $form->last_name=$request->last_name;
            $form->email=$request->email;
            $form->contact_no=$request->contact_no;
            $form->year=$request->year;
            $form->homepage_select_first=$request->homepage_select_first;
            $form->homepage_select_second=$request->homepage_select_second;
            $form->day=$request->day;
            $form->time=$request->time;
            $form->ip=request()->ip();
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
               
        if ($day_default == $day1){
                $Saturday_check1 = Form::where(['day' => $day1])->where(['time' => $time1])->get();
                $Saturday_check2 = Form::where(['day' => $day1])->where(['time' => $time2])->get();
                $Saturday_check3 = Form::where(['day' => $day1])->where(['time' => $time3])->get();
                $Saturday_check4 = Form::where(['day' => $day1])->where(['time' => $time4])->get();
                $Saturday_check5 = Form::where(['day' => $day1])->where(['time' => $time5])->get();}
               
        if ($day_default == $day2){
                $Sunday_check1 = Form::where(['day' => $day2])->where(['time' => $time1])->get();
                $Sunday_check2 = Form::where(['day' => $day2])->where(['time' => $time2])->get();
                $Sunday_check3 = Form::where(['day' => $day2])->where(['time' => $time3])->get();
                $Sunday_check4 = Form::where(['day' => $day2])->where(['time' => $time4])->get();
                $Sunday_check5 = Form::where(['day' => $day2])->where(['time' => $time5])->get();}
               
        if ($day_default == $day3){
                $Monday_check1 = Form::where(['day' => $day3])->where(['time' => $time1])->get();
                $Monday_check2 = Form::where(['day' => $day3])->where(['time' => $time2])->get();
                $Monday_check3 = Form::where(['day' => $day3])->where(['time' => $time3])->get();
                $Monday_check4 = Form::where(['day' => $day3])->where(['time' => $time4])->get();
                $Monday_check5 = Form::where(['day' => $day3])->where(['time' => $time5])->get();}
               
        if ($day_default == $day4){
                $Tuesday_check1 = Form::where(['day' => $day4])->where(['time' => $time1])->get();
                $Tuesday_check2 = Form::where(['day' => $day4])->where(['time' => $time2])->get();
                $Tuesday_check3 = Form::where(['day' => $day4])->where(['time' => $time3])->get();
                $Tuesday_check4 = Form::where(['day' => $day4])->where(['time' => $time4])->get();
                $Tuesday_check5 = Form::where(['day' => $day4])->where(['time' => $time5])->get();}
               
        if ($day_default == $day5){
                $Wednesday_check1 = Form::where(['day' => $day5])->where(['time' => $time1])->get();
                $Wednesday_check2 = Form::where(['day' => $day5])->where(['time' => $time2])->get();
                $Wednesday_check3 = Form::where(['day' => $day5])->where(['time' => $time3])->get();
                $Wednesday_check4 = Form::where(['day' => $day5])->where(['time' => $time4])->get();
                $Wednesday_check5 = Form::where(['day' => $day5])->where(['time' => $time5])->get();}
               
        if ($day_default == $day6){
                $Thursday_check1 = Form::where(['day' => $day6])->where(['time' => $time1])->get();
                $Thursday_check2 = Form::where(['day' => $day6])->where(['time' => $time2])->get();
                $Thursday_check3 = Form::where(['day' => $day6])->where(['time' => $time3])->get();
                $Thursday_check4 = Form::where(['day' => $day6])->where(['time' => $time4])->get();
                $Thursday_check5 = Form::where(['day' => $day6])->where(['time' => $time5])->get();}
        
//            $ip_check = Form::where(['ip' => $request->ip])->get();
           if(!isset($cookie))
           {
               if ($day_default == $day1){
                   if (count($Saturday_check1) > 5)
                       return redirect('/refused');
                   else if (count($Saturday_check2) > 5)
                       return redirect('/refused');
                   else if (count($Saturday_check3) > 5)
                       return redirect('/refused');
                   else if (count($Saturday_check4) > 5)
                       return redirect('/refused');
                   else if (count($Saturday_check5) > 5)
                       return redirect('/refused');}
               
               if ($day_default == $day2){
                   if (count($Sunday_check1) > 6)
                       return redirect('/refused');
                   else if (count($Sunday_check2) > 7)
                       return redirect('/refused');
                   else if (count($Sunday_check3) > 7)
                       return redirect('/refused');
                   else if (count($Sunday_check4) > 7)
                       return redirect('/refused');
                   else if (count($Sunday_check5) > 6)
                       return redirect('/refused');}
               
               if ($day_default == $day3){
                   if (count($Monday_check1) > 7)
                       return redirect('/refused');
                   else if (count($Monday_check2) > 8)
                       return redirect('/refused');
                   else if (count($Monday_check3) > 8)
                       return redirect('/refused');
                   else if (count($Monday_check4) > 8)
                       return redirect('/refused');
                   else if (count($Monday_check5) > 7)
                       return redirect('/refused');}
               
               if ($day_default == $day4){
                   if (count($Tuesday_check1) > 7)
                       return redirect('/refused');
                   else if (count($Tuesday_check2) > 8)
                       return redirect('/refused');
                   else if (count($Tuesday_check3) > 8)
                       return redirect('/refused');
                   else if (count($Tuesday_check4) > 8)
                       return redirect('/refused');
                   else if (count($Tuesday_check5) > 7)
                       return redirect('/refused');}
               
               if ($day_default == $day5){
                   if (count($Wednesday_check1) > 8)
                       return redirect('/refused');
                   else if (count($Wednesday_check2) > 8)
                       return redirect('/refused');
                   else if (count($Wednesday_check3) > 8)
                       return redirect('/refused');
                   else if (count($Wednesday_check4) > 8)
                       return redirect('/refused');
                   else if (count($Wednesday_check5) > 8)
                       return redirect('/refused');}
               
               if ($day_default == $day6){
                   if (count($Thursday_check1) > 10)
                       return redirect('/refused');
                   else if (count($Thursday_check2) > 10)
                       return redirect('/refused');
                   else if (count($Thursday_check3) > 10)
                       return redirect('/refused');
                   else if (count($Thursday_check4) > 10)
                       return redirect('/refused');
                   else if (count($Thursday_check5) > 10)
                       return redirect('/refused');}
               else
                  {
                      $form->save();
                      return redirect('/done');
//                      $cookie = Cookie::forever('Recruit', 'Recruit');
//                      $cookies= Session::put('key',$cookie);
//                      return Response::view('done', compact('committees_data','cookies'))->withCookie($cookie);
                  }
           }
           else
           {
             $cookies= Session::put('key',$cookie);
             return view('done', compact('committees_data','cookies')); 
           }
            
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
