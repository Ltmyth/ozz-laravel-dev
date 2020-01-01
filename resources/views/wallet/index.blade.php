  
@auth
  @extends('layouts.layout')
  @section('content')
  	<style type="text/css">
  		#active{
  			background-color: white;
  		}


  		#wallet_btn{
  			background-color:orange;
        border-radius: 10px;
  			color:white;
  			pointer-events: none;
  		}
  	</style>
  	<script type="text/javascript">
  		function calculate(){
  			/*get fields*/
  			var x = document.getElementById('package').value;
  			var y = document.getElementById('cost-label');
  			var z = document.getElementById('cost-value');

  			/*display cost*/
  			y.setAttribute("style", "display:inline");
  			z.setAttribute("type", "number");

  			/*calculation*/
  			var cost = 0;
        var bronze = 5000;
        var silver = 50000;
        var gold = 250000;
        var vibranium = 1000000;

        if(x=='bronze'){
          cost = bronze;
        }
        else if(x=='silver'){
          cost = silver;
        }
        else if(x=='gold'){
          cost = gold;
        }
        else if(x=='vibranium'){
          var charge = vibranium/0.02;
          cost = vibranium + charge;
        }
  			/*set value*/
  			z.setAttribute("value", cost);

  		}
  	</script>
      <!-- right side -->
      <br>
      	<h1 class="center" style="font-size:350%;">
      		<i class="lnr lnr-briefcase orange"></i>
      		<b>Stash</b>
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
                        Share stash
                      </button>
                    </a>

                    <a href="/transactions/">
                      <button class="btn btn-md btn-outline-danger">
                        Transactions ledger
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
      							<b class="red">Top-Up Stash</b>
      						</strong>
      					</h3>
      				</label>
              <select class="form-control col-lg-8 container" name="package" id="package" onchange="calculate()" required>
                <option value="bronze">
                  Stash Package
                </option>
                <option value="bronze">
                  Bronze Stash
                </option>
                <option value="silver">
                  Silver Stash
                </option>
                <option value="gold">
                  Golden Stash
                </option>
                <option value="vibranium">
                  Vibranium Stash
                </option>
                
                
                
              </select>
              <!-- <br>
              <label>
                <h3>
                  <strong>
                    <b >Number of packages</b>
                  </strong>
                </h3>
              </label>
      				<input id="ozz-amount" placeholder="01" onkeyup="calculate()" type="number"  class="form-control col-lg-8 container" name="amount"> -->
      				<br>
      				<label id="cost-label" style="display:none;">
      					<!-- <h3>
                  <strong>
                    <b>Better payment ways coming soon.</b> 
                  </strong>
                </h3> -->
                <h3>
      						<strong>
      							<b>Will Only Cost  You</b>(<b><i><small class="red">Ugx</small></i></b>) 
      						</strong>
      					</h3>
      				</label>
      				<input id="cost-value" placeholder="Ugx" type="hidden" class="form-control col-lg-8 container" name="amount">
      				<br>

              <br>
      				<input type="submit" class="btn btn-md btn-warning" value="Request top-Up">
      			</form>  		
        	</div>		
  @endsection
@endauth