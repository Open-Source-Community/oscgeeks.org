@extends('layouts.app2')

@section('CSS')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/done.css') }}">
@endsection

@section('content')
	<div class="container">
	<form class="well form-horizontal" action="{{URL::to('done')}}" method="post" id="contact_form">
		<fieldset>
			<div class="done">
			<h1>Thanks For Your Registration.</h1>
<!--			<p><img src="images/Background/imges.jpg" class="img-responsive"></p>-->
			</div>
		</fieldset>

	</form>
	</div>
@endsection