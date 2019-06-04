@extends('layouts.admin')

@section('content')
    <style type="text/css">
        #food_btn{
            background-color:#34ace0;
            color:white;
            pointer-events: none;
        }
    </style>

    <!-- right side -->
    <div class="d-flex justify-content-center" style="margin-top:0;">
        @if($fd_providers)
            <div class="row contain">
                <div class="well center">
                    <h3>Food Providers</h3>
                </div>
                @foreach ($fd_providers as $fd_provider)
                    <div style="margin:3%;" class="well col-sm-5 lt-al">
                        <div class="row">
                            <i><big>IMG</big></i>
                        </div>

                        <div class="row">
                            <small>Name</small>:<b>{{ $fd_provider->name }}</b> 
                            <br>
                            <small>Location</small>:<b>{{ $fd_provider->location }}</b>
                            <br>
                            <small>Price Range</small>:<b>{{ $fd_provider->price }}</b>
                            <br>
                            <small>Custodian</small>:<b>{{ $fd_provider->manager }}</b>
                            <br>
                            <small>Contact</small>:<b>{{ $fd_provider->phone }}</b>
                            <br><br>
                            <div class="col-sm-2 left left-space">
                                <button class="btn btn-md btn-success" >
                                    Edit
                                </button>    
                            </div>

                            <div class="col-sm-2 right right-space" >
                                <button class="btn btn-md btn-danger">
                                    Drop
                                </button>
                            </div>
                        </div>            
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <br><br>
@endsection
