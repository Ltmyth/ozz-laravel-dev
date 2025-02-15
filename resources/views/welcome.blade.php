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
                <div  class="col-lg-6 col-md-6 banner-left">  
                    <div class="row pb-5 pt-10">
                        <div class="conatainer mt-10">
                            <img id="welcome_img"  class="w-80 br-10"  src="/imgs/tree.png" alt="">
                        </div>
                    </div>
                </div>
                <div  class="col-lg-6 col-md-6 banner-right">
                      
                       <h1><b>Welcome,</h1><h2>to the </b><b class="orange">oh</b><b>z</b>.</h2>
                       
                        <h3><b>An <b class="orange">oh</b><b>z</b> one stop spot.</b></h3>

                        <br>
                        <a href="/register">
                            <button class="btn btn-lg btn-outline-warning text-uppercase blue-bg">
                                join us now
                            </button>
                        </a>
                </div>
            </div>
        </div>  
        <br><br>                
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section id="about" class="home-about-area">
        <div class="container">
            <div  class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 home-about-left br-10">
                    <img class="w-100 br-10"  src="/imgs/info.png" alt="">
                    <!-- <h1><b>About the <b class="orange">oh</b><b>z</b></b></h1> -->
                    <!-- by Latim Mark -->
                    <h4 class="lt-al">
                        <strong class="blue">ABOUT US</strong>
                    </h4>
                    <h4 class="black">
                        <p class="lt-al">
                            The <strong><b class="orange">oh</b><b>z</b></strong> is a low cost <strong>reparation</strong> application currently web based, <br> built for community centric living, back-boned by a crypto currency known as the <b class="orange">oh</b><b>z</b> ,<br> created and intended for <strong>individuals</strong> and <strong>service providers</strong> living or commuting within the respectively <strong>featured</strong> communities.
                        </p>
                    </h4>

                    <h4>                        
                        <p class="lt-al" >This enables a more <strong>comfortable, enlightened</strong> and <strong>community centered </strong> stay for both individuals and service providers within the respective featured communities.</p>                        
                    </h4>

                    <h4 class="lt-al"><b style="color:red;">MISSION</b></h4>
                    <p > 
                       <h4 class="lt-al blue"> To connect 
                        community-based users with each other 
                        and to respective community-based services <strong>quickly</strong> and <strong>click easily</strong>.</h4>
                    </p>

                    <br>
                    <a href="#contact_us">
                       <button id="at_btn" class="btn btn-md btn-outline-warning blue-bg  col-sm-4">
                            <span class="lnr lnr-phone white"></span>
                            <strong class="white">Contact Us</strong>
                       </button>
                    </a>
                </div>
                <div id="focus" class="col-lg-5 col-md-6 home-about-right pt-10">
                    <img id="hero_img"  src="/imgs/ozz-app.png" alt="">
                    <br>
                    <img class="img-fluid w-40" src="imgs/pointing-up.svg" alt="">
                    <br><br>
                    <div class="row">
                        <img class="br-10" src="/imgs/connected.png" alt="">
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <!-- End home-about Area -->

    <!-- Start services Area -->
    <section  class="services-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <hr>
                        <img class="br-10 w-80" src="/imgs/community.png" alt="">
                        <hr> 
                    </div>
                </div>    
                <div class="col-lg-1"></div>            
                <div id="services"  class="menu-content col-lg-5">
                    <div class="title text-center">
                        <h1 class="mb-10 lt-al text-uppercase"><strong>Featured communities</strong></h1>
                        <hr>
                        <h4 class="lt-al">
                            <p class="black">
                                Services are meant for good intentional use and to be accessible click easily over the internet within the featured communities which currently include;
                            </p>
                        </h4>
                        <ul style="list-style: circle; color:red;" class="lt-al fz-25">
                            <li>
                                <h4 class="black">Mukono (U)</h4>
                            </li>
                            <li>
                                <h5 class="blue"> <i>More communities to be featured.</i></h5>
                            </li>
                        </ul>
                        <br>                        
                        <h3 class="red ct-al"><u>NOTE</u></h3>
                        <h4 class="lt-al">
                            MTN, AIRTEL, AFRICELL and UTL airtime is internet accessible anywhere within Uganda.
                        </h4>
                        <br>
                        <hr>                        
                    </div>
                </div>
            </div>                      
            <div  class="row">
                <div class="col-lg-11">
                    <h1 class="mb-10 ct-al"><strong>SERVICES</strong></h1>
                    <p>
                        <h4 class="ct-al black"> Top up your wallet stash accordingly to get the following life pack at your finger tips.</h4>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="row">
                            <div class="conatainer">
                                <img class="br-10 w-50" src="/imgs/people.png" alt="">
                            </div>
                        </div>

                        <a href="/login">
                            <h4 class="ct-al">
                                <strong>Communication</strong>
                            </h4>
                        </a>

                        <h4 class="lt-al black">
                            <p>
                                Connect and communicate with people in your community, district or neighborhood that are <strong>on</strong> the platform at no cost, or use your <big class='orange'><b class="orange">oh</b><b>z</b></big>  stash to send sms directly to a single or multiple user's mobile telephone number(s)
                                at as low as <b class="red">0.01</b> <big class='orange'><b class="orange">oh</b><b>z</b></big> each.
                            </p>

                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="row">
                            <div class="container">
                                <img class="w-30" src="/imgs/phone.png" alt="">
                            </div>
                        </div>

                        <a href="/login">
                            <h4 class="ct-al">
                                <strong>Airtime</strong>
                            </h4>
                        </a>
                        
                        <h4 class="lt-al black">
                            <p> 
                                With internet connectivity. <strong>buy</strong> airtime from <strong>anywhere</strong> you are <strong>24 hours a day everyday</strong> for your mobile phone number , a friend's number or  a list of acquaintances and associates on <big class="black">MTN, AIRTEL and AFRICELL.</big> <br>
                                This is currently applicable in Uganda alone.
                            </p>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="row">
                            <div class="conatainer">
                                <img class="br-10 w-40" src="/imgs/food.png" alt="">
                            </div>
                        </div>

                        <a href="/login">
                            <h4 class="ct-al">
                                <strong>Food</strong>
                            </h4>
                        </a>

                        <h4 class="lt-al black">
                            <p >
                               Search,  view and procure from community based food service providers and their various menus.
                            </p>
                        </h4>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="row">
                            <div class="container">
                                <img class="br-10 w-30" src="/imgs/room.png" alt="">
                            </div>
                        </div> 

                        <a href="/login">
                            <h4 class="ct-al">
                                <strong>Accommodation</strong>
                            </h4>
                        </a>

                        <h4 class="lt-al black">
                            <p>
                                Find and secure accommodation within a community or destination of interest.
                                Chose from a live listing of ;
                            </p>
                            <ul style="list-style-type:square;" >
                                <li>Hotels</li>
                                <li>Hostels</li>
                                <li>Appartments</li>
                                <li>Lodgings</li>
                                <li>Motels</li>
                            </ul>
                        </h4>                                            
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="row">
                            <div class="conatainer">
                                <img class="br-10 w-40" src="/imgs/pay.png" alt="">
                            </div>
                        </div>

                        <a href="/login">
                            <h4 class="ct-al">
                                <strong>Payments</strong>
                            </h4>
                        </a>
                        
                        <h4 class="lt-al black">
                            <p>
                                Make payments from your <b class="orange">oh</b><b>z</b> wallet stash to another user's wallet or list of users' wallets <b>free</b> of charge.
                            </p>

                            <p>
                                You can also liquidate or cashout <b class="orange">oh</b><b>z</b> from your wallet stash into a mobile money account or list of accounts at a low cost used to cover infrastructure and transaction costs.
                            </p>
                        </h4>                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="row">
                            <div class="conatiner">
                                <img class="br-10 w-30" src="/imgs/shield.png" alt="">
                            </div>
                        </div>

                        <a href="/login">
                            <h4 class="ct-al">
                                <strong>Secure and transparent transactions</strong>
                            </h4>
                        </a>
                        
                        <h4 class="lt-al black">
                            <p class="lt-al">
                                Using your user account and <strong>encrypted</strong> password,track your transactions from the distributed <b class="orange">oh</b><b>z</b> <strong class="red"> transactions ledger</strong> which is an encrypted live portal recording and displaying all  <big class='orange'><b class="orange">oh</b><b>z</b></big> stash or wallet transactions.
                            </p>
                        </h4>                        
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

                    <img class="br-10 w-40" src="/imgs/cog.png" alt=""> 
                    <h1><strong>HOW IT WORKS</strong></h1>
                    
                    <div class="row">
                        <div class="col-lg-3 b blue-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/pointing-up.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Register</strong></h3>
                            <hr>
                            <h4 class="white"><p class="lt-al"><b class="orange">oh</b><b class="green">z</b> has the following sign up requirements;</p></h4>
                            <hr>
                            <h4 class="white">
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>A Valid email</li>
                                    <li>A Unique username</li>
                                    <li>A memorable strong password</li>
                                </ul>
                            </h4>
                            <hr>
                        </div>
                        <div class="col-lg-3  b blue-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/hand.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Setup</strong></h3>
                            <hr>
                            <h4 class="white"><p class="lt-al">Complete your user profile by adding your;</p></h4>
                            <hr>
                            <h4 class="white">
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>First and last names</li>
                                    <li>Active mobile money or phone number</li>
                                    <li>Security code</li>
                                </ul>
                            </h4>
                            <hr>
                        </div>
                        <div class="col-lg-3  b blue-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/three.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Topup stash</strong></h3>
                            <hr>
                            <h4 class="white"><p class="lt-al">Navigate to your stash and at the bottom of the portal, chose a package to topup from the following list;</p></h4>
                            <hr>
                            <a href="#stash" class="white">
                            <ul style="list-style-type:square;" class="lt-al">
                                <li>Bronze Stash</li>
                                <li>Silver Stash</li>
                                <li>Golden Stash</li>
                                <li>Vibranium Stash</li>
                            </ul>
                            </a>
                            <hr>
                        </div>
                        <div class="col-lg-3 b blue-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/cart.svg" alt="">
                            <hr>
                            <h3 class="white"><strong>Use your <b class="orange">oh</b><b class="green">z</b></strong></h3>
                            <hr>
                            <h4 class="white">
                                <p class="lt-al">Search, identify and secure the following packs using your <b class="orange">oh</b><b class="green">z</b> stash;</p>
                                <hr>
                                <ul style="list-style-type:square;" class="lt-al">    
                                    <li>Airtime</li>
                                    <li>Food</li>
                                    <li>Accommodation</li>
                                </ul>
                                <hr>
                            </h4>
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
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <hr class="container col-lg-4">
                            <button class="btn btn-lg btn-outline-danger"><b class="orange">OH</b><b>Z</b> PRICING</button>
                            <hr class="container col-lg-4">
                            <h1 class="black"><strong>STASH VALUE AND COST</strong></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <br><br><br>
                            <img class="br-10 w-60" src="/imgs/ozz-app.png" alt="">
                        </div>

                        <div class="col-lg-8">
                            <div class="container blue-bg br-10">
                                <hr>
                                    <h3 class="white">0.1 <big class="orange"><b class="orange">oh</b><b class="green">z</b></big> <big><strong> = </strong></big> <big class="orange">UGX</big> 500.</h3><br>
                                    <h3 class="white">1 <big class="orange"><b class="orange">oh</b><b class="green">z</b></big><big><strong> = </strong></big> <big class="orange">UGX</big> 5000.</h3>
                                <hr>
                                <strong><u><h3 class="red">Disclaimer!</h3></u></strong>
                                <h4>
                                    <p class="white pb-30 lt-al">
                                        At any given time, the <big>minimum</big> top up a user can request for is <strong>1</strong> <strong class="orange"><b class="orange">oh</b><b class="green">z</b></strong> and <big>maximum</big> top up
                                        </big> request limit is <strong>200</strong> <strong class="orange"><b class="orange">oh</b><b class="green">z</b></strong>.However there are no limits on stash or wallet balances.
                                    </p>
                                </h4>
                            </div> 
                        </div>

                        <div class="col-lg-2">
                            <br><br><br>
                            <img class="br-10 w-70" style="transform: rotate(250deg);" src="/imgs/tag.png" alt="">
                        </div>
                    </div>

                    <div id="packs" class="row col-lg-11">
                        <h2 class="lt-al black">
                            Kindly choose your suitable <b class="orange">oh</b><b>z</b> stash from the available packages below ;
                        </h2>
                    </div>

                </div>
            </div>                  
            <div id="stash" class="row">
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no w-60" style="transform: scaleY(-1);" src="imgs/bronze.svg" alt="">
                        <h3 class="blue lt-al">Bronze Stash</h3>
                        <h3 class="lt-al" ><p class="mt-10 red">1 <b class="orange">oh</b><b>z</b></p></h3>
                    </div>
                    <div class="package-list">
                        <strong>
                            <ul>
                                <li><h4>Airtime</h4></li>
                                <li><h4>Food</h4></li>
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
                        <img class="package-no" style="width:60%;transform: scaleY(-1);" src="imgs/silver.svg" alt="">
                        <h3 class="lt-al blue">Silver Stash</h4>
                        <h3 class="lt-al"><p class="mt-10 red">10 <b class="orange">oh</b><b>z</b></p></h3>
                    </div>
                    <div class="package-list">
                        <strong>    
                            <ul class="lt-al">
                                <li><h4>Airtime</h4></li>
                                <li><h4>Food</h4></li>
                                <li><h4>Mobile Money</h4></li>
                                <li><h4>Accommodation Booking fee</h4></li>
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
                        <img class="package-no" style="width:60%;transform: scaleY(-1);" src="imgs/gold.svg" alt="">
                        <h3 class="lt-al blue">Golden Stash</h3>
                        <h3 class="lt-al"><p class="mt-10 red">50 <b class="orange">oh</b><b>z</b></p></h3>
                    </div>
                    <div class="package-list">
                        <strong>
                            <ul class="lt-al">
                                <li><h4>Airtime</h4></li>
                                <li><h4>Food</h4></li>
                                <li><h4>Mobile Money</h4></li>
                                <li><h4>Accommodation Booking fee</h4></li>
                                <li><h4>Accommodation Payment Installation</h4></li>
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
                        <h3 class="lt-al blue">Vibranium Stash</h3>
                        <h3 class="lt-al"><p class="mt-10 red">200 <b class="orange">oh</b><b>z</b></p></h3>
                    </div>
                    <div class="package-list blu">
                        <strong>
                            <ul class="lt-al">
                                <li><h4>Airtime</h4></li>
                                <li><h4>Food</h4></li>
                                <li><h4>Mobile Money</h4></li>
                                <li><h4>Accommodation Booking fee</h4></li>
                                <li><h4>Accommodation Payment Installation</h4></li>
                                <li><h4>Accommodation Full Payment</h4></li>
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

      

    <!-- Start brands Area -->
    <div class="container">
        <h1><strong>Our Partners</strong></h1>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <br>
                <a href="#"><img class="w-70" src="imgs/africastalking.png" alt=""></a>
                <br>
            </div>

            <div class="col-sm">
                <a href="#"><img  class="w-40" src="imgs/logo.png" alt=""></a>  
                <br>
                <!-- <a href="#"><img src="imgs/mambo.png" alt=""></a> -->
            </div>

            <div class="col-sm">
                <br>
                <a href="#"><img  class="w-40" src="imgs/mambo.png" alt=""></a> 
                <br>
            </div>
        </div>        
        <br><br>
    </div>
    <!-- End brands Area -->
@endsection
