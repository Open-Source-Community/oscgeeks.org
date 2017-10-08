@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/hr.css') }}">

@endsection


@section('content')

	<div class="container">
		<div class="text-center wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
			<h1 class="hvr-grow">Human Resource</h1>
			<img class="img-responsive" src="{{asset('/images/Background/3.jpg')}}">
		</div>


		<div class="job hvr-float-shadow wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
			<h2>Job Description:</h2>
			<p>It's not only about interviews, WE ARE THE GOVERNMENT! We believe in
human resources and how important it is to invest in, we also believe in
order and how important to apply it, so, what does an HR do in OSC ?
Our cycle begins with the interviews, where the interviewee is always a
winner; meaning that it's not only about the selection, it's about
knowing ourselves better and discovering our advantages to improve them
and disadvantages to work on.</p>

			<p>Then comes motivation. We all fall sometimes, but OSC's HR are always
there to bring us back up and keep us focused on our greater good and
belief. We help the crew as well as ourselves to keep any negative
feelings or problems from hindering our progress. We believe that what
makes communities rise or fall are the people and how well their
potentials are used, and we intend to keep everyone in a shared
productive spirit that will ensure our community keeps on growing.
Another very important aspect of the HR is evaluation. The HRs are the
guardians that always follow you and let you know yourself even better.
This is done by evaluating each person's and committee's progress to make
sure that we are always improving and going up on that curve!
			</p>

			<p>Last but not the least, the HR is also responsible for organizing. Like
we said before, we have a thing for order. We partner with others and
help organizing our events and making sure everything is on track.
We are the watchful eyes over the community; the guardians behind the
scenes. We are the HR!</p>

		</div>
	</div>

@endsection