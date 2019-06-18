<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ozz.com</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/bootstrap/dist/css/bootstrap.min.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/mine.css') }}">

        <script type="text/javascript">
            function side_toggle(){
                if(document.getElementById('sidebar').style.display == 'inline-block'){ 
                    var x = document.getElementById('sidebar');
                    x.setAttribute("style", "display:none");

                    var y = document.getElementById('colapse-2');
                    y.setAttribute("style", "display:none");

                }else{
                    var x = document.getElementById('sidebar');
                    x.setAttribute("style", "display:inline-block"); 

                    var y = document.getElementById('colapse-2');
                    y.setAttribute("style", "display:inline-block");
                }   
            }
        </script>

        <div  class="row fuller blue col-lg-12">
            <div class="col-sm-4">
                <a href="/admin/">
                    <img class="white-bg" style="width:12%;border-radius:50%;margin:3% 15% 0% 10%;" src="{{ asset('/imgs/ozz-app.png') }}" alt="Avator">
                </a>
                <a  id="right-topbar" href="#">
                    <button id="messages_btn" class="btn btn-md btn-default c_thru white">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <strong>  
                            Messages&nbsp;<big><b style="color:#8e44ad;">0</b></big>
                        </strong>
                    </button>
                </a>
            </div>

            <div class="col-sm-4">
                <form id="sach_form" class="top_space m-top" action="#">
                    <input style="color:white;" type="text" class="c_thru" placeholder="Search">
                    <button class="c_thru btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class='glyphicon glyphicon-search'></i>
                    </button>
                    <br>
                </form>
                <br>
            </div>

            <div id="right-topbar" class="col-sm-4">
                <a class="nav-link" href="#">
                    
                    <button id="wallet_btn" class="btn btn-md btn-default c_thru white">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        <strong>  
                            Wallet
                        </strong>
                    </button>
                </a>

                <a class="nav-link" href="#">
                    
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
            </div>            
        </div>
    
    </head>    
    <!-- background:#dff9fb; -->
    <div style="color:#130f40;"   class="row center">
        @if( session()->has('message') )
            <div style="margin-top:7%;margin-left:10%;" class="right-space alert alert-success" role="alert">
                {{ session()->get('message') }}
                <strong>Successfully</strong>
                <br>
            </div>
        @endif

        @if( session()->has('warning') )
            <div style="margin-top:7%;margin-left:10%;" class="right-space alert alert-danger" role="alert">
                <strong>
                    {{ session()->get('warning') }}
                </strong>
                <br>
            </div>
        @endif
    </div>     

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar col-md-6 well theme left-mg" style="display:inline-block;">
        <!-- <div class="col-md-2">
            <a href="/home">
                <button id="home_btn" class="btn btn-md btn-default">
                    <i class="glyphicon glyphicon-house"></i>
                    <strong>  
                        People
                    </strong>
                </button>
            </a>    
        </div> -->

       
        <a href="/accoms_add/">
            <button id="accoms_btn" class="btn btn-md btn-default">
                <strong>  
                    Accommodation
                </strong>
            </button>
        </a>
    
        <a href="/add_food/">
            <button id="food_btn" class="btn btn-md btn-default">
               <strong>Food</strong>
            </button>
        </a>


        <a href="/at/">
           <button id="at_btn" class="btn btn-md btn-default">
               <strong>Airtime</strong>
           </button>
        </a>
        
        <!-- <div class="col-md-2">
            <a href="/transport/">
                <button id="transport_btn" class="btn btn-md btn-default">
                   <strong>Transport</strong>
                </button>
            </a> 
        </div> -->

        <!-- <div class="col-md-2">
            <a href="/cleaning/">
                <button id="cleaning_btn" class="btn btn-md btn-default">
                   <strong>Cleaning</strong>
                </button>
            </a>
        </div> 
        -->
    </div> 

    <div class="row col-md-12">
        @yield('content')  
        <br><br>  
    </div> 

    <div style="bottom:0;position: absolute;" class='row fuller blue col-lg-12' >
        <div class='col-sm-4'>
            <h5>
                <b class="foot">
                    Terms & Conditions
                </b>
            </h5>
        </div>
        <div class='col-sm-4'>
            <h5>
                <b class="foot">Privacy Policy
                </b>
            </h5>
        </div>
        <div class='col-sm-4'>
            <h5>
                <b>&copy; Copyright 2019</b>
                All rights reserved
            </h5>
        </div>
    </div> 
</html>
