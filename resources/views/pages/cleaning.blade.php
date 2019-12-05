@extends('layouts.layout')
@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}

		#utilities{
			background-color:#34ace0;
		}

		#cleaning{
			background-color:#34ace0;
			pointer-events: none;
		}

		#cleaning_btn{
			 background-color:#9980FA;
			color:white;
			pointer-events: none;
		}
	</style>
    <!-- right side -->
    <div class="row contain white-bg">
    	<div class="row center">
      		<img class="curve" src="{{ asset('/imgs/cleaning.jpeg') }}">	
    		<br>
      		<h2><strong>Cleaning Services</strong></h2>
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
		<div class="row center">
			<h3><b>Service Providers</b></h3>
			<div class="row">
				<div class="col-sm-2">
					<a href="/cl_profile/">
						<img 
							id="profile-pic" 
							style="border-radius: 50%;width:40%;" 
							class="theme" 
							src="{{ asset('/imgs/ozz-app.png') }}"
							alt="Avator" 
						>
						<br>
						<b>Bob</b>
					</a>
				</div>
				<div class="col-sm-2">
					<a href="/cl_profile/">
						<img 
							id="profile-pic" 
							style="border-radius: 50%;width:40%;" 
							class="theme" 
							src="{{ asset('/imgs/ozz-app.png') }}"
							alt="Avator" 
						>
						<br>
						<b>Paula</b>
					</a>
				</div>				
			</div>
		</div>
	</div>
	
@endsection