<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ozz.com</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/mine.css') }}">
    </head> 
    
    <div id="navbar" class="container col-lg-12">
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('home') }}">
                    <img style="width:15%;border-radius:50%;margin:1% 15% 0% 10%;" src="{{ asset('/imgs/ozz-app.png') }}" >
                </a>
                @auth
                <a  id="right-topbar" href="/messages">
                    <button id="messages_btn" class="btn btn-md btn-default c_thru white">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <strong>  
                            Messages&nbsp;<big><b style="color:#8e44ad;">0</b></big>
                        </strong>
                    </button>
                </a>
                @endauth
            </div>

            <div class="col-sm-4">
                <form id="sach_form" action="#">
                    <input style="color:white;" type="text" class="c_thru" placeholder="Search">
                    <button class="c_thru btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class='glyphicon glyphicon-search'></i>
                    </button>
                </form>
            </div>

            @auth
            <div id="right-topbar" class="col-sm-4">
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
            </div>
            @endauth

            @guest
                <div id="right-topbar" class="col-sm-4">
                    <a class="nav-link" href="{{ route('register') }}">
                        <button id="register-btn"  class="right-space btn btn-md c_thru">
                            <b>Register</b>
                        </button>
                    </a>
                    
                    <a style="color:white;" id="login-btn" class="nav-link" href="{{ route('login') }}">
                        <button id="login-btn" class="left-space btn btn-md c_thru">
                            <b>Login</b>
                        </button>
                    </a>
                </div>
            @endguest
            
            
        </div>
        
    </div>

    <div id="body" class="container col-lg-12">
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
            <div class="row">
                @include('layouts.sidenav')    
            </div>

            <div class="row">
                @yield('content')    
            </div>           
        </div>
    </div>   
    <br><br>
    <div class="row">
        <div style="bottom:0;width:100%;background:#34495e;height:80px;" class='container col-lg-12' >
            <div class='left-space row white'>
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
        </div>
    </div>
     
    
</html>
