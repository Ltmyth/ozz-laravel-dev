@auth
	@if(count($posts)>0)
		<div class="row">
			<div id="side" class="col-lg-3">
				<div class="row br-10 mt-30">
					<img class="br-10" class="w-50" src="/imgs/people.png" alt="">
				</div>
				
				<div class="row br-10 mt-30">
					<div class="container lt-al brbr-10">
						<button class="btn btn-lg btn-outline-primary rt px100">
							<i class="lnr lnr-menu"></i>
						</button>						
					</div>
				</div>

				<div class="row blue-bg br-10 mt-30">
					<hr>
						<h3 class="lt-al"><strong>Trending around you</strong>!</h3>
					<hr>
					<div class="container lt-al black light-bg brbr-10">
						<h4>#theohzLaunch</h4>
					</div>
				</div>					

				<div class="row blue-bg br-10 mt-30">
					<hr>
						<h3 class="lt-al">People you might know</h3>
					<hr>
					<div class="container lt-al black light-bg brbr-10">
						<br>
						<a href="{{ route('user') }}">
							<h4>
								<img 
									id="profile-pic" 
									class="theme w-20" 
									src="{{ asset('/imgs/ozz-app.png') }}"
									alt="Avator" 
								>
								O G
							</h4>
						</a>						
					</div>
				</div>


				<div class="row white-bg br-10 mt-30">
					<hr>
						<h3 class="lt-al green">Active friends</h3>
					<hr>
					<div class="container lt-al black light-bg br-10">
						<br>
						<a href="{{ route('user') }}">
							<h4>
								<img 
									id="profile-pic" 
									class="theme w-20" 
									src="{{ asset('/imgs/ozz-app.png') }}"
									alt="Avator" 
								>
								O p
							</h4>
						</a>						
					</div>
				</div>				

				<div class="row br-10 mt-30">
					<div class="container lt-al brbr-10">
						<button class="btn btn-lg btn-outline-primary rt px100">
							<i class="lnr lnr-menu"></i>
						</button>						
					</div>
				</div>
			</div>

			<!-- <div class="col-lg-1 rb rbr-10"></div> -->

			<div class="col-lg-9 lb lbr-10">
				<div class="container">
					<div class="row">
						<h2 class="lt-al">
							<i class="lnr lnr-users orange"></i> <b> Posts Around You!</b> 
						</h2>
					</div>

					<hr class="container col-lg-10">

					@foreach ($posts as $post)	
								
						<div class="row">
							<div class="col-lg-2 w-10">
								<div class="row">
									<a href="{{ route('user') }}">
										<img 
											id="profile-pic" 
											class="theme w-60 rt" 
											src="{{ asset('/imgs/ozz-app.png') }}"
											alt="Avator" 
										>
									</a>
								</div>
							</div>
							
							<div class="col-lg-9 w-100 nlight-bg br-10 lt-al">
								<div class="row white-bg">
									<a href="{{ route('user') }}">
										<h3 class="blue  w-100">
											<strong>{{ Auth::user()->name }}</strong>
											&nbsp;
											<small>
												<i class="black fz-15">{{ $post->created_at->diffForHumans() }}</i>
											</small>
										</h3>									
									</a>

								</div>

								<div class="row container">
									<a href="/posts_show/{{ $post->id }}">
										<p>
											<h3 class="black">
												{{ $post->Post_content }}
											</h3>
										</p>										
									</a>
								</div>
								<br>
								@if($post->Post_upload != "")
									<a href="/posts_show/{{ $post->id }}">							
										<img id="upload" class="br-10 mb-20" style="width:100%;height:30vh;background-color: #f9f9ff;" 
											src="{{ asset('storage/uploads/' . $post->Post_upload ) }}"
										>									
									</a>	
								@endif
							</div>
						</div>
						<hr class="col-lg-10">
					@endforeach
				</div>				
			</div>
		</div>
	@else
		<h3>
			<big><i class="lnr lnr-sad blue"></i></big>
			Post Something
			<big><i class="lnr lnr-sad blue"></i></big>
		</h3>
	@endif
@endauth