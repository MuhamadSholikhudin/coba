<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    //method pulbic
    public function index(){
        // dd(request('search'));

        // $posts = Post::latest();

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'In ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'By ' . $author->name;
        }

        return  view('posts', [
            "title" => "All Post " .$title,
            "active" => "posts",
            "author" => "Sholikhudin",
            // "posts" => Post::latest()->filter()->get()
            // "posts" => $posts->get()
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(3)->withQuerystring()
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
