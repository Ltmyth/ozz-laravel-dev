<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\messages;
use App\Dislike;
use Auth;
use Redirect,Response;

class dislikeController extends Controller
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
            'disliked_by' => 'required'
        ]);

        $dislikes = new Dislike();
        $dislikes->post = $request->post_id;
        $dislikes->disliked_by = $request->dislike_by;

        $user= Auth::user()->name;

        $dislikes->save();

        $post = Post::find($request->post_id);
        $post->dislikes = $post->dislikes+1 ;
        $post->save();

        //notify
        $not = new messages();
        $not->author = "Notification";
        $not->receiver = $user;
        $not->message = "Someone disliked a post of yours";
        $not->save();

        return redirect('home');
    }
    
    
    
 
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $undislike = dislike::where('post',$post_id)->delete();

        $post = Post::find($post_id);
        $post->dislikes = $post->dislikes-1 ;
        $post->save();
   
        return redirect('home');
    }
}