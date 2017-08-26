@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/events.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/logistics.css') }}">

@endsection




@section('content')

<div class="container">
    <div class="row">
        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <h1 id="header_class">Logistics Page</h1>


                <div class="item active">
                <div class="col-md-12 text-center">
                            <h3>
                                <span>We printed posters and publish them on the walls to share the events with you.</span>
                            </h3>
                            <br>
                        </div>
                  <img class="img-responsive center-block" src="{{asset('/images/logistics/1.png')}}"
                         alt="New York">   <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        
                    </div><!-- /header-text -->
                </div>
             




            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- /carousel -->
    </div>
</div>
<br>
@endsection