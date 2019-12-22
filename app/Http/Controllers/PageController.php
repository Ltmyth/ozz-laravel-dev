<?php

namespace App\Http\Controllers;
/*use Illuminate\Support\Facades\View;*/

use Auth;
use App\User;

// use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(){
    	return view('welcome');
    }

    public function explore(){
    	return view('pages.explore');
    }

    public function profile(){
    	return view('pages.profile');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function logout(){
        $user = Auth::id();
        $user_profile = User::find($user);
        $user_profile->status = "offline";
        $user_profile->save();
        auth()->logout();
        return redirect('/');
    }


}
