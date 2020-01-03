@extends('layouts.layout')
@section('content')
    <style type="text/css">
    	
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
        <div class="row">
            <div class="container">
                <button type="button" class="btn btn-lg btn-warning">
                    <i class="lnr lnr-envelope white"></i> Inbox
                    <span class="badge badge-info">
                        @if($text_count>0)
                            {{ $text_count }}
                        @else
                            <small class="red">0</small>
                        @endif
                    </span>
                </button>
                &nbsp;&nbsp;&nbsp;
                <a href="/sms" onclick="javascript:document.getElementById('preloader').style.display='block';">
                    <button class="btn btn-lg btn-outline-warning">
                     Send SMS
                    </button>
                </a>
            </div>
        </div>
      	<hr class="container col-lg-12">
      	<button id="compose_btn"  onclick="compose()" class="btn btn-md btn-outline-primary">
      		Compose  <i class="lnr lnr-location"></i>
      	</button>
        &nbsp;&nbsp;&nbsp;&nbsp;
      	<br><br>
		<div id="new_msg" style="display:none;" class="row">
            <form enctype="multipart/form-data" method="POST" action="/send_message">
                @csrf
                <div class="container col-lg-5">
                    <input placeholder="To" class="form-control" type="text" name="receiver">
                    <input type="hidden" value="{{ Auth::user()->name }}" name="author">
                    <hr>
                    <textarea placeholder="Message" style="width:100%;" type="textarea" class="form-control" name="message" value="post"autofocus required></textarea>
                    <br>
                   <i class="glyphicon glyphicon-paperclip"></i><input type="button" name="upload" value="Upload" onclick="getfile()"  id="myBtn">
                   &nbsp;&nbsp;
                   <button type="submit" class="btn btn-lg btn-success">
                        <i class="glyphicon glyphicon-send">Send</i>
                    </button> 
                </div>
            </form>
        </div>
        <hr class="container col-lg-5">
            <div class="container col-lg-11 m-20 pb-30">
                @if($text_count<0)
                    <div class="container">
                        <br>
                        <h1 class="ct-al">
                            <p><b class="orange">No messages yet!</b></p>
                        </h1>
                        <h1>
                            <big><i class="lnr lnr-sad orange"></i></big>
                        </h1>
                        <div class="section-gap"></div>
                    </div>
                @endif
                
                @if($uniq_texts) 
                    @foreach ($uniq_texts as $text)
                        <div class="row bb">
                            <div class="col-lg-2 w-10">
                                <div class="row">
                                    <a href="/inbox/{{ $text->author }}">
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
                                    <a href="/inbox/{{ $text->author }}">
                                        <h3 class="blue"><strong>{{ $text->author }}</strong> <span class="green_dot"></span></h3> 
                                    </a>
                                    &nbsp; &nbsp;
                                    <h5 class="black"><br><i>{{$text->created_at->diffForHumans() }}.</i></h5>
                                </div>

                                <div class="row container lt-al blbr-10 trbr-10 light-bg brbr-10 ">
                                    <a href="/inbox/{{ $text->author }}">
                                        <h3 class="white">  
                                            <strong>
                                                <p>{{ $text->message }}</p>
                                            </strong>
                                        </h3> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                @else
                <div class="container">
                    <br>
                    <h1 class="ct-al">
                        <p><b class="orange">No messages yet!</b></p>
                    </h1>
                    <h1>
                        <big><i class="lnr lnr-sad orange"></i></big>
                    </h1>
                    <div class="section-gap"></div>
                </div>
                @endif
            </div>            
    <br><br>
@endsection