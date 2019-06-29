<style type="text/css">
    #login-btn {
        background-color:  #2980b9;
        color: white;
    }
</style>
@extends('layouts.layout')
@section('content')
    
    <div class="btm-space p-top d-flex justify-content-center">
        <div class="center"><h1>Login</h1></div>

        <div style="background:#5f27cd;opacity: 0.9;border-radius:3%;" class="card white contain">
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

                        <div class="form-group row">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group row center">
                            <button type="submit" class="btn btn-lg btn-success">
                                {{ __('Login') }}
                            </button>
                            <br><br>
                            @if (Route::has('password.request'))
                                <a class="form-control btn btn-link red" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
