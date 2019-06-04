@extends('layouts.admin')

@section('content')
    <style type="text/css">
        #accoms_btn{
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

    <!-- right side -->
    <div class="contain center">
        <a href="/appts_admin_view/">
            <button class="btn btn-lg btn-danger">
                View Appartments
            </button>
        </a>
    </div>
    
    <div class="d-flex justify-content-center contain" style="margin-top:0;">
        <div class="contain center ">
            <div class="row contain well ">
                <h3><b class="green">New Appartment!</b></h3>
            </div>
            <hr>
            <div class="row contain well ">
                <form enctype="multipart/form-data" method="POST" action="/addz_a/" 
                 class="btm-space" >
                    @csrf
                    <input type="button" class=" btn btn-default" value="Appartment Pic" name="upload" onclick="getfile()"  id="myBtn">
                    <br>
                    <br>
                    <br>
                    <input class="center form-control" type="text" placeholder="Appartment Name" name="name" autofocus required>
                    <br>
                    <label> Category</label>
                    <select class="center form-control" name="category" autofocus required>
                        <option value="Single Bedroom" >
                            Single Bedroom
                        </option>
                        <option value="Two + Bedrooms">
                            Two + Bedrooms
                        </option>
                    </select>
                    <br>
                    <input class="center form-control" type="text" placeholder="Appartment Location" name="location" required>
                    <br>
                    <input class="center form-control" type="text" placeholder="Custodian" name="custodian" required>
                    <br>
                    <input class="center form-control" type="text" placeholder="Phone" name="phone" required>
                    <br>
                    <input class="center form-control" minlength="6" type="text" placeholder="Appartment Price" name="price" required>
                    <br>
                    <input class="btn btn-md btn-success" type="submit" value="Add Appartment">
                </form>
                <br><br>
            </div>
            <hr>             
        </div>
    </div>
        
@endsection
