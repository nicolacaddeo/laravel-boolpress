<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->title = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $post->content = $faker->text();
            $post->category_id = $faker->numberBetween(1,7);
            $slug = Str::slug($post->title);
            $slug_base = $slug;
            $existingslug = Post::where('slug', $slug)->first();
            $counter = 1;
            while ($existingslug) {
                $slug = $slug_base . '_' . $counter;
                $existingslug = Post::where('slug', $slug)->first();
                $counter++;
            }
            $post->slug = $slug;
            $post->save();
        }
    }
}
