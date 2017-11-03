@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/artwork.css') }}">
@endsection

@section('content')
 <div class="wow zoomIn" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
    <div class="container text-center">
    <h1 class="hvr-grow">ArtWork</h1>
    <div class="text-center">
    <p class="hvr-float-shadow">This is our art team work on our page on facebook or in the events .</p><br>
     <img class="img-responsive" src="{{asset('/images/Background/7.jpg')}}">
    </div>
    </div>
    <img class="img-responsive col-sm-12 stickers" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/art/stickers.png?raw=true">
    </div>
    <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
    <div class="artwork">
        @foreach($committees_data2 as $committee)
            <img tabindex="{{ $committee->id }}" src="{{ $committee->image }}" alt="Image of Ireland">
        @endforeach
    </div>
    </div>

@endsection