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
  		<img style="width:35%;" class="curve" src="{{ asset('/imgs/foodservice.jpeg') }}">
		<br><br>
  		<h2><strong>Food Services</strong></h2>
  		<hr class="container col-lg-8">
			<form>
				<label>
					Location
				</label>
				<select class="form-control container col-lg-8">
					<option>Mukono</option>
					<option disabled>Kampala</option>
				</select>
			</form>	
		<br><br>
		<h3>Available Service providers</h3>
		<hr class="container col-lg-8">	
		<div class="row">
			<div class="col-md-4">
				
				<h4>
					<a href="/provider/">
						<button class="btn btn-md btn-default blue-bg">
							<br><br>
							<img class="curve" src="{{ asset('/imgs/rolex.jpeg') }}">
							<br>
							<b class="white">Dembe</b>
							<br>
						</button>						
					</a>
				</h4>	
			</div>

			<div class="col-md-4">
				<h4>
					<a href="/provider/">
						<button class="btn btn-md btn-default blue-bg">
							<br><br>
							<img class="curve" style="width:80%;" src="{{ asset('/imgs/food.png') }}">
							<br>
							<b class="white">Bobix</b>
							<br>
						</button>						
					</a>
				</h4>	
			</div>

			<div class="col-md-4 curve">
				<h4>
					<a href="/provider/">
						<button class="btn btn-md btn-default blue-bg">
							<br><br>
							<img class="curve" style="width:80%;" src="{{ asset('/imgs/foodservice.jpeg') }}">
							<br>
							<b class="white">Cafe Pora</b>
							<br>
						</button>						
					</a>
				</h4>	
			</div>	
	@endsection