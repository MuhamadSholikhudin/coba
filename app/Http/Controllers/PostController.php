<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //method pulbic
    public function index(){
        return  view('posts', [
            "title" => "All Post",
            "active" => "posts",
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
            "active" => "posts",

            // "blog" => Post::find($post)
            "post" => $post
        ]);
    }
}
