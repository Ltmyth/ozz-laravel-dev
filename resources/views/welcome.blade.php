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
                    <img style="width:100%;"  src="imgs/web.jpg" alt="">                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-5 banner-right">
                    <div class="row">
                        <h6>Welcome to ohzz</h6>
                        <br>
                    </div>
                    <a href="#">
                        <button class="primary-btn text-uppercase">
                            join us now
                        </button>
                    </a>  
                      
                </div>
            </div>
        </div>                  
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 home-about-left">
                    <img class="img-fluid" style="width:60%;" src="imgs/pointing-up.svg" alt="">
                </div>
                <div class="col-lg-5 col-md-6 home-about-right">
                    <h1><b>About Us</b></h1>
                    <p > 
                       <h5 class="lt-al"> We are here to connect 
                        community-based users to each other 
                        and to respective community-based services quickly and click easily.</h5>
                    </p>
                    <!-- <a href="#" class="primary-btn text-uppercase">View Full Details</a> -->
                </div>
            </div>
        </div>  
    </section>
    <!-- End home-about Area -->

    <!-- Start services Area -->
    <section class="services-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10"><b>Accessible Services</b></h1>
                        <h4 class="lt-al">
                            Top up your wallet stash accordingly to get the following life pack at your finger tips.
                        </h4>
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
                        <span class="lnr lnr-tablet"></span>
                        <a href="#"><h4>Airtime</h4></a>
                        <strong>
                            <p class="lt-al">
                               With internet connectivity. <strong>buy</strong> airtime from <strong>anywhere</strong> you are <strong>24/7</strong> for your mobile phone number , a friend's number or  a list of acquaintances and associates on <big class="black">MTN, AIRTEL and AFRICELL.</big> <br>
                               This is currently applicable in Uganda alone.
                            </p>
                        </strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="package-no  lnr lnr-briefcase"></span>
                        <a href="#"><h4>Payments</h4></a>
                        <strong>
                            <p class="lt-al">
                                Make payments from your ohzz wallet stash to another user's wallet or list of users' wallets.
                                <!-- You can also liquidate or cashout ohzz from your wallet stash into a mobile money account or list of accounts. -->
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
                                Using your user account and <strong>encrypted</strong> password,track your transactions from the distributed ohzz <strong class="red">transactions ledger</strong> which is a portal displaying all <big class='orange'>ohzz</big> transactions.
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
        <div class="container">
            <div class="row d-flex justify-content-center">
                
                <div class="col-lg-12">
                    <h1 class="mb-10"><b>How it works</b></h1>
                    <div class="row">
                        <div class="col-lg-3 b blue-bg">
                            <img class="package-no pt-20 white-bg br-10" style="width:50px;" src="imgs/pointing-up.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Register</strong></h3>
                            <hr>
                            <strong><p class="lt-al">Ohzz has the following sign up requirements;</p></strong>
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
                        <div class="col-lg-3 b blue-bg">
                            <img class="package-no pt-20 white-bg br-10" style="width:50px;" src="imgs/hand.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Setup</strong></h3>
                            <hr>
                            <strong><p class="lt-al">Complete your user profile by adding your;</p></strong>
                            <hr>
                            <strong>
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>First and last names</li>
                                    <li>Active mobile phone number</li>
                                    <li>Security question</li>
                                </ul>
                            </strong>
                            <hr>
                        </div>
                        <div class="col-lg-3 b blue-bg">
                            <img class="package-no pt-20 white-bg br-10" style="width:50px;" src="imgs/three.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Topup stash</strong></h3>
                            <hr>
                            <strong><p>Navigate to your wallet and choose a stash to topup from the following;</p></strong>
                            <hr>
                            <strong>
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>Bronze Stash</li>
                                    <li>Silver Stash</li>
                                    <li>Golden Stash</li>
                                    <li>Vibranium Stash</li>
                                </ul>
                            </strong>
                            <hr>
                        </div>
                        <div class="col-lg-3 b blue-bg">
                            <img class="package-no pt-20 white-bg br-10" style="width:50px;" src="imgs/cart.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Use ohzz</strong></h3>
                            <hr>
                            <strong>
                                <p class="lt-al">Search, identify and secure the following packs using your ohzz stash;</p>
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
    <section class="price-area section-gap">
        <div  class="container">
            <div class="row d-flex justify-content-center">
                <div id="pricing" class="menu-content pb-70 col-lg-8">
                    <button class="btn btn-lg btn-outline-danger">OHZZ PRICING</button>
                    <div class="title text-center">
                        <h1><b>Stash Value and Cost</b></h1>
                        <div class="container blue-bg br-10">
                            <hr>
                                <h5 class="white">0.1 <big class="orange">ohzz</big> <big><strong>=</strong></big> <big class="orange">UGX</big> 500.</h5><br>
                                <h5 class="white">1 <big class="orange">ohzz</big><big><strong>=</strong></big> <big class="orange">UGX</big> 5000.</h5>
                            <hr>
                            <strong><u><h4 class="red">Disclaimer!</h4></u></strong>
                            <h5>
                                <p class="white pb-30 lt-al">
                                    The <big>minimum</big> top up a user can request for is <strong>1</strong> <strong class="orange">ohzz</strong> and <big>maximum</big> top up
                                    </big> request limit is <strong>200</strong> <strong class="orange">ohzz</strong>.However there are no limits on stash or wallet balances.
                                </p>
                            </h5>
                        </div> 
                    </div>
                    <br>
                    <div class="title text-center">
                        <h1 class="mb-10"><b>Choose Your Stash</b></h1>
                    </div>
                </div>
            </div>                  
            <div class="row">
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no" style="width:60%;" src="imgs/bronze.svg" alt="">
                        <h4>Bronze Stash</h4>
                        <p class="mt-10 red">1 ohzz</p>
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
                        <strong><p class="mt-10 red">10 ohzz</p></strong>
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
                        <strong><p class="mt-10 red">50 ohzz</p></strong>
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
                        <strong><p class="mt-10 red">200 ohzz</p></strong>
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
