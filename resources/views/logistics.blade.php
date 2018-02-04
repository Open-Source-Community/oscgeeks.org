@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/events.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/LR2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/footer2.css') }}">

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="wow flipInX" data-wow-duration="1s" data-wow-delay="0.1s" offset="200">
                <div class="text-center">
                    <h1 id="header_class" class="hvr-grow">Logistics Page</h1>
                    <img class="img-responsive" src="{{asset('/images/Background/5.jpg')}}">
                </div>
                <div class="col-md-12 text-center">
                    <div class=" text-center">
                        <h3>We let you try to use our tool to handcraft whatever you want. We decorate the place with
                            handcrafts and colors to share cheerfulness with you. We made many beautiful things together
                            and continue to do so. We make entertaining and educational games to let you share your
                            knowledge and have fun with us. We are also responsible for finding the right place to host
                            our events and reserve it. We print flyers and posters and publish them during events. We
                            are the heart of all the materials you see around in OSC.</h3><br>
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
                                     src="{{$committee_images[$i]->image}}">
                            </div>
                        @else
                            <div class="item">
                                <img class="img-responsive center-block"
                                     src="{{$committee_images[$i]->image}}">
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