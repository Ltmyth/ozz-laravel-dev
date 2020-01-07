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
  			/*calculation*/
  			var cost = 0;
  			var discount = 2/100;

  			var charge = x*discount;
  			var actual_charge = x-charge;

  			cost = actual_charge/5000;

  			/*set value*/
  			z.setAttribute("value", cost);

  		}
  	</script>

    <!-- right side -->
    <br><br>
	<img class="curve w-10 mt-10" src="{{ asset('/imgs/phone.png') }}">	
	<br><br>
	<h2><strong> Buy Airtime for another</strong></h2>
	<hr class="container col-lg-8">
	<form  method="POST" action="/buy_self">
		@csrf
		<input placeholder="07XX-XXX-XXX" minlength="10" maxlength="10" class="container col-lg-8 form-control" type="text" pattern="^07[0-9]{8}" name="phone" required>
		<hr class="container col-lg-8">
		<input id="at-amount" onkeyup="calculate()" placeholder="Amount" class="container col-lg-8 form-control" type="number" name="amount" required>
		<br>
		<label id="cost-label" style="display:none;">
			<h3>
				<strong>
					Cost in <b><i><b class="orange">0h</b></i>z</b>
				</strong>
			</h3>
		</label>
		<input id="cost-value" placeholder="0hz" type="hidden" class="form-control container col-lg-8" name="cost" readonly>
		<hr class="container col-lg-8">
		<input type="submit" class="btn btn-lg btn-success" value="Buy">
		<br><br>
	</form>
@endsection