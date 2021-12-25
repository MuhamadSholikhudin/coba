<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    
    static $blog_posts = [
        [
            "judul" => "lorem 1",
            "slug" => "lorem-1",
            "penulis" => "sholikhudin",
            "isi" => "aku adalah lorem ipsum1"
        ],
        [
            "judul" => "lorem 2",
            "slug" => "lorem-2",
            "penulis" => "yudha",
            "isi" => "12aku adalah lorem ipsum2"
        ],
    ];


    public static function all(){
        // return this->$blog_posts;

        // return self::$blog_posts;
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        // return this->$blog_posts;

        // $posts = self::$blog_posts;
        // $post = [];
        // foreach ($posts as $p) {
            //     if ($p["slug"] === $slug) {
                //         $post = $p;
                //     }
                // }

        
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
