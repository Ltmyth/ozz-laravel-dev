@extends('layouts.layout')
@guest
	@section('content')
    	<div id="abt"  class="d-flex justify-content-center row">
            <div class="col-md-6">
                <div style="opacity: 0.9;margin:20% 5% 0% 15%;background:#5f27cd;padding:5%;border-radius:5%;" class="row white">
                   <STRONG><h5><b style="color:#ffa502;">About Us!</b></h5></STRONG>
                    <h4>
                        <p>
                            <strong>
                                This platform is built to connect users<br><br>
                                with each other and community based<br><br>
                                services quick and click easy.
                            </strong>
                        </p>              
                    </h4>  
                </div>                               
            </div>
            <div class="col-md-6">
                <div style="opacity: 0.9;margin:5% 10% 5% 1%;background:#5f27cd;width:90%;padding:5% 5% 1% 5%;border-radius:5%;" class="row white white-bg">
                    <h3 class="center"><strong style="color:#ffa502;"><u>Register</u></strong></h3>
                    <br><br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <!-- <label for="location" class="col-md-4 col-form-label text-md-right">Location</label>

                            <div class="col-md-6">
                                <select id="location"  class="form-control @error('location') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="location" autofocus>
                                    <option>
                                        Mukono
                                    </option>
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row center">
                            <button type="submit" class="btn btn-lg btn-warning">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>                    
                </div>
            </div>				
    	</div>

        <div id="how" class="row contain">
            <div class="row center" >
                <strong>
                    <br><br>
                    <h2><b class="black">How it Works</b></h2>
                </strong>
                <br>
            </div>

            <div class="row center">
                <div class="col-md-4" >
                    <img style="width:15%;border-radius:50%;background:#ffa502;" src="{{ asset('/imgs/one.png') }}" >
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
                    <img style="width:15%;border-radius:50%;background:#ffa502;" src="{{ asset('/imgs/two.png') }}" >
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
                    <img style="width:15%;border-radius:50%;background:#ffa502;" src="{{ asset('/imgs/three.png') }}" >
                    <h3 class="lt-al"><strong>Connect & Use</strong></h3>
                    <h4>
                        <p class="lt-al">Lastly!</p>
                        <p class="lt-al">
                            Search, find and connect with community-based users and services
                            using your 0zz wallet to secure or pay for services quick and click 
                            easy.
                        </p>
                    </h4>
                </div>
            </div>

            <div class="row center" >
                <div class="row center" >
                    <strong>
                        <br><br>
                        <h2><b class="black">Pricing</b></h2>
                    </strong>
                    <br>
                    <table style="margin:0% 40% 0% 40%;width:20%;border:2px solid;">
                        <thead>
                            <tr>
                                <td  class="lt-al">
                                    <b class="orange">0zz</b>
                                </td>

                                <td class="rt-al">
                                    <b class="red">UGX</b>( <strong>Cost/Value</strong>) 
                                </td>
                            </tr>
                        </thead>
                            
                        <tr style="border:1px solid;">
                            <td class="lt-al">
                                <strong>0.1</strong>
                            </td>

                            <td class="rt-al">
                                <strong>500</strong>
                            </td>
                        </tr>
                        <tr style="border:1px solid;" >
                            <td class="lt-al">
                                <strong>1</strong>
                            </td>

                            <td class="rt-al">
                                <strong>5000</strong>
                            </td>
                        </tr>

                        <tr style="border:1px solid;" >
                            <td class="lt-al">
                                <strong>1.1</strong>
                            </td>

                            <td class="rt-al">
                                <strong>10500</strong>
                            </td>
                        </tr>
                    </table>
                </div>


                <div class="row center" >
                    <strong>
                        <br><br>
                        <h2><b class="black">Services</b></h2>
                    </strong>
                </div>

                <div class="row center" >
                    <div class="col-md-4" >
                        <strong>
                            <br>
                            <h2><b>Accommodation</b></h2>
                        </strong>
                        <br>
                        <p class="lt-al">
                            Secure or book or pay for accommodation services 
                            using your 0zz wallet.
                        </p>
                    </div>
                    <div class="col-md-4" >
                        <strong>
                            <br>
                            <h2><b>Airtime</b></h2>
                        </strong>
                        <br>
                    </div>

                    <div class="col-md-4" >
                        <strong>
                            <br>
                            <h2><b>Food</b></h2>
                        </strong>
                        <br>
                    </div>
                </div>
            </div>           
        </div>
        <br><br>
	@endsection    
@endguest
