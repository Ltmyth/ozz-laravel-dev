@extends('layouts.layout')
@section('content')
    <style type="text/css">
    	#active{
    		background-color: white;
    	}


    	#messages_btn{
    		background-color:#8490ff;
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
  	<h2> <i class="lnr lnr-alarm orange"></i>Inbox</h2>
  	<hr>
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
        <h2>Messages</h2>
        <hr class="container col-lg-5">
        <button id="compose_btn"  onclick="compose()" class="btn btn-md btn-info">
            Compose 
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
                   <button type="submit" class="btn btn-md btn-info">
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
        <div class="row">
            <div style="border-top-left-radius:100px;" class="well blue-bg col-lg-7 br-10 pt-20  pb-20 pl-10">
                <p class="lt-al ml-30 mr-30"><strong>txt</strong></p>
            </div>
        </div>
        
        <hr>
        <div class="row">
           <div class="col-lg-5">               
           </div> 
           <div style="border-top-right-radius:100px;" class="well blue-bg col-lg-7 br-10 pt-20 pb-20 pr-10">
                <p class="lt-al ml-30 mr-30"><strong>txt</strong></p>
            </div>
        </div>
        
    <hr>
    <br><br>
@endsection