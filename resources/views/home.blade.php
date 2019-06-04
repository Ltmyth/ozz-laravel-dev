@extends('layouts.layout')

@section('content')
    <style type="text/css">
        #home_btn{
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
            <div class="d-flex justify-content-center contain" style="margin-top:0;">
                <div style="border-radius:2%;" class="well">
                    <form enctype="multipart/form-data" method="POST" action="/posts_create">
                        @csrf
                        <div class="row">
                           <label for="name" class="col-form-label text-md-right left">
                                <h2>What's up?</h2>
                            </label> 
                        </div>
                        <div class="row left-space">
                            <textarea style="width:80%;" id="name" type="textarea" class="form-control" name="post" value="post"autofocus required></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="left-space col-md-7">
                                <br>
                                <div class="form-group row left-space" >
                                    &nbsp;&nbsp;
                                   <i class="glyphicon glyphicon-paperclip"></i><input type="button" name="upload" value="Upload" onclick="getfile()"  id="myBtn">
                                   &nbsp;&nbsp;
                                   <button type="submit" class="btn btn-lg btn-danger">
                                        Post
                                    </button> 
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="row contain">
                    <?php 
                        use App\Http\Controllers\PostsController;
                        echo PostsController::index();
                    ?>   
                </div>
                
            </div>
@endsection
