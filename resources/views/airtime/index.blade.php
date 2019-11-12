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
    <br>
	<img class="curve w-10" src="{{ asset('/imgs/phone.png') }}">	
	<br><br>
	<h2><b>Airtime Services</b></h2>
	<hr class="container col-lg-5">
	<big>Buy airtime for </big>;
	<hr class="container col-lg-5">
	<ul style="list-style:none;">
		<li>
			<a href="/at-self/">
				<button class="btn btn-lg btn-outline-success px100">
					Self
				</button>
			</a>
		</li>
		<hr class="container col-lg-5">
		<li>
			<a href="/at-other/">
				<button class="btn btn-lg btn-outline-warning px100">
					Other
				</button>
			</a>
		</li>
		<hr class="container col-lg-5">
		<li>
			<a href="/at-others/">
				<button class="btn btn-lg btn-outline-danger px100">
					Others	
				</button>
			</a>
		</li>
		<hr class="container col-lg-5">
	</ul>
@endsection