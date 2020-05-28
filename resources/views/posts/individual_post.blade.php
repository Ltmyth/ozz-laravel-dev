@auth
	
	<div class="container">
		
		@if(count($posts)>0)	
			@foreach ($posts as $post)	
						
				<div class="row bb">
					<div class="col-lg-2 w-10">
						<div class="row">
							<a href="javascript:void(0)" onclick="location.href='/user';document.getElementById('preloader').style.display='block';">
								<img 
									id="profile-pic" 
									class="theme rt w-40" 
									src="{{ asset('/imgs/ozz-app.png') }}"
									alt="Avator" 
								>
							</a>
						</div>
					</div>
					
					<div class="col-lg-8 w-100 nlight-bg br-10 lt-al">
						<div class="row  blbr-10">
							<a href="javascript:void(0)" onclick="location.href='/user//{{ $post->author }}';document.getElementById('preloader').style.display='block';">
								<h3 class="blue  w-100">
									<strong>{{ $post->author }}</strong>
									<span class="orange_dot"></span>
									&nbsp;
									<small>
										<i class="black fz-15">{{ $post->created_at->diffForHumans() }}</i>
									</small>
									&nbsp;&nbsp;									
								</h3>									
							</a>
							@if($post->author == Auth::user()->name)
							<form  method="POST">
								@method('DELETE')
                				@csrf
								<button type="submit" onclick="return confirm('Confirm delete!')" formaction="/destroy_post/{{ $post->id }}"  class="btn btn-sm btn-danger">
									<i class="lnr lnr-trash"></i>
								</button>
							</form>
							@endif
						</div>

						<a href="javascript:void(0)" onclick="location.href='/posts_show/{{ $post->id }}';document.getElementById('preloader').style.display='block';">
							<div class="row container white-bg pt-20 brbr-10 blbr-10 trbr-10">
							
								<p>
									<h3 class="black ml-15">
										{!! $post->Post_content !!}
									</h3>
								</p>
							</div>										
						</a>
						
						@if($post->Post_upload != "")
							<a href="/posts_show/{{ $post->id }}" onclick="javascript:document.getElementById('preloader').style.display='block';">	
								<div class="row col-lg-7">						
									<img id="upload" class="brbr-10 blbr-10 w-80 mb-20"
										src="{{ asset('media/' . $post->Post_upload ) }}"
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
									<form id="likeForm"  method="POST" action="/like" >
										@csrf
										<input type="hidden" name="post_id" value="{{$post_id}}">
										<input type="number" class="hidden" name="liked_by" value="{{ Auth::user()->id }}">
										<br>
										<button  
										id="like{{ $post->id }}" class="btn btn-sm btn-outline-danger px100" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-heart"></i>
										</button>
										<br>
										<big class="container red">Like</big>
									</form>	
								@endif
								@if($likes>=1)
									<form id="unlikeForm" method="POST" action="/unlike/{{$post_id}}" >
										@csrf
										<input type="hidden"  value="id">
										<input type="number" class="hidden" value="{{ Auth::user()->id }}">
										<br>
										<button 
										id="like{{ $post->id }}" class="btn btn-sm btn-danger px100" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-heart"></i> <b class="white">{{ $likes}}</b>
										</button>
										<br>
										<big class="container red">Likes</big>
									</form>														
								@endif
								<!-- end like  -->



								<!-- share button -->
								@if($shares<=0)
									<form id="shareForm" method="POST" action="/share">
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="shared_by" value="{{ Auth::user()->id }}">
										<br>
										<button  type="submit"  
										id="share{{ $post->id }}" class="btn btn-sm btn-outline-info px100 ml-5" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-sync"></i>
										</button>
										<br>
										<big class="container text-info">Share</big>
									</form>
								@endif
								@if($shares>=1)
									<form id="unshareForm" method="POST" action="/unshare/{{$post_id}}" >
										@csrf
										<input type="hidden"  value="id">
										<input type="number" class="hidden" value="{{ Auth::user()->id }}">
										<br>
										<button 
										id="share{{ $post->id }}" class="btn btn-sm btn-info px100 ml-5" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-sync"></i> <b class="white">{{ $shares}}</b>
										</button>
										<br>
										<big class="container text-info">Shares</big>
									</form>
								@endif
								<!-- end share -->


								<!-- comment btn -->
								@if($comments<=0)
									<form >
										<br>
										<button id="commentbtn{{ $post->id }}" type="button"
										 class="btn btn-sm btn-outline-success  px100 ml-5">
											<i class="lnr lnr-bubble"></i>
										</button>
										<br>
										<big class="container green">Comment</big>
									</form>

								@endif


								@if($comments>=1)
									<form id="uncommentForm" >
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="comment_by" value="{{ Auth::user()->id }}">
										<br>
										<button  
										id="comment{{ $post->id }}" class="btn btn-sm btn-success  px100 ml-5" disabled>
											<i class="lnr lnr-bubble"></i> <b class="white">{{ $comments }}</b>
										</button>
										<br>
										<a href="/posts_show/{{ $post->id }}" onclick="javascript:document.getElementById('preloader').style.display='block';" >
											<big class="container green">Comments</big>
										</a>
									</form>
								@endif
								<!-- end comment -->

								<!-- dislike -->
								@if($dislikes<=0)
									<form id="dislikeForm" method="POST" action="/dislike">
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="disliked_by" value="{{ Auth::user()->id }}">
										<br>
										<button type="submit"  
										id="dislike{{ $post->id }}" class="btn btn-sm btn-outline-dark px100 ml-5" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-thumbs-down"></i>
										</button>
										<br>
										<big class="container black">Dislike</big>
									</form>
								@endif
								@if($dislikes>=1)
									<form id="undislikeForm" method="POST" action="/undislike/{{$post_id}}" >
										@csrf
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="undislike_by" value="{{ Auth::user()->id }}">
										<br>
										<button type="submit" 
										id="dislike{{ $post->id }}" class="btn btn-sm btn-dark  px100 ml-5" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-thumbs-down"></i> <b class="white">{{ $dislikes }}</b>
										</button>
										<br>
										<big class="container black">Dislikes</big>
									</form>
								@endif
								<!-- end dislike -->
							</div>

							<!-- comment area -->
							@if($comments<=0)
								<form id="comment{{ $post->id }}" method="POST" action="/comment">
									@csrf
									<div class="row">
										<input type="hidden" name="post_id" value="{{$post->id}}">
										<input type="hidden" name="comment_by" value="{{ Auth::user()->id }}">
										<textarea class="form-control nlight-bg w-90" name="comment" required></textarea>
										&nbsp; &nbsp;
										<input type="submit" class="btn btn-sm btn-success" value="Comment" >
										<br>
									</div>
								</form>
							@endif
							<br><br>
							<!-- end comment area -->
						</div>
					</div>
					<br><br>
				</div>
			@endforeach
		</div>	
	@else
		<div class="container">
			<a href="/home">
				<button class="btn btn-lg btn-outline-info">Look for posts</button>
			</a>
			<div class="section-gap"></div>
		</div>
	@endif
@endauth