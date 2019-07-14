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
      		<img style="width:40%;" class="curve" src="{{ asset('/imgs/foodservice.jpeg') }}">
    		<br>
      		<h2><strong>Food Services</strong></h2>
      	</div>
		<div class="well">
			<form>
				<label>
					Location
				</label>
				<select class="form-control">
					<option>Mukono</option>
					<option disabled>Kampala</option>
				</select>
			</form>	
		</div>
		<h3>Available Restaurants / Service providers</h3>
		<br><br>		
		<div class="row">
			<div class="col-md-4">
				
				<h4>
					<a href="/provider/">
						<button class="btn btn-md btn-default">
							<br><br>
							<img class="curve" src="{{ asset('/imgs/rolex.jpeg') }}">
							<br>
							<b>Dembe</b>
							<br>
						</button>						
					</a>
				</h4>	
			</div>

			<div class="col-md-4">
				<h4>
					<a href="/provider/">
						<button class="btn btn-md btn-default">
							<br><br>
							<img class="curve" style="width:80%;" src="{{ asset('/imgs/food.png') }}">
							<br>
							<b>Bobix</b>
							<br>
						</button>						
					</a>
				</h4>	
			</div>

			<div class="col-md-4 curve">
				<h4>
					<a href="/provider/">
						<button class="btn btn-md btn-default">
							<br><br>
							<img class="curve" style="width:80%;" src="{{ asset('/imgs/foodservice.jpeg') }}">
							<br>
							<b>Cafe Pora</b>
							<br>
						</button>						
					</a>
				</h4>	
			</div>	
		</div>
	</div>
@endsection