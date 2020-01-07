@auth
	@extends('layouts.layout')
	<style type="text/css">
	    #home_btn{
	        background-color:orange;
	        color:white;
	    }
	</style>
	@section('content')
		@if($post)
				
				<div class="container pb-60">	
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-7 lt-al mt-10">
							<div class="row">
								<h3>
									<a href="/user/{{ $post->author }}">
										<img  
											class="w-10" 
											src="{{ asset('/imgs/ozz-app.png') }}"
											alt="Avator" 
										>
										<strong class="blue">{{ $post->author }}</strong>
										<!-- <span class="green_dot"></span> -->
										&nbsp;
										<small>
											<i class="black fz-15">{{ $post->created_at->diffForHumans() }}</i>
										</small>
									</a>
								</h3>
							</div>

							<div class="row white-bg brbr-10 blbr-10 trbr-10">
								<div class="container">
									<h3>{{ $post->Post_content }}</h3>
									<br>
								</div>
							</div>

							<div class="row nlight-bg br-10">
								@if($post->Post_upload != "")
									<img id="post-pic" class="br-10 ml-50 mb-20"  src="/storage/uploads/{{ $post->Post_upload }}">
								@endif
							</div>


							<div class="row ml-50">
								<div class="col-sm-2">
									0
									<small>Likes</small>
									<br>
									<small>
										<a href="#">
											<button class="px100 btn btn-sm btn-outline-danger">
												Like
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
											<button class="px100 btn btn-sm btn-outline-info">Share</button>
										</a>
									</small>
								</div>

								<div class="col-sm-2">
									0
									<small>Dislikes</small>
									<br>
									<small>
										<a href="#">
											<button class="px100 btn btn-sm btn-outline-dark">
												Dislike
											</button>
										</a>
									</small>
								</div>
							</div>
							<hr>
								<h3 class="green ct-al"><strong>Comments</strong></h3>
							<hr>

							<div class="row">
								@php
							    	echo App\Http\Controllers\CommentController::show($post->id);
							    @endphp
	                        </div>
						</div>

						<div class="col-lg-2"></div>

					</div>	

				</div>

				
				<!-- <div class="row">
					<form method="POST" action="/destroy_post/{{ $post->id }}">
						@method('DELETE')
						@csrf
						<input type="submit" value="Delete" class="right btn btn-md btn-danger">						
					</form>		
				</div> -->
				
		@else
			<h3>Post cannot be accessed</h3>
		@endif
	@endsection
@endauth