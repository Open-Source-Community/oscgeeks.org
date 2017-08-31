
@extends('layouts.app2',array('committees_data' => $committees_data))
@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/companies.css') }}"> @endsection

@section('content')
<div class="container">
    <center><h1>Our Previous Sponsors</h1></center>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/asset.jpg?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/bosta.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/codetouch.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/elsewedyelectric.jpg?raw=true">
    </div>
    <br>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/itworks.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/logo2x.png?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/mts.jpg?raw=true">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/oracle.png?raw=true">
    </div>
    <br>
    <div class="row">
    <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/companies/nationaltechnology.png?raw=true">
     <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/tmentors.png?raw=true">
      <img class="img-responsive col-sm-3 circle-image" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/companies/vadecom.png?raw=true">
      </div>
</div>
<br>
<br>
@endsection