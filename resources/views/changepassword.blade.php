@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/changepassword.css') }}">
@endsection

@section('content')
<div class="form">
        <div class="logo-area">
            <img src="images/logo.png">
        </div>
        <form method="POST" action="/edit">
         {{ csrf_field() }}
            <input type="password" name="oldpassword" placeholder="old Password" required>
            <input type="password" name="newpassword" placeholder="new Password" required>
            <input type="submit" value="Save changes">
        </form>
</div>
@endsection