@extends('layouts.app2',array('committees_data' => $committees_data))
@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/companies.css') }}"> @endsection
@endsection

@section('content')
<div class="container">
    <center><h1>Our Previous Sponsors</h1></center>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/asset.jpg')}}">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/bosta.png')}}">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/codetouch.png')}}">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/elsewedyelectric.jpg')}}">
    </div>
    <br>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/itworks.png')}}">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/logo2x.png')}}">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/mts.jpg')}}">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/oracle.png')}}">
    </div>
    <br>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/nationaltechnology.png')}}">
     <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/tmentors.png')}}">
      <img class="img-responsive col-sm-3 circle-image" src="{{asset('/images/pages images/companies/vadecom.png')}}">
      </div>
</div>
<br>
<br>
@endsection