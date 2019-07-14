@extends('layouts.layout')
@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}


		#utilities{
			background-color:#34ace0;
		}

		#food{
			background-color:#34ace0;
			pointer-events: none;
		}

		#food_btn{
			 background-color:#5f27cd;
			color:white;
			pointer-events: none;
		}
	</style>
    <!-- right side -->
    <div class="row contain">
    	<div class="row center">
      		<img style="width:40%;" class="curve" src="{{ asset('/imgs/rolex.jpeg') }}">
    		<br>
      		<h2><strong>Cafe Pora</strong></h2>
      	</div>
		<br><br>		
		<div class="row center">
			<div class="col-md-8">
				<big>Available</big>
				<h4>
					<button class="btn btn-md btn-success">
						Order
					</button>
				</h4>	
			</div>	
		</div>
	</div>
@endsection