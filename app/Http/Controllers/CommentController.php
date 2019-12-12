<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
use Redirect,Response;

class CommentController extends Controller
{
    
        
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
            'post_id' => 'required',
            'comment' => 'required',
            'comment_by' => 'required'
        ]);

        $comments = new Comment();
        $comments->post = $request->post_id;
        $comments->comment = $request->comment;
        $comments->author = $request->comment_by;
        $comments->save();

        $post = Post::find($request->post_id);
        $post->comments = $post->comments+1 ;
        $post->save();

        $posts = Post::orderBy('id','desc')->get();

        return redirect('/home');
    }
    
    
    
 
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $uncomment = comment::where('post',$post_id)->delete();

        $post = Post::find($post_id);
        $post->comments = $post->comments-1 ;
        $post->save();
   
        return redirect('home');
    }
}