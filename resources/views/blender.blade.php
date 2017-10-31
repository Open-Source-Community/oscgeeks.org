@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/blender.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/projects.css') }}">
@endsection

@section('JS')
@endsection

@section('content')
    <div class="container">
       <div class="row wow  bounceInRight" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
            <div class="col-md-12">
                <div class="text-center">
                <h3 class="hvr-grow" style="font-size: 400%;">Blender</h3>
                </div>
                <div class="hvr-float-shadow">
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
                </div><br>
                <h3 class="text-center">Here we represent some of our instructors' work</h3>
                
            </div>
        </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="img-responsive" src="{{asset('/images/Background/b1.png')}}" alt="Los Angeles" style="width:650px;height:550px;">
      </div>

      <div class="item">
        <img class="img-responsive" src="{{asset('/images/Background/b2.jpg')}}" alt="Chicago" style="width:650px;height:550px;">
      </div>
    
      <div class="item">
        <img class="img-responsive" src="{{asset('/images/Background/b3.png')}}" alt="New york" style="width:650px;height:550px;">
      </div>

      <div class="item">
        <img class="img-responsive" src="{{asset('/images/Background/b4.png')}}" alt="New york" style="width:650px;height:550px;">
      </div>

      <div class="item">
        <img class="img-responsive" src="{{asset('/images/Background/b5.png')}}" alt="New york" style="width:650px;height:550px;">
      </div>

       <div class="item">
        <img class="img-responsive" src="{{asset('/images/Background/b6.jpg')}}" alt="New york" style="width:650px;height:550px;">
      </div>

       <div class="item">
        <img class="img-responsive" src="{{asset('/images/Background/b7.jpg')}}" alt="New york" style="width:650px;height:550px;">
      </div>

       <div class="item">
        <img class="img-responsive" src="{{asset('/images/Background/b8.png')}}" alt="New york" style="width:650px;height:550px;">
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
        <div class="wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
             <p class="vision" style="font-size: 300%;">Here're 2 playlists of blender tutorials to get started<br></p>
                 <div>
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">
                    <p class="vision" style="font-size: 200%;color:blue; "> First Baby Steps in Blender</p>
                    </button><br> <br>
                    <div id="demo" class="collapse">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/JYj6e-72RDs?list=PL_ps7ytdG-RVd3OG2CG7vquUayYdxo-Xr" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">
                    <p class="vision" style="font-size: 200%;color:blue; ">Noob to Pro in Blender<br></p>
                    </button><br> <br>
                    <div id="demo1" class="collapse">
                        <div class="container">
                             <div class="row">
                                <div class="col-md-6 form-group">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/t4MTnpnahu0?list=PL_ps7ytdG-RXgT7Z8sDJWULDprr9A_gQl" frameborder="0" allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div><br>
    </div>

@endsection

