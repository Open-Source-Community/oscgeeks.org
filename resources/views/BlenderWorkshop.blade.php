@extends('layouts.app2')


@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/blenderworkshop.css') }}">

@endsection

@section('JS')
    <script src="{{ asset('js/blenderworkshop.js') }}"></script>
    <!--End Scripts -->
@endsection

@section('content')
	<section class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
		<div class="container">
			<div class="text-center">
			<h1 class="hvr-pop">Blender Workshop</h1>
			</div>
			<div class="hvr-glow">
			<h2>Blender workshop enters you to the gate of 3D art.</h2>
			<h3>The workshop consists of 5 sessions, after the workshop you will be able to :</h3>
			<span>1. model your own design.</span><br>
			<span>2.create advanced material (shaders + textures).</span><br>
			<span>3.unwrap and texture your model.</span><br>
			<span>4.make advanced material with maps.</span><br>
			<span>5.light your project.</span><br>
			<span>6.make you own light setup.</span><br>
			<span>7.improve your project to realism using compositing.</span><br><br>
			<div class="note">
			<h4>At the end of the workshop there is a final competition will be held between all the members of the workshop as teams and there is a final special gift for the winner one.</h4>
			</div>
			</div>
		</div>
	</section>

@endsection