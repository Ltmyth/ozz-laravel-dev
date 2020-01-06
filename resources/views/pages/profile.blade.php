@extends('layouts.layout')
@auth	
	@section('content')
		<script type="text/javascript">
			function check(input) {
		        if (input.value != document.getElementById('password').value) {
		            input.setCustomValidity('Password Must be Matching.');
		        } else {
		            // input is valid -- reset the error message
		            input.setCustomValidity('');
		        }
		    }
			function edit(){
	  			/*get fields*/
	  			var a = document.getElementById('bio');
	  			// var bd = document.getElementById('bd');
	  			var c = document.getElementById('community');
	  			var d = document.getElementById('phone');

	  			var e = document.getElementById('userbio');
	  			// var birthday = document.getElementById('birthday');
	  			var g = document.getElementById('comm');
	  			var h = document.getElementById('number');
	  			var i = document.getElementById('save');
	  			var k = document.getElementById('edit');

	  			// hide
	  			e.setAttribute("style", "display:none");
	  			// birthday.setAttribute("style", "display:none");
	  			g.setAttribute("style", "display:none");
	  			h.setAttribute("style", "display:none");
	  			k.setAttribute("style", "display:none");	  			


	  			/*display*/
	  			a.setAttribute("style", "display:inline");
	  			// bd.setAttribute("style", "display:inline");
	  			c.setAttribute("style", "display:inline");
	  			d.setAttribute("style", "display:inline");
	  			i.setAttribute("style", "display:inline");
	  			i.setAttribute("type", "submit");
	  		}

	  		function pwd(){
	  			var pwd = document.getElementById('change_pwd');
	  			var change_pwd = document.getElementById('change');

	  			pwd.setAttribute("style", "display:inline");
	  			change_pwd.setAttribute("style", "display:none");
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
							<h2><strong>{{ Auth::user()->name }}</strong> <span class="green_dot"></span></h2>
							<hr>
								<button id="edit" class="btn btn-md btn-outline-success ct-al" onclick="edit()" style="display:inline;">
									<i class="lnr lnr-pencil"></i><b class="green" >Edit Profile</b>
								</button>
							<hr>

							<form action="/update" method="POST">
								@csrf
								<div class="row pl-30 pt-20 blbr-10 brbr-10 light-bg">
									<ul id="userbio" style="list-style:none;display: inline;" class="lt-al">
										<li>
											<h4 class="white"><big><i><p>{{ Auth::user()->bio }}</p></i></big></h4>
										</li>
									</ul>									
								</div> 
								<textarea id="bio" placeholder="{{ Auth::user()->bio }}" type="text" class="form-control" name="bio" maxlength="100" style="display:none;"></textarea>
								<hr>
								<!-- <h3 id="birthday" class="blue" style="display:inline;">
									<i class="lnr lnr-gift orange">
									</i> Birthday
								</h3>

								<input id="bd" placeholder="Birthday" type="date" class="form-control" name="bd" style="display:none;">			 -->					
								<hr>
								<h3 class="blue">
									<span>
										<i class="lnr lnr-envelope orange">
										</i>
									</span>
									<strong>{{ Auth::user()->email }}</strong>
								</h3>	
								<hr>
								<p>Mobile Phone number</p>
								<br>
								<h3 id="number" class="blue" style="display:inline;">
									
									<i class="lnr lnr-phone orange">
									</i>
									<strong>0{{ Auth::user()->phone }}</strong>
								</h3>

								<input id="phone" placeholder="{{ Auth::user()->phone }}" class="form-control" type="text" name="phone" style="display:none;">
								<hr>
								<p>Community/Location</p>
								<br>
								<h3 id="comm" class="blue" style="display:inline;">
									<i class="lnr lnr-pushpin orange">
									</i> {{ Auth::user()->community }}
								</h3>								
								<input id="community" placeholder="{{ Auth::user()->community }}" class="form-control" type="text" name="community" style="display:none;">
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
							<form id="change_pwd" action="/update" method="POST" style="display:none;">
								@csrf
								<input type="password" class="form-control" placeholder="Current Password" name="current" required>
								<hr>
								<input id="password" type="password" class="form-control" minlength="8" placeholder="New Password" name="new" required>
								<hr>
								<p>Confirm New Password:</p>
								<input name="pwd" class="form-control" required="required" type="password" id="password_confirm" oninput="check(this)" />
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