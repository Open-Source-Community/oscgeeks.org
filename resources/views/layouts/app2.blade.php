<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to OSC-Open Source Community</title>
   <!-- Title Icon-->
    <link rel="shortcut icon" href="{{{ asset('images/navbar/logo-osc.png') }}}">

    <!-- Start Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/footer.css') }}">

@yield('CSS')
<!--End Styles -->

    <!--Start Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Custom.js') }}"></script>

@yield('JS')
<!--End Scripts -->
</head>

<body>

<!--  start Navbar  -->
<div class="navbar navbar-default ">
    <div class="container">
        <!--navbar logos-->
        <div class="row">
            <img class=" logo  col-md-1 col-xs-3  " src="{{ asset('images/navbar/logo-osc.png')}}">
            <img class=" osc col-md-4 col-xs-6   " src="{{ asset('images/navbar/osc-log.png')}}">
        </div>

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="a">OSC</a>-->
        </div>

        <div class="row">
            <div class="navbar-collapse collapse ">

                <ul class="nav navbar-nav col-xs-10">
                    <li>
                        <button type="button" onclick="window.location='{{ url ("home") }}'"
                                class="btn btn-primary btn-sm">Home
                        </button>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-default btn-sm " type="button" data-toggle="dropdown">Committees
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu " role="menu">
                                @yield('dropdownlist')
                               
                            </ul>
                        </div>
                    </li>

                    <li>
                        <button type="button" onclick="window.location='{{ url ("linux") }}'"
                                class="btn btn-default btn-sm">Linux
                        </button>
                    </li>
                    <li>
                        <button type="button" onclick="window.location='{{ url ("blender") }}'"
                                class="btn btn-default btn-sm">Blender</button>
                    </li>

                    <li>
                        <button type="button" onclick="window.location='{{ url ("events") }}'"
                                class="btn btn-default btn-sm">Events
                        </button>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right col-xs-1">
                    <li>
                        <div class="dropdown ">
                            <button class="btn btn-sm btn-default " type="button" data-toggle="dropdown">Contact Us
                                <span class="caret"></span></button>

                            <ul class="dropdown-menu contact">
                                <ul class='list-inline'>
                                    <li><a href="https://www.facebook.com/oscgeeks/" id="" class="splings_link"><i
                                                    class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/oscgeeks" id="" class="splings_link"><i
                                                    class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/oscgeeks/" id="" class="splings_link"><i
                                                    class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>
                                </ul>
                            </ul>
                        </div>
                    </li>


                </ul>

            </div>
        </div>
    </div>
</div>
<!--  end Navbar  -->


@yield('content')


<!--start footer-->
<div class="footer">


    <div class="row">

        <center>
            <div class="col-xs-12">OSC &copy; 2017</div>
        </center>


    </div>

</div>
<!--End footer-->
<!-- jquery File and MY Js -->
<!-- Latest compiled and minified JavaScript -->

</body>
</html>