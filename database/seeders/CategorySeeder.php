<?php

namespace Database\Seeders;

use App\Models\Blog\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            ['name' => 'php'],
            ['name' => 'laravel'],
            ['name' => 'symfony'],
            ['name' => 'wordpress']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
