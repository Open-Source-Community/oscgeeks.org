@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/updateprofile.css') }}">
@endsection

@section('content')
<div class="form">
        <div class="logo-area">
            <img src="images/logo.png">
        </div>
        <form method="POST" action="/editprofile">
        {{ csrf_field() }}
            <input type="text" name="email" placeholder="Email" class="col-xs-">
            <input type="tel" name="phone" placeholder="Phone">
            <input type="text" name="name" placeholder="name">
            <input type="submit" value="Save changes">
        </form>
</div>
@endsection