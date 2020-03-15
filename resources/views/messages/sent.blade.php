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
    
    <div class="container table-responsive">
      	<h2>Sent SMS History</h2>
        <table class="table-striped table-bordered w-90">
            <thead>
                <tr class="p-3 mb-2 bg-info lt-al text-white br-10">
                    <th scope="col">When</th>
                    <th scope="col">To</th>
                    <th scope="col">Phone number</th>
                    <th scope="col" >Message</th>
                    <th scope="col" >Status</th>
                    <th scope="col" >( <b class="orange">Oh</b><b>z</b> ) Cost</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                @if($texts) 
                    @foreach ($texts as $text)

                        <tr class="lt-al p-40 br-10">
                            <td>
                                <h5>{{ $text->created_at->diffForHumans() }}</h5>
                            </td>
                            
                            <td>
                                <h4 class="blue"><strong>{{ $text->receiver }}</strong></h4> 
                            </td>

                            <td>
                                <h4 class="black"><strong>{{ $text->phone }}</strong></h4> 
                            </td>


                            <td>
                                <h4 class="black"><strong>{{ $text->message }}</strong></h3> 
                            </td>

                            <td>
                                <h4 class="green ct-al"><strong>Delivered</strong></h4> 
                            </td>

                            <td>
                                <h3 class="red ct-al"><strong>{{ $text->cost }}</strong></h3> 
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
    <div class="section-gap">        
    </div>
    <div class="section-gap">        
    </div>
@endsection