@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/star.css') }}">
@endsection


@section('content')
    <div class="back container">
        <div class="row">
            <span class="name col-xs-4 col-lg-4 col-lg-offset-0">Mohamed Samiir</span>
            <div class="stars col-xs-4 col-md-offset-1 col-lg-4 col-lg-offset-0">
                <span>55</span>
                <span class="fa fa-star" aria-hidden="true"></span>
                <!-- star icon -->
            </div>
            <div class="modify col-xs-4 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-0">
                <button class="update">update</button>
                <button class="save">save</button>
            </div>
            <br><hr>
        </div>
        
        
    </div>
@endsection