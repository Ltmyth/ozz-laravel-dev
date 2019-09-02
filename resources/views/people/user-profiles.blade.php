@extends('layouts.layout')
@auth	
	<style type="text/css">
	    #home_btn{
	        background-color:#34ace0;
	        color:white;
	    }
	</style>
	@section('content')
		<div style="border-radius:2%;
			background:url('{{ asset('/imgs/green.jpg') }}');" class="row contain">
			<img 
				id="profile-pic" 
				style="border-radius: 50%;width:10%;" 
				class="theme" 
				src="{{ asset('/imgs/ozz-app.png') }}"
				alt="Avator" 
			>	
			<div class="white-bg col-md-5 center contain curve">
				<h3>
					<small>
						<i class="glyphicon glyphicon-user">
							Username
						</i>
					</small>
					<hr>
					<strong>{{ Auth::user()->name }}</strong>
				</h3>
				<hr>
				<br><br>
				<h3>
					<small>
						<i class="glyphicon glyphicon-envelope">
							Email
						</i>
					</small>
					<hr>
					<strong>{{ Auth::user()->email }}</strong>
				</h3>
				<hr>
				<br><br>
				<h3>
					<small>
						<i class="glyphicon glyphicon-phone">
							Phone
						</i>
					</small> 
					<hr>
					<strong>+256-7xx-xxxx</strong>
				</h3>
				<hr>
				<br><br>
				<div class="btm-space">
					<button class="btn btn-lg btn-success">
						<i class="glyphicon glyphicon-send">Message</i>
					</button>
				</div>
			</div>

			<div class="col-md-4 white-bg contain lt-al curve right">
				<ul style="list-style:none;">
					<hr>
					<li>
						<a href="#">
							<button class="btn btn-md btn-default">
								<h4><big><i>People</i> : 0</big></h4>
							</button>
						</a>
					</li>
					<br><br>
					<li>
						<a href="#">
							<button class="btn btn-md btn-default">
								<h4><big><i>Circles</i> : 0</big></h4>
							</button>
						</a>
						<!-- <br><br>
						<a href="#">
							<button class="btn btn-sm btn-success">
								create
							</button>
						</a> -->
						
					</li>
					<hr>
					<li>
						<a href="#">
			                <button id="explore" class="btn btn-lg btn-primary">
			                    Add to Circle
			                </button>
			            </a>
					</li>
					<hr>
				</ul>
			</div>	
		</div>

		<br><br>	
		<div class="row">
			<div class="container">
				<h2><b>Posts</b></h2>
				<hr>
			</div>
		</div>
	@endsection
@endauth	
	