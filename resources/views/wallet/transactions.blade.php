  
@auth
  @extends('layouts.layout')
  @section('content')
  	<style type="text/css">
  		#active{
  			background-color: white;
  		}

  		
  		#wallet{
  			background-color:#34ace0;
  			pointer-events: none;
  		}

  		#wallet_btn{
  			background-color:black;
  			color:white;
  			pointer-events: none;
  		}
  	</style>
  	<script type="text/javascript">
  		function calculate(){
  			/*get fields*/
  			var x = document.getElementById('ozz-amount').value;
  			var y = document.getElementById('cost-label');
  			var z = document.getElementById('cost-value');

  			/*display cost*/
  			y.setAttribute("style", "display:inline");
  			z.setAttribute("type", "number");

  			/*calculation*/
  			var cost = 0;
  			cost = x * 1000;

  			/*set value*/
  			z.setAttribute("value", cost);

  		}
  	</script>
    <!-- right side -->
    <div class="row contain white-bg">
      <a href="/wallet/">
        <button class="btn btn-lg btn-info">
          <small class="red" >Back</small>
        </button>
      </a>
    	<h1 class="center" style="font-size:350%;">
    		<i class="glyphicon glyphicon-briefcase">
    			<strong>Wallet History</strong>
    		</i>
    	</h1>
    	<br>
    	<div class="well">
    		<div class="row center">
    			<h2>
            <small class="green">Transactions</small>	
    			</h2>
    		</div>
    		<br>
    	</div>
    </div>
  @endsection
@endauth