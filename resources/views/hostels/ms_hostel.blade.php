
@auth
	@extends('layouts.layout')
	<style type="text/css">
	    #accoms_btn{
	        background-color:orange;
	        color:white;
	    }
	</style>
	@section('content')
		<h1>Mixed sex hostels</h1>
		<hr class="container col-lg-9">
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
		<div class="row">			
			<div class="container mt-30">
				<h3><i class="green">Currently featuring providers</i></h3>
			</div>
		</div>
	@endsection
@endauth