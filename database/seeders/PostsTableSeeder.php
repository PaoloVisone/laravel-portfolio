<?php

namespace Database\Seeders;

// Post
use App\Models\Post;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Faker
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $newPost = new Post();

            $newPost->title = $faker->sentence();
            $newPost->author = $faker->name();
            $newPost->category = $faker->word();
            $newPost->content = $faker->paragraph(5);

            $newPost->save();
        }
    }
}
