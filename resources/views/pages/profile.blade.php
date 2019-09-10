@extends('layouts.layout')
@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}

		
		#profile_btn{
			background-color:#2980b9;
			color:white;
			pointer-events: none;
		}
	</style>
	
	<div class="row">
		<div class="container col-lg-9">
    		<h2>
          		<strong>Profile</strong>
          	</h2>
    	</div>
	</div>

		<div 
		style="border-radius:2%;
		background-size: contain;
		background-position: center; 
		background-repeat: no-repeat;
		background:url('{{ asset('/imgs/green.jpg') }}');" class="row ct-al">
			<div class="white-bg col-md-5 container curve">
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
					<button class="btn btn-lg btn-default">
						<i class="green">Update</i>
					</button>
				</div>
			</div>

			<div class="col-md-5 white-bg container curve">
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
						<p>
			                Add users you know
			                to your 0z circle(s) and view their posts
			                or message them.
			            </p>
					</li>
					<hr>
					<li>
						<a href="/explore/">
			                <button id="explore" class="btn btn-lg btn-primary">
			                    Explore 0zz
			                </button>
			            </a>
					</li>
				</ul>
			</div>	
		</div>			
	</div>
	<br><br>
	<div class="row">
		<div class="col-lg-4">
			
		</div>
		<div class="container col-lg-7">
			<a href="#">
				<button class="btn btn-md btn-default">
					Change Cover
					<i class="glyphicon glyphicon-camera"></i>
				</button>
			</a>
			<br><br>
			<a href="#">
				<button class="btn btn-md btn-default">
					Change Profile
					<i class="glyphicon glyphicon-camera"></i>
				</button>
			</a>
			<br><br>
			<a href="#">
				<button class="btn btn-md btn-default">
					<big class='red'>
						Change Password
					</big>
				</button>	
			</a>
			<br><br>
			<a href="#">
				<button class="btn btn-md btn-outline-danger">
					<i class="glyphicon glyphicon-cog"></i>
					<big>Privacy Settings</big>
				</button>
			</a>				
			<br><br>
			<a href="#">
				<button class="btn btn-md btn-warning">
					<i class="glyphicon glyphicon-briefcase black"></i>
					<strong>
						Payments
					</strong>
				</button>	
			</a>	
		</div>				
	</div>			
@endsection