@extends('layouts.layout')
@section('content')
	<style type="text/css">
		#active{
			background-color: white;
		}

		
		
		#at{
			background-color:#34ace0;
			pointer-events: none;
		}

		#at_btn{
			background-color:orange;
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
  			cost = x /5000;

  			/*set value*/
  			z.setAttribute("value", cost);

  		}
  	</script>

    <!-- right side -->
	<img class="curve w-10" src="{{ asset('/imgs/phone.png') }}">	
	<br><br>
	<h2><strong> Share Stash</strong></h2>
	<hr>
	<form>
		<hr class="container col-lg-8">
		<input id="at-csv"  placeholder="Username" class="container col-lg-8 form-control"
			type="number" name="user" minlength="2" required>

		<input id="at-amount" onkeyup="calculate()" placeholder="UGX Amount" class="center form-control" type="number" name="amount" required>
		<br>
		<label id="cost-label" style="display:none;">
			<h3>
				<strong>
					<b><i><b class="orange">0h</b></i>z</b> Value
				</strong>
			</h3>
		</label>
		<input id="cost-value" placeholder="0zz" type="hidden" class="form-control container col-lg-8" name="cost">
		<hr class="container col-lg-8">
		<input type="submit" class="btn btn-lg btn-success" value="Send">
		<br><br>
	</form>
@endsection