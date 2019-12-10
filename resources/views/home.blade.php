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
                    <!-- right side -->
                    <br>
                    <form enctype="multipart/form-data" method="POST" action="/posts_create">
                        @csrf
                        <div class="container lt-al row mt-20">
                            <div class="col-lg-9">
                                 <label for="name" class="col-form-label">
                                    <h2><b>What's going on</b><b class="orange">?</b></h2>
                                </label> 
                                <br>
                                <textarea  id="name" type="textarea" class="form-control w-100" name="post" value="post"autofocus required></textarea>
                                <?php $author = Auth::user()->id; ?>
                                <input type="hidden" name="author" value="{{ $author }}">
                            </div>
                        </div>            
                        <div class="container row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <br>
                                <div class="form-group row left-space" >
                                    &nbsp;&nbsp;
                                   <big ><i class="lnr lnr-paperclip"></i></big><input type="button" name="upload"  value="Upload" onclick="getfile()"  id="myBtn">
                                   &nbsp;&nbsp;
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
                                <button class="btn btn-lg btn-outline-success mr-10">
                                   Chat <i class="lnr lnr-users orange"></i>
                                </button>

                                <button class="btn btn-lg btn-warning">
                                   <i class="lnr lnr-envelope white"></i> SMS
                                </button>
                            </div>
                            
                            <!-- <div class="row blue-bg br-10 mt-30">
                                <hr>
                                    <h3 class="lt-al"><strong>Trending around you</strong>!</h3>
                                <hr>
                                <div class="container lt-al black light-bg brbr-10">
                                    <h4>#theohzLaunch</h4>
                                </div>
                            </div>   -->                

                            <div class="row blue-bg br-10">
                                <hr>
                                    <h3 class="lt-al">Popular around you</h3>
                                <hr>
                                <div class="container lt-al black light-bg blbr-10 brbr-10">
                                    <div class="row ml-20">
                                        <div class="row">
                                            <h2 class="white">#Launch</h2>
                                        </div>                                        
                                    </div>                        
                                </div>
                            </div>  


                            <div class="row blue-bg mt-10 br-10">
                                <hr>
                                    <h3 class="lt-al">People around you</h3>
                                <hr>
                                <div class="container lt-al black light-bg blbr-10 brbr-10">
                                    <div class="row ml-20">
                                        
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <div class="row">
                                                    <a href="{{ route('user') }}">
                                                        <img 
                                                            id="profile-pic" 
                                                            class="theme w-100" 
                                                            src="{{ asset('/imgs/ozz-app.png') }}"
                                                            alt="Avator" 
                                                        >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 pb-10">
                                                <h4 class="white">
                                                 OfukuwgG
                                                </h4>
                                                <button class="btn btn-sm btn-outline">Invite</button>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>
                            </div>  

                        </div>
                    </div>
                </div>          
            </div>
        </div>
@endsection
