@auth
	@if($posts)
		<h2 class="center">
			<small class="black">POSTS AROUND U!</small>
		</h2>

		<hr class="container col-lg-5">
		@foreach ($posts as $post)
					<div class="row container col-lg-12">
						<div class="col-lg-1"></div>
						<div class="col-lg-3">
							<h4>
								<a href="{{ route('user') }}">
									<img 
										id="profile-pic" 
										style="border-radius: 50%;width:25%;" 
										class="theme" 
										src="{{ asset('/imgs/ozz-app.png') }}"
										alt="Avator" 
									>
									{{ Auth::user()->name }}									
								</a>
								<br>
								<small>
									<b>{{ $post->created_at->diffForHumans() }}</b>
								</small>
							</h4>							
						</div>

						<div class="col-lg-8">
							<a href="/posts_show/{{ $post->id }}">
								<p>
									<h3 style="width:100%;">
										{{ $post->Post_content }}
									</h3>
								</p>

								@if($post->Post_upload != "")							
									<img style="width:80%;border-radius:5%;" 
										src="/storage/uploads/{{ $post->Post_upload }}"
									>										
								@endif
							</a>
							<div class="col-sm-2">
								0
								<small>Likes</small>
								<br>
								<small>
									<a href="#">
										<button class="btn btn-sm btn-outline-warning" >
											<b>Like</b>
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
										<button class="btn btn-sm btn-outline-info" ><B>Share</B></button>
									</a>
								</small>
							</div>

							<div class="col-sm-2">
								0
								<small>Dislikes</small>
								<br>
								<small>
									<a href="#">
										<button class="btn btn-sm btn-outline-danger">
											<b class="red">Dislike</b>
										</button>
									</a>
								</small>
							</div>
							<div class="col-sm-2">
								0
								<small>Comments</small>
								<br>
								<small>
									<a href="#">
										<button class="btn btn-sm btn-success">
											<b class="white">Comment</b>
										</button>
									</a>
								</small>
							</div>
						</div>						
					</div>
					
					<hr class="container col-lg-9">

					<div class="row col-lg-12">
						
					</div>
					<hr class="col-lg-8">
					<!-- <form class="left-space contain">
						<textarea class="col-lg-8" style="width:80%;" required></textarea>
						<br><br>
						<input type="submit" class="btn btn-sm btn-success" value="Comment">
						<br>
					</form> -->
				<br><br>
		@endforeach
	@else
		<h3>No posts</h3>
	@endif
@endauth