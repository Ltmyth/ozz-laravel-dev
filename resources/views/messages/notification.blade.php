@extends('layouts.layout')
@section('content')
    <style type="text/css">
    	
    	#notification_btn{
    		background-color:orange;
    		color:white;
    		pointer-events: none;
    	}
    </style>
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
                            <td colspan="2">
                                <h5>{{ $not->created_at->diffForHumans() }}</h5>
                            </td>

                            <td>
                                <h4 class="blue"><strong>{{ $not->message }}</strong></h4> 
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="p-40 br-10">
                        <td colspan="6">
                            <br>
                            <h1 class="ct-al">
                                <p><b class="orange"><i>No notifications yet</i>!</b></p>
                            </h1>
                            <h1>
                                <big><i class="lnr lnr-sad orange"></i></big>
                            </h1>
                        </td>
                    </tr>
                @endif
            </tbody>            
        </table>        
    </div>

    <div class="section-gap"></div><div class="section-gap"></div>

@endsection