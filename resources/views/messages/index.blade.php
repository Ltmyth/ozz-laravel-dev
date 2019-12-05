@extends('layouts.layout')
@section('content')
    <style type="text/css">
    	#active{
    		background-color: white;
    	}


    	#messages_btn{
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
            Inbox
            <i class="lnr lnr-alarm"></i>
        </h2>
      	<hr class="container col-lg-12">
      	<button id="compose_btn"  onclick="compose()" class="btn btn-md btn-outline-primary">
      		Compose  <i class="lnr lnr-location"></i>
      	</button>
        &nbsp;&nbsp;&nbsp;&nbsp;
      	<br><br>
		<div id="new_msg" style="display:none;" class="well center">
            <form enctype="multipart/form-data" method="POST" action="#">
                @csrf
                <div class="container col-lg-5">   
                    <input placeholder="To" type="text" name="user">
                    <hr>
                    <textarea placeholder="Message" style="width:100%;" type="textarea" class="form-control" name="post" value="post"autofocus required></textarea>
                </div>
                <div class="container col-lg-5">
                    <br>
                   <i class="glyphicon glyphicon-paperclip"></i><input type="button" name="upload" value="Upload" onclick="getfile()"  id="myBtn">
                   &nbsp;&nbsp;
                   <button type="submit" class="btn btn-md btn-success">
                        <i class="glyphicon glyphicon-send">Send</i>
                    </button> 
                </div>
            </form>
        </div>
        <hr class="container col-lg-5">
            <div class="container col-lg-12">
                <div class="row bb white-bg blbr-10 trbr-10 brbr-10">
                    <div class="col-lg-2 w-10">
                        <div class="row">
                            <a href="{{ route('user') }}">
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
                        <a href="/inbox/">
                            <div class="row blbr-10" >
                                <hr class="w-100 br-10">
                                 <h3 class="blue  w-100">
                                    <strong>{{ Auth::user()->name }}</strong>
                                    &nbsp;

                                
                                    <small>
                                        <i class="red fz-15">15</i>
                                    </small>
                                </h3> 
                            </div>
                        </a>
                    </div>
                </div>
            </div>            
    <br><br>
@endsection