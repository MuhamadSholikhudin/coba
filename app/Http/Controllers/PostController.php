<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //method pulbic
    public function index(){
        return  view('posts', [
            "title" => "Blog",
            "author" => "Sholikhudin",
            "posts" => Post::latest()->get()
        ]);
    }
    public function blog(){
        return  view('blog', [
            "title" => "Blog",
            "author" => "Sholikhudin",
            "post" => Post::latest()->get()
        ]);
    }


    public function show(Post $post)
    {
        return  view('post', [
            "title" => "Single Post",
            "author" => "Sholikhudin",

            // "blog" => Post::find($post)
            "post" => $post
        ]);
    }
}
