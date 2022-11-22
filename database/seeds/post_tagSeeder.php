<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;
use Illuminate\Support\Str;

class post_tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach($posts as $post){
            $tags = Tag::inRandomOrder()->take(rand(1,3))->get();
            $post->tags()->attach($tags);
        }
    }
}
