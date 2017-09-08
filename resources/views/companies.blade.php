
@extends('layouts.app2',array('committees_data' => $committees_data))
@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/companies.css') }}"> @endsection

@section('content')
<div class="container">
    <center><h1>Our Previous Sponsors</h1></center>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Acs.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Assct.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/BOsta.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Itworkx.png?raw=true">
    </div>
    <br>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/National%20technology.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/code%20touch.png?raw=true">
     <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Vad.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Sewedy.png?raw=true">
    </div>
    <br>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Tmentors.png?raw=true">
      </div>
</div>
<br>
<br>
@endsection