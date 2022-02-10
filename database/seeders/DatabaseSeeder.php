<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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

        /* User::truncate();
        Category::truncate();
        Post::truncate(); */

        $user = User::factory()->create([
            'name' => 'Jonh Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);


        /* $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae totam impedit, labore voluptates vitae natus dignissimos omnis facere nobis excepturi sint possimus! Harum nihil quo placeat amet ex laudantium odio!</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae totam impedit, labore voluptates vitae natus dignissimos omnis facere nobis excepturi sint possimus! Harum nihil quo placeat amet ex laudantium odio!</p>'
        ]); */

    }




}
