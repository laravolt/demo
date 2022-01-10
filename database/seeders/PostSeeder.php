<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Topic;
use App\Models\Writer;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writers = Writer::all();

        Post::flushEventListeners();

        Post::factory(1000)->create()->each(function ($post) use ($writers) {
            Comment::factory(rand(0,100))->create([
               'post_id' => $post->id,
               'user_id' => $writers->random()->id,
            ]);
        });
    }
}
