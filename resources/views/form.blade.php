<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta property="og:url" content="http://www.oscgeeks.org" />
    <meta property="og:image" content="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true" />
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
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/Form.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/hover-min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/footer.css') }}"> 
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
                <ul class="nav navbar-nav col-xs-8">
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
            
                                  @if($committee->title != 'Projects')
                                 <a href="{{ url($committee->title) }}">{{ $committee->title }} Committee</a>
                                 @else
                                   <a href ="" style="pointer-events: none">{{$committee->title }} Committee</a>
                                 @endif
               
<!--
                               <div id="{{ $committee->id }}" class="popover">
                                  <h3 class="popover-title">{{ $committee->title }} Committee</h3>
                                    <div class="popover-content">
                                        <ul>
                                            <li>{{ $committee->description }}
                                            </li>
                                        </ul>
                                    </div>
                               </div>
-->
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
            
                               <a href="/Linux Workshop">Linux Workshop</a>
               
                            </li> 
                                 <li data-submenu-id="2">
            
                               <a href="/Blender Workshop">Blender Workshop</a>
               
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
                    
<!--
                    <li>

                        @if(Session::has('key'))
                        <button type="button"  onclick="window.location='{{ url ("form") }}'"
                                class="btn btn-default btn-sm" disabled>Registration Form
                        </button>
                        @else
                         <button type="button"  onclick="window.location='{{ url ("form") }}'"
                                class="btn btn-default btn-sm">Registration Form
                        </button>
                        @endif

    <meta property="og:url" content="http://www.oscgeeks.org" />
    <meta property="og:image" content="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true" />
                    </li> 
-->
                    
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
<!--
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
-->
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

    <section class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
    <div class="container">
    <form class="well form-horizontal" action="{{URL::to('done')}}" method="post" id="contact_form">
        <fieldset>
            <legend><center><h2><b>Registration Form</b></h2></center></legend><br>
            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label> 
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
                @if($errors->any())
                <ul style="color:red;text-align:center;">
                    @foreach($errors->all() as $error)
                        <li>{{$error}} </li>
                    @endforeach
                </ul>
                @endif
            <div class="form-group">
                  <label class="col-md-4 control-label">E-Mail</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
                    </div>
                  </div>
                </div>

               <div class="form-group">
                  <label class="col-md-4 control-label">Contact No.</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input name="contact_no" placeholder="your phone no." class="form-control" type="text" required>
                    </div>
                  </div>
                </div>
                
               <div class="form-group">
                <label class="col-md-4 control-label">Year</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="year" class="form-control selectpicker" required>
                      <option >Select Your year</option>
                      <option >1st year</option>
                      <option >2nd year</option>
                      <option >3rd year</option>
                      <option >4th year</option>
                    </select>
                  </div>
            </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">First Committee</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="homepage_select_first" class="form-control selectpicker" required id="select1">
                      <option>Select your First Committee</option>
                      <option value="1">Web Committee</option>
                      <option value="2">Linux Committee</option>
                      <option value="3">Blender Committee</option>
                      <option value="4">English Heroes Committee</option>
                      <option value="5">Content Creator Committee</option>
                      <option value="6">ArtWork Committee</option>
                      <option value="7">Projects Committee</option>
                      <option value="8">Public Relation Committee</option>
                      <option value="9">Human Resource Committee</option>
                      <option value="10">Fundraising Committee</option>
                      <option value="11">Logistics Committee</option>
                    </select>
                  </div>
            </div>
            </div>


      <div class="form-group">
                <label class="col-md-4 control-label">Second Committee</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="homepage_select_second" class="form-control selectpicker" required id="select2">
                      <option>Select your Second Committee</option>
                      <option value="1">Web Committee</option>
                      <option value="2">Linux Committee</option>
                      <option value="3">Blender Committee</option>
                      <option value="4">English Heroes Committee</option>
                      <option value="5">Content Creator Committee</option>
                      <option value="6">ArtWork Committee</option>
                      <option value="7">Projects Committee</option>
                      <option value="8">Public Relation Committee</option>
                      <option value="9">Human Resource Committee</option>
                      <option value="10">Fundraising Committee</option>
                      <option value="11">Logistics Committee</option>
                    </select>
                  </div>
            </div>
            </div>

           <div class="form-group">
                <label class="col-md-4 control-label">Day</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="day" class="form-control selectpicker" required>
                      <option >Select Day</option>
                      <option >Saturday</option>
                      <option >Sunday</option>
                      <option >Monday</option>
                      <option >Tuesday</option>
                      <option >Wednesday</option>
                      <option >Thursday</option>
                    </select>
                  </div>
            </div>
            </div>

       <div class="form-group">
                <label class="col-md-4 control-label">Time</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="time" class="form-control selectpicker" required>
                      <option value="">Select Time</option>
                      <option >9 am to 10.30 am</option>
                      <option >11 am to 12.30 pm</option>
                      <option >1 pm to 2.30 pm</option>
                      <option >3 pm to 4.30 pm</option>
                    </select>
                  </div>
            </div>
            </div>
                <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-4"><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
              </div>
            </div>
        </fieldset>
    </form>
    </div>
</section>
    
<!--start footer-->
<div class="footer">
    <div class="row">
        <center>
            <div class="col-xs-12">OSC &copy; 2017</div>
             <br><br>
            
            <a href="https://www.facebook.com/oscgeeks/" id="" class="splings_link"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
            <span>&nbsp;&nbsp;</span>
            <a href="https://twitter.com/oscgeeks" id="" class="splings_link"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>   
            <span>&nbsp;&nbsp;</span>
            <a href="https://www.instagram.com/oscgeeks/" id="" class="splings_link"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
        </center>
    </div>
</div>
<!--End footer-->
<!-- jquery File and MY Js -->
<!-- Latest compiled and minified JavaScript -->

<!--End footer-->
<!-- jquery File and MY Js -->
<!-- Latest compiled and minified JavaScript -->
 <!--Start Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/npm.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/Custom.js') }}"></script> 
    <script type="text/javascript" src="{{asset('js/Form.js')}}"></script>
    <script>new WOW().init();</script>
<!--End Scripts -->
</body>

</html>