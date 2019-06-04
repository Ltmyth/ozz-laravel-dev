@extends('layouts.admin')

@section('content')
    <style type="text/css">
        #accoms_btn{
            background-color:#34ace0;
            color:white;
            pointer-events: none;
        }
    </style>

    <!-- right side -->
    <div class="d-flex justify-content-center" style="margin-top:0;">
        @if($hostels)
            <div class="row contain">
                <div class="well center">
                    <h3><b>Hostels</b></h3>
                </div>
                @foreach ($hostels as $hostel)
                    <div style="margin:3%;" class="well col-sm-5 lt-al">
                        <div class="row c_thru">
                            <div class="col-sm-5">
                                @if(    $hostel->photo != "" 
                                    && 
                                $hostel->photo == "accommodation.jpeg")      

                                    <?php $x = "$hostel->photo"; ?>                     
                                    <img style="width:100%;" src="{{ asset('/imgs/accommodation.jpeg') }}">
                                @else
                                    <small>none img</small>
                                @endif
                                
                            </div>
                        </div>

                        <div class="row">
                            <small>Name</small>:<b>{{ $hostel->name }}</b> 
                            <br>
                            <small>Location</small>:<b>{{ $hostel->location }}</b>
                            <br>
                            <small>Price Range</small>:<b>{{ $hostel->price }}</b>
                            <br>
                            <small>Custodian</small>:<b>{{ $hostel->custodian }}</b>
                            <br>
                            <small>Contact</small>:<b>{{ $hostel->phone }}</b>
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
