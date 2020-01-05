@extends('layouts.layout')
@auth	
	@section('content')
		<script type="text/javascript">
			function edit(){
	  			/*get fields*/
	  			var a = document.getElementById('bio');
	  			var b = document.getElementById('bd');
	  			var c = document.getElementById('community');
	  			var d = document.getElementById('phone');

	  			/*display*/
	  			x.setAttribute("style", "display:inline");
	  			y.setAttribute("style", "display:inline");
	  			z.setAttribute("style", "display:inline");
	  			a.setAttribute("style", "display:inline");
	  		}
		</script>

		<div class="container">
			<div class="row mt-20 br-10" style="background-image:url('../imgs/people.png');background-size:contain;background-repeat:no-repeat;background-position:center;">
				<div class="row col-lg-8">
					<img 
						id="profile-pic"  
						class="theme w-30 mt-20 blue-bg br-50" 
						src="{{ asset('/imgs/ozz-app.png') }}"
						alt="Avator" 
					>						
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="row">
						<div class="container lt-al">
							<hr>
							<h2 ><strong>{{ Auth::user()->name }}</strong><span class="green_dot"></span></h2>
							<hr>
								<button class="btn btn-md btn-outline-success ct-al" onclick="edit()" >
									<i class="lnr lnr-pencil"></i><b class="green" >Edit Profile</b>
								</button>
							<hr>

							<form>
								<div class="row pl-30 pt-20 blbr-10 brbr-10 light-bg">
									<ul id="userbio" style="list-style:none;" class="lt-al">
										<li>
											<h4 class="white"><big><i><p>Some bio</p></i></big></h4>
										</li>
									</ul>									
								</div> 
								<input id="bio" placeholder="Bio" type="text" class="form-control" name="bio" style="display:none;">
								<hr>
								<h3 id="birthday" class="blue">
									<i class="lnr lnr-gift orange">
									</i> Birthday
								</h3>

								<input id="bd" placeholder="Birthday" type="date" class="form-control" name="bd" style="display:none;">								
								<hr>
								<h3>
									<span>
										<i class="lnr lnr-envelope orange">
										</i>
									</span>
									<strong>{{ Auth::user()->email }}</strong>
								</h3>	
								<hr>
								<h3 id="number">
									
									<i class="lnr lnr-phone orange">
									</i>
									<strong>+256-7xx-xxxx</strong>
								</h3>

								<input id="phone" placeholder="Phone number" class="form-control" type="text" name="phone" style="display:none;">
								<hr>
								<h3 id="comm">
									<i class="lnr lnr-pushpin orange">
									</i> Community
								</h3>
								<input id="community" placeholder="Community" class="form-control" type="text" name="community" style="display:none;">
							</form>
							<hr>
							<a href="#">
								<button class="btn btn-md btn-default">
									<big class='red'>
										Change Password
									</big>
								</button>	
							</a><!-- 
							<br><br>
							<a href="#">
								<button class="btn btn-md btn-outline-danger">
									<i class="glyphicon glyphicon-cog"></i>
									<big>Privacy Settings</big>
								</button>
							</a>	 -->
						</div>
					</div>
				</div>	
				<div class="nlight-bg col-lg-8 pt-20 lb">
					<div class="row tb">
						<div class="container">
							<h2><b>Posts</b></h2>
							<hr>
							@php
								$user = Auth::user()->name;
						    	echo App\Http\Controllers\PostsController::individual_posts($user);
						    @endphp
						</div>
					</div>
				</div>
			</div>	
		</div>
		<style type="text/css">
		
			
			#profile_btn{
				background-color:orange;
				color:white;
				pointer-events: none;
			}
		</style>
	
	@endsection
@endauth	