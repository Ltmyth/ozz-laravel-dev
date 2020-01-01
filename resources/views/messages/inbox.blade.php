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
        @if($profile)
        <img 
            id="profile-pic"  
            class="theme w-5 mt-20 blue-bg br-50" 
            src="{{ asset('/imgs/ozz-app.png') }}"
            alt="Avator" 
        > 
        <h2>{{ $profile->name }}</h2>
        <hr>
        <div id="new_msg"  class="well center">
            <form enctype="multipart/form-data" method="POST" action="/send_message">
                @csrf
                <div class="container col-lg-5"> 
                    <input type="hidden" name="author" value="{{ Auth::user()->name }}"> 
                    <input type="hidden" name="receiver" value="{{ $profile->name }}">  
                    <textarea placeholder="New Message" style="width:100%;" type="textarea" class="form-control" name="message" autofocus required></textarea>
                </div>
                <div class="container col-lg-5">
                    <br>
                   <!-- <i class="glyphicon glyphicon-paperclip"></i><input type="button" name="upload" value="Upload" onclick="getfile()"  id="myBtn">
                   &nbsp;&nbsp; -->
                   <button type="submit" class="btn btn-lg btn-outline-primary">
                        <i class="glyphicon glyphicon-send">Send</i>
                    </button> 
                </div>
            </form>
        </div>
  	<!-- <button id="compose_btn"  onclick="compose()" class="btn btn-md btn-success">
  		Compose 
  	</button>
    &nbsp;&nbsp;&nbsp;&nbsp;
  	<br><br>
	<div id="new_msg" style="display:inline-block;" class="well center">
        <form enctype="multipart/form-data" method="POST" action="#">
            @csrf
            <div class="row">   
                <input placeholder="To" type="text" name="user">
                <hr>
                <textarea placeholder="Message" style="width:100%;" type="textarea" class="form-control" name="post" value="post"autofocus required></textarea>
            </div>
            <div class="row">
                <br>
               <i class="glyphicon glyphicon-paperclip"></i><input type="button" name="upload" value="Upload" onclick="getfile()"  id="myBtn">
               &nbsp;&nbsp;
               <button type="submit" class="btn btn-md btn-success">
                    <i class="glyphicon glyphicon-send">Send</i>
                </button> 
            </div>
        </form>
    </div> -->
        @php
            echo App\Http\Controllers\MessageController::individual_chat($profile->name);
        @endphp
    @else
        <div class="container">
            <small>Profile Not Available</small>
        </div>
    @endif  
    <br><br>
@endsection