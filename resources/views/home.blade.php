@extends('layouts.app')

@section('content')
<div class="home">
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
	<div class="row">
		<div class=" arrow col-xs-1 col-xs-offset-5">
			<img   src="{{ asset('images/Background/arrow.png')}}" />
		</div>
		
			<img  class="  col-xs-3 col-xs-pull-4"  src="{{ asset('images/Background/alien.png')}}" /></div>
		
</div>

@endsection
