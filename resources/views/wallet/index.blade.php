  
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
  			background-color:#2980b9;
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
      <br>
      	<h1 class="center" style="font-size:350%;">
      		<i class="glyphicon glyphicon-briefcase">
      			<strong>Wallet</strong>
      		</i>
      	</h1>
        	<hr>
      			<h2>
      				<div class=" container">
                <div class="row col-lg-12">
        					<div class="col-md-8 container">
        						<small class="green">
                      Available Balance
                    </small>	
                    : <b>1000000</b> .
                    <i><strong class="orange">0hzz</strong></i>
        					</div>
        				</div>
                <br>
                <div class="row col-lg-12">
                  <div class="col-md-8 container">
                    <a href="#">
                      <button class="btn btn-md btn-outline-success">
                        Withdraw
                      </button>
                    </a>

                    <a href="#">
                      <button class="btn btn-md btn-outline-info">
                        History
                      </button>
                    </a>

                    <a href="/transactions/">
                      <button class="btn btn-md btn-danger">
                        <b class="white">Transactions ledger</b>
                      </button>
                    </a>
                  </div>
                </div>  	
              </div>			 
      			</h2>
        		<hr>
      			<form>
      				<label>
      					<h3>
      						<strong>
      							<b class="red">Top-Up</b>
      							(<b><i><small class="orange">0zz</small></i></b>)
      						</strong>
      					</h3>
      				</label>
      				<input id="ozz-amount" placeholder="Ozz Amount" onkeyup="calculate()" type="number" value="ozz" class="form-control col-lg-8 container" name="amount">
      				<br>
      				<label id="cost-label" style="display:none;">
      					<h3>
      						<strong>
      							Cost(<b><i><small class="red">Ugx</small></i></b>)
      						</strong>
      					</h3>
      				</label>
      				<input id="cost-value" placeholder="Ugx" type="hidden" class="form-control col-lg-8 container" name="amount">
      				<br><br>
      				<input type="submit" class="btn btn-md btn-warning" value="Request top-Up">
      			</form>  		
        	</div>		
  @endsection
@endauth