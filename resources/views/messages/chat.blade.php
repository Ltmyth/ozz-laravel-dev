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
            <button type="button" class="btn btn-lg btn-outline-success" disabled>
              <i class="lnr lnr-users green"></i> On the<b class="orange">oh</b><b class="blue">z</b>
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
            <div class="col-lg-6 w-5">
                <div class="row container">
                    <a href="/user/{{ 'Latim Mark' }}"  onclick="javascript:document.getElementById('preloader').style.display='block';">
                        <h3 class="blue rt-al">
                            <i class="lnr lnr-user white br-50 bg-secondary"></i>
                            <strong>{{ 'Latim Mark' }}</strong>
                            <span class="green_dot"></span>
                        </h3> 
                    </a>
                </div>
            </div>
            <div class="col-lg-6 lt-al">
                <div class="row bg-light br-10">
                    <a href="/user/{{ 'Latim Mark' }}"  onclick="javascript:document.getElementById('preloader').style.display='block';">
                        <h3 class="black pl-10 ml-10" >
                            <strong>{{ 'Passionate African Dev' }}</strong>
                        </h3> 
                    </a>
                </div>
            </div>
        </div>                
    </div>
    <br><br>
    @if($onlines)
        @foreach ($onlines as $online)
            <div class="container">
                <div class="row bb bt"> 
                    <div class="col-lg-5 w-5 rt-al">
                    </div>
                    <div class="col-lg-7 lt-al">
                        <div class="row">
                            <a href="/user/{{ $online->name }}"  onclick="javascript:document.getElementById('preloader').style.display='block';">
                                <h3 class="blue">
                                    <i class="lnr lnr-user white br-50 bg-secondary"></i>
                                    <strong>{{ $online->name }} </strong>
                                    <span class="green_dot"></span>
                                </h3> 
                            </a>
                        </div>
                    </div>
                </div>                
            </div>
            <br><br>
        @endforeach
    @else
        <div class="row">
            <div class="container">
                <div class="section-gap"></div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <h3>No body awake</h3>
            </div>
        </div>
    @endif  

    <div class="row">
        <div class="container">
            <div class="section-gap"></div>
        </div>
    </div>              
         
@endsection