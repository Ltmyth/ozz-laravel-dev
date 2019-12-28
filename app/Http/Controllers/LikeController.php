<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Like;
use Redirect,Response;

class LikeController extends Controller
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
            'liked_by' => 'required'
        ]);

        $likes = new Like();
        $likes->post_id = $request->post_id;
        $likes->liked_by = $request->liked_by;

        $likes->save();

        $post = Post::find($request->post_id);
        $post->likes = $post->likes+1 ;
        $post->save();

        $posts = Post::orderBy('id','desc')->get();

        return redirect('home');


        // return Response::json($likes);
    }
    
    
    // public function edit($id)
    // {   
    //     $where = array('id' => $id);
    //     $user  = User::where($where)->first();
 
    //     return Response::json($user);
    // }
 
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $unlike = Like::where('post_id',$post_id)->delete();

        $post = Post::find($post_id);
        $post->likes = $post->likes-1 ;
        $post->save();
   
        return redirect('home');
    }
}