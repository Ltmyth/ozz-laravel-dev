<!DOCTYPE html>
    <html lang="zxx" class="no-js">
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
        <title>Orz</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- styles -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">                
        <link rel="stylesheet" href="css/nice-select.css">                          
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">             
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/mine.css') }}"> -->
    </head> 

    <body>  
        <header id="header">
            <div class="container main-menu">
                <div class="row align-items-center d-flex">
                  
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li>
                                <a id="logo" href="/">
                                    <img src="imgs/ozz-app.png" alt="" title="" />
                                </a>
                            </li>
                            @auth
                                <li>
                                    <a  id="right-topbar" href="/messages">
                                        <button id="messages_btn" class="btn btn-md btn-default c_thru white">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                            <strong>  
                                                Messages&nbsp;<big><b style="color:#8e44ad;">0</b></big>
                                            </strong>
                                        </button>
                                    </a>
                                </li>                            
                            @endauth
                            @guest
                                <li><a href="/">About</a></li>
                                <li><a href="/#pricing">Pricing</a></li>
                                <li><a href="/register">Signup</a></li>
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
                                <li><a href="/login">Login</a></li>

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

        <div id="body" class="col-lg-12 col-sm-12">
            <!-- background:#dff9fb; -->
            <div style="color:#130f40;"   class="row center">
                @if( session()->has('message') )
                    <div style="margin-top:2%;margin-left:10%;" class="right-space alert alert-success" role="alert">
                        {{ session()->get('message') }}
                        <strong>Successfully</strong>
                        <br>
                    </div>
                @endif
                    
                <!-- Sidebar -->
                <div class="row justify-content-between">
                    @include('layouts.sidenav')    
                </div>

                @yield('content')
            </div>
        </div>   
        <br><br>
        
        <!-- start footer Area -->
        <footer style="opacity: 0.9;" class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About Me</h4>
                            <p>
                                We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                            </p>
                            <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Newsletter</h4>
                            <p>Stay updated with our latest trends</p>
                            <div class="" id="mc_embed_signup">
                                 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                    <div class="input-group-btn">
                                      <button class="btn btn-default" type="submit">
                                        <span class="lnr lnr-arrow-right"></span>
                                      </button>    
                                    </div>
                                        <div class="info"></div>  
                                  </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h4>Follow Me</h4>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </body>
</html>

     
            