<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to OSC - Open Source Community</title>
    <!-- Title Icon-->
    <link rel="shortcut icon" href="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true">


    <!-- Start Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    
    
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
</head>
<body>


<div class="home" id="home" style="visibility:visible; display:block;">
    <div class="row ">
        <img class=" osc shapes col-xs-5 col-xs-offset-4 " src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/Background/osc.png?raw=true">

        <div id="pinguen" class=" shapes col-xs-1 col-xs-offset-4 ">
            <img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/Background/pinguen.png?raw=true" class="pinguen">
            <div>
                <img class="hello " src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/Background/Hello.png?raw=true"/>
            </div>
        </div>

    </div>

    <div class="row shapes">
        <img class="alien  shapes col-xs-3 col-xs-push-1" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/Background/alien.png?raw=true"/>
        <a class="toAbout">
            <img class=" arrow  shapes col-xs-2 col-xs-push-2" onclick="window.location='{{ url ("about") }}'"
                                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/Background/arrow.png?raw=true"/>

        </a>

        <div class="space  col-xs-2 col-xs-push-4">
            <img class="rocket shapes" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/Background/rocket.png?raw=true">
            <img class="stars shapes" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/Background/Stars.png?raw=true">
        </div>

    </div>

</div>

</body>
</html>
