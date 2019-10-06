<!-- <style type="text/css">
    #login-btn {
        background-color:  #2980b9;
        color: white;
    }
</style> -->
@extends('layouts.layout')
@section('content')
    
    <!-- start banner Area -->
    <section class="#">
        <div class="container">
           <div class="row fullscreen align-items-center">
                <div class="col-lg-6 col-md-6 banner-left">
                    <img id="hero_img"  src="/imgs/ozz-app.png" alt="">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-5 banner-right">
                    <div class="row">
                        <h6>Welcome to the<b class="orange">oh</b><b>z</b>.com</h6>
                    </div>

                    <div class="row">
                        <h5><b>The <b class="orange">oh</b><b>z</b> one stop spot.</b></h5>
                    </div>
                    <br>
                    <div class="row">
                        <a href="#">
                            <button class="primary-btn text-uppercase">
                                join us now
                            </button>
                        </a>
                    </div>  
                      
                </div>
            </div>
        </div>                  
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section id="about" class="home-about-area">
        <div class="container">
            <div  class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 home-about-left">
                    <img class="img-fluid" style="width:40%;" src="imgs/pointing-up.svg" alt="">
                </div>
                <div class="col-lg-5 col-md-6 home-about-right">
                    <h1><b>About the <b class="orange">oh</b><b>z</b></b></h1>
                    <!-- by Latim Mark -->
                    <p class="lt-al">
                        <strong>The <strong><b class="orange">oh</b><b>z</b></strong> is a low cost <strong>reparation</strong> application, <br> built for community-based living back-boned by a Ugandan born crypto currency known as the <b class="orange">oh</b><b>z</b></b> ,<br> created and intended for <strong>individuals</strong> and <strong>service providers</strong> living or commuting within <strong>featured</strong> communities.
                    </p>

                    <p class="lt-al" >This enables a more <strong>confortable, enlightened</strong> and <strong>social</strong> stay for both individuals and service providers within the respective featured communities.</strong></p>
                    <h4><b>MISSION</b></h4>
                    <p > 
                       <h5 class="lt-al orange"> To connect 
                        community-based users with each other 
                        and to respective community-based services <strong>quickly</strong> and <strong>click easily</strong>.</h5>
                    </p>
                    <!-- <a href="#" class="primary-btn text-uppercase">View Full Details</a> -->
                </div>
            </div>
        </div>  
    </section>
    <!-- End home-about Area -->

    <!-- Start services Area -->
    <section id="services"  class="services-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10"><b>Services</b></h1>
                        <p class="lt-al fz-25">
                            <strong>
                                Top up your wallet stash accordingly to get the following life pack at your finger tips.
                            </strong>
                        </p>
                    </div>
                </div>
            </div>                      
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-users"></span>
                        <a href="#"><h4>People</h4></a>
                        <strong>
                            <p class="lt-al">
                                Connect with people in your community or neighborhood at no cost.
                            </p>
                        </strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-tablet"></span>
                        <a href="#"><h4>Airtime</h4></a>
                        <strong>
                            <p class="lt-al">
                               With internet connectivity. <strong>buy</strong> airtime from <strong>anywhere</strong> you are <strong>24 hours a day everyday</strong> for your mobile phone number , a friend's number or  a list of acquaintances and associates on <big class="black">MTN, AIRTEL and AFRICELL.</big> <br>
                               This is currently applicable in Uganda alone.
                            </p>
                        </strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-dinner"></span>
                        <a href="#"><h4>Food</h4></a>
                        <strong>
                            <p class="lt-al">
                                Search,  view and procure from community based food service providers and their various menus. 
                            </p>
                        </strong>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-apartment"></span>
                        <a href="#"><h4>Accommodation</h4></a>
                        <strong>
                            <p class="lt-al">
                                Find and secure accommodation within a community or destination of interest.
                                Chose from a live listing of ;
                            </p>
                            <ul style="list-style-type:square;" class="lt-al">
                                <li>Hotels</li>
                                <li>Hostels</li>
                                <li>Appartments</li>
                                <li>Lodgings</li>
                                <li>Motels</li>
                            </ul>
                        </strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="package-no  lnr lnr-briefcase"></span>
                        <a href="#"><h4>Payments</h4></a>
                        <strong>
                            <p class="lt-al">
                                Make payments from your <b class="orange">oh</b><b>z</b> wallet stash to another user's wallet or list of users' wallets.
                                <!-- You can also liquidate or cashout <b class="orange">oh</b><b>z</b> from your wallet stash into a mobile money account or list of accounts. -->
                            </p>
                        </strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-lock"></span>
                        <a href="#"><h4>Secure and transparent transactions</h4></a>
                        <strong>
                            <p class="lt-al">
                                Using your user account and <strong>encrypted</strong> password,track your transactions from the distributed <b class="orange">oh</b><b>z</b> <strong class="red"> transactions ledger</strong> which is a portal displaying all <big class='orange'><b class="orange">oh</b><b>z</b></big> transactions.
                            </p>
                        </strong>
                    </div>              
                </div>                                                      
            </div>
        </div>  
    </section>
    <!-- End services Area -->  

   
    <!-- Start portfolio-area Area -->
    <section class="portfolio-area " id="portfolio">
        <div id="how" class="container">
            <div class="row d-flex justify-content-center">
                
                <div class="col-lg-12">
                    <h1 class="mb-10"><b>How it works</b></h1>
                    <div class="row">
                        <div class="col-lg-3 b blue-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/pointing-up.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Register</strong></h3>
                            <hr>
                            <strong><p class="lt-al"><b class="orange">oh</b><b class="green">z</b> has the following sign up requirements;</p></strong>
                            <hr>
                            <strong>
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>A Valid email</li>
                                    <li>A Unique username</li>
                                    <li>A memorable strong password</li>
                                </ul>
                            </strong>
                            <hr>
                        </div>
                        <div class="col-lg-3  b blue-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/hand.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Setup</strong></h3>
                            <hr>
                            <strong><p class="lt-al">Complete your user profile by adding your;</p></strong>
                            <hr>
                            <strong>
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>First and last names</li>
                                    <li>Active mobile money or phone number</li>
                                    <li>Security code</li>
                                </ul>
                            </strong>
                            <hr>
                        </div>
                        <div class="col-lg-3  b blue-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/three.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Topup stash</strong></h3>
                            <hr>
                            <strong><p class="lt-al">Navigate to your stash and at the bottom of the portal, chose a package to topup from the following list;</p></strong>
                            <hr>
                            <strong>
                                <a href="#stash" class="white">
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>Bronze Stash</li>
                                    <li>Silver Stash</li>
                                    <li>Golden Stash</li>
                                    <li>Vibranium Stash</li>
                                </ul>
                                </a>
                            </strong>
                            <hr>
                        </div>
                        <div class="col-lg-3 b blue-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/cart.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Use your <b class="orange">oh</b><b class="green">z</b></strong></h3>
                            <hr>
                            <strong>
                                <p class="lt-al">Search, identify and secure the following packs using your <b class="orange">oh</b><b class="green">z</b> stash;</p>
                                <hr>
                                <ul style="list-style-type:square;" class="lt-al">    
                                    <li>Airtime</li>
                                    <li>Food</li>
                                    <li>Accommodation</li>
                                </ul>
                                <hr>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio-area Area --> 

    <!-- Start price Area -->
    <section id="pricing"  class="price-area section-gap">
        <div  class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <hr class="container col-lg-4">
                    <button class="btn btn-lg btn-outline-danger"><b class="orange">OH</b><b>Z</b> PRICING</button>
                    <hr class="container col-lg-4">
                    <div class="title text-center">
                        <h1><b>Stash Value and Cost</b></h1>
                        <div class="container blue-bg br-10">
                            <hr>
                                <h5 class="white">0.1 <big class="orange"><b class="orange">oh</b><b class="green">z</b></big> <big><strong>=</strong></big> <big class="orange">UGX</big> 500.</h5><br>
                                <h5 class="white">1 <big class="orange"><b class="orange">oh</b><b class="green">z</b></big><big><strong>=</strong></big> <big class="orange">UGX</big> 5000.</h5>
                            <hr>
                            <strong><u><h4 class="red">Disclaimer!</h4></u></strong>
                            <h5>
                                <p class="white pb-30 lt-al">
                                    At any given time, the <big>minimum</big> top up a user can request for is <strong>1</strong> <strong class="orange"><b class="orange">oh</b><b class="green">z</b></strong> and <big>maximum</big> top up
                                    </big> request limit is <strong>200</strong> <strong class="orange"><b class="orange">oh</b><b class="green">z</b></strong>.However there are no limits on stash or wallet balances.
                                </p>
                            </h5>
                        </div> 
                    </div>
                    <br>
                    <div class="title text-center">
                        <h1 class="mb-10"><b>Choose Your <b class="orange">oh</b><b>z</b> Stash</b></h1>
                    </div>
                </div>
            </div>                  
            <div id="stash" class="row">
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no" style="width:60%;" src="imgs/bronze.svg" alt="">
                        <h4>Bronze Stash</h4>
                        <p class="mt-10 red">1 <b class="orange">oh</b><b>z</b></p>
                    </div>
                    <div class="package-list">
                        <strong>
                            <ul>
                                <li>Airtime</li>
                                <li>Food</li>
                            </ul>
                        </strong>
                    </div>
                    <div class="bottom-part">
                        <h1>UGX 5,000</h1>
                        <a class="btn btn-lg btn-outline-warning text-uppercase mt-30" href="/login/">REQUEST TOPUP</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no" style="width:60%;" src="imgs/silver.svg" alt="">
                        <h4>Silver Stash</h4>
                        <strong><p class="mt-10 red">10 <b class="orange">oh</b><b>z</b></p></strong>
                    </div>
                    <div class="package-list">
                        <strong>    
                            <ul class="lt-al">
                                <li>Airtime</li>
                                <li>Food</li>
                                <li>Mobile Money</li>
                                <li>Accommodation Booking fee</li>
                            </ul>
                        </strong>
                    </div>
                    <div class="bottom-part">
                        <h1>UGX 50,000</h1>
                        <a class="btn btn-lg btn-outline-warning text-uppercase mt-30" href="/login/">REQUEST TOPUP</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no" style="width:60%;" src="imgs/gold.svg" alt="">
                        <h4>Golden Stash</h4>
                        <strong><p class="mt-10 red">50 <b class="orange">oh</b><b>z</b></p></strong>
                    </div>
                    <div class="package-list">
                        <strong>
                            <ul class="lt-al">
                                <li>Airtime</li>
                                <li>Food</li>
                                <li>Mobile Money</li>
                                <li>Accommodation Booking fee</li>
                                <li>Accommodation Payment Installation</li>
                            </ul>
                        </strong>
                    </div>
                    <div class="bottom-part">
                        <h1>UGX 250,000</h1>
                        <a class="btn btn-lg btn-outline-warning text-uppercase mt-30" href="/login/">REQUEST TOPUP</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no" style="width:60%;" src="imgs/vibn.svg" alt="">
                        <h4>Vibranium Stash</h4>
                        <strong><p class="mt-10 red">200 <b class="orange">oh</b><b>z</b></p></strong>
                    </div>
                    <div class="package-list">
                        <strong>
                            <ul class="lt-al">
                                <li>Airtime</li>
                                <li>Food</li>
                                <li>Mobile Money</li>
                                <li>Accommodation Booking fee</li>
                                <li>Accommodation Payment Installation</li>
                                <li>Accommodation Full Payment</li>
                            </ul>
                        </strong>
                    </div>
                    <div class="bottom-part">
                        <h1>UGX 1,000,000</h1>
                        <a class="btn btn-lg btn-outline-warning text-uppercase mt-30" href="/login/">
                            REQUEST TOPUP
                        </a>
                    </div>
                </div>                                                                      
            </div>
        </div>  
    </section>
    <!-- End price Area -->         

    <!-- Start recent-blog Area -->
    <!-- <section class="recent-blog-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 pb-30 header-text">
                    <h1>Latest posts from our blog</h1>
                    <p>
                        You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
                    </p>
                </div>
            </div>
            <div class="row">   
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">   
                    </div>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <img class="img-fluid" src="img/user.png" alt="">
                            <a href="#"><span>Mark Wiens</span></a>
                        </div>
                        <div class="meta">
                            13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>                          
                    <a href="#">
                        <h4>Break Through Self Doubt
                        And Fear</h4>
                    </a>
                    <p>
                        Dream interpretation has many forms; it can be done be done for the sake of fun, hobby or can be taken up as a serious career.
                    </p>
                </div>
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">   
                    </div>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <img class="img-fluid" src="img/user.png" alt="">
                            <a href="#"><span>Mark Wiens</span></a>
                        </div>
                        <div class="meta">
                            13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>                          
                    <a href="#">
                        <h4>Portable Fashion for
                        young women</h4>
                    </a>
                    <p>
                        You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving.
                    </p>
                </div>
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">   
                    </div>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <img class="img-fluid" src="img/user.png" alt="">
                            <a href="#"><span>Mark Wiens</span></a>
                        </div>
                        <div class="meta">
                            13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>                          
                    <a href="#">
                        <h4>Do Dreams Serve As
                        A Premonition</h4>
                    </a>
                    <p>
                        So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don’t want to work involved.
                    </p>
                </div>                                              
                                    
                                        
            </div>
        </div>  
    </section> -->
    <!-- end recent-blog Area -->       

    <!-- Start brands Area -->
    <section class="brands-area">
        <div class="container">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End brands Area -->
@endsection
