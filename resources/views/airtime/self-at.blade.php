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
			background-color:#5f27cd;
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
    <div class="col-md-10 contain">
    	<div class="row center">
    		<img class="curve" src="{{ asset('/imgs/at.jpeg') }}">	
    		<br>
    		<h2><strong> Buy Airtime for my phone</strong></h2>
    	</div>
    	<div class="row well curve center c_thru">
			<i class="glyphicon glyphicon-phone">
				+256-7xx-xxxx
			</i>
			<hr>
			<form>
				<input id="at-amount" onkeyup="calculate()" placeholder="amount" class="center form-control" type="number" name="amount" required>
				<br>
				<label id="cost-label" style="display:none;">
					<h3>
						<strong>
							Cost(<b><i><b class="orange">0zz</b></i></b>)
						</strong>
					</h3>
				</label>
				<input id="cost-value" placeholder="0zz" type="hidden" class="form-control center" name="amount">
				<br><br>
				<input type="submit" class="btn btn-lg btn-success" value="Buy">
				<hr>
			</form>
    	</div>
	</div>
@endsection