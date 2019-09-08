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
        <div class=""></div>
        <br>
        <form enctype="multipart/form-data" method="POST" action="/posts_create">
            @csrf
            <div class="container lt-al col-lg-12">
                <label for="name" class="col-form-label">
                    <h2>What's going on?</h2>
                </label> 
            </div>
            <div class="container col-lg-12 ct-al">
                <textarea style="width:100%;" id="name" type="textarea" class="form-control" name="post" value="post"autofocus required></textarea>
            </div>
            
            <div class="container row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <br>
                    <div class="form-group row left-space" >
                        &nbsp;&nbsp;
                       <i class="glyphicon glyphicon-paperclip"></i><input type="button" name="upload" value="Upload" onclick="getfile()"  id="myBtn">
                       &nbsp;&nbsp;
                       <button type="submit" class="btn btn-lg btn-outline-primary">
                            Post
                        </button> 
                    </div> 
                </div>
            </div>
        </form>
    <hr class="container col-lg-8">
    <div class="container">
        <br>
        <?php 
            use App\Http\Controllers\PostsController;
            echo PostsController::index();
        ?>   
    </div>
@endsection
