@extends('layouts.layout')
@section('content')
    <style type="text/css">
        #home_btn{
            background-color:orange;
            color:white;
            pointer-events: none;
        }
    </style>

  
    <div class="row">
        <div class="container">
            <h2 class="mt-20 pt-10"> <i class="lnr lnr-earth orange"></i> Chat</h2>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <button type="button" class="btn btn-success">
              <i class="lnr lnr-users white"></i> On the<b class="orange">oh</b><b class="blue">z</b>
                <span class="badge badge-light">
                    @if($chat>0)
                        {{$chat+=1}}
                    @else
                        <strong class="red">0</strong>
                    @endif
                </span>
            </button>
        </div>
    </div>

    <hr>
    <div class="container">
        <div class="row bb bt"> 
            <div class="col-lg-5 w-5">
                <div class="row">
                    <a href="/user/{{ 'Latim Mark' }}">
                        <img 
                            class="w-10 mr-10 rt" 
                            src="{{ asset('/imgs/ozz-app.png') }}"
                            alt="Avator" 
                        >
                    </a>

                </div>
            </div>
            <div class="col-lg-7 lt-al">
                <div class="row">
                    <a href="/user/{{ 'Latim Mark' }}">
                        <h3 class="blue"><strong>{{ 'Latim Mark' }}</strong>
                    </a><span class="green_dot"></span></h3> 
                </div>
            </div>
        </div>                
    </div>
    <hr>
    @if($onlines)
        @foreach ($onlines as $online)
            <div class="container">
                <div class="row bb bt"> 
                    <div class="col-lg-5 w-5">
                        <div class="row">
                            <a href="/user/{{ $online->name }}">
                                <img 
                                    class="w-10 mr-10 rt" 
                                    src="{{ asset('/imgs/ozz-app.png') }}"
                                    alt="Avator" 
                                >
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-7 lt-al">
                        <div class="row">
                            <a href="/user/{{ $online->name }}">
                                <h3 class="blue"><strong>{{ $online->name }} </strong>
                            </a><span class="green_dot"></span></h3> 
                        </div>
                    </div>
                </div>                
            </div>
            <hr>
        @endforeach
    @else
        <div class="row">
            <div class="container">
                <div class="section-gap"></div>
            </div>
        </div>
    @endif  

    <div class="row">
        <div class="container">
            <div class="section-gap"></div>
        </div>
    </div>              
         
@endsection