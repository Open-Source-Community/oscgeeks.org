@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="form">
            <div class="logo-area">
                <img src="images/logo.png">
            </div>
            <form>
                <input type="text" placeholder="Email">
                <input type="password" placeholder="Password">
                <input type="checkbox">
                <span>Remember me</span>
                <input type="submit" value="Login">
            </form>
    </div>
</div>
@endsection