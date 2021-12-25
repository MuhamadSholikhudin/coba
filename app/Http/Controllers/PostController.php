<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //method pulbic
    public function index(){
        return  view('blog', [
            "title" => "Blog",
            "author" => "Sholikhudin",
            "blog" => Post::all()
        ]);
    }


    public function show(Post $post)
    {
        return  view('post', [
            "title" => "Single Post",
            "author" => "Sholikhudin",

            // "blog" => Post::find($post)
            "blog" => $post
        ]);
    }
}
