@extends('layouts.admin')

@section('content')
    <style type="text/css">
        #food_btn{
            background-color:#34ace0;
            color:white;
            pointer-events: none;
        }
    </style>

    <script type="text/javascript">
        function getfile(){
            var x = document.getElementById("myBtn"); 
            x.setAttribute("type", "file");
            x.setAttribute("accept", "file_extension|audio/*|video/*|image/*|media_type");
        }
    </script>

    <div class="d-flex justify-content-center contain" style="margin-top:0;">
        <div class="contain center">
            <form action="/food_admin/" method="GET">
                <input type="submit" class="btn btn-md btn-danger" value="View Providers">
            </form>
        </div>
        <div class="row contain well center ">
            <h3><b class="green">New Food Provider !</b></h3>
        </div>
        <hr>
        <div class="row contain well center">
            <form enctype="multipart/form-data" action="/add_f_provider/" method="POST" class="btm-space">
                @csrf
                <input type="button" class="btn btn-default" value="Provider Pic" name="upload" onclick="getfile()"  id="myBtn">
                <br>
                <br>
                <br>
                <input class="center form-control" type="text" placeholder="Provider Name" name="fp_name" autofocus required>
                <br>
                <input class="center form-control" type="text" placeholder="Provider Location" name="location" required>
                <br>
                <input class="center form-control" type="text" placeholder="Manager" name="manager" required>
                <br>
                <input class="center form-control" type="text" placeholder="Phone" name="phone" required>
                <br>
                <input class="center form-control" minlength="6" type="text" placeholder="Price range" name="price" required>
                <br>
                <input class="btn btn-md btn-success" type="submit" value="Add Provider">
            </form>
            <br><br>
        </div>
        <hr>             
    </div>
    <br><br>
@endsection
