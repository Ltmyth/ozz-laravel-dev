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
  			var x = document.getElementById('oz-amount').value;
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
	<i class="lnr lnr-briefcase w-10 orange"></i>	
	<br><br>
	<h2><strong> Share Stash</strong></h2>
	<form>
		<hr>
		<label>
			<h3 class="lt-al">
				<strong>
					<b>The<i><b class="orange">0h</b></i>z</b> Username
				</strong>
			</h3>
		</label>
		<input placeholder="Username" class="container col-lg-8 form-control"
			type="number" name="user" minlength="2" required>
		<hr class="container col-lg-8 ">
		<input id="oz-amount" onkeyup="calculate()" placeholder="Ugx Amount" class="container col-lg-8 form-control" type="number" name="amount" required>
		<label id="cost-label" style="display:none;">
			<h3>
				<strong>
					<b><i><b class="orange">0h</b></i>z</b> Value
				</strong>
			</h3>
		</label>
		<input id="cost-value" placeholder="0hz" type="hidden" class="form-control container col-lg-8" name="cost">
		<hr class="container col-lg-8 ">
		<input type="submit" class="btn btn-lg btn-success" value="Send">
		<br><br>
	</form>
@endsection