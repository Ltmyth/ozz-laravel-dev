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
			background-color:#5f27cd;
			color:white;
			pointer-events: none;
		}

		img{
			border-radius:5%;
			background:cover;
		}
	</style>
	<img style="width:50%;" class="curve" src="{{ asset('/imgs/hotellong.jpeg') }}">	
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
		<b>Hostels</b>
	</h3>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<h4>
				<a href="{{ route('ss_hostels') }}">
					<button class="btn btn-md btn-default blue-bg pt-20 pb-20">
						<img src="{{ asset('/imgs/singlesex1.jpeg') }}">
						<br>
						<strong>Single Sex</strong>
					</button>
				</a>
			</h4>	
		</div>
		<div class="col-md-4">
			<h4>
				<a href="/ms_hostels/">
					<button class="btn btn-md btn-default blue-bg pt-20 pb-20">
						<img  src="{{ asset('/imgs/mixedsex.png') }}">
						<br>
						<strong>Mixed Sex</strong>
					</button>
				</a>
			</h4>	
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
		<b>Hotels</b>
	</h3>
	<hr>
	<div class="row">		
		<br><br>
		<div class="col-md-4">
			<h4>
				<a href="#">
					<button class="btn btn-lg btn-default blue-bg pt-20 pb-20">
					<img src="{{ asset('/imgs/hotelshort.jpeg') }}">
					<br>
						<strong>Single room</strong>
					</button>
				</a>
			</h4>	
		</div>
		<div class="col-md-4">
			<h4>
				<a href="#">
					<button class="btn btn-lg btn-default blue-bg pt-20 pb-20">
						<img style="width:75%;" src="{{ asset('/imgs/singlebedapt.jpeg') }}">
						<br>
						<strong>Double or more rooms</strong>
					</button>
				</a>
			</h4>	
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
		<b>Appartments</b>
	</h3>
	<hr>
	<div class="row">		
		<br><br>
		<div class="col-md-4">
			<h4>
				<a href="/sb_appartments/">
					<button class="btn btn-lg btn-default blue-bg pt-20 pb-20">
					<img src="{{ asset('/imgs/hotelshort.jpeg') }}">
					<br>
						<strong>Single room</strong>
					</button>
				</a>
			</h4>	
		</div>
		<div class="col-md-4">
			<h4>
				<a href="/db_appartments/">
					<button class="btn btn-lg btn-default blue-bg pt-20 pb-20">
						<img style="width:75%;" src="{{ asset('/imgs/singlebedapt.jpeg') }}">
						<br>
						<strong>Double or more rooms</strong>
					</button>
				</a>
			</h4>	
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
	<h3 class="center">
		<b>Motels</b>
	</h3>
	<hr>
	<div class="row">		
		<br><br>
		<div class="col-md-4">
			<h4>
				<a href="#">
					<button class="btn btn-lg btn-default blue-bg pt-20 pb-20">
					<img src="{{ asset('/imgs/hotelshort.jpeg') }}">
					<br>
						<strong>Single room</strong>
					</button>
				</a>
			</h4>	
		</div>
		<div class="col-md-4">
			<h4>
				<a href="#">
					<button class="btn btn-lg btn-default blue-bg pt-20 pb-20">
						<img style="width:75%;" src="{{ asset('/imgs/singlebedapt.jpeg') }}">
						<br>
						<strong>Double or more rooms</strong>
					</button>
				</a>
			</h4>	
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
		<b>Lodgings</b>
	</h3>
	<hr>
	<div class="row">		
		<br><br>
		<div class="col-md-4">
			<h4>
				<a href="#">
					<button class="btn btn-lg btn-default blue-bg pt-20 pb-20">
					<img src="{{ asset('/imgs/hotelshort.jpeg') }}">
					<br>
						<strong>Single room</strong>
					</button>
				</a>
			</h4>	
		</div>
		<div class="col-md-4">
			<h4>
				<a href="#">
					<button class="btn btn-lg btn-default blue-bg pt-20 pb-20">
						<img style="width:75%;" src="{{ asset('/imgs/singlebedapt.jpeg') }}">
						<br>
						<strong>Double or more rooms</strong>
					</button>
				</a>
			</h4>	
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


@endsection