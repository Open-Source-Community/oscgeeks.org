@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/changepassword.css') }}">
@endsection

@section('content')
<div class="form">
        <div class="logo">
            <img src="images/logo.png">
        </div>
        <form>
            <input type="password" placeholder="old Password">
            <input type="password" placeholder="new Password">
            <input type="text" placeholder="Email">
            <input type="submit" value="save changes">
        </form>
</div>
@endsection