<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create()->each(function ($post) {
            Post::create([
                'title' => 'Title ' . $post->id,
                'content' => 'Content for post ' . $post->id,
                'user_id' => $post->id,
            ]);
        });
    }
}
