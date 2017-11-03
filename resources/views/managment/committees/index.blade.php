@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/managment.css') }}">
@endsection


@section('content')

    <div class="committees">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul id="categories" class="clr">

                        @foreach($items as $item)

                            <a href="{{url("committees/$item->id/tasks")}}" class="list">

                                <div class="hex-div">

                                    <img class="hex-img"
                                         src="https://farm3.staticflickr.com/2878/10944255073_973d2cd25c.jpg"
                                         alt=""/>

                                    <h1 class="hex-h1">{{$item->name}}</h1>

                                </div>
                            </a>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection