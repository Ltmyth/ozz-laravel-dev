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
        <div class="table-responsive">

        <!-- <h2>Personal History</h2> -->
            <hr>
            <table class="table-striped w-100">
                <tbody>
                    @if($nots) 
                        @foreach ($nots as $not)

                            <tr class="lt-al">
                                <td>
                                    <h5>{{ $not->created_at->diffForHumans() }}</h5>
                                </td>

                                <td>
                                    <h4 class="blue"><strong>{{ $not->message }}</strong></h4> 
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">
                                <br>
                                <h1 class="ct-al">
                                    <p><b class="orange"><i>No notifications yet</i>!</b></p>
                                </h1>
                                <h1>
                                    <big><i class="lnr lnr-sad orange"></i></big>
                                </h1>
                                <div class="section-gap"></div>
                            </td>
                        </tr>
                    @endif
                </tbody>            
            </table>        
      </div>

@endsection