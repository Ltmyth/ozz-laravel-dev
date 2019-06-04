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
			background-color:#34ace0;
			color:white;
			pointer-events: none;
		}
	</style>
    <!-- right side -->
    <div class="col-md-10 contain white-bg">
    	<div class="row center">
    		<img class="curve" src="{{ asset('/imgs/at.jpeg') }}">	
    		<br>
    		<h2><strong>Airtime Services</strong></h2>
    	</div>
    	<div class="row well curve center c_thru">
			<big>Buy airtime for </big>;
			<hr>
			<ul style="list-style:none;">
				<li>
					<a href="/at-self/">
						<button class="btn btn-lg btn-success">
							Self
						</button>
					</a>
				</li>
				<hr>
				<li>
					<a href="/at-other/">
						<button class="btn btn-lg btn-warning">
							Other
						</button>
					</a>
				</li>
				<hr>
				<li>
					<a href="/at-others/">
						<button class="btn btn-lg btn-danger">
							Others	
						</button>
					</a>
				</li>
				<hr>
			</ul>
    	</div>
	</div>
@endsection