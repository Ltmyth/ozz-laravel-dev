<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use App\messages;
use App\Share;
use Auth;
use Redirect,Response;

class ShareController extends Controller
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
            'shared_by' => 'required'
        ]);

        $shares = new Share();
        $shares->post = $request->post_id;
        $shares->shared_by = $request->shared_by;
        $shares->save();

        $x = $request->shared_by;
        $y = User::find($x);

        $user = Auth::user()->name;

        $post = Post::find($request->post_id);
        $post->shares = $post->shares+1 ;
        $post->save();

        $sharer = User::find($request->shared_by);
        $not = new messages();
        $not->author = "Notification";
        $not->receiver = $post->author;
        $not->message = $sharer->name." "." shared a post of yours";
        $not->save();

        $message = "Post Shared"
        return redirect('home')->with('message', $message);
    }
    
    
    
 
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $unshare = share::where('post',$post_id)->delete();

        $post = Post::find($post_id);
        $post->shares = $post->shares-1 ;
        $post->save();
   
        return redirect('home');
    }
}