<!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- Mobile Specific Meta -->
            <meta name="viewport" content="initial-scale=1.0,user-scalable=no">
            <!-- Favicon-->
            <link rel="shortcut icon" href="img/fav.png">
            <!-- Author Meta -->
            <meta name="author" content="Latim Mark">
            <!-- meta character set -->
            <meta charset="UTF-8">
            <!-- Site Title -->
            <title>theohz.com</title>
            <!-- scripts -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
            <script src="js/popper.min.js"></script>     
            <script src="js/easing.min.js"></script>            
            <script src="js/hoverIntent.js"></script>
            <script src="js/superfish.min.js"></script> 
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script> 
            <script src="js/jquery.tabs.min.js"></script>                       
            <script src="js/jquery.nice-select.min.js"></script>    
            <script src="js/isotope.pkgd.min.js"></script>          
            <script src="js/waypoints.min.js"></script>                        
            <script src="js/owl.carousel.min.js"></script>                          
            <script src="js/mail-script.js"></script> 
            
            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            

            <!-- include summernote  -->
            <!-- include libraries(jQuery, bootstrap) -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
            <!-- include summernote css/js -->
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

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
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap/dist/css/bootstrap.min.css') }}">

            <script src="{{ asset('/js/main.js') }}"></script>

            <!-- server env -->
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/bootstrap/bootstrap.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/bootstrap/dist/css/bootstrap.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/main.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('jquery-ui.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/nice-select.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/animate.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/linearicons.css') }}">               
        </head>
        <!-- <div id="preloader" class="preloader"></div> -->
        <header id="header">

            <div id="small_title">
                @include('layouts.mobile_nav')
            </div>

            <!-- end mobile nav -->

            <div id="nav_content" class="col-lg-12">
                <div class="row ml-5">
                    <div class="lt col-lg-1">
                        @guest
                        <a href="/" onclick="javascript:document.getElementById('preloader').style.display='block';">
                        @endguest
                        
                        @auth
                        <a href="/home" onclick="javascript:document.getElementById('preloader').style.display='block';">
                            <br>
                        @endauth
                            <img src="/imgs/ozz-app.png" class="w-60" alt="" title="" />
                            <h3 class="white">
                                the<b class="orange">oh</b><i><b>z</b></i>
                            </h3>
                            <br>
                        </a>
                    </div>

                   <!--  <div class="col-lg-6">
                        <br>
                        <form method="POST" class="w-100">
                            <div class="row ml-30">
                                <div class="col-lg">
                                    <input type="text" placeholder="Search the ohz" class="form-control" name="" disabled>
                                </div>
                                <div class="col-lg-1">
                                    <button type="submit" class="btn btn-xs white btn-outline-warning" disabled>
                                        <i class="lnr lnr-magnifier orange"></i>
                                    </button>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </form>
                    </div> -->


                    <div class="col-lg-11">
                        @guest
                            <a href="/register" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                <button class="btn btn-md btn-outline-warning white px100 mt-20 mr-20 mb-20 rt" >
                                    Register
                                </button>
                            </a>
                                            
                            <a href="/login" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                <button class="btn btn-md btn-outline-warning white px100 mt-20 mr-20 mb-20 rt">
                                    Login
                                </button>
                            </a>                           
                        @endguest

                        @auth  
                            <a  href="/logout" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                <button class="btn btn-sm btn-outline-danger white px100 mt-20 mb-20 rt">
                                    <i class="lnr lnr-cog orange"></i> Logout
                                </button>
                            </a>  
                            <a  href="/profile" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                <button id="profile_btn" class="btn btn-md btn-outline-warning white mr-5 mt-20 mb-20 rt">
                                    <i class="lnr lnr-user orange"></i>
                                    Profile <!-- <span class="orange_dot"></span> -->
                                </button>
                            </a> 
                            <a  href="/wallet" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                <button id="wallet_btn" class="btn btn-md btn-outline-warning white  mr-5 mt-20 mb-20 rt">
                                    <i class="lnr lnr-briefcase orange"></i>
                                    Wallet <!-- <span class="orange_dot"></span> -->
                                </button>
                            </a> 
                            
                            <!-- <a href="/airtime/" onclick="javascript:document.getElementById('preloader').style.display='block';">
                               <button id="at_btn" class="btn btn-md btn-outline-warning mr-5 mt-20 mb-20 rt">
                                    <span class="lnr lnr-tablet white"></span>
                                    <strong class="white">Airtime</strong>
                               </button>
                            </a>  --> 
                           <a  href="/messages/{{ Auth::user()->name }}" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                <button id="messages_btn"  class="btn btn-md btn-outline-warning mr-5 mt-20 mb-20 rt">
                                    <span class="lnr lnr-alarm"></span>
                                    <strong class="white" >Messages <!-- <span class="orange_dot"></span> --></strong>
                                </button>
                            </a>

                            <a href="/home" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                <button id="home_btn" class="btn btn-md btn-outline-warning mr-5 mt-20 mb-20 rt">
                                    <span class="lnr lnr-calendar-full white"></span>
                                    <strong class="white">  
                                        Home <!-- <span class="orange_dot"></span> -->
                                    </strong>
                                </button>
                            </a>       
                        @endauth
                    </div>                   
                </div>           
            </div>
        </header>

        <div class="col-lg-12 col-sm-12  nlight-bg">
            <!-- background:#dff9fb; -->
            <div id="body" class="col-lg-12 nlight col-sm-12 container">             

                @guest
                <br>
                    <div id="progress" class="container col-lg-11 nlight-bg br-10">
                        <a href="/#about">
                            <button id="home_btn" class="btn btn-md btn-outline-warning blue-bg col-lg-2">
                                <span class="lnr lnr-eye white"></span>
                                <strong class="white">  
                                    About Us
                                </strong>
                            </button>
                        </a>

                       <a href="/#services">
                            <button id="accoms_btn" class="btn btn-md btn-outline-warning blue-bg col-sm-2">
                                <span class="lnr lnr-users white"></span>
                                <strong class="white">  
                                    Services
                                </strong>
                            </button>
                        </a>

                       <a href="#how">
                            <button id="accoms_btn" class="btn btn-md btn-outline-warning blue-bg  col-lg-2">
                                <span class="lnr lnr-cog white"></span>
                                <strong class="white" >  
                                    How it Works
                                </strong>
                            </button>
                        </a>

                        <a href="/#pricing">
                            <button id="food_btn" class="btn btn-md btn-outline-warning blue-bg col-lg-2">
                                <span class="lnr lnr-briefcase white"></span>
                                <strong class="white" >Pricing</strong>
                            </button>
                        </a>

                        <a href="/#packs">
                            <button id="food_btn" class="btn btn-md btn-outline-warning blue-bg col-sm-2">
                                <span class="lnr lnr-cart white"></span>
                                <strong class="white" >Packages</strong>
                            </button>
                        </a>                        
                    </div>

                @endguest

                @if( session()->has('message') )
                    <hr>
                    <div id="success_message mt-20"  class="container col-lg-5 alert alert-primary " role="alert">
                        {{ session()->get('message') }}
                        <strong>Successfully</strong>
                        <br>
                    </div>
                    <hr>
                @endif 

                @if( session()->has('error_message') )
                    <hr>
                    <div   class="container col-lg-5 alert alert-danger mt-20" role="alert">
                        {{ session()->get('error_message') }}
                        <br>
                    </div>
                    <hr>
                @endif 


                <body onload="preload()" style="background-color: #f9f9ff;" class="blue">
                    <div class="br-10 black" id="content">
                        <div  class="row bb brbr-10 mt-20">
                            <div class="container">
                                <div id="sticki" class="row nlight-bg">
                                    @auth
                                    <div class="container">
                                        <h2 class="ct-al"><b>Categories</b></h2>
                                        <br>
                                        <a href="/home" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                            <button id="home_btn" class="btn btn-md btn-outline-secondary">Spotlight</button>
                                        </a>
                                        &nbsp;&nbsp;
                                        <a id="at_btn" class="btn btn-md btn-outline-secondary" href="/airtime" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                                            <i class="lnr lnr-tablet"></i> Airtime
                                        </a>
                                        &nbsp;&nbsp;
                                        <a href="/accommodation/" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                            <button id="accoms_btn" class="btn btn-md btn-outline-secondary">
                                                <span class="lnr lnr-apartment"></span>
                                                 Accommodation
                                            </button>
                                        </a>
                                        &nbsp;&nbsp;
                                        <a href="/bulk_sms" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                            <button id="bulksms_btn" class="btn btn-md btn-outline-secondary">
                                                <span class="lnr lnr-alarm"></span>
                                                Bulk SMS
                                            </button>
                                        </a>
                                        <!--&nbsp;&nbsp; <button class="btn btn-md btn-outline-secondary">Interesting</button> --><!-- 
                                        &nbsp;&nbsp;
                                        <button class="btn btn-md btn-outline-secondary">Tech</button> -->
                                        &nbsp;&nbsp;
                                        <a href="/chat" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                            <button id="chat_btn" class="btn btn-md btn-outline-secondary"><span class="lnr lnr-users"></span> People</button>
                                        </a>
                                        <br>
                                    </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                        @yield('content')
                    </div>
                </body>
            </div>
        </div>   
        <div class="section-gap nlight-bg"></div>
        
        <!-- start footer Area -->
        <footer style="opacity: 1;" class="footer-area">
            <br>
            <div id="contact_us" class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <div class="single-footer-widget">
                            <h3 class="white"><strong>Contact Us</strong></h3>
                            <div class="footer-social d-flex align-items-center fx-20">
                                <h4 class="white">
                                    <i class="fa fa-phone"></i> +256783013570
                                    <br><br>
                                    <i class="fa fa-envelope"></i> theohzbot@gmail.com</a>
                                    <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> -->
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <div class="single-footer-widget">
                            <p class="footer-text white rt-al">
                                <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> | All rights reserved . <br><!-- Terms and Conditions Apply . --></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </footer>
        <!-- End footer Area -->
        <script type="text/javascript">
            var myVar;

            function preload() {
              myVar = setTimeout(showPage, 400);
            }

            function showPage() {
              document.getElementById("preloader").style.display = "none";
              document.getElementById("content").style.display = "block";
            }

        </script>         
</html>

     
            
