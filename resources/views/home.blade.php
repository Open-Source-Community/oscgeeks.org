@extends('layouts.app')

@section('CSS')
	<link href="{{ asset('/css/aboutstyle.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@endsection

@section('JS')
	<script src="{{ asset('js/animated-text.js') }}"></script>
	<script src="{{ asset('js/ChangeHomeToAbout.js') }}"></script>
@endsection

@section('content')
 
<div class="home" id="home" style="visibility:visible; display:block;">
	<div class="row">
		<img class=" osc  col-xs-5 col-xs-offset-4 " src="{{ asset('images/Background/osc.png')}}">

		<div id="pinguen" class=" col-xs-1 col-xs-offset-4 " >
			<img src="{{ asset('images/Background/pinguen.png')}}" class="pinguen">
			<div>
			<img  class="hello" src="{{ asset('images/Background/hello.png')}}" />
			</div>
		</div>

		<div class="space">
			<img  class="rocket" src="{{asset('images/Background/Rocket.png')}}">
			<img  class="stars" src="{{asset('images/Background/Rocket Stars.png')}}">
		</div>
	</div>
	<div class="row" >
		<div class=" arrow col-xs-1 col-xs-offset-5" onclick="HomeAndAbout()">
			<img   src="{{ asset('images/Background/arrow.png')}}" />
		</div>
		<img  class=" alien col-xs-3 col-xs-pull-4"  src="{{ asset('images/Background/alien.png')}}" /></div>

</div>
  <div class="container " id="about" style="visibility:hidden; display:none;">
     <div class="row">
      <img src="{{asset('images/About/about gablia.png')}}" id="about_the_gablia" class="col-s-12"/>
      <p class="about_text">An inside look from the three founders of CodePen on what it's like running a web business.<br> Everything from server infrastructure, to day-to-day operations, to new feature development.
     <br> An inside look from the three founders of CodePen on what it's like running a web business. <br>Everything from server infrastructure, to day-to-day operations, to new feature development.
    <br>  An inside look from the three founders of CodePen on what it's like running a web business.<br> Everything from server infrastructure, to day-to-day operations, to new feature development.</p>
     <img src="{{asset('images/About/pinguens.png')}}" id="pinguens">
 </div>
   </div>
@endsection
