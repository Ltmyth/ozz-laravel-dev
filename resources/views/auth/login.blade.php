<style type="text/css">
    #login-btn {
        background-color:  #2980b9;
        color: white;
    }
</style>
@extends('layouts.layout')
@section('content')
    
    <div id="login_content">
        <div class="container ct nlight-bg">
            <h1>Login</h1>
                    <form method="POST" style="padding:5%;" action="{{ route('login') }}">
                        @csrf

                        <!-- <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">Location</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Email" 
                                id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 ct">
                            </div>
                            <div class="col-md-5 ct">
                                <button type="submit" class="btn btn-lg btn-outline-primary px100" >
                                    {{ __('Login') }}
                                </button>
                                <br><br>
                                @if (Route::has('password.request'))
                                    <a class="form-control btn btn-link red" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
