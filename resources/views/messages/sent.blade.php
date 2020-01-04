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
    <div class="container">
      	<h2>Sent SMS History</h2>
      	<hr>
        <table class="table-striped w-100">
            <thead>
                <tr>
                    <th scope="col">When</th>
                    <th scope="col">To</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                    <th scope="col">( <b class="orange">Oh</b><b>z</b> ) Cost</th>
                </tr>
            </thead>
            <tbody>
                @if($texts) 
                    @foreach ($texts as $text)

                        <tr>
                            <td>
                                <h3>{{ $text->created_at->diffForHumans() }}</h3>
                            </td>
                            
                            <td>
                                <h3 class="blue"><strong>{{ $text->receiver }}</strong></h3> 
                            </td>

                            <td>
                                <h3 class="black"><strong>{{ $text->phone }}</strong></h3> 
                            </td>


                            <td>
                                <h3 class="blue"><strong>{{ $text->message }}</strong></h3> 
                            </td>

                            <td>
                                <h3 class="green"><strong>Delivered</strong></h3> 
                            </td>

                            <td>
                                <h3 class="red"><strong>{{ $text->cost }}</strong></h3> 
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">
                            <br>
                            <h1 class="ct-al">
                                <p><b class="orange"><i>No sms sent yet</i>!</b></p>
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
    <br><br>
@endsection