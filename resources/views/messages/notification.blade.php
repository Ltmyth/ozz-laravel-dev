@extends('layouts.layout')
@section('content')
    <style type="text/css">
    	
    	#notification_btn{
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
        function compose(){
        	var y = document.getElementById('new_msg').style.display; 
        	if( y == 'block'){
        		y = document.getElementById('new_msg'); 
            	y.setAttribute("style", "display:none");
        	}
        	else{
        		y = document.getElementById('new_msg'); 
            	y.setAttribute("style", "display:block");
        	}
            

            /*var x = document.getElementById('compose_btn'); 
            x.setAttribute("style", "display:none");*/
        }
    </script>

        <br>
      	<h2>
            <i class="lnr lnr-alarm orange"></i> Notifications
        </h2>
        <hr class="container col-lg-5">
            <div class="container col-lg-11">
                <div class="row bb">
                    <div class="col-lg-2 w-10">
                        <div class="row">
                            <a href="">
                                <img 
                                    class="w-60 mr-10 rt" 
                                    src="{{ asset('/imgs/hello_bot.png') }}"
                                    alt="Avator" 
                                >
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-7 w-100  br-10 mt-10 lt-al">
                        <div class="row bb">
                            <h3 class="blue"><strong>the</b><b class="orange">oh</b><b>z</b> <b class="black">chatbot</b></strong> <span class="green_dot"></span></h3> 
                            &nbsp; &nbsp;
                            <h5 class="black"><br><i>2 minutes ago.</i></h5>
                        </div>

                        <div class="row container lt-al blbr-10 trbr-10 light-bg brbr-10 ">
                            <a href="/inbox/">
                                <h3 class="white">  
                                    <b class="white fz-18">Hiii</b> <strong>{{ Auth::user()->name }}</strong>!! 
                                </h3> 
                                <h3 class="white">
                                    <b class="white">Welcome to <strong>the</b><b class="orange">oh</b><b class="white">z</b></strong> platform</b><br>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row bb blbr-10 trbr-10 brbr-10">
                    <div class="col-lg-2 w-10">
                        <div class="row">
                            <a href="">
                                <img 
                                    id="profile-pic" 
                                    class="theme w-40 rt" 
                                    src="{{ asset('/imgs/ozz-app.png') }}"
                                    alt="Avator" 
                                >
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7 w-100  br-10 mt-10 lt-al">
                        <div class="row bb">
                            <h3 class="blue">
                                <strong>{{ Auth::user()->name }}</strong>
                                <span class="red_dot"></span>
                            </h3>
                            &nbsp; &nbsp;
                            <h5 class="black"><br><i>2 days ago.</i></h5>
                        </div>

                        <div class="row container lt-al blbr-10 trbr-10 white-bg brbr-10 ">
                            <h3 class="blue  w-100">
                                <a href="/inbox/">          
                                    <strong>
                                        15 <i class="red fz-15">unread messages</i>
                                    </strong>
                                </a>                                
                            </h3>
                        </div>
                    </div>
                </div>
            </div>            
    <br><br>
@endsection