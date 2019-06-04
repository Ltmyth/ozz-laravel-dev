<style type="text/css">
    #login-btn {
        background-color:  black;
        color: white;
    }
</style>
@extends('layouts.layout')
@section('content')
    <div class="p-top d-flex justify-content-center">
        <div class="center"><h1>Login</h1></div>
            <div style="background:white;"  class="card contain">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="center">
                                <input placeholder="Email" 
                                id="email" type="email" class="center form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <br><br>
                            <div class="center">
                                <input id="password"
                                placeholder="Password"
                                 type="password" class="center form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="center">
                                <div class="form-check">
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row center btm-space">
                            <button type="submit" class="btn btn-lg btn-success">
                                {{ __('Login') }}
                            </button>
                            <br><br>
                            <!-- @if (Route::has('password.request'))
                                <a class="form-control btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
