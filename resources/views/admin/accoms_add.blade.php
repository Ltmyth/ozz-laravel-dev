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
        <div class="d-flex justify-content-center contain" style="margin-top:0;">

            <div class="contain  row well center">
                <h2><b class="green">New!</b></h2> 
                <form method="POST" action="/accoms_create/">
                    @csrf
                    <select class="form-control center" name="accoms" required>
                        <option value="hostel">
                            Hostel
                        </option>
                        <option value="appartment">
                            Appartment
                        </option>
                    </select>
                    <hr>
                    <input type="submit" class="btn btn-md btn-success" value="Add Provider">
                    <hr>
                </form>             
            </div>
            
            <div class="well contain center row">
                <div class="row" >
                    <a href="/hostels_admin_view/">
                        <button class="btn btn-lg btn-default" >
                            <b class="red">View Hostels</b>
                        </button>   
                    </a>   
                </div>
                <hr>
                <div class="row" >
                    <a href="/appts_admin_view/">
                        <button class="btn btn-lg btn-default" >
                            <b class="red">View Appartments</b>
                        </button>   
                    </a>
                </div>                
            </div>
        </div>
        
@endsection
