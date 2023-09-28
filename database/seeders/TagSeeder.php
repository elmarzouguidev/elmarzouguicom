<?php

namespace Database\Seeders;

use App\Models\Blog\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'dev'],
            ['name' => 'network'],
            ['name' => 'vps'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
