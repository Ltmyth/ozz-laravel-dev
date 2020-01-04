@extends('layouts.layout')
@section('content')
	<style type="text/css">
				
		#at_btn{
			background-color:orange;
			color:white;
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
	<img class="curve w-10" src="{{ asset('/imgs/phone.png') }}">	
	<br><br>
	<h2><strong> Buy Airtime for another</strong></h2>
	<hr class="container col-lg-8">
	<form  method="POST" action="/buy_self">
		@csrf
		<input placeholder="07XX-XXX-XXX" class="container col-lg-8 form-control" type="number" pattern="^07[0-9]{8}$" name="phone" maxlength="10" required>
		<hr class="container col-lg-8">
		<input id="at-amount" onkeyup="calculate()" placeholder="amount" class="container col-lg-8 form-control" type="number" name="amount" required>
		<br>
		<label id="cost-label" style="display:none;">
			<h3>
				<strong>
					Cost in <b><i><b class="orange">0h</b></i>z</b>
				</strong>
			</h3>
		</label>
		<input id="cost-value" placeholder="0zz" type="hidden" class="form-control container col-lg-8">
		<hr class="container col-lg-8">
		<input type="submit" class="btn btn-lg btn-success" value="Buy">
		<br><br>
	</form>
@endsection