@auth
@extends('layouts.layout')
<style type="text/css">
    #home_btn{
        background-color:#34ace0;
        color:white;
    }
</style>
@section('content')
	@if($post)
		<div class="c_thru  contain">
			<h3>
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
			</h3>
			<br><br>
			<div class="well">
				<div class="row">
					<div class="col-md-7">
						<small>
						At {{ $post->created_at }}
						</small>
						<h3>{{ $post->Post_content }}</h3>	
					</div>
				</div>

				@if($post->Post_upload != "")
				<div class="row">
					<div class="center col-md-8">
						<img id="post-pic" style="width:100%;" src="/storage/uploads/{{ $post->Post_upload }}">
					</div>
				</div>
				@endif
			</div>
			<!-- <div class="row">
				<form method="POST" action="/destroy_post/{{ $post->id }}">
					@method('DELETE')
					@csrf
					<input type="submit" value="Delete" class="right btn btn-md btn-danger">						
				</form>		
			</div> -->
			
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
					<br><br>
				</form>
		</div>
		<br><br>
	@else
		<h3>Post cannot be accessed</h3>
	@endif
@endsection
@endauth