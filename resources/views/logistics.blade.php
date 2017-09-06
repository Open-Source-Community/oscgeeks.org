@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/events.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/lr.css') }}">

@endsection




@section('content')
<div class="container">
    <div class="row">
            <div class="wow flipInX" data-wow-duration="1s" data-wow-delay="0.1s" offset="200">
                <div class="text-center">
                <h1 id="header_class" class="hvr-box-shadow-outset">Logistics Page</h1>
                <img class="img-responsive" src="{{asset('/images/Background/5.jpg')}}">
                </div>
                <div class="col-md-12 text-center">
                            <div class="text-center">
                             <h3>They are the backbone of OSC, the people who work behind the scenes to make
sure that everything is perfect .They are Logistics Committee. They are
responsible for reserving the places we need to work, from holding meetings, to
interviews, to workshop sessions, to where we hold our events. Not just that they
are also responsible for buying any materials that OSC needs, printing our IDs,
banners, and t-shirts. They are also behind all the artistic, cool handcrafts you
see during our events. We print posters and publish them on the walls to share events with you.</h3><br>
                             </div>
                </div>
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