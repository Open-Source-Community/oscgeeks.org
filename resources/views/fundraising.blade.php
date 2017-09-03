@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fundraising.css') }}">
@endsection

@section('content')
	<div class="container">
		<div class="text-center wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s" offset="200">
			<h1 class="hvr-pop">Fundraising</h1>
		</div>

<!--
		<div class="">
			<img class="img-responsive wow zoomInUp" src="{{asset('/images/Background/img1.jpg')}}">
		</div>
-->

		<div class="job hvr-glow wow flipInX"  data-wow-duration="1s" data-wow-delay="0.5s" offset="200">
			<h2>Job Description:</h2>
			<p>Fund is fun so play it smart” is their slogan, they are not just limited to money. You can call them Money-Makers or semi businessmen as they have great negotiation skills, a huge number of contacts and are qualified to deal with any person or situation that comes across their way. They are Fundraising Committee. They are responsible for making deals with different companies or organizations to provide sponsors for OSC, representing the image of OSC to the different companies or organizations.
			</p>
		</div>
	</div>

@endsection