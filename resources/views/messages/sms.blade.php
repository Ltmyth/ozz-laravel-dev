@extends('layouts.layout')
@section('content')
    <style type="text/css">
        #home_btn{
            background-color:orange;
            color:white;
            pointer-events: none;
        }
    </style>

  	<h2 class="mt-30"> <i class="lnr lnr-alarm orange"></i>Short Message Service</h2>
  	<hr>
    <br><br>
    <div id="new_msg" class="well center">
        <form enctype="multipart/form-data" method="POST" action="/send_sms">
            @csrf
            <div class="container col-lg-7 lt-al"> 
                <label><h4>Receiver name</h4></label> 
                <input placeholder="Theohz username" class="form-control" type="text" name="user" required>
                <hr>
                <label><h4>Receiver phone number</h4></label> 
                <input placeholder="07XX-XXX-XXX" maxlength="10" class="form-control" type="text" name="phone" required>
                <h4>-- <small class="red">OR</small>--</h4>
                <!-- <label><h4>Upload a (.csv) file of multiple receivers</h4></label>
                &nbsp;&nbsp;
                <input type="file" class="btn btn-sm btn-outline-danger" name="csv_upload" > -->
                <a href="/bulk_sms" onclick="javascript:document.getElementById('preloader').style.display='block';">
                    <button class="btn btn-lg btn-outline-danger" disabled>
                        Broadcast SMS to a list
                    </button>
                </a>

                <hr>
                <textarea placeholder="Message" type="textarea" class="form-control" name="sms" value="post"autofocus required></textarea>
                <hr>
                <button type="submit" class="btn btn-lg btn-success px100">
                    <i class="glyphicon glyphicon-send">Send</i>
                </button>
            </div>            
        </form>
    </div>  	
@endsection