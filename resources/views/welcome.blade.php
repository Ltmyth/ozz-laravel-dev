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
                            join now
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
                    <img class="img-fluid" src="img/about-img.png" alt="">
                </div>
                <div class="col-lg-5 col-md-6 home-about-right">
                    <h1><b>About Us</b></h1>
                    <p > 
                       <h5 class="lt-al"> Here to connect 
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
                        <p class="lt-al">
                            Connect with people in your community or neighborhood at no cost.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-apartment"></span>
                        <a href="#"><h4>Accommodation</h4></a>
                        <p class="lt-al">
                            Find and secure accommodation within a community or destination of interest.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-dinner"></span>
                        <a href="#"><h4>Food</h4></a>
                        <p class="lt-al">
                            Search,  view and procure from community based food service providers and their various menus. 
                        </p>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-tablet"></span>
                        <a href="#"><h4>Airtime</h4></a>
                        <p class="lt-al">
                           Buy airtime for your mobile phone number , a friend's number or  a list of acquaintances and associates.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-briefcase"></span>
                        <a href="#"><h4>Payments</h4></a>
                        <p class="lt-al">
                            Make payments from your ohzz wallet stash to another user's wallet or list of users' wallets.
                            You can also liquidate or cashout ohzz from your wallet stash into a mobile money account or list of accounts.
                        </p>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-plus-circle"></span>
                        <a href="#"><h4>And more</h4></a>
                        <p class="lt-al">
                            We are working towards adding more services to the platform.
                        </p>
                    </div>              
                </div>   -->                                                    
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
                            <hr>
                            <h3 class="white"><strong>Register</strong></h3>
                            <hr>
                            <p class="lt-al">Ohzz has the following sign up requirements;</p>
                            <ul style="list-style-type:square;" class="lt-al">
                                <li>A Valid email</li>
                                <li>A Unique username</li>
                                <li>A memorable strong password</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 b blue-bg">
                            <hr>
                            <h3 class="white"><strong>Setup</strong></h3>
                            <hr>
                            <p class="lt-al">Complete your user profile by adding your;</p>
                            <ul style="list-style-type:square;" class="lt-al">
                                <li>First and last names</li>
                                <li>Active mobile phone number</li>
                                <li>Security question</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 b blue-bg">
                            <hr>
                            <h3 class="white"><strong>Topup stash</strong></h3>
                            <hr>
                            <p>Navigate to your wallet and choose a stash to topup from the following;</p>
                            <ul style="list-style-type:square;" class="lt-al">
                                <li>Bronze Stash</li>
                                <li>Silver Stash</li>
                                <li>Golden Stash</li>
                                <li>Vibranium Stash</li>
                            </ul>
                            <br><br>
                        </div>
                        <div class="col-lg-3 b blue-bg">
                            <hr>
                            <h3 class="white"><strong>Use ohzz</strong></h3>
                            <hr>
                            <p class="lt-al">Search, identify and secure the following packs using your ohzz stash;</p>
                            <ul style="list-style-type:square;" class="lt-al">    
                                <li>Airtime</li>
                                <li>Food</li>
                                <li>Accommodation</li>
                            </ul>
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
                    <div class="title text-center">
                        <h1><b>Fixed Ohzz Stash Value and Cost</b></h1>
                        <hr>
                            <h5>0.1 <big class="red">ohzz</big> = UGX 500.</h5><br>
                            <h5>1 <big class="red">ohzz</big>= UGX 5000.</h5>
                        <hr>
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
                        <h1 class="package-no">04</h1>
                        <h4>Bronze Stash</h4>
                        <p class="mt-10 red">1 ohzz</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Airtime</li>
                            <li>Food</li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>UGX 5,000</h1>
                        <a class="price-btn text-uppercase" href="/login/">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <h1 class="package-no">03</h1>
                        <h4>Silver Stash</h4>
                        <p class="mt-10 red">10 ohzz</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Airtime</li>
                            <li>Food</li>
                            <li>Mobile Money</li>
                            <li>Accommodation Booking fee</li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>UGX 50,000</h1>
                        <a class="price-btn text-uppercase" href="/login/">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <h1 class="package-no">02</h1>
                        <h4>Golden Stash</h4>
                        <p class="mt-10 red">50 ohzz</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Airtime</li>
                            <li>Food</li>
                            <li>Mobile Money</li>
                            <li>Accommodation Booking fee</li>
                            <li>Accommodation Payment Installation</li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>UGX 250,000</h1>
                        <a class="price-btn text-uppercase" href="/login/">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <h1 class="package-no">01</h1>
                        <h4>Vibranium Stash</h4>
                        <p class="mt-10 red">200 ohzz</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Airtime</li>
                            <li>Food</li>
                            <li>Mobile Money</li>
                            <li>Accommodation Booking fee</li>
                            <li>Accommodation Payment Installation</li>
                            <li>Accommodation Full Payment</li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>UGX 1,000,000</h1>
                        <a class="price-btn text-uppercase" href="/login/">Buy Now</a>
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
