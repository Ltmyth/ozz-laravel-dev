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
                      
                       <h2>Latim Mark's <b class="orange">oh</b><b><i>z</i></b> one stop spot.</b></h2>
                       <br>
                        <h3>A hub for quick access to community-based information and services by community-based users through theohz in both rural and urban communities in Uganda.</h3>

                        <br>
                        <a href="/register">
                            <button class="btn btn-lg btn-outline-warning text-uppercase blue-bg">
                                Register Here
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
                        <strong class="blue">ABOUT</strong>
                    </h4>
                    <h4 class="black">
                        <p class="lt-al">
                            <strong>Theohz</strong> is a social and transactional <strong>community</strong> web application,
                            built by <strong>Latim Mark</strong> and silent partners for informed <strong>low cost</strong> community centered living within <strong>featured</strong> communities.
                        </p>
                    </h4>

                    <h4 class="lt-al" >  
                        <strong class="blue">TARGET MARKET</strong>
                        <br>                      
                        <p>The<strong><b>ohz</b></strong> is intended for <strong>individuals</strong> studying, living or commuting within communities on theohz platform and <strong>service providers</strong> within the respective communties.</p>                        
                    </h4>

                    <h4 class="lt-al"><b style="color:red;">MISSION</b></h4>
                    <p > 
                       <h4 class="lt-al blue"> To connect 
                        <strong>community-based</strong> users with each other 
                        and to respective community-based services <strong>quickly</strong>, <strong>cheaply</strong> and <strong>click easily</strong>.</h4>
                    </p>

                    <br>
                    <a href="#contact_us">
                       <button id="at_btn" class="btn btn-md btn-outline-warning blue-bg  col-sm-4">
                            <span class="lnr lnr-phone white"></span>
                            <strong class="white">Contact Us</strong>
                       </button>
                    </a>
                </div>
                <div id="focus" class="col-lg-5 col-md-6 home-about-right">
                    <!-- <img id="hero_img"  src="/imgs/ozz-app.png" alt=""> -->
                    <br><!-- 
                    <img class="img-fluid w-40" src="imgs/pointing-up.svg" alt="">
                    <br><br> -->
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
                        <ul style="list-style: circle; color:red;" class="lt-al fz-30">
                            <li>
                                <strong class="blue">Mukono (U)</strong>
                            </li>
                            <br>
                            <li>
                                <strong class="blue">Kampala (U)</strong>
                            </li>
                            <br>
                            <li>
                                <h4 class="green"> <i>More communities to be featured.</i></h4>
                            </li>
                        </ul>
                        <br>                        
                        <u><h4 class="red ct-al">NOTE</h4></u>
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
                        <h4 class="ct-al black"> Have the following life pack at your finger tips.</h4>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="row">
                            <div class="conatainer">
                                <img class="br-10 w-50" src="/imgs/people.png" alt="">
                            </div>
                        </div>

                        <a href="/login" onclick="javascript:document.getElementById('preloader').style.display='block';">
                            <h4 class="ct-al">
                                <strong>Information & Communication</strong>
                            </h4>
                        </a>

                        <h4 class="lt-al black">
                            <p>
                                Get interesting information , connect and communicate with people in your community, district or neighborhood that are <strong>on</strong> the platform at no cost, or use your <big>ohz</big>  stash to send sms directly to a single or multiple user's mobile telephone number(s)
                                at as low as 50 </b> <big>ohz</big> each.
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
                                <strong>Discounted Airtime</strong>
                            </h4>
                        </a>
                        
                        <h4 class="lt-al black">
                            <p> 
                                With internet connectivity and <b>theohz</b> stash, <strong>buy</strong> airtime at a <b class="black">2%</b> discount from <strong>anywhere</strong> you are <strong>24 hours a day everyday</strong> for your mobile phone number , a friend's number or  a list of acquaintances and associates on <big class="black">MTN, AIRTEL and AFRICELL.</big> <br>
                                This is currently applicable in Uganda alone.
                            </p>
                        </h4>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
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
                </div> -->
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
                                Using theohz  find and secure accommodation within a community or destination of interest.
                                Chose from a live listing of ;
                            </p>
                            <ul style="list-style-type:square;" >
                                <li>Hostels</li>
                                <li>Appartments</li>
                                <!-- <li>Rentals</li> -->
                                <!-- <li>Hotels</li>
 -->                            </ul>
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


                        <a href="/login" onclick="javascript:document.getElementById('preloader').style.display='block';">
                            <h4 class="ct-al">
                                <strong>Payments</strong>
                            </h4>
                        </a>
                        
                        <h4 class="lt-al black">
                            <p>
                                Make payments for theohz services directly from your  wallet/stash to another user's wallet <b class="black">free</b> of charge.
                            </p>

                            <p>
                                You may also liquidate or cashout ohz from your wallet stash into a mobile money account or list of accounts at a low service charge on each withdraw transaction that is used to cover infrastructure and transaction costs.
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
                                With your user account and <strong>encrypted</strong> password,track your transactions from the distributed ohz <strong class="red"> transactions ledger</strong> which is an encrypted live portal recording and displaying all recorded ohz transactions.
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
                        <div class="col-lg-3 b white-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/pointing-up.svg" alt="">
                            <hr>
                            <h4 class="blue"><strong>Register</strong></h4>
                            <hr>
                            <h4 class="black"><p class="lt-al">Theohz has the following sign up requirements;</p></h4>
                            <hr>
                            <h4 class="black">
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>A Valid email</li>
                                    <li>A Unique username</li>
                                    <li>A strong memorable password</li>
                                </ul>
                            </h4>
                            <hr>
                        </div>
                        <div class="col-lg-3  b white-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/hand.svg" alt="">
                            <hr>
                            <h4 class="blue"><strong>Setup</strong></h4>
                            <hr>
                            <h4 class="black"><p class="lt-al">Complete your user profile by adding your;</p></h4>
                            <hr>
                            <h4 class="black">
                                <ul style="list-style-type:square;" class="lt-al">
                                    <li>First and last names</li>
                                    <li>Active mobile money or phone number</li>
                                    <li>Security code</li>
                                </ul>
                            </h4>
                            <hr>
                        </div>
                        <div class="col-lg-3  b white-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/three.svg" alt="">
                            <hr>
                            <h4 class="blue"><strong>Topup stash</strong></h4>
                            <hr>
                            <h4 class="black"><p class="lt-al">Navigate to your stash and at the bottom of the portal, chose a package to topup from the following list;</p></h4>
                            <hr>
                            <a href="#stash" class="black">
                                <h4>
                                    <ul style="list-style-type:square;" class="lt-al">
                                        <li>Bronze Stash</li>
                                        <li>Silver Stash</li>
                                        <li>Golden Stash</li>
                                        <li>Vibranium Stash</li>
                                    </ul>
                                </h4>
                            </a>
                            <hr>
                        </div>
                        <div class="col-lg-3 b white-bg">
                            <img class="package-no pt-20 " style="width:50px;" src="imgs/cart.svg" alt="">
                            <hr>
                            <h4 class="blue"><strong>Use your ohz</strong></h4>
                            <hr>
                            <h4 class="black">
                                <p class="lt-al">Search, identify and secure the following packs using theohz</p>
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
                            <button class="btn btn-lg btn-outline-dark" disabled><b class="orange">OH</b><b>Z</b> PRICING</button>
                            <hr class="container col-lg-4">
                            <h1 class="black"><strong>STASH VALUE AND COST</strong></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <br><br><br>
                            <img class="br-10 w-70" style="transform: rotate(30deg);" src="/imgs/tag.png" alt="">
                        </div>

                        <div class="col-lg-8">
                            <div class="container white-bg br-10">
                                <hr>
                                    <h4 class="black">1 <big class="orange"><b class="orange">oh</b><b>z</b></big> <big><strong> = </strong></big> <big class="orange">1 UGX</big> .</h4><br>
                                    <h4 class="black">5000 <big class="orange"><b class="orange">oh</b><b>z</b></big><big><strong> = </strong></big> <big class="orange">UGX</big> 5000.</h4>
                                <hr>
                                <strong><u><h4 class="red">Disclaimer!</h4></u></strong>
                                <h4>
                                    <p class="black pb-30 lt-al">
                                        There are no limits on stash or wallet balances.
                                    </p>
                                </h4>
                            </div> 
                        </div>

                        <div class="col-lg-2">
                            <br><br><br>
                            <img class="br-10 w-70" style="transform: rotate(30deg);" src="/imgs/tag.png" alt="">
                        </div>
                    </div>

                    <div id="packs" class="row col-lg-11">
                        <h4 class="lt-al black">
                            Kindly choose your suitable ohz stash from the available packages below ;
                        </h4>
                    </div>

                </div>
            </div>                  
            <div id="stash" class="row">
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no w-60" style="transform: scaleY(-1);" src="imgs/bronze.svg" alt="">
                        <h4 class="blue lt-al">Bronze Stash</h4>
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
                        <h1>UGX 500 to UGX 5,000</h1>
                        <a class="btn btn-lg btn-outline-warning text-uppercase mt-30" onclick="javascript:document.getElementById('preloader').style.display='block';" href="/login/">REQUEST TOPUP</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no" style="width:60%;transform: scaleY(-1);" src="imgs/silver.svg" alt="">
                        <h4 class="lt-al blue">Silver Stash</h4>
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
                        <h1>UGX 6,000 to UGX 50,000</h1>
                        <a class="btn btn-lg btn-outline-warning text-uppercase mt-30" onclick="javascript:document.getElementById('preloader').style.display='block';" href="/login/">REQUEST TOPUP</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no" style="width:60%;transform: scaleY(-1);" src="imgs/gold.svg" alt="">
                        <h4 class="lt-al blue">Golden Stash</h4>
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
                        <h1>UGX 60,000 to UGX 250,000</h1>
                        <a class="btn btn-lg btn-outline-warning text-uppercase mt-30" href="/login/">REQUEST TOPUP</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <img class="package-no" style="width:60%;" src="imgs/vibn.svg" alt="">
                        <h4 class="lt-al blue">Vibranium Stash</h4>
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
                        <h1>UGX 250,000 to UGX 1,000,000</h1>
                        <a class="btn btn-lg btn-outline-warning text-uppercase mt-30" onclick="javascript:document.getElementById('preloader').style.display='block';" href="/login/">
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
                <a href="javascript:void(0)" onclick="window.open('https://www.africastalking.com','_blank');"><img class="w-70" src="imgs/africastalking.png" alt=""></a>
                <br>
            </div>

            <div class="col-sm">
                <img  class="w-40" src="imgs/logo.png" alt=""> 
                <br>
            </div>

            <div class="col-sm">
                <br>
                <img  class="w-40" src="imgs/mambo.png" alt=""> 
                <br>
            </div>
        </div>        
        <br><br>
    </div>
    <!-- End brands Area -->
@endsection