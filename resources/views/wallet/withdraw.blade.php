@extends('layouts.layout')
@section('content')
	<style type="text/css">
		
		#wallet_btn{
			background-color:orange;
			color:white;
			pointer-events: none;
		}
	</style>

	<script type="text/javascript">
  		function calculate(){
  			/*get fields*/
  			var x = document.getElementById('oz-amount').value;
  			var y = document.getElementById('cost-label');
  			var z = document.getElementById('cost-value');

  			/*display cost*/
  			y.setAttribute("style", "display:inline");
  			z.setAttribute("type", "number");

  			/*calculation*/
  			/*calculation*/
  			var cost = 0;
	        var bronze = 5000;
	        var silver = 50000;
	        var gold = 250000;
	        var vibranium = 1000000;

	        if(x==bronze){
	          var charge = bronze*0.1;
	          cost = bronze+charge;
	        }
	        else if(x<silver){
	          var charge = silver*0.2;
	          cost = silver+charge;
	        }
	        else if(x>=silver){
	          var charge = gold*0.04;
	          cost = gold+charge;
	        }
	        else if(x>=vibranium){
	          var charge = vibranium*0.04;
	          cost = vibranium + charge;
	        }

  			/*set value*/
  			z.setAttribute("value", cost);

  		}
  	</script>

    <!-- right side -->
	<img class="curve w-10" src="{{ asset('/imgs/phone.png') }}">	
	<br><br>
	<h2><strong> Withdraw Stash</strong></h2>
	<hr>
	<form>
		<hr class="container col-lg-8">
		<input  placeholder="MobileMoney number" class="container col-lg-8 form-control"
			type="text" name="phone" minlength="2" required>

		<input id="oz-amount" onkeyup="calculate()" placeholder="UGX Amount" class="center form-control" type="number" name="amount" required>
		<br>
		<label id="cost-label" style="display:none;">
			<h3>
				<strong>
					Total <b class="orange"></b><b>z</b> Charge
				</strong>
			</h3>
		</label>
		<input id="cost-value" placeholder="0zz" type="hidden" class="form-control container col-lg-8" name="cost">
		<hr class="container col-lg-8">
		<input type="submit" class="btn btn-lg btn-success" value="Send">
		<br><br>
	</form>
@endsection