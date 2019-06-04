<?php

namespace App\Http\Controllers;
/*use Illuminate\Support\Facades\View;*/

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
}
