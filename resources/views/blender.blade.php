@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/events.css') }}">
@endsection

@section('JS')
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center" style="font-size: 400%;">Blender</h3>
                <p class="vision" style="font-size: 200%;">
                    <br>
                    It's the place where you can unleash your imagination, and make everything you
                    imagine a reality. A place that allows you to translate your thoughts into amazing
                    designs using Blender.
                    <br>


                </p>


                <p class="vision" style="font-size: 200%;">
                    Blender is a professional free and open-source 3D computer graphics software
                    product used for creating animated films, visual effects, art, 3D printed models,
                    interactive 3D applications and video games. Blender Committee offers their
                    knowledge in Blender through their very own workshop.
                    <br>

                </p>
                <h3 class="text-center">Here we represent some of our instructors' work</h3>
            </div>
        </div>


        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive center-block" src="{{asset('/images/pages images/blender/blend1.png')}}"
                         alt="Los Angeles">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="{{asset('/images/pages images/blender/blend2.png')}}"
                         alt="Chicago">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="{{asset('/images/pages images/blender/blend4.png')}}"
                         alt="New York">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="{{asset('/images/pages images/blender/blend5.png')}}"
                         alt="New York">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="{{asset('/images/pages images/blender/blend3.png')}}"
                         alt="New York">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="{{asset('/images/pages images/blender/blend9.png')}}"
                         alt="New York">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="{{asset('/images/pages images/blender/blend7.png')}}"
                         alt="New York">
                </div>

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

        <br>

        <p class="vision" style="font-size: 300%;">
            Here're some blender tutorials from our amazing instructor Saadiya Madboly
            <br>

        </p>

        <div>
            <a href="https://www.youtube.com/playlist?list=PL_ps7ytdG-RVd3OG2CG7vquUayYdxo-Xr"><p class="vision"
                                                                                                  style="font-size: 200%;color:blue; ">
                    First Baby Steps in Blender
                    <br></p>
            </a>
            <br>
            <a href="https://www.youtube.com/playlist?list=PL_ps7ytdG-RXgT7Z8sDJWULDprr9A_gQl"><p class="vision"
                                                                                                  style="font-size: 200%; color:blue; ">
                    Noob To Pro in Blender
                    <br></p></a>
            <br> <br> <br> <br>
        </div>


    </div>

@endsection

 