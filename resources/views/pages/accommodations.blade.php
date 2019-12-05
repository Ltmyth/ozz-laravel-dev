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
			background-color:#9980FA;
			color:white;
			pointer-events: none;
		}

		img{
			border-radius:5%;
		}
	</style>
    <!-- right side -->
    <div class="row contain white-bg">
    	<div class="row center">
      		<img style="width:50%;" class="curve" src="{{ asset('/imgs/hotellong.jpeg') }}">	
    		<br>
      		<h2><strong>Accommodation Services</strong></h2>
      	</div>
      	<div class="well">
			<form>
				<label>
					Location
				</label>
				<select class="form-control">
					<option>Mukono</option>
					<option disabled>Kampala</option>
				</select>
			</form>	
		</div>

      	<div class="row">
			
			<div class="row">
				<h3 class="center">
					<b>Hostels</b>
				</h3>
				<hr>
				<div class="col-md-4">
					<h4>
						<a href="{{ route('ss_hostels') }}">
							<button class="btn btn-md btn-default c_thru">
								<img src="{{ asset('/imgs/singlesex1.jpeg') }}">
								<br>
								Single Sex
							</button>
						</a>
					</h4>	
				</div>
				<div class="col-md-4">
					<h4>
						<a href="/ms_hostels/">
							<button class="btn btn-md btn-default c_thru">
								<img  src="{{ asset('/imgs/mixedsex.png') }}">
								<br>
								Mixed Sex
							</button>
						</a>
					</h4>	
				</div>

				<div class="col-md-4">
					<br><br>
					<button class="btn btn-lg btn-default c_thru">
						<img style="width:50%;" src="{{ asset('/imgs/ikon.png') }}">
						<br>
						Explore All
					</button>
				</div>
			</div>
			<hr>
			<div class="row">
				<h3 class="center">
					<b>Appartments</b>
				</h3>
				<hr>
				<br><br>
				<div class="col-md-4">
					<h4>
						<button class="btn btn-lg btn-default c_thru">
						<img src="{{ asset('/imgs/hotelshort.jpeg') }}">
						<br>
							Single room
						</button>
					</h4>	
				</div>
				<div class="col-md-4">
					<h4>
						<button class="btn btn-lg btn-default c_thru">
							<img style="width:75%;" src="{{ asset('/imgs/singlebedapt.jpeg') }}">
							<br>
							Double or more rooms
						</button>
					</h4>	
				</div>

				<div class="col-md-4">
					<br><br>
					<button class="btn btn-lg btn-default c_thru">
						<img style="width:50%;" src="{{ asset('/imgs/ikon.png') }}">
						<br>
						Explore All
					</button>
				</div>
			</div>
			<hr>
		</div>
	</div>
@endsection