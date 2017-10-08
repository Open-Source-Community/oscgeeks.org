@extends('layouts.app2',array('committees_data' => $committees_data))


@section('CSS')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/linuxwork.css') }}">

@endsection

@section('content')
<section>
	<div class="container">
		<div class="text-center wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
			<h1 class=" hvr-bounce-in">Linux Workshop</h1>
		</div>
		<div class="about hvr-float wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
			<h2>About the workshop:</h2>	
			<p id="parag">Linux is everywhere; From desktop, mobiles, servers, to supercomputers.
				This workshop explores various tools and techniques that enables participants
				to achieve their day-to-day work in Linux environment, it also introduces some
				important tools for developers to do programming tasks on Linux.
				After completing this workshop you should have a great working knowledge
				with Linux. You will be able to continue your progress in Linux environment
				as either a powerful user, system administrator, or developer using the acquired
				skills and tools.</p>
		</div>

		<div class="who hvr-float wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
		<h2>Who is this workshop for?</h2>
		<p id="parag">This workshop is designed for students with limited or no previous exposure to
			Linux, focusing mainly on computer science students.</p>
		</div>

		<div class="what hvr-float wow bounceInRight" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
		<h2>What you will learn?</h2>
		<ul id="ulli">
			<li>Installing Linux as the only operating system, or dual boot alongside
				Windows.</li>
			<li>Linux Basic Commands.</li>
			<li>Linux Documentation.</li>
			<li>Installing and managing (update/upgrade) software packages.</li>
			<li>Managing users and groups.</li>
			<li>Configuring file permissions.</li>
			<li>Compiling and running code using the compiler directly with no IDE.</li>
			<li>Some important utilities (ex: grep, pipe, ….etc).</li>
			<li>The difference between standard streams (stdIn, stdout, stderr) and redirection.</li>
			<li>Introduction to Network:
				<ul>
				<li>Difference between TCP and UDP.</li>
				<li>IP addresses.</li>
				<li>What is DNS.</li>
				<li>Well-known network ports.</li>
				<li>Introduction to SSH.</li>
				<li>SSH Configuration files.</li>
				<li >Login and copying using SSH.</li>
				</ul>
			</li>
			<li>Managing processes and services.</li>
			<li>Introduction to Bash shell scripting.</li>
			<li>Working with different CLI editors (nano and VIM).</li>
		</ul>
		</div>
	</div>
</section>

@endsection