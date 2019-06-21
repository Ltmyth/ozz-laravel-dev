@extends('layouts.layout')
@guest
	@section('content')
    	<div id="abt" class="d-flex justify-content-center contain">
    		<div class="well white-bg">
    			<STRONG><h5>About!</h5></STRONG>
    			<h3>
                    <p>
                        This platform is built to connect users<br><br>
                        with each other and community based services<br><br>
                        quick and click easy.
                    </p>              
                </h3>	
    		</div>
    	</div>

        <div id="how" class="row contain">
            <div class="row center" >
                <strong><h3>How it Works</h3></strong>
                <br>
            </div>

            <div class="row center">
                <div class="col-md-4" >
                    1
                    <br>
                    <h3 class="lt-al"><strong>Register & Login</strong></h3>
                    <h4>
                        <p class="lt-al">
                            0zz register and access requirements;<br>
                            <ul class="lt-al">
                                <li>a valid email</li>
                                <br>
                                <li>a unique username</li>
                                <br>
                                <li>
                                    a secure memorable <br>
                                    password or access key
                                </li>
                            </ul>                             
                        </p>
                    </h4>
                </div>
                <div class="col-md-4" >
                    2
                    <br>
                    <h3 class="lt-al"><strong>Setup & Topup</strong></h3>
                    <h4>
                        <p class="lt-al">
                           0zz profile setup requirements; 
                        </p>
                        <ul class="lt-al">
                            <li>Active 0zz account</li>
                            <br>
                            <li>0zz Wallet</li>
                            <br>
                            <li>Active Mobile Money Number</li>
                        </ul>
                    </h4>
                </div>
                <div class="col-md-4" >
                    3
                    <br>
                    <h3 class="lt-al"><strong>Connect & Use</strong></h3>
                    <h4>
                        <p class="lt-al">Lastly!</p>
                        <p class="lt-al">
                            Search, find and connect with community-based users and services
                            using your wallet to secure or pay for services quick and click 
                            easy.
                        </p>
                    </h4>
                </div>
            </div>           
        </div>
        <br><br>
	@endsection    
@endguest
