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
  			var si = 5000;
  			var y = x/5000;
	        var bronze = 5000/si;
	        var silver = 50000/si;
	        var gold = 250000/si;
	        var vibranium = 1000000/si;

	        if(y=bronze && y<silver){
	          var charge = bronze*0.1;
	          cost = bronze+charge;
	        }
	        else if(y=silver && y<gold){
	          var charge = silver*0.2;
	          cost = silver+charge;
	        }
	        else if(y=gold && y<vibranium){
	          var charge = gold*0.04;
	          cost = gold+charge;
	        }
	        else if(y>=vibranium){
	          var charge = vibranium*0.04;
	          cost = vibranium + charge;
	        }

  			/*set value*/
  			z.setAttribute("value", cost);

  		}
  	</script>

	<br><br>
	<h2><span class="lnr lnr-briefcase green"></span><strong> Withdraw Stash</strong></h2>
	<form action="/withdraw" method="POST">
		@csrf
		<hr>
		<input  placeholder="MobileMoney number" class="container col-lg-8 form-control"
			type="text" name="phone" minlength="2" required>
		<hr class="container col-lg-8 ">
		<input id="oz-amount" onkeyup="calculate()" placeholder="UGX Amount" class="container col-lg-8 form-control" type="number" name="amount" required>
		<label id="cost-label" style="display:none;">
			<h3>
				<strong>
					Total <b class="orange">oh</b><b>z</b> Charge
				</strong>
			</h3>
		</label>
		<input id="cost-value" placeholder="0zz" type="hidden" class="form-control container col-lg-8" name="cost">
		<hr class="container col-lg-8">
		<input type="submit" class="btn btn-lg btn-success" value="Send">
		<br><br>
	</form>

	<hr>
    <div class="container col-lg-8 nlight-bg">
      <u><h3 class="blue lt-al"><strong>NOTE</strong></h3></u>
      <ul style="list-style-type:circle;"  class="lt-al">
        <h4>
          <li>
            <strong>The<b class="orange">oh</b><b>z</b> withdrawal process may take up to 3 minutes to verify and complete.</strong>
          </li>
          <li>
            <strong>The <b class="red">cost</b> includes service and withdrawal fees.</strong>
          </li>
          <li>
            <strong><i class="green">Better methods coming soon.</i></strong>
          </li> 
        </h4>                 
      </ul>      			  		
  	</div>		
@endsection