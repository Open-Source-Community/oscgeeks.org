@extends('layouts.app2',array('committees_data' => $committees_data))


@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/english.css') }}">

@endsection

@section('JS')
    <script src="{{ asset('js/englishheroes.js') }}"></script>
    <!--End Scripts -->
@endsection

@section('content')
<section>
	<div class="container">
		<div class="text-center">
		<h1 class="hvr-grow wow bounceInRight" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">English Heroes</h1>
		</div>
		<div>
			<img class="img-responsive wow lightSpeedIn" src="{{asset('/images/Background/img1.jpg')}}">
		</div>
		<div class="text-center">
		<p class="hvr-float wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
			English Heroes's content focuses on the participants' interactions in English, we accomplish that through activities such as making presentations in English, fun English related games and talking about any topic in English and many more, also we present some basic grammar rules to help participants create perfectly correct sentences.
		</p>
		</div>
	</div>
</section>
@endsection