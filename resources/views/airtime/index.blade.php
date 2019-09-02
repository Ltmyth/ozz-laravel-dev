@extends('layouts.layout')
@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}

		
		
		#at{
			background-color:#34ace0;
			pointer-events: none;
		}

		#at_btn{
			background-color:#5f27cd;
			color:white;
			pointer-events: none;
		}
	</style>
    <!-- right side -->
	<img class="curve" src="{{ asset('/imgs/at.jpeg') }}">	
	<br><br>
	<h2><strong>Airtime Services</strong></h2>
	<hr class="container col-lg-5">
	<big>Buy airtime for </big>;
	<hr class="container col-lg-5">
	<ul style="list-style:none;">
		<li>
			<a href="/at-self/">
				<button class="btn btn-lg btn-success">
					Self
				</button>
			</a>
		</li>
		<hr class="container col-lg-5">
		<li>
			<a href="/at-other/">
				<button class="btn btn-lg btn-warning">
					Other
				</button>
			</a>
		</li>
		<hr class="container col-lg-5">
		<li>
			<a href="/at-others/">
				<button class="btn btn-lg btn-danger">
					Others	
				</button>
			</a>
		</li>
		<hr class="container col-lg-5">
	</ul>
@endsection