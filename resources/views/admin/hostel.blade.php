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
        <form method="GET" action="/hostels_admin_view/" >
            <input type="submit" class="btn btn-lg btn-danger" value="View Hostels">
        </form>
    </div>
    
    <div class="d-flex justify-content-center contain" style="margin-top:0;">
        <div class="contain center ">
            <div class="row contain well ">
                <h3><b class="green">New Hostel!</b></h3>
            </div>
            <hr>
            <div class="row contain well ">
                <form enctype="multipart/form-data" action="/add_h/" method="POST" class="btm-space">
                    @csrf
                    <input type="button" class=" btn btn-default" value="Hostel Pic" name="upload" onclick="getfile()"  id="myBtn">
                    <br>
                    <br>
                    <br>
                    <input class="center form-control" type="text" placeholder="Hostel Name" name="hname" autofocus required>
                    <br>
                    <label> Category</label>
                    <select class="center form-control" name="category" autofocus required>
                        <option value="Mixed Sex" >
                            Mixed Sex
                        </option>
                        <option value="Girls Only">
                            Girls Only
                        </option>
                    </select>
                    <br>
                    <input class="center form-control" type="text" placeholder="Hostel Location" name="location" required>
                    <br>
                    <input class="center form-control" type="text" placeholder="Custodian" name="custodian" required>
                    <br>
                    <input class="center form-control" type="text" placeholder="Phone" name="phone" required>
                    <br>
                    <input class="center form-control" minlength="6" type="text" placeholder="Hostel Price" name="price" required>
                    <br>
                    <input class="btn btn-md btn-success" type="submit" value="Add Hostel">
                </form>
                <br><br>
            </div>
            <hr>             
        </div>
    </div>
        
@endsection
