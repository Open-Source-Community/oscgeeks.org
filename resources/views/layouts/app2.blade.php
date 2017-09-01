<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to OSC</title>
    <!-- Title Icon-->
    <link rel="shortcut icon" href="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true">
    <!-- Start Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
    <!--End Fonts -->
    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/footer.css') }}"> @yield('CSS')
<!--End Styles -->
    <!--Start Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Custom.js') }}"></script> @yield('JS')
<!--End Scripts -->
</head>

<body>
<!--  start Navbar  -->
<div class="navbar navbar-default ">
    <div class="container">
        <!--navbar logos-->
        <div class="row"><img class=" logo  col-md-1 col-xs-3  " src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true"> 
            <img class=" osc col-md-4 col-xs-6   " src="https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/Minified%20Images/navbar/osc-log.png?raw=true"></div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="sr-only">toggle navigation</span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span></button>
            <!--<a class="navbar-brand" href="a">OSC</a>--></div>
        <div class="row">
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav col-xs-5">
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
                             
                               @foreach($committees_data as $committee)

                             <li data-submenu-id="{{ $committee->id }}">
            
                                  @if($committee->title == 'Linux' || $committee->title == 'Blender' || $committee->title == 'Laravel' 
            || $committee->title == 'Artwork' || $committee->title == 'Logistics' || $committee->title == 'Content Creators')
                                 <a href="{{ url($committee->title) }}">{{ $committee->title }} Committee</a>
                                 @else
                                   <a href ="" style="pointer-events: none">{{$committee->title }} Committee</a>
                                 @endif
               
            
                               <div id="{{ $committee->id }}" class="popover">
                                  <h3 class="popover-title">{{ $committee->title }} Committee</h3>
                                    <div class="popover-content">
                                        <ul>
                                            <li>{{ $committee->description }}
                                            </li>
                                        </ul>
                                    </div>
                               </div>
                            </li>

                             @endforeach                   
                            
                            </ul>
                        </div>
                    </li>
                    
                     <li>
                        <div class="dropdown">
                            <button class="btn btn-default btn-sm " type="button" data-toggle="dropdown">Workshops
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu " role="menu"> 

                             <li data-submenu-id="1">
            
                               <a href="/Linux">Linux Workshop</a>
               
                            </li> 
                                 <li data-submenu-id="2">
            
                               <a href="/Blender">Blender Workshop</a>
               
                            </li> 
                                 <li data-submenu-id="3">
            
                               <a href="/Laravel">Laravel Workshop</a>
               
                            </li> 
                            
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <button type="button" onclick="window.location='{{ url ("events") }}'"
                                class="btn btn-default btn-sm">Events
                        </button>
                    </li>                    
                    
                    <li>
                        <button type="button" onclick="window.location='{{ url ("about") }}'"
                                class="btn btn-default btn-sm">About us
                        </button>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right col-xs-4">
                 <li>
                        <button type="button" onclick="window.location='{{ url ("Companies") }}'"
                                class="btn btn-default btn-sm">Previous Sponsors
                        </button>
                    </li>
                     <li>
                        <div class="dropdown ">
                            <button class="btn btn-sm btn-default " type="button" data-toggle="dropdown">Social Media
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu contact"  style="background-color: white;">
                                <ul class='list-inline' >
                                    <li ><a href="https://www.facebook.com/oscgeeks/" id="" class="splings_link"><i
                                                    class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a></li>
                                    <li ><a href="https://twitter.com/oscgeeks" id="" class="splings_link"><i
                                                    class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>
                                    <li ><a href="https://www.instagram.com/oscgeeks/" id="" class="splings_link"><i
                                                    class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>
                                </ul>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown ">
                            <button class="btn btn-sm btn-default " type="button" data-toggle="dropdown">Contact Us
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu contact"  style="background-color: white;">
                                
                                 <li data-submenu-id="1">
            
                                     <a>President.of.OSC@gmail.com</a>
               
                            </li> 
                                 <li data-submenu-id="2">
            
                                     <a>FR.of.OSC@gmail.com</a>
               
                            </li> 
                                 <li data-submenu-id="3">
            
                                     <a>PR.of.OSC@gmail.com</a>
               
                            </li> 
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--  end Navbar  -->@yield('content')
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