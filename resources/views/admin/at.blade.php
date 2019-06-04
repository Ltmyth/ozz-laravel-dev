@extends('layouts.admin')

@section('content')
    <style type="text/css">
        #at_btn{
            background-color:#34ace0;
            color:white;
            pointer-events: none;
        }
    </style>

    <!-- right side -->
    <div class="d-flex justify-content-center contain" style="margin-top:0;">
        <div class="contain center">
            <div class="row well contain" >
                <h2><b>Balance </b>: 2 </h2>
            </div>

            <div class="row well contain" >
                <a href="#">
                    <button class="btn btn-md btn-success">
                        Top-Up
                    </button>
                </a>
            </div>

            <div class="row well contain" >
                <a href="#">
                    <button class="btn btn-md btn-info">
                        Transactions
                    </button>
                </a>
            </div>       
        </div>
    </div>
    <br><br>
@endsection
