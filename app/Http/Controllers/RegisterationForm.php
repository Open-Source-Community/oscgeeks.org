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
           if(!isset($cookie))
           {
              $form->save();
              $cookie = Cookie::forever('Recruit', 'Recruit');
              $cookies= Session::put('key',$cookie);
              return Response::view('done', compact('committees_data','cookies'))->withCookie($cookie);
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
