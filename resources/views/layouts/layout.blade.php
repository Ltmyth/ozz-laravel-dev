<!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- Mobile Specific Meta -->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Favicon-->
            <link rel="shortcut icon" href="img/fav.png">
            <!-- Author Meta -->
            <meta name="author" content="ltmyth">
            <!-- meta character set -->
            <meta charset="UTF-8">
            <!-- Site Title -->
            <title>theohz.com</title>

            <!-- Fonts -->
            <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

            <!-- styles -->
            <link rel="stylesheet" href="/css/linearicons.css">
            <link rel="stylesheet" href="/css/font-awesome.min.css">
            <link rel="stylesheet" href="/css/bootstrap.css">
            <link rel="stylesheet" href="/css/magnific-popup.css">
            <link rel="stylesheet" href="/css/jquery-ui.css">                
            <link rel="stylesheet"  href="/css/nice-select.css">                          
            <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
            <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">             
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap/dist/css/bootstrap.min.css') }}">

            <!-- server env -->
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/bootstrap/dist/css/bootstrap.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/main.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('jquery-ui.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/nice-select.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/animate.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/linearicons.css') }}">

               
        </head>
        <header id="header">
            <div class="container main-menu">
                <div class="row">
                  
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            
                            @guest
                            <li>
                                <a id="logo" href="/">
                                    <img src="/imgs/ozz-app.png" alt="" title="" />
                                </a><br><strong class="white">www.the<b class="orange">oh</b><b>z</b>.com</strong>
                            </li>
                            @endguest
                            
                            @auth
                                <li>
                                    <a id="logo" href="/home">
                                        <img src="/imgs/ozz-app.png" alt="" title="" />
                                    </a>
                                </li>
                                <li id="messages_btn" class="br-10">
                                    <a   href="/messages">
                                        <strong  class="white">
                                            <big>
                                                <i class="lnr lnr-alarm orange"></i>
                                            </big>
                                             INBOX
                                        </strong>
                                        <!-- <big><b style="color:orange;">0000</b></big> -->
                                    </a>
                                </li>
                                <li id="wallet_btn">
                                    <a   href="/wallet">
                                        <strong class="white"> 
                                            <big>
                                                <i class="lnr lnr-briefcase orange"></i>
                                            </big> 
                                            Stash
                                            <!-- <big><b style="color:red;">0</b></big> -->
                                        </strong>
                                    </a>
                                </li>
                                <li class="menu-has-children">
                                    <a href="">
                                        <strong id="profile_btn" class="br-10">
                                            <big>
                                                <i class="lnr lnr-user orange"></i>
                                            </big>
                                        </strong>
                                    </a>
                                    <ul>
                                        <li>
                                            <a   href="/profile">
                                                <strong>  
                                                     <i class="lnr lnr-cog blue"> Profile</i>
                                                </strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="/logout">
                                                <strong>  
                                                     <i class="lnr lnr-power-switch red"> Logout</i>
                                                </strong>
                                            </a>
                                        </li>
                                    </ul>
                                </li>                            
                            @endauth
                            @guest
                                
                                <li>
                                    <a href="/register">
                                        <button class="btn btn-lg btn-outline-primary white px100">
                                            Register
                                        </button>
                                    </a>
                                </li>
                                <!-- <li class="menu-has-children"><a href="">Blog</a>
                                    <ul>
                                      <li><a href="blog-home.html">Login</a></li>
                                      <li><a href="blog-single.html">SignUp</a></li>
                                    </ul>
                                </li> -->   
                                <!-- <li class="menu-has-children"><a href="">Pages</a>
                                    <ul>
                                      <li><a href="elements.html">Elements</a></li>
                                      <li class="menu-has-children"><a href="">Level 2 </a>
                                        <ul>
                                          <li><a href="#">Item One</a></li>
                                          <li><a href="#">Item Two</a></li>
                                        </ul>
                                      </li>                                         
                                    </ul>
                                </li> -->                                                                         
                                <li>
                                    <a href="/login">
                                        <button class="btn btn-lg btn-outline-primary white px100">
                                            Login
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="/#pricing">
                                        <button class="btn btn-lg btn-outline-primary white px100">
                                            Pricing
                                        </button>
                                    </a>
                                </li>
                            @endguest
                        </ul>
                    </nav><!-- #nav-menu-container -->                  
                </div>
            </div>
        </header><!-- #header -->

    
               <!-- <div id="right-topbar" class="col-sm-4">
                <a class="nav-link" href="/wallet">
                    
                    <button id="wallet_btn" class="btn btn-md btn-default c_thru white">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        <strong>  
                            Wallet
                        </strong>
                    </button>
                </a>

                <a class="nav-link" href="/profile">
                    
                    <button id="profile_btn" class="btn btn-md btn-default c_thru white">
                        <i class="glyphicon glyphicon-cog"></i>
                        <strong>  
                            Profile
                        </strong>
                    </button>
                </a>
                    
                
                <button id="colapse-1" style="width:100px;display:inline;" onclick="side_toggle()" class="btn btn-md btn-default c_thru">
                    <i class="glyphicon glyphicon-align-justify white"></i>
                </button>
            </div> -->
            
            

        <div class="col-lg-12 col-sm-12">

            <style>
                .loader {
                    position: fixed;
                    left: 0px;
                    top: 0px;
                    width: 100%;
                    height: 100%;
                    z-index: 9999;
                    background-color: #ffffffcf;
                }
                .loader img{
                    position: relative;
                    left: 40%;
                    top: 40%;
                }
            </style>

            <!-- <div class="loader" ><img src="/img/rubiks.gif/"></div> -->

            <script>
                window.onload = function() 
                {
                    //display loader on page load 
                    $('.loader').fadeOut();
                }

            </script><!-- background:#dff9fb; -->
            @if( session()->has('message') )
                <div style="margin-top:2%;margin-left:10%;" class="right-space alert alert-success" role="alert">
                    {{ session()->get('message') }}
                    <strong>Successfully</strong>
                    <br>
                </div>
            @endif
              

            <div id="body" class="col-lg-12 col-sm-12 container">
                @include('layouts.sidenav')
                @auth
                <hr class="container col-lg-9">
                @endauth
                @guest
                <br>
                    <div id="progress">
                        <a href="#about">
                            <button id="home_btn" class="btn btn-md btn-outline-primary col-lg-2">
                                <span class="lnr lnr-users"></span>
                                <strong>  
                                    About
                                </strong>
                            </button>
                        </a>

                       <a href="#services">
                            <button id="accoms_btn" class="btn btn-md btn-outline-primary col-lg-2">
                                <span class="lnr lnr-cog"></span>
                                <strong>  
                                    Services
                                </strong>
                            </button>
                        </a>

                       <a href="#how">
                            <button id="accoms_btn" class="btn btn-md btn-outline-primary col-lg-2">
                                <span class="lnr lnr-cog"></span>
                                <strong>  
                                    How it Works
                                </strong>
                            </button>
                        </a>

                        <a href="#pricing">
                            <button id="food_btn" class="btn btn-md btn-outline-primary col-lg-2">
                                <span class="lnr lnr-briefcase"></span>
                                <strong>Pricing</strong>
                            </button>
                        </a>

                        <a href="#">
                           <button id="at_btn" class="btn btn-md btn-outline-primary col-lg-2">
                                <span class="lnr lnr-phone"></span>
                                <strong>Contact</strong>
                           </button>
                        </a>
                    </div>
                @endguest
                <body style="background-color: #f9f9ff;">
                    @yield('content')
                </body>
            </div>
        </div>   
        <br><br>
        
        <!-- start footer Area -->
        <footer style="opacity: 1;" class="footer-area">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            
                            <p class="footer-text white">
                                <strong>| Copyright &copy;<script>document.write(new Date().getFullYear());</script>| All rights reserved |
                                <br>| Terms and Conditions Apply | </strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                       
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h4><strong>Contact Us</strong></h4>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-phone"></i></a>
                                <a href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </footer>
        <!-- End footer Area -->        

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>      
        <script src="js/easing.min.js"></script>            
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script> 
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script> 
        <script src="js/jquery.tabs.min.js"></script>                       
        <script src="js/jquery.nice-select.min.js"></script>    
        <script src="js/isotope.pkgd.min.js"></script>          
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/simple-skillbar.js"></script>                           
        <script src="js/owl.carousel.min.js"></script>                          
        <script src="js/mail-script.js"></script>   
        <script src="js/main.js"></script>  
</html>

     
            