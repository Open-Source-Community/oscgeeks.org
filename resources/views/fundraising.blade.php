@extends('layouts.app2')

@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fr.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="text-center wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s" offset="200">
            <h1 class="hvr-pop">Fundraising</h1>
            <img class="img-responsive" src="{{asset('/images/Background/2.jpg')}}">
        </div>


        <div class="job hvr-float-shadow wow flipInX" data-wow-duration="1s" data-wow-delay="0.5s" offset="200">
            <h2>Job Description:</h2>
            <p>Fund is fun so play it smart” is their slogan, they are not just limited to money. You can call them
                Money-Makers or semi businessmen as they have great negotiation skills, a huge number of contacts and
                are qualified to deal with any person or situation that comes across their way. They are Fundraising
                Committee. They are responsible for making deals with different companies or organizations to provide
                sponsors for OSC, representing the image of OSC to the different companies or organizations.
            </p>
        </div>
    </div>

@endsection