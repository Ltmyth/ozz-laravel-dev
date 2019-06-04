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
        <style>
            
            
            #sach_form{
                border:1;
                border-radius:50px;
                background-color:#6a89cc;
                text-align:center;
            }

            .top_space{
                margin-top:5%;
            } 

           

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow-x:hidden;
            }

            

            .curve{
                border-radius:5%;
            }

           
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .right{
                float:right;
            }

            .rt-al{
                text-align:right;
            }

            .lt-al{
                text-align:left;
            }

            .left{
                float:left;
            }

            .blue{
                background:#34ace0;
                color:white;
            }

            .green{
                color:green;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }


            
            .black{
                color:black;
            }

            .orange{
                color:orange;
            }

            .red{
                color:red;
            }
            .foot{
                font-size:100%;
            }

            .white{
                color:white;
            }

            .theme{
                background-color:#34ace0;
            }

            .white-bg{
                background: white;
            }

            .orange-bg{
                background: orange;
            }

            .c_thru{
                background:transparent;
                border:0px;
            }

            .center{
                text-align:center;
            }

            .full{
                width:100%;
            }

            .fuller{
                width:110%;
            }

            .top-space{
                padding-top:10%;
            }
            .btm-space{
                padding-bottom:10%;
            }
            .right-space{
                margin-right:10%;
            }
             #right-topbar button{
                margin-top:3%;
             }

            .p-top{
                padding-top:5%;
            }

            .p-right{
                padding-right:5%;
            }


            .left-space{
                padding-left:10%;
            }

            .left-mg{
                margin-left:20%;
            }

            .contain{
                margin:2% 5% 1% 5%;
                padding: 1% 4% 1% 4%;
            }

            nav a{
                color:white;
            }

            #right-topbar button:hover {
                margin-top:5%;
                background-color:  black;
                color: white;
            }

            #messages_btn button:hover {
                background-color:  black;
                color: white;
            }

            .sidebar button {
                width:145px;
                margin:0% 5% 0% 5%;
            }

            .sidebar div {
                margin:0% 5% 0% 5%;
            }

            /* On screens that are less than 700px wide, topbar */
            @media screen and (max-width: 700px) {
                .top_space{
                    margin-top:5%;
                } 
  
             
                #right-topbar{
                    padding-bottom: 5%;
                }

               

                .left-space{
                    padding-left:2%;
                } 

               

                .sidebar button{
                    margin:2% 2% 2% 2%;

                    padding:2% 2% 2% 2%;                
                }

                #sidebar{
                    margin:15%;
                }

                          
            }

            /* On screens that are less than 400px,topbar */
            @media screen and (max-width: 400px) {
                .top_space{
                    margin-top:5%;
                } 

                #right-topbar{
                    padding-bottom: 5%;
                }

                .left-space{
                    padding-left:2%;
                } 
                .sidebar button{
                    margin:5% 2% 5% 2%;

                    padding:5% 2% 5% 2%;                
                }

                #sidebar{
                    margin-right:5%;
                    padding-right:15%;
                }

                
                #settings_btn{
                    float:right;
                }

                .contain{
                    padding:2%;
                }               

            }
        </style>

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
                    <img class="white-bg" style="width:12%;border-radius:50%;margin:1% 15% 0% 10%;" src="{{ asset('/imgs/ozz-app.png') }}" alt="Avator">
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
    <div class="contain">

        <div id="sidebar" class="row sidebar col-lg-7 well theme left-mg" style="display:inline-block;">
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

           
            <div id="accoms_div" class="col-md-2">
                <a href="/accoms_add/">
                    <button id="accoms_btn" class="btn btn-md btn-default">
                        <strong>  
                            Accommodation
                        </strong>
                    </button>
                </a>
            </div>
            
            <div class="col-md-2">
                <a href="/add_food/">
                    <button id="food_btn" class="btn btn-md btn-default">
                       <strong>Food</strong>
                    </button>
                </a>
            </div>


            <div class="col-md-2">
                <a href="/at/">
                   <button id="at_btn" class="btn btn-md btn-default">
                       <strong>Airtime</strong>
                   </button>
                </a>
            </div>

            
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
