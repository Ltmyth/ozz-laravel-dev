<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;

use App\User;
use App\messages;
use Redirect,Response;

class CommentController extends Controller
{
    
    public static function show($post)
    {
        $post_id = $post;
        $comments = Comment::where('post', $post_id)->orderBy('id','desc')->get();
        $comenter = User::find($comments->author);

        // $comenter = User::find($comments->author);
        return view('posts.comments', ["comments" => $comments, "comenter" => $comenter, "post" => $post_id]);
    }
        
   
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

        
        //notify
        $not1 = new messages();
        $not1->author = "Notification";
        $not1->receiver = $post->author;
        $not1->message = $comenter->name." "."commented on your post";
        $not1->save();


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