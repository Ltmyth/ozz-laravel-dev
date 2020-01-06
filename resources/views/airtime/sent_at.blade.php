@extends('layouts.layout')
@section('content')
    <style type="text/css">
    	#active{
    		background-color: white;
    	}


    	#at_btn{
    		background-color:orange;
    		color:white;
    		pointer-events: none;
    	}
    </style>
    
    <div class="container">
        <
      	<h2>Sent Airtime History</h2>
      	<hr>
        <table class="table-striped w-100">
            <thead>
                <tr>
                    <th scope="col" class="lt-al">When</th>
                    <th scope="col" class="lt-al">Phone number</th>
                    <th scope="col" class="lt-al">(UGX) Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">( <b class="orange">Oh</b><b>z</b> ) Cost</th>
                </tr>
            </thead>
            <tbody>
                @if($ats) 
                    @foreach ($ats as $at)

                        <tr class="lt-al">
                            <td>
                                <h5>{{ $at->created_at->diffForHumans() }}</h5>
                            </td>
                            
                            <td>
                                <h4 class="blue"><strong>{{ $at->receiver }}</strong></h4> 
                            </td>

                            <td>
                                <h3 class="blue"><strong>{{ $at->amount }}</strong></h3> 
                            </td>

                            <td>
                                <h4 class="green ct-al"><strong>Sent</strong></h4> 
                            </td>

                            <td>
                                <h3 class="red ct-al"><strong>{{ $at->cost }}</strong></h3> 
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="p-40 br-10">
                        <td colspan="6">
                            <br>
                            <h1 class="ct-al">
                                <p><b class="orange"><i>No airtime transactions yet</i>!</b></p>
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