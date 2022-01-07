<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about"
    ]);
});


Route::get('/blog', [PostController::class, 'blog']
    // $blog_posts = [
    //     [
    //         "judul" => "lorem 1",
    //         "slug" => "lorem-1",
    //         "penulis" => "sholikhudin",
    //         "isi" => "aku adalah lorem ipsum1"
    //     ],
    //     [
    //         "judul" => "lorem 2",
    //         "slug" => "lorem-2",
    //         "penulis" => "yudha",
    //         "isi" => "12aku adalah lorem ipsum2"],
    // ];

    // return view('blog', [
    //     "title" => "Blog",
    //     "author" => "Sholikhudin",
    //     "blog" => Post::all()
    // ]);

);


// Route::get('blog/{slug}', function ($slug) {

    // $blog_posts = [
    //     [
    //         "judul" => "lorem 1",
    //         "slug" => "lorem-1",
    //         "penulis" => "sholikhudin",
    //         "isi" => "aku adalah lorem ipsum1"
    //     ],
    //     [
    //         "judul" => "lorem 2",
    //         "slug" => "lorem-2",
    //         "penulis" => "yudha",
    //         "isi" => "12aku adalah lorem ipsum2"
    //     ],
    // ];

    // foreach($blog_posts as $post){
    //     if($post["slug"] === $slug){
    //         $new_post = $post;
    //     }
    // }
    
//     return view('post',
//         [
//             "title" => "Single Post",
//             "blog" => Post::find($slug)
//         ]
//     );
// });
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/coba', function () {

    return view('coba', 
        [
            "name" => "Sholikhudin",
            "image" => "sholikhudin.img"
        ]
    );
});


Route::get('/categories', function (Category $categori) {

    return view('categories', 
        [
            "title" => 'Post categories',
            "active" => "categories",
            "categories" => Category::all()
        ]
    );
});

// Route::get('/categories/{category:slug}', function (Category $category) {

//     return view('posts',
//         [
//             "title" => $category->name,
//             "active" => "categories",
//             "posts" => $category->posts->load('category', 'author'),
//             "category" =>  $category->name
//         ]
//     );
// });

// Route::get('/author/{author:username}', function (User $author) {

//     return view('posts',
//         [
//             "title" => "Post By Author : $author->name",
//             "active" => "posts",
//             "posts" => $author->posts->load('category', 'author')
//         ]
//     );
// });
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);