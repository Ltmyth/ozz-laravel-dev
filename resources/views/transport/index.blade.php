@extends('layouts.layout')
@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}

		#utilities{
			background-color:#34ace0;
		}

		#transport{
			background-color:#34ace0;
			pointer-events: none;
		}

		#transport_btn{
			background-color:#34ace0;
			color:white;
			pointer-events: none;
		}
	</style>
    <!-- right side -->
    <div class="row contain white-bg">
      	
      	<div class="row center">
      		<img class="curve" src="{{ asset('/imgs/transport.png') }}">	
    		<br>
      		<h2><strong>Transport Services</strong></h2>
      	</div>
		
		<div class="row center">
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
			<big><b>Categories</b></big>
			<hr>
			<div class="row">
				<a href="/riders/">
					<button class="btn btn-md btn-default">
						<b>Riders</b>
					</button>
				</a>
			</div>

			<hr>
			<div class="row">
				<a href="/drivers/">
					<button class="btn btn-md btn-default">
						<b>Drivers</b>
					</button>
				</a>
			</div>
			<hr>
		</div>
	</div>
@endsection