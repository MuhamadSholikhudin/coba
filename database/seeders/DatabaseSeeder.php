<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // \App\Models\Post::factory(10)->create();
        // \App\Models\Category::factory(10)->create();

        // User::factory(5)->craeted();

        Category::created([
            'name' => 'Web Progamming',
            'slug' => 'Web-Progamming'
        ]);
        // Category::created([
        //     'name' => 'Web Progamming',
        //     'slug' => 'web-progamming',
        // ]);
        Category::created([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(5)->create();
    }
}
