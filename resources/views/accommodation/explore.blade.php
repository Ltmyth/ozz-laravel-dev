
@auth
	@extends('layouts.layout')
	<style type="text/css">
	    #accoms_btn{
	        background-color:orange;
	        color:white;
	    }
	</style>
	@section('content')
		<h1>Explore all appartments</h1>
		<hr class="container col-lg-9">
		<form>
			<label>
				Location
			</label>
			<select class="form-control container col-lg-9">
				<option>Mukono</option>
				<option disabled>Kampala</option>
			</select>
		</form>
		<br><br>	
		<div class="row">
			<div class="col-sm-4">
				Alls
			</div>
		</div>
	@endsection
@endauth