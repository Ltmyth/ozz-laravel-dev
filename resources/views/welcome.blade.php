@extends('layouts.layout')
@guest
	@section('content')
    	<div id="abt" style="background:url({{asset('/imgs/bg1.jpg')}});background-repeat:no-repeat;background-size:100% 100%;" class="d-flex justify-content-center row">
            <div class="col-md-6">
                <div style="opacity: 0.8;margin:10% 5% 0% 5%;background:#5f27cd;padding:5%;border-radius:5%;" class="row white">
                   <STRONG><h5><b>About Us!</b></h5></STRONG>
                    <h4>
                        <p>
                            <strong>
                                This platform is built to connect users<br><br>
                                with each other and community based services<br><br>
                                quick and click easy.
                            </strong>
                        </p>              
                    </h4>  
                </div>                               
            </div>
            <div class="col-md-6">
                <div style="opacity: 0.9;margin:5% 10% 5% 5%;background:#5f27cd;width:90%;padding:5% 5% 1% 5%;" class="row white white-bg">
                    <h3 class="center"><strong><u>Register</u></strong></h3>
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
                    <h2><b>How it Works</b></h2>
                </strong>
                <br>
            </div>

            <div class="row center">
                <div class="col-md-4" >
                    <img style="width:15%;border-radius:50%;background:#ffa502;" src="{{ asset('/imgs/one.png') }}" >
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
                    <img style="width:15%;border-radius:50%;background:#ffa502;" src="{{ asset('/imgs/two.png') }}" >
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
                    <img style="width:15%;border-radius:50%;background:#ffa502;" src="{{ asset('/imgs/three.png') }}" >
                    <br>
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
        </div>
        <br><br>
	@endsection    
@endguest
