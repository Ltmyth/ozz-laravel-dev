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

	  			var e = document.getElementById('userbio');
	  			var f = document.getElementById('birthday');
	  			var g = document.getElementById('comm');
	  			var h = document.getElementById('number');
	  			var i = document.getElementById('save');
	  			var k = document.getElementById('edit');

	  			// hide
	  			e.setAttribute("style", "display:none");
	  			f.setAttribute("style", "display:none");
	  			g.setAttribute("style", "display:none");
	  			h.setAttribute("style", "display:none");
	  			k.setAttribute("style", "display:none");	  			


	  			/*display*/
	  			a.setAttribute("style", "display:inline");
	  			b.setAttribute("style", "display:inline");
	  			c.setAttribute("style", "display:inline");
	  			d.setAttribute("style", "display:inline");
	  			i.setAttribute("style", "display:inline");
	  			i.setAttribute("type", "submit");
	  		}

	  		function pwd(){
	  			var pwd = document.getElementById('change_pwd');
	  			var j = document.getElementById('change');

	  			pwd.setAttribute("style", "display:inline");
	  			j.setAttribute("style", "display:none");
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
								<button id="edit" class="btn btn-md btn-outline-success ct-al" onclick="edit()" style="display:inline;">
									<i class="lnr lnr-pencil"></i><b class="green" >Edit Profile</b>
								</button>
							<hr>

							<form>
								<div class="row pl-30 pt-20 blbr-10 brbr-10 light-bg">
									<ul id="userbio" style="list-style:none;display: inline;" class="lt-al">
										<li>
											<h4 class="white"><big><i><p>Some bio</p></i></big></h4>
										</li>
									</ul>									
								</div> 
								<textarea id="bio" placeholder="Bio" type="text" class="form-control" name="bio" maxlength="100" style="display:none;"></textarea>
								<hr>
								<h3 id="birthday" class="blue" style="display:inline;">
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
								<h3 id="number" style="display:inline;">
									
									<i class="lnr lnr-phone orange">
									</i>
									<strong>+256-7xx-xxxx</strong>
								</h3>

								<input id="phone" placeholder="Phone number" class="form-control" type="text" name="phone" style="display:none;">
								<hr>
								<h3 id="comm" style="display:inline;">
									<i class="lnr lnr-pushpin orange">
									</i> Community
								</h3>
								<input id="community" placeholder="Community" class="form-control" type="text" name="community" style="display:none;">
								<hr>
								<input id="save"  class="btn btn-md btn-success" style="display:none;" value="Save">
							</form>
							<hr>
							<button id="change" onclick="pwd()" class="btn btn-md btn-outline-danger" style="display:inline;" >
								<big>
									Change Password
								</big>
							</button>
							<hr>
							<form id="change_pwd" style="display:none;">
								<input type="password" class="form-control" placeholder="Current Password" name="current" required>
								<hr>
								<input type="password" class="form-control" minlength="8" placeholder="New Password" name="new" required>
								<hr>
								<input type="password" class="form-control" placeholder="Confirm Password" name="current" required="new">
								<hr>
								<input type="submit" class="btn btn-md btn-success" value="Change">
							</form>
							<!-- 
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