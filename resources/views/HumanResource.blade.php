@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/humanresource.css') }}">

@endsection


@section('content')

	<div class="container">
		<div class="text-center wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
			<h1 class="hvr-grow">Human Resource</h1>
		</div>

<!--
		<div class="">
			<img class="img-responsive wow rollIn" src="{{asset('/images/Background/img1.jpg')}}">
		</div>
-->

		<div class="job hvr-grow-shadow wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.5s" offset="200"">
			<h2>Job Description:</h2>
			<p>It's not only about interviews , WE ARE THE GOVERNAMENT we believe in human resource and how it's really important to invest in it, also believing in order and how it's important to Apply it, so, what does an HR do in OSC ? our cycle begins with the interviews, where the interviewee is always a winner , point here is not the selection but to see ourselves better and discover our advantages to work on it and also discover out disadvantages to correct it.</p>

			<p>motivation, we all fall sometime, but OSC'S HR is always by your side, always help you stand up and
 			keep on going, we help the crew as well as ourselves to not having any negative feelings or any problems that would effect us , also by praising positive thoughts to motivate ourselves even more.
			</p>

			<p>Evaluation, the first method of reforming is evaluation, HR is the mirror that always follows you and let you know yourself even better, so we need to evaluate ourselves to know how much we have improved.</p>

			<p>organizing, as we said before, WE LOVE ORDER we help organizing events and import matters also we care about timings precisely and that each member is at his/her place </p>
		</div>
	</div>

@endsection