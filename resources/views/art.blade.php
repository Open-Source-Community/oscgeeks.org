@extends('layouts.app2',array('committees_data' => $committees_data))
@section('CSS')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/css/art.css') }}">
@endsection



@section('content')
    <h1>ArtWork</h1>
    <p>This is our art team work on our page on facebook or in the events .</p>
    <img class="img-responsive col-sm-12 stickers" src="{{asset('/images/pages images/art/stickers.png')}}">
    <div class="artwork">
        @foreach($committees_data2 as $committee)
            <img tabindex="{{ $committee->id }}" src="{{ $committee->imageurl }}" alt="Image of Ireland">
        @endforeach
    </div>
@endsection