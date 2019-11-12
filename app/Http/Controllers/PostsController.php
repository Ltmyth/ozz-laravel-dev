<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function index()
    {
        //model
        $posts = Post::orderBy('id','desc')->get();

        //upload
        // $contents = Storage::disk('public')->get('uploads/');

        //view with model
        return view('posts.posts')->with('posts',$posts);
    }

  

  
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
            'post' => 'required',
            'upload' => '|image|nullable|max:1999'
        ]);

        //new post
        $post = new Post();
        $post->Post_content = $request->input('post');

        if($request->hasFile('upload')){
            //filename with ext
            $uploadfile = $request->file('upload')->getClientOriginalName();
            //jhus filename
            $uploadname = pathinfo($uploadfile,PATHINFO_FILENAME);  
            //jhus ext
            $extension = $request->file('upload')->getClientOriginalExtension(); 
            //unique storage name
            $upload_storage_name = $uploadname."_".time().".".$extension; 

            //store file in public/uploads/
            $path = $request->file('upload')->storeAs('public/uploads/',$upload_storage_name);

            $post->Post_upload = $upload_storage_name;

        }
        
        $post->save();

        $message ='Post published';

        return redirect('home')->with('message', $message);
    }

   
    public function show($post)
    {
        //
        $post = Post::find($post);
        return view('posts.showpost')->with('post',$post);
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($post_id)
    {
        //
        $post = Post::find($post_id);
        if($post->Post_upload != ""){
            //delete from storage
            Storage::delete('/public/uploads'.$post->Post_upload);
        }
        $post->delete();
        $message ="Post removed";
        return redirect('home')->with('message',$message);
    }
}
