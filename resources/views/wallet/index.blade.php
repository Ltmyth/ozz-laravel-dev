  
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

        /*display cost*/
        y.setAttribute("style", "display:inline");
        z.setAttribute("type", "number");

        /*calculation*/
        var cost = 0;
        var discount = 0/100;

        var charge = x*discount;
        var actual_charge = x-charge;

        cost = actual_charge;

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
                  : @if($balance)
                      <b>{{ $balance }}</b>
                    @else
                      <b>0.0</b>
                    @endif 
                  <i><strong class="orange">0h</strong><b>z</b></i>
      					</div>

                <div class="col-md-8 container">
                  <small class="green">
                    Wallet Id
                  </small>  
                  : @if($id)
                      <b>#{{ $id }}</b>
                    @else
                        <b>#{{ Auth::user()->name }}</b>
                    @endif 
                </div>

                <div class="col-md-8 container">
                  <small class="red">
                    Payment Method
                  </small>  
                  <select class="form-control">
                    <option>Mobile-Money</option>
                    <option disabled>Mastercard</option>
                  </select>                  
                </div>
      				</div>
              <br>
              <div class="row col-lg-12">
                <div class="col-md-8 container">
                  <a href="/withdraw_stash"  onclick="javascript:document.getElementById('preloader').style.display='block';" >
                    <button class="btn btn-md btn-outline-success">
                      Withdraw
                    </button>
                  </a>

                  <a href="/share_stash"  onclick="javascript:document.getElementById('preloader').style.display='block';" >
                    <button class="btn btn-md btn-outline-info">
                      Share stash
                    </button>
                  </a>

                  <a href="/transactions/"  onclick="javascript:document.getElementById('preloader').style.display='block';">
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
            <br>
            <input id="package" onkeyup="calculate()" placeholder="Amount" class="container form-control col-lg-6" type="number" name="amount" required>
            <br>
    				<label id="cost-label" style="display:none;">
    				  <h3>
    						<strong>
    							<b>Cost  in</b>(<b><i><small class="red">Ugx</small></i></b>) 
    						</strong>
    					</h3>
    				</label>
    				<input id="cost-value" placeholder="Ugx" type="hidden" class="form-control col-lg-8 container" name="amount">
            <br>
            <input type="submit" class="btn btn-md btn-outline-dark" value="Request Top-up">
          </form>
  				<br>
          <!-- <div class="col-lg-8 container">
            <h4 id="top_up_message" class="lt-al" style="display:none;">
              <strong>
                Deposit MobileMoney to "LATIM MARK" on <b class="red">+256-783-013-570</b> with your the</b><b class="orange">oh</b><b>z</b> <strong>username</strong> as the <strong>payment reason</strong>.
              </strong>
            </h4>
          </div> -->
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