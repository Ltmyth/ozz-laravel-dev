
@auth
	@extends('layouts.layout')
	<style type="text/css">
	    #accoms_btn{
	        background-color:orange;
	        color:white;
	    }
	</style>
	@section('content')
		<h1>single sex hostels</h1>
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
		<div class="contain row lt-al">
			<div class="col-sm-4 well">
				Little Angels
			</div>
		</div>
	@endsection
@endauth