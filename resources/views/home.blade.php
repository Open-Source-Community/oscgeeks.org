<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to OSC-Open Source Community</title>


    <link href="{{ asset('/css/aboutstyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <!-- Start Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

    <script src="{{ asset('js/animated-text.js') }}"></script>
    <script src="{{ asset('js/ChangeHomeToAbout.js') }}"></script>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Custom.js') }}"></script>
</head>
<body>


<div class="home" id="home" style="visibility:visible; display:block;">
    <div class="row ">
        <img class=" osc shapes col-xs-5 col-xs-offset-4 " src="{{ asset('images/Background/osc.png')}}">

        <div id="pinguen" class=" shapes col-xs-1 col-xs-offset-4 ">
            <img src="{{ asset('images/Background/pinguen.png')}}" class="pinguen">
            <div>
                <img class="hello " src="{{ asset('images/Background/hello.png')}}"/>
            </div>
        </div>

    </div>

    <div class="row shapes">
        <img class="alien  shapes col-xs-3 col-xs-push-1" src="{{ asset('images/Background/alien.png')}}"/>
        <a class="toAbout"><img class=" arrow  shapes col-xs-2 col-xs-push-2" onclick="HomeAndAbout()"
                                         src="{{ asset('images/Background/arrow.png')}}"/></a>

        <div class="space  col-xs-2 col-xs-push-4">
            <img class="rocket shapes" src="{{asset('images/Background/Rocket.png')}}">
            <img class="stars shapes" src="{{asset('images/Background/Stars.png')}}">
        </div>

    </div>

</div>

</body>
</html>
