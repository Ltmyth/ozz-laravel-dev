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
				<div class="col-lg-5">
					<div class="row">
						<img 
							id="profile-pic"  
							class="theme w-80" 
							src="{{ asset('/imgs/ozz-app.png') }}"
							alt="Avator" 
						>
					</div>

					<div class="row">
						<div class="container lt-al">
							<h3>
								<strong>{{ Auth::user()->name }}</strong>
							</h3>
							<h2><small>Currently</small> : <small class="green">Online</small></h2>
							<br>
							<h3>About</h3>
						</div>
					</div>


					<div class="row pl-30 pt-20 br-10 nlight-bg">
						<ul style="list-style:none;">
							<li>
								<h4 class="lt-al orange"><big><i><p>Some bio</p></i></big></h4>
							</li>
							<hr>
							<li>
								<a href="#">
									<h4 class="lt-al"><big><i>Comrades</i> : 0</big></h4>
								</a>
							</li>
							<hr>
							<li>
								<a href="#">
									<h4 class="lt-al"><big><i>Posts</i> : 0</big></h4>
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

							<li>
								<h3>
									<i class="lnr lnr-envelope">
									</i>
									<strong>{{ Auth::user()->email }}</strong>
								</h3>
							</li>
							<hr>
							<li>
								<h3>
									<i class="lnr lnr-tablet">
									</i>
									<strong>+256-7xx-xxxx</strong>		
								</h3>
							</li>
							<hr>
						</ul>
					</div>
				</div>	
				<div class="nlight-bg col-lg-6 pt-20 br-10 lb">
					<br><br>	
					<div class="row">
						<div class="container">
							<hr>
							<h2><b>Posts</b></h2>
							<hr>
							<h3 class="black"><small>No Posts</small></h3>
						</div>
					</div>
				</div>
			</div>	
		</div>		
	@endsection
@endauth	
	