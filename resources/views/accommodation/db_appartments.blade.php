
@auth
	@extends('layouts.layout')
	<style type="text/css">
	    #accoms_btn{
	        background-color:orange;
	        color:white;
	    }
	</style>
	@section('content')
		<h1>Double or more bedroom(s) appartments</h1>
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
		<h3>Available Service providers</h3>
		<div class="row">
			<div class="col-sm-4">
				Angels
			</div>
		</div>
	@endsection
@endauth