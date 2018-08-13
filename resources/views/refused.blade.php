@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/done.css') }}">
@endsection

@section('content')
    <div class="container">
        <form class="well form-horizontal">
            <fieldset>
                <img class="done"
                     src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true">
                <h1 style="text-align: center;">Sorry, The slot you have picked is fully booked! Please choose another
                    time for your interview and <a href="/apply">Try Again!</a></h1>
            </fieldset>
        </form>
    </div>
@endsection