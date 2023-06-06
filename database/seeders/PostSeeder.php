<?php

namespace Database\Seeders;

use App\Models\Blog\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            ['title' => 'Post one', 'body' => 'lorem ipusmer...'],
            ['title' => 'Post one', 'body' => 'lorem ipusmer...'],
            ['title' => 'Post one', 'body' => 'lorem ipusmer...'],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
