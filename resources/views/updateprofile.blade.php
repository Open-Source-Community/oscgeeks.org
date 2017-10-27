@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/updateprofile.css') }}">
@endsection

@section('content')
<div class="form">
        <div class="logo-area">
            <img src="images/logo.png">
        </div>
        <form>
            <input type="text" placeholder="Email" class="col-xs-">
            <input type="tel" placeholder="Phone">
            <input type="password" placeholder="Password">
            <input type="submit" value="Save changes">
        </form>
</div>
@endsection