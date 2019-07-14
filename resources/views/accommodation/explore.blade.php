
@auth
	@extends('layouts.layout')
	<style type="text/css">
	    #accoms_btn{
	        background-color:#5f27cd;
	        color:white;
	    }
	</style>
	@section('content')
		<div class="row contain center">
			<h1>Explore all appartments</h1>
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
			<div class="contain row lt-al">
				<div>
					Alls
				</div>
			</div>
		</div>
	@endsection
@endauth