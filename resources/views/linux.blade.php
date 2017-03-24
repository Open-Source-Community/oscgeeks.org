<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linux-OSC</title>

    <!-- Start Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/linux.css') }}" >
    <!--End Styles -->

    <!--Start Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/linux.js') }}"></script>
    <!--End Scripts -->
</head>
<body>
<div class="container">
    <br>
    <br>

    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div id="div-pos1" class="panel-heading">
                <h4 class="text-pos1" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">سطب ubuntu خطوه بخطوه</a>
                </h4> //سطب ubuntu خطوه بخطوه
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p></div>
            </div>
        </div>
        <div class="panel panel-default">
            <div id="div-pos2" class="panel-heading">
                <h4 class="text-pos2" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">6 حاجات لازم تعملهم لما تصطب لينكس</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
        </div>
        <div class="panel panel-default">
            <div id="div-pos3" class="panel-heading">
                <h4 class="text-pos3" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">شروق تكتشف لينكس</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                    </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.footer')
</body>
</html>