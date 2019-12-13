@extends('layouts.layout')
@section('content')
    <style type="text/css">
        #home_btn{
            background-color:orange;
            color:white;
            pointer-events: none;
        }
    </style>

  	<h2 class="mt-20 pt-10"> <i class="lnr lnr-earth orange"></i> Chat</h2>
  	<hr>
        <div class="container bb">
            <button type="button" class="btn btn-success">
              Online <i class="lnr lnr-users white"></i><span class="badge badge-light">1</span>
            </button>
        </div>
    <hr>
        <div class="col-lg-10">
            <div class="row">
                <div class="container">
                    <a href="{{ route('user') }}" onclick="javascript:document.getElementById('preloader').style.display='block';">
                        <img 
                            class="w-20" 
                            src="{{ asset('/imgs/ozz-app.png') }}"
                            alt="Avator" 
                        >
                        <span><strong class="fz-30">Joghh</strong></span>
                    </a>
                </div>
            </div>
        </div>        
    <hr>
    <br><br>
@endsection