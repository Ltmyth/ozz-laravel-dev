@extends('layouts.admin')

@section('content')
    <style type="text/css">
        #accoms_btn{
            background-color:#34ace0;
            color:white;
            pointer-events: none;
        }
    </style>

    <div class="d-flex justify-content-center" style="margin-top:0;">
        @if($appartments)
            <div class="row contain">
                <div class="well center">
                    <h3>Appartments!</h3>
                </div>
                @foreach ($appartments as $appartment)
                    <div style="margin:3%;" class="well col-sm-5 lt-al">
                        <div class="row">
                            <i><big>IMG</big></i>
                        </div>

                        <div class="row">
                            <small>Name</small>:<b>{{ $appartment->name }}</b> 
                            <br>
                            <small>Location</small>:<b>{{ $appartment->location }}</b>
                            <br>
                            <small>Price Range</small>:<b>{{ $appartment->price }}</b>
                            <br>
                            <small>Custodian</small>:<b>{{ $appartment->custodian }}</b>
                            <br>
                            <small>Contact</small>:<b>{{ $appartment->phone }}</b>
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
