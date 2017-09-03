@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
	 <link rel="stylesheet" type="text/css" href="{{ asset('/css/publicrelations.css') }}">
@endsection

@section('content')

	<div class="container">
		<div class="text-center wow slideInLeft">
			<h1 class="hvr-float">Public Relations</h1>
		</div>

<!--
		<div class="">
			<img class="img-responsive wow zoomIn" src="{{asset('/images/Background/img1.jpg')}}">
		</div>
-->

		<div class="cont  wow slideInRight hvr-grow">
			<h2>Job Description:</h2>
			<p>You can do a wonderful job but without revealing it to the public to know and understand your work, it’s like you did nothing!</p>
			<p>Surely you will extremely need people who have the ability to make relations and communicate clearly with anyone and can make a lasting impression of your job.</p>
			<p>So, that's what we actually do as PRians!</p>
			<p>Create and maintain a favorable public image for the community by communicating, understanding and supporting our followers and students, usually through publicity and other non-paid forms of communication to build, maintain and manage the reputation of OSC.</p>
			<p>These efforts also include support of arts committee, events, workshops and social media accounts.</p>
			<p>Mainly our work is managing the social media accounts and launching creative ideas of campaigns to make people reach to our work easily, spread our message -The open source- and our knowledge to others by establishing and maintaining lines of communication between our organization and its public.</p>
		</div>
	</div>

@endsection