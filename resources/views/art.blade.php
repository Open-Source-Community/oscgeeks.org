@extends('layouts.app2') @section('CSS')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/css/art.css') }}"> @endsection

@section('dropdownlist')

    @foreach($committees_data as $committee)

        <li data-submenu-id="{{ $committee->id }}">
            <a href="{{ $committee->title }}">{{ $committee->title }} Committee</a>
            <div id="{{ $committee->id }}" class="popover">
                <h3 class="popover-title">{{ $committee->title }} Committee</h3>
                <div class="popover-content">
                    <ul>
                        <li>{{ $committee->description }}
                        </li>
                        <img src="{{ $committee->imageurl }}">
                    </ul>
                </div>
            </div>
        </li>

    @endforeach

@endsection

@section('content')
    <h1>ArtWork</h1>
    <p>This is our art team work on our page o facebook or in the events .</p>
    <div class="artwork">
        @foreach($committees_data2 as $committee)
            <img tabindex="{{ $committee->id }}" src="{{ $committee->imageurl }}" alt="Image of Ireland">
        @endforeach
    </div>
@endsection