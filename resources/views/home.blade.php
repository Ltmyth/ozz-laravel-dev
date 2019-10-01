@extends('layouts.layout')

@section('content')
    <style type="text/css">
        #home_btn{
            background-color:#5f27cd;
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
        function comment(){
            var x = document.getElementById("comment_btn");
            var y = document.getElementById("comment");
            x.setAttribute("style", "background:green");
            if(y.style.display == 'none'){
                y.setAttribute("style", "display:inline");
                y.setAttribute("style", "color:white");
            }else{
                y.setAttribute("style", "display:none");
            }
        }
    </script>

        <!-- right side -->
        <br>
        <form enctype="multipart/form-data" method="POST" action="/posts_create">
            @csrf
            <div class="container lt-al row">
                <div class="col-lg-2"></div>
                <div class="col-lg-9">
                     <label for="name" class="col-form-label">
                        <h2><b>What's going on</b>?</h2>
                    </label> 
                    <br>
                    <textarea style="width:100%;" id="name" type="textarea" class="form-control" name="post" value="post"autofocus required></textarea>
                </div>
            </div>            
            <div class="container row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <br>
                    <div class="form-group row left-space" >
                        &nbsp;&nbsp;
                       <big><i class="lnr lnr-paperclip"></i></big><input type="button" name="upload" value="Upload" onclick="getfile()"  id="myBtn">
                       &nbsp;&nbsp;
                        <button type="submit" class="btn btn-lg btn-outline-primary">
                            <i class="lnr lnr-cloud-upload">Post</i> 
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
