<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $title = $faker->sentence(4);

            $newPost = new Post;
            $newPost->title = $title;
            $newPost->slug = Str::slug($title);
            $newPost->content = $faker->text;

            $newPost->save();
        }
    }
}
