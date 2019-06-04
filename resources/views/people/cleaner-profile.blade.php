@extends('layouts.layout')
@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}

		#utilities{
			background-color:#34ace0;
		}

		#cleaning{
			background-color:#34ace0;
			pointer-events: none;
		}

		#cleaning_btn{
			 background-color:#34ace0;
			color:white;
			pointer-events: none;
		}
	</style>
    <!-- right side -->
    <div class="row contain white-bg">
    	<div class="row center">

      		<img 
				id="profile-pic" 
				style="border-radius: 50%;width:20%;" 
				class="theme" 
				src="{{ asset('/imgs/ozz-app.png') }}"
				alt="Avator" 
			>	
    		<br>
      		<h2>
      			<strong>
					<b>Bob</b>
				</strong>
			</h2>
      	</div>
      	
		<div class="well center">
			<div class="col-sm-4">
				Pricing
				<hr>
			</div>
			<div class="col-sm-4">
				Rating
				<hr>
			</div>
		</div>
		
	</div>
	
@endsection