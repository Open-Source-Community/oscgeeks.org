<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

       <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
    @yield('CSS')

      </head>
    <body>
<div class="home">
	<div class="row">
		<img class=" osc  col-xs-5 col-xs-offset-4 " src="{{ asset('images/Background/osc.png')}}">
		
		<div id="pinguen" class=" col-xs-1 col-xs-offset-4 pinguen" >
			<img src="{{ asset('images/Background/pinguen.png')}}">
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

</body>
