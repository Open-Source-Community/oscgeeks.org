<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

       <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    @yield('CSS')

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Custom.js') }}"></script>
   
   

    @yield('JS')
    </head>
   <body>
    
    <div class="container-fluid">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
   
   <div class="row">    
        <a class="navbar-brand col-lg-2 col-md-2 col-sm-2" href="#">PtojectX</a>

        <div class="style_search col-lg-6 col-xs-8  col-lg-offset-0 col-md-6
        col-md-offset-0 ">
            <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">All</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than  </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>s
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
               
                 <input type="text" class="form-control search_edit" name="x" placeholder="Search..">
                <span class="input-group-btn">
                    <button class="btn btn-default search_icon" type="button">
                    <span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
     <!--End Departments dropdown-->
        <!--DEPARTMENTS WOoooOOoOOw -->
        <li class="active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departmens
                <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>
          
                <ul class="dropdown-menu" role="menu">
                    <li data-submenu-id="submenu-patas">
                        <a href="#">Patas</a>
                
                        <div id="submenu-patas" class="popover">
                            <h3 class="popover-title">Patas</h3>
                            <div class="popover-content">  <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <li>12</li>
                                
                                </ul></div>
                        </div>
                    </li>
                    <li data-submenu-id="submenu-snub-nosed">
                        <a href="#">Golden Snub-Nosed</a>
                        <div id="submenu-snub-nosed" class="popover">
                            <h3 class="popover-title">Golden Snub-Nosed</h3>
                            <div class="popover-content">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <li>12</li>
                                
                                </ul>
                                
                                
                            </div>
                        </div>
                    </li>
                    <li data-submenu-id="submenu-duoc-langur">
                        <a href="#">Duoc Langur</a>
                        <div id="submenu-duoc-langur" class="popover">
                            <h3 class="popover-title">Duoc Langur</h3>
                            <div class="popover-content">  <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <li>12</li>
                                
                                </ul></div>
                        </div>
                    </li>
                    <li data-submenu-id="submenu-pygmy">
                        <a href="#">Baby Pygmy Marmoset</a>
                        <div id="submenu-pygmy" class="popover">
                            <h3 class="popover-title">Baby Pygmy Marmoset</h3>
                            <div class="popover-content">  <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <img src="images/1.jpg">
                                    <li>12</li>
                                
                                </ul></div>
                        </div>
                    </li>
                   
                    <li data-submenu-id="submenu-monk">
                        <a href="#">Monk Saki</a>
                        <div id="submenu-monk" class="popover">
                            <h3 class="popover-title">Monk Saki</h3>
                            <div class="popover-content">  <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <li>12</li>
                                
                                </ul></div>
                        </div>
                    </li>
                    <li data-submenu-id="submenu-gabon">
                        <a href="#">Gabon Talapoin</a>
                        <div id="submenu-gabon" class="popover">
                            <h3 class="popover-title">Gabon</h3>
                            <div class="popover-content">  <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <li>12</li>
                                
                                </ul></div>
                        </div>
                    </li>
                    <li data-submenu-id="submenu-grivet">
                        <a href="#">Grivet</a>
                        <div id="submenu-grivet" class="popover">
                            <h3 class="popover-title">Grivet</h3>
                            <div class="popover-content">  <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <li>12</li>
                                
                                </ul></div>
                        </div>
                    </li>
                    <li data-submenu-id="submenu-red-leaf">
                        <a href="#">Red Leaf</a>
                        <div id="submenu-red-leaf" class="popover">
                            <h3 class="popover-title">Red Leaf</h3>
                            <div class="popover-content">  <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <li>12</li>
                                
                                </ul></div>
                        </div>
                    </li>
                    <li data-submenu-id="submenu-king-colobus">
                        <a href="#">King Colobus</a>
                        <div id="submenu-king-colobus" class="popover">
                            <h3 class="popover-title">King Colobus</h3>
                            <div class="popover-content">  <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quod perferendis earum eos natus adipisci rerum blanditiis iure id. Perferendis molestiae, excepturi voluptate nesciunt deserunt esse quidem cumque quaerat doloremque!
                                    </li>
                                    <li>12</li>
                                
                                </ul></div>
                        </div>
                    </li>
                </ul>
              </li>
               <li><a href="#" class="splings_link">Today's Deals</a></li>
        <li><a href="#" class="splings_link">Gift Cards & Registry</a></li>
        <li><a href="#" class="splings_link">Sell</a></li> 
         <li><a href="#" class="splings_link">Help</a></li>  
         
      </ul>
      
     <!--End Departments dropdown-->
      
       <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown 1<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown 2<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        
        <!--Start CART-->
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> Items<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li class="divider"></li>
              <li><a class="text-center" href="">View Cart</a></li>
          </ul>
        </li>
        <!--End Cart -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



    </div>
    
    <!-- jquery File and MY Js -->
    <!-- Latest compiled and minified JavaScript -->
   
</body>

</html>
