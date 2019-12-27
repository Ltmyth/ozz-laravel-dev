@auth
	
	<div class="container">
		
		@if(count($comments)>0)	
			@foreach ($comments as $comment)	
						
				<div class="row bb">
					<div class="col-lg-2 w-10">
						<div class="row">
							<a href="javascript:void(0)" onclick="location.href='/user/{{ $comment->author }}';document.getElementById('preloader').style.display='block';">
								<img 
									id="profile-pic" 
									class="theme rt w-40" 
									src="{{ asset('/imgs/ozz-app.png') }}"
									alt="Avator" 
								>
							</a>
						</div>
					</div>
					
					<div class="col-lg-10 w-100 nlight-bg br-10 lt-al">
						<div class="row  blbr-10">
							<a href="javascript:void(0)" onclick="location.href='/user/{{ $comment->author }}';document.getElementById('preloader').style.display='block';">
								<h3 class="blue  w-100">
									<strong>{{ $comment->author }}</strong>

									@if(($comment->author)->isOnline())
									    user is online!!
									@endif
									<span class="orange_dot"></span>
									&nbsp;
									<small>
										<i class="black fz-15">{{ $comment->created_at->diffForHumans() }}</i>
									</small>
								</h3>									
							</a>

						</div>

						<a >
							<div class="row container light-bg pt-20 brbr-10 blbr-10 trbr-10">
							
								<p>
									<h3 class="white ml-15">
										{{ $comment->comment }}
									</h3>
								</p>
							</div>										
						</a>
						
						@if($comment->upload != "")
							<a >	
								<div class="row col-lg-11">						
									<!-- <img id="upload" class="brbr-10 blbr-10 mb-20"
										src="{{ asset('storage/uploads/' . $post->Post_upload ) }}"
									> -->		
								</div>							
							</a>	
						@endif
				        
						<?php  
							$comment_id = $comment->id; 
							$likes = 0; 
							$dislikes = 0;
							$shares = 0;
							$comments = 0;
						?>
						<div id="modal" class="container mb-10">
							<div class="row pb-20" >
								<!-- like comment -->
								@if($likes<=0)
									<form id="likeForm"  method="POST" action="like" >
										@csrf
										<input type="hidden" name="comment_id" value="{{$comment_id}}">
										<input type="number" class="hidden" name="liked_by" value="{{ $comment->author }}">
										<br>
										<button  
										id="like{{ $comment->id }}" class="btn btn-sm btn-outline-danger px100" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-heart"></i>
										</button>
										<br>
										<big class="container red">Like</big>
									</form>	
								@endif
								@if($likes>=1)
									<form id="unlikeForm" method="POST" action="/unlike/{{$comment_id}}" >
										@csrf
										<input type="hidden"  value="id">
										<input type="text" class="hidden" value="{{ $comment->author }}">
										<br>
										<button 
										id="like{{ $comment->id }}" class="btn btn-sm btn-danger px100" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-heart"></i> <b class="white">{{ $likes}}</b>
										</button>
										<br>
										<big class="container red">Likes</big>
									</form>														
								@endif
								<!-- end like  -->



								<!-- share button -->
								@if($shares<=0)
									<form id="shareForm" method="POST" action="share">
										@csrf
										<input type="hidden" name="comment_id" value="{{$comment->id}}">
										<input type="hidden" name="shared_by" value="{{ $comment->author }}">
										<br>
										<button  type="submit"  
										id="share{{ $comment->id }}" class="btn btn-sm btn-outline-info px100 ml-5" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-sync"></i>
										</button>
										<br>
										<big class="container text-info">Share</big>
									</form>
								@endif
								@if($shares>=1)
									<form id="unshareForm" method="POST" action="/unshare/{{$comment->id}}" >
										@csrf
										<input type="hidden"  value="id">
										<input type="number" class="hidden" value="{{ $comment->author }}">
										<br>
										<button 
										id="share{{ $comment->id }}" class="btn btn-sm btn-info px100 ml-5" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-sync"></i> <b class="white">{{ $shares}}</b>
										</button>
										<br>
										<big class="container text-info">Shares</big>
									</form>
								@endif
								<!-- end share -->


								
								<!-- dislike -->
								@if($dislikes<=0)
									<form id="dislikeForm" method="POST" action="dislike">
										@csrf
										<input type="hidden" name="comment_id" value="{{$comment->id}}">
										<input type="hidden" name="disliked_by" value="{{ $comment->author }}">
										<br>
										<button type="submit"  
										id="dislike{{ $comment->id }}" class="btn btn-sm btn-outline-dark px100 ml-5" onclick="javascript:document.getElementById('preloader').style.display='block';">
											<i class="lnr lnr-thumbs-down"></i>
										</button>
										<br>
										<big class="container black">Dislike</big>
									</form>
								@endif
								@if($dislikes>=1)
									<form id="undislikeForm" method="POST" action="/undislike/{{$comment->id}}" >
										@csrf
										<input type="hidden" name="comment_id" value="{{$comment->id}}">
										<input type="hidden" name="undislike_by" value="{{ $comment->author }}">
										<br>
										<button type="submit" 
										id="dislike{{ $comment->id }}" class="btn btn-sm btn-dark  px100 ml-5" onclick="javascript:document.getElementById('preloader').style.display='block';">
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
								<form id="comment{{ $comment->id }}" method="POST" action="/comment">
									@csrf
									<div class="row">
										<input type="hidden" name="comment_id" value="{{$comment->id}}">
										<input type="hidden" name="comment_by" value="{{ $comment->author }}">
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
			<br>
			<h1 class="ct-al">
				<p><b class="orange">Be the first to comment!</b></p>
			</h1>
			<h1>
				<big><i class="lnr lnr-happy blue"></i></big>
			</h1>
			<div class="section-gap"></div>
		</div>
	@endif
@endauth