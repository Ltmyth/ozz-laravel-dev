@extends('layouts.layout')
@section('content')
    <style type="text/css">
    	#active{
    		background-color: white;
    	}


    	#messages_btn{
    		background-color:#2980b9;
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
      	<h2>Messages</h2>
      	<hr class="container col-lg-5">
      	<button id="compose_btn"  onclick="compose()" class="btn btn-md btn-success">
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
                   <button type="submit" class="btn btn-md btn-success">
                        <i class="glyphicon glyphicon-send">Send</i>
                    </button> 
                </div>
            </form>
        </div>
        <hr class="container col-lg-5">
            <big>
                <a href="/inbox/">
                    <button class="btn btn-lg btn-default">
                        Inbox
                        <i class="glyphicon glyphicon-envelope"></i>
                    </button>
                </a>
                &nbsp;&nbsp;
                <b class="red">0</b>
            </big>
        <hr class="container col-lg-5">
            <big>
                <a href="/sent/">
                    <button class="btn btn-lg btn-default">
                        Sent
                        <i class="glyphicon glyphicon-send"></i>
                    </button>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </big>
        <hr class="container col-lg-5"> 
    <br><br>
@endsection