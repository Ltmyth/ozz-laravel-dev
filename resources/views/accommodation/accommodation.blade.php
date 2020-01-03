@extends('layouts.layout')

@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}


		#utilities{
			background-color:#34ace0;
		}

		#accoms_btn{
			background-color:orange;
			color:white;
			pointer-events: none;
		}
	</style>
	<br><br>
	<img class="curve w-20" src="{{ asset('/imgs/room.png') }}">	
	<br><br>
	<h2><b>Accommodation Services</b></h2>

	<hr class="container col-lg-8">
	<form>
		<label>
			Location
		</label>
		<select class="form-control container col-lg-8">
			<option>Mukono</option>
			<option disabled>Kampala</option>
		</select>
	</form>
	<br><br>
	<h3 class="center">
		<b class="text-uppercase">Hostels</b>
	</h3>
	<hr>
	<div class="row pb-30">
		<div class="col-md-4">
			<a href="{{ route('ss_hostels') }}">
				<img class="w-40" src="{{ asset('/imgs/single.png') }}">	
				<br><br>
				<h3 class="black"><strong>Single Sex</strong></h3>
			</a>	
		</div>
		<div class="col-md-4">
			<a href="/ms_hostels/">
				<img class="w-30" src="{{ asset('/imgs/unisex.png') }}">
				<br><br>
				<h3 class="black" ><strong>Mixed Sex</strong></h3>
			</a>
		</div>

		<div class="col-md-3">
			<a href="/hostels/">
				<button class="btn btn-lg btn-default c_thru">
					<i style="font-size:75px;" class="lnr lnr-chevron-right-circle"></i>
					<br>
					Explore All
				</button>
			</a>
		</div>
	</div>

	<hr>
	<h3 class="center">
		<b class="text-uppercase">Appartments</b>
	</h3>
	<hr>
	<div class="row pb-30">		
		<br><br>
		<div class="col-md-4">
			<a href="/sb_appartments/">
				<img class="w-80" src="{{ asset('/imgs/single_appartment.png') }}">	
				<br><br>
				<h3 class="black"><strong>Single room</strong></h3>
			</a>
		</div>

		<div class="col-md-4">
			<a href="/db_appartments/">
				<img class="w-50" src="{{ asset('/imgs/double_appartment.png') }}">	
				<br><br>
				<h3 class="black"><strong>Double or more rooms</strong></h3>
			</a>
		</div>

		<div class="col-md-3">
			<a href="/all_appartments/">
				<button class="btn btn-lg btn-default c_thru">
					<i style="font-size:75px;" class="lnr lnr-chevron-right-circle"></i>
					<br>
					Explore All
				</button>
			</a>
		</div>
	</div>

	<hr>
	<!-- <h3 class="center">
		<b class="text-uppercase">Hotels</b>
	</h3>
	<hr>
	<div class="row pb-30">		
		<br><br>
		<div class="col-md-4">
			<a href="#">
				<img class="w-60" src="{{ asset('/imgs/hotel-short.png') }}">
				<br><br>
				<h3 class="black" ><strong>Short stay</strong></h3>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
				<img  class="w-70" src="{{ asset('/imgs/hotel_long.png') }}">
				<br><br>
				<h3 class="black" ><strong>Long stay</strong></h3>
			</a>
		</div>

		<div class="col-md-3">
			<a href="#">
				<button class="btn btn-lg btn-default c_thru">
					<i style="font-size:75px;" class="lnr lnr-chevron-right-circle"></i>
					<br>
					Explore All
				</button>
			</a>
		</div>
	</div> -->

	<!-- <hr>
	<h3 class="center">
		<b>Motels</b>
	</h3>
	<hr>
	<div class="row pb-30">		
		<br><br>
		<div class="col-md-4">
			<a href="#">
				<img class="w-70" src="{{ asset('/imgs/hotelshort.jpeg') }}">	
				<br><br>
				<h3 class="black"><strong>Single room</strong></h3>
			</a>
		</div>

		<div class="col-md-4">
			<a href="#">
				<img style="width:75%;" src="{{ asset('/imgs/singlebedapt.jpeg') }}">
				<br><br>
				<h3 class="black"><strong>Double or more rooms</strong></h3>
			</a>
		</div>

		<div class="col-md-3">
			<a href="#">
				<button class="btn btn-lg btn-default c_thru">
					<i style="font-size:75px;" class="lnr lnr-chevron-right-circle"></i>
					<br>
					Explore All
				</button>
			</a>
		</div>
	</div>

	<hr>
	<h3 class="center">
		<b class="text-uppercase">Lodgings</b>
	</h3>
	<hr>
	<div class="row">		
		<br><br>
		<div class="col-md-4">
			<a href="#">
				<img class="w-70" src="{{ asset('/imgs/hotelshort.jpeg') }}">	
				<br><br>
				<h3 class="black"><strong>Single room</strong></h3>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
				<img style="width:75%;" src="{{ asset('/imgs/singlebedapt.jpeg') }}">	
				<br><br>
				<h3 class="black"><strong>Double or more rooms</strong></h3>
			</a>
		</div>

		<div class="col-md-3">
			<a href="#">
				<button class="btn btn-lg btn-default c_thru ">
					<i style="font-size:75px;" class="lnr lnr-chevron-right-circle"></i>
					<br>
					Explore All
				</button>
			</a>
		</div>
	</div>
 -->

@endsection