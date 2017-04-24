
 @extends('layouts.app2')

 @section('CSS')
 <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">
    
 @endsection
 @section('content')
   <div class="container homeContainer " id="about">
     <div class="row">
      <img src="{{asset('images/About/about gablia.png')}}" id="about_the_gablia" class="col-s-12"/>
      <p class="about_text">An inside look from the three founders of CodePen on what it's like running a web business.<br> Everything from server infrastructure, to day-to-day operations, to new feature development.
     <br> An inside look from the three founders of CodePen on what it's like running a web business. <br>Everything from server infrastructure, to day-to-day operations, to new feature development.
    <br>  An inside look from the three founders of CodePen on what it's like running a web business.<br> Everything from server infrastructure, to day-to-day operations, to new feature development.</p>
     <img src="{{asset('images/About/pinguens.png')}}" id="pinguens">
 </div>
   </div>

   @endsection



 