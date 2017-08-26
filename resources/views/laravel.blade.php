@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/laravel.css') }}"> 
@endsection

@section('content')
<div class="container ">
    <center>
        <h1> Laravel Workshop</h1></center>
    <h2>Love beautiful code? We do too.</h2>
    <p> The world wide web is the present and the future. The whole world is heading towards the cloud and online services everyday; and if you want to be successful in the rapid world of software development then you definitely need to learn how to create beautiful web applications.</p>
    <div class="row artwork"><img class="img-responsive col-sm-3 " src="{{asset('/images/pages images/laravel/logolaravel.jpg')}}" alt="Los Angeles">
        <div class="col-sm-9">
            <h2> Laravel PHP Framework </h2>
            <p>Awesome and experienced web developers found a repeating pattern in the process of creating web applications. They know very well that a real programmer should not repeat his code over and over again. And so they created a group of libraries and tools that contained code they used across their websites; they called it Laravel.</p>
        </div>
    </div>
    <h3> MVC Design Pattern</h3>
    <p>These developers knew very well how to write code that is clean, beautiful and -most importantly- decoupled. They used a group of really beautiful design patterns, most notably: the MVC design pattern to decouple logic, data access and presentation layers.</p>
    <h3>Open Source! and Very Well-Documented</h3>
    <p>We are the Open Source Community after all right? It is free as in free speech, the code is very well-written and commented, and the documentation is terrific!</p>
    <h2>The Laravel Workshop </h2>
    <p>Join and enjoy our hands-on project-based workshop. The scope of the workshop is well beyond Laravel; it is also about beautiful code, teamwork, git and other cool stuff.</p>
</div> @endsection