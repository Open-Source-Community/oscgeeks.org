@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/events.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/logistics.css') }}">

@endsection




@section('content')

<div class="container">
    <div class="row">

                <h1 id="header_class">Logistics Page</h1>
                <div class="col-md-12 text-center">
                            <h3>
                            <span>We print posters and publish them on the walls to share events with you.</span>
                            </h3>
                            <br>
                </div>
        
       <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
            <!-- Indicators -->
            <ol class="carousel-indicators">

                @for( $i = 1 ; $i <= count($committee_images) ; $i++)

                    @if ($i == 1)

                        <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>

                    @else

                        <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>

                    @endif
                @endfor


            </ol>

            <!-- Wrapper for slides -->
            <!-- asset function statrs from public folder -->

            <div class="carousel-inner">

                @for( $i = 0 ; $i < count($committee_images) ; $i++)

                    @if ($i == 0)
                        <div class="item active">
                            <img class="img-responsive center-block"
                                 src="{{$committee_images[$i]->imageurl}}">
                        </div>
                    @else
                        <div class="item">
                            <img class="img-responsive center-block"
                                 src="{{$committee_images[$i]->imageurl}}">
                        </div>
                    @endif
                @endfor


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<br>
@endsection