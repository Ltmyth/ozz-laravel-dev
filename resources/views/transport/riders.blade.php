@auth
	@extends('layouts.layout')
	<style type="text/css">
	    #transport_btn{
	        background-color:#34ace0;
	        color:white;
	    }
	</style>
	@section('content')
		<div class="row contain center">
			<h1>Riders</h1>
			<hr>
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
			<div class="row">
				<div class="col-sm-2">
					<a href="#">
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
					<a href="#">
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
	@endsection
@endauth