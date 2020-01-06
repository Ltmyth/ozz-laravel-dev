@extends('layouts.layout')
@auth	
	@section('content')
		<div class="container">
			@if($profile)
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
							<h2 ><strong>{{ $profile->name }}</strong> <span class="green_dot"></span></h2>
							<hr>
							<a href="/inbox/{{ $profile->name }}" onclick="javascript:document.getElementById('preloader').style.display='block';">
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
							<div class="row pl-30 pt-20 blbr-10 brbr-10 light-bg">
								<ul style="list-style:none;" class="lt-al">
									<li>
										<h4 class="white"><big><i><p>{{ $profile->bio }}</p></i></big></h4>
									</li>
								</ul>
							</div>
							<hr>
							<!-- <h3>
								<span>
									<i class="lnr lnr-envelope orange">
									</i>
								</span>
								<strong>{{ $profile->email }}</strong>
							</h3>
							<hr> --><!-- 
							<h3 class="blue">
								<i class="lnr lnr-gift orange">
								</i> Birthday
							</h3>							
							<hr> -->
							<h3>
								
								<i class="lnr lnr-phone orange">
								</i>
								<strong>0{{ $profile->phone }}</strong>
							</h3>
							<hr>
							<h3 >
								<i class="lnr lnr-pushpin orange">
								</i> {{ $profile->community }}
							</h3>							
						</div>
					</div>
				</div>	
				<div class="nlight-bg col-lg-8 pt-20 lb">
					<div class="row tb">
						<div class="container">
							<h2><b>Posts</b></h2>
							<hr>
							@php
						    	echo App\Http\Controllers\PostsController::individual_posts($profile->name);
						    @endphp
						</div>
					</div>
				</div>
			</div>
			@else
				<div class="container">
					<small>Profile Not Available</small>
				</div>
			@endif	
		</div>
	
	@endsection
@endauth	
