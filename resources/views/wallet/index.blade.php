  
@auth
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
  			var x = document.getElementById('package').value;
  			var y = document.getElementById('cost-label');
  			var z = document.getElementById('cost-value');
        var a = document.getElementById('top_up_message');

  			/*display cost*/
  			y.setAttribute("style", "display:inline");
  			z.setAttribute("type", "number");
        a.setAttribute("style", "display:inline");

  			/*calculation*/
  			var cost = 0;
        var bronze = 5000;
        var silver = 50000;
        var gold = 250000;
        var vibranium = 1000000;

        if(x=='bronze'){
          var charge = bronze*0.2;
          cost = bronze+charge;
        }
        else if(x=='silver'){
          var charge = silver*0.08;
          cost = silver+charge;
        }
        else if(x=='gold'){
          var charge = gold*0.04;
          cost = gold+charge;
        }
        else if(x=='vibranium'){
          var charge = vibranium*0.04;
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
                <option>
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
      							<b>Cost  in</b>(<b><i><small class="red">Ugx</small></i></b>) 
      						</strong>
      					</h3>
      				</label>
      				<input id="cost-value" placeholder="Ugx" type="hidden" class="form-control col-lg-8 container" name="amount">
            </form>
    				<br>
            <div class="col-lg-8 container">
              <h4 id="top_up_message" class="lt-al" style="display:none;">
                <strong>
                  Deposit MobileMoney to "LATIM MARK" on <b class="red">+256-783-013-570</b> with your the</b><b class="orange">oh</b><b>z</b> <strong>username</strong> as the <strong>payment reason</strong>.
                </strong>
              </h4>
            </div>
            <hr>
            <div class="container col-lg-8 nlight-bg">
              <u><h3 class="blue lt-al"><strong>NOTE</strong></h3></u>
              <ul style="list-style-type:circle;"  class="lt-al">
                <h4>
                  <li>
                    <strong>The top up process may take up to 3 minutes to complete.</strong>
                  </li>
                  <li>
                    <strong>The stash <b class="red">cost</b> includes service and withdrawal fees.</strong>
                  </li>
                  <li>
                    <strong><i class="green">Better payment methods coming soon.</i></strong>
                  </li> 
                </h4>                 
              </ul>
              
        				<!-- <input type="submit" class="btn btn-md btn-warning" value="Request top-Up"> -->          			  		
          	</div>		
  @endsection
@endauth