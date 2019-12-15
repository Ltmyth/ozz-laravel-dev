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
							class="theme w-50 mt-20" 
							src="{{ asset('/imgs/ozz-app.png') }}"
							alt="Avator" 
						>						
					</div>

					<div class="row">
						<div class="container lt-al">
							<hr>
							<h2 ><strong>{{ Auth::user()->name }}</strong></h2>
							<hr>
							<h3>Status: <strong class="green">Online</strong></h3>
							<hr>
							<a href="/inbox" onclick="javascript:document.getElementById('preloader').style.display='block';">
								<button class="btn btn-lg btn-success  mr-20">
									<i class="glyphicon glyphicon-send ">Chat</i>
								</button>
							</a>

							<a href="/sms" onclick="javascript:document.getElementById('preloader').style.display='block';">
								<button class="btn btn-lg btn-warning">
									SMS
								</button>
							</a>

							<hr>
							<h4 class="blue">Posts : <b class="red">0</b></h4>
							<hr>
							<div class="row pl-30 pt-20 blbr-10 brbr-10 light-bg">
								<ul style="list-style:none;" class="lt-al">
									<li>
										<h4 class="white"><big><i><p>Some bio</p></i></big></h4>
									</li>
								</ul>
							</div>
							<hr>
							<h3 class="red">
								<i class="lnr lnr-gift orange">
								</i> Birthday
							</h3>
							
							<hr>
							<h3>
								<span>
									<i class="lnr lnr-envelope orange">
									</i>
								</span>
								<strong>{{ Auth::user()->email }}</strong>
							</h3>
							<hr>
							<h3>
								
								<i class="lnr lnr-phone orange">
								</i>
								<strong>+256-7xx-xxxx</strong>
							</h3>
							<hr>
							<h3 >
								<i class="lnr lnr-pushpin orange">
								</i> Community
							</h3>
						</div>
					</div>
				</div>	
				<div class="nlight-bg col-lg-7 pt-20 lb">
					<div class="row">
						<div class="container">
							<hr>
							<h2><b>Posts</b></h2>
							<hr>
							<h4 class="black">No Post yet</h4>
						</div>
					</div>
				</div>
			</div>	
		</div>

	@endsection
@endauth	
	