@auth
	@extends('layouts.layout')
	@section('content')
		<style type="text/css">
			#active{
				background-color: white;
			}

			
			#explore{
				background-color:#9980FA;
				color:white;
				pointer-events: none;
				display: none;
			}
		</style>
	    
	    <div class="row contain white-bg">
	      	<h2>Explore Ozz</h2>
	      	<p>
	            Add users you know
	            to your 0z circle(s) and view their posts
	            or message them.
	        </p>

	        <div class="center">
	        	<h2>
	        		<b>
	        			Suggested for you.
	        		</b>
	        	</h2>
	        	
	        	<div class="row lt-al">
	        		<div class='col-md-2'>
		        		<img 
							style="border-radius: 5%;width:100%;" 
							class="theme" 
							src="{{ asset('/profile-pics/pp.jpg') }}"
						>
						<h5>Username</h5>
						<h5>Bio</h5>
					</div>
					<div class='col-md-2'>
		        		<img 
							style="border-radius: 5%;width:100%;" 
							class="theme" 
							src="{{ asset('/imgs/ozz-app.png') }}"
						>
						<h5>Username</h5>
						<h5>Bio</h5>
					</div>
					<div class='col-md-2'>
		        		<img 
							style="border-radius: 5%;width:100%;" 
							class="theme" 
							src="{{ asset('/imgs/green.jpg') }}"
						>
						<h5>Username</h5>
						<h5>Bio</h5>
					</div>
	        	</div>
	        </div>
		</div>

	@endsection
@endauth