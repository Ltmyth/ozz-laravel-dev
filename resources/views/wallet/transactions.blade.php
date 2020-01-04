  
@auth
  @extends('layouts.layout')
  @section('content')
  	<style type="text/css">
  		#active{
  			background-color: white;
  		}


  		#wallet_btn{
  			background-color:orange;
  			color:white;
  			pointer-events: none;
  		}
  	</style>
  	<script type="text/javascript">
  		function calculte(){
  			/*get fields*/
  			var x = document.getElementById('ozz-amount').value;
  			var y = document.getElementById('cost-label');
  			var z = document.getElementById('cost-value');

  			/*display cost*/
  			y.setttribute("style", "display:inline");
  			z.setttribute("type", "number");

  			/*calcultion*/
  			var cost = 0;
  			cost = x * 1000;

  			/*set value*/
  			z.setttribute("value", cost);

  		}
  	</script>
    <!-- right side -->
    <div class="container">
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
    	<div class="table-responsive">

        <h2>Sent Airtime History</h2>
        <hr>
        <table class="table-striped w-100">
            <thead>
              <tr>
                <th scope="col" class="lt-al">When</th>
                <th scope="col" class="lt-al">Transaction Id</th>
                <th scope="col" class="lt-al"> Wallet </th>
                <th scope="col">Transaction</th>
                <th scope="col">Status</th>
                <th scope="col"><b class="orange">Oh</b><b>z</b> Spent</th>
              </tr>
            </thead>
            <tbody>
                @if($ts) 
                    @foreach ($ts as $t)

                        <tr class="lt-al">
                            <td>
                                <h5>{{ $t->created_t->diffForHumans() }}</h5>
                            </td>

                            <td>
                                <h4 class="blue"><strong>{{ $t->transaction }}</strong></h4> 
                            </td>
                            
                            <td>
                                <h4 class="blue"><strong>{{ $t->wallet }}</strong></h4> 
                            </td>

                            <td>
                                <h3 class="blue"><strong>{{ $t->description }}</strong></h3> 
                            </td>

                            <td>
                                <h4 class="green ct-al"><strong>Processed</strong></h4> 
                            </td>

                            <td>
                                <h3 class="red ct-al"><strong>{{ $t->amount }}</strong></h3> 
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">
                            <br>
                            <h1 class="ct-al">
                                <p><b class="orange"><i>No transactions yet</i>!</b></p>
                            </h1>
                            <h1>
                                <big><i class="lnr lnr-sad orange"></i></big>
                            </h1>
                            <div class="section-gap"></div>
                        </td>
                    </tr>
                @endif
            </tbody>            
        </table>        
  </div>

    </div>
  @endsection
@endauth