<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public static function index(){
        return view('posts.index');
    }
    public static function show(){
        return view('posts.show');
    }
}
