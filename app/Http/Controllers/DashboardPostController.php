<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    // use SlugService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Post::All();
        // return Post::where('user_id', auth()->user()->id)->get();
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
             
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.posts.create'
        , [
            'categories' => Category::all()
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;

        $validatedData =  $request->validate([
            'title' => 'required',
            'slug' => ['required', 'unique:posts'],
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

if($request->file('image')){
$validatedData['image'] = $request->file('image')->store('post-image');
}
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(($request->body), 200);

        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('dashboard.posts.edit'
        , [
            'post' => $post,
             'categories' => Category::all()
        ]
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $rules =  $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ]);

if($request->slug != $post->slug){
  $rules['slug'] = 'required|unique:posts';
}

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(($request->body), 200);

        $validatedData = $request->validate($rules);

        Post::where->('id', '$post->id')
              ->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        Post:: destroy ($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
