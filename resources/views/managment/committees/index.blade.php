@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">

@endsection


@section('content')

    <div class="committees">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul id="hexGrid">
                        @foreach($items as $item)
                            <li class="hex">
                                <a style="background: #fff" class="hexIn" href="{{url("committees/$item->id/tasks")}}">
                                    <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt=""/>
                                    <h1>{{$item->name}}</h1>
                                    <p>Some sample text about the article this hexagon leads to</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection