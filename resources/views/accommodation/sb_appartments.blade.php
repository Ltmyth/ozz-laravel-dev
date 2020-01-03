
@auth
	@extends('layouts.layout')
	<style type="text/css">
	    #accoms_btn{
	        background-color:orange;
	        color:white;
	    }
	</style>
	@section('content')
		<h1>single bedroom appartments</h1>
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
		<div class="row">
			<br><br>
			<div class="container mt-30">
				<h3><i class="green">Currently featuring providers</i></h3>
			</div>
		</div>
	@endsection
@endauth