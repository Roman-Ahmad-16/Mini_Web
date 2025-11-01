<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\BCategory;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blog_category=BCategory::all();

        Blog::insert([
            [
                'title' => 'Learn Laravel Basics',
                'description' => 'This blog covers all the basics of Laravel framework.',
                'image' => 'uploads/blog/default1.jpg',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 1,

            ],
            [
                'title' => 'Understanding Eloquent ORM',
                'description' => 'A detailed guide on Laravel Eloquent relationships and queries.',
                'image' => 'uploads/blog/default2.jpg',
                'status' => 'draft',
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 2,

            ],
            [
                'title' => 'Mastering Blade Templates',
                'description' => 'Learn how to use Blade templating engine efficiently.',
                'image' => 'uploads/blog/default3.jpg',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 3,

            ],
            [
                'title' => 'Laravel Validation Techniques',
                'description' => 'A complete tutorial on validating forms in Laravel.',
                'image' => 'uploads/blog/default4.jpg',
                'status' => 'draft',
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 4,

            ],
            [
                'title' => 'Working with Laravel Migrations',
                'description' => 'Step-by-step guide on creating and managing database migrations.',
                'image' => 'uploads/blog/default5.jpg',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 5,

            ],
        ]);
    }
}
