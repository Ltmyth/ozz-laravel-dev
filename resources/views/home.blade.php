@extends('layouts.layout')

@section('content')
    <style type="text/css">
        #home_btn{
            background-color:orange;
            color:white;
            pointer-events: none;
        }
    </style>
    <script type="text/javascript">
        function getfile(){
            var x = document.getElementById("myBtn"); 
            x.setAttribute("type", "file");
            x.setAttribute("accept", "file_extension|audio/*|video/*|image/*|media_type");
        }
        function comment(){
            var x = document.getElementById("comment_btn");
            var y = document.getElementById("comment");
            x.setAttribute("style", "background:green");
            if(y.style.display == 'none'){
                y.setAttribute("style", "display:inline");
                y.setAttribute("style", "color:white");
            }else{
                y.setAttribute("style", "display:none");
            }
        }
    </script>
        <div class="row">
           

            <!-- <div class="col-lg-1 rb rbr-10"></div> -->

            <div class="col-lg-12 lbr-10">
                <div class="container ">
                    <div id="mobile_chat" class="row mt-30">
                        <hr>
                        <a href="/chat" onclick="javascript:document.getElementById('preloader').style.display='block';">
                            <button class="btn btn-lg btn-outline-success mr-10">
                               Chat <i class="lnr lnr-users orange"></i>
                            </button>
                        </a>

                        <a href="/sms" onclick="javascript:document.getElementById('preloader').style.display='block';">
                            <button class="btn btn-lg btn-warning">
                               <i class="lnr lnr-envelope white"></i> SMS
                            </button>
                        </a>
                        <hr>
                    </div>
                    <form enctype="multipart/form-data" method="POST" action="/posts_create">
                        @csrf
                        <div class="container lt-al row mt-20">
                            <div class="col-lg-9">
                                 <label for="name" class="col-form-label">
                                    <h2><b>Post something </b></h2>
                                </label> 
                                <br>
                                <textarea  id="name" type="textarea" class="form-control w-100" name="post" value="post"autofocus required></textarea>
                                <?php $author = Auth::user()->name; ?>
                                <input type="hidden" name="author" value="{{ $author }}">
                            </div>
                        </div>            
                        <div class="container row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <br>
                                <div class="form-group row left-space" >
                                    &nbsp;&nbsp;
                                   <!-- <big ><i class="lnr lnr-paperclip"></i></big><input type="button" name="upload"  value="Upload" onclick="getfile()"  id="myBtn">
                                   &nbsp;&nbsp; -->
                                    <button type="submit" class="btn btn-lg btn-outline-primary">
                                        <i class="lnr lnr-cloud-upload">Post</i> 
                                    </button> 
                                </div> 
                            </div>
                        </div>
                    </form>
                
                    <div class="row tb trbr-10">
                        <div class="col-lg-9">
                            <?php 
                                use App\Http\Controllers\PostsController;
                                echo PostsController::index();
                            ?>
                        </div>

                        <div id="side"  class="col-lg-3 nlight-bg lb br-10">
                            <div class="row br-10 ml-20 nlight-bg mt-30 mb-10">
                                <img class="br-10" class="w-5" src="/imgs/people.png" alt="">
                                <br>
                                <a href="/chat" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                    <button class="btn btn-lg btn-outline-success mr-10">
                                       Chat <i class="lnr lnr-users orange"></i>
                                    </button>
                                </a>

                                <a href="/sms" onclick="javascript:document.getElementById('preloader').style.display='block';">
                                    <button class="btn btn-lg btn-warning">
                                       <i class="lnr lnr-envelope white"></i> SMS
                                    </button>
                                </a>
                            </div>
                            
                            <!-- <div class="row blue-bg br-10 mt-30">
                                <hr>
                                    <h3 class="lt-al"><strong>Trending around you</strong>!</h3>
                                <hr>
                                <div class="container lt-al black light-bg brbr-10">
                                    <h4>#theohzLaunch</h4>
                                </div>
                            </div>   -->                

                            <!-- <div class="row blue-bg br-10">
                                <hr>
                                    <h3 class="lt-al">Explore the <b class="orange">oh</b><b>z</b></h3>
                                <hr>
                                <div class="container lt-al black light-bg blbr-10 brbr-10">
                                    <div class="row ml-10">
                                        <div class="container">
                                            <ul style="list-style: none;">
                                                <li class="bb">
                                                    <h3 class="white"># People</h3>
                                                </li>
                                                <li class="bb" >
                                                    <h3 class="white"># Services</h3>
                                                </li>
                                                <li >
                                                    <h3 class="white"># Places</h3>
                                                </li>
                                            </ul>                                         
                                        </div>                                        
                                    </div>                        
                                </div>
                            </div> -->                        

                        </div>
                    </div>
                </div>          
            </div>
        </div>
@endsection
