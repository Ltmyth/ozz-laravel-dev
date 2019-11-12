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

            <script src="{{ asset('/js/main.js') }}"></script>

            <!-- server env -->
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/bootstrap/dist/css/bootstrap.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/main.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('jquery-ui.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/nice-select.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/animate.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/linearicons.css') }}">

               
        </head>
        <div id="preloader" class="preloader"></div>
        <header id="header" class="br-10">

            <div id="small_title">
                @include('layouts.mobile_nav')
            </div>

            <!-- end mobile nav -->

            <div id="nav_content" class="col-lg-12">
                <div class="row ml-5">
                    <div class="lt col-lg-1">
                        @guest
                        <a href="/">
                        @endguest
                        
                        @auth
                        <a href="/home">
                            <br>
                        @endauth
                            <img src="/imgs/ozz-app.png" class="w-60" alt="" title="" />
                            <h3 class="white">the<b class="orange">oh</b><b>z</b></h3>
                            <br>
                        </a>
                    </div>
                    
                    <div class="col-lg-6">
                        <br>
                        <form method="POST" class="w-100">
                            <div class="row ml-30">
                                <div class="col-lg">
                                    <input type="text" placeholder="Search the ohz" class="form-control" name="">
                                </div>
                                <div class="col-lg-1">
                                    <button type="submit" class="btn btn-xs white btn-outline-warning">
                                        <i class="lnr lnr-magnifier orange"></i>
                                    </button>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </form>
                    </div>


                    <div class="col-lg-5">
                        @guest
                            <a href="/register">
                                <button class="btn btn-md btn-outline-warning white px100 mt-20 mr-20 mb-20 rt">
                                    Register
                                </button>
                            </a>
                                            
                            <a href="/login">
                                <button class="btn btn-md btn-outline-warning white px100 mt-20 mr-20 mb-20 rt">
                                    Login
                                </button>
                            </a>                           
                        @endguest

                        @auth 

                            <a  href="/messages">
                                <button class="btn btn-md btn-outline-warning white px100 mr-5 mt-20 mb-20">
                                    <i class="lnr lnr-envelope orange"></i> Inbox
                                </button>
                            </a>   

                            <a  href="/wallet">
                                <button class="btn btn-md btn-outline-warning white px100 mr-5 mt-20 mb-20">
                                    <i class="lnr lnr-briefcase orange"></i> Wallet
                                </button>
                            </a>
                            

                            <a  href="/profile">
                                <button class="btn btn-md btn-outline-warning white px100 mr-5 mt-20 mb-20">
                                    <i class="lnr lnr-user orange"></i> Settings
                                </button>
                            </a>           
                            
                            <a  href="/logout">
                                <button class="btn btn-sm btn-outline-danger white px100 mt-20 mb-20">
                                    <i class="lnr lnr-cog orange"></i> Logout
                                </button>
                            </a>                                               
                        @endauth
                    </div>
                </div>                
            </div>
        </header>

        <div class="col-lg-12 col-sm-12">
            <!-- background:#dff9fb; -->
            <div id="body" class="col-lg-12 col-sm-12 container">
                @auth
                <div id="sidenav" class="white-bg br-10 col-lg-10 container  sidenav">
                    @include('layouts.sidenav')   
                </div>
                <hr class="container col-lg-9">
                @endauth
                @guest
                <br>
                    <div id="progress" class="container col-lg-11 white-bg br-10">
                        <a href="/#about">
                            <button id="home_btn" class="btn btn-md btn-outline-primary col-lg-2">
                                <span class="lnr lnr-eye orange"></span>
                                <strong>  
                                    About Us
                                </strong>
                            </button>
                        </a>

                       <a href="/#services">
                            <button id="accoms_btn" class="btn btn-md btn-outline-primary col-sm-2">
                                <span class="lnr lnr-users orange"></span>
                                <strong>  
                                    Services
                                </strong>
                            </button>
                        </a>

                       <a href="#how">
                            <button id="accoms_btn" class="btn btn-md btn-outline-primary  col-lg-2">
                                <span class="lnr lnr-cog orange white"></span>
                                <strong>  
                                    How it Works
                                </strong>
                            </button>
                        </a>

                        <a href="/#pricing">
                            <button id="food_btn" class="btn btn-md btn-outline-primary col-lg-1">
                                <span class="lnr lnr-briefcase orange"></span>
                                <strong>Pricing</strong>
                            </button>
                        </a>

                        <a href="/#packs">
                            <button id="food_btn" class="btn btn-md btn-outline-primary col-sm-2">
                                <span class="lnr lnr-cart orange"></span>
                                <strong>Packages</strong>
                            </button>
                        </a>

                        <a href="#contact_us">
                           <button id="at_btn" class="btn btn-md btn-outline-primary  col-lg-2">
                                <span class="lnr lnr-phone orange"></span>
                                <strong>Contact</strong>
                           </button>
                        </a>
                    </div>

                    <!-- <div id="collapse_btn" class="container col-lg-10 white-bg br-10">
                        <button  style="display:inline;" class="btn btn-md btn-outline-primary col-lg-2">
                            <span class="lnr lnr-menu orange"></span>
                        </button>
                    </div> -->
                @endguest

                @if( session()->has('message') )
                    <div style="margin-top:2%;margin-left:10%;" class="right-space alert alert-primary" role="alert">
                        {{ session()->get('message') }}
                        <strong>Successfully</strong>
                        <br>
                    </div>
                @endif 
                <!-- style="background: url(../imgs/seamless_pattern.png);" -->
                <body onload="preload()" style="background-color: #f9f9ff;" class="blue">
                    <div class="br-10 black" id="content">
                        @yield('content')
                    </div>
                </body>
            </div>
        </div>   
        <div class="section-gap"></div>
        
        <!-- start footer Area -->
        <footer style="opacity: 1;" class="footer-area">
            <br>
            <div id="contact_us" class="container">
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
                            <h2 class="white"><strong>Contact Us</strong></h2>
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
            <script>
                var myVar;

                function preload() {
                  myVar = setTimeout(showPage, 800);
                }

                function showPage() {
                  document.getElementById("preloader").style.display = "none";
                  document.getElementById("content").style.display = "block";
                }
            </script>
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
</html>

     
            