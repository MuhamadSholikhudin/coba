<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        // \App\Models\Post::factory(10)->create();
        // \App\Models\Category::factory(10)->create();

        // User::factory(5)->craeted();

        // User::created([
        //     'name' => 'Muhamad Sholikhudin'
        // ]);
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10) . '@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
