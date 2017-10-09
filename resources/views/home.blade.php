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
    <link href='https://fonts.googleapis.com/css?family=Julee' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Frijole' rel='stylesheet'>
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{--<script src="{{ asset('js/home.js')}}"></script>--}}

</head>
<body>


<div class="home" id="home" style="visibility:visible; display:block;">
    <div class="row ">
        <img class=" osc shapes col-lg-6 col-lg-offset-3 col-xs-8 col-xs-offset-2 " src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/Background/osc.png?raw=true">

        <div class="clearfix"></div>

        <div class="message col-lg-3 col-sm-2 col-xs-3 col-xs-offset-7" id="message" >
            <p>Want to know more ?</p>
            <p>Let's take a tour.</p>
        </div>

        <div class="clearfix"></div>

        <div class=" rocket col-lg-4 col-lg-offset-4 col-md-5 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-5 col-xs-offset-3"></div>

        <div class="clearfix"></div>

        <a href="{{url("about")}}"  class="button col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-2 col-sm-offset-4 col-xs-4 col-xs-offset-4">START TOUR</a>
    </div>
</div>

</body>
</html>