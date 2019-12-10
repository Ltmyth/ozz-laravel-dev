@extends('layouts.layout')
@auth	
	<style type="text/css">
	    #profile_btn{
	        background-color:orange;
	        color:white;
	    }
	</style>
	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="row">
						<img 
							id="profile-pic"  
							class="theme w-90" 
							src="{{ asset('/imgs/ozz-app.png') }}"
							alt="Avator" 
						>
					</div>

					<div class="row">
						<div class="container">
							<br>
							<h3>Bio</h3>
						</div>
					</div>


					<div class="row pl-30 pt-20 br-10 blue-bg">
						<ul style="list-style:none;">
							<li>
								<h4 class="lt-al orange"><big><i><p>Some bio</p></i></big></h4>
							</li>
							<hr>
							<li>
								<a href="#">
									<h4 class="white lt-al"><big><i>Comrades</i> : 0</big></h4>
								</a>
							</li>
							<br><br>
							<li>
								<a href="#">
									<h4 class="white lt-al"><big><i>Posts</i> : 0</big></h4>
								</a>
							</li>
							<br>
							<hr>
							<li>
								<a href="#">
					                <button id="explore" class="btn btn-lg btn-primary mr-20">
					                    Invite
					                </button>
					            </a>
					            <button class="btn btn-lg btn-warning  mr-20">
									<i class="glyphicon glyphicon-send">Message</i>
								</button>

								<button class="btn btn-lg btn-outline-warning">
									SMS
								</button>
							</li>
							<hr>
						</ul>
					</div>
				</div>	
				<div class="col-lg-2">
					
				</div>
				<div class="light-bg col-lg-5 pt-20 br-10">
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
				</div>
			</div>	
		</div>

		<br><br>	
		<div class="row">
			<div class="container">
				<hr>
				<h2><b>Posts</b></h2>
				<hr>
			</div>
			<br>
			<div class="container">
				<small>No Posts</small>
			</div>
		</div>
	@endsection
@endauth	
	