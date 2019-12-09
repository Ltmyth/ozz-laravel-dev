@auth
	
	<div class="container">
		<div class="row bb brbr-10">
			<div class="container">
				<h2 class="ct-al">
					<b>On the <b class="orange">oh</b><b>z</b> around You</b> 
				</h2>
			</div>
		</div>

		@if(count($posts)>0)	
			@foreach ($posts as $post)	
						
				<div class="row bb">
					<div class="col-lg-2 w-10">
						<div class="row">
							<a href="{{ route('user') }}">
								<img 
									id="profile-pic" 
									class="theme rt" 
									src="{{ asset('/imgs/ozz-app.png') }}"
									alt="Avator" 
								>
							</a>
						</div>
					</div>
					
					<div class="col-lg-7 w-100 nlight-bg br-10 lt-al">
						<div class="row white-bg blbr-10">
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

						<a href="/posts_show/{{ $post->id }}">
							<div class="row container pt-20 trbr-10">
							
								<p>
									<h3 class="black ml-15">
										{{ $post->Post_content }}
									</h3>
								</p>
							</div>										
						</a>
						
						@if($post->Post_upload != "")
							<a href="/posts_show/{{ $post->id }}">	
								<div class="row">						
									<img id="upload" class="br-10 mb-20"
										src="{{ asset('storage/uploads/' . $post->Post_upload ) }}"
									>		
								</div>							
							</a>	
						@endif
				        
						<?php  
							$post_id = $post->id; 
							$likes = $post->likes; 
							$dislikes = $post->dislikes;
							$shares = $post->shares;
							$comments = $post->comments;
						?>
						<div id="modal" class="container mb-10">
							<div class="row pb-20" >
								<!-- like post -->
								@if($likes<=0)
									<form id="likeForm"  method="POST" action="like" >
										@csrf
										<input type="hidden" name="post_id" value="{{$post_id}}">
										<input type="number" class="hidden" name="liked_by" value="{{ Auth::user()->id }}">
										<br>
										<button  
										id="like{{ $post->id }}" class="btn btn-sm btn-outline-danger px100">
											<i class="lnr lnr-heart"></i>
										</button>
									</form>	
								@endif
								@if($likes>=1)
									<form id="unlikeForm" method="POST" action="/unlike/{{$post_id}}" >
										@csrf
										<input type="hidden"  value="id">
										<input type="number" class="hidden" value="{{ Auth::user()->id }}">
										<br>
										<button 
										id="like{{ $post->id }}" class="btn btn-sm btn-danger px100">
											<i class="lnr lnr-heart"></i> <b class="white">{{ $likes}}</b>
										</button>
									</form>														
								@endif
								<!-- end like  -->



								<!-- share button -->
								@if($shares<=0)
									<form id="shareForm" method="POST" action="share">
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="shared_by" value="{{ Auth::user()->id }}">
										<br>
										<button type="submit"  
										id="share{{ $post->id }}" class="btn btn-sm btn-outline-info px100 ml-5">
											<i class="lnr lnr-sync"></i>
										</button>
									</form>
								@endif
								@if($shares>=1)
									<form id="unshareForm" method="POST" action="/unshare/{{$post_id}}" >
										@csrf
										<input type="hidden"  value="id">
										<input type="number" class="hidden" value="{{ Auth::user()->id }}">
										<br>
										<button 
										id="share{{ $post->id }}" class="btn btn-sm btn-info px100 ml-5">
											<i class="lnr lnr-sync"></i> <b class="white">{{ $shares}}</b>
										</button>
									</form>
								@endif
								<!-- end share -->


								<!-- comment btn -->
								@if($comments<=0)
									<form id="commentForm" method="POST" action="comment">
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="comment_by" value="{{ Auth::user()->id }}">
										<br>
										<button type="submit" 
										id="comment{{ $post->id }}" class="btn btn-sm btn-outline-success  px100 ml-5">
											<i class="lnr lnr-bubble"></i>
										</button>
									</form>
								@endif
								@if($comments>=1)
									<form id="uncommentForm" method="POST" action="/uncomment/{{$post_id}}" >
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="comment_by" value="{{ Auth::user()->id }}">
										<br>
										<button type="submit" 
										id="comment{{ $post->id }}" class="btn btn-sm btn-success  px100 ml-5">
											<i class="lnr lnr-bubble"></i> <b class="white">{{ $comments }}</b>
										</button>
									</form>
								@endif
								<!-- end comment -->

								<!-- dislike -->
								@if($dislikes<=0)
									<form id="dislikeForm" method="POST" action="dislike">
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="disliked_by" value="{{ Auth::user()->id }}">
										<br>
										<button type="submit"  
										id="dislike{{ $post->id }}" class="btn btn-sm btn-outline-dark px100 ml-5">
											<i class="lnr lnr-thumbs-down"></i>
										</button>
									</form>
								@endif
								@if($dislikes>=1)
									<form id="undislikeForm" method="POST" action="/undislike/{{$post_id}}" >
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="undislike_by" value="{{ Auth::user()->id }}">
										<br>
										<button type="submit" 
										id="dislike{{ $post->id }}" class="btn btn-sm btn-dark  px100 ml-5">
											<i class="lnr lnr-thumbs-down"></i> <b class="white">{{ $dislikes }}</b>
										</button>
									</form>
								@endif
								<!-- end dislike -->
							</div>
						</div>
					</div>
					<br><br>
				</div>
			@endforeach
		</div>	
	@else
		<div class="container">
			<br>
			<h1 class="ct-al">
				<p><b class="orange">No known person!</b></p>
			</h1>
			<h1>
				<big><i class="lnr lnr-sad blue"></i></big>
			</h1>
			<div class="section-gap"></div>
		</div>
	@endif
@endauth