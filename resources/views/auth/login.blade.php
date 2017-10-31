@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="form">
            <div class="logo-area">
                <img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true">
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span>Remember me</span>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
@endsection