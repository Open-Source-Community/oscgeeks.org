<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to OSC-Open Source Community</title>

    <!-- Start Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" >
     <link href="{{ asset('/css/aboutstyle.css') }}" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
           <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     
@yield('CSS')
<!--End Styles -->

    <!--Start Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Custom.js') }}"></script>
     <script src="{{ asset('js/animated-text.js') }}"></script>
      <script src="{{ asset('js/ChangeHomeToAbout.js') }}"></script>
@yield('JS')
<!--End Scripts -->
</head>

<body>

<!--start header-->

<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">


            <!--Start First Row in Header-->
            <div class="row">
                <a class="navbar-brand col-lg-12 col-md-12 col-sm-12" href="#">logo</a>
            </div>
            <!--End First Row in Header-->

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- End Brand and toggle get grouped for better mobile display -->


            <!-- Collect the nav links, forms, and other content for toggling & Second Row In Header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!--End Departments dropdown-->

                    <!--DEPARTMENTS WOoooOOoOOw -->

                    <li class="active">
                        <a href="http://localhost:1234/osc-site-test/public/home">Home <i class="fa fa-caret-down" aria-hidden="true"></i> </a>
                    </li>

                    <li><a href="#" class="splings_link">Committes</a></li>
                    <li><a href="#" class="splings_link">blender</a></li>
                    <li><a href="#" class="splings_link">Linux</a></li>

                    <li class="splings_link" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact Us<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-cart" role="menu">

                            <li>
                                <ul class="list-inline">
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-official fa-3x"></i></a></li>
                                    <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                                    <li><a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram fa-3x"></i></a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>


                </ul>
                <!--End Departments dropdown-->


                <ul class="nav navbar-nav navbar-right">
                    <!--Start Events-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-cart" role="menu">
                            <li>
                                //but any thing for Events
                            </li>
                        </ul>
                    </li>
                    <!--End Events -->
                </ul>
                <!--Second Row In Header-->

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->

    </nav>
</div>
<!--end header-->



        @yield('content')



<!--start footer-->
<div class="footer">
    

        <div class="row">

       <center><div class="col-lg-12">OSC &copy; 2017 </div></center> 


        </div>

</div>
<!--End footer-->

<!-- jquery File and MY Js -->
<!-- Latest compiled and minified JavaScript -->

</body>
</html>
