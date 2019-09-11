@auth
	@if(count($posts)>0)
		<h2 class="center">
			<small class="black">POSTS AROUND U!</small>
		</h2>

		<hr class="container col-lg-5">
		@foreach ($posts as $post)
					<div class="container col-lg-12">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-3">
								<h4>

									<small>
										<b>{{ $post->created_at->diffForHumans() }}</b>
									</small>
									<br>
									
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
									
								</h4>							
							</div>
						</div>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-lg-10">
								<a href="/posts_show/{{ $post->id }}">
									<div class="container col-md-8 orange-bg op7 well lt-al">
										<p>
											<h3 class="blue">
												{{ $post->Post_content }}
											</h3>
										</p>

										@if($post->Post_upload != "")							
											<img style="width:100%;background-color: #f9f9ff;" 
												src="/storage/uploads/{{ $post->Post_upload }}"
											>										
										@endif
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="row col-lg-12">
						<div class="col-lg-2"></div>
						<div class="col-sm-2">
							0
							<small>Likes</small>
							<br>
							<small>
								<a href="#">
									<button class="px100 btn btn-sm btn-outline-danger">
										<i class="lnr lnr-heart"> Like</i>
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
									<button class="px100 btn btn-sm btn-outline-primary">
										<i class="lnr lnr-redo"> Share</i>
									</button>
								</a>
							</small>
						</div>

						<div class="col-sm-2">
							0
							<small>Dislikes</small>
							<br>
							<small>
								<a href="#">
									<button class="px100 btn btn-sm btn-outline-warning">
										<i class="lnr lnr-thumbs-down"> Dislike</i>
									</button>
								</a>
							</small>
						</div>
						<div class="col-sm-2">
							0
							<small>Comments</small>
							<br>
							<small>
								<button id="comment_btn" onclick="comment()" class="px100 btn btn-sm btn-outline-success">
									<i class="lnr lnr-bubble"> Comment</i>
								</button>
							</small>
						</div>
					</div>
					<hr class="col-lg-9">
					<form id="comment" style="display:none;">
						<textarea class="col-lg-8" style="width:80%;" required></textarea>
						<br><br>
						<input type="submit" class="btn btn-sm btn-success lt-al" value="Comment">
						<br>
					</form>
				<br><br>
		@endforeach
	@else
		<h3>
			<big><i class="lnr lnr-sad blue"></i></big>
			Post Something
			<big><i class="lnr lnr-sad blue"></i></big>
		</h3>
	@endif
@endauth