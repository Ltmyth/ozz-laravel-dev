@auth
	@if($posts)
		<div style="border:0px none;" class="well">
			<h2 class="center">
					<strong class="black">AROUND U!</strong>
			</h2>
		</div>
		@foreach ($posts as $post)
			<div style="border-radius:3%;" class="well">
				<div class="left-space">
					<div class="row">
						<small>
							<b>{{ $post->created_at->diffForHumans() }}</b>
						</small>
					</div>

					<div class="row">
						<h4>
							<a href="{{ route('user') }}">
								<img 
									id="profile-pic" 
									style="border-radius: 50%;width:15%;" 
									class="theme" 
									src="{{ asset('/imgs/ozz-app.png') }}"
									alt="Avator" 
								>
								{{ Auth::user()->name }}
							</a>
						</h4>
					</div>

					<div class="well c_thru right-space">
						<a href="/posts_show/{{ $post->id }}">
							<div class="row">
								<div class="col-md-6">
									<p>
										<h3 style="width:100%;">
											{{ $post->Post_content }}
										</h3>
									</p>

									@if($post->Post_upload != "")							
										<img style="width:100%;border-radius:5%;" 
											src="/storage/uploads/{{ $post->Post_upload }}"
										>										
									@endif
								</div>
							</div>
						</a>
					</div>
					<hr>
					<div class="row center">
						<div class="row">
							<div class="col-sm-2">
								0
								<small>Likes</small>
								<br>
								<small>
									<a href="#">
										<button>
											<b class="green">Like</b>
										</button>
									</a>
								</small>
							</div>

							<div class="col-sm-2">
								0
								<small>Shares</small>
								<br>
								<small>
									<a href="#">
										<button><B>Share</B></button>
									</a>
								</small>
							</div>

							<div class="col-sm-2">
								0
								<small>Dislikes</small>
								<br>
								<small>
									<a href="#">
										<button>
											<b class="red">Dislike</b>
										</button>
									</a>
								</small>
							</div>
						</div>
					</div>
					<hr>
					<form class="left-space contain">
						<textarea class="theme white" style="width:80%;" required></textarea>
						<br><br>
						<input type="submit" class="btn btn-sm btn-success" value="Comment">
						<br>
					</form>
				</div>
				<br><br>	
			</div>
			
			
			<!-- <div class="left left-space">
				
			</div>

			<div class="left left-space">
				<small>
					
				</small>
				&nbsp;
				
				
				
			</div>
			
			<div class="d-flex justify-content-center">
				<h4 class="left"></h4>	
				<div class="col-md-6">
						
					</a>
					<br><br>
					
				</div>
						
			</div> -->
		@endforeach
	@else
		<h3>No posts</h3>
	@endif
@endauth