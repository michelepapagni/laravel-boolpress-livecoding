<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Category;
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
            $randomCategory = Category::inRandomOrder()->first();
            $title = $faker->sentence(4);

            $newPost = new Post;
            $newPost->category_id = $randomCategory->id;
            $newPost->title = $title;
            $newPost->slug = Str::slug($title);
            $newPost->content = $faker->text;

            $newPost->save();
        }
    }
}
