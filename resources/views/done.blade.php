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
                <h1 style="text-align: center;">Thanks For Your Registration.</h1>
                {{--<h1 style="text-align: center;">Interviews will be held <a--}}
                {{--href="https://www.facebook.com/Galaxi.Coworking" target="_blank">Galaxi Co-working space</a>. Thanks For--}}
                {{--Your Registration</h1>--}}
            </fieldset>
        </form>
    </div>
@endsection( )