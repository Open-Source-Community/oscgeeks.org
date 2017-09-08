@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fr.css') }}">
@endsection

@section('content')
	<div class="container">
		<div class="text-center wow zoomInUp" data-wow-duration="1s" data-wow-delay="0.5s" offset="200">
			<h1 class="hvr-pop">Web Committee</h1>
		</div>


		<div class="text-center wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s" offset="200">
			<img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/web.png?raw=true">
		</div>


		<div class="job hvr-glow wow flipInX " data-wow-duration="1s" data-wow-delay="0.5s" offset="200">
			<h2>Job Description:</h2>
			<p>They strive to create visually appealing sites that feature user-friendly designs and are easy to use. They are Web Committee. They are responsible for designing and developing OSC's website, their job is divided into two main parts: Web Development which is the main functionalities of the website and Web Design which is the layout or the user interface of the website. we dont need to discuss our work this website explain alot.Aslo Create Laravel Workshop is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as: Simple, fast routing engine. Powerful dependency injection container.
			</p>
		</div>
	</div>

@endsection