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
    <div class="row container">
      	<h2>Sent SMS History</h2>
      	<hr>
      	@if($texts) 
            @foreach ($texts as $text)
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
                    <hr>
                </div>
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