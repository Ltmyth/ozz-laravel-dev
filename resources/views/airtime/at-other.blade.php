@extends('layouts.layout')
@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}

		
		
		#at{
			background-color:orange;
			pointer-events: none;
		}

		#at_btn{
			background-color:#9980FA;
			color:white;
			pointer-events: none;
		}
	</style>

	<script type="text/javascript">
  		function calculate(){
  			/*get fields*/
  			var x = document.getElementById('at-amount').value;
  			var y = document.getElementById('cost-label');
  			var z = document.getElementById('cost-value');

  			/*display cost*/
  			y.setAttribute("style", "display:inline");
  			z.setAttribute("type", "number");

  			/*calculation*/
  			var cost = 0;
  			cost = x /1000;

  			/*set value*/
  			z.setAttribute("value", cost);

  		}
  	</script>

    <!-- right side -->
	<img class="curve" src="{{ asset('/imgs/at.jpeg') }}">	
	<br><br>
	<h2><strong> Buy Airtime for another</strong></h2>
	<hr class="container col-lg-8">
	<input placeholder="Phone number" class="container col-lg-8 form-control" type="number" name="phone" required>
	<hr class="container col-lg-8">
	<form>
		<input id="at-amount" onkeyup="calculate()" placeholder="amount" class="container col-lg-8 form-control" type="number" name="amount" required>
		<br>
		<label id="cost-label" style="display:none;">
			<h3>
				<strong>
					Cost(<b><i><b class="orange">0zz</b></i></b>)
				</strong>
			</h3>
		</label>
		<input id="cost-value" placeholder="0zz" type="hidden" class="form-control container col-lg-8" name="amount">
		<hr class="container col-lg-8">
		<input type="submit" class="btn btn-lg btn-success" value="Buy">
		<br><br>
	</form>
@endsection