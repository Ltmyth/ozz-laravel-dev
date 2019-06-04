@extends('layouts.layout')
@section('content')
    <style type="text/css">
    	#active{
    		background-color: white;
    	}


    	#messages_btn{
    		background-color:black;
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
    <div class="row contain white-bg center">
      	<h2>Inbox</h2>
      	<hr>
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
        <hr>
	</div>
    <br><br>
@endsection